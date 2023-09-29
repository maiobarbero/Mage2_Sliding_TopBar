<?php
namespace MaioDev\SlidingTopBar\Block;

class TopBar extends \Magento\Framework\View\Element\Template
{
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    public function getTopBarText()
    {
        return $this->_scopeConfig->getValue(
            'maiodev_topbar/sliding_topbar/sliding_topbar_text',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
    public function getSpeed()
    {
        return $this->_scopeConfig->getValue(
            'maiodev_topbar/sliding_topbar/sliding_topbar_speed'
        );
    }
    public function isSlidingActive()
    {
        return $this->_scopeConfig->getValue(
            'maiodev_topbar/sliding_topbar/sliding_topbar_is_sliding'
        );
    }
}