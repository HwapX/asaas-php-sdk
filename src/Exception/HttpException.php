<?php
namespace Softr\Asaas\Exception;

/**
 * @author Agência Softr <agencia.softr@gmail.com>
 */
class HttpException extends \RuntimeException implements ExceptionInterface
{
    public $code;

    public $message;

    public function __construct($message, $code)
    {
        $this->code    = $code;
        $this->message = $message;
    }

    public function getCode()
    {
        return $this->code;
    };

    public function getMessage()
    {
        return $this->message;
    };
}
