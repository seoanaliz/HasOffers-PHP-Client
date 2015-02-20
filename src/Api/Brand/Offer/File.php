<?php
namespace DraperStudio\HasOffers\Api\Brand\Offer;

use DraperStudio\HasOffers\Base;

class File extends Base
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
    protected $endpointName = 'OfferFile';
    /**
     * Create an Offer File.
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
     * Find Offer Files.
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
     * Find Offer Files which are available to the requesting user.
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
     * Find one or more Offer Files.
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
     * Find an Offer File by its filename.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findAllByName($parameters = [])
    {
        return $this->get('findAllByName', $parameters);
    }

    /**
     * Retrieve an Offer File.
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
     * Get Offer File Creative Code with tracking_url, impression_pixel,
     * offer_id, affiliate_id, source and aff_sub1-5 by Offer File ID.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getCreativeCode($parameters = [])
    {
        return $this->get('getCreativeCode', $parameters);
    }

    /**
     * Update an Offer File.
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
     * Update one field of an Offer File.
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
