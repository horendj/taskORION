<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\PersonAddressResource;
use App\Http\Resources\PersonCompanyResource;

class PersonResource extends JsonResource
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
          'name' => $this->name,
          'email' => $this->email,
          'salary' => $this->salary,
          'address' => new PersonAddressResource($this->address),
          'company' => PersonCompanyResource::collection($this->companies),
          'car' => PersonCarsResource::collection($this->cars),
        ];
        //return parent::toArray($request);
    }
}
