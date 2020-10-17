<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
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
            'name' => $this->name,
            'jalan' => $this->jalan,
            'kelurahan' => $this->kelurahan,
            'kecamatan' => $this->kecamatan,
            'kabupaten' => $this->kabupaten,
            'kodepos' => $this->kodepos,
            'job' => $this->job,
            'email' => $this->email,
            'phone' => $this->phone,
            'birthday' => date('d M Y', strtotime($this->birthday)),
            'ktp' => $this->ktp,
            'ktp_image' => $this->ktp_image,
            'gender' => $this->gender,
            'saldo' => $this->saldo
        ];
    }
}
