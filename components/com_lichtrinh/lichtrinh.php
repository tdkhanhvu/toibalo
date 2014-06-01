<?php
/** Toi Ba Lo */
defined('_JEXEC') or die;

?>

<style type="text/css">
    .vote-icon {
        width:20px;
        height:20px;
        padding:3px;
        z-index: 9999;
    }

    .unclicked {
        opacity:0.4;
        filter:alpha(opacity=40); /* For IE8 and earlier */
    }

    .vote-div img{
        border: 5px solid green;
    }

    #st-food div.title {
        margin:0px;
        font-size: 130%;
        color: #112FA7;
    }

    #st-food img {
        border: 5px solid green;
    }

    #st-food .span3 > div > img {
        width:95%;
    }
    #transport_start > li > a > div, #transport_end > li > a > div, #attraction_list > li > a > div   {
        width:50px;
        height:50px;
        background-size: cover;
    }

    @media (max-width: 400px) {
        #transport_start > li > a, #transport_end > li > a, #attraction_list > li > a {
            width:50px;
            height:50px;
            background-size: cover;
            padding:0px;
        }
    }

    @media (max-width: 600px) {
        .ip_slide {
            display:none;
        }
    }
    li img {
        width:80px;
        height:80px;
    }

    div .cost_title {
        text-align:left;
        font-size: 40px;
        color: palevioletred;
        font-family: 'Times New Roman';
        margin: 10px 0px;
    }

    .cost {
        text-align:right;
        font-size: 40px;
        color: lightseagreen;
    }

    @media (max-width: 400px) {
        .gross_sum {
            display:none;
        }

        li img {
            width:40px;
            height:40px;
        }

        div .cost_title {
            font-size: 30px;
        }

        .cost {
            font-size: 30px;
        }
    }
    .span1, .span11 {
        margin-left:0px;
    }
</style>

