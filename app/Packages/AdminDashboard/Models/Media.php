<?php

namespace AdminDashboard\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Media
 *
 * @package AdminDashboard\Models
 *
 * @property int $id
 * @property string $file_path
 * @property string $type
 */
class Media extends Model
{
    protected $table = 'media';
    protected $fillable = ['file_path', 'type'];

    public function content(): BelongsTo
    {
        return $this->belongsTo(Content::class);
    }

}