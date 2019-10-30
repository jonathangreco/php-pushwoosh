<?php
/**
 * @author Jonathan Greco <jonathan@avant-gout.com>
 * date 30/10/2019
 */
namespace Gomoob\Pushwoosh\Model\Request;

use Gomoob\Pushwoosh\Exception\PushwooshException;

class GetMessageDetailsRequest extends AbstractRequest
{
    /**
     * The message code obtained in createMessage.
     *
     * @var string
     */
    private $message;

    /**
     * Function used to indicate if the concrete implementation of the request supports the `auth` property.
     *
     * @return boolean `true` if the concrete implementation of the request supports the `auth` property, `false`
     *         otherwise.
     */
    public function isAuthSupported()
    {
        return true;
    }

    /**
     * Utility function used to create a new instance of the <tt>DeleteMessageRequest</tt>.
     *
     * @return \Gomoob\Pushwoosh\Model\Request\GetMessageDetailsRequest the new created instance.
     */
    public static function create()
    {
        return new GetMessageDetailsRequest();
    }

    /**
     * Gets the message code obtained in createMessage.
     *
     * @return string the message code obtained in createMessage.
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     * @throws \Gomoob\Pushwoosh\Exception\PushwooshException
     */
    public function jsonSerialize()
    {
        // The 'auth' parameter must have been set
        if (!isset($this->auth)) {
            throw new PushwooshException('The \'auth\' property is not set !');
        }

        // The 'message' parameter must have been set
        if (!isset($this->message)) {
            throw new PushwooshException('The \'message\' property is not set !');
        }

        return [
            'auth' => $this->auth,
            'message' => $this->message
        ];
    }

    /**
     * Sets the message code obtained in createMessage.
     *
     * @param string $message the message code obtained in createdMessage.
     *
     * @return \Gomoob\Pushwoosh\Model\Request\GetMessageDetailsRequest this instance.
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }
}