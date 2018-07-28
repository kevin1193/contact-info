<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 28/07/2018
 * Time: 10:48 AM
 */

namespace App\Modules\Contact\Http\Resources;

use App\Essentials\Abstracts\AbstractResource;

class Contact extends AbstractResource
{
    public function toArray($request)
    {
        return [
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'phone' => $this->phone,
            'country' => $this->country,
            'city' => $this->city,
            'state' => $this->state,
            'zip' => $this->zip
        ];
    }
}
