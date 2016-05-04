<?php
namespace Air\Interfaces;

/**
 * ORM Interface for Model
 * @package Air\Interfaces
 */
interface ORM
{
    public static function find($primaryKey);

    public static function sync();

    public static function all();

    public function save();

    public function delete();
}
