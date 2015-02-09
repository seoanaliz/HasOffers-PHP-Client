<?php namespace DraperStudio\HasOffers\Api\Brand;

use DraperStudio\HasOffers\Base;

class Auditor extends Base
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
    protected $endpointName = 'Auditor';
    /**
     * Find data audit records logged for the brand.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findBrandDataAudits($parameters = [])
    {
        return $this->get('findBrandDataAudits', $parameters);
    }
}
