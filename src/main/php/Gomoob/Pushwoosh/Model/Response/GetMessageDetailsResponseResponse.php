<?php
/**
 * @author Jonathan Greco <jonathan@avant-gout.com>
 * date 30/10/2019
 */

namespace Gomoob\Pushwoosh\Model\Response;

class GetMessageDetailsResponseResponse
{
    /**
     * The status of the message
     *
     * @var string
     */
    private $status;

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }
}