<div id="avatar-full-1-block">
<div class="content block-default-width">
<div class="avatar-module ">
<div class="module-content">
<div class="custom">
<div class="st-onepage">
<div class="st-projects onepage-appear" position="item-104">
<h1 class="st-heading">Thời Điểm</h1>
<div class="st-sub-heading">Thông Tin Cần Thiết Về Chuyến Đi</div>
    <div class="span6 offset3">
        <p style="width:230px;float:left">Thời gian đi</p>
        <div style="float:left" id="widget">
            <div id="widgetField">
                <span>28 July, 2008 &divide; 31 July, 2008</span>
                <a href="#">Select date range</a>
            </div>
            <div id="widgetCalendar" style="z-index:999;">
            </div>
        </div>
        <div style="clear:both"></div>
    </div>
    <div class="panel-group span12" id="accordion" style="margin-top:20px;">
        <div class="span6" style="margin-left:0px;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a id="a1" data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="collapsed">
                            <div style="width:50px;float:left;margin-top:20px;">1</div>
                            <div style="width:50px;height:50px;float:left"><p class="icon-sun weathericon" style="margin-top: -30px"></p></div>
                            <div style="width:50px;height:50px;background-size:cover;background-image: url('./templates/green/images/crowded/red_star.png');float:left;"></div>
                            <div style="width:50px;height:50px;background-size:cover;background-image: url('./templates/green/images/money/high.png');float:left;"></div>
                            <div style="clear:both;"></div>
                        </a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse" style="width:95%;background-color:rgb(240, 223, 225);border:0px groove #FAB6C3;">
                    <div class="panel-body">
                        <div class="parent">
                            <p class="weather child">Thời tiết khô và nóng, có khi lên tới 39 độ vào ban ngày.
                                Du khách được khuyến cáo không nên ra đường vào bữa trưa</p>
                        </div>
                        <div class="parent">
                            <p class="info child">Thời gian giữa tết tây và tết ta nên lượng du khách đổ tới Sài Gòn khá đông</p>
                        </div>
                        <div class="parent">
                            <p class="info child">Giá cả khá là đắt đỏ, tăng gấp rưỡi so với các tháng khác</p>
                        </div>
                    </div>
                </div>
                <div style="clear:both"></div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a id="a2" data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed">
                            <div style="width:50px;float:left;margin-top:20px;">2</div>
                            <div style="width:50px;height:50px;float:left"><p class="icon-sun weathericon" style="margin-top: -30px"></p></div>
                            <div style="width:50px;height:50px;background-size:cover;background-image: url('./templates/green/images/crowded/red_star.png');float:left;"></div>
                            <div style="width:50px;height:50px;background-size:cover;background-image: url('./templates/green/images/money/high.png');float:left;"></div>
                            <div style="clear:both;"></div>
                        </a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse" style="width:95%;background-color:rgb(231, 203, 236);border:0px groove #E094EE;">
                    <div class="panel-body">
                        <div class="parent">
                            <p class="weather child">Thời tiết bắt đầu đỡ hơn so với tháng Giêng.</p>
                        </div>
                        <div class="parent">
                            <p class="info child">Đa phần du khách tới Sài Gòn vào mùa này để tận hưởng Tết Cổ Truyền</p>
                        </div>
                        <div class="parent">
                            <p class="info child">Giá cả leo thang, đắt gấp đôi trong năm</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a id="a3" data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed">
                            <div style="width:50px;float:left;margin-top:20px;">3</div>
                            <div style="width:50px;height:50px;float:left"><p class="icon-sun weathericon" style="margin-top: -30px"></p></div>
                            <div style="width:50px;height:50px;background-size:cover;background-image: url('./templates/green/images/crowded/yellow_star.png');float:left;"></div>
                            <div style="width:50px;height:50px;background-size:cover;background-image: url('./templates/green/images/money/medium.png');float:left;"></div>
                            <div style="clear:both;"></div>
                        </a>
                    </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse" style="width:95%;background-color:rgb(220, 212, 236);border:0px groove #AE8FBD;">
                    <div class="panel-body">
                        <div class="parent">
                            <p class="weather child">Khí hậu bớt oi bức, bắt đầu xuất hiện vài cơn mưa lất phất</p>
                        </div>
                        <div class="parent">
                            <p class="info child">Sau đợt tết, du khách bắt đầu trở về nước</p>
                        </div>
                        <div class="parent">
                            <p class="info child">Giá cả bắt đầu trở lại mức trong năm</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a id="a4" data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="collapsed">
                            <div style="width:50px;float:left;margin-top:20px;">4</div>
                            <div style="width:50px;height:50px;float:left"><p class="icon-sun weathericon" style="margin-top: -30px"></p></div>
                            <div style="width:50px;height:50px;background-size:cover;background-image: url('./templates/green/images/crowded/yellow_star.png');float:left;"></div>
                            <div style="width:50px;height:50px;background-size:cover;background-image: url('./templates/green/images/money/medium.png');float:left;"></div>
                            <div style="clear:both;"></div>
                        </a>
                    </h4>
                </div>
                <div id="collapse4" class="panel-collapse collapse" style="width:95%;background-color:rgb(207, 234, 247);border:0px groove #6882D3;">
                    <div class="panel-body">
                        <div class="parent">
                            <p class="weather child">Trời mát, hay xuất hiện mưa buổi chiều</p>
                        </div>
                        <div class="parent">
                            <p class="info child">Đợt không cao điểm trong năm cho du lịch</p>
                        </div>
                        <div class="parent">
                            <p class="info child">Giá cả bắt đầu trở lại mức trong năm</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a id="a5" data-toggle="collapse" data-parent="#accordion" href="#collapse5" class="collapsed">
                            <div style="width:50px;float:left;margin-top:20px;">5</div>
                            <div style="width:50px;height:50px;float:left"><p class="icon-sun weathericon" style="margin-top: -30px"></p></div>
                            <div style="width:50px;height:50px;background-size:cover;background-image: url('./templates/green/images/crowded/green_star.png');float:left;"></div>
                            <div style="width:50px;height:50px;background-size:cover;background-image: url('./templates/green/images/money/medium.png');float:left;"></div>
                            <div style="clear:both;"></div>
                        </a>
                    </h4>
                </div>
                <div id="collapse5" class="panel-collapse collapse" style="width:95%;background-color:rgb(150, 233, 210);border:0px groove #32C5B4;">
                    <div class="panel-body">
                        <div class="parent">
                            <p class="weather child">Trời mát, hay xuất hiện mưa buổi chiều</p>
                        </div>
                        <div class="parent">
                            <p class="info child">Đợt không cao điểm trong năm cho du lịch</p>
                        </div>
                        <div class="parent">
                            <p class="info child">Giá cả bắt đầu trở lại mức trong năm</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a id="a6" data-toggle="collapse" data-parent="#accordion" href="#collapse6" class="collapsed">
                            <div style="width:50px;float:left;margin-top:20px;">6</div>
                            <div style="width:50px;height:50px;float:left"><p class="icon-sun weathericon" style="margin-top: -30px"></p></div>
                            <div style="width:50px;height:50px;background-size:cover;background-image: url('./templates/green/images/crowded/green_star.png');float:left;"></div>
                            <div style="width:50px;height:50px;background-size:cover;background-image: url('./templates/green/images/money/low.png');float:left;"></div>
                            <div style="clear:both;"></div>
                        </a>
                    </h4>
                </div>
                <div id="collapse6" class="panel-collapse collapse" style="width:95%;background-color:rgb(207, 234, 247);border:0px groove #98bf21;">
                    <div class="panel-body">
                        <div class="parent">
                            <p class="weather child">Mưa nhiều và thường xuyên trong ngày</p>
                        </div>
                        <div class="parent">
                            <p class="info child">Ít du khách tới Sài Gòn vào thời điểm này</p>
                        </div>
                        <div class="parent">
                            <p class="info child">Giá cả thấp so với trong năm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="span6" >
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a id="a7" data-toggle="collapse" data-parent="#accordion" href="#collapse7" class="collapsed">
                            <div style="width:50px;float:left;margin-top:20px;">7</div>
                            <div style="width:50px;height:50px;float:left"><p class="icon-sun weathericon" style="margin-top: -30px"></p></div>
                            <div style="width:50px;height:50px;background-size:cover;background-image: url('./templates/green/images/crowded/green_star.png');float:left;"></div>
                            <div style="width:50px;height:50px;background-size:cover;background-image: url('./templates/green/images/money/low.png');float:left;"></div>
                            <div style="clear:both;"></div>
                        </a>
                    </h4>
                </div>
                <div id="collapse7" class="panel-collapse collapse" style="width:95%;background-color:rgb(176, 219, 197);border:0px groove #35D64F;">
                    <div class="panel-body">
                        <div class="parent">
                            <p class="weather child">Mưa với tần suất lớn. Có ngày mưa hơn 12h</p>
                        </div>
                        <div class="parent">
                            <p class="info child">Ít du khách tới Sài Gòn vào thời điểm này</p>
                        </div>
                        <div class="parent">
                            <p class="info child">Giá cả rất thấp do hàng hóa dồi dào</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a id="a8" data-toggle="collapse" data-parent="#accordion" href="#collapse8" class="collapsed">
                            <div style="width:50px;float:left;margin-top:20px;">8</div>
                            <div style="width:50px;height:50px;float:left"><p class="icon-sun weathericon" style="margin-top: -30px"></p></div>
                            <div style="width:50px;height:50px;background-size:cover;background-image: url('./templates/green/images/crowded/green_star.png');float:left;"></div>
                            <div style="width:50px;height:50px;background-size:cover;background-image: url('./templates/green/images/money/low.png');float:left;"></div>
                            <div style="clear:both;"></div>
                        </a>
                    </h4>
                </div>
                <div id="collapse8" class="panel-collapse collapse" style="width:95%;background-color:rgb(150, 228, 153);border:0px groove #1B9725;">
                    <div class="panel-body">
                        <div class="parent">
                            <p class="weather child">Mưa bắt đầu ngớt dần, nhưng khí hậu vẫn khá ẩm ướt</p>
                        </div>
                        <div class="parent">
                            <p class="info child">Vẫn chưa có nhiều du khách tới</p>
                        </div>
                        <div class="parent">
                            <p class="info child">Giá cả rất thấp do hàng hóa dồi dào</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a id="a9" data-toggle="collapse" data-parent="#accordion" href="#collapse9" class="collapsed">
                            <div style="width:50px;float:left;margin-top:20px;">9</div>
                            <div style="width:50px;height:50px;float:left"><p class="icon-sun weathericon" style="margin-top: -30px"></p></div>
                            <div style="width:50px;height:50px;background-size:cover;background-image: url('./templates/green/images/crowded/yellow_star.png');float:left;"></div>
                            <div style="width:50px;height:50px;background-size:cover;background-image: url('./templates/green/images/money/medium.png');float:left;"></div>
                            <div style="clear:both;"></div>
                        </a>
                    </h4>
                </div>
                <div id="collapse9" class="panel-collapse collapse" style="width:95%;background-color:rgb(168, 214, 142);border:0px groove #A1C03F;">
                    <div class="panel-body">
                        <div class="parent">
                            <p class="weather child">Thời tiết chuyển sang khô ráo, hơi se se lạnh</p>
                        </div>
                        <div class="parent">
                            <p class="info child">Du khách bắt đầu quay lại Sài Gòn</p>
                        </div>
                        <div class="parent">
                            <p class="info child">Già cả tăng cao trở lại</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a id="a10" data-toggle="collapse" data-parent="#accordion" href="#collapse10" class="collapsed">
                            <div style="width:50px;float:left;margin-top:20px;">10</div>
                            <div style="width:50px;height:50px;float:left"><p class="icon-sun weathericon" style="margin-top: -30px"></p></div>
                            <div style="width:50px;height:50px;background-size:cover;background-image: url('./templates/green/images/crowded/yellow_star.png');float:left;"></div>
                            <div style="width:50px;height:50px;background-size:cover;background-image: url('./templates/green/images/money/high.png');float:left;"></div>
                            <div style="clear:both;"></div>
                        </a>
                    </h4>
                </div>
                <div id="collapse10" class="panel-collapse collapse" style="width:95%;background-color:rgb(209, 224, 159);border:0px groove #D8CB35;">
                    <div class="panel-body">
                        <div class="parent">
                            <p class="weather child">Thời tiết thất thường, lạnh vào sáng sớm và khô nóng vào buổi trưa</p>
                        </div>
                        <div class="parent">
                            <p class="info child">Số lượng du khách tăng mạnh do trùng vào đợt nghỉ</p>
                        </div>
                        <div class="parent">
                            <p class="info child">Già cả tăng cao trở lại</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a id="a11" data-toggle="collapse" data-parent="#accordion" href="#collapse11" class="collapsed">
                            <div style="width:50px;float:left;margin-top:20px;">11</div>
                            <div style="width:50px;height:50px;float:left"><p class="icon-sun weathericon" style="margin-top: -30px"></p></div>
                            <div style="width:50px;height:50px;background-size:cover;background-image: url('./templates/green/images/crowded/red_star.png');float:left;"></div>
                            <div style="width:50px;height:50px;background-size:cover;background-image: url('./templates/green/images/money/high.png');float:left;"></div>
                            <div style="clear:both;"></div>
                        </a>
                    </h4>
                </div>
                <div id="collapse11" class="panel-collapse collapse" style="width:95%;background-color:rgb(224, 198, 159);border:0px groove #D89D35;">
                    <div class="panel-body">
                        <div class="parent">
                            <p class="weather child">Thời tiết thất thường, lạnh vào sáng sớm và khô nóng vào buổi trưa</p>
                        </div>
                        <div class="parent">
                            <p class="info child">Số lượng du khách tăng mạnh do trùng vào đợt nghỉ</p>
                        </div>
                        <div class="parent">
                            <p class="info child">Già cả tăng cao trở lại</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a id="a12" data-toggle="collapse" data-parent="#accordion" href="#collapse12" class="collapsed">
                            <div style="width:50px;float:left;margin-top:20px;">12</div>
                            <div style="width:50px;height:50px;float:left"><p class="icon-sun weathericon" style="margin-top: -30px"></p></div>
                            <div style="width:50px;height:50px;background-size:cover;background-image: url('./templates/green/images/crowded/red_star.png');float:left;"></div>
                            <div style="width:50px;height:50px;background-size:cover;background-image: url('./templates/green/images/money/high.png');float:left;"></div>
                            <div style="clear:both;"></div>
                        </a>
                    </h4>
                </div>
                <div id="collapse12" class="panel-collapse collapse" style="width:95%;background-color:rgb(224, 175, 159);border:0px groove #C5632C;">
                    <div class="panel-body">
                        <div class="parent">
                            <p class="weather child">Thời tiết thất thường, lạnh vào sáng sớm và khô nóng vào buổi trưa</p>
                        </div>
                        <div class="parent">
                            <p class="info child">Số lượng du khách tăng mạnh do trùng vào đợt nghỉ</p>
                        </div>
                        <div class="parent">
                            <p class="info child">Già cả tăng cao trở lại</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>

