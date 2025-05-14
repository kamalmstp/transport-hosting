<?php

namespace App\Livewire\Trucks;

use App\Livewire\Forms\TruckForm;
use App\Models\Truck;
use Livewire\Component;

class Edit extends Component
{
    public TruckForm $form;

    public function mount(Truck $truck)
    {
        $this->form->setTruckModel($truck);
    }

    public function save()
    {
        $this->form->update();

        return $this->redirectRoute('trucks.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.truck.edit');
    }
}
