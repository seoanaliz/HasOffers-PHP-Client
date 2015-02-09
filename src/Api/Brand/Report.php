<?php namespace DraperStudio\HasOffers\Api\Brand;

use DraperStudio\HasOffers\Base;

class Report extends Base
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
    protected $endpointName = 'Report';
    /**
     * Gets a distinct list of all currencies for which there are stats.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getActiveCurrencies($parameters = [])
    {
        return $this->get('getActiveCurrencies', $parameters);
    }

    /**
     * Get Affiliate Commissions Report.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getAffiliateCommissions($parameters = [])
    {
        return $this->get('getAffiliateCommissions', $parameters);
    }

    /**
     * Get Conversions Report.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getConversions($parameters = [])
    {
        return $this->get('getConversions', $parameters);
    }

    /**
     * Get Affiliate Manager Commission Report.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getManagerCommissions($parameters = [])
    {
        return $this->get('getManagerCommissions', $parameters);
    }

    /**
     * Get Mod Summary Logs Report.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getModSummaryLogs($parameters = [])
    {
        return $this->get('getModSummaryLogs', $parameters);
    }

    /**
     * Get Traffic Referrals Report.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getReferrals($parameters = [])
    {
        return $this->get('getReferrals', $parameters);
    }

    /**
     * Get Stats Report.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getStats($parameters = [])
    {
        return $this->get('getStats', $parameters);
    }

    /**
     * Get Subscription Report.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getSubscriptions($parameters = [])
    {
        return $this->get('getSubscriptions', $parameters);
    }
}
