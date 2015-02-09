<?php namespace DraperStudio\HasOffers\Api\Affiliate\Affiliate;

use DraperStudio\HasOffers\Base;

class Billing extends Base
{
    /**
     * API Endpoint Type
     *
     * @access protected
     * @var string $endpointType
     */
    protected $endpointType = 'Affiliate';

    /**
     * API Endpoint Name
     *
     * @access protected
     * @var string $endpointName
     */
    protected $endpointName = 'AffiliateBilling';
    /**
     * Find Affiliate Invoices for the calling Affiliate.
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
     * Find Affiliate Receipts for the calling Affiliate.
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
     * Finds an Affiliate Receipt by its ID.
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
     * Retrieves the Account Balance for the calling Affiliate.
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
     * Get payout totals for the calling Affiliate.
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
     * Updates the tax id of the calling Affiliate.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function updateTaxId($parameters = [])
    {
        return $this->get('updateTaxId', $parameters);
    }
}