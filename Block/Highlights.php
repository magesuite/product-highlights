<?php

namespace MageSuite\ProductHighlights\Block;

class Highlights extends \Magento\Framework\View\Element\Template
{
    protected $_template = 'MageSuite_ProductHighlights::product_highlights.phtml';

    /**
     * @var Registry
     */
    protected $registry;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\Registry $registry,
        array $data
    )
    {
        $this->registry = $registry;

        parent::__construct($context, $data);
    }

    public function getProductHighlights()
    {
        $attribute = $this->getAttributesList() ?? 'short_description';

        $product = $this->registry->registry('product');

        if (is_array($attribute)) {
            $attributesData = [];

            foreach ($attribute as $attributeCode) {
                $attributesData[$attributeCode] = $product->getData($attributeCode);
            }
            return $attributesData;
        }

        return $product->getData($attribute);
    }
}
