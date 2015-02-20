<?php
namespace DraperStudio\HasOffers\Api\Brand;

use DraperStudio\HasOffers\Base;

class Environment extends Base
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
    protected $endpointName = 'Environment';
    /**
     * Find all Environment values.
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
     * Find Environment value by name.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findByName($parameters = [])
    {
        return $this->get('findByName', $parameters);
    }

    /**
     * Get Environment value by name.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getValue($parameters = [])
    {
        return $this->get('getValue', $parameters);
    }

    /**
     * Is Environment name enabled (aka., 0 or 1. 1 being enabled).
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function isEnabled($parameters = [])
    {
        return $this->get('isEnabled', $parameters);
    }

    /**
     * Set Environment value by name and value.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function setValue($parameters = [])
    {
        return $this->get('setValue', $parameters);
    }
}
