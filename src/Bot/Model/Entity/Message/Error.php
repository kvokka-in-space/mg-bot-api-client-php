<?php

namespace RetailCrm\Mg\Bot\Model\Entity\Message;

use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use RetailCrm\Mg\Bot\Model\ModelInterface;

class Error implements ModelInterface
{
    /**
     * @var int
     *
     * @Type("integer")
     */
    private $code;

    /**
     * @var string
     *
     * @Type("string")
     */
    private $message;

    public function getCode(): int
    {
        return $this->code;
    }

    public function getMessage(): string
    {
        return strval($this->message);
    }
}
