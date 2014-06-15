<?php
/** Toi Ba Lo */
defined('_JEXEC') or die;

?>

<a id="avatar-go-to-top" href="#top" style="display: block;"><span></span></a>

<style>
    .sequence-canvas {
        padding-left:0px;
    }
</style>

<div id="avatar-tool-block">
    <div class="content">
        <div class="avatar-module st-top-slider onepage-appear" position="item-102">
            <div class="module-content">
                <div class="st-layer-slider layer_layout_slide layer-effect-door" style="width: 100%; height: 700px;"
                     id="533d731796900" >
                    <div class="sequence-prev"></div>
                    <div class="sequence-next"></div>
                    <ul class="sequence-pagination">
                        <li class=""><span></span></li>
                        <li class=""><span></span></li>
                        <li class="current"><span></span></li>
                    </ul>
                    <div style="text-align:center"><button type="button" class="btn btn-success" style="margin-bottom:10px;margin-left:30px;" onclick="PopUpFeedback('Địa Điểm','Hình Ảnh');">Phản Hồi</button></div>
                    <ul class="sequence-canvas">
                        <?php
                        $slide_img_link = array('http://www.beautiful-templates.com/demo/templates-joomla/st_green/index.php?option=com_content&view=article&id=7'
                        , 'http://www.beautiful-templates.com/demo/templates-joomla/st_green/index.php?option=com_content&view=article&id=6'
                        , 'http://www.beautiful-templates.com/demo/templates-joomla/st_green/index.php?option=com_content&view=article&id=5');
                        $slide_img = array('./templates/green/images/sai_gon_1.jpg', './templates/green/images/sai_gon_2.jpg', './templates/green/images/sai_gon_3.jpg');
                        $slide_alt = array('Thành phố mang tên Bác', 'Công trình kiến trúc Pháp',
                            'Nơi hội tụ văn hóa ba miền');
                        $slide_title_link = array('http://www.beautiful-templates.com/demo/templates-joomla/st_green/index.php?option=com_content&view=article&id=7',
                            'http://www.beautiful-templates.com/demo/templates-joomla/st_green/index.php?option=com_content&view=article&id=6',
                            'http://www.beautiful-templates.com/demo/templates-joomla/st_green/index.php?option=com_content&view=article&id=5');
                        $slide_caption = array('Thành phố mang tên Bác', 'Công trình kiến trúc Pháp',
                            'Nơi hội tụ văn hóa ba miền');

                        for ($i = 0; $i < 3; $i++) {
                            ?>
                            <li class="animate-out" style="z-index: 1; opacity: 1;">

                                <div class="column" style="width: 100%; left: 0%;">
                                    <div class="column-inner">
                                        <div class="image">
                                            <a href="<?php echo $slide_img_link[$i] ?>">
                                                <img style="width:1600px;height:700px"
                                                     src="<?php echo $slide_img[$i] ?>"
                                                     alt="<?php echo $slide_alt[$i] ?>">
                                            </a>
                                        </div>
                                        <h3 class="title">
                                            <a href="<?php echo $slide_title_link[$i] ?>">
                                                <?php echo $slide_caption[$i] ?></a>
                                        </h3>

                                    </div>
                                </div>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
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
                    <div class="st-onepage">
                        <div class="st-features onepage-appear" position="item-103">
                            <h1 class="st-heading">Đặc trưng<button type="button" class="btn btn-success" style="margin-bottom:10px;margin-left:30px;" onclick="PopUpFeedback('Địa Điểm','Đặc Trưng');">Phản Hồi</button></h1>

                            <p class="st-sub-heading">Những điều thú vị về Sài Gòn</p>
                            <div class="st-layer-slider " style="width: 100%;max-height:none;" id="dactrung_slide">
                                <div class="sequence-prev"></div>
                                <div class="sequence-next"></div>
                                <ul class="sequence-pagination">
                                    <li class="current"><span></span></li>
                                    <li class=""><span></span></li>
                                </ul>
                                <ul class="sequence-canvas" style="height:350px;">
                                    <li class="animate-in" style="z-index: 2; opacity: 1;position:relative;">
                                        <div class="row-fluid" style="position:relative;">
                                            <div class="span3" style="float:left;">
                                                <div class="st-icon-star">&nbsp;</div>
                                                <div class="title">Nơi đến ưa thích</div>
                                                <div id="dactrung_1"></div>
                                                <div class="content">9/10 du khách tới du lịch Việt Nam đều dành thời gian thăm quan
                                                    Sài Gòn
                                                </div>
                                            </div>
                                            <div class="span3" style="float:left;">
                                                <div class="st-icon-food">&nbsp;</div>
                                                <div class="title">Ẩm thực</div>
                                                <div id="dactrung_2"></div>
                                                <div class="content">Là nơi hội tụ ẩm thực cả nước nói chung và miền Tây Nam Bô nói
                                                    riêng.
                                                    Món ăn nổi tiêng nhất phải kể tới cơm tấm, hủ tiếu, bánh tráng trộn.
                                                </div>
                                            </div>
                                            <div class="span3" style="float:left;">
                                                <div class="st-icon-cup">&nbsp;</div>
                                                <div class="title">Cà phê bệt</div>
                                                <div id="dactrung_3"></div>
                                                <div class="content">Một nét đặc trưng thú vị với ly cà phê bệt ở góc nhà thờ Đức Bà
                                                </div>
                                            </div>
                                            <div class="span3" style="float:left;">
                                                <div class="st-icon-camera">&nbsp;</div>
                                                <div class="title">Kiến trúc Pháp</div>
                                                <div id="dactrung_4"></div>
                                                <div class="content">Với những công trình mang đậm kiến trúc thòi Pháp thuộc như Nhà
                                                    Thờ Đức Bà, Bưu Điện Thành Phố, Dinh Độc Lập...
                                                    Sài Gòn là địa điểm thích hợp cho các bạn trẻ muốn lưu giữ lại những bức ảnh đẹp
                                                    trong suốt chuyến đi của mình
                                                </div>
                                            </div>
                                        </div>

                                    </li>
                                    <li class="animate-out" style="opacity: 1; z-index: 1;position:relative;top:-330px;left:0px">
                                        <div class="row-fluid" style="position:relative;">
                                            <div class="span3">
                                                <div class="st-icon-cup">&nbsp;</div>
                                                <div class="title">Cà phê bệt</div>
                                                <div class="content">Một nét đặc trưng thú vị với ly cà phê bệt ở góc nhà thờ Đức Bà
                                                </div>
                                            </div>
                                            <div class="span3">
                                                <div class="st-icon-camera">&nbsp;</div>
                                                <div class="title">Kiến trúc Pháp</div>
                                                <div class="content">Với những công trình mang đậm kiến trúc thòi Pháp thuộc như Nhà
                                                    Thờ Đức Bà, Bưu Điện Thành Phố, Dinh Độc Lập...
                                                    Sài Gòn là địa điểm thích hợp cho các bạn trẻ muốn lưu giữ lại những bức ảnh đẹp
                                                    trong suốt chuyến đi của mình
                                                </div>
                                            </div>
                                        </div>

                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="avatar-module ">
            <div class="module-content">


                <div class="custom">
                    <div class="st-onepage">
                        <div class="st-projects onepage-appear" style="padding: 35.813541412353516px 0px;" position="item-104">
                            <h1 class="st-heading">Tham quan<button type="button" class="btn btn-success" style="margin-bottom:10px;margin-left:30px;" onclick="PopUpFeedback('Địa Điểm','Tham Quan');">Phản Hồi</button></h1>

                            <p class="st-sub-heading">Những nơi không nên bỏ lỡ</p>
                            <div class="st-layer-slider " style="width: 100%; height: 345px;" id="thamquan_slide">
                                <div class="sequence-prev"></div>
                                <div class="sequence-next"></div>
                                <ul class="sequence-pagination">
                                    <li class="current"><span></span></li>
                                    <li class=""><span></span></li>
                                </ul>
                                <ul class="sequence-canvas">
                                    <li class="animate-in" style="z-index: 2; opacity: 1;">
                                        <div class="row-fluid">
                                            <div class="span3">
                                                <div class="content"><img class="circular"
                                                                          src="./templates/green/images/nha_tho_duc_ba.jpg"
                                                                          border="0"
                                                                          alt=""><br>
                                                    <div id="thamquan_1"></div>
                                                    <div class="detail">
                                                        <h2 class="title">Nhà thờ Đức Bà</h2>

                                                        <p class="desc">Được Pháp xây dựng vào năm 1920</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span3">
                                                <div class="content"><img class="circular"
                                                                          src="./templates/green/images/dinh_doc_lap.jpg" border="0"
                                                                          alt=""><br>
                                                    <div id="thamquan_2"></div>
                                                    <div class="detail">
                                                        <h2 class="title">Dinh Độc Lập</h2>

                                                        <p class="desc">Biểu tượng của sự thống nhất đất nước</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span3">
                                                <div class="content"><img class="circular"
                                                                          src="./templates/green/images/cho_ben_thanh.jpg"
                                                                          border="0"
                                                                          alt=""><br>
                                                    <div id="thamquan_3"></div>
                                                    <div class="detail">
                                                        <h2 class="title">Chợ Bến Thành</h2>

                                                        <p class="desc">Biểu tượng của Sài Gòn</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span3">
                                                <div class="content"><img class="circular"
                                                                          src="./templates/green/images/ben_nha_rong.jpg" border="0"
                                                                          alt=""><br>
                                                    <div id="thamquan_4"></div>
                                                    <div class="detail">
                                                        <h2 class="title">Bến Nhà Rồng</h2>

                                                        <p class="desc">Nơi Bác ra đi tìm đường cứu nước</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="animate-out" style="opacity: 1; z-index: 1;">
                                        <div class="row-fluid">
                                            <div class="span3">
                                                <div class="content"><img class="circular"
                                                                          src="./templates/green/images/cho_ben_thanh.jpg"
                                                                          border="0"
                                                                          alt=""><br>

                                                    <div class="detail">
                                                        <h2 class="title">Chợ Bến Thành</h2>

                                                        <p class="desc">Biểu tượng của Sài Gòn</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span3">
                                                <div class="content"><img class="circular"
                                                                          src="./templates/green/images/ben_nha_rong.jpg" border="0"
                                                                          alt=""><br>

                                                    <div class="detail">
                                                        <h2 class="title">Bến Nhà Rồng</h2>

                                                        <p class="desc">Nơi Bác ra đi tìm đường cứu nước</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
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
                            <div class="row-fluid">
                                <div class="span8">
                                    <div class="inner content">
                                        <h1>Văn hóa giao thoa <button type="button" class="btn btn-success" style="margin-bottom:10px;margin-left:30px;" onclick="PopUpFeedback('Địa Điểm','Bài Viết');">Phản Hồi</button></h1>

                                        <p>Là trung tâm kinh tế lớn của cả nước, Sài Gòn là nơi tập trung văn hóa Bắc
                                            Trung Nam xen lẫn một cách hài hòa.</p>

                                        <p><button type="button" class="btn btn-primary" id="displayArticle">Xem Bài Viết</button>
                                        </p>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="inner phone" style="width:100%">
                                        <img src="./templates/green/images/tong_hop.jpg" border="0" alt="" width="370">
                                        <img src="./templates/green/images/hang_rong_sai_gon.jpg"
                                             border="0"
                                             alt="">

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
<div id="avatar-full-4-block">
    <div class="content block-default-width">
        <div class="avatar-module ">
            <div class="module-content">


                <div class="custom">
                    <div class="st-onepage">
                        <div class="st-team onepage-disappear" position="item-106">
                            <h1 class="st-heading">Cảm nghĩ<button type="button" class="btn btn-success" style="margin-bottom:10px;margin-left:30px;" onclick="PopUpFeedback('Địa Điểm','Cảm Nghĩ');">Phản Hồi</button></h1>

                            <p class="st-sub-heading" style="margin-bottom:15px;">Sài Gòn trong tim mỗi người là...</p>
                            <div class="st-layer-slider span12" style="width: 100%;height:600px;margin-left:0px;" id="camnghi_slide">
                                <div class="sequence-prev"></div>
                                <div class="sequence-next"></div>
                                <ul class="sequence-pagination">
                                    <li class="current"><span></span></li>
                                    <li class=""><span></span></li>
                                </ul>
                                <ul class="sequence-canvas">
                                    <li class="animate-in" style="z-index: 2; opacity: 1;">
                                        <div class="row-fluid">
                                            <div class="span3">
                                                <div class="inner">
                                                    <div class="avatar"><img class="circular"
                                                                             src="./templates/green/images/dan_ha_noi.jpg"
                                                                             border="0"
                                                                             alt=""></div>
                                                    <h3 class="title">Nguyễn Duy Long</h3>

                                                    <div class="role">Hà Nội</div>
                                                    <div id="camnghi_1"></div>
                                                    <!--                                        <div class="social"><a class="facebook"
                                                                                                                   href="http://www.beautiful-templates.com/demo/templates-joomla/st_green/#">.</a>
                                                                                                <a class="twitter"
                                                                                                   href="http://www.beautiful-templates.com/demo/templates-joomla/st_green/#">.</a>
                                                                                                <a class="linkedin"
                                                                                                   href="http://www.beautiful-templates.com/demo/templates-joomla/st_green/#">.</a>
                                                                                            </div>-->
                                                    <div class="desc">Mình thích ngồi uống cà phê bệt ở nhà thờ Đức Bà và ngắm nhìn
                                                        mọi người đi lại.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span3">
                                                <div class="inner">
                                                    <div class="avatar"><img class="circular"
                                                                             src="./templates/green/images/nguoi_hue.jpg" border="0"
                                                                             alt=""></div>
                                                    <h3 class="title">Trần Nhật Trung</h3>

                                                    <div class="role">Huế</div>
                                                    <div id="camnghi_2"></div>
                                                    <!--                                        <div class="social"><a class="facebook"
                                                                                                                   href="http://www.beautiful-templates.com/demo/templates-joomla/st_green/#">.</a>
                                                                                                <a class="twitter"
                                                                                                   href="http://www.beautiful-templates.com/demo/templates-joomla/st_green/#">.</a>
                                                                                                <a class="linkedin"
                                                                                                   href="http://www.beautiful-templates.com/demo/templates-joomla/st_green/#">.</a>
                                                                                            </div>-->
                                                    <div class="desc">Tôi rất ít khi về Việt Nam, mà một khi về là phải ghé ngang
                                                        Sài Gòn nắm tay phát
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span3">
                                                <div class="inner">
                                                    <div class="avatar"><img class="circular"
                                                                             src="./templates/green/images/nguoi_da_nang.jpg"
                                                                             border="0"
                                                                             alt=""></div>
                                                    <h3 class="title">Mai Đình Anh</h3>

                                                    <div class="role">Đà Nẵng</div>
                                                    <div id="camnghi_3"></div>
                                                    <!--                                        <div class="social"><a class="facebook"
                                                                                                                   href="http://www.beautiful-templates.com/demo/templates-joomla/st_green/#">.</a>
                                                                                                <a class="twitter"
                                                                                                   href="http://www.beautiful-templates.com/demo/templates-joomla/st_green/#">.</a>
                                                                                                <a class="linkedin"
                                                                                                   href="http://www.beautiful-templates.com/demo/templates-joomla/st_green/#">.</a>
                                                                                            </div>-->
                                                    <div class="desc">Nếu bạn chưa từng ngắm nhìn và tận hưởng cơn mưa Sài Gòn vào
                                                        một bữa chiều oi bức là xem như bạn chưa biết gì về Sài Gòn
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span3">
                                                <div class="inner">
                                                    <div class="avatar"><img class="circular"
                                                                             src="./templates/green/images/nguoi_ho_chi_minh.jpg"
                                                                             border="0"
                                                                             alt=""></div>
                                                    <h3 class="title">Trần Đoàn Khánh Vũ</h3>

                                                    <div class="role">Hồ Chí Minh</div>
                                                    <div id="camnghi_4"></div>
                                                    <!--                                        <div class="social"><a class="facebook"
                                                                                                                   href="http://www.beautiful-templates.com/demo/templates-joomla/st_green/#">.</a>
                                                                                                <a class="twitter"
                                                                                                   href="http://www.beautiful-templates.com/demo/templates-joomla/st_green/#">.</a>
                                                                                                <a class="linkedin"
                                                                                                   href="http://www.beautiful-templates.com/demo/templates-joomla/st_green/#">.</a>
                                                                                            </div>-->
                                                    <div class="desc">Thời tiết Sài Gòn như một cô gái đỏng đảnh tính khí thất
                                                        thường, lúc thì nắng gay gắt, rồi lại mưa ào ạt.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="animate-out" style="opacity: 1; z-index: 1;">
                                        <div class="row-fluid">
                                            <div class="span3">
                                                <div class="inner">
                                                    <div class="avatar"><img class="circular"
                                                                             src="./templates/green/images/nguoi_da_nang.jpg"
                                                                             border="0"
                                                                             alt=""></div>
                                                    <h3 class="title">Mai Đình Anh</h3>

                                                    <div class="role">Đà Nẵng</div>
                                                    <!--                                        <div class="social"><a class="facebook"
                                                                                                                   href="http://www.beautiful-templates.com/demo/templates-joomla/st_green/#">.</a>
                                                                                                <a class="twitter"
                                                                                                   href="http://www.beautiful-templates.com/demo/templates-joomla/st_green/#">.</a>
                                                                                                <a class="linkedin"
                                                                                                   href="http://www.beautiful-templates.com/demo/templates-joomla/st_green/#">.</a>
                                                                                            </div>-->
                                                    <div class="desc">Nếu bạn chưa từng ngắm nhìn và tận hưởng cơn mưa Sài Gòn vào
                                                        một bữa chiều oi bức là xem như bạn chưa biết gì về Sài Gòn
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span3">
                                                <div class="inner">
                                                    <div class="avatar"><img class="circular"
                                                                             src="./templates/green/images/nguoi_ho_chi_minh.jpg"
                                                                             border="0"
                                                                             alt=""></div>
                                                    <h3 class="title">Trần Đoàn Khánh Vũ</h3>

                                                    <div class="role">Hồ Chí Minh</div>
                                                    <!--                                        <div class="social"><a class="facebook"
                                                                                                                   href="http://www.beautiful-templates.com/demo/templates-joomla/st_green/#">.</a>
                                                                                                <a class="twitter"
                                                                                                   href="http://www.beautiful-templates.com/demo/templates-joomla/st_green/#">.</a>
                                                                                                <a class="linkedin"
                                                                                                   href="http://www.beautiful-templates.com/demo/templates-joomla/st_green/#">.</a>
                                                                                            </div>-->
                                                    <div class="desc">Thời tiết Sài Gòn như một cô gái đỏng đảnh tính khí thất
                                                        thường, lúc thì nắng gay gắt, rồi lại mưa ào ạt.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div id="avatar-full-5-block" style="min-height: 600px" position="item-107">
    <div class="content block-default-width">
        <div class="avatar-module ">
            <div class="module-content">
                <div class="custom">
                    <div class="st-onepage">
                        <div class="st-blog" style="width:18%;float:left;margin-right:2%;">
                            <h1 class="st-heading" style="float:left">Nhật kí<button type="button" class="btn btn-success" style="margin-bottom:10px;margin-left:30px;" onclick="PopUpFeedback('Địa Điểm','Nhật Kí');">Phản Hồi</button></h1>
                            <div style="float:left;font-size: large;color:#ffffff;margin-bottom: 20px">
                                <img class="note_select" src="./templates/green/images/du_khach_1.jpg"/>
                                <div>Trần Thanh Hùng</div>
                                <div>Nha Trang</div>
                                <div>10-15/5/2013</div>
                                <div id="nhatki_1"></div>
                            </div>
                            <div style="float:left;font-size: large;color:#ffffff">
                                <img class="note_select" src="./templates/green/images/du_khach_2.jpg"/>
                                <div>Nguyễn Thị Diễm Lệ</div>
                                <div>Hải Phòng</div>
                                <div>6-9/1/2014</div>
                                <div id="nhatki_2"></div>
                            </div>

                            <div style="clear:both"></div>
                        </div>
                        <div id="dialog p_rel" title="Basic modal dialog" style="float:left;width:80%;">
                            <iframe id="frame" src="about:blank" height="610px" style="width:100%;">
                            </iframe>
                        </div>
                        <div style="clear:both"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="avatar-body-bottom-block" position="item-108">
    <div class="content block-default-width">
        <div id="100" class="avatar-module ">
            <div class="module-content">
                <div class="custom">
                    <div class="st-lehoi">
                        <h1 class="st-heading">Lễ hội<button type="button" class="btn btn-success" style="margin-bottom:10px;margin-left:30px;" onclick="PopUpFeedback('Địa Điểm','Lễ Hội');">Phản Hồi</button>
                        </h1>
                        <div class="st-sub-heading">Nét đặc trưng riêng của Sài Gòn</div>

                        <div class="jflatTimeline">
                            <div class="timeline-wrap">
                                <div class="event" data-date="01/01/2014">
                                    <div class="layout3">
                                        <img src="./templates/green/images/tet_duong_lich.jpg" alt="image alt"/>
                                        <h3>Tết Dương Lịch</h3>
                                        <p>Tết Dương lịch hay còn gọi là Tết Tây là một trong những ngày
                                            lễ quan trọng trong năm của nhiều dân tộc trên thế giới. Tết này là ngày đầu
                                            tiên hàng năm theo dương lịch, loại lịch hiện được dùng phổ biến tại Việt Nam,
                                            tuy âm lịch vẫn còn được dùng trong các lễ hội, giỗ, tết hay sự kiện văn hóa cổ.</p>
                                    </div>
                                    <span class="date"><i class="icon-calendar"></i>01.01.2014</span>
                                </div>
                                <div class="event selected" data-date="01/31/2014">
                                    <div class="layout1">
                                        <div class="left"><img src="./templates/green/images/tet_nguyen_dan.jpg" alt="image alt"/></div>
                                        <div class="right">
                                            <h3>Tết Nguyên Đán</h3>
                                            <p>Tết Nguyên Đán (hay còn gọi là Tết Cả, Tết Ta, Tết Âm lịch,
                                                Tết Cổ truyền hay chỉ đơn giản còn gọi là Tết) là dịp lễ quan trọng nhất của
                                                Việt Nam, theo ảnh hưởng văn hóa của Tết Âm lịch Trung Hoa và Vòng văn hóa Đông
                                                Á. Trước ngày Tết, thường có những ngày khác để sửa soạn như "Tết Táo Quân" (23
                                                tháng chạp âm lịch) và "Tất Niên" (29 hoặc 30 tháng chạp âm lịch).</p>
                                        </div>
                                    </div>
                                    <span class="date"><i class="icon-calendar"></i>31.01.2014</span>
                                </div>
                                <div class="event" data-date="09/08/2014">
                                    <div class="layout2">
                                        <div class="left">
                                            <h3>Tết Trung Thu</h3>
                                            <p>Trung thu là giữa mùa thu, Tết Trung Thu như tên gọi đến với chúng ta vào đúng giữa mùa thu tức là vào rằm tháng Tám âm lịch. Tết Trung Thu là tết của trẻ em. Ngay từ đầu tháng, Tết đã được sửa soạn với những cỗ đèn muôn mầu sắc, muôn hình thù, với những bánh dẻo, bánh nướng mà ta gọi gồm là bánh trung thu.</p>
                                        </div>
                                        <div class="right"><img src="./templates/green/images/trung_thu.jpg" alt="image alt"/></div>
                                    </div>
                                    <span class="date"><i class="icon-calendar"></i>08.09.2014</span>
                                </div>
                                <div class="event" data-date="12/25/2014">
                                    <div class="layout3">
                                        <img src="./templates/green/images/giang_sinh.jpg" alt="image alt"/>
                                        <h3>Giáng Sinh</h3>
                                        <p>Lễ Giáng Sinh, còn được gọi là lễ Thiên Chúa giáng sinh, Noel
                                            hay Christmas là một ngày lễ kỷ niệm Chúa Giêsu sinh ra đời, theo phần lớn các
                                            tín hữu Kitô giáo. Họ tin là Chúa Giêsu được sinh tại Bethlehem (Bêlem) thuộc xứ
                                            Judea (Giuđêa) nước Do Thái (ngày nay là 1 thành phố của Palestine), lúc bấy giờ
                                            thuộc Đế quốc La Mã, khoảng giữa năm 7 TCN và năm 2.</p>
                                    </div>
                                    <span class="date"><i class="icon-calendar"></i>25.12.2014</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End avatar-body-bottom-block-->
</div>

<div id="avatar-full-1-example-block" position="item-109">
    <div class="content1">
        <div id="109" class="avatar-module st-our-work">
            <h3 class="st-heading"><span>Ẩm thực</span><button type="button" class="btn btn-success" style="margin-bottom:10px;margin-left:30px;" onclick="PopUpFeedback('Địa Điểm','Ẩm Thực');">Phản Hồi</button></h3>

            <div class="st-module-content">
                <div class="st-content-showcase-wall grey" id="53415ba15888f">
                    <div class="category-wall">
                        <span data-filter="all">Tất cả</span>
                        <span data-filter="main">Món ăn</span>
                        <span data-filter="junk">Ăn vặt</span>
                        <span data-filter="drink">Đồ uống</span>
                        <span data-filter="fruit">Trái cây</span>
                    </div>

                    <!-- Load content -->
                    <div id="content-section">
                        <div id="loader"></div>
                        <div class="main-content">
                            <?php
                            $s_category = array('main', 'drink','fruit','drink','main','fruit','fruit','fruit','junk',);
                            $s_name = array(
                                'Cơm tấm',
                                'Trà chanh đá',
                                'Mít tố nữ',
                                'Nước đá me',
                                'Hủ tiếu nam vang',
                                'Sầu riêng',
                                'Chôm chôm',
                                'Măng cụt',
                                'Bánh tráng trộn',
                            );
                            $s_image = array(
                                './templates/green/images/com_tam.jpg',
                                './templates/green/images/tra_chanh.jpg',
                                './templates/green/images/mit.jpg',
                                './templates/green/images/da_me.jpg',
                                './templates/green/images/hu_tieu_nam_vang.jpg',
                                './templates/green/images/sau_rieng.jpg',
                                './templates/green/images/chom_chom.jpg',
                                './templates/green/images/mang_cut.jpg',
                                './templates/green/images/banh_trang_tron.jpg',
                            );
                            $s_date = '28 October 2013';

                            for ($i = 0; $i < 9; $i++) {
                                ?>
                                <div class="item-content" category="<?php echo $s_category[$i] ?>">
                                    <div class="row-fluid">
                                        <div class="span8"><img src="<?php echo $s_image[$i] ?>" alt="<?php echo $s_name[$i] ?>"/></div>
                                        <div class="span4">
                                            <h3>Project description</h3>
                                            <p><?php echo $s_name[$i] ?></p>
                                            <?php  echo'<div id="amthuc_'.($i+1).'"></div>';?>
                                            <ul class="yt-list type-check" style="">
                                                <li>Illustration</li>
                                                <li>Photoshop</li>
                                                <li>Html/css</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div><!-- End Main Content -->
                        <div class="navigation">
                            <div class="next fa fa-chevron-circle-right"></div>
                            <div class="prev fa fa-chevron-circle-left"></div>
                        </div>
                        <a href="#" id="close" class="fa-times-circle"></a>
                    </div><!-- End content-section -->

                    <div class="layout-wall">
                        <?php 	for ($i = 0; $i < 9; $i++) { ?>
                            <div class="item <?php echo $s_category[$i] ?>">
                                <a class="link" href="#"></a>
                                <div class="inner">
                                    <div class="media">
                                        <img src="<?php echo $s_image[$i] ?>" alt="Column image and text"/>
                                    </div>
                                    <div class="info image">
                                        <h3 class="title">
                                            <?php echo $s_category[$i] ?>
                                            <?php  echo '<div id="amthuc_current_'.($i+1).'"></div>';?>
                                        </h3>
                                        <div class="date"><?php echo $s_date ?></div>
                                        <div style="clear:both"></div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div> <!-- End layout wall -->
                </div>
            </div>
        </div>
    </div>
</div> <!-- End avatar-full-1-example-block -->

<script type="text/javascript">
window.addEvent('load', function () {
    new JCaption('img.caption');
});

//Slider at beginning of the webpage
jQuery.noConflict();
(function ($) {
    $(document).ready(function () {
        var layerOptions = {"width": "100%", "height": "700px", "cols": "1", "effects": "door", "layout": "_slide.php", "autoPlay": "1", "autoPlayDelay": "3000", "nav": true, "pagination": true};

        if (layerOptions.nav) {
            layerOptions.nextButton = "#533d731796900 .sequence-next";
            layerOptions.prevButton = "#533d731796900 .sequence-prev";
        }

        if (layerOptions.pagination) {
            layerOptions.pagination = "#533d731796900 .sequence-pagination"
        }
        var options533d731796900 = layerOptions;

        var mySequence533d731796900 = $("#533d731796900").sequence(options533d731796900).data("sequence");
    });
})(jQuery);

//below for the photo gallery
jQuery.noConflict();
(function ($) {
    var wallParams = {"copyright": "1", "moduleclass_sfx": "st-our-work", "item_id": "105", "count": "20", "extension": "wall", "source": "article", "title": "1", "title_link": "0", "introtext": "0", "introtext_length": 0, "image": "1", "image_link": "1", "category": "0", "auto_find_image": "1", "seo_link": "1", "article_catid": ["9", "10", "11", "12", "13", "14"], "article_featured": "0", "article_ordering": "a.publish_up", "k2_catid": "", "k2_itemsOrdering": "", "k2_image_size": "M", "folder_sync": "0", "folder_image": [""], "folder_ititle": [""], "folder_ilink": [""], "folder_iintrotext": [""], "virtuemart_product_group": "featured", "virtuemart_category": "", "phocagallery_category": "", "phocagallery_ordering": "1", "joomgallery_category": "", "joomgallery_ordering": "rand()", "jgallery_catid": "", "jgallery_ordering": "rand()", "wall_grid_cols": "4", "wall_grid_cols_320": "1", "wall_grid_cols_480": "1", "wall_grid_cols_767": "3", "wall_item_width": "1", "wall_category": "1", "wall_style": "grey.css", "wall_modal": "1", "wall_show_content": "1", "wall_created_date": "1", "accoridion_cols": "3", "news_horizonal_cols": "3", "news_horizonal_readmore": "", "news_horizonal_pre_text": "", "news_horizonal_image": "1", "news_horizonal_date": "1", "flex_width": "100%", "flex_animation": "slide", "flex_direction": "horizontal", "flex_animationLoop": "1", "flex_smoothHeight": "0", "flex_slideshow": "1", "flex_slideshowSpeed": "7000", "flex_animationSpeed": "600", "flex_initDelay": "0", "flex_pauseOnAction": "1", "flex_pauseOnHover": "0", "flex_useCSS": "1", "flex_touch": "1", "flex_controlNav": "1", "flex_directionNav": "1", "flex_preText": "Preview", "flex_nextText": "Next", "flex_keyboard": "1", "flex_multipleKeyboard": "0", "flex_mousewheel": "0", "flex_pausePlay": "0", "flex_pauseText": "", "flex_playText": "", "flex_itemWidth": "0", "flex_minItems": "0", "flex_maxItems": "0", "flex_move": "0", "flex_modal": "0", "galleria_width": "100%", "galleria_height": "450px", "galleria_autoplay": "5000", "galleria_easing": "galleria", "galleria_fullscreenDoubleTap": "1", "galleria_imageCrop": "false", "galleria_imageMargin": "0", "galleria_imagePan": "true", "galleria_imagePanSmoothness": "8", "galleria_imagePosition": "center", "galleria_initialTransition": "slide", "galleria_transition": "fade", "galleria_trueFullscreen": "true", "galleria_transitionSpeed": "400", "galleria_pauseOnInteraction": "true", "galleria_preload": "2", "galleria_queue": "true", "galleria_responsive": "true", "galleria_show": "0", "galleria_showCounter": "true", "galleria_showInfo": "true", "galleria_showImageNav": "true", "galleria_swipe": "true", "galleria_thumbnails": "true", "galleria_thumbMargin": "0", "galleria_thumbQuality": "true", "slider_content_width": "100%", "slider_content_height": "", "slider_content_cols": 3, "slider_content_readmore": "", "slider_content_image": "1", "slider_content_date": "1", "layer_slider_width": "100%", "layer_slider_height": "300px", "layer_slider_cols": "1", "layer_slider_effects": "breaking_news", "layer_slider_layout": "_slide.php", "layer_slider_html": "true", "layer_slider_autoPlay": "true", "layer_slider_autoPlayDelay": "3000", "layer_slider_nav": "true", "layer_slider_pagination": "true", "layer_slider_thumbnail_image": "true", "module_tag": "div", "bootstrap_size": "0", "header_tag": "h3", "header_class": "", "style": "0"};
    var show_content = parseInt('1');
    setCols = function (contain, containerWidth, cols) {
        var widthWindow = $(window).width();

        if (widthWindow <= 320) {
            cols = wallParams.wall_grid_cols_320;
        } else if (widthWindow <= 480) {
            cols = wallParams.wall_grid_cols_480;
        } else if (widthWindow <= 767) {
            cols = wallParams.wall_grid_cols_767;
        }

        if (widthWindow <= 320) {
            itemWidth = containerWidth / wallParams.wall_grid_cols_320;
        } else if (widthWindow <= 480) {
            itemWidth = containerWidth / wallParams.wall_grid_cols_480;
        } else if (widthWindow <= 767) {
            itemWidth = containerWidth / wallParams.wall_grid_cols_767;
        } else {
            itemWidth = containerWidth / cols - 0.1;
        }

        $(contain + ' .item').each(function (el) {
            if (wallParams.wall_item_width == 'auto') {
                width = $(this).width();
                offset = Math.round(width / itemWidth);
                $(this).css('width', itemWidth * offset);
            } else {
                $(this).css('width', itemWidth);
            }
        });

        return cols;
    }

    $(document).ready(function () {
        var wrapper = $('#53415ba15888f');
        var contain = wrapper.find('.layout-wall');

        contain.imagesLoaded(function () {
            var cols = setCols('#53415ba15888f', contain.width(), wallParams.wall_grid_cols);
            var options = {};
            if (wallParams.wall_fit_row != '0') {
                options.layoutMode = 'fitRows';
            }

            contain.isotope(options);

            // update columnWidth on window resize
            $(window).on('throttledresize', function (event) {
                cols = setCols('#53415ba15888f', contain.width(), wallParams.wall_grid_cols);
            });

            $('a[rel=53415ba15888f]').fancybox({
                'titlePosition': 'outside',
                'overlayColor': '#000',
                'overlayOpacity': 0.9,
                'titlePosition': 'over'
            });
        });

        // category
        wrapper.find('.category-wall span[data-filter="all"]').addClass('current');
        wrapper.find('.category-wall span').each(function () {
            $(this).click(function () {
                var className = $(this).attr('data-filter');
                if (className == 'all') {
                    className = 'item';
                }

                contain.isotope({ filter: '.' + className});
                wrapper.find('.category-wall span').removeClass('current');
                $(this).addClass('current');

                if (show_content == 1) {
                    //Remove content when click category
                    wrapper.find('#content-section').removeClass('open');
                    contain.find('.item').removeClass('active');
                    $('#content-section .main-content').find('.item-content').removeClass('active');
                }
            });
        });

        if (show_content == 1) {

            //Set content
            list_item = contain.find('.item');
            var count = 0;

            var item_content = $('#content-section .main-content').find('.item-content');

            var our_work = $('.st-our-work .category-wall').offset().top,
                our_work_H = $('.st-our-work .category-wall').height();

            var menuH = $('#avatar-header-inside-block').height();

            var eindex = 0;
            var offset = -125;
            var category = "";
            var cat_all_item = null;

            $(list_item).click(function () {
                wrapper.find('#content-section').addClass('open');
                $('#content-section').addClass('click');
                list_item.removeClass('active');
                $(this).addClass('active');

                category = $(this).attr("class").replace('item', '').replace('active', '').trim();
                cat_all_item = $('.' + category);

                $('.item-content').removeClass('active');
                item_content = $('div[category="' + category + '"]');
                eindex = cat_all_item.index(this);
                count = cat_all_item.length;

                $('body,html').animate({
                    scrollTop: our_work - menuH + our_work_H + offset
                }, 1000, function () {
                    $(this).addClass('active');
                    //item_content.removeClass('active');
                    item_content.eq(eindex).addClass('active');
                });

                setTimeout(function () {
                    $('#content-section').removeClass('click');
                }, 1200);
            });

            //Event with next button
            $('#53415ba15888f #content-section .next').click(function () {
                $('#content-section').addClass('click');
                eindex++;
                if (eindex == count) {
                    eindex = 0;
                }

                $('body,html').animate({
                    scrollTop: our_work - menuH + our_work_H + offset
                }, 1000, function () {
                    //list_item.removeClass('active');
                    //list_item.eq(eindex).addClass('active');
                    cat_all_item.removeClass('active');
                    cat_all_item.eq(eindex).addClass('active');
                    item_content.removeClass('active');
                    item_content.eq(eindex).addClass('active');
                });

                setTimeout(function () {
                    $('#content-section').removeClass('click');
                }, 1200);
            });


            //Event with prev button
            $('#53415ba15888f #content-section .prev').click(function () {
                $('#content-section').addClass('click');
                eindex--;
                if (eindex == -1) {
                    eindex = count - 1;
                }

                $('body,html').animate({
                    scrollTop: our_work - menuH + our_work_H + offset
                }, 1000, function () {
                    //list_item.removeClass('active');
                    //list_item.eq(eindex).addClass('active');
                    cat_all_item.removeClass('active');
                    cat_all_item.eq(eindex).addClass('active');
                    item_content.removeClass('active');
                    item_content.eq(eindex).addClass('active');
                });

                setTimeout(function () {
                    $('#content-section').removeClass('click');
                }, 1200);
            });

            $('#53415ba15888f #content-section #close').click(function () {
                //list_item.removeClass('active');
                cat_all_item.removeClass('active');
                item_content.removeClass('active');
                wrapper.find('#content-section').removeClass('open');
                return false;
            });
            return false;
        }

    });
})(jQuery);
</script>
<script type="text/javascript">
    jQuery.noConflict();
    (function ($) {
        $(document).ready(function () {
            if ($('body').hasClass('avatar-responsive')) {
                var mainMenu = $('.navbar > ul');

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

    jQuery.noConflict();
    (function($){
        $(document).ready(function(){
            var layerOptions = {"width":"100%","height":"auto","cols":"4","effects":"breaking_news","layout":"_slide.php","html":true,"autoPlay":false,"autoPlayDelay":"3000","nav":true,"pagination":true};

            if (layerOptions.nav) {
                layerOptions.nextButton = "#dactrung_slide .sequence-next";
                layerOptions.prevButton = "#dactrung_slide .sequence-prev";
            }

            //layerOptions.preventDelayWhenReversingAnimations = true;
            //layerOptions.transitionThreshold = 3000;

            if (layerOptions.pagination) { layerOptions.pagination = "#dactrung_slide .sequence-pagination" }
            var optionsdactrung_slide = layerOptions;

            var mySequencedactrung_slide = $("#dactrung_slide").sequence(optionsdactrung_slide).data("sequence");
        });
    })(jQuery);

    jQuery.noConflict();
    (function($){
        $(document).ready(function(){
            var layerOptions = {"width":"100%","height":"345px","cols":"4","effects":"breaking_news","layout":"_slide.php","html":true,"autoPlay":false,"autoPlayDelay":"3000","nav":true,"pagination":true};

            if (layerOptions.nav) {
                layerOptions.nextButton = "#thamquan_slide .sequence-next";
                layerOptions.prevButton = "#thamquan_slide .sequence-prev";
            }

            //layerOptions.preventDelayWhenReversingAnimations = true;
            //layerOptions.transitionThreshold = 3000;

            if (layerOptions.pagination) { layerOptions.pagination = "#thamquan_slide .sequence-pagination" }
            var optionsthamquan_slide = layerOptions;

            var mySequencethamquan_slide = $("#thamquan_slide").sequence(optionsthamquan_slide).data("sequence");
        });
    })(jQuery);

    jQuery.noConflict();
    (function($){
        $(document).ready(function(){
            var layerOptions = {"width":"100%","height":"800px","cols":"4","effects":"breaking_news","layout":"_slide.php","html":true,"autoPlay":false,"autoPlayDelay":"3000","nav":true,"pagination":true};

            if (layerOptions.nav) {
                layerOptions.nextButton = "#camnghi_slide .sequence-next";
                layerOptions.prevButton = "#camnghi_slide .sequence-prev";
            }

            //layerOptions.preventDelayWhenReversingAnimations = true;
            //layerOptions.transitionThreshold = 3000;

            if (layerOptions.pagination) { layerOptions.pagination = "#camnghi_slide .sequence-pagination" }
            var optionscamnghi_slide = layerOptions;

            var mySequencecamnghi_slide = $("#camnghi_slide").sequence(optionscamnghi_slide).data("sequence");
        });
    })(jQuery);


    /*    window.addEvent('domready', function() {

     SqueezeBox.initialize({});
     SqueezeBox.assign($$('a.modal'), {
     parse: 'rel'
     });
     });*/


</script>
<script type="text/javascript">
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
                $("#frame").attr("src", "./templates/green/blog.php");
            });

            $("#displayArticle").click(function () {
                window.open("./templates/green/wiki.php", '_blank');
            });

            $("div.jflatTimeline").jflatTimeline({
                scroll: "2",
                scrollingTime: "300"
            })

            $('#dactrung_1').raty({
                cancel:true
            });
            $('#dactrung_2').raty({
                cancel:true
            });
            $('#dactrung_3').raty({
                cancel:true
            });
            $('#dactrung_4').raty({
                cancel:true
            });
            $('#thamquan_1').raty({
                cancel:true
            });
            $('#thamquan_2').raty({
                cancel:true
            });
            $('#thamquan_3').raty({
                cancel:true
            });
            $('#thamquan_4').raty({
                cancel:true
            });
            $('#camnghi_1').raty({
                cancel:true
            });
            $('#camnghi_2').raty({
                cancel:true
            });
            $('#camnghi_3').raty({
                cancel:true
            });
            $('#camnghi_4').raty({
                cancel:true
            });

            for(i = 0; i < 9; i++) {
                $('#amthuc_' + (i+1)).raty({
                    cancel:true
                });
                $('#amthuc_current_' + (i+1)).raty({
                    readOnly: true,
                    score: Math.floor((Math.random() * 3) + 3)
                });
            }

            $('#nhatki_1').raty({
                readOnly: true,
                score: 4.9
            });
            $('#nhatki_2').raty({
                readOnly: true,
                score: 4.4
            });
        });
    })(jQuery)
</script>

