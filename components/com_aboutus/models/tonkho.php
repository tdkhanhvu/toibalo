<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_search
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Search Component Search Model
 *
 * @package     Joomla.Site
 * @subpackage  com_search
 * @since       1.5
 */
class TonkhoModelTonkho extends JModelLegacy
{
    /**
     * @var string msg
     */
    protected $msg;

    /**
     * Get the message
     * @return string The message to be displayed to the user
     */
    public function getMsg()
    {
        if (!isset($this->msg))
        {

            $jinput = JFactory::getApplication()->input;
            $id     = $jinput->get('id', 1, 'INT');

            // Get a db connection.
            $db = JFactory::getDbo();

            // Create a new query object.
            $query = $db->getQuery(true);

            $query->select($db->quoteName(array('id', 'title')))
                ->from($db->quoteName('#__categories'))
                ->where('published = 1 AND extension = "com_content" AND parent_id ='.$id);
            $db->setQuery($query);
            $link = $db->loadAssocList();
            //var_dump($link);die();
            $this->msg = $link;
        }
        return $this->msg;
    }
}
