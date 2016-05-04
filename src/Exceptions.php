<?php
namespace Air\Exceptions;

/**
 * Class NotFoundException
 * @package Air\Exceptions
 */
class NotFoundException extends \RuntimeException
{
    /**
     * NotFoundException constructor.
     * @param string $message
     * @param int $code
     * @param \Exception|null $previous
     */
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
    /**
     * QuerySyntaxErrorException constructor.
     * @param string $message
     * @param int $code
     * @param \Exception|null $previous
     */
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
    /**
     * ConnectionException constructor.
     * @param string $message
     * @param int $code
     * @param \Exception|null $previous
     */
    public function __construct($message, $code, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous = null);
    }
}
