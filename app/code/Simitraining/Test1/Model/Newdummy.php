<?php
namespace Simitraining\Test1\Model;

class Newdummy extends \Magento\Framework\Model\AbstractModel
{
	public function getCustomers() {
		$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
		$customers  = $objectManager->create('Magento\Customer\Model\Customer')->getCollection();
		return $customers->getData();
	}
}