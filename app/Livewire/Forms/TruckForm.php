<?php

namespace App\Livewire\Forms;

use App\Models\Truck;
use Livewire\Form;

class TruckForm extends Form
{
    public ?Truck $truckModel;
    
    public $nopol = '';
    public $merk = '';
    public $status = '';
    public $pemilik = '';

    public function rules(): array
    {
        return [
			'nopol' => 'required|string',
			'merk' => 'required|string',
			'status' => 'required|string',
			'pemilik' => 'required|string',
        ];
    }

    public function setTruckModel(Truck $truckModel): void
    {
        $this->truckModel = $truckModel;
        
        $this->nopol = $this->truckModel->nopol;
        $this->merk = $this->truckModel->merk;
        $this->status = $this->truckModel->status;
        $this->pemilik = $this->truckModel->pemilik;
    }

    public function store(): void
    {
        $this->truckModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->truckModel->update($this->validate());

        $this->reset();
    }
}
