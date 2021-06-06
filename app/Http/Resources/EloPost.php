<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EloPost extends JsonResource
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
            'post_id' => $this->post_id,
            'title' => $this->title,
            'content' => $this->content,
            'type_id' => $this->type_id,
            'user_id' => $this->user_id,
        ];
    }
}
