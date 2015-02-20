<?php
namespace DraperStudio\HasOffers\Api\Brand\Custom;

use DraperStudio\HasOffers\Base;

class MenuLink extends Base
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
    protected $endpointName = 'CustomMenuLink';
    /**
     * Find all custom menu links.
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
     * Finds all active menu links.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findActive($parameters = [])
    {
        return $this->get('findActive', $parameters);
    }
}
