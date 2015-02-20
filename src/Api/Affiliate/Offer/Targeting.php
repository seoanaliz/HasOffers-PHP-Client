<?php
namespace DraperStudio\HasOffers\Api\Affiliate\Offer;

use DraperStudio\HasOffers\Base;

class Targeting extends Base
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
    protected $endpointName = 'OfferTargeting';
    /**
     * Returns all TargetRuleOffers (with TargetRule attached) for the specified Offer.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getRuleTargetingForOffer($parameters = [])
    {
        return $this->get('getRuleTargetingForOffer', $parameters);
    }
}
