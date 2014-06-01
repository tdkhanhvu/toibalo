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

    return $arr["depart"];
}

function GetEndTransportData() {
    $arr = GetDataFromJsonFile("transport");

    return $arr["return"];
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

if (isset($_POST["request"]) && $_POST["request"] == 'GetAttractionById') {
    GetAttractionById($_POST["id"]);
}

else if (isset($_POST["type"])) {
    $type = $_POST["type"];
    $id = $_POST["id"];
    $action = $_POST["action"];
    $source = $_POST["source"];

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