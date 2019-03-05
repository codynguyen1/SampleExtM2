<?php

namespace Simitraining\Test1\Controller\Cody;

class Simi extends \Magento\Framework\App\Action\Action

{
	protected $_pageFactory;
	protected $_bannerFactory;
	public $datatoprint;


	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Simitraining\Test1\Model\BannerFactory $bannerFactory,
		\Magento\Framework\View\Result\PageFactory $pageFactory
	)
	{
		$this->_pageFactory = $pageFactory;
		$this->_bannerFactory = $bannerFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
		/*
		$newBannerModel = $objectManager->create('Simitraining\Test1\Model\Banner');
		$newBannerModel->setData('banner_name', 'New Name');
		$newBannerModel->setData('banner_url', 'http://google.com');

		$newBannerModel->save();
		die('success');
		*/



		//$banner = $objectManager->create('Simitraining\Test1\Model\Banner');
		//$bannerCollection = $banner->getCollection();
		//$bannerCollection->addFieldToFilter('banner_name', 'New Name');
		//$firstBanner = $bannerCollection->getFirstItem();

		/*
		$bannerThu4 = $objectManager->create('Simitraining\Test1\Model\Banner')->load(4);
		$bannerThu4->setData('banner_name', 'Thu 4');
		$bannerThu4->save();
		$datatoprint = $bannerThu4->getData();
		*/
		/*

		$bannerThu5 = $objectManager->create('Simitraining\Test1\Model\Banner')->load(5);
		$bannerThu5->delete();
		exit('success');
		*/
$dummy = $objectManager->create('Simitraining\Test1\Model\Dummy');
var_dump(get_class($dummy));die;
/*
		$banner = $objectManager->create('Simitraining\Test1\Model\Banner');
		$bannerCollection = $banner->getCollection();
		$this->datatoprint = $bannerCollection->getData();
		$datatoprint = $this->datatoprint;
		$eventManager = $objectManager->get('\Magento\Framework\Event\ManagerInterface');
		$eventManager->dispatch(
		   'my_event_name',
		   ['object' => $this, 'mydata' => $datatoprint]
		);
		//var_dump($datatoprint);die;
*/
		header('Content-Type: application/json');
		echo json_encode($this->datatoprint);
		exit;
	}
}