<?php

$doc = JFactory::getDocument();

$option =  JRequest::getVar('option'); // De phan loai trang

if ($option != "com_data") {
    $doc->addStyleSheet('./media/jui/css/bootstrap.min.css');
    $doc->addStyleSheet('./media/jui/css/bootstrap-theme.css');
    $doc->addStyleSheet('./media/jui/css/bootstrap-responsive.css');
    $doc->addStyleSheet('templates/' . $this->template . '/css/jquery.miniColors.css');
    $doc->addStyleSheet('templates/' . $this->template . '/css/style.css');
    $doc->addStyleSheet('templates/' . $this->template . '/css/grey.css');
    $doc->addStyleSheet('templates/' . $this->template . '/css/system.css');
    $doc->addStyleSheet('templates/' . $this->template . '/css/general.css');
    $doc->addStyleSheet('templates/' . $this->template . '/css/layout.css');
    $doc->addStyleSheet('templates/' . $this->template . '/css/core_joomla.css');
    $doc->addStyleSheet('templates/' . $this->template . '/css/responsive.css');
    $doc->addStyleSheet('templates/' . $this->template . '/css/template.css');
    $doc->addStyleSheet('templates/' . $this->template . '/css/font-awesome.css');
    $doc->addStyleSheet('templates/' . $this->template . '/css/dropdown/select2.css');
    $doc->addStyleSheet('templates/' . $this->template . '/css/weather/weather.css');
    $doc->addStyleSheet('templates/' . $this->template . '/css/tooltip/jQuery.iPicture.css');
    $doc->addStyleSheet('templates/' . $this->template . '/css/Button/button.css');
    $doc->addStyleSheet('templates/' . $this->template . '/css/accordion/jquery-ui.css');
    $doc->addStyleSheet('templates/' . $this->template . '/css/jquery-ui-1.8.19.custom.css');
    $doc->addStyleSheet('templates/' . $this->template . '/css/res-timeline.css');
    $doc->addStyleSheet('templates/' . $this->template . '/css/popup.min.css');
    $doc->addStyleSheet('templates/' . $this->template . '/css/rating/rating.css');

    $doc->addScript('./media/jui/js/jquery.min.js', 'text/javascript');
    $doc->addScript('./media/jui/js/jquery-noconflict.js', 'text/javascript');
    $doc->addScript('./media/jui/js/jquery-migrate.min.js', 'text/javascript');
    $doc->addScript('./media/system/js/tabs-state.js', 'text/javascript');
    $doc->addScript('./media/system/js/caption.js', 'text/javascript');

    $doc->addScript('./templates/' . $this->template . '/js/mootools-core.js', 'text/javascript');//Hinh Anh
    $doc->addScript('./templates/' . $this->template . '/js/jquery.sequence.js', 'text/javascript');//Am Thuc
    $doc->addScript('./templates/' . $this->template . '/js/load-images.js', 'text/javascript');//Am Thuc + Le Hoi
    $doc->addScript('./templates/' . $this->template . '/js/shortcodes.js', 'text/javascript');
    $doc->addScript('./templates/' . $this->template . '/js/isotope.js', 'text/javascript');
    $doc->addScript('./templates/' . $this->template . '/js/jquery.fancybox-1.3.4.pack.js', 'text/javascript');
    $doc->addScript('./templates/' . $this->template . '/js/bootstrap.js', 'text/javascript');
    $doc->addScript('./templates/' . $this->template . '/js/avatar-template.js', 'text/javascript');
    $doc->addScript('./templates/' . $this->template . '/js/jquery.bootstrap-growl.min.js', 'text/javascript');

    //Lich trinh
    $doc->addScript('./templates/' . $this->template . '/js/date.js', 'text/javascript');
    $doc->addScript('./templates/' . $this->template . '/js/vi-VN.js', 'text/javascript');
    $doc->addScript('./templates/' . $this->template . '/js/dropdown/select2.min.js', 'text/javascript');
    $doc->addScript('./templates/' . $this->template . '/js/jquery.easing.min.js', 'text/javascript');
    $doc->addScript('./templates/' . $this->template . '/js/tooltip/ipicture-square.js', 'text/javascript');
    $doc->addScript('./templates/' . $this->template . '/js/Accordion/jquery-ui.js', 'text/javascript');

    //Dia Diem
    $doc->addScript('./templates/' . $this->template . '/js/res-timeline.js', 'text/javascript');
    $doc->addScript('./templates/' . $this->template . '/js/jquery.bpopup.min.js', 'text/javascript');
    $doc->addScript('./templates/' . $this->template . '/js/rating/rating.js', 'text/javascript');
}