</div>
</div>
</div>
</div>

</div>
</div>

<div id="avatar-full-2-block">
<div class="content block-default-width">
<div class="avatar-module ">
<div class="module-content">


<div class="custom">
<div class="st-onepage" id="transport_section">
<div class="st-projects onepage-appear" position="item-101">
    <h1 class="st-heading">Phương Tiện</h1>
    <div class="st-sub-heading">Cách Thức Để Đi</div>

    <div class="span6">
        <div class="span2" style="margin-bottom:20px;">
            <h2>Xuất Phát</h2>
        </div>
        <div class="span2" style="margin-bottom:20px;">
            <select id="city_start" style="width:100%">
                <?php
                    include JPATH_COMPONENT."/../com_data/data.php";
                    $city = GetStartCityData();

                    foreach ($city as $key => $value) {
                        echo '<option value="' . $key . 'Ba_Ria">' . $city[$key] . '</option>';
                    }
                ?>
        </select>
        </div>

        <ul class="span5 nav nav-tabs" id="transport_start">
            <?php
                $transport = GetStartTransportData();

                foreach ($transport as $key => $value) {
                    reset($transport);
                    echo '<li ' . ($key === key($transport)?'class="active"':'').'><a href="#' . $key . '_start" data-toggle="tab"><div style="background-image: url(\'./templates/green/images/transport/' . $transport[$key]["image_url"] . '\');"></div></a></li>';
            }
            ?>
        </ul>

        <div class="span5 tab-content" style="background-color:rgb(240, 223, 225);border:5px groove #FAB6C3;margin-bottom:20px;">
            <?php
                foreach ($transport as $key => $value) {
                    reset($transport);
                    echo '<div class="tab-pane' . ($key === key($transport)?' active':'').'" id="' . $key . '_start">'. $transport[$key]["description"].'</div>';
                }
            ?>
        </div>
    </div>

    <div class="span6">
        <div class="span2" style="margin-bottom:20px;">
            <h2>Trở Về</h2>
        </div>
        <div class="span2" style="margin-bottom:20px;">
            <select id="city_end" style="width:100%">
                <?php
                $city = GetEndCityData();

                foreach ($city as $key => $value) {
                    echo '<option value="' . $key . 'Ba_Ria">' . $city[$key] . '</option>';
                }
                ?>
            </select>
        </div>

        <ul class="span5 nav nav-tabs" id="transport_end">
            <?php
            $transport = GetEndTransportData();

            foreach ($transport as $key => $value) {
                reset($transport);
                echo '<li ' . ($key === key($transport)?'class="active"':'').'><a href="#' . $key . '_end" data-toggle="tab"><div style="background-image: url(\'./templates/green/images/transport/' . $transport[$key]["image_url"] . '\');"></div></a></li>';
            }
            ?>
        </ul>

        <div class="span5 tab-content" style="background-color:rgb(240, 223, 225);border:5px groove #FAB6C3;margin-bottom:20px;">
            <?php
            foreach ($transport as $key => $value) {
                reset($transport);
                echo '<div class="tab-pane' . ($key === key($transport)?' active':'').'" id="' . $key . '_end">'. $transport[$key]["description"].'</div>';
            }
            ?>
        </div>
    </div>
