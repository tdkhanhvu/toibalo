<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
JHtml::_('behavior.tabstate');

//require_once JPATH_COMPONENT.'/helpers/route.php';
//require_once JPATH_COMPONENT.'/helpers/query.php';

//$controller = JControllerLegacy::getInstance('Content');
//$controller->execute(JFactory::getApplication()->input->get('task'));
//$controller->redirect();
?>

        <!-- search --> 
        <div class='p_rel'>
            <!-- Hot News -->
            <div id='tbl_news'>
                <div class='news_avatar'>
                    <img src="./templates/green/images/avatar.jpg" alt="Avatar"  />
                </div>
                <div class='news_content'>Minh dang chuan bi len ke hoach di ...</div>
            </div>
            <!-- Search Destination and Make a plan -->
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
            <!-- Background Homepage 
            <div id='bg_homepage'>
                <img src="./templates/green/images/bg_main.jpg" alt="Main Background" class="Background" />
            </div>
        </div>

        <!-- mid container - includes main content area and right sidebar 
        <div class='row' id='tbl_box'>
            <?php
            $bo_title = array ('Traveller','Picture','Comment',);
            for($i = 0; $i < 3; $i++) {
                ?>
                <div class='span4'>
                    <div class='box_title'><?php $bo_title[$i] ?></div>
                    <div class='box_content'>
                        <div class='box_image'>

                        </div>
                        <div class='box_comment'>

                        </div>
                    </div>
                </div>
            <?php } ?>

<div class='clearfix'></div>

</div>
<div class='span9'>		</div>
-->