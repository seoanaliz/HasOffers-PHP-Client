<?php namespace DraperStudio\HasOffers\Api\Affiliate\Brand;

use DraperStudio\HasOffers\Base;

class Information extends Base
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
    protected $endpointName = 'BrandInformation';
    /**
     * Retrieves the Brand Information.
     *
     * @access public
     * @param  object $parameters
     * @return object
     */
    public function getBrandInformation($parameters = [])
    {
        return $this->get('getBrandInformation', $parameters);
    }
}
