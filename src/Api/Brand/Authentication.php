<?php namespace DraperStudio\HasOffers\Api\Brand;

use DraperStudio\HasOffers\Base;

class Authentication extends Base
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
    protected $endpointName = 'Authentication';
    /**
     * Find User by email, password and type.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findUserByCredentials($parameters = [])
    {
        return $this->get('findUserByCredentials', $parameters);
    }

    /**
     * Find User type by session token.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findUserByToken($parameters = [])
    {
        return $this->get('findUserByToken', $parameters);
    }
}
