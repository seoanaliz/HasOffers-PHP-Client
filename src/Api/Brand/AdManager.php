<?php
namespace DraperStudio\HasOffers\Api\Brand;

use DraperStudio\HasOffers\Base;

class AdManager extends Base
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
    protected $endpointName = 'AdManager';
    /**
     * Add Ad Campaign Creative with data properties by Ad Campaign ID.
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
     * Create Ad Campaign with data properties.
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
     * Find Ad Campaign object by Ad Campaign ID.
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
     * Find Ad Campaign Creative by Ad Campaign Creative ID.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findCreativeById($parameters = [])
    {
        return $this->get('findCreativeById', $parameters);
    }

    /**
     * Get total active Ad Campaigns being currently ran by affiliate_access level.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getActiveNetworkCampaignCount($parameters = [])
    {
        return $this->get('getActiveNetworkCampaignCount', $parameters);
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
     * Get total media usage for start to end date for Ad Campaigns.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getUsage($parameters = [])
    {
        return $this->get('getUsage', $parameters);
    }

    /**
     * Set Ad Campaign Creative weights with data.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function setCreativeCustomWeights($parameters = [])
    {
        return $this->get('setCreativeCustomWeights', $parameters);
    }

    /**
     * Set Ad Campaign Creative weights with data properties.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function setCreativeWeights($parameters = [])
    {
        return $this->get('setCreativeWeights', $parameters);
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
     * Update Ad Campaign field with value by Ad Campaign ID.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function updateCampaignField($parameters = [])
    {
        return $this->get('updateCampaignField', $parameters);
    }

    /**
     * Update Ad Campaign Creative by Ad Campaign Creative ID.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function updateCreative($parameters = [])
    {
        return $this->get('updateCreative', $parameters);
    }

    /**
     * Update a given field for an ad campaign creative by its ID.
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
