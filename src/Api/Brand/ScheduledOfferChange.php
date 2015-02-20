<?php
namespace DraperStudio\HasOffers\Api\Brand;

use DraperStudio\HasOffers\Base;

class ScheduledOfferChange extends Base
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
    protected $endpointName = 'ScheduledOfferChange';
    /**
     * Create a Scheduled Offer Change.
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
     * Find a Scheduled Offer Change by its ID.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findScheduleById($parameters = [])
    {
        return $this->get('findScheduleById', $parameters);
    }

    /**
     * Find Scheduled Offer Changes.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findSchedules($parameters = [])
    {
        return $this->get('findSchedules', $parameters);
    }

    /**
     * Update a Scheduled Offer Change.
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
