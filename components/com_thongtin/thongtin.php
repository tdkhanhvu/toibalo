<?php
/** Toi Ba Lo */
defined('_JEXEC') or die;
include JPATH_COMPONENT."/../com_data/data.php";
$session =& JFactory::getSession();
?>

<a class="avatar-fix avatar-fix-to-left" href="?option=com_lichtrinh"><span class="glyphicon glyphicon-circle-arrow-left"></span></a>
<!-- search -->
<style>
    .transport_detail > div > img {
        width: 80%;
    }

    @media (max-width: 900px) {
        .container, .tbl_content{
            margin-left:0px;
            margin-right;0px;
        }
    }


    .itinerary_info:last-child {
        text-align:right;
    }

    @media (max-width: 768px) {
        .itinerary_info:last-child {
            text-align:left;
        }
    }

    .section_head {
        margin-left:0px;
        overflow:hidden;
    }

    .section_head div:first-child {
        background-color: #075e8b;
        height:50px;
        width:300px;
        float:left;
        font-size:250%;
        border-top-left-radius:15px;
        border-top-right-radius:15px;
        moz-border-top-left-radius:15px;
        moz-border-top-right-radius:15px;
    }

    .section_head div:first-child p {
        color:white;
        text-align:left;
        padding-top:20px;
        padding-left:20px;
    }
    .section_head div:last-child
    {
        background-color: rgba(4, 163, 157, 0.91);
        height:20px;width:100%;
        margin-top:-20px;
        float:left;
        margin-left:300px;
    }

    .itinerary_info {
        text-align:left;
        padding-top:20px;
    }
    .transport {
        margin-left:0px;
        padding-top:10px;
        text-align: left;
    }

    .transport > span {
        font-size:2em;
    }

    .transport > div{
        padding-left:50px;
    }

    .transport div:first-of-type {
        padding-bottom:30px;
        padding-top:20px;
    }

    .transport div span:first-child{
        font-size:150%;
    }

    .transport div span:last-child{
        font-size:300%;
    }

    .box_title {
        font-size:25px;
    }
    .box_comment {
        font-size:15px;
        text-align:center;
    }

    .box_content {
        min-height: 0px;
    }
    .span1, .span2, .span3, .span5, .span6, .span7, .span8, .span9, .span10, .span11, .span12{
        margin-left:0px;
    }

    .advice {
        margin-top:10px;
        margin-bottom:10px;
    }

    .advice > div:first-child {
        margin-right:20px;
    }

    .advice > div:last-child {
        text-align: justify;
        padding-top:10px;
    }

    .advice > div:last-child > p:first-child {
        font-weight:bold;
        font-size:x-large;
        margin-bottom:10px;
    }

    .attraction_point {
        position:absolute;
        color: rgb(43, 7, 185);
        z-index: 99;
        font-weight: bolder;
        font-size: xx-large;
        background-color: red;
        border-radius: 15px;
        -moz-border-radius: 15px;
    }

    .attraction {
        margin-top:10px;
        margin-bottom:30px;
        margin-left:0px;
    }

    .attraction > div:first-child {
        margin-right:20px;
    }

    .attraction > div:nth-child(2) {
        text-align:justify;
        margin-top:10px;
    }

    .attraction > div:nth-child(2) > p:first-child
    {
        font-weight:bold;
        font-size:x-large;
        margin-bottom:10px;
    }

    .attraction > div:nth-child(2) > p:nth-child(2)
    {
        font-size:large;
        margin-bottom:10px;
    }

    .attraction > div > div
    {
        font-size:14px;
        line-height:18px;
        text-align:justify;
        margin:0px;
    }

    .attraction > div > div > p > img
    {
        height:25px;
        width:25px;
    }

    .cost
    {
        font-size:x-large;
        margin-left:0px;
        margin-right:20px;
    }

    .cost > table
    {
        padding:10;
    }

    .cost > table tr {
        line-height:40px;
    }

    .cost > table tr > td:first-child {
        padding-left:50px;
        text-align: left;
        width:50%;
    }
    .cost > table th{
        font-weight: bold;
    }

    .cost > table tr:first-child > td:first-child {
        padding-left:20px;
    }

    .cost > table tr > td:nth-child(2), .cost > table tr > th:nth-child(2) {
        text-align: right;
        width:50%;
    }

    .moreinfo {
        font:normal;
        /*margin-left:20px;*/
        margin-top:20px;
        line-height:100%;
        text-align: justify;
    }
