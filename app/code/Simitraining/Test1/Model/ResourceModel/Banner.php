<?php
namespace Simitraining\Test1\Model\ResourceModel;


class Banner extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
	
	public function __construct(
		\Magento\Framework\Model\ResourceModel\Db\Context $context
	)
	{
		parent::__construct($context);
	}
	
	protected function _construct()
	{
		$this->_init('simiconnector_banner', 'banner_id');
	}
	
}