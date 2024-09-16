<?php

namespace AdminDashboard\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Content
 *
 * @package AdminDashboard\Models
 *
 * @property int $id
 * @property string $type
 * @property string $content
 * @property int $order
 */
class Content extends Model
{
    protected $fillable = ['type', 'content', 'order'];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }

    public function media()
    {
        return $this->hasMany(Media::class);
    }
}