</div>

</div>
</div>
</div>
</div>

</div>
</div>

<div id="avatar-full-3-block">
    <div class="content block-default-width">
        <div class="avatar-module ">
            <div class="module-content">


                <div class="custom">
                    <div class="st-onepage">
                        <div class="st-home onepage-disappear" position="item-105">
                            <ul class="span12 nav nav-tabs" id="attraction_list" style="margin-left:0px;">
                                <li class="active"><a href="#saigon_central_post_office" data-toggle="tab"><div style="background-image: url('./templates/green/images/attraction/place/1_saigon_central_post_office.jpg');"></div></a></li>
                                <li><a href="#notre_dame_cathedral" data-toggle="tab"><div style="background-image: url('./templates/green/images/attraction/place/2_notre_dame_cathedral.jpg');"></div></a></li>
                                <li><a href="#ben_thanh_market" data-toggle="tab"><div style="background-image: url('./templates/green/images/attraction/place/3_ben_thanh_market.jpg');"></div></a></li>
                                <li><a href="#city_opera_house" data-toggle="tab"><div style="background-image: url('./templates/green/images/attraction/place/4_city_opera_house.jpg');"></div></a></li>
                                <li><a href="#independence_palace" data-toggle="tab"><div style="background-image: url('./templates/green/images/attraction/place/5_independence_palace.jpg');"></div></a></li>
                                <li><a href="#nha_rong_port" data-toggle="tab"><div style="background-image: url('./templates/green/images/attraction/place/6_nha_rong_port.jpg');"></div></a></li>
                            </ul>

                            <link rel="stylesheet" type="text/css" href="./templates/green/css/tooltip/jQuery.iPicture.css" />
                            <div class="span9" id="iPicture" data-interaction="hover" style="position: relative;margin-left:0px;">
                                <div class="ip_slide">
                                    <img class="ip_tooltipImg" src="./templates/green/images/Attraction/sai_gon_map.jpg">
                                    <div class="ip_tooltip ip_img32" style="top: 36%; left: 77%;" data-button="moreblack" data-tooltipbg="bgblack" data-round="roundBgW" data-animationtype="rtl-slide">
                                        <p>Nhà thờ Đức Bà</p>
                                        <img attractionId="notre_dame_cathedral" alt="an image" src="./templates/green/images/Attraction/Place/2_notre_dame_cathedral.jpg" width="256" height="256" />
                                    </div>
                                    <div class="ip_tooltip ip_img32" style="top: 40%; left: 68%;" data-button="moreblack" data-tooltipbg="bgblack" data-round="roundBgW" data-animationtype="rtl-slide">
                                        <p>Dinh Độc Lập</p>
                                        <img  attractionId="independence_palace" src="./templates/green/images/Attraction/Place/5_independence_palace.jpg" width="256" height="256" />
                                    </div>
                                    <div class="ip_tooltip ip_img32" style="top: 34%; left: 79%;" data-button="moreblack" data-tooltipbg="bgblack" data-round="roundBgW" data-animationtype="rtl-slide">
                                        <p>Bưu điện thành phố</p>
                                        <img attractionId="saigon_central_post_office" alt="an image" src="./templates/green/images/Attraction/Place/1_saigon_central_post_office.jpg" width="256" height="256" />
                                    </div>
                                    <div class="ip_tooltip ip_img32" style="top: 44%; left: 84%;" data-button="moreblack" data-tooltipbg="bgblack" data-round="roundBgW" data-animationtype="rtl-slide">
                                        <p>Nhà hát thành phố</p>
                                        <img attractionId="city_opera_house" src="./templates/green/images/Attraction/Place/4_city_opera_house.jpg" width="256" height="256" />
                                    </div>
                                    <div class="ip_tooltip ip_img32" style="top: 55%; left: 74%;" data-button="moreblack" data-tooltipbg="bgblack" data-round="roundBgW" data-animationtype="rtl-slide">
                                        <p>Chợ Bến Thành</p>
                                        <img attractionId="ben_thanh_market" alt="an image" src="./templates/green/images/Attraction/Place/3_ben_thanh_market.jpg" width="256" height="256" />
                                    </div>
                                    <div class="ip_tooltip ip_img32" style="top: 67%; left: 93%;" data-button="moreblack" data-tooltipbg="bgblack" data-round="roundBgW" data-animationtype="rtl-slide">
                                        <p>Bến Nhà Rồng</p>
                                        <img attractionId="nha_rong_port" src="./templates/green/images/Attraction/Place/6_nha_rong_port.jpg" width="256" height="256" />
                                    </div>
                                </div>
                                <div style="clear:both"></div>
                            </div>

                            <div class="span3" id="attraction_info" style="overflow: auto;">
                                <div>
                                <span class="savesHover savesHover-1744950 " data-locationid="1744950" style="visibility: visible; display: block;">
                                    <span class="button_2011_grn copy_test_3 ">
                                        <span class="sprite-gradient1x32_grn gradient">
                                            <span class="saveStar">
                                                <img src="http://c1.tacdn.com/img2/x.gif" class="sprite-suitcase_white">
                                            </span>
                                            <span class="saveText">
                                                <span class="saves-hover-txt" style="display: inline;">Thêm vào</span>
                                                    <span class="saves-hover-txt-saved" style="display: none;">Đã thêm</span>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                    <div style="clear:both"></div>
                                </div>
                                <div ><h2 id="attraction_title"></h2></div>
                                <p style="font-size:14px;line-height:18px;text-align:justify;margin:0px"><img src="./templates/green/images/icon/description.png" height="25px" width="25px"/><i id="attraction_description"></i></p>
                                <hr />
                                <p style="font-size:14px;line-height:18px;text-align:justify;margin:0px"> <img src="./templates/green/images/icon/time.png" height="25px" width="25px"/> <b id="attraction_hour"></b></p>
                                <p style="font-size:14px;line-height:18px;text-align:justify;margin:0px"> <img src="./templates/green/images/icon/price.png" height="25px" width="25px"/> <b id="attraction_price"></b></p>
                                <hr />
                                <p style="font-size:14px;line-height:18px;text-align:justify;margin:0px"><img src="./templates/green/images/icon/address.png" height="25px" width="25px"/> <b id="attraction_address"></b></p>
                                <p style="font-size:14px;line-height:18px;text-align:justify;margin:0px"><img src="./templates/green/images/icon/phone.png" height="25px" width="25px"/> <b id="attraction_phone"></b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div id="avatar-full-4-block">
    <div class="content block-default-width">
        <div class="avatar-module ">
            <div class="module-content">


                <div class="custom">
                    <div class="st-onepage">
                        <div class="st-team onepage-disappear" position="item-106" id="st-advice">
                            <h1 class="st-heading">Lời khuyên</h1>

                            <p class="st-sub-heading">Để chuyến du lịch thú vị hơn</p>
                            <div class="row-fluid">
                                <?php
                                $advice = GetAdviceData();

                                foreach ($advice as $key => $value) {
                                    echo '<div class="span3">';
                                    echo '<div class='. $advice[$key]["icon"] .'>&nbsp;</div>';
                                    echo '<div class="vote-div" track='. $key .' type="advice"><img src="./templates/green/images/icon/select.png" class="vote-icon select ' . ($advice[$key]["select"]?'':'unclicked') . '"/><img src="./templates/green/images/vote/up.png" class="vote-icon up ' . ($advice[$key]["like"]?'':'unclicked') .' "/></div>';
                                    echo '<div class="title">'. $advice[$key]["name"] . '</div>';
                                    echo '<div class="content">'. $advice[$key]["content"];
                                    echo '</div>';
                                    echo '</div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div id="avatar-full-5-block" style="background-color:white">
    <div class="content block-default-width">
        <div class="avatar-module ">
            <div class="module-content">


                <div class="custom">
                    <div class="st-onepage">
                        <div class="st-team onepage-disappear" position="item-107" id="st-food">
                            <h1 class="st-heading" style="color:green">Ẩm Thực</h1>

                            <p class="st-sub-heading" style="color:blue">Món ngon không nên bỏ lỡ</p>
                            <div class="row-fluid">
                                <?php
                                $food = GetFoodData();

                                foreach ($food as $key => $value) {
                                    echo '<div class="span3">';
                                    echo '<div><img src="./templates/green/images/'. $food[$key]["image_url"] .'"/></div>';
                                    echo '<div class="title">';
                                    echo '  <h2>' . $food[$key]["name"] . '</h2>';
                                    echo '<div class="vote-div" track='. $key .' type="food"><img src="./templates/green/images/icon/select.png" class="vote-icon select ' . ($food[$key]["select"]?'':'unclicked') . '"/><img src="./templates/green/images/vote/up.png" class="vote-icon up ' . ($food[$key]["like"]?'':'unclicked') .' "/></div>';
                                    echo '</div>';
                                    echo '<div class="content">'. $food[$key]["description"];
                                    echo '</div>';
                                    echo '</div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
    li {
        float: left;
        margin-right: 5px;
        cursor: pointer;
    }

    li.vehicle_active, li.accommodation_active, li.food_active, li.transport_active, li.personal_expense_active, li.other_active {
        background: green;
    }

    ul {
        list-style-type: none;
        position: relative;
    }

    #total_cost {
        color: red;
    }

    .cost_info {
        position: absolute;
    }

    .clear {
        clear: both;
    }

    #vehicle_info, #accommodation_info, #food_info, #transport_info, #personal_expense_info, #other_info {
        float: left;
    }
