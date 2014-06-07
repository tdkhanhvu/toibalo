<?php
/*$file = fopen("C:\\Users\\user\\Desktop\\vu.txt", "w");

fwrite($file,$type);
fclose($file);
$_SESSION['views']=1;
*/
//
if (!isset($_SESSION['select_advice']))
    $_SESSION['select_advice']= array();
if (!isset($_SESSION['like_advice']))
    $_SESSION['like_advice']= array();

if (!isset($_SESSION['select_food']))
    $_SESSION['select_food']= array();
if (!isset($_SESSION['like_food']))
    $_SESSION['like_food']= array();

if (!isset($_SESSION['select_attraction']))
    $_SESSION['select_attraction']= array();
if (!isset($_SESSION['like_attraction']))
    $_SESSION['like_attraction']= array();
if (!isset($_SESSION['NumOfDay']))
    $_SESSION['NumOfDay']= 1;

if (!isset($_SESSION['cost'])){
    $_SESSION['cost'] = array();
    $arr = array('vehicle','accommodation','food','transport','personal_expense','other');

    foreach ($arr as $temp) {
        $_SESSION['cost'][$temp] = array();
        $_SESSION['cost'][$temp]['element'] = array();
        $_SESSION['cost'][$temp]['totalCost'] = 0;

        if ($temp != 'other') {
            $_SESSION['cost'][$temp]['single'] = true;
            array_push($_SESSION['cost'][$temp]['element'], 'nocost');
        }
        else $_SESSION['cost'][$temp]['single'] = false;
    }
}

function GetData($name) {
    $arr =  GetDataFromJsonFile($name);

    foreach ($arr as $key => $value) {
        if (in_array($key, $_SESSION['select_' . $name]))
            $arr[$key]['select'] = true;
        else
            $arr[$key]['select'] = false;

        if (in_array($key, $_SESSION['like_' . $name]))
            $arr[$key]['like'] = true;
        else
            $arr[$key]['like'] = false;
    }

    return $arr;
}

function GetDataFromJsonFile($name) {
    $file = file_get_contents(JPATH_COMPONENT."/../com_data/" . $name . ".json");
    return json_decode($file,true);
}

function GetStartCityData() {
    return GetDataFromJsonFile("city");
}

function GetEndCityData() {
    return GetDataFromJsonFile("city");
}

function GetStartTransportData() {
    $arr = GetDataFromJsonFile("transport");

    return $arr['depart'];
}

function GetEndTransportData() {
    $arr = GetDataFromJsonFile("transport");

    return $arr['return'];
}

function GetAdviceData() {
    return GetData('advice');
}

function GetFoodData() {
    return GetData('food');
}

function GetAttractionData() {
    return GetData('attraction');
}

function GetAttractionById($id) {
    $arr = GetAttractionData();

    foreach ($arr as $key => $value) {
        if ($key == $id) {
            echo json_encode($arr[$key], JSON_UNESCAPED_UNICODE);
            return;
        }
    }
}

function GetAttractionByIdPHP($id) {
    $arr = GetAttractionData();

    foreach ($arr as $key => $value) {
        if ($key == $id)
            return $arr[$key];
    }
}

function GetAdviceByIdPHP($id) {
    $arr = GetAdviceData();

    foreach ($arr as $key => $value) {
        if ($key == $id)
            return $arr[$key];
    }
}

function GetFoodByIdPHP($id) {
    $arr = GetFoodData();

    foreach ($arr as $key => $value) {
        if ($key == $id)
            return $arr[$key];
    }
}

function GetMonthInfoData() {
    return GetDataFromJsonFile("month_info");
}

function GetCostData() {
    return GetDataFromJsonFile("cost");
}
function SetTransport($transport, $direction) {
    $_SESSION[$direction] = $transport;

    echo 'Choose ' .  $transport . ' for ' . $direction;
}

function SetDay($startDay, $endDay) {
    $_SESSION['StartDay'] = $startDay;
    $_SESSION['EndDay'] = $endDay;

    echo 'Choose Start day ' .  $startDay . ' and end day ' . $endDay;
}

function SetCost($category, $option, $totalCost) {
    $cost_object = $_SESSION['cost'][$category];

    if ($option != '') {
        if ($cost_object['single'])
        {
            $cost_object['element'] = array();
            array_push($cost_object['element'],$option);
            echo "You select " . $option . " total cost is " .$totalCost;
        }
        else
        {
            $index = array_search($option, $cost_object['element']);

            if ($index !== FALSE) {
                unset($cost_object['element'][$index]);
                echo "You deselect " . $option . " total cost is " .$totalCost;
            }
            else
            {
                array_push($cost_object['element'],$option);
                echo "You select " . $option . " total cost is " .$totalCost;
            }

            unset($index);
        }
    }
    else echo "Change Total cost for " . $category . " to " . $totalCost;

    $cost_object['totalCost'] = $totalCost;
    $_SESSION['cost'][$category] = $cost_object;

    echo print_r($_SESSION['cost'][$category]);
    unset($cost_object);
}

function SetNumOfDay($day){
    $_SESSION['NumOfDay']= $day;
    echo "You have selected " .$day . " days";
}
if (isset($_POST['request'])) {
    if($_POST['request'] == 'GetAttractionById')
        GetAttractionById($_POST['id']);
    else if ($_POST['request'] == 'SetTransport')
        SetTransport($_POST['transport'], $_POST['direction']);
    else if ($_POST['request'] == 'SetDay')
        SetDay($_POST['StartDay'], $_POST['EndDay']);
    else if ($_POST['request'] == 'SetCost')
        SetCost($_POST['Category'],$_POST['Choice'],$_POST['TotalCost']);
    else if ($_POST['request'] == 'SetNumOfDay')
            SetNumOfDay($_POST['NumOfDay']);
}

else if (isset($_POST['type'])) {
    $type = $_POST['type'];
    $id = $_POST['id'];
    $action = $_POST['action'];
    $source = $_POST['source'];

    switch($type) {
        case "attraction":
        case "advice":
        case "food":
            echo ProcessAdvice($type, $source, $action, $id);
            break;
        default:
            break;
    }
}

function ProcessAdvice($type, $source, $action, $id) {
    switch ($action) {
        case "add":
            return Add($type, $source, $id);
            break;

        case "remove":
            return Remove($type, $source, $id);
            break;
    }

    return "Unknown error!";
}

function Add($type, $arr_name, $id) {
    $arr = $_SESSION[$arr_name. '_' . $type];

    if(!in_array($id, $arr)) {
        array_push($arr, $id);
        $_SESSION[$arr_name. '_' . $type] = $arr;
        return GetMessage($type, $arr_name, "add", "successfully");
    }

    return GetMessage($type, $arr_name, "add", "unsuccessfully");
}

function Remove($type, $arr_name, $id) {
    $arr = $_SESSION[$arr_name. '_' . $type];
    $index = array_search($id, $arr);

    if ($index !== FALSE) {
        unset($arr[$index]);
        $_SESSION[$arr_name. '_' . $type] = $arr;
        return GetMessage($type, $arr_name, "remove", "successfully");
    }
    return GetMessage($type, $arr_name, "remove", "unsuccessfully");
}

function GetMessage($type, $source, $action, $status) {
    $msg = $type;
    $msg = $msg. " has been " . ($source=="select" ? ($action == "add" ? "selected": "unselected" ):($action == "add" ? "liked": "unliked" ));
    $msg = $msg. " " .$status;

    return $msg;
}
?>