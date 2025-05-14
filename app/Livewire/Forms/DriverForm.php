<?php

namespace App\Livewire\Forms;

use App\Models\Driver;
use Livewire\Form;

class DriverForm extends Form
{
    public ?Driver $driverModel;
    
    public $nik = '';
    public $nama = '';
    public $note = '';

    public function rules(): array
    {
        return [
			'nik' => 'required|string',
			'nama' => 'required|string',
			'note' => 'required|string',
        ];
    }

    public function setDriverModel(Driver $driverModel): void
    {
        $this->driverModel = $driverModel;
        
        $this->nik = $this->driverModel->nik;
        $this->nama = $this->driverModel->nama;
        $this->note = $this->driverModel->note;
    }

    public function store(): void
    {
        $this->driverModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->driverModel->update($this->validate());

        $this->reset();
    }
}
