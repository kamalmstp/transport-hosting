<?php

namespace App\Livewire\Drivers;

use App\Livewire\Forms\DriverForm;
use App\Models\Driver;
use Livewire\Component;

class Show extends Component
{
    public DriverForm $form;

    public function mount(Driver $driver)
    {
        $this->form->setDriverModel($driver);
    }

    public function render()
    {
        return view('livewire.driver.show', ['driver' => $this->form->driverModel]);
    }
}
