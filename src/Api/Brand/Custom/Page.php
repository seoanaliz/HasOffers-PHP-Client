<?php
namespace DraperStudio\HasOffers\Api\Brand\Custom;

use DraperStudio\HasOffers\Base;

class Page extends Base
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
    protected $endpointName = 'CustomPage';
    /**
     * Find custom pages
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function find($parameters = [])
    {
        return $this->get('find', $parameters);
    }

    /**
     * Find custom page by id
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findById($parameters = [])
    {
        return $this->get('findById', $parameters);
    }
}
