<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Book extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param \Illuminate\Http\Request $request
=======
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
=======
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $parent =  parent::toArray($request);
        $data['categories'] = $this->categories;
        $data = array_merge($parent, $data);
        return [
            'status' => 'success',
            'message' => 'book data',
            'data' => $data
        ];
=======
        return parent::toArray($request);
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
=======
        return parent::toArray($request);
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
    }
}
