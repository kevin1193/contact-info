<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 07/02/2018
 * Time: 6:24 AM
 */

namespace App\Essentials\Exceptions;

use Exception;

class NoResourceFoundException extends Exception
{
    public $resource;

    public function __construct($resource = '')
    {
        $this->resource = str_plural($resource);
    }
}