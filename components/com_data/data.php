<?php
$session =& JFactory::getSession();

if (!($session->has('select_advice')))
    $session->set('select_advice', array());
if (!($session->has('like_advice')))
    $session->set('like_advice', array());

if (!($session->has('select_food')))
    $session->set('select_food', array());
if (!($session->has('like_food')))
    $session->set('like_food', array());

if (!($session->has('select_attraction')))
    $session->set('select_attraction', array());
if (!($session->has('like_attraction')))
    $session->set('like_attraction', array());

if (!($session->has('NumOfDay')))
    $session->set('NumOfDay', 1);

if (!($session->has('cost'))){
    $cost = array();
    $arr = array('vehicle','accommodation','food','transport','personal_expense','other');

    foreach ($arr as $temp) {
        $cost[$temp] = array();
        $cost[$temp]['element'] = array();
        $cost[$temp]['totalCost'] = 0;

        if ($temp != 'other') {
            $cost[$temp]['single'] = true;
            array_push($cost[$temp]['element'], 'nocost');
        }
        else $cost[$temp]['single'] = false;
    }

    $session->set('cost', $cost);
}

if (!($session->has('StartDay'))) {
    $session->set('StartDay', date("d/m/Y"));
    $session->set('EndDay', date("d/m/Y", strtotime("+5 days")));
}

if (!($session->has('StartCity'))) {
    $session->set('StartCity', 'Ha_Noi');
    $session->set('EndCity', 'Ha_Noi');
}

if (!($session->has('transport_start'))) {
    $session->set('transport_start', 'plane');
    $session->set('transport_end', 'plane');
}

function GetData($name) {
    $session =& JFactory::getSession();
    $arr =  GetDataFromJsonFile($name);

    foreach ($arr as $key => $value) {
            if (in_array($key, $session->get('select_' . $name)))
                $arr[$key]['select'] = true;
            else
                $arr[$key]['select'] = false;

        if ($session ->has('like_' . $name)) {
            if (in_array($key, $session->get('like_' . $name)))
                $arr[$key]['like'] = true;
            else
                $arr[$key]['like'] = false;
        }
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
            echo json_encode($value, JSON_UNESCAPED_UNICODE);
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
    $session =& JFactory::getSession();
    $session->set($direction, $transport);

    echo 'Choose ' .  $transport . ' for ' . $direction;
}

function SetDay($startDay, $endDay) {
    $session =& JFactory::getSession();
    $session->set('StartDay', $startDay);
    $session->set('EndDay', $endDay);

    echo 'Choose Start day ' .  $startDay . ' and end day ' . $endDay;
}

function SetCost($category, $option, $totalCost) {
    $session =& JFactory::getSession();
    $arr = $session->get('cost');
    $cost_object = $arr[$category];

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
    }

    $cost_object['totalCost'] = $totalCost;
    $arr[$category] = $cost_object;
    $session->set('cost', $arr);
}

function SetNumOfDay($day){
    $session =& JFactory::getSession();
    $prevDay = $session -> get('NumOfDay');

    $arr = $session->get('cost');

    foreach($arr as $category => $cost_object) {
        if ($category != 'vehicle' && $category != 'other') {
            $cost_object['totalCost'] = $cost_object['totalCost'] / $prevDay * $day;
            $arr[$category] = $cost_object;
            echo "Change Total cost for " . $category . " to " . $cost_object['totalCost'];
        }
    }
    $session->set('cost', $arr);

    $session -> set('NumOfDay',$day);
    echo "You have selected " .$day . " days";
}

function SetCity($city, $direction) {
    $session =& JFactory::getSession();
    $session -> set($direction.'City',$city);

    echo 'Set ' . $direction.'City' . ' to ' . $city;
}

function GetStartCity() {
    $session =& JFactory::getSession();
    $startCity = $session -> get('StartCity');
    $arr = GetStartCityData();

    foreach ($arr as $key => $value) {
        if ($key == $startCity)
            return $arr[$key];
    }
}

function GetEndCity() {
    $session =& JFactory::getSession();
    $endCity = $session -> get('EndCity');
    $arr = GetEndCityData();

    foreach ($arr as $key => $value) {
        if ($key == $endCity)
            return $arr[$key];
    }
}

function SetBookingDay($date) {
    $session =& JFactory::getSession();
    $session -> set('BookingDay',$date);

    echo 'Set booking day to ' . $date;
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
    else if ($_POST['request'] == 'SetCity')
        SetCity($_POST['city'],$_POST['direction']);
    else if ($_POST['request'] == 'SetBookingDay')
        SetBookingDay($_POST['date']);
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
    $session =& JFactory::getSession();
    $arr = $session -> get($arr_name. '_' . $type);

    if(!in_array($id, $arr)) {
        array_push($arr, $id);
        $session -> set($arr_name. '_' . $type, $arr);
        return GetMessage($type, $arr_name, "add", "successfully");
    }

    return GetMessage($type, $arr_name, "add", "unsuccessfully");
}

function Remove($type, $arr_name, $id) {
    $session =& JFactory::getSession();
    $arr = $session -> get($arr_name. '_' . $type);
    $index = array_search($id, $arr);

    if ($index !== FALSE) {
        unset($arr[$index]);
        $session -> set($arr_name. '_' . $type, $arr);
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