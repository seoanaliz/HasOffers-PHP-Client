<?php
namespace DraperStudio\HasOffers;

use GuzzleHttp\Client as GuzzleClient;

class Client
{
    /**
     * API Base URL - Brand
     *
     * @access private
     * @var string $apiUrlBrand
     */
    private $apiUrlBrand = 'https://api.hasoffers.com/Apiv3/json?NetworkId=%s&Target=%s&Method=%s&NetworkToken=%s';

    /**
     * API Base URL - Affiliate
     *
     * @access private
     * @var string $apiUrlAffiliate
     */
    private $apiUrlAffiliate = 'https://api.hasoffers.com/Apiv3/json?NetworkId=%s&Target=%s_%s&Method=%s&api_key=%s';

    /**
     * API Base URL - YeahMobi
     *
     * @access private
     * @var string $apiUrlYeahMobi
     */
    private $apiUrlYeahMobi = 'http://yeahmobi.hasoffers.com/%s.json?api_key=%s';

    /**
     * API Base URL - FurtherMobi
     *
     * @access private
     * @var string $apiUrlFurtherMobi
     */
    private $apiUrlFurtherMobi = 'http://aff.furthermobi.com/%s.json?api_key=%s';

    /**
     * HTTP Headers
     *
     * @access private
     * @var array $headers
     */
    private $headers = ['User-Agent' => 'DraperStudio-HasOffers/1.0.0'];

    /**
     * HTTP Client
     *
     * @access private
     * @var object $httpClient
     */
    private $httpClient;

    /**
     * API Key
     *
     * @access private
     * @var string $apiKey
     */
    private $apiKey;

    /**
     * Network ID
     *
     * @access private
     * @var string $networkId
     */
    private $networkId;

    /**
     * API Type
     *
     * @access private
     * @var string $apiType
     */
    private $apiType;

    /**
     * API Namespace
     *
     * @access private
     * @var string $apiNamespace
     */
    private $apiNamespace;

    /**
     * Constructor
     *
     * @access public
     * @param  string $apiKey
     * @param  string $networkId
     * @return void
     */
    public function __construct($apiKey, $networkId = null)
    {
        $this->setApiKey($apiKey);

        $this->setNetworkId($networkId);

        $this->setHttpClient(new GuzzleClient([
            'defaults' => [
                'headers'  => $this->getHeaders(),
            ],
        ]));
    }

    /**
     * Initialize the given API class
     *
     * @access public
     * @param  string $class
     * @return object
     */
    public function api($class)
    {
        $class = "DraperStudio\\HasOffers\\Api\\".$class;

        return new $class($this);
    }

    /**
     * Send a GET request
     *
     * @access public
     * @param  string $apiMethod
     * @param  array  $parameters
     * @return object
     */
    public function get($apiMethod, $parameters = [])
    {
        $requestUrl = $this->buildUrl($apiMethod, $parameters);
        $requestUrl = urldecode($requestUrl);

        $response   = $this->getHttpClient()->get($requestUrl);

        return $this->handleResponse($response);
    }

    /**
     * Build the request url
     *
     * @access private
     * @param  string $apiMethod
     * @param  array  $parameter
     * @return string
     */
    private function buildUrl($apiMethod, $parameters)
    {
        switch ($this->getApiType()) {
            case 'Brand':
                $url = sprintf($this->apiUrlBrand, $this->getNetworkId(), $this->getApiNamespace(), $apiMethod, $this->getApiKey());
            break;

            case 'Affiliate':
                $url = sprintf($this->apiUrlAffiliate, $this->getNetworkId(), $this->getApiType(), $this->getApiNamespace(), $apiMethod, $this->getApiKey());
            break;

            case 'YeahMobi':
                $url = sprintf($this->apiUrlYeahMobi, $apiMethod, $this->getApiKey());
            break;

            case 'FurtherMobi':
                $url = sprintf($this->apiUrlFurtherMobi, $apiMethod, $this->getApiKey());
            break;
        }

        return $url.'&'.http_build_query($parameters);
    }

