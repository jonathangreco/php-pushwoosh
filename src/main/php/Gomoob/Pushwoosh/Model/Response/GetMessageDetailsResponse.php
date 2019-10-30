<?php
/**
 * @author Jonathan Greco <jonathan@avant-gout.com>
 * date 30/10/2019
 */

namespace Gomoob\Pushwoosh\Model\Response;

class GetMessageDetailsResponse extends AbstractResponse
{
    /**
     * @var \Gomoob\Pushwoosh\Model\Response\GetMessageDetailsResponseResponse
     */
    private $response;

    /**
     * Utility function used to create a new instance from a JSON string.
     *
     * @param array $json a PHP array which contains the result of a 'json_decode' execution.
     * @return \Gomoob\Pushwoosh\Model\Response\GetMessageDetailsResponse
     */
    public static function create(array $json)
    {
        $getDetailsResponse = new GetMessageDetailsResponse();
        $getDetailsResponse->setStatusCode($json['status_code']);
        $getDetailsResponse->setStatusMessage($json['status_message']);

        // If a 'response' is provided
        if (array_key_exists('response', $json) && isset($json['response'])) {
            $messageDetailsResponseResponse = new GetMessageDetailsResponseResponse();
            $messageDetailsResponseResponse->setStatus($json['response']['message']['status']);
            $getDetailsResponse->setResponse($messageDetailsResponseResponse);
        }

        return $getDetailsResponse;
    }

    /**
     * @param $messageDetailsResponseResponse
     */
    public function setResponse($messageDetailsResponseResponse)
    {
        $this->response = $messageDetailsResponseResponse;
    }

    public function getResponse()
    {
        return $this->response;
    }
}