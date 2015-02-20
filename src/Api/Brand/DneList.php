<?php
namespace DraperStudio\HasOffers\Api\Brand;

use DraperStudio\HasOffers\Base;

class DneList extends Base
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
    protected $endpointName = 'DneList';
    /**
     * Add DNE Email with data to a DNE List.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function addEmail($parameters = [])
    {
        return $this->get('addEmail', $parameters);
    }

    /**
     * Create DNE List with data properties.
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
     * Find all DNE Lists by filters.
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
     * Finds all DNE Lists by DNE List IDs.
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
     * Find DNE List by DNE List ID.
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
     * Find DNE List by Offer ID. The offer must have \"show_mail_list\" set to 1 or this returns false.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findByOfferId($parameters = [])
    {
        return $this->get('findByOfferId', $parameters);
    }

    /**
     * Get DNE Emails by DNE List ID in CSV format.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getEmailListCsv($parameters = [])
    {
        return $this->get('getEmailListCsv', $parameters);
    }

    /**
     * Modify all Offers using one DNE List to use another DNE List.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function moveDneList($parameters = [])
    {
        return $this->get('moveDneList', $parameters);
    }

    /**
     * Update DNE List with data properties by DNE List ID.
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
     * Bulk upload DNE Emails by DNE List ID and _FILES.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function upload($parameters = [])
    {
        return $this->get('upload', $parameters);
    }
}
