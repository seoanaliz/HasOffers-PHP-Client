<?php namespace DraperStudio\HasOffers\Api\Affiliate\Brand;

use DraperStudio\HasOffers\Base;

class Design extends Base
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
    protected $endpointName = 'BrandDesign';
    /**
     * Returns the Affiliate terms and conditions for the Brand.
     *
     * @access public
     * @param  object $parameters
     * @return object
     */
    public function getTermsAndConditions($parameters = [])
    {
        return $this->get('getTermsAndConditions', $parameters);
    }
}
