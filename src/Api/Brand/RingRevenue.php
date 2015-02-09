<?php namespace DraperStudio\HasOffers\Api\Brand;

use DraperStudio\HasOffers\Base;

class RingRevenue extends Base
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
    protected $endpointName = 'RingRevenue';
    /**
     * Find Ring Revenue transactions.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findAll($parameters = [])
    {
        return $this->get('findAll', $parameters);
    }
}
