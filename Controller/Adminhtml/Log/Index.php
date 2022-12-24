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

namespace Risecommerce\ReviewReminder\Controller\Adminhtml\Log;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Risecommerce\ReviewReminder\Helper\Data;

class Index extends \Magento\Backend\App\Action
{
    /**
     * @var PageFactory
     */
    protected $resultPageFactory;
    /**
     * @var Data
     */
    private $data;

    /**
     * Index constructor.
     * @param Context $context
     * @param PageFactory $resultPageFactory
     * @param Data $data
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        Data $data
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->data = $data;
        parent::__construct($context);
    }

    /**
     * Index action execute
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        if ($this->data->getGeneralConfig('enabled') == 0) {
            $resultRedirect = $this->resultRedirectFactory->create();
            return $resultRedirect->setPath('admin/dashboard/index', ['_current' => true]);
        }
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Risecommerce_ReviewReminder::ReviewReminder');
        $resultPage->getConfig()->getTitle()->prepend(__('Review Reminder Log'));
        return $resultPage;
    }
}
