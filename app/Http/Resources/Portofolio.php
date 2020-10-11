<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Portofolio extends JsonResource
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
            'image' => $this->product->image,
            'invoice' => $this->invoice,
            'vendor' => $this->product->vendor->name,
            'product' => $this->product->name,
            'status' => $this->status->name,
            'qty' => $this->qty,
            'price' => $this->product->price,
            'return' => $this->product->return_per_periode,
            'actual_return' => $this->product->actual_return_per_periode,
            'portofolio' => $this->product->price * $this->qty * (1+$this->product->return_per_periode),
            'actual_portofolio' => $this->product->price * $this->qty * (1+$this->product->actual_return_per_periode),
            'risk_analysis' => $this->product->risk_analysis,
            'simulation' => $this->product->simulation,
            'description' => $this->product->description,
            'category_slug' => $this->product->category->slug,
            'product_slug' => $this->product->slug,
        ];
    }
}
