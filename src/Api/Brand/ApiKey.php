<?php
namespace DraperStudio\HasOffers\Api\Brand;

use DraperStudio\HasOffers\Base;

class ApiKey extends Base
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
    protected $endpointName = 'ApiKey';
    /**
     * Finds all API V3 Keys matching the [optional] filters.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findApiKeys($parameters = [])
    {
        return $this->get('findApiKeys', $parameters);
    }

    /**
     * Generates an API V3 Key for the specified account user.
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
     * Returns the API V3 Key for the specified user, or NULL if the specified user does not have one.
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
     * Replaces an active API V3 Key for the specified account with a new one.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function regenerateApiKey($parameters = [])
    {
        return $this->get('regenerateApiKey', $parameters);
    }

    /**
     * Updates the status of an existing Static API Key
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function updateApiKeyStatus($parameters = [])
    {
        return $this->get('updateApiKeyStatus', $parameters);
    }
}
