<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Truck
 *
 * @property $id
 * @property $nopol
 * @property $merk
 * @property $status
 * @property $pemilik
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Truck extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nopol', 'merk', 'status', 'pemilik'];


}
