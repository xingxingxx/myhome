<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Link
 *
 * @property int $id
 * @property int $user_id
 * @property int $frequency
 * @property string $title
 * @property string $url
 * @property string $icon
 * @property string $description
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Link whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Link whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Link whereFrequency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Link whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Link whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Link whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Link whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Link whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Link whereUserId($value)
 * @mixin \Eloquent
 */
class Link extends Model
{
    //
    protected $fillable = ['url', 'title', 'icon', 'description','user_id'];
}
