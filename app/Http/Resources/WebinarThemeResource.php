<?php

namespace App\Http\Resources;

use App\Models\WebinarTheme;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin WebinarTheme
*/
class WebinarThemeResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'created_at' => $this->created_at,
        ];
    }
}