</style>
<div id="avatar-body-bottom-block" position="item-108">
<div class="content block-default-width">
<div id="100" class="avatar-module ">
    <div class="module-content">


        <div class="custom">
            <div class="st-title">
                <h1 class="st-heading" style="color:rgb(223, 59, 59);">Chi phí</h1>

                <div class="st-sub-heading" style="margin-bottom:0px;">Hầu bao cần để đi</div>
                <div style="clear:both;"></div>
            </div>
        </div>
    </div>
</div>
<div id="101" class="avatar-module ">
<div class="module-content">
<div id="cost_info">
<div id="summary" class="span12">
    <div class="cost_title span12">
        <span class="gross_sum">Tổng chi phí</span> &nbsp;<select id="day_list" style="width:50px;font-size:30px;">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        Ngày
        <div id="total_cost" class="cost">0</div>
    </div>

</div>
<hr style="border-top: 1px solid #030303;border-bottom: 1px solid #000000;margin:0px; margin-left:30px;" class="span12"/>
<div id="vehicle" class="span12">

        <div class="cost_title span12">Đi tới đây<div id="vehicle_cost" class="cost">0</div></div>

        <div class="span11">
            <ul id="vehicle_option">
                <li cost="0" class="vehicle_active">
                    <img src="./templates/green/images/budget/nocost.png" />
                </li>
                <li cost="500">
                    <img src="./templates/green/images/transport/coach.png" alt="coach" />
                </li>
                <li cost="900">
                    <img src="./templates/green/images/transport/ship.png" />
                </li>
                <li cost="1100">
                    <img src="./templates/green/images/transport/train.png" />
                </li>
                <li cost="2000">
                    <img src="./templates/green/images/transport/airplane.png" />
                </li>
            </ul>

            <div id="vehicle_info" class="accordion">
                <h3>Thông tin</h3>
                <div>
                    <p>
                        Xe buýt: các bến xe lớn như Miền Đông, Miền Tây
                    </p>
                    <p>
                        Thuyền: Cập vào bến cảng Sài Gòn
                    </p>
                    <p>
                        Xe lửa: Tới Ga Hòa Hưng
                    </p>
                    <p>
                        Máy bay: Sân bay Tân Sơn Nhất
                    </p>
                </div>
            </div>
        </div>




    <br class="clear" />
