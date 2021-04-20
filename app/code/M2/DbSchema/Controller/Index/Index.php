<?php

namespace M2\DbSchema\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;

    protected $schemaUserFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \M2\DbSchema\Model\SchemaUserFactory $schemaUserFactory
    )
    {
        $this->_pageFactory = $pageFactory;
        $this->schemaUserFactory = $schemaUserFactory;
        return parent::__construct($context);
    }

    /**
     * Only for fast testing
     */
    public function execute()
    {
        $post = $this->schemaUserFactory->create();
        $collection = $post->getCollection();
        foreach ($collection as $item) {
            echo "<pre>";
            print_r($item->getData());
            echo "</pre>";
        }
        exit();
    }
}
