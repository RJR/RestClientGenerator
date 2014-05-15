<?php
class ServiceCall
{
	public $scheme = "";
	public $url = "";
	public $httpMethod = "";
	public $urlParameters = "";
    public $headers = "";
    public $body = "";
    public $isRawBody = 0;

    public function __construct($scheme, $url, $httpMethod)
    {
    	$this->scheme = $scheme;
    	$this->url = $url;
    	$this->httpMethod = $httpMethod;
    }
}

 $obj = new Project("https", "api.base.com", "get");

 echo $obj->scheme ."<br/>";
 echo $obj->url ."<br/>";
 echo $obj->httpMethod ."<br/>";

?>
