<?php

namespace App\YodaBot;

use Exception;
use Illuminate\Support\Facades\Http;

class YodaBot
{
    private $accessToken;
    private $expiration;
    private $apiKey;
    private $secretKey;
    private $chatbotAPIURL;
    private $knowledgeAPIURL;
    private $ticketingAPIURL;
    private $searchAPIURL;

    public function __construct()
    {
        $this->setApiKey(env('YODABOT_APIKEY'));
        $this->setSecretKey(env('YODABOT_SECRET'));
    }

    /**
     *
     * @return boolean
     */
    public function authentication()
    {
        $body = [
            'secret' => $this->getSecretKey()
        ];
        $req = Http::withHeaders($this->headerAnonymous())->post(env('YODABOT_AUTH_URL'), ['secret' => $this->getSecretKey()]);
        $result = json_decode($req);
        if ($result->accessToken) {
            $this->setAccessToken($result->accessToken);
            $this->setExpiration($result->expiration);
            return true;
        }
        return false;
    }

    public function loadAPI()
    {
        try {
            $req = Http::withHeaders($this->headerAuthenticated())->get(env('YODABOT_API_URL'));
            $api = json_decode($req)->apis;
            $this->setChatbotAPIURL($api->chatbot);
            $this->setKnowledgeAPIURL($api->knowledge);
            $this->setSearchAPIURL($api->search);
            $this->setTicketingAPIURL($api->ticketing);
        } catch (Exception $e) {
            echo 'Exceção capturada: ',  $e->getMessage(), "\n";
        }
    }

    public function headerAnonymous()
    {
        return ['x-inbenta-key' => $this->getApiKey(), 'Content-Type' => 'application/json'];
    }

    public function headerAuthenticated()
    {
        return [
            'x-inbenta-key' => $this->getApiKey(),
            'Authorization' => 'Bearer ' . $this->getAccessToken()
        ];
    }

    public function message($token)
    {
    }


    /**
     * 
     *
     * @return string
     */
    public function getToken()
    {
        if ($this->authentication()) {
            return $this->getAccessToken();
        }
        return false;
    }

    /**
     * Get the value of expiration
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * Set the value of expiration
     *
     * @return  self
     */
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;

        return $this;
    }

    /**
     * Get the value of accessToken
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Set the value of accessToken
     *
     * @return  self
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    /**
     * Get the value of secretKey
     */
    public function getSecretKey()
    {
        return $this->secretKey;
    }

    /**
     * Set the value of secretKey
     *
     * @return  self
     */
    public function setSecretKey($secretKey)
    {
        $this->secretKey = $secretKey;

        return $this;
    }

    /**
     * Get the value of apiKey
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * Set the value of apiKey
     *
     * @return  self
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    /**
     * Get the value of chatbotAPIURL
     */
    public function getChatbotAPIURL()
    {
        return $this->chatbotAPIURL;
    }

    /**
     * Set the value of chatbotAPIURL
     *
     * @return  self
     */
    public function setChatbotAPIURL($chatbotAPIURL)
    {
        $this->chatbotAPIURL = $chatbotAPIURL;

        return $this;
    }

    /**
     * Get the value of knowledgeAPIURL
     */
    public function getKnowledgeAPIURL()
    {
        return $this->knowledgeAPIURL;
    }

    /**
     * Set the value of knowledgeAPIURL
     *
     * @return  self
     */
    public function setKnowledgeAPIURL($knowledgeAPIURL)
    {
        $this->knowledgeAPIURL = $knowledgeAPIURL;

        return $this;
    }

    /**
     * Get the value of ticketingAPIURL
     */
    public function getTicketingAPIURL()
    {
        return $this->ticketingAPIURL;
    }

    /**
     * Set the value of ticketingAPIURL
     *
     * @return  self
     */
    public function setTicketingAPIURL($ticketingAPIURL)
    {
        $this->ticketingAPIURL = $ticketingAPIURL;

        return $this;
    }

    /**
     * Get the value of searchAPIURL
     */
    public function getSearchAPIURL()
    {
        return $this->searchAPIURL;
    }

    /**
     * Set the value of searchAPIURL
     *
     * @return  self
     */
    public function setSearchAPIURL($searchAPIURL)
    {
        $this->searchAPIURL = $searchAPIURL;

        return $this;
    }
}
