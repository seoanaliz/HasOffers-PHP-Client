<?php
namespace DraperStudio\HasOffers\Api\Affiliate;

use DraperStudio\HasOffers\Base;

class ScheduledOfferChange extends Base
{
    /**
     * Description
     *
     * @access protected
     * @var object $endpoinType
     */
    protected $endpointType = 'Affiliate';

    /**
     * API Endpoint Name
     *
     * @access protected
     * @var string $endpointName
     */
    protected $endpointName = 'ScheduledOfferChange';
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
}
