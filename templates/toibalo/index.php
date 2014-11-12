<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Getting params from template
$params = JFactory::getApplication()->getTemplate(true)->params;

$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;
$this->direction = $doc->direction;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->getCfg('sitename');

if($task == "edit" || $layout == "form" )
{
	$fullWidth = 1;
}
else
{
	$fullWidth = 0;
}

// Add JavaScript Frameworks
//JHtml::_('bootstrap.framework');
$doc->addScript('templates/' .$this->template. '/js/bootstrap.js');
$doc->addScript('templates/' .$this->template. '/js/jquery-ui.js');


// Add Stylesheets
$doc->addStyleSheet('templates/'.$this->template.'/css/bootstrap.min.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/template.css');
//JHtml::_('bootstrap.loadCss', false, $this->direction);

$doc->addStyleSheet('templates/'.$this->template.'/css/font-awesome.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/bootstrap-theme.css');


// Add current user information
$user = JFactory::getUser();


// Logo file or site title param
if ($this->params->get('logoFile'))
{
	$logo = '<img src="'. JUri::root() . $this->params->get('logoFile') .'" alt="'. $sitename .'" />';
}
elseif ($this->params->get('sitetitle'))
{
	$logo = '<span class="site-title" title="'. $sitename .'">'. htmlspecialchars($this->params->get('sitetitle')) .'</span>';
}
else
{
	$logo = '<span class="site-title" title="'. $sitename .'">'. $sitename .'</span>';
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<jdoc:include type="head" />

	<!--[if lt IE 9]>
		<script src="<?php echo $this->baseurl ?>/media/jui/js/html5.js"></script>
	<![endif]-->
</head>

<body class="site <?php echo $option
	. ' view-' . $view
	. ($layout ? ' layout-' . $layout : ' no-layout')
	. ($task ? ' task-' . $task : ' no-task')
	. ($itemid ? ' itemid-' . $itemid : '')
	. ($params->get('fluidContainer') ? ' fluid' : '');
?>">
	<header>
		<div class="container-fluid">
			<div class='row'>
				<div class="header-left col-md-2">
					<!-- Button Homepage -->
					<div class="header-home"><a href="." alt="Trang Chủ"><span class="img-tbl tbl-logo-mini"></span></a></div>
					<!-- List of Place-->
					<div class="header-place"><h3>Sài Gòn<span class="glyphicon glyphicon-chevron-down pull-right"></span></h3>
					<ul class="dropdown-left">
						<li>Hà Nội</li>
						<li>Đà Nẵng</li>
						<li>Hội An</li>
						<li>Huế</li>
						<li>Quảng Ngãi</li>
						<li>Phú Quốc</li>
						<li>Đà Lạt</li>
						<li>Miền Nam</li>
						<li>Miền Bắc</li>
						<li>Miền Trung</li>
					</ul>
					</div>
				</div>
				<div class="col-md-1"></div>
				<!-- Search -->
				<div class="header-middle col-md-5">
					<form role="search">
						<div class="input-group">
						  <input type="text" class="form-control" placeholder="Search">
						  <span class="input-group-btn">
							<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
						  </span>
						</div>
					</form>
				</div>
				<div class="col-md-1"></div>
				<div class="header-right col-md-3">
					<!-- Button Hidden Nav Right -->
					<div class="header-hidden"><span class="glyphicon glyphicon-chevron-down"></span></div>
					<!-- Information of User -->
					<div class="header-avatar">
						<img src="templates/toibalo/images/avatar.jpg" alt="avatar" class="img-circle img-responsive">
					</div>
					<div class="input-group">
					  <div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Võ Thành Tài <span class="caret"></span></button>
						<ul class="dropdown-menu dropdown-menu-right" role="menu">
						  <li><a href="#">Action</a></li>
						  <li><a href="#">Another action</a></li>
						  <li><a href="#">Something else here</a></li>
						  <li class="divider"></li>
						  <li><a href="#">Separated link</a></li>
						</ul>
					  </div><!-- /btn-group -->
					</div><!-- /input-group -->
				</div>
			</div>
		</div>
	</header>
	<div class="nav-left">
		<ul>
			<li><a href="" class="fa fa-home"><span>Trang Chủ</span></a></li>
			<li><a href="" class="fa fa-camera-retro"><span>Hình Ảnh</span></a></li>
			<li><a href="" class="fa fa-video-camera"><span>Video</span></a></li>
			<li><a href="" class="fa fa-star"><span>Đặc Trưng</span></a></li>
			<li><a href="" class="fa fa-cutlery"><span>Ẩm Thực</span></a></li>
			<li><a href="" class="fa fa-pencil"><span>Nhật Kí</span></a></li>
			<li><a href="" class="fa fa-map-marker"><span>Tham Quan</span></a></li>
			<li><a href="" class="fa fa-flag-o"><span>Lễ Hội</span></a></li>
		</ul>
	</div>
	<div class="nav-right">	
		<ul>
			<li><a href="" class="fa fa-map-marker"></a></li>
			<li><a href="" class="fa fa-pencil"></a></li>
			<li><a href="" class="fa fa-star"></a></li>
			<li><a href="" class="fa fa-flag-o"></a></li>
			<li><a href="" class="fa fa-video-camera"></a></li>
		</ul>		
	</div>
	<div id="content" class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-8">Content
				<ul class="pagination" style="display:none">
				  <li><a href="#">&laquo;</a></li>
				  <li class="active"><a href="#">1</a></li>
				  <li><a href="#">2</a></li>
				  <li><a href="#">3</a></li>
				  <li><a href="#">4</a></li>
				  <li><a href="#">5</a></li>
				  <li><a href="#">&raquo;</a></li>
				</ul>
			</div>
			<div class="col-md-3 content_right">
				<div class="box-right lehoi">
					<div class="box-right-title">
						<p>Lễ Hội</p>
					</div>
					<div class="box-right-content">
						<ul>
							<li>
								<a href="" alt>
								<span class="bx_avatar"><img src="templates/toibalo/images/sg_lh_01.jpg" alt="avatar" class="img-circle img-responsive"></span>
								<span class="bx_title">Giáng Sinh</span>
								<span class="bx_content">Lễ hội đường phố chào đón Giáng sinh. Nằm trên hai tuyến phố đông đúc ... </span>
								</a>
							</li>
							<li>
								<a href="" alt>
								<span class="bx_avatar"><img src="templates/toibalo/images/sg_lh_03.jpg" alt="avatar" class="img-circle img-responsive"></span>
								<span class="bx_title">Halloween</span>
								<span class="bx_content">Gợi ý 10 địa điểm vui chơi Halloween ở Sài Gòn ... </span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="box-right comment">
					<div class="box-right-title">
						<p>Cảm Nghĩ</p>
					</div>
					<div class="box-right-content">
						Avatar+ Content + Time
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->
	<footer>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-8">
					<div class="footer-holder">
						<span class="img-tbl tbl-logo"></span>
						<div class="footer-text">
							<p>Copyright &copy; <?php echo date('Y'); ?> <?php echo $sitename; ?></p>
							<p>About Us | Contact Us | Term | Help</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 footer-icon">
					<p>Connect with us:</p>
					<a href=""><span class="fa fa-facebook-square"></span></a>
					<a href=""><span class="fa fa-linkedin-square"></span></a>
					<a href=""><span class="fa fa-twitter-square"></span></a>
					<a href=""><span class="fa fa-youtube-square"></span></a>
					<a href=""><span class="fa fa-pinterest-square"></span></a>
				</div>
			</div>
		</div>
	</footer>

</body>
</html>
