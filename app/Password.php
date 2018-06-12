<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Password
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $content
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Password whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Password whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Password whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Password whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Password whereUserId($value)
 * @mixin \Eloquent
 */
class Password extends Model
{
    //
    protected $fillable = ['user_id', 'content'];
}
