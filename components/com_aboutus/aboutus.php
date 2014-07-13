<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); //code bao mat cua joomla

/*require_once JPATH_COMPONENT.'/helpers/route.php';
require_once JPATH_COMPONENT.'/helpers/query.php';*/
// Get an instance of the controller prefixed by <name>
$controller = JControllerLegacy::getInstance('Aboutus');

// Perform the Request task
$controller->execute(JFactory::getApplication()->input->get('task'));

// Redirect if set by the controller
$controller->redirect();


?>
