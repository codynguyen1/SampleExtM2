<?php
namespace Simitraining\Test1\Model\ResourceModel\Banner;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'banner_id';
	protected $_eventPrefix = 'simitraining_test1_banner_collection';
	protected $_eventObject = 'banner_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Simitraining\Test1\Model\Banner', 'Simitraining\Test1\Model\ResourceModel\Banner');
	}

}