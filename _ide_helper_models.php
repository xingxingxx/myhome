<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Book
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $description
 * @property string $author
 * @property string $cover
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Book onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Book whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Book whereCover($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Book whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Book whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Book whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Book whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Book whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Book whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Book whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Book withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Book withoutTrashed()
 */
	class Book extends \Eloquent {}
}

namespace App{
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
 */
	class BookBody extends \Eloquent {}
}

namespace App{
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
 */
	class Link extends \Eloquent {}
}

namespace App{
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
 */
	class Password extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

