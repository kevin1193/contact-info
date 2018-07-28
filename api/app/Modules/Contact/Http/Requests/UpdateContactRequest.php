<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 28/07/2018
 * Time: 10:49 AM
 */

namespace App\Modules\Contact\Http\Requests;

use App\Essentials\Abstracts\ApiRequest;

class UpdateContactRequest extends ApiRequest
{
    public function rules()
    {
        return [
            'email' => 'required|email',
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'country' => 'required',
            'city' => 'required',
            'state' => 'required',
            'region' => 'required'
        ];
    }
}
