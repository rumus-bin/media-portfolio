<?php

namespace AdminDashboard\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Page
 *
 * @package AdminDashboard\Models
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $layout
 * @property string $content
 */
class Page extends Model
{
    use HasFactory;

    protected $table = 'pages';

    protected $fillable = ['title', 'slug', 'layout', 'content'];

    public function contents(): HasMany
    {
        return $this->hasMany(Content::class);
    }
}
