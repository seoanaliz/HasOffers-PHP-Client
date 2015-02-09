<?php namespace DraperStudio\HasOffers\Api\Affiliate;

use DraperStudio\HasOffers\Base;

class Report extends Base
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
    protected $endpointName = 'Report';
    /**
     * Get Affiliate Commission Report for the calling Affiliate.
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
     * Returns a list of all active Affiliates referred by the calling Affiliate.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getAffiliateReferrals($parameters = [])
    {
        return $this->get('getAffiliateReferrals', $parameters);
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
}
