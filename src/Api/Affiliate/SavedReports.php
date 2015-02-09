<?php namespace DraperStudio\HasOffers\Api\Affiliate;

use DraperStudio\HasOffers\Base;

class SavedReports extends Base
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
    protected $endpointName = 'SavedReports';
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
     * Find Saved Reports.
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
}