?>

<!--Vu's comment for testing TaiVT-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- saved from url=(0066)http://www.beautiful-templates.com/demo/templates-joomla/st_green/ -->
<html lang="en-gb" dir="ltr" slick-uniqueid="3" xmlns:jdoc="http://www.w3.org/1999/XSL/Transform">
<head>
<jdoc:include type="head"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript">jQuery.noConflict();</script>
<base href=".">

<meta name="keywords" content="joomla templates, portfolio, one page, green, orange">
<meta name="author" content="Super User">
<meta name="description"
      content="Tôi Ba Lô">
<meta name="generator" content="Joomla! - Open Source Content Management">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

<title>Home</title>
<!-- <link rel="stylesheet" href="./css/jquery.miniColors.css" type="text/css" media="all"> -->
</head>

<body id="<?php if ($option == 'com_content') { echo "homepage";} else { echo "avatar-template";} ?>" class="avatar-responsive css3-effect  onepage-appear" style="opacity: 1;">
<script type="text/javascript">
    function PopUpFeedback(page, section) {
        jQuery('#popup').bPopup();
        jQuery('#inputPage').val(page);
        jQuery('#inputSection').val(section);
    }

    function SubmitFeedback() {
        alert(jQuery('#inputName').val() + '\n' + jQuery('#inputEmail').val() + '\n' + jQuery('#rating').find('input').val() + '\n' + jQuery('#comment').val());

        return;
    }
</script>

<!-- Top -->
<a name="top" id="top"></a>
<script>
    jQuery.noConflict();
    (function ($) {
        $(document).ready(function () {
            $.fn.raty.defaults.path = './templates/green/images/rating';

            $('#rating').raty({
                click: function(score, evt) {
                    //alert('ID: ' + $(this).attr('id') + "\nscore: " + score + "\nevent: " + evt);
                },
                cancel:true
            });
        });
    })(jQuery)
