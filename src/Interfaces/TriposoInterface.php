<?php
namespace Sandeepchowdary7\Laratriposo\Interfaces;
interface TriposoInterface
{
    public function getCity($cityName);
	public function getCityFood($cityName);
    public function makeRequest($url, $params = array(), $req_method = self::GET);
	public function getRequestInfo();
	public function getErrorMessage();
    public function getErrorCode();
	public function _parseError($res);
}