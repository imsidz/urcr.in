<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MegaMenuCategoryResources extends JsonResource
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
            'name' => $this->category->name,
            'slug' => $this->category->slug,
            'active' => false,
            // 'subcategories' => MegaMenuSubCategoryResources::collection($this->subcategories)
        ];
    }
}
