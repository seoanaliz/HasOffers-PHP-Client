<?php
namespace DraperStudio\HasOffers\Api\Affiliate\Affiliate;

use DraperStudio\HasOffers\Base;

class User extends Base
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
    protected $endpointName = 'AffiliateUser';
    /**
     * Create an Affiliate User.
     *
     * @access public
     * @param  object $parameters
     * @return object
     */
    public function create($parameters = [])
    {
        return $this->get('create', $parameters);
    }

    /**
     * Find Affiliate Users.
     *
     * @access public
     * @param  object $parameters
     * @return object
     */
    public function findAll($parameters = [])
    {
        return $this->get('findAll', $parameters);
    }

    /**
     * Find an Affiliate User by ID.
     *
     * @access public
     * @param  object $parameters
     * @return object
     */
    public function findById($parameters = [])
    {
        return $this->get('findById', $parameters);
    }

    /**
     * Returns a variety of details about an Affiliate User,
     * including their details, their Affiliate details,
     * Account Manager details (if enabled), relevant Brand Preferences,
     * and their enabled Features
     *
     * @access public
     * @param  object $parameters
     * @return object
     */
    public function getContext($parameters = [])
    {
        return $this->get('getContext', $parameters);
    }

    /**
     * Sets an Affiliate User's permissions.
     *
     * @access public
     * @param  object $parameters
     * @return object
     */
    public function setPermissions($parameters = [])
    {
        return $this->get('setPermissions', $parameters);
    }

    /**
     * Update an Affiliate User.
     *
     * @access public
     * @param  object $parameters
     * @return object
     */
    public function update($parameters = [])
    {
        return $this->get('update', $parameters);
    }
}
