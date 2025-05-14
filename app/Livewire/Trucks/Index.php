<?php

namespace App\Livewire\Trucks;

use App\Models\Truck;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render(): View
    {
        $trucks = Truck::paginate();

        return view('livewire.truck.index', compact('trucks'))
            ->with('i', $this->getPage() * $trucks->perPage());
    }

    public function delete(Truck $truck)
    {
        $truck->delete();

        return $this->redirectRoute('trucks.index', navigate: true);
    }
}
