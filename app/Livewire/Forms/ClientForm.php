<?php

namespace App\Livewire\Forms;

use App\Models\Client;
use Livewire\Form;

class ClientForm extends Form
{
    public ?Client $clientModel;
    
    public $name = '';
    public $no_telp = '';
    public $alamat = '';
    public $note = '';

    public function rules(): array
    {
        return [
			'name' => 'string',
			'no_telp' => 'string',
			'alamat' => 'string',
			'note' => 'string',
        ];
    }

    public function setClientModel(Client $clientModel): void
    {
        $this->clientModel = $clientModel;
        
        $this->name = $this->clientModel->name;
        $this->no_telp = $this->clientModel->no_telp;
        $this->alamat = $this->clientModel->alamat;
        $this->note = $this->clientModel->note;
    }

    public function store(): void
    {
        $this->clientModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->clientModel->update($this->validate());

        $this->reset();
    }
}
