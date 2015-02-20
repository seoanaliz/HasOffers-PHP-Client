<?php
namespace DraperStudio\HasOffers\Api\Brand;

use DraperStudio\HasOffers\Base;

class Advertiser extends Base
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
    protected $endpointName = 'Advertiser';
    /**
     * Add Advertiser account note by Advertiser ID.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function addAccountNote($parameters = [])
    {
        return $this->get('addAccountNote', $parameters);
    }

    /**
     * Block Advertiser account by Advertiser ID.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function block($parameters = [])
    {
        return $this->get('block', $parameters);
    }

    /**
     * Block an Affiliate from an Advertiser's Offers.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function blockAffiliate($parameters = [])
    {
        return $this->get('blockAffiliate', $parameters);
    }

    /**
     * Create Advertiser account.
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
     * Create advertiser signup question.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function createSignupQuestion($parameters = [])
    {
        return $this->get('createSignupQuestion', $parameters);
    }

    /**
     * Create signup question answer by Advertiser ID.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function createSignupQuestionAnswer($parameters = [])
    {
        return $this->get('createSignupQuestionAnswer', $parameters);
    }

    /**
     * Find all advertiser objects by filters.
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
     * Find all Advertiser objects by list Advertiser IDs.
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
     * Find all Advertiser IDs based on what the requester has access to.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findAllIds($parameters = [])
    {
        return $this->get('findAllIds', $parameters);
    }

    /**
     * Find all Advertisers IDs with given account manager (employee).
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findAllIdsByAccountManagerId($parameters = [])
    {
        return $this->get('findAllIdsByAccountManagerId', $parameters);
    }

    /**
     * Find all pending and unassigned Advertisers by account manager (employee) ID.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findAllPendingUnassignedAdvertiserIds($parameters = [])
    {
        return $this->get('findAllPendingUnassignedAdvertiserIds', $parameters);
    }

    /**
     * Find all Advertisers with a status of "pending" who are managed by the specified Account Manager (Employee).
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function findAllPendingUnassignedAdvertisers($parameters = [])
    {
        return $this->get('findAllPendingUnassignedAdvertisers', $parameters);
    }

    /**
     * Find Advertiser object by Advertiser ID.
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
     * Get Advertiser account balance.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getAccountBalance($parameters = [])
    {
        return $this->get('getAccountBalance', $parameters);
    }

    /**
     * Get account manager by Advertiser ID.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getAccountManager($parameters = [])
    {
        return $this->get('getAccountManager', $parameters);
    }

    /**
     * Get Advertiser account notes by Advertiser ID.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getAccountNotes($parameters = [])
    {
        return $this->get('getAccountNotes', $parameters);
    }

    /**
     * Get Affiliate IDs blocked from using Advertiser's Offers.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getBlockedAffiliateIds($parameters = [])
    {
        return $this->get('getBlockedAffiliateIds', $parameters);
    }

    /**
     * Get reasons why Advertiser is blocked.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getBlockedReasons($parameters = [])
    {
        return $this->get('getBlockedReasons', $parameters);
    }

    /**
     * Get creator Advertiser User for the specified Advertiser account.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getCreatorUser($parameters = [])
    {
        return $this->get('getCreatorUser', $parameters);
    }

    /**
     * Get overview of active and pending Advertiser accounts by
     * Advertiser IDs, account manager (employee) ID, and filters. This is used on the snapshot pages.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getOverview($parameters = [])
    {
        return $this->get('getOverview', $parameters);
    }

    /**
     * Get the first Advertiser ID.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getOwnersAdvertiserAccountId($parameters = [])
    {
        return $this->get('getOwnersAdvertiserAccountId', $parameters);
    }

    /**
     * Get signup answers by Advertiser ID.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getSignupAnswers($parameters = [])
    {
        return $this->get('getSignupAnswers', $parameters);
    }

    /**
     * Get Advertiser Signup Questions.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getSignupQuestions($parameters = [])
    {
        return $this->get('getSignupQuestions', $parameters);
    }

    /**
     * Get Affiliate IDs that can use a specified Advertiser's Offers.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function getUnblockedAffiliateIds($parameters = [])
    {
        return $this->get('getUnblockedAffiliateIds', $parameters);
    }

    /**
     * Advertiser signup from login page.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function signup($parameters = [])
    {
        return $this->get('signup', $parameters);
    }

    /**
     * Unblock an Affiliate from accessing an Advertiser's Offers.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function unblockAffiliate($parameters = [])
    {
        return $this->get('unblockAffiliate', $parameters);
    }

    /**
     * Update all Advertiser fields passed into data by Advertiser ID.
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
     * Update Advertiser account note by AccountNote ID.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function updateAccountNote($parameters = [])
    {
        return $this->get('updateAccountNote', $parameters);
    }

    /**
     * Update Advertiser field by Advertiser ID.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function updateField($parameters = [])
    {
        return $this->get('updateField', $parameters);
    }

    /**
     * Update an Advertiser Signup Question.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function updateSignupQuestion($parameters = [])
    {
        return $this->get('updateSignupQuestion', $parameters);
    }

    /**
     * Update signup question answer by SignupAnswer ID.
     *
     * @access public
     * @param  array  $parameters
     * @return object
     */
    public function updateSignupQuestionAnswer($parameters = [])
    {
        return $this->get('updateSignupQuestionAnswer', $parameters);
    }
}
