<?php
class ServiceCall
{
    public $serviceCallname = "";
	public $scheme = "";
	public $url = "";
	public $httpMethod = "";
	public $urlParameters = "";
    public $headers = "";
    public $body = "";
    public $isRawBody = 0;

    public function __construct($serviceCallname, $scheme, $url, $httpMethod)
    {
        $this->serviceCallname = $serviceCallname;
    	$this->scheme = $scheme;
    	$this->url = $url;
    	$this->httpMethod = $httpMethod;
    }
}
?>
