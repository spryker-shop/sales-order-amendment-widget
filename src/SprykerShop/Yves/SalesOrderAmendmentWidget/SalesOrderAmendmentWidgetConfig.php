<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\SalesOrderAmendmentWidget;

use Spryker\Yves\Kernel\AbstractBundleConfig;

class SalesOrderAmendmentWidgetConfig extends AbstractBundleConfig
{
    /**
     * @uses \SprykerShop\Yves\CustomerPage\Plugin\Router\CustomerPageRouteProviderPlugin::ROUTE_NAME_CUSTOMER_ORDER
     *
     * @var string
     */
    protected const ROUTE_FAILURE_REDIRECT = 'customer/order';

    /**
     * @uses \SprykerShop\Yves\CartPage\Plugin\Router\CartPageRouteProviderPlugin::ROUTE_NAME_CART
     *
     * @var string
     */
    protected const ROUTE_SUCCESSFUL_REDIRECT = 'cart';

    /**
     * Specification:
     * - Returns the URL to redirect to when the amendment process is failed.
     *
     * @api
     *
     * @return string
     */
    public function getAmendmentFailureRedirectUrl(): string
    {
        return static::ROUTE_FAILURE_REDIRECT;
    }

    /**
     * Specification:
     * - Returns the URL to redirect to when the amendment process is successful.
     *
     * @api
     *
     * @return string
     */
    public function getAmendmentSuccessfulRedirectUrl(): string
    {
        return static::ROUTE_SUCCESSFUL_REDIRECT;
    }
}