</div>
<div id="accommodation" class="span12">
        <div class="cost_title span12">Nơi ở<div id="accommodation_cost" class="cost">0</div></div>
        <div class="span11">
            <ul id="accommodation_option">
                <li cost="0" class="accommodation_active">
                    <img src="./templates/green/images/budget/nocost.png" />
                </li>
                <li cost="100">
                    <img src="./templates/green/images/budget/hostel.png" />
                </li>
                <li cost="500">
                    <img src="./templates/green/images/budget/hotel.png" />
                </li>
                <li cost="1500">
                    <img src="./templates/green/images/budget/hotel_premium.png" />
                </li>
            </ul>

            <div id="accommodation_info" class="accordion">
                <h3>Thông tin</h3>
                <div>
                    <p>
                        Những nhà nghỉ giá rẻ: nhà khách quân đội
                    </p>
                    <p>
                        Khách sạn bình dân: khu Bàu Cát, Phan Xích Long
                    </p>
                    <p>
                        Khách sạn cao cấp: Rex, Sheraton, New World
                    </p>
                </div>
            </div>
        </div>


    <br class="clear" />
</div>
<div id="food" class="span12">
    <div class="cost_title span12">Ẩm thực<div id="food_cost" class="cost">0</div></div>
    <div class="span11">
        <ul id="food_option">
            <li cost="0" class="food_active">
                <img src="./templates/green/images/budget/nocost.png" />
            </li>
            <li cost="100">
                <img src="./templates/green/images/budget/food_court.png" />
            </li>
            <li cost="500">
                <img src="./templates/green/images/budget/restaurant.png" />
            </li>
            <li cost="1500">
                <img src="./templates/green/images/budget/restaurant_premium.png" />
            </li>
        </ul>

        <div id="food_info" class="accordion">
            <h3>Thông tin</h3>
            <div>
                <p>
                    Ẩm thực hè phố: Có thể theo dọc những đoạn đường ven trung tâm như Đinh Tiên Hoàng, Bùi Thị Xuân...
                </p>
                <p>
                    Nhà hàng bình dân: khu Lý Tự Trọng, Lê Duẩn
                </p>
                <p>
                    Nhà hàng sang trọng: Rex, Caravelle, Lion...
                </p>
            </div>
        </div>
    </div>

    <br class="clear" />
</div>
<div id="transport" class="span12">
    <div class="cost_title span12">Đi lại<div id="transport_cost" class="cost">0</div></div>
    <div class="span11">
        <ul id="transport_option">
            <li cost="0" class="transport_active">
                <img src="./templates/green/images/budget/nocost.png" />
            </li>
            <li cost="50">
                <img src="./templates/green/images/budget/bus.png" />
            </li>
            <li cost="400">
                <img src="./templates/green/images/budget/taxi.png" />
            </li>
        </ul>

        <div id="transport_info" class="accordion">
            <h3>Thông tin</h3>
            <div>
                <p>
                    Xe buýt: Hệ thống xe buýt khá là phát triển. Có thể bắt buýt trên những tuyến đường...
                </p>
                <p>
                    Taxi: Nên đi taxi của những hãng Mai Linh, Vinasun để tránh nạn taxi dù chặt chém
                </p>
            </div>
        </div>
    </div>

    <br class="clear" />
</div>
<div id="personal_expense" class="span12">
    <div class="cost_title span12">Chi tiêu cá nhân<div id="personal_expense_cost" class="cost">0</div></div>
    <div class="span11">
        <ul id="personal_expense_option">
            <li cost="0" class="personal_expense_active">
                <img src="./templates/green/images/budget/nocost.png" />
            </li>
            <li cost="100">
                <img src="./templates/green/images/money/low.png" />
            </li>
            <li cost="300">
                <img src="./templates/green/images/money/medium.png" />
            </li>
            <li cost="800">
                <img src="./templates/green/images/money/high.png" />
            </li>
        </ul>

        <div id="personal_expense_info" class="accordion">
            <h3>Thông tin</h3>
            <div>
                <p>
                    Mua đồ giá rẻ: khu chợ Lớn, chợ Gò Vấp
                </p>
                <p>
                    Mua đồ giá trung: chợ Bến Thành, chợ Lớn
                </p>
                <p>
                    Mua đồ cao cấp: Các trung tâm mua sắm như Diamond, Parkson Hùng Vương, Vincom...
                </p>
            </div>
        </div>
    </div>

    <br class="clear" />
</div>
<div id="other" class="span12">
    <div class="cost_title span12">Các chi phí khác<div id="other_cost" class="cost">0</div></div>
    <div class="span11">
        <ul id="other_option">
            <li cost="0">
                <img src="./templates/green/images/budget/departure_tax.png" />
            </li>
            <li cost="0">
                <img src="./templates/green/images/budget/visa.png" />
            </li>
        </ul>

        <div id="other_info" class="accordion">
            <h3>Thông tin</h3>
            <div>
                <p>
                    Không áp dụng với Sài Gòn
                </p>
            </div>
        </div>
    </div>

    <br class="clear" />
</div>
<div style="clear:both"></div>
</div>
</div>
</div>
</div>
</div>
<script>
    jQuery.noConflict();
    (function ($) {
        $(document).ready(function () {
            if ($('body').hasClass('avatar-responsive')) {
                var mainMenu = $('.avatar-nav-responsive > ul');

                mainMenu.find('li > span.pull').click(function (event) {
                    $(this.getParent()).find('ul:first').slideToggle();
                });

                $(window).resize(function () {
                    if ($(window).width() > 767) {
                        mainMenu.find('ul').removeAttr('style');
                    }
                });
            }
        });
    })(jQuery)
