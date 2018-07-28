<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 07/02/2018
 * Time: 6:25 AM
 */

namespace App\Essentials\Exceptions;

use Exception;

class UnprocessedEntityException extends Exception
{
    public $errors;

    public function __construct($errors)
    {
        $this->errors = $errors;
    }
}