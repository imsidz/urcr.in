<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MegaMenuChildCategoryResources extends JsonResource
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
            'name' => $this->childcategory->name,
            'slug' => $this->childcategory->slug,
            'subchildcategories' => MegaMenuSubChildCategoryResources::collection($this->subchildcategories)
        ];
    }
}
