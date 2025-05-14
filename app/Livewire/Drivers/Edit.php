<?php

namespace App\Livewire\Drivers;

use App\Livewire\Forms\DriverForm;
use App\Models\Driver;
use Livewire\Component;

class Edit extends Component
{
    public DriverForm $form;

    public function mount(Driver $driver)
    {
        $this->form->setDriverModel($driver);
    }

    public function save()
    {
        $this->form->update();

        return $this->redirectRoute('drivers.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.driver.edit');
    }
}
