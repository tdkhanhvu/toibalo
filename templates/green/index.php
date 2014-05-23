<?php

$doc = JFactory::getDocument();

$doc->addStyleSheet('./media/jui/css/bootstrap.css');
$doc->addStyleSheet('./media/jui/css/bootstrap-responsive.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/jquery.miniColors.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/style.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/timeline.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/grey.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/system.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/general.css');
//$doc->addStyleSheet('templates/' . $this->template . '/css/editor.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/layout.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/core_joomla.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/responsive.css');
//$doc->addStyleSheet('templates/' . $this->template . '/css/bootstrap.min.css');
//$doc->addStyleSheet('templates/' . $this->template . '/css/bootstrap-responsive.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/template.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/font-awesome.min.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/dropdown/select2.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/weather/weather.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/tooltip/jQuery.iPicture.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/Button/button.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/accordion/jquery-ui.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/datepicker/datepicker.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/datepicker/datepicker_layout.css');


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

//Lich trinh
$doc->addScript('./templates/' . $this->template . '/js/date.js', 'text/javascript');
$doc->addScript('./templates/' . $this->template . '/js/datepicker/datepicker.js', 'text/javascript');
$doc->addScript('./templates/' . $this->template . '/js/dropdown/select2.min.js', 'text/javascript');
$doc->addScript('./templates/' . $this->template . '/js/jquery.easing.min.js', 'text/javascript');
$doc->addScript('./templates/' . $this->template . '/js/zaccordion/jquery.zaccordion.min.js', 'text/javascript');
$doc->addScript('./templates/' . $this->template . '/js/tooltip/ipicture-square.js', 'text/javascript');
$doc->addScript('./templates/' . $this->template . '/js/Accordion/jquery-ui.js', 'text/javascript');

$option =  JRequest::getVar('option'); // De phan loai trang
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
<body id="avatar-template" class="avatar-responsive css3-effect  onepage-appear" style="opacity: 1;">
<!-- Top -->
<a name="top" id="top"></a>

<div class="clearfix">
	
		
	<!-- 2. Main Menu-->
	
	<div class='navbar'>
		<div class='container'>
			<div class='row p_rel'>
				<div class='span2'>
					<a class="navbar-brand" href=".">
					<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/logo.png" width="75px">
					</a>
				</div>
				<div class='span10 f_right'>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="nav-collapse collapse ">
						<ul class="nav">
							<!--<li><a href="/features/">Features</a></li>-->
							<?php if ($option == 'com_diadiem') { ?>
								<!--<li class="item-101"><a class="body" href="">Home</a></li>-->
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
                                    <a class=".st-projects"	href="#">Xuất Phát</a>
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
                                <li><a href="#">Thông Tin</a></li>
                            <?php } else if ($option == 'com_video') { ?>
                                <li><a href="#">Thông Tin</a></li>
                            <?php } else { ?>
								<li><a href="#">About</a></li>
								<li><a href="#">Blog</a></li>
								<li class="sep"></li><li>
								</li><li><a href="#">Log in</a></li>
								<li class="signup"><a href="#">Sign up</a></li>	
							<?php } ?>
						</ul>
					</div>
					<div class="clearbreak"></div>
				</div>
			</div>
		</div>
	</div> <!--Nav Bar -->

	<!-- 3. Content -->
	<div class='tbl_content'>
        <?php if (($option != 'com_diadiem') && ($option != 'com_lichtrinh')) { ?>
            <div class='container' id="wrapper">
        <?php } ?>
            <jdoc:include type="component" />
        <?php if (($option != 'com_diadiem') && ($option != 'com_lichtrinh')) { ?>
            </div>
        <?php } ?>
	</div> <!-- End Content -->
	
	<!-- 4. Footer -->
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
	
	<!-- 5. Debug-->
	<jdoc:include type="modules" name="debug" />
	
</div><!-- End Clearfix-->

</body>
</html>