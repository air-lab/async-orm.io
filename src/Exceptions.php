<?php
namespace Air\Exceptions;

/**
 * Class NotFoundException
 * @package Air\Exceptions
 */
class NotFoundException extends \RuntimeException
{
    public function __construct($message, $code, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous = null);
    }
}


/**
 * Class NotFoundException
 * @package Air\Exceptions
 */
class QuerySyntaxErrorException extends \RuntimeException
{
    public function __construct($message, $code, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous = null);
    }
}

/**
 * Class ConnectionException
 * @package Air\Exceptions
 */
class ConnectionException extends \RuntimeException
{
    public function __construct($message, $code, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous = null);
    }
}