</style>

    <div class="span12">
        <div class="span2" style="text-align:left;margin-left:0px;"><img width="145px" src="./templates/green/images/logo.png"/></div>
    </div>

    <!--    Lịch Trình-->
    <div class="span12">
        <div class="span12 section_head">
            <div>
                <p>Lịch Trình</p>

            </div>
            <div><button type="button" class="btn btn-success" style="position:relative;top:-15px;" onclick="PopUpFeedback('Thông Tin','Lịch Trình');">Phản Hồi</button></div>
        </div>

        <div class="span3 itinerary_info"><span>Mã Số</span><span>S59I2P</span></div>
        <div class="span9 itinerary_info"><span>Ngày Đặt</span><span><?php echo $session->get('BookingDay');?></span></div>
    </div>

    <!--    Chiều Đi-->
    <div class="span12">

        <div class="span12 section_head">
            <div>
                <p>Chiều Đi</p>
            </div>
            <div><button type="button" class="btn btn-success" style="position:relative;top:-15px;" onclick="PopUpFeedback('Thông Tin','Chiều Đi');">Phản Hồi</button></div>
        </div>
        <div class="span4 transport">
            <span><?php echo $session->get('StartDay');?></span>
            <div>
                <span>Từ</span>
                <span><?php echo GetStartCity();?></span>
            </div>
            <div>
                <span>Tới</span>
                <span>Hồ Chí Minh</span>
            </div>
        </div>
        <div class="span8 transport_detail">
            <?php
            $transport_info = GetStartTransportData();
            $transport_start = $transport_info[$session -> get('transport_start')];
            ?>
            <div>
                <img src="./templates/green/images/transport/<?php echo $transport_start['image_url']?>"/>
            </div>
            <div>
                <p><?php echo $transport_start['description']?></p>
            </div>
        </div>
        <div style="clear:both;"></div>
    </div>

    <!--    Chiều Về-->
    <div class="span12">

        <div class="span12 section_head">
            <div>
                <p>Chiều Về</p>
            </div>
            <div><button type="button" class="btn btn-success" style="position:relative;top:-15px;" onclick="PopUpFeedback('Thông Tin','Chiều Về');">Phản Hồi</button></div>
        </div>
        <div class="span4 transport">
            <span><?php echo $session->get('EndDay');?></span>
            <div>
                <span>Từ</span>
                <span>Hồ Chí Minh</span>
            </div>
            <div>
                <span>Tới</span>
                <span><?php echo GetEndCity();?></span>
            </div>
        </div>
        <div class="span8 transport_detail">
            <?php
            $transport_info = GetEndTransportData();
            $transport_end = $transport_info[$session -> get('transport_end')];
            ?>
            <div>
                <img src="./templates/green/images/transport/<?php echo $transport_end['image_url']?>"/>
            </div>
            <div>
                <p><?php echo $transport_end['description']?></p>
            </div>
        </div>
        <div style="clear:both;"></div>
    </div>

<!-- Ẩm Thực -->
<div class="span12">
    <div class="span12 section_head">
        <div>
            <p>Ẩm Thực</p>
        </div>
        <div><button type="button" class="btn btn-success" style="position:relative;top:-15px;" onclick="PopUpFeedback('Thông Tin','Ẩm Thực');">Phản Hồi</button></div>
    </div>

    <?php
        $arr = $session -> get('select_food');
        $i = 0;
        foreach($arr as $food) {
            $temp = GetFoodByIdPHP($food);

            echo '<div class="span4" style="margin-bottom:20px;'.($i % 3 == 0? 'margin-left:0px;':'').'">';
            echo '<div class="box_title">'.$temp["name"].'</div>';
            echo '<div class="box_content">';
            echo '<div class="box_image">';
            echo '   <img class="img-responsive" src="./templates/green/images/'.$temp["image_url"].'"/>';
            echo '</div>';
            echo '<div class="box_comment">'.$temp["address"].'</div>';
            echo '</div>';
            echo '</div>';
            $i++;
        }
    ?>
    <div class='clearfix'></div>
</div>

