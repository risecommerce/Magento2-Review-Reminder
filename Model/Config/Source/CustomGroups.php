<?php
/**
 * Risecommerce ReviewReminder
 * php version 7.0.31
 *
 * @category Risecommerce
 * @package  Risecommerce_ReviewReminder
 * @author   Risecommerce <magento@risecommerce.com>
 * @license  https://www.risecommerce.com  Open Software License (OSL 3.0)
 * @link     https://www.risecommerce.com
 */

namespace Risecommerce\ReviewReminder\Model\Config\Source;

use \Magento\Customer\Model\ResourceModel\Group\Collection;

class CustomGroups implements \Magento\Framework\Option\ArrayInterface
{
    protected $_customerGroup;

    protected $_options;

    public function __construct( Collection $customerGroup ) {
        $this->_customerGroup = $customerGroup; 
    }

    /**
     * Customer groups without all groups value.
     *
     * @return array
     */
    public function toOptionArray() {
        if (!$this->_options) {
            $this->_options = $this->_customerGroup->toOptionArray();
        }
        return $this->_options;
    }
   
}
