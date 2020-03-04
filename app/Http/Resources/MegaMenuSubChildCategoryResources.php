<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MegaMenuSubChildCategoryResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->subchildcategory->name,
            'slug' => $this->subchildcategory->slug
        ];
    }
}
