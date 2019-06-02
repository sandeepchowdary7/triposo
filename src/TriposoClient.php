<?php

namespace Sandeepchowdary7\Laratriposo;

use GuzzleHttp\Client;

class TriposoClient extends Client
{
    /**
     * The default Triposo API url
     *
     * @var string
     */
    protected $apiUrl = 'https://www.triposo.com/api/20181213/';
    /**
     * Your Client Id
     *
     * @var string
     */
    protected $account;
    /**
     * Your Client Secret
     *
     * @var string
     */
    protected $token;
    /**
     * A date that represents the "version" of the API
     * if no version is passed the latest version will be used
     * @see https://developer.triposo.com/overview
     *
     * @var string
     */
    public function __construct($account, $token, $apiUrl = null)
    {
        $this->account = $account;
        $this->token = $token;
        if($apiUrl)
            $this->apiUrl = $apiUrl;
        parent::__construct();
    }
    public function consume($endpoint, $body = [])
    {
        $uri = $this->getUri($endpoint, $body);
        $response = $this->get($uri)->getBody()->getContents();
        return json_decode($response);
    }
    private function getUri($endpoint, $body)
    {
        $params = array_merge($body, $this->getAuth());
        return $this->apiUrl . '/' . $endpoint . '?' . http_build_query($params);
    }
    private function getAuth()
    {
        return [
            'account' => $this->account,
            'token' => $this->token,
        ];
    }
}
