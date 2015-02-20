<?php
namespace DraperStudio\HasOffers\Api\Affiliate\Offer;

use DraperStudio\HasOffers\Base;

class File extends Base
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
    protected $endpointName = 'OfferFile';
    /**
     * Creates an OfferFile for the calling Affiliate for a specified Offer.
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
     * Find Offer Files.
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
     * Find Offer File by ID.
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
     * Get Offer File Creative Code with tracking_url, impression_pixel, offer_id, source and aff_sub1-5 by Offer File ID.
     *
     * @access public
     * @param  object $parameters
     * @return object
     */
    public function getCreativeCode($parameters = [])
    {
        return $this->get('getCreativeCode', $parameters);
    }
}
