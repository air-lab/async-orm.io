<?php
namespace Air\Database;

use Air\Container;
use Air\Exceptions\ConnectionException;

abstract class ConnectionResolver
{
    protected static $db;

    public static function apply(Container $container)
    {
        if (static::$db === null) {
            static::$db = $container['db'];
        } else {
            throw new ConnectionException('Trying to connect to database more than one time', 0);
        }
    }
}

/**
 * Class Database
 * @package Air\Database
 */
abstract class Database
{
    protected $hostname;
    protected $database;
    protected $username;
    protected $password;
    protected $charset;
    protected $type;
    protected $pdo;

    /**
     * ConnectionResolver constructor.
     * @param $hostname
     * @param $database
     * @param $username
     * @param $password
     * @param string $charset
     */
    public function __construct($hostname, $database, $username, $password, $charset = 'utf8')
    {
        $this->hostname = $hostname;
        $this->database = $database;
        $this->username = $username;
        $this->password = $password;
        $this->charset = $charset;
        $this->connect();
    }

    /**
     * Try to connect
     * @return mixed
     */
    protected abstract function connect();


    /**
     * @return \PDO
     */
    public function connection()
    {
        return $this->pdo;
    }
}

/**
 * Class MySQL
 * @package Air\Database
 */
class MySQL extends Database
{
    protected $type = 'mysql';

    /**
     * Try to connect.
     */
    final protected function connect()
    {
        if ($this->connection() === null) {
            try {
                $this->pdo = new \PDO(
                    "{$this->type}:host={$this->hostname};dbname={$this->database};charset={$this->charset}",
                    $this->username,
                    $this->password
                );
            } catch (\PDOException $error) {
                $type = strtoupper($this->type);
                throw new ConnectionException(
                    "$type database error: connection failed. \n" . $error->getMessage(), $error->getCode()
                );
            }
        }
    }
}

/**
 * Class MariaDB
 * @package Air\Database
 */
class MariaDB extends MySQL
{
}
