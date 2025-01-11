<?php

namespace AdminDashboard\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
    protected $table = 'contents';
    protected $fillable = ['type', 'content', 'order'];

    public function page(): BelongsTo
    {
        return $this->belongsTo(Page::class);
    }

    public function media(): HasMany
    {
        return $this->hasMany(Media::class);
    }
}