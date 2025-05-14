<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cost_category extends Model
{
    //
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name'];
}
