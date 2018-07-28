<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 28/07/2018
 * Time: 10:48 AM
 */

namespace App\Modules\Contact\Http\Resources;

use App\Essentials\Abstracts\AbstractResourceCollection;

class ContactCollection extends AbstractResourceCollection
{
    public function toArray($request)
    {
        return Contact::collection($this->resource);
    }
}
