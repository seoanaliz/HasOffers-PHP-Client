<?php namespace DraperStudio\HasOffers\Api\Affiliate;

use DraperStudio\HasOffers\Base;

class UserPreferences extends Base
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
    protected $endpointName = 'UserPreferences';
    /**
     * Set a value for one of the calling Affiliate User's preferences.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function setValue($parameters = [])
    {
        return $this->get('setValue', $parameters);
    }
}
