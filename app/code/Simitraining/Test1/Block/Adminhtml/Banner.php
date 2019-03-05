<?php


namespace Simitraining\Test1\Block\Adminhtml;

class Banner extends \Magento\Backend\Block\Widget\Grid\Container
{

    public function _construct()
    {
        $this->_controller     = 'adminhtml_banner';
        $this->_blockGroup     = 'Simitraining_Test1';
        $this->_headerText     = __('Banner');
        $this->_addButtonLabel = __('Add New Banner');
        parent::_construct();
        $this->buttonList->update('add', 'label', __('Add Banner'));
    }

    public function _isAllowedAction($resourceId)
    {
        return true;
    }
}
