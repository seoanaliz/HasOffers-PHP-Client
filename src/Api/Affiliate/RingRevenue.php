<?php
namespace DraperStudio\HasOffers\Api\Affiliate;

use DraperStudio\HasOffers\Base;

class RingRevenue extends Base
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
    protected $endpointName = 'RingRevenue';
    /**
     * Returns an Affiliate login url for an Offer that utilizes RingRevenue.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function createAffiliateLoginUrl($parameters = [])
    {
        return $this->get('createAffiliateLoginUrl', $parameters);
    }
}
