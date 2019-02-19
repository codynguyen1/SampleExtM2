<?php

namespace Simitraining\Test1\Controller\Cody;

class Simi extends \Magento\Framework\App\Action\Action

{
	protected $_pageFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		$newArray = array(
			'chau'=>'thaibinh',
			'tuan'=>'hanoi',
		)
		;
		header('Content-Type: application/json');
		echo json_encode($newArray);
exit();
		echo '<h2> xin chao </h2>';

	}
}