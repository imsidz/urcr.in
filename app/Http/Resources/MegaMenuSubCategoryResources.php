<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MegaMenuSubCategoryResources extends JsonResource
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
            'name' => $this->subcategory->name,
            'slug' => $this->subcategory->slug,
            'active' => false,
            'childcategories' => MegaMenuChildCategoryResources::collection($this->childcategories)
        ];
    }
}
