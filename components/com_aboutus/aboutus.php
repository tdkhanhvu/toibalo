<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); //code bao mat cua joomla

// Add CSS file for all pages
$doc = JFactory::getDocument();
$doc->addStyleSheet('components/com_aboutus/assets/css/aboutus.css');
$doc->addScript('./media/jui/js/jquery.min.js', 'text/javascript');
$doc->addScript('components/com_aboutus/assets/js/imagesLoaded.js');
$doc->addScript('components/com_aboutus/assets/js/skrollr.js');
$doc->addScript('components/com_aboutus/assets/js/_main.js');

/*require_once JPATH_COMPONENT.'/helpers/route.php';
require_once JPATH_COMPONENT.'/helpers/query.php';*/
// Get an instance of the controller prefixed by <name>
$controller = JControllerLegacy::getInstance('Aboutus');

// Perform the Request task
$controller->execute(JFactory::getApplication()->input->get('task'));

// Redirect if set by the controller
$controller->redirect();


?>
