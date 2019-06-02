<?php

namespace Sandeepchowdary7\Laratriposo;

use Sandeepchowdary7\Laratriposo\TriposoClient;
use Sandeepchowdary7\Laratriposo\Filter\FilterContract;
use Sandeepchowdary7\Laratriposo\Filter\TriposoFilterManager;

class Triposo
{

    /**
     * HTTP Client for API requests
     *
     * @var TriposoClient
     */
    protected $client;

    protected $filter;

    public function __construct($config)
    {

        if (!isset($config['account']) || !isset($config['token']))
            throw new \InvalidArgumentException('Expected values for accountId && token');

        $this->client = new TriposoClient($config['account'], $config['token'], $config['apiUrl']);
    }


    public function setFilter(FilterContract $customFilter)
    {
        if(!$this->filter)
            $this->filter = new TriposoFilterManager();

        $this->filter->setFilter($customFilter);

        return $this;
    }


    /**
     * General method to call Triposo endpoints
     * Use it for endpoints not covered by this class
     *
     * @param string $endpoint
     * @param array $query
     * @return array
     */
    public function request($endpoint, $query = [])
    {
        if($this->filter)
            $query = $this->filter->parse($query);

        return $this->client->consume($endpoint, $query);
    }


    /* Venues
     * ------------------------------------------------------------------------------ */

    /**
     * Get a single city
     *
     * @param string $cityName
     * @return array
     */
    public function city($cityName)
    {

        $result = $this->client->consume("location.json?id=$cityName");

        return $result->response->city;
    }
}