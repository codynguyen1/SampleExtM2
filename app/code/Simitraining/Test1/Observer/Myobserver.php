<?php

namespace Simitraining\Test1\Observer;

use Magento\Framework\Event\ObserverInterface;

class Myobserver implements ObserverInterface
{

    public function __construct(
        \Magento\Framework\ObjectManagerInterface $simiObjectManager
    ) {
        $this->simiObjectManager = $simiObjectManager;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
    	$datatoChange = $observer->getData('mydata');
    	foreach ($datatoChange as $key => $value) {
    		$datatoChange[$key]['cody'] = '123123';
    	}
    	$object = $observer->getData('object');
    	$observer->setData('mydata', $datatoChange);
    	$object->datatoprint = $datatoChange;
    }
}
