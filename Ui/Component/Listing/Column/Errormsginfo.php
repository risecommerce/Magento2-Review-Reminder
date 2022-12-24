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

namespace Risecommerce\ReviewReminder\Ui\Component\Listing\Column;

use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Ui\Component\Listing\Columns\Column;
use Risecommerce\ReviewReminder\Model\ReviewReminderLogFactory;


class Errormsginfo extends Column
{

    /**
     * @var ReviewReminderLogFactory
     */
    private $reviewReminderLogFactory;
    /**
     * Constructor
     *
     * @param ContextInterface   $context            Context
     * @param UiComponentFactory $uiComponentFactory UiComponentFactory
     * @param UrlInterface       $urlBuilder         UrlBuilder
     * @param array              $components         Components
     * @param array              $data               Data
     */
    public function __construct(
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        ReviewReminderLogFactory $reviewReminderLogFactory,
        array $components = [],
        array $data = []
    ) {
        $this->reviewReminderLogFactory = $reviewReminderLogFactory;
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }

    /**
     * Prepare Data Source
     *
     * @param array $dataSource DataSource
     *
     * @return array
     */
    public function prepareDataSource(array $dataSource)
    {
        $reviewReminderLogFactory = $this->reviewReminderLogFactory->create();
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as &$item) {
                if (isset($item['review_reminder_id'])) {
                    $reviewReminderLogFactory->load($item['review_reminder_id']);
                    $errormsg = $reviewReminderLogFactory->getErrormsg();
                    $status = $reviewReminderLogFactory->getStatus();
                    if($status == 'Error') {
                        $item[$this->getData('name')] = html_entity_decode("<p title=\"$errormsg\" style='color:#ff0000;text-decoration:underline;cursor:default;'>" . $status . "</p>");
                    } else {
                        $item[$this->getData('name')] = $status;
                    }
                }
            }
        }
        return $dataSource;
    }
}
