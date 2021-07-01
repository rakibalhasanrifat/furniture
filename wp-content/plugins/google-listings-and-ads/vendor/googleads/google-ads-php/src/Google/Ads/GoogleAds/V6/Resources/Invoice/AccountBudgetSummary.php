<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/resources/invoice.proto

namespace Google\Ads\GoogleAds\V6\Resources\Invoice;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a summarized account budget billable cost.
 *
 * Generated from protobuf message <code>google.ads.googleads.v6.resources.Invoice.AccountBudgetSummary</code>
 */
class AccountBudgetSummary extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the customer associated with this account budget.
     * This contains the customer ID, which appears on the invoice PDF as
     * "Account ID".
     * Customer resource names have the form:
     * `customers/{customer_id}`
     *
     * Generated from protobuf field <code>string customer = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $customer = null;
    /**
     * Output only. The descriptive name of the account budget’s customer. It appears on the
     * invoice PDF as "Account".
     *
     * Generated from protobuf field <code>string customer_descriptive_name = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $customer_descriptive_name = null;
    /**
     * Output only. The resource name of the account budget associated with this summarized
     * billable cost.
     * AccountBudget resource names have the form:
     * `customers/{customer_id}/accountBudgets/{account_budget_id}`
     *
     * Generated from protobuf field <code>string account_budget = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $account_budget = null;
    /**
     * Output only. The name of the account budget. It appears on the invoice PDF as "Account
     * budget".
     *
     * Generated from protobuf field <code>string account_budget_name = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $account_budget_name = null;
    /**
     * Output only. The purchase order number of the account budget. It appears on the
     * invoice PDF as "Purchase order".
     *
     * Generated from protobuf field <code>string purchase_order_number = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $purchase_order_number = null;
    /**
     * Output only. The pretax subtotal amount attributable to this budget during the service
     * period, in micros.
     *
     * Generated from protobuf field <code>int64 subtotal_amount_micros = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $subtotal_amount_micros = null;
    /**
     * Output only. The tax amount attributable to this budget during the service period, in
     * micros.
     *
     * Generated from protobuf field <code>int64 tax_amount_micros = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $tax_amount_micros = null;
    /**
     * Output only. The total amount attributable to this budget during the service period,
     * in micros. This equals the sum of the account budget subtotal amount and
     * the account budget tax amount.
     *
     * Generated from protobuf field <code>int64 total_amount_micros = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $total_amount_micros = null;
    /**
     * Output only. The billable activity date range of the account budget, within the
     * service date range of this invoice. The end date is inclusive. This can
     * be different from the account budget's start and end time.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.common.DateRange billable_activity_date_range = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $billable_activity_date_range = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer
     *           Output only. The resource name of the customer associated with this account budget.
     *           This contains the customer ID, which appears on the invoice PDF as
     *           "Account ID".
     *           Customer resource names have the form:
     *           `customers/{customer_id}`
     *     @type string $customer_descriptive_name
     *           Output only. The descriptive name of the account budget’s customer. It appears on the
     *           invoice PDF as "Account".
     *     @type string $account_budget
     *           Output only. The resource name of the account budget associated with this summarized
     *           billable cost.
     *           AccountBudget resource names have the form:
     *           `customers/{customer_id}/accountBudgets/{account_budget_id}`
     *     @type string $account_budget_name
     *           Output only. The name of the account budget. It appears on the invoice PDF as "Account
     *           budget".
     *     @type string $purchase_order_number
     *           Output only. The purchase order number of the account budget. It appears on the
     *           invoice PDF as "Purchase order".
     *     @type int|string $subtotal_amount_micros
     *           Output only. The pretax subtotal amount attributable to this budget during the service
     *           period, in micros.
     *     @type int|string $tax_amount_micros
     *           Output only. The tax amount attributable to this budget during the service period, in
     *           micros.
     *     @type int|string $total_amount_micros
     *           Output only. The total amount attributable to this budget during the service period,
     *           in micros. This equals the sum of the account budget subtotal amount and
     *           the account budget tax amount.
     *     @type \Google\Ads\GoogleAds\V6\Common\DateRange $billable_activity_date_range
     *           Output only. The billable activity date range of the account budget, within the
     *           service date range of this invoice. The end date is inclusive. This can
     *           be different from the account budget's start and end time.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V6\Resources\Invoice::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the customer associated with this account budget.
     * This contains the customer ID, which appears on the invoice PDF as
     * "Account ID".
     * Customer resource names have the form:
     * `customers/{customer_id}`
     *
     * Generated from protobuf field <code>string customer = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getCustomer()
    {
        return isset($this->customer) ? $this->customer : '';
    }

    public function hasCustomer()
    {
        return isset($this->customer);
    }

    public function clearCustomer()
    {
        unset($this->customer);
    }

    /**
     * Output only. The resource name of the customer associated with this account budget.
     * This contains the customer ID, which appears on the invoice PDF as
     * "Account ID".
     * Customer resource names have the form:
     * `customers/{customer_id}`
     *
     * Generated from protobuf field <code>string customer = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setCustomer($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer = $var;

        return $this;
    }

    /**
     * Output only. The descriptive name of the account budget’s customer. It appears on the
     * invoice PDF as "Account".
     *
     * Generated from protobuf field <code>string customer_descriptive_name = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getCustomerDescriptiveName()
    {
        return isset($this->customer_descriptive_name) ? $this->customer_descriptive_name : '';
    }

    public function hasCustomerDescriptiveName()
    {
        return isset($this->customer_descriptive_name);
    }

    public function clearCustomerDescriptiveName()
    {
        unset($this->customer_descriptive_name);
    }

    /**
     * Output only. The descriptive name of the account budget’s customer. It appears on the
     * invoice PDF as "Account".
     *
     * Generated from protobuf field <code>string customer_descriptive_name = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerDescriptiveName($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_descriptive_name = $var;

        return $this;
    }

    /**
     * Output only. The resource name of the account budget associated with this summarized
     * billable cost.
     * AccountBudget resource names have the form:
     * `customers/{customer_id}/accountBudgets/{account_budget_id}`
     *
     * Generated from protobuf field <code>string account_budget = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getAccountBudget()
    {
        return isset($this->account_budget) ? $this->account_budget : '';
    }

    public function hasAccountBudget()
    {
        return isset($this->account_budget);
    }

    public function clearAccountBudget()
    {
        unset($this->account_budget);
    }

    /**
     * Output only. The resource name of the account budget associated with this summarized
     * billable cost.
     * AccountBudget resource names have the form:
     * `customers/{customer_id}/accountBudgets/{account_budget_id}`
     *
     * Generated from protobuf field <code>string account_budget = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setAccountBudget($var)
    {
        GPBUtil::checkString($var, True);
        $this->account_budget = $var;

        return $this;
    }

    /**
     * Output only. The name of the account budget. It appears on the invoice PDF as "Account
     * budget".
     *
     * Generated from protobuf field <code>string account_budget_name = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getAccountBudgetName()
    {
        return isset($this->account_budget_name) ? $this->account_budget_name : '';
    }

    public function hasAccountBudgetName()
    {
        return isset($this->account_budget_name);
    }

    public function clearAccountBudgetName()
    {
        unset($this->account_budget_name);
    }

    /**
     * Output only. The name of the account budget. It appears on the invoice PDF as "Account
     * budget".
     *
     * Generated from protobuf field <code>string account_budget_name = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setAccountBudgetName($var)
    {
        GPBUtil::checkString($var, True);
        $this->account_budget_name = $var;

        return $this;
    }

    /**
     * Output only. The purchase order number of the account budget. It appears on the
     * invoice PDF as "Purchase order".
     *
     * Generated from protobuf field <code>string purchase_order_number = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return isset($this->purchase_order_number) ? $this->purchase_order_number : '';
    }

    public function hasPurchaseOrderNumber()
    {
        return isset($this->purchase_order_number);
    }

    public function clearPurchaseOrderNumber()
    {
        unset($this->purchase_order_number);
    }

    /**
     * Output only. The purchase order number of the account budget. It appears on the
     * invoice PDF as "Purchase order".
     *
     * Generated from protobuf field <code>string purchase_order_number = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setPurchaseOrderNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->purchase_order_number = $var;

        return $this;
    }

    /**
     * Output only. The pretax subtotal amount attributable to this budget during the service
     * period, in micros.
     *
     * Generated from protobuf field <code>int64 subtotal_amount_micros = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getSubtotalAmountMicros()
    {
        return isset($this->subtotal_amount_micros) ? $this->subtotal_amount_micros : 0;
    }

    public function hasSubtotalAmountMicros()
    {
        return isset($this->subtotal_amount_micros);
    }

    public function clearSubtotalAmountMicros()
    {
        unset($this->subtotal_amount_micros);
    }

    /**
     * Output only. The pretax subtotal amount attributable to this budget during the service
     * period, in micros.
     *
     * Generated from protobuf field <code>int64 subtotal_amount_micros = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSubtotalAmountMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->subtotal_amount_micros = $var;

        return $this;
    }

    /**
     * Output only. The tax amount attributable to this budget during the service period, in
     * micros.
     *
     * Generated from protobuf field <code>int64 tax_amount_micros = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getTaxAmountMicros()
    {
        return isset($this->tax_amount_micros) ? $this->tax_amount_micros : 0;
    }

    public function hasTaxAmountMicros()
    {
        return isset($this->tax_amount_micros);
    }

    public function clearTaxAmountMicros()
    {
        unset($this->tax_amount_micros);
    }

    /**
     * Output only. The tax amount attributable to this budget during the service period, in
     * micros.
     *
     * Generated from protobuf field <code>int64 tax_amount_micros = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTaxAmountMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->tax_amount_micros = $var;

        return $this;
    }

    /**
     * Output only. The total amount attributable to this budget during the service period,
     * in micros. This equals the sum of the account budget subtotal amount and
     * the account budget tax amount.
     *
     * Generated from protobuf field <code>int64 total_amount_micros = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getTotalAmountMicros()
    {
        return isset($this->total_amount_micros) ? $this->total_amount_micros : 0;
    }

    public function hasTotalAmountMicros()
    {
        return isset($this->total_amount_micros);
    }

    public function clearTotalAmountMicros()
    {
        unset($this->total_amount_micros);
    }

    /**
     * Output only. The total amount attributable to this budget during the service period,
     * in micros. This equals the sum of the account budget subtotal amount and
     * the account budget tax amount.
     *
     * Generated from protobuf field <code>int64 total_amount_micros = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalAmountMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_amount_micros = $var;

        return $this;
    }

    /**
     * Output only. The billable activity date range of the account budget, within the
     * service date range of this invoice. The end date is inclusive. This can
     * be different from the account budget's start and end time.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.common.DateRange billable_activity_date_range = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V6\Common\DateRange
     */
    public function getBillableActivityDateRange()
    {
        return isset($this->billable_activity_date_range) ? $this->billable_activity_date_range : null;
    }

    public function hasBillableActivityDateRange()
    {
        return isset($this->billable_activity_date_range);
    }

    public function clearBillableActivityDateRange()
    {
        unset($this->billable_activity_date_range);
    }

    /**
     * Output only. The billable activity date range of the account budget, within the
     * service date range of this invoice. The end date is inclusive. This can
     * be different from the account budget's start and end time.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.common.DateRange billable_activity_date_range = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V6\Common\DateRange $var
     * @return $this
     */
    public function setBillableActivityDateRange($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V6\Common\DateRange::class);
        $this->billable_activity_date_range = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AccountBudgetSummary::class, \Google\Ads\GoogleAds\V6\Resources\Invoice_AccountBudgetSummary::class);

