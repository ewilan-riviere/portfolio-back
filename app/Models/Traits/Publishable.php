<?php

namespace App\Models\Traits;

use Carbon\Carbon;
use App\Models\Website\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * Trait Publishable.
 *
 * @property string $status
 * @property Carbon $publication_date
 * @property bool   $is_draft
 * @property bool   $is_published
 *
 * @method static \Illuminate\Database\Eloquent\Builder withInactive()
 * @method static \Illuminate\Database\Eloquent\Builder|Post published()
 * @method static \Illuminate\Database\Eloquent\Builder|Post scheduled()
 * @method static \Illuminate\Database\Eloquent\Builder|Post draft()
 * @mixin Model
 */
trait Publishable
{
    /**
     * Boot the scope.
     */
    public static function bootPublishable()
    {
        static::saving(function (Model $model) {
            /** @var Publishable $model */
            // Brouillon par defaut
            if (null === $model->status) {
                $model->status = 'draft';
            }

            if ($model->is_draft) {
                return;
            }

            // S'assurer du bon état par rapport à la date de publication
            $now = Carbon::now();

            // Sinon publié
            $model->status = 'published';

            if (! $model->created_at) {
                // Mettre la date du jour de publication si aucune date indiquée
                $model->created_at = $now;
            }
        });
    }

    public function getIsDraftAttribute()
    {
        return 'draft' === $this->status;
    }

    public function getIsPublishedAttribute()
    {
        return 'published' === $this->status;
    }

    public function scopeDraft(Builder $builder)
    {
        return $builder->where('status', 'draft');
    }

    public function scopePublished(Builder $builder)
    {
        return $builder->where('status', 'published');
    }
}
