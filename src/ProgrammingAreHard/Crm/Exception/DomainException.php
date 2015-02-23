<?php

namespace ProgrammingAreHard\Crm\Exception;

use Symfony\Component\HttpFoundation\Response;

class DomainException extends \Exception
{
    public function __construct($message = "", $code = Response::HTTP_BAD_REQUEST, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}