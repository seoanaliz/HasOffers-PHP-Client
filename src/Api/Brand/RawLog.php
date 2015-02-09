<?php namespace DraperStudio\HasOffers\Api\Brand;

use DraperStudio\HasOffers\Base;

class RawLog extends Base
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
    protected $endpointName = 'RawLog';
    /**
     * Get log file download link by log_type and log_filename that is valid for 8 hours.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getDownloadLink($parameters = [])
    {
        return $this->get('getDownloadLink', $parameters);
    }

    /**
     * Get retention in days for each log type.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getLogExpirations($parameters = [])
    {
        return $this->get('getLogExpirations', $parameters);
    }

    /**
     * List available directories by log_type.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function listDateDirs($parameters = [])
    {
        return $this->get('listDateDirs', $parameters);
    }

    /**
     * List available logs by log_type and date_dir.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function listLogs($parameters = [])
    {
        return $this->get('listLogs', $parameters);
    }
}
