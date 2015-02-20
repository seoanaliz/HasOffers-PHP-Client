<?php
namespace DraperStudio\HasOffers\Api\Affiliate;

use DraperStudio\HasOffers\Base;

class ApiKey extends Base
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
    protected $endpointName = 'ApiKey';
    /**
     * Generates an API Key for the calling Affiliate User.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function generateApiKey($parameters = [])
    {
        return $this->get('generateApiKey', $parameters);
    }

    /**
     * Returns the API Key for the caller Affiliate User, or NULL if one does not exist.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getUserApiKey($parameters = [])
    {
        return $this->get('getUserApiKey', $parameters);
    }

    /**
     * Retrieve an Affiliate User's Alerts.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function regenerateApiKey($parameters = [])
    {
        return $this->get('regenerateApiKey', $parameters);
    }
}
