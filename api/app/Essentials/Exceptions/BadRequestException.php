<?php

/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 05/02/2018
 * Time: 11:01 PM
 */
namespace App\Essentials\Exceptions;

use Exception;

class BadRequestException extends Exception
{
    public $message;

    public function __construct($message)
    {
        $this->message = $message;
    }
}