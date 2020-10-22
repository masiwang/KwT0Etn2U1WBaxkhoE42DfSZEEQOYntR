<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

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
        $started = new Carbon($this->started_at);
        $ended = new Carbon($this->ended_at);
        $closed = new Carbon($this->closed_at);
        $is_closed = (Carbon::now()->timestamp > $closed->timestamp);
        $is_ended = (Carbon::now()->timestamp > $ended->timestamp);
        return [
            'id' => $this->id,
            'image' => $this->image,
            'slug' => $this->slug,
            'name' => $this->name,
            'price' => $this->price,
            'periode' => $ended->diffInDays($started),
            'return' => $this->return_per_periode,
            'stock' => $this->stock,
            'category' => $this->category->slug,
            'closed_at' => date('d M Y', strtotime($this->closed_at)),
            'ended_at' => date('d M Y', strtotime($this->ended_at)),
            'description' => $this->description,
            'prospectus' => $this->risk_analysis,
            'is_closed' => $is_closed,
        ];
    }
}