</script>
<script stype="text/javascript">
    jQuery.noConflict();
    (function ($) {
        $(document).ready(function () {
            var goToTop = $('#avatar-go-to-top');
            goToTop.hide();

            // fade in #back-top
            $(function () {
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 100) {
                        goToTop.fadeIn();
                    } else {
                        goToTop.fadeOut();
                    }
                });

                // scroll body to 0px on click
                goToTop.click(function () {
                    $('body,html').animate({
                        scrollTop: 0
                    }, 800);
                    return false;
                });
            });
        });
    })(jQuery)
</script>
<script type="text/javascript">
jQuery.noConflict();
(function ($) {
    $(document).ready(function () {
        avatarTemplate.url.base = "http://www.beautiful-templates.com/demo/templates-joomla/st_green/";
        avatarTemplate.template.name = "st_green";
        avatarTemplate.template.params = {"template_panel_setting": "1", "active_responsive": "1", "load_jquery": "1", "template_showcase": "-1", "template_background": "0", "doctype": "5", "show_main_body": "1", "hide_menu_items": ["101"], "show_message": "1", "404_article": "", "template_width": "1200px", "avatar_header_block": "block-default-width", "avatar_header_inside_block": "block-default-width", "avatar_tool_block": "block-max-width-100", "avatar_body_top_block": "block-default-width", "avatar_body_middle_block": "block-default-width", "avatar_body_bottom_block": "block-default-width", "avatar_footer_inside_block": "block-default-width", "avatar_footer_block": "block-default-width", "avatar_full_1_block": "block-default-width", "avatar_full_2_block": "block-default-width", "avatar_full_3_block": "block-default-width", "avatar_full_4_block": "block-default-width", "avatar_full_5_block": "block-default-width", "avatar_body_bottom_block": "block-default-width", "avatar_full_6_block": "block-default-width", "top_left": 20, "top_right": 80, "promo_top_left": 33.33, "promo_top_right": 33.33, "promo_bottom_left": 33.33, "promo_bottom_right": 33.33, "left": 23, "right": 23, "inner_left": 23, "inner_right": 23, "footer_left": 33.33, "footer_right": 33.33, "link_color": "", "hover_color": "", "body_font": "", "menu_font": "", "google_font_api": "0", "google_font_api_key": "", "google_font_content": "", "heading_1": "", "heading_2": "", "heading_3": "", "heading_4": "", "heading_5": "", "heading_6": "", "customize_css": "", "go_to_top": "1", "go_to_top_text": "", "go_to_top_css": "", "css3_effect": "1", "css3_effect_scroll": ".avatar-css3-effect-scroll", "optimize": "0"};
        avatarTemplate.image.initEffects();
        avatarTemplate.layout.init();
        avatarTemplate.settingPanel.init();
        avatarTemplate.menu.init();
        avatarTemplate.css3effect.init();

        $(".note_select").click(function () {
            $("#frame").attr("src", "/green/templates/green/blog.php");
        });

        var startDay = new Date();
        var endDay = new Date();
        endDay = endDay.setDate(endDay.getDate()+5);
        var formatStyle = "d MMM, yyyy";
        var finishSelect = true;

        $('#widgetCalendar').DatePicker({
            flat: true,
            format: 'd B, Y',
            date: [new Date(), new Date()],
            calendars: 1,
            mode: 'range',
            starts: 1,
            onChange: function(formated) {
                finishSelect = !finishSelect;
                $('#widgetField span').get(0).innerHTML = formated.join(' &divide; ');
                startDay = Date.parseExact(formated[0], formatStyle);
                endDay = Date.parseExact(formated[1],formatStyle);

                if(finishSelect) {
                    $('#accordion .in').removeClass('in').height(0);
                    for (i = 1; i <= 12; i++) {
                        $('#collapse' + i).css('border',$('#collapse' + i).css('border').replace('5px','0px'));
                    }

                    var curr = startDay.getMonth() + 1;
                    $('#a' + curr).addClass('collapsed');
                    $('#collapse' + curr).css('border',$('#collapse' + curr).css('border').replace('0px','5px'));
                    $('#collapse' + curr).addClass('in').height('auto');
                    //$("#info").zAccordion("trigger", startDay.getMonth());
                }
            }
        });

        var state = false;
        $('#widgetField>a').bind('click', function(){
            $('#widgetCalendar').stop().animate({height: state ? 0 : $('#widgetCalendar div.datepicker').get(0).offsetHeight}, 500);
            state = !state;
            return false;
        });
        $('#widgetCalendar div.datepicker').css('position', 'absolute');

        $("#city_start").select2();
        $("#city_start").on("change", function(e) { $("#city").text($("#city_start").select2("data").text);
            //alert(e.val + ' ' + e.added + ' ' +e.removed)
        });
        $("#day_list").select2();
        $("#day_list").on("change", function(e) {
            day = parseInt($("#day_list").select2("data").text);
            recalculateTotalCost();
        });

        $("#day_list").select2();

        $("#city_end").select2();



        $('.accordion').accordion({
            collapsible: true,
            active: false
        });

        var other_cost = 0;
        var total_cost = 0;
        var day = 1;

        var cost_name = new Array();
        cost_name[0] = 'vehicle';
        cost_name[1] = 'accommodation';
        cost_name[2] = 'food';
        cost_name[3] = 'transport';
        cost_name[4] = 'personal_expense';
        cost_name[5] = 'other';

        $('#vehicle_option li').click(function () {
            $('.vehicle_active').removeClass('vehicle_active');
            var $btn = $(this).addClass('vehicle_active'), idx = $btn.index();
            document.getElementById('vehicle_cost').innerHTML = $(this).attr('cost');
            recalculateTotalCost();
        })

        $('#accommodation_option li').click(function () {
            $('.accommodation_active').removeClass('accommodation_active');
            var $btn = $(this).addClass('accommodation_active'), idx = $btn.index();
            document.getElementById('accommodation_cost').innerHTML = $(this).attr('cost');
            recalculateTotalCost();
        })

        $('#food_option li').click(function () {
            $('.food_active').removeClass('food_active');
            var $btn = $(this).addClass('food_active'), idx = $btn.index();
            document.getElementById('food_cost').innerHTML = $(this).attr('cost');
            recalculateTotalCost();
        })

        $('#transport_option li').click(function () {
            $('.transport_active').removeClass('transport_active');
            var $btn = $(this).addClass('transport_active'), idx = $btn.index();
            document.getElementById('transport_cost').innerHTML = $(this).attr('cost');
            recalculateTotalCost();
        })

        $('#personal_expense_option li').click(function () {
            $('.personal_expense_active').removeClass('personal_expense_active');
            var $btn = $(this).addClass('personal_expense_active'), idx = $btn.index();
            document.getElementById('personal_expense_cost').innerHTML = $(this).attr('cost');
            recalculateTotalCost();
        })

        $('#other_option li').click(function () {
            var value = parseInt($(this).attr('cost'));
            if ($(this).hasClass('other_active')) {
                $(this).removeClass('other_active');
                other_cost -= value;
            }
            else {
                $(this).addClass('other_active');
                other_cost += value;
            }
            document.getElementById('other_cost').innerHTML = other_cost;
            recalculateTotalCost();
        })

        function recalculateTotalCost() {
            total_cost = 0;

            for (var i = 0; i < cost_name.length; i++) {
                if (1 <= i && i <= 4)
                    total_cost += parseInt(document.getElementById(cost_name[i] + '_cost').innerHTML) * day;
                else
                    total_cost += parseInt(document.getElementById(cost_name[i] + '_cost').innerHTML);
            }
            document.getElementById('total_cost').innerHTML = total_cost;
        }

        $('.vote-icon').click(function () {
            var values = {};

            if ($(this).hasClass('select')) {
                values.source = "select";
            }
            else
                values.source = "like";

            if ($(this).hasClass('unclicked')) {
                $(this).removeClass('unclicked');
                values.action = "add";
            }
            else {
                values.action = "remove";
                $(this).addClass('unclicked');
            }

            values.id = $(this).parent().attr('track');
            values.type = $(this).parent().attr('type');
            $.ajax({
                url: "index.php?option=com_data&format=raw",
                type: "post",
                data: values,
                success: function(msg){
                    alert(msg);
                },
                error:function(){
                    alert("failure");
                }
            });
        })
    });
})(jQuery)
</script>

