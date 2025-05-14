<main class="main-content">
    <div class="container-fluid py-4">
      
      <div class="row">
        <div class="col-12">
          <div class="card mb-4 mx-4">
            <div class="card-header pb-0">
              <div class="d-flex flex-row justify-content-between">
                  <div>
                      <h6 class="mb-0">List Client</h6>
                  </div>
                  <a wire:navigate href="{{ route('clients.create') }}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; New Client</a>
              </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Client</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nomor Telpon</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Alamat</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Keterangan</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($clients as $client)
                    <tr wire:key="{{ $client->id }}">
                      <td class="text-center">
                        <p class="text-xs font-weight-bold mb-0">{{ ++$i }}</p>
                      </td>
                      <td class="text-center">
                        <p class="text-sm font-weight-bold mb-0">{{ $client->name }}</p>
                      </td>
                      <td class="text-center">
                        <p class="text-sm font-weight-bold mb-0">{{ $client->no_telp }}</p>
                      </td>
                      <td class="text-center">
                        <p class="text-sm font-weight-bold mb-0">{{ $client->alamat }}</p>
                      </td>
                      <td class="text-center">
                        <p class="text-sm font-weight-bold mb-0">{{ $client->note }}</p>
                      </td>
                      <td class="align-middle">
                        <a wire:navigate href="{{ route('clients.edit', $client->id) }}" class="mx-3" data-bs-toggle="tooltip"
                            data-bs-original-title="Edit Client">
                            <i class="fas fa-user-edit text-secondary"></i>
                        </a>
                        <button
                            class="text-red-600 font-bold hover:text-red-900"
                            type="button"
                            wire:click="delete({{ $client->id }})"
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
                    {!! $clients->withQueryString()->links() !!}
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
</main>