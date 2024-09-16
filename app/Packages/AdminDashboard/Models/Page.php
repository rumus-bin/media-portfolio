<?php

namespace AdminDashboard\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    protected $fillable = ['title', 'slug', 'layout', 'content'];

    /**
     * Define Relationships:
     *
     * A Page has many Content.
     */

    public function contents()
    {
        return $this->hasMany(Content::class);
    }
}
