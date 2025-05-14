<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 *
 * @property $id
 * @property $no_order
 * @property $type
 * @property $date_order
 * @property $no_container
 * @property $no_kapal
 * @property $no_gudang
 * @property $loading
 * @property $destination
 * @property $qty
 * @property $qty_bag
 * @property $price
 * @property $status
 * @property $keterangan
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Order extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['client_id','no_order', 'type', 'date_order', 'no_container', 'no_kapal', 'no_gudang', 'loading', 'destination', 'qty', 'qty_bag', 'price', 'status', 'keterangan'];


}
