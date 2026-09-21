<?php

namespace Onetoweb\Quicargo;

use Onetoweb\Quicargo\Endpoint\Endpoints;
use Onetoweb\Quicargo\Config\Method;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Client as GuzzleCLient;

/**
 * Quicargo Api Client.
 */
#[\AllowDynamicProperties]
class Client
{
    /**
     * Base href
     */
    public const BASE_HREF_LIVE = 'https://app.quicargo.com/api/v1';
    public const BASE_HREF_TEST = 'https://test-app.quicargo.com/api/v1';
    
    /**
     * @param string $apiKey
     * @param bool $testModus = false
     */
    public function __construct(
        #[\SensitiveParameter]
        private string $apiKey,
        private bool $testModus = false
    ) {
        // load endpoints
        $this->loadEndpoints();
    }
    
    /**
     * @return void
     */
    private function loadEndpoints(): void
    {
        foreach (Endpoints::list() as $name => $class) {
            $this->{$name} = new $class($this);
        }
    }
    
    /**
     * @return string
     */
    public function getBaseHref(): string
    {
        return $this->testModus ? self::BASE_HREF_TEST : self::BASE_HREF_LIVE;
    }
    
    /**
     * @param string $endpoint
     * 
     * @return string
     */
    public function getUrl(string $endpoint): string
    {
        return $this->getBaseHref() . '/' . ltrim($endpoint, '/');
    }
    
    /**
     * @param string $endpoint
     * @param array $query = []
     * 
     * @return array|NULL
     */
    public function get(string $endpoint, array $query = []): ?array
    {
        return $this->request(Method::GET, $endpoint, [], $query);
    }
    
    /**
     * @param string $endpoint
     * @param array $data = []
     * 
     * @return array|NULL
     */
    public function post(string $endpoint, array $data = []): ?array
    {
        return $this->request(Method::POST, $endpoint, $data);
    }
    
    /**
     * @param Method $method
     * @param string $endpoint
     * @param array $data = []
     * @param array $query = []
     * 
     * @return array|NULL
     */
    public function request(Method $method, string $endpoint, array $data = [], array $query = []): ?array
    {
        // build options
        $options = [
            RequestOptions::HTTP_ERRORS => false,
            RequestOptions::HEADERS => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization' => $this->apiKey,
            ],
            RequestOptions::JSON => $data,
            RequestOptions::QUERY => $query,
        ];
        
        
        // make request
        $response = (new GuzzleCLient())->request($method->value, $this->getUrl($endpoint), $options);
        
        // decode json
        $json = json_decode($response->getBody()->getContents(), true);
        
        return $json;
    }
}
