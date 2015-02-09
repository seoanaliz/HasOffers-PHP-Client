<?php namespace DraperStudio\HasOffers\Api\Brand;

use DraperStudio\HasOffers\Base;

class DownloadReport extends Base
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
    protected $endpointName = 'DownloadReport';
    /**
     * Get link to download report.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getDownloadReportLink($parameters = [])
    {
        return $this->get('getDownloadReportLink', $parameters);
    }
}
