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

namespace Risecommerce\ReviewReminder\Controller\Adminhtml\Log;

use Risecommerce\ReviewReminder\Model\ReviewReminderLog;
use Magento\Backend\App\Action;


class Delete extends Action
{
    /**
     * StoreLocation Model
     *
     * @param array
     */
    protected $model;

    /**
     * Delete constructor.
     * @param Action\Context $context
     * @param ReviewReminderLog $model
     */
    public function __construct(
        Action\Context $context,
        ReviewReminderLog $model
    ) {
        $this->model = $model;
        parent::__construct($context);
    }

    /**
     * Delete action
     *
     * @return $this
     */
    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($id) {
            try {
                $this->model->load($id);
                $this->model->delete();
                $this->messageManager->addSuccess(__('Log has been deleted successfully.'));
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
                return $resultRedirect->setPath('*/*/index', ['id' => $id]);
            }
        }
        $this->messageManager->addError(__('We can\'t find log to delete.'));
        return $resultRedirect->setPath('*/*/');
    }
}
