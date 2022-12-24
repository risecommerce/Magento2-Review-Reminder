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


class IncludeExclude implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Path to configuration, set select options for distance unit
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => '', 'label' => __('Please select....')],
            ['value' => 'included', 'label' => __('Included')],
            ['value' => 'excluded', 'label' => __('Excluded')]
        ];
    }
}
