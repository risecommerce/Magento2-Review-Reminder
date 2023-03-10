<?php
/**
 * Risecommerce ReviewReminder Module
 * php version 7.0.31
 *
 * @category Risecommerce
 * @package  Risecommerce_ReviewReminder
 * @author   Risecommerce <magento@risecommerce.com>
 * @license  https://www.risecommerce.com  Open Software License (OSL 3.0)
 * @link     https://www.risecommerce.com
 */
namespace Risecommerce\ReviewReminder\Api\Data;


interface ReviewReminderInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const REVIEW_REMINDER_ID = 'review_reminder_id';
    const ORDER = 'order_increment_id';
    const RECEIVER = 'email';
    const STATUS     = 'status';
    const ERRORMSG = 'errormsg';
    const CREATION_TIME = 'creation_time';
    const NO_OF_TIME_SENT = 'no_of_time_sent';
    const SCHEDULE_AT   = 'schedule_at';
    const PRODUCT   = 'product';
    const CUSTOMER_GROUP_ID   = 'customer_group_id';
    const ORDER_ID   = 'order_id';
    const NAME   = 'name';

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();
    /**
     * Get Order
     *
     * @return string
     */
    public function getOrder();
    /**
     * Get Receiver
     *
     * @return string|null
     */
    public function getReceiver();
    /**
     * Get Status
     *
     * @return string|null
     */
    public function getStatus();
     /**
     * Get Error Message
     *
     * @return string|null
     */
    public function getErrormsg();
    /**
     * Get Creation Time
     *
     * @return string|null
     */
    public function getCreationTime();
    /**
     * Get Schedule At
     *
     * @return string|null
     */
    public function getScheduleAt();
    /**
     * Get No Of Time Sent
     *
     * @return string|null
     */
    public function getNoOfTimeSent();
    /**
     * Get Product
     *
     * @return string|null
     */
    public function getProduct();
    /**
     * Get Customer Group Id
     *
     * @return string|null
     */
    public function getCustomerGroupId();
    /**
     * Get Name
     *
     * @return string|null
     */
    public function getName();
    /**
     * Get OrderId
     *
     * @return string|null
     */
    public function getOrderId();
    /**
     * Set ID
     *
     * @param int $id
     * @return \Risecommerce\ReviewReminder\Api\Data\ReviewReminderInterface
     */
    public function setId($id);
    /**
     * Set Order
     *
     * @param string $order
     * @return \Risecommerce\ReviewReminder\Api\Data\ReviewReminderInterface
     */
    public function setOrder($order);
    /**
     * Set Receiver
     *
     * @param $receiver
     * @return \Risecommerce\ReviewReminder\Api\Data\ReviewReminderInterface
     */
    public function setReceiver($receiver);
    /**
     * Set Status
     *
     * @param $status
     * @return \Risecommerce\ReviewReminder\Api\Data\ReviewReminderInterface
     */
    public function setStatus($status);
    /**
     * Set Error Message
     *
     * @param $errormsg
     * @return \Risecommerce\ReviewReminder\Api\Data\ReviewReminderInterface
     */
    public function setErrormsg($errormsg);
    /**
     * Set creation time
     *
     * @param string $creationTime
     * @return \Risecommerce\ReviewReminder\Api\Data\ReviewReminderInterface
     */
    public function setCreationTime($creationTime);

    /**
     * Set No Of Time Sent
     *
     * @param $noOfTimeSent
     * @return \Risecommerce\ReviewReminder\Api\Data\ReviewReminderInterface
     */
    public function setNoOfTimeSent($noOfTimeSent);
    /**
     * Set Schedule At
     *
     * @param $scheduleAt
     * @return \Risecommerce\ReviewReminder\Api\Data\ReviewReminderInterface
     */
    public function setScheduleAt($scheduleAt);
    /**
     * Set Product
     *
     * @param $product
     * @return \Risecommerce\ReviewReminder\Api\Data\ReviewReminderInterface
     */
    public function setProduct($product);
    /**
     * Set Customer Group Id
     *
     * @param $customerGroupId
     * @return \Risecommerce\ReviewReminder\Api\Data\ReviewReminderInterface
     */
    public function setCustomerGroupId($customerGroupId);
    /**
     * Set Order Id
     *
     * @param $orderId
     * @return \Risecommerce\ReviewReminder\Api\Data\ReviewReminderInterface
     */
    public function setOrderId($orderId);
    /**
     * Set Name
     *
     * @param $name
     * @return \Risecommerce\ReviewReminder\Api\Data\ReviewReminderInterface
     */
    public function setName($name);
}
