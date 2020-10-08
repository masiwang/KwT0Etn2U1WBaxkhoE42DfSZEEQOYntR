<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FundProduct extends JsonResource
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
            'id' => $this->id,
            'image' => $this->image,
            'slug' => $this->slug,
            'name' => $this->name,
            'price' => $this->price,
            'periode' => $this->periode,
            'return' => $this->return_per_periode,
            'stock' => $this->stock,
            'size' => $this->size,
            'category' => $this->category->slug,
            'closed_at' => date('d M Y', strtotime($this->closed_at))
        ];
    }
}
