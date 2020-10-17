<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class Transaction extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $date = new Carbon($this->created_at);
        return [
            'time' => date('d M Y H:m:s', strtotime($date)),
            'type' => $this->type,
            'description' => $this->comment,
            'amount' => $this->amount
        ];
    }
}
