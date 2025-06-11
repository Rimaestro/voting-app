<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kandidat extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'kandidat';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_kandidat',
        'no_urut',
        'visi',
        'misi',
        'foto',
    ];

    /**
     * Get the suara for the kandidat.
     */
    public function suara(): HasMany
    {
        return $this->hasMany(Suara::class);
    }
}
