<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 05/02/2018
 * Time: 11:00 PM
 */

namespace App\Essentials\Abstracts;

use Illuminate\Http\Resources\Json\ResourceCollection;

class AbstractResourceCollection extends ResourceCollection
{
    public function __construct($resource)
    {
        $resource = $this->getRelationshipLoads($resource);
        parent::__construct($resource);
    }

    public function toArray($request)
    {
        return parent::toArray($request);
    }

    public function getRelationshipLoads($resource)
    {
        $relationships = request()->get('relationship');

        if (!$relationships) {
            return $resource;
        }

        $relationships = explode(',', $relationships);

        unset(request()['relationship']);

        $resource->load($relationships);

        return $resource;
    }
}
