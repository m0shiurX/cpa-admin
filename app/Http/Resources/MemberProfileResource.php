<?php

namespace App\Http\Resources;

use Illuminate\Support\Facades\URL;
use Illuminate\Http\Resources\Json\JsonResource;

class MemberProfileResource extends JsonResource
{

    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'photo'  => $this->photo_path ? URL::route('storage', ['path' => $this->photo_path, 'w' => 60, 'h' => 60, 'fit' => 'crop']) : null,
            'address' => $this->address,
            'nid_no' => $this->n_id_no,
            'fb_link' => $this->fb_link,
            'network' => $this->network?->name,
            'smartlink' => $this->smartlink_code,
            'nid_verified' => $this->is_n_id_verified,
            'is_approved' => $this->is_approved,
            'nid_front' => $this->n_id_front_path,
            'nid_back' => $this->n_id_back_path,
        ];
    }
}
