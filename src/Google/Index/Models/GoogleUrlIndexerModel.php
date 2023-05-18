<?php

namespace DescomMarket\Feeds\Google\Index\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class GoogleUrlIndexerModel extends Model
{
    protected $table = 'google_url_indexer';

    protected $casts = [
        'priority' => 'int',
    ];

    protected $fillable = [
        'url',
        'action',
        'priority',
    ];

    public function indexable(): MorphTo
    {
        return $this->morphTo();
    }
}
