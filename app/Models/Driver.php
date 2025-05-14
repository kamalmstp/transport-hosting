<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Driver
 *
 * @property $id
 * @property $nik
 * @property $nama
 * @property $note
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Driver extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nik', 'nama', 'note'];


}
