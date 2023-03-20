<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {

        return [
            'title_uz' => $this->title_uz,
            'title_ru' => $this->title_ru,
            'short_content_uz' => $this->short_content_uz,
            'short_content_ru' => $this->short_content_ru,
            'content_uz' => $this->content_uz,
            'content_ru' => $this->content_ru,
            'category' => $this->category->name_uz,
        ];

    }
}
