<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
class Article extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // Return the array of attributes (fields) that should be
        // converted to JSON when sending the response.
        return [
            'id' => $this->id,
            'title' => $this->title,
            'content' => $this->content
        ];
    }

    public function with($request)
    {
        return [
            'version' => '1.0.0',
            'author_url' => url('https://devopsthinh.site.net')
        ];
    }
}
// Need to register the API routes in the routes/api.php 
