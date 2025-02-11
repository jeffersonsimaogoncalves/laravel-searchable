<?php

namespace HFarm\Searchable\Tests\Models;

use HFarm\Searchable\HasSearch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    use HasSearch;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Get the team users.
     *
     * @return HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    /**
     * Get the team badges.
     *
     * @return HasMany
     */
    public function badges(): HasMany
    {
        return $this->hasMany(Badge::class);
    }

    /**
     * Get the model's searchable attributes.
     *
     * @return array
     */
    public function getSearchableAttributes(): array
    {
        return [
            'name',
        ];
    }
}
