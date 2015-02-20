<?php
namespace DraperStudio\HasOffers\Api\Affiliate\Offer;

use DraperStudio\HasOffers\Base;

class Pixel extends Base
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
    protected $endpointName = 'OfferPixel';
    /**
     * Create an Offer Pixel.
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
     * Find Offer Pixels.
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
     * Gets an array of the allowed pixel types for the given offer.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getAllowedTypes($parameters = [])
    {
        return $this->get('getAllowedTypes', $parameters);
    }

    /**
     * Update Offer Pixel field with value by Offer Pixel ID.
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
