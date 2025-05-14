
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
          <label for="no_order" class="form-control-label">Nomor Order</label>
          <div class="@error('no_order')border border-danger rounded-3 @enderror">
              <input wire:model="form.no_order" class="form-control" type="text" placeholder="Nomor Order"
                  id="no_order">
          </div>
          @error('form.no_order') <div class="text-danger">{{ $message }}</div> @enderror
      </div>
      
      <div class="form-group">
        <label for="client">Client</label>
        <select wire:model="form.client_id" id="client" class="form-control">
          <option value="">- Silahkan Pilih -</option>
          @foreach($clients as $client)
            <option value="{{ $client->id }}">{{ $client->name }}</option>
          @endforeach
        </select>
      </div>
      
      <div class="form-group">
          <label for="date_order" class="form-control-label">Tanggal Order</label>
          <div class="@error('date_order')border border-danger rounded-3 @enderror">
              <input wire:model="form.date_order" class="form-control" type="date" id="date_order">
          </div>
          @error('form.status') <div class="text-danger">{{ $message }}</div> @enderror
      </div>
      
      <div class="form-group">
          <label for="no_container" class="form-control-label">Nomor Container</label>
          <div class="@error('no_container')border border-danger rounded-3 @enderror">
              <input wire:model="form.no_container" class="form-control" type="text" placeholder="No Container"
                  id="no_container">
          </div>
          @error('form.no_container') <div class="text-danger">{{ $message }}</div> @enderror
      </div>
      
      <div class="form-group">
          <label for="no_kapal" class="form-control-label">Nomor Kapal</label>
          <div class="@error('no_kapal')border border-danger rounded-3 @enderror">
              <input wire:model="form.no_kapal" class="form-control" type="text" placeholder="No Kapal"
                  id="no_kapal">
          </div>
          @error('form.no_kapal') <div class="text-danger">{{ $message }}</div> @enderror
      </div>
      
      <div class="form-group">
          <label for="no_gudang" class="form-control-label">Nomor Gudang</label>
          <div class="@error('no_gudang')border border-danger rounded-3 @enderror">
              <input wire:model="form.no_gudang" class="form-control" type="text" placeholder="No Gudang"
                  id="no_gudang">
          </div>
          @error('form.no_gudang') <div class="text-danger">{{ $message }}</div> @enderror
      </div>
      
      <div class="form-group">
          <label for="qty" class="form-control-label">Jumlah</label>
          <div class="@error('qty')border border-danger rounded-3 @enderror">
            <div class="row">
              <div class="col">
                <div class="input-group mb-3">
                  <input wire:model="form.qty" class="form-control" type="number" placeholder="000"
                      id="qty">
                    <span class="input-group-text">Kg</span>
                </div>
                @error('form.qty') <div class="text-danger">{{ $message }}</div> @enderror
              </div>
              <div class="col">
                <div class="input-group mb-3">
                  <input wire:model="form.qty_bag" class="form-control" type="number" placeholder="000"
                      id="qty_bag">
                    <span class="input-group-text">Bag</span>
                </div>
                @error('form.qty_bag') <div class="text-danger">{{ $message }}</div> @enderror
              </div>
            </div>
          </div>
          
      </div>
      
      <div class="form-group">
          <label for="loading" class="form-control-label">Lokasi Loading</label>
          <div class="@error('loading')border border-danger rounded-3 @enderror">
              <input wire:model="form.loading" class="form-control" type="text" placeholder="Loading"
                  id="loading">
          </div>
          @error('form.loading') <div class="text-danger">{{ $message }}</div> @enderror
      </div>
      
      <div class="form-group">
          <label for="destination" class="form-control-label">Lokasi Tujuan</label>
          <div class="@error('destination')border border-danger rounded-3 @enderror">
              <input wire:model="form.destination" class="form-control" type="text" placeholder="Destination"
                  id="destination">
          </div>
          @error('form.destination') <div class="text-danger">{{ $message }}</div> @enderror
      </div>
  
      
      <div class="form-group">
          <label for="keterangan" class="form-control-label">Keterangan</label>
          <div class="@error('keterangan')border border-danger rounded-3 @enderror">
              <textarea wire:model="form.status" class="form-control" id="keterangan" rows="3"></textarea>
          </div>
          @error('form.status') <div class="text-danger">{{ $message }}</div> @enderror
      </div>
      
  </div>
</div>
<div class="d-flex justify-content-end">
  <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Simpan' }}</button>
</div>