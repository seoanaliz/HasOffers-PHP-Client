<?php
namespace DraperStudio\HasOffers\Api\Brand;

use DraperStudio\HasOffers\Base;

class TinyUrl extends Base
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
    protected $endpointName = 'TinyUrl';
    /**
     * Find all Tiny Urls
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findAll($parameters = [])
    {
        return $this->get('findAll', $parameters);
    }

    /**
     * Update Tiny Url redirect by Tiny Url ID.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function updateRedirect($parameters = [])
    {
        return $this->get('updateRedirect', $parameters);
    }
}
