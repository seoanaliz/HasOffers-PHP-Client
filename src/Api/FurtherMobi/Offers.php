<?php namespace DraperStudio\HasOffers\Api\FurtherMobi;

use DraperStudio\HasOffers\Base;

class Offers extends Base
{
    /**
     * API Endpoint Type
     *
     * @access protected
     * @var string $endpointType
     */
    protected $endpointType = 'FurtherMobi';

    /**
     * API Endpoint Name
     *
     * @access protected
     * @var string $endpointName
     */
    protected $endpointName = 'Offers';
    /**
     * Returns a list of offers.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findAll($parameters = [])
    {
        return $this->get('offers/offers', $parameters);
    }
}
