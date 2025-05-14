<main class="main-content">
    <div class="container-fluid py-4">

      <div class="row">
        <div class="col-12">
          <div class="card mb-4 mx-4">
            <div class="card-header pb-0">
              <div class="d-flex flex-row justify-content-between">
                  <div>
                      <h6 class="mb-0">List Driver</h6>
                  </div>
                  <a wire:navigate href="{{ route('drivers.create') }}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; New Driver</a>
              </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                      <th scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nik</th>
                      <th scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                      <th scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Note</th>
                      <th scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($drivers as $driver)
                    <tr class="even:bg-gray-50" wire:key="{{ $driver->id }}">
                      <td class="text-center">{{ ++$i }}</td>
                      <td class="text-center">{{ $driver->nik }}</td>
                      <td class="text-center">{{ $driver->nama }}</td>
                      <td class="text-center">{{ $driver->note }}</td>
                      <td class="text-center">
                        <a wire:navigate href="{{ route('drivers.show', $driver->id) }}" class="mx-3" data-bs-toggle="tooltip"
                            data-bs-original-title="Show Driver">
                            <i class="fas fa-eye text-secondary"></i>
                        </a>
                        <a wire:navigate href="{{ route('drivers.edit', $driver->id) }}" class="mx-3" data-bs-toggle="tooltip"
                            data-bs-original-title="Edit Driver">
                            <i class="fas fa-user-edit text-secondary"></i>
                        </a>
                        <button
                            class="text-red-600 font-bold hover:text-red-900"
                            type="button"
                            wire:click="delete({{ $driver->id }})"
                            wire:confirm="Are you sure you want to delete?"
                        >
                            <i class="cursor-pointer fas fa-trash text-secondary"></i>
                        </button>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                
                <div class="mt-4 px-4">
                    {!! $drivers->withQueryString()->links() !!}
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
</main>