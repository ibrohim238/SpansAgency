<?php

namespace App\Http\Resources;

use App\Models\Webinar;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Webinar
*/
class WebinarResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'theme' => $this->theme,
            'created_at' => $this->created_at,
        ];
    }
}
