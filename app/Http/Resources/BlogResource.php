<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class BlogResource extends Resource
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

           'title' => $this->title,
            'slug' => $this->slug,
            'image' => $this->image,
            'views' => $this->views,
            'content' => $this->content,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