<div class="span12">
    <div class="span12 section_head">
        <div>
            <p>Lời Khuyên</p>
        </div>
        <div><button type="button" class="btn btn-success" style="position:relative;top:-15px;" onclick="PopUpFeedback('Thông Tin','Lời Khuyên');">Phản Hồi</button></div>
    </div>
    <?php
        $arr = $session -> get('select_advice');
        foreach($arr as $attraction) {
            $temp = GetAdviceByIdPHP($attraction);
            echo '<div class="span12 advice">';
            echo '<div class="'.$temp["icon"].' span1"></div>';
            echo '<div class="span10">';
            echo '<p>'.$temp["name"].'</p>';
            echo '<p>'.$temp["content"].'</p>';
            echo '</div>';
            echo '</div>';
        }
    ?>

    <div style="clear:both"></div>
</div>

<div class="span12">
    <div class="span12 section_head">
        <div>
            <p>Tham Quan</p>
        </div>
        <div><button type="button" class="btn btn-success" style="position:relative;top:-15px;z-index:9999;" onclick="PopUpFeedback('Thông Tin','Tham Quan');">Phản Hồi</button></div>
    </div>

    <div style="position:relative" class="col-xs-12">
<!--        <span class="attraction_point" style="top:335px;left:343px;">1</span>-->
        <img src="./templates/green/images/attraction/sai_gon_map.jpg" class="img-responsive thumbnail"/>
        <?php
            $arr = $session -> get('select_attraction');
            $temp = array();
            $i = 1;
            foreach($arr as $attraction) {
                $temp[$attraction] = GetAttractionByIdPHP($attraction);
                echo '<span class="attraction_point" style="top:'.$temp[$attraction]["top"].';left:'.$temp[$attraction]["left"].';">'.$i.'</span>';
                $i++;
            }
        ?>

    </div>


    <?php
    $i = 1;
    foreach($temp as $attraction) {
        echo '<div class="span12 attraction">';
        echo '<div class="span2"><img class="img-responsive" src="./templates/green/images/'.$attraction["image_url"].'"/></div>';
        echo '<div class="span10">';
        echo '  <p>'.$i.') '.$attraction["name"].'</p>';
        echo '   <p>'.$attraction["description"].'</p>';
        echo '<div class="span5"><p><img src="./templates/green/images/icon/time.png"/> <b id="attraction_hour">'.$attraction["hour"].'</b></p></div>';
        echo '   <div class="span4"><p><img src="./templates/green/images/icon/price.png"> <b id="attraction_price">'.$attraction["price"].'</b></p></div>';
        echo '   <div class="span5"><p><img src="./templates/green/images/icon/address.png"> <b id="attraction_address">'.$attraction["address"].'</b></p></div>';
        echo '  <div class="span4"><p><img src="./templates/green/images/icon/phone.png"> <b id="attraction_phone">'.$attraction["address"].'</b></p></div>';
        echo '</div>';
        echo '<div style="clear:both"></div>';
        echo '</div>';
        $i++;
    }
    ?>

</div>

<div class="span12">
    <div class="span12 section_head">
        <div>
            <p>Chi Phí <?php echo $session -> get('NumOfDay');?> Ngày</p>
        </div>
        <div><button type="button" class="btn btn-success" style="position:relative;top:-15px;" onclick="PopUpFeedback('Thông Tin','Chi Phí');">Phản Hồi</button></div>
    </div>

    <div class="span4 cost">
        <table>
            <tr>
                <th>Tổng Chi Phí</th>
                <?php
                    $arr = $session -> get('cost');
                    $total_cost = 0;

                    foreach ($arr as $key => $value) {
                        $total_cost += $value["totalCost"];
                    }


                ?>
                <th><?php echo number_format($total_cost*1000);?></th>
            </tr>

            <?php
                $temp = GetCostData();

                foreach ($arr as $key => $value) {
                    echo'<tr>';
                    echo '<td>'.$temp[$key]["name"].'</td>';
                    echo '<td>'.number_format($value["totalCost"]*1000).'</td>';
                    echo '</tr>';
                }
            ?>
        </table>
    </div>
    <div class="span8 moreinfo">
        <?php
        $temp = GetCostData();

        foreach ($arr as $key => $value) {
            if ($temp[$key]["info"] != '')
                echo '<p style="margin-bottom:10px;">'.$temp[$key]["info"].'</td>';

            foreach($value["element"] as $key_temp => $value_temp) {
                if ($temp[$key]["type"][$value_temp]["info"] != '')
                    echo '<p style="margin-bottom:10px;">'.$temp[$key]["type"][$value_temp]["info"].'</td>';
            }
        }
        ?>
    </div>
    <div style="clear:both"></div>
</div>
