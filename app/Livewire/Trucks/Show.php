<?php

namespace App\Livewire\Trucks;

use App\Livewire\Forms\TruckForm;
use App\Models\Truck;
use Livewire\Component;

class Show extends Component
{
    public TruckForm $form;

    public function mount(Truck $truck)
    {
        $this->form->setTruckModel($truck);
    }

    public function render()
    {
        return view('livewire.truck.show', ['truck' => $this->form->truckModel]);
    }
}