    /**
     * Handle the response
     *
     * @access private
     * @param  object $response
     * @return object
     */
    private function handleResponse($response)
    {
        $statusCode = $response->getStatusCode();
        $body = $response->json(['object' => true]);

        if ($statusCode >= 200 && $statusCode < 300) {
            return $body;
        }

        throw new \Exception($body->message, $statusCode);
    }

    /**
     * Get the Affiliate API Base URL
     *
     * @access public
     * @return string
     */
    public function getApiUrlAffiliate()
    {
        return $this->apiUrlAffiliate;
    }

    /**
     * Set the Affiliate API Base URL
     *
     * @access public
     * @param  string $apiUrlAffiliate
     * @return void
     */
    public function setApiUrlAffiliate($apiUrlAffiliate)
    {
        $this->apiUrlAffiliate = $apiUrlAffiliate;
    }

    /**
     * Get the Brand API Base URL
     *
     * @access public
     * @return string
     */
    public function getApiUrlBrand()
    {
        return $this->apiUrlBrand;
    }

    /**
     * Set the Brand API Base URL
     *
     * @access public
     * @param  string $apiUrlBrand
     * @return void
     */
    public function setApiUrlBrand($apiUrlBrand)
    {
        $this->apiUrlBrand = $apiUrlBrand;
    }

    /**
     * Get the YeahMobi API Base URL
     *
     * @access public
     * @return string
     */
    public function getApiUrlYeahMobi()
    {
        return $this->apiUrlYeahMobi;
    }

    /**
     * Set the YeahMobi API Base URL
     *
     * @access public
     * @param  string $apiUrlYeahMobi
     * @return void
     */
    public function setApiUrlYeahMobi($apiUrlYeahMobi)
    {
        $this->apiUrlYeahMobi = $apiUrlYeahMobi;
    }

    /**
     * Get the FurtherMobi API Base URL
     *
     * @access public
     * @return string
     */
    public function getApiUrlFurtherMobi()
    {
        return $this->apiUrlFurtherMobi;
    }

    /**
     * Set the FurtherMobi API Base URL
     *
     * @access public
     * @param  string $apiUrlFurtherMobi
     * @return void
     */
    public function setApiUrlFurtherMobi($apiUrlFurtherMobi)
    {
        $this->apiUrlFurtherMobi = $apiUrlFurtherMobi;
    }

    /**
     * Get the HTTP Headers
     *
     * @access public
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Set the HTTP Headers
     *
     * @access public
     * @param  array $headers
     * @return void
     */
    public function setHeaders($headers)
    {
        $this->headers = $headers;
    }

    /**
     * Get the API Key
     *
     * @access public
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * Set the API Key
     *
     * @access public
     * @param  string $apiKey
     * @return void
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * Get the Network ID
     *
     * @access public
     * @return string
     */
    public function getNetworkId()
    {
        return $this->networkId;
    }

    /**
     * Set the Network ID
     *
     * @access public
     * @param  string $networkId
     * @return void
     */
    public function setNetworkId($networkId)
    {
        $this->networkId = $networkId;
    }

    /**
     * Get the API Type
     *
     * @access public
     * @return string
     */
    public function getApiType()
    {
        return $this->apiType;
    }

    /**
     * Set the API Type
     *
     * @access public
     * @param  string $apiType
     * @return void
     */
    public function setApiType($apiType)
    {
        $this->apiType = $apiType;
    }

    /**
     * Get the API Namespace
     *
     * @access public
     * @return string
     */
    public function getApiNamespace()
    {
        return $this->apiNamespace;
    }

    /**
     * Set the API Namespace
     *
     * @access public
     * @param  string $apiNamespace
     * @return void
     */
    public function setApiNamespace($apiNamespace)
    {
        $this->apiNamespace = $apiNamespace;
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
}
