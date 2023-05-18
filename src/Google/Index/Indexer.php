<?php

namespace DescomMarket\Feeds\Google\Index;

use DescomMarket\Feeds\Google\Index\Models\GoogleUrlIndexerModel;
use Illuminate\Database\Eloquent\Model;

final class Indexer
{
    public static function publish(string $url, int $priority = 1, ?Model $indexable = null): void
    {
        $model = GoogleUrlIndexerModel::updateOrCreate([
            'url' => $url,
        ], [
            'action' => 'index',
            'priority' => $priority,
        ]);

        $indexable
            ? $model->indexable()->associate($indexable) :
            $model->indexable()->dissociate();

        $model->save();
    }

    public static function unpublish(string $url, int $priority = 0, ?Model $indexable = null): void
    {
        $model = GoogleUrlIndexerModel::updateOrCreate([
            'url' => $url,
        ], [
            'action' => 'unindex',
            'priority' => $priority,
        ]);

        $indexable
            ? $model->indexable()->associate($indexable) :
            $model->indexable()->dissociate();

        $model->save();
    }
}
