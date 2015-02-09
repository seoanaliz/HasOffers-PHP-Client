<?php namespace DraperStudio\HasOffers;

class Base
{
    /**
     * HTTP Client
     *
     * @access private
     * @var object $httpClient
     */
    private $httpClient;

    /**
     * API Endpoint Type
     *
     * @access protected
     * @var string $endpointType
     */
    protected $endpointType;

    /**
     * API Endpoint Name(space)
     *
     * @access protected
     * @var string $endpointName
     */
    protected $endpointName;

    /**
     * Constructor
     *
     * @access public
     * @param  object $httpClient
     * @return void
     */
    public function __construct($httpClient)
    {
        $this->setHttpClient($httpClient);
        $this->getHttpClient()->setApiType($this->endpointType);
        $this->getHttpClient()->setApiNamespace($this->endpointName);
    }

    /**
     * Send a GET request
     *
     * @access public
     * @param  string $path
     * @param  array  $parameters
     * @return object
     */
    public function get($path, $parameters = [])
    {
        return $this->getHttpClient()->get($path, $parameters);
    }

    /**
     * Get the HTTP Client
     *
     * @access public
     * @return object
     */
    public function getHttpClient()
    {
        return $this->httpClient;
    }

    /**
     * Set the HTTP Client
     *
     * @access public
     * @param  object $httpClient
     * @return void
     */
    public function setHttpClient($httpClient)
    {
        $this->httpClient = $httpClient;
    }

    /**
     * Get the API Endpoint Type
     *
     * @access public
     * @return string
     */
    public function getEndpointType()
    {
        return $this->endpointType;
    }

    /**
     * Set the API Endpoint Type
     *
     * @access public
     * @param  string $endpointType
     * @return void
     */
    public function setEndpointType($endpointType)
    {
        $this->endpointType = $endpointType;
    }

    /**
     * Get the API Endpoint Name
     *
     * @access public
     * @return object
     */
    public function getEndpointName()
    {
        return $this->endpointName;
    }

    /**
     * Set the API Endpoint Name
     *
     * @access public
     * @param  string $endpointName
     * @return void
     */
    public function setEndpointName($endpointName)
    {
        $this->endpointName = $endpointName;
    }
}
