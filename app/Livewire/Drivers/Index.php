<?php

namespace App\Livewire\Drivers;

use App\Models\Driver;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render(): View
    {
        $drivers = Driver::paginate();

        return view('livewire.driver.index', compact('drivers'))
            ->with('i', $this->getPage() * $drivers->perPage());
    }

    public function delete(Driver $driver)
    {
        $driver->delete();

        return $this->redirectRoute('drivers.index', navigate: true);
    }
}
