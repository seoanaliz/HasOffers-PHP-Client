<?php
namespace DraperStudio\HasOffers\Api\Brand\Affiliate;

use DraperStudio\HasOffers\Base;

class Billing extends Base
{
    /**
     * API Endpoint Type
     *
     * @access protected
     * @var string $endpointType
     */
    protected $endpointType = 'Brand';

    /**
     * API Endpoint Name
     *
     * @access protected
     * @var string $endpointName
     */
    protected $endpointName = 'AffiliateBilling';
    /**
     * Add an Affiliate Invoice Item to an Affiliate Invoice.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function addInvoiceItem($parameters = [])
    {
        return $this->get('addInvoiceItem', $parameters);
    }

    /**
     * Create an Affiliate Invoice.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function createInvoice($parameters = [])
    {
        return $this->get('createInvoice', $parameters);
    }

    /**
     * Create an Affiliate Receipt.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function createReceipt($parameters = [])
    {
        return $this->get('createReceipt', $parameters);
    }

    /**
     * Find Affiliate Invoices.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findAllInvoices($parameters = [])
    {
        return $this->get('findAllInvoices', $parameters);
    }

    /**
     * Find a list of Affiliate Invoices by their IDs.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findAllInvoicesByIds($parameters = [])
    {
        return $this->get('findAllInvoicesByIds', $parameters);
    }

    /**
     * Find Affiliate Receipts.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findAllReceipts($parameters = [])
    {
        return $this->get('findAllReceipts', $parameters);
    }

    /**
     * Find one or more Affiliate Receipt(s) by their IDs.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findAllReceiptsByIds($parameters = [])
    {
        return $this->get('findAllReceiptsByIds', $parameters);
    }

    /**
     * Find an Affiliate Invoice by its ID.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findInvoiceById($parameters = [])
    {
        return $this->get('findInvoiceById', $parameters);
    }

    /**
     * Find Affiliate Invoice stats.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findInvoiceStats($parameters = [])
    {
        return $this->get('findInvoiceStats', $parameters);
    }

    /**
     * Find the most recent Invoice for an Affiliate.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findLastInvoice($parameters = [])
    {
        return $this->get('findLastInvoice', $parameters);
    }

    /**
     * Returns an associative array with key=AffiliateReceipt and value being the most recent Receipt entered into the database for the affiliate.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findLastReceipt($parameters = [])
    {
        return $this->get('findLastReceipt', $parameters);
    }

    /**
     * Find an Affiliate Receipt.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findReceiptById($parameters = [])
    {
        return $this->get('findReceiptById', $parameters);
    }

    /**
     * Generate Affiliate Invoices.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function generateInvoices($parameters = [])
    {
        return $this->get('generateInvoices', $parameters);
    }

    /**
     * Retrieves the Account Balance for an Affiliate.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getAccountBalance($parameters = [])
    {
        return $this->get('getAccountBalance', $parameters);
    }

    /**
     * Retrieve a listing of all Affiliate Invoices and Affiliate Invoice Receipts for an Affiliate.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getAccountHistory($parameters = [])
    {
        return $this->get('getAccountHistory', $parameters);
    }

    /**
     * Retrieve the next start date for the provided Affiliate's invoices.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getNextStartDate($parameters = [])
    {
        return $this->get('getNextStartDate', $parameters);
    }

    /**
     * Get outstanding (unpaid, active) Affiliate Invoice amounts.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getOutstandingInvoices($parameters = [])
    {
        return $this->get('getOutstandingInvoices', $parameters);
    }

    /**
     * Get payout totals for an Affiliate for one or more timeframes.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getPayoutTotals($parameters = [])
    {
        return $this->get('getPayoutTotals', $parameters);
    }

    /**
     * Deletes an Affiliate Invoice Item from an Affiliate Invoice.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function removeInvoiceItem($parameters = [])
    {
        return $this->get('removeInvoiceItem', $parameters);
    }

    /**
     * Update an Affiliate Invoice.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function updateInvoice($parameters = [])
    {
        return $this->get('updateInvoice', $parameters);
    }

    /**
     * Update one field of an Affiliate Invoice.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function updateInvoiceField($parameters = [])
    {
        return $this->get('updateInvoiceField', $parameters);
    }

    /**
     * Update an Affiliate Receipt.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function updateReceipt($parameters = [])
    {
        return $this->get('updateReceipt', $parameters);
    }

    /**
     * Update one field of an Affiliate Receipt.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function updateReceiptField($parameters = [])
    {
        return $this->get('updateReceiptField', $parameters);
    }

    /**
     * Update an Affiliate's tax information.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function updateTaxInfo($parameters = [])
    {
        return $this->get('updateTaxInfo', $parameters);
    }
}