<script>

    var attraction_selected = [];
    var attraction_current = '';

    //jQuery.noConflict();
    function checkButton() {
        if (attraction_selected.contains(attraction_current))
        {
            jQuery('.saves-hover-txt').css('display', 'none');
            jQuery('.saves-hover-txt-saved').css('display', 'inline');
        }
        else
        {
            jQuery('.saves-hover-txt').css('display', 'inline');
            jQuery('.saves-hover-txt-saved').css('display', 'none');
        }
    }
    function changeAttractionInfo(message){
        attraction_current = message;
        jQuery('#attraction_list li').each(function() {
            if (jQuery(this).find('a').attr('href').replace('#','') == message)
                jQuery(this).addClass('active');
            else jQuery(this).removeClass('active');
        });

        jQuery.ajax({
            url: "index.php?option=com_data&format=raw",
            type: "post",
            data: {'request':'GetAttractionById','id':message},
            success: function(msg){
                var data = JSON.parse(msg);
                //alert(msg);

                jQuery('#attraction_title').html(
                    data.name
                );
                jQuery('#attraction_description').html(
                    data.description
                );
                jQuery('#attraction_hour').html(
                    data.hour
                );
                jQuery('#attraction_price').html(
                    data.price
                );
                jQuery('#attraction_address').html(
                    data.address
                );
                jQuery('#attraction_phone').html(
                    data.phone
                );

                if (data.select) {
                    jQuery('.saves-hover-txt').css('display','none');
                    jQuery('.saves-hover-txt-saved').css('display','inline');
                }
                else {
                    jQuery('.saves-hover-txt-saved').css('display','none');
                    jQuery('.saves-hover-txt').css('display','inline');
                }
                //checkButton();
            },
            error:function(){
                alert("failure");
            }
        });
    }

    (function ($) {
        $(document).ready(function () {
            jQuery('.saves-hover-txt').click(function(){
                jQuery(this).css('display', 'none');
                jQuery('.saves-hover-txt-saved').css('display', 'inline');

                //attraction_selected.push(attraction_current);

                jQuery.ajax({
                    url: "index.php?option=com_data&format=raw",
                    type: "post",
                    data: {'source':'select','id':attraction_current, 'action':'add','type':'attraction'},
                    success: function(msg){
                        alert(msg);
                    },
                    error:function(){
                        alert("failure");
                    }
                });
            });

            jQuery('.saves-hover-txt-saved').click(function(){
                jQuery(this).css('display', 'none');
                jQuery('.saves-hover-txt').css('display', 'inline');

                jQuery.ajax({
                    url: "index.php?option=com_data&format=raw",
                    type: "post",
                    data: {'source':'select','id':attraction_current, 'action':'remove','type':'attraction'},
                    success: function(msg){
                        alert(msg);
                    },
                    error:function(){
                        alert("failure");
                    }
                });
            });

            //slideshow
            jQuery('#attraction_list li').click(function (event) {
                changeAttractionInfo(jQuery(this).find('a').attr('href').replace('#',''));
            });
        });
    })(jQuery)
</script>
<script src="./templates/green/js/tooltip/ipicture-square.js"></script>
<script>
    jQuery.noConflict();
    (function ($) {
        $(document).ready(function () {
            $("#iPicture").iPicture({
                animation: true,
                animationBg: "bgblack",
                animationType: "ltr-slide",
                button: "moreblack"
            });
        });
    })(jQuery)
</script>
<script type="text/javascript">
    jQuery.noConflict();
    (function ($) {
        jQuery(document).ready(function () {
            setTimeout(function () {
                var left_hei = $(".timeline-left").height();
                var right_hei = $(".timeline-right").height();
                var total_hei = 0;
                if (left_hei >= right_hei) {
                    total_hei = left_hei + 66;
                } else {
                    total_hei = right_hei + 66;
                }
                $("#st-content-showcase-timeline").css("height", total_hei + "px");
            }, 1000);

            $('#transport_start a:last').tab('show');
            $('#transport_end a:last').tab('show');
            $('#attraction_list a:last').tab('show');

            $('#accordion').collapse({
                toggle: false,
                parent:true
            });
        });
    })(jQuery);
</script>

