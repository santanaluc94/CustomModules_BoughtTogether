<?php

namespace Magezil\BoughtTogether\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Store\Model\ScopeInterface;

/**
 * Class Data
 *
 * @category Magento
 * @package  Magezil_BoughtTogether
 * @author   Lucas Teixeira dos Santos Santana <santanaluc94@gmail.com>
 * @license  NO-LICENSE #
 * @link     http://github.com/santanaluc94
 */
class Data extends AbstractHelper
{
    const MODULE_ENABLE = 'magezil_bought_together/general/enable';
    const BOUGHT_TOGETHER_LOGGED_IN = 'magezil_bought_together/general/user_logged';
    const BOUGHT_TOGETHER_TITLE = 'magezil_bought_together/general/title';
    const BOUGHT_TOGETHER_QUANTITY = 'magezil_bought_together/general/products_qty';
    const SHOW_WISHLIST = 'magezil_bought_together/cards_configuration/show_wishlist';
    const SHOW_COMPARE = 'magezil_bought_together/cards_configuration/show_compare';
    const SHOW_QTY_PRODUCTS = 'magezil_bought_together/cards_configuration/qty_products';

    protected $scopeConfig;
    protected $storeManager;

    public function __construct(
        ScopeConfigInterface $scopeConfig,
        StoreManagerInterface $storeManager
    ) {
        $this->scopeConfig = $scopeConfig;
        $this->storeManager = $storeManager;
    }

    /**
     * Check module is enable
     */
    public function isEnabled(): bool
    {
        return $this->scopeConfig->isSetFlag(
            self::MODULE_ENABLE,
            ScopeInterface::SCOPE_WEBSITE
        );
    }

    /**
     * Is bought together must be logged in
     */
    public function isBoughtTogetherLoggedIn(): bool
    {
        return $this->scopeConfig->isSetFlag(
            self::BOUGHT_TOGETHER_LOGGED_IN,
            ScopeInterface::SCOPE_WEBSITE
        );
    }

    /**
     * Has Frequently Bought Together Title
     */
    public function hasBoughtTogetherTitle(): bool
    {
        return $this->scopeConfig->isSetFlag(
            self::BOUGHT_TOGETHER_TITLE,
            ScopeInterface::SCOPE_WEBSITE
        );
    }

    /**
     * Get Frequently Bought Together Title
     */
    public function getBoughtTogetherTitle(): string
    {
        return $this->scopeConfig->getValue(
            self::BOUGHT_TOGETHER_TITLE,
            ScopeInterface::SCOPE_WEBSITE
        );
    }

    /**
     * Has quantity Products of Frequently Bought Together
     */
    public function hasBoughtTogetherProductsQty(): bool
    {
        return $this->scopeConfig->isSetFlag(
            self::BOUGHT_TOGETHER_QUANTITY,
            ScopeInterface::SCOPE_WEBSITE
        );
    }

    /**
     * Get quantity Products of Frequently Bought Together
     */
    public function getBoughtTogetherProductsQty(): string
    {
        return $this->scopeConfig->getValue(
            self::BOUGHT_TOGETHER_QUANTITY,
            ScopeInterface::SCOPE_WEBSITE
        );
    }

    /**
     * Is show wishlist in bought together cards
     */
    public function isShowWishlist(): bool
    {
        return $this->scopeConfig->isSetFlag(
            self::SHOW_WISHLIST,
            ScopeInterface::SCOPE_WEBSITE
        );
    }

    /**
     * Is show compare in bought together cards
     */
    public function isShowCompare(): bool
    {
        return $this->scopeConfig->isSetFlag(
            self::SHOW_COMPARE,
            ScopeInterface::SCOPE_WEBSITE
        );
    }

    /**
     * Is show quantity products in bought together cards
     */
    public function isShowQtyProducts(): bool
    {
        return $this->scopeConfig->isSetFlag(
            self::SHOW_QTY_PRODUCTS,
            ScopeInterface::SCOPE_WEBSITE
        );
    }
}
