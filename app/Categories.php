<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Categories
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $products
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categories newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categories newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categories query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categories whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categories whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categories whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categories whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Categories extends Model
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}