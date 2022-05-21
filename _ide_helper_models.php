<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Webinar
 *
 * @property int $id
 * @property string $name
 * @property int $webinar_theme_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\WebinarTheme|null $theme
 * @method static \Database\Factories\WebinarFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Webinar newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Webinar newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Webinar query()
 * @method static \Illuminate\Database\Eloquent\Builder|Webinar whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Webinar whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Webinar whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Webinar whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Webinar whereWebinarThemeId($value)
 */
	class Webinar extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\WebinarTheme
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\WebinarThemeFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|WebinarTheme newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WebinarTheme newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WebinarTheme query()
 * @method static \Illuminate\Database\Eloquent\Builder|WebinarTheme whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebinarTheme whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebinarTheme whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebinarTheme whereUpdatedAt($value)
 */
	class WebinarTheme extends \Eloquent {}
}