</script>
<div class="clearfix">
	
		
	<!-- 2. Main Menu-->
    <?php if ($option != 'com_content') { ?>
	<div class='navbar'>
		<div class='container'>
			<div class='row p_rel'>
				<div class='span2' style="margin-left:0px;">
					<a class="navbar-brand" href=".">
					<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/logo.png" width="75px" style="margin-top:-10px;">
					</a>
				</div>
				<div class='span10 f_right' style="margin-left:0px;">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="nav-collapse collapse " style="display:block;">
						<ul class="nav navbar-nav">
							<?php if ($option == 'com_diadiem') { ?>
								<li class="item-102 current active">
									<a class=".st-top-slider" href="#">Hình Ảnh</a>	
								</li>
								<li class="item-103">
									<a class=".st-features" href="#">Đặc Trưng</a>
								</li>
								<li class="item-104">
									<a class=".st-projects"	href="#">Tham Quan</a>		
								</li>
								<li class="item-105">
									<a class=".st-home" href="#">Bài Viết</a>			
								</li>
								<li class="item-106">
									<a class=".st-team" href="#">Cảm Nghĩ</a>								
								</li>
								<li class="item-107">
									<a class="#avatar-full-5-block" href="#">Nhật Kí</a>
								</li>
								<li class="item-108">
									<a class="#avatar-body-bottom-block" href="#">Lễ Hội</a>
								</li>
								<li class="item-109">
									<a class="#avatar-full-1-example-block" href="#">Ẩm Thực</a>			
								</li>
                            <?php } else if ($option == 'com_lichtrinh') { ?>
                                <li class="item-104 current active">
                                    <a class=".st-projects"	href="#">Thời Điểm</a>
                                </li>
                                <li class="item-101">
                                    <a class="#transportation" href="#">Phương Tiện</a>
                                </li>
                                <li class="item-105">
                                    <a class=".st-home" href="#">Tham Quan</a>
                                </li>
                                <li class="item-106">
                                    <a class="#st-advice" href="#">Lời Khuyên</a>
                                </li>
                                <li class="item-107">
                                    <a class="#st-food" href="#">Ẩm Thực</a>
                                </li>
                                <li class="item-108">
                                    <a class="#avatar-body-bottom-block" href="#">Chi Phí</a>
                                </li>
							<?php } else if ($option == 'com_thongtin') { ?>
                                <li><a href="#" >Thông Tin</a></li>
                            <?php } else if ($option == 'com_video') { ?>
                                <li><a href="#" >Thông Tin</a></li>
                            <?php } else if ($option == 'com_profile') { ?>
                                <li><a href="#" >Profile</a></li>
                            <?php } else if ($option == 'com_data') { ?>
                            <?php } else { ?>
								<li><a href="#" >About</a></li>
								<li><a href="#" >Blog</a></li>
								<li class="sep" ></li><li>
								</li><li><a href="#" >Log in</a></li>
								<li class="signup"><a href="#" >Sign up</a></li>
							<?php } ?>
						</ul>
					</div>
					<div class="clearbreak"></div>
				</div>
			</div>
		</div>
	</div>
	<?php } else { ?>
		<div id='tbl_cover'>
			<ul>
				<li id='tbl_name'><a href='#'>Name Card</a></li>
				<li id='tbl_coin'><a href='#'>Name Card</a></li>
				<li id='tbl_picture'><a href='#'>Name Card</a></li>
			</ul>
		</div>
	  <div id='tbl_search'>
		<div class='tbl_search_title'>Plan your perfect trip</div>
		<form class='tbl_search_form'>
			<div class='button'>
				<input id='search_des' onclick='?option=com_video' class='' title='Tim Kiem' type='submit' value="Let's go"/>
			</div>
			<select id="tbl_des" class="" name="option" tabindex="8" onfocus="" onchange="">
				<option value="com_video" selected="selected">Sai Gon</option>
				<option value="com_video">Ha Noi</option>
				<option value="com_video">Da Nang</option>
				<option value="com_video">Hue</option>
				<option value="com_video">Quang Ngai</option>
				<option value="com_video">...</option>
			</select>
		</form>
		<div class='clearfix'></div>
	</div>
	<?php  } ?>
	<!--Nav Bar -->

	<!-- 3. Content -->
	<div class='tbl_content'>
        <?php if (($option != 'com_diadiem') && ($option != 'com_lichtrinh')) { ?>
            <div class='container' id="wrapper">
        <?php } ?>
            <?php if (($option != 'com_content') && ($option != 'com_video')) { ?>
            <div id="tbl_nav" class="container">
                <ul>
                    <li class="xp"><a href=".">Xuat Phat</a></li>
                    <li class="kp  <?php if ($option == 'com_diadiem') {echo "active"; } ?>"><a href="?option=com_diadiem">Kham Pha</a></li>
                    <li class="kh <?php if ($option == 'com_lichtrinh') {echo "active"; } ?>"><a href="?option=com_lichtrinh">Ke Hoach</a></li>
                    <li class="tbl <?php if ($option == 'com_thongtin') {echo "active"; } ?>"><a href="?option=com_thongtin">Toi Ba Lo</a></li>
                </ul>
            </div>
            <?php } ?>

            <jdoc:include type="component" />
        <?php if (($option != 'com_diadiem') && ($option != 'com_lichtrinh')) { ?>
            </div>
        <?php } ?>
	</div> <!-- End Content -->
	
	<!-- 4. Footer -->
    <?php if ($option != 'com_content') { ?>
	<div class='footer'>
		<div class='container'>
			<div class='row'>
				<div class='span12'>
					<p>Copyright &copy; 2014 Toibalo All rights reserved.</p>
						<ul >
							<li><a href="#">About</a></li>
							<li><a href="#">Terms of Use</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li class='last'><a href="#">Contact Us</a></li>					
						</ul>
				</div>
			</div>
		</div>
	</div><!-- End Footer -->
    <?php } ?>
	<!-- 5. Debug-->
	<jdoc:include type="modules" name="debug" />
	
</div><!-- End Clearfix-->

<div id="popup">
    <span class="button b-close"><span>X</span></span>
    <form role="form" class="form-horizontal">
        <div class="form-group">
            <label for="inputPage" class="col-sm-2 control-label">Trang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPage" value="" disabled>
            </div>
        </div>
        <div class="form-group">
            <label for="inputSection" class="col-sm-2 control-label">Mục</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputSection" value="" disabled>
            </div>
        </div>
        <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Họ Tên</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputName" placeholder="Họ Tên">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="rating" class="col-sm-2 control-label">Đánh Giá</label>
            <div class="col-sm-10">
                <div id="rating"></div>
            </div>
        </div>
        <div class="form-group">
            <label for="comment" class="col-sm-2 control-label">Nhận Xét</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="comment" rows="3"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="inputFile" class="col-sm-2 control-label">Upload</label>
            <div class="col-sm-10">
                <input type="file" id="inputFile">
            </div>
        </div>
        <div class="form-group">


            <div class="col-sm-offset-5 col-sm-10" style="text-align:center">
                <button type="button" class="btn btn-default" onclick="SubmitFeedback();">Gửi</button>
            </div>
        </div>
    </form>
</div>


</body>
</html>