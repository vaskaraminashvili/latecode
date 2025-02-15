<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ItemCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
     public function toArray(Request $request): array
    {
        return [
            'data' => $this->collection->map(function ($item) {
                return new ItemResource($item);
            }),
            // 'pagination' => [
            //     'total' => $this->total(),
            //     'per_page' => $this->perPage(),
            //     'current_page' => $this->currentPage(),
            //     'last_page' => $this->lastPage(),
            //     'from' => $this->firstItem(),
            //     'to' => $this->lastItem()
            // ],
            // 'links' => [
            //     'first' => $this->url(1),
            //     'last' => $this->url($this->lastPage()),
            //     'prev' => $this->previousPageUrl(),
            //     'next' => $this->nextPageUrl(),
            // ],
        ];
    }
}
