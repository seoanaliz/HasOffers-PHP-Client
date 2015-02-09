<?php namespace DraperStudio\HasOffers\Api\Affiliate;

use DraperStudio\HasOffers\Base;

class AdManager extends Base
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
    protected $endpointName = 'AdManager';
    /**
     * Adds a new Ad Campaign Creative to a specified Ad Campaign belonging to the calling Affiliate.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function addCreative($parameters = [])
    {
        return $this->get('addCreative', $parameters);
    }

    /**
     * Creates a new Ad Campaign for the Affiliate.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function createCampaign($parameters = [])
    {
        return $this->get('createCampaign', $parameters);
    }

    /**
     * Find all Ad Campaign objects by filters.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findAllCampaigns($parameters = [])
    {
        return $this->get('findAllCampaigns', $parameters);
    }

    /**
     * Find all Ad Campaign Creatives by filters.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findAllCreatives($parameters = [])
    {
        return $this->get('findAllCreatives', $parameters);
    }

    /**
     * Find an Ad Campaign by ID.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findCampaignById($parameters = [])
    {
        return $this->get('findCampaignById', $parameters);
    }

    /**
     * Get Ad Campaign code.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getCampaignCode($parameters = [])
    {
        return $this->get('getCampaignCode', $parameters);
    }

    /**
     * Get Ad Campaign Creatives by Ad Campaign ID and other filters.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getCampaignCreatives($parameters = [])
    {
        return $this->get('getCampaignCreatives', $parameters);
    }

    /**
     * Update Ad Campaign with data properties by Ad Campaign ID.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function updateCampaign($parameters = [])
    {
        return $this->get('updateCampaign', $parameters);
    }

    /**
     * Update a given field for an Ad Campaign Creative.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function updateCreativeField($parameters = [])
    {
        return $this->get('updateCreativeField', $parameters);
    }
}
