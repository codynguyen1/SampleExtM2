<?php
namespace Simitraining\Test1\Model;

class Banner extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'simitraining_test1_banner';

	protected $_cacheTag = 'simitraining_test1_banner';

	protected $_eventPrefix = 'simitraining_test1_banner';

	protected function _construct()
	{
		$this->_init('Simitraining\Test1\Model\ResourceModel\Banner');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}
