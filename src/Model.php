<?php

namespace Air;

use Air\Database\ConnectionResolver;
use Air\Interfaces\ORM;

abstract class Model extends ConnectionResolver implements ORM
{
    use ToType;

    public static function find($primaryKey)
    {

    }

    public static function sync()
    {

    }

    public static function all()
    {

    }

    public function save()
    {

    }

    public function delete()
    {

    }
}