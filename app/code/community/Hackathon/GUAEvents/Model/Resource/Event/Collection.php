<?php
/**
 * Event Collection
 *
 * @author David Robinson <david.robinson@aoe.com>
 * @since 2014-09-21
 */

class Hackathon_GUAEvents_Model_Resource_Event_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'hackathon_guaevents_event_collection';

    /**
     * Parameter name in event
     *
     * @var string
     */
    protected $_eventObject = 'collection';

    /**
     * Init Collection
     */
    protected function _construct()
    {
        $this->_init('hackathon_guaevents/event');
    }
}