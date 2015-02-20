<?php
namespace DraperStudio\HasOffers\Api\Affiliate;

use DraperStudio\HasOffers\Base;

class Application extends Base
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
    protected $endpointName = 'Application';
    /**
     * Retrieves a list of all countries.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findAllCountries($parameters = [])
    {
        return $this->get('findAllCountries', $parameters);
    }

    /**
     * Find all jump hostnames (tracking domains) by filters.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findAllHostnames($parameters = [])
    {
        return $this->get('findAllHostnames', $parameters);
    }

    /**
     * Find all Offer Categories by filters.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findAllOfferCategories($parameters = [])
    {
        return $this->get('findAllOfferCategories', $parameters);
    }

    /**
     * Find all Timezones.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findAllTimezones($parameters = [])
    {
        return $this->get('findAllTimezones', $parameters);
    }
}
