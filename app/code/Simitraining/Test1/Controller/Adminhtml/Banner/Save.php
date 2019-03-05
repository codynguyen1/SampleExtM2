<?php

namespace Simitraining\Test1\Controller\Adminhtml\Banner;

use Magento\Backend\App\Action;

class Save extends \Magento\Backend\App\Action
{

    /**
     * Save action
     *
     * @return void
     */
    public function execute()
    {
        $data = $this->getRequest()->getPostValue();
        $simiObjectManager = $this->_objectManager;
        $model = $simiObjectManager->create('Simi\Simiconnector\Model\Banner');

        $id = $this->getRequest()->getParam('banner_id');
        if ($id) {
            $model->load($id);
        }
        $data['category_id'] = isset($data['category_id'])?$data['category_id']:0;

        $is_delete_banner    = isset($data['banner_name']['delete']) ? $data['banner_name']['delete'] : false;
        $model->addData($data);

        try {
            $model->save();
            $this->messageManager->addSuccess(__('The Data has been saved.'));
            $simiObjectManager->get('Magento\Backend\Model\Session')->setFormData(false);
            $simiObjectManager->get('Simi\Simiconnector\Helper\Data')->flushStaticCache();
            if ($this->getRequest()->getParam('back')) {
                $this->_redirect('*/*/edit', ['banner_id' => $model->getId(), '_current' => true]);
                return;
            }
            $this->_redirect('*/*/');
            return;
        } catch (\Magento\Framework\Model\Exception $e) {
            $this->messageManager->addError($e->getMessage());
        } catch (\RuntimeException $e) {
            $this->messageManager->addError($e->getMessage());
        } catch (\Exception $e) {
            $this->messageManager->addException($e, __('Something went wrong while saving the data.'));
        }

        $this->_getSession()->setFormData($data);
        $this->_redirect('*/*/edit', ['banner_id' => $this->getRequest()->getParam('banner_id')]);
    }
}
