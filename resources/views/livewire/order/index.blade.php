<main class="main-content">
    <div class="container-fluid py-4">
      
      <div class="row">
        <div class="col-12">
          <div class="card mb-4 mx-4">
            <div class="card-header pb-0">
              <div class="d-flex flex-row justify-content-between">
                  <div>
                      <h6 class="mb-0">List Order</h6>
                  </div>
                  <a wire:navigate href="{{ route('orders.create') }}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; New Order</a>
              </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Client</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No Order</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($orders as $order)
                    <tr wire:key="{{ $order->id }}">
                      <td class="align-middle text-center">
                        <p class="text-xs font-weight-bold mb-0">{{ ++$i }}</p>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            @foreach (\App\Models\Client::where('id', '=', $order->client_id)->get() as $row)
                            <h6 class="mb-0 text-xs">{{ $row->name }}</h6>
                            @endforeach
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $order->no_order }}</p>
                        <p class="text-xs text-secondary mb-0">{{ $order->date_order }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $order->qty }} &nbsp; Kg</p>
                        <p class="text-xs text-secondary mb-0">{{ $order->qty_bag }} &nbsp; Bag</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm badge-success">{{ $order->status }}</span>
                      </td>
                      <td class="align-middle">
                        <a wire:navigate href="{{ route('orders.show', $order->id) }}" class="mx-3" data-bs-toggle="tooltip"
                            data-bs-original-title="Show Order">
                            <i class="fas fa-eye text-secondary"></i>
                        </a>
                        <a wire:navigate href="{{ route('orders.edit', $order->id) }}" class="mx-3" data-bs-toggle="tooltip"
                            data-bs-original-title="Edit trucks">
                            <i class="fas fa-user-edit text-secondary"></i>
                        </a>
                        <button
                            class="text-red-600 font-bold hover:text-red-900"
                            type="button"
                            wire:click="delete({{ $order->id }})"
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
                    {!! $orders->withQueryString()->links() !!}
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
</main>