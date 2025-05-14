<?php

namespace App\Livewire\Forms;

use App\Models\Order;
use Livewire\Form;

class OrderForm extends Form
{
    public ?Order $orderModel;
    
    public $no_order = '';
    public $client_id = null;
    public $type = '';
    public $date_order = '';
    public $no_container = '';
    public $no_kapal = '';
    public $no_gudang = '';
    public $loading = '';
    public $destination = '';
    public $qty = null;
    public $qty_bag = null;
    public $price = null;
    public $status = '';
    public $keterangan = '';

    public function rules(): array
    {
        return [
          'no_order' => 'string|nullable',
    			'client_id' => 'numeric|nullable',
    			'date_order' => 'date|nullable',
    			'no_container' => 'string|nullable',
    			'no_kapal' => 'string|nullable',
    			'no_gudang' => 'string|nullable',
    			'qty' => 'numeric|nullable',
    			'qty_bag' => 'numeric|nullable',
    			'loading' => 'string|nullable',
    			'destination' => 'string|nullable',
        ];
    }

    public function setOrderModel(Order $orderModel): void
    {
        $this->orderModel = $orderModel;
        
        $this->no_order = $this->orderModel->no_order;
        $this->client_id = (int) $this->orderModel->client_id;
        $this->type = $this->orderModel->type;
        $this->date_order = $this->orderModel->date_order;
        $this->no_container = $this->orderModel->no_container;
        $this->no_kapal = $this->orderModel->no_kapal;
        $this->no_gudang = $this->orderModel->no_gudang;
        $this->loading = $this->orderModel->loading;
        $this->destination = $this->orderModel->destination;
        $this->qty = (int) $this->orderModel->qty;
        $this->qty_bag = (int) $this->orderModel->qty_bag;
        $this->price = $this->orderModel->price;
        $this->status = $this->orderModel->status;
        $this->keterangan = $this->orderModel->keterangan;
    }

    public function store(): void
    {
        
        $this->orderModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->orderModel->update($this->validate());

        $this->reset();
    }
}
