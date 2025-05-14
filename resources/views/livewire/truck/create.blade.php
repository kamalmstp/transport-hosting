<main class="main-content">
  <div class="container-fluid py-4">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create') }} Truck
        </h2>
    </x-slot>
    
    <div class="card">
      <div class="card-header pb-0 px-3">
        <div class="d-flex flex-row justify-content-between">
            <div>
                <h6 class="mb-0">Tambah Truck</h6>
            </div>
            <a wire:navigate href="{{ route('trucks.index') }}" class="btn bg-gradient-secondary btn-sm mb-0" type="button">&nbsp; Kembali</a>
        </div>
      </div>
      <div class="card-body pt-4 p-3">
        <form wire:submit="save" method="POST" role="form text-left"  enctype="multipart/form-data">
          @csrf
          @include('livewire.truck.form')
        </form>
      </div>
    </div>

  </div>
</main>