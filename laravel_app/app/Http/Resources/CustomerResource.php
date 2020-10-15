<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $addresses = [];
        $attachments = [];
        foreach ($this->addresses as $address){
            /** @var $address \App\CustomerAddress */
            $addresses[] = [
                'id'        => (int) $address->id,
                'address'   => $address->address,
                'city'      => $address->city,
                'state'     => $address->state,
                'zip'       => $address->zip
            ];
        }
        foreach ($this->attachments as $attachment){
            $attachments[] = [
                'id'        => (int) $attachment->id,
                'path'      => $attachment->path
            ];
        }

        return [
            'id'        => (int) $this->id,
            'name'      => $this->name,
            'lastname'  => $this->lastname,
            'addresses' => $addresses,
            'attachments' => $attachments
        ];
    }
}
