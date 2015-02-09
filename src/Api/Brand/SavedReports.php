<?php namespace DraperStudio\HasOffers\Api\Brand;

use DraperStudio\HasOffers\Base;

class SavedReports extends Base
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
    protected $endpointName = 'SavedReports';
    /**
     * Create a Saved Report.
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
     * Delete a Saved Report.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function delete($parameters = [])
    {
        return $this->get('delete', $parameters);
    }

    /**
     * Find any Saved Reports having a specified hash.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findByHash($parameters = [])
    {
        return $this->get('findByHash', $parameters);
    }

    /**
     * Find a Saved Report by its ID.
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
     * Update a Saved Report.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function update($parameters = [])
    {
        return $this->get('update', $parameters);
    }
}
