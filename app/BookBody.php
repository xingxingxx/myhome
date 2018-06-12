<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\BookBody
 *
 * @property int $id
 * @property int $book_id
 * @property int $parent_id
 * @property int $type
 * @property string $title
 * @property string $content
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read object $next
 * @property-read object $pre
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\BookBody onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BookBody whereBookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BookBody whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BookBody whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BookBody whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BookBody whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BookBody whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BookBody whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BookBody whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BookBody whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BookBody withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\BookBody withoutTrashed()
 * @mixin \Eloquent
 */
class BookBody extends Model
{
    use SoftDeletes;
    protected $table='book_body';
    protected $fillable = ['title', 'book_id', 'parent_id','type','content'];


    /**
     * 获取下一篇文章
     * @return object
     */
    public function getNextAttribute()
    {
        return $this->where('book_id', $this->book_id)->where('id', '>', $this->id)->orderBy('id', 'asc')->first(['id', 'title','book_id']);
    }

    /**
     * 获取上一篇文章
     * @return object
     */
    public function getPreAttribute()
    {
        return $this->where('book_id', $this->book_id)->where('id', '<', $this->id)->orderBy('id', 'desc')->first(['id', 'title','book_id']);
    }
}
