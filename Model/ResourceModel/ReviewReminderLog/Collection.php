<?php
/**
 * Risecommerce ReviewReminder
 * php version 7.0.31
 *
 * @category Risecommerce
 * @package   Risecommerce_ReviewReminder
 * @author   Risecommerce <magento@risecommerce.com>
 * @license  https://www.risecommerce.com  Open Software License (OSL 3.0)
 * @link     https://www.risecommerce.com
 */

namespace Risecommerce\ReviewReminder\Model\ResourceModel\ReviewReminderLog;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'review_reminder_id';
    protected $_eventPrefix = 'review_reminder_entity_collection';
    protected $_eventObject = 'review_reminder_collection';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            \Risecommerce\ReviewReminder\Model\ReviewReminderLog::class,
            \Risecommerce\ReviewReminder\Model\ResourceModel\ReviewReminderLog::class
        );
    }
}
