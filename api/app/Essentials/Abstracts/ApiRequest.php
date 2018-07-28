<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 05/02/2018
 * Time: 11:00 PM
 */

namespace App\Essentials\Abstracts;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use App\Essentials\Exceptions\UnprocessedEntityException;

class ApiRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function failedValidation(Validator $validator)
    {
        throw new UnprocessedEntityException($validator->errors());
    }
}
