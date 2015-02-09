<?php namespace DraperStudio\HasOffers\Api\FurtherMobi;

use DraperStudio\HasOffers\Base;

class Stats extends Base
{
    /**
     * API Endpoint Type
     *
     * @access protected
     * @var string $endpointType
     */
    protected $endpointType = 'FurtherMobi';

    /**
     * API Endpoint Name
     *
     * @access protected
     * @var object $endpointName
     */
    protected $endpointName = 'Stats';
    /**
     * Returns stats for a specified date range.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getStatsReport($parameters = [])
    {
        return $this->get('stats/stats', $parameters);
    }

    /**
     * Returns stats for a specified date range.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getConversionReport($parameters = [])
    {
        return $this->get('stats/lead_report', $parameters);
    }
}
