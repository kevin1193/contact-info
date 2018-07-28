<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 07/02/2018
 * Time: 6:25 AM
 */

namespace App\Essentials\Exceptions;

use Exception;

class ResourceNotFoundException extends Exception
{
    public $resource;

    public function __construct($resource = '')
    {
        $this->resource = $resource;
    }
}