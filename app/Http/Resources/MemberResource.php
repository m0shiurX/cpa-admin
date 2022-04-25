<?php

namespace App\Http\Resources;

use Illuminate\Support\Facades\URL;
use Illuminate\Http\Resources\Json\JsonResource;

class MemberResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'name' => $this->name,
            'designation' => $this->designation,
            'avatar' => $this->photo_path ? URL::route('storage', ['path' => $this->photo_path, 'w' => 250, 'h' => 250, 'fit' => 'crop']) : null,
        ];
    }
}
