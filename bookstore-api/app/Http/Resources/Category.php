<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Category extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $parent = parent::toArray($request);

        $data['books'] = $this->books()->paginate(6);
        $data = array_merge($parent, $data);
        return [
            'status' => 'success',
            'message' => 'category data',
            'data' => $data
        ];
    }
}
