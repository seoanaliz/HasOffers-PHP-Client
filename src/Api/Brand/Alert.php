<?php namespace DraperStudio\HasOffers\Api\Brand;

use DraperStudio\HasOffers\Base;

class Alert extends Base
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
    protected $endpointName = 'Alert';
    /**
     * Create an Alert.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function create($parameters = [])
    {
        return $this->get('create', $parameters);
    }

    /**
     * Sends an existing Alert to an Affiliate User.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function createAffiliateUserAlert($parameters = [])
    {
        return $this->get('createAffiliateUserAlert', $parameters);
    }

    /**
     * Sends an existing Alert to an Employee.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function createEmployeeAlert($parameters = [])
    {
        return $this->get('createEmployeeAlert', $parameters);
    }

    /**
     * Dismiss an Alert that was sent to an Affiliate User.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function dismissAffiliateUserAlert($parameters = [])
    {
        return $this->get('dismissAffiliateUserAlert', $parameters);
    }

    /**
     * Dismiss all Alerts that were sent to an Affiliate User.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function dismissAllAffiliateUserAlerts($parameters = [])
    {
        return $this->get('dismissAllAffiliateUserAlerts', $parameters);
    }

    /**
     * Dismiss all Alerts that were sent to an Employee.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function dismissAllEmployeeAlerts($parameters = [])
    {
        return $this->get('dismissAllEmployeeAlerts', $parameters);
    }

    /**
     * Dismiss an Alert that was sent to an Employee.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function dismissEmployeeAlert($parameters = [])
    {
        return $this->get('dismissEmployeeAlert', $parameters);
    }

    /**
     * Find Alerts.
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
     * Find one or more Alerts by their IDs.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findAllByIds($parameters = [])
    {
        return $this->get('findAllByIds', $parameters);
    }

    /**
     * Find an Alert its ID.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findById($parameters = [])
    {
        return $this->get('findById', $parameters);
    }

    /**
     * Retrieve a list of Alerts assigned to an Affiliate User.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getAffiliateUserAlerts($parameters = [])
    {
        return $this->get('getAffiliateUserAlerts', $parameters);
    }

    /**
     * Retrieve a list of Alerts assigned to an Employee.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getEmployeeAlerts($parameters = [])
    {
        return $this->get('getEmployeeAlerts', $parameters);
    }

    /**
     * Send an existing Alert to a group of Affiliate Users.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function sendToAffiliateUsers($parameters = [])
    {
        return $this->get('sendToAffiliateUsers', $parameters);
    }

    /**
     * Send an existing Alert to a group of Employees.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function sendToEmployees($parameters = [])
    {
        return $this->get('sendToEmployees', $parameters);
    }

    /**
     * Update the properties of an existing Alert.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function update($parameters = [])
    {
        return $this->get('update', $parameters);
    }

    /**
     * Update a property of an existing Alert.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function updateField($parameters = [])
    {
        return $this->get('updateField', $parameters);
    }
}
