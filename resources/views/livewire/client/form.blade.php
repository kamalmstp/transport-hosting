
<div class="row">
  <div class="col-md-6">
      <div class="form-group">
          <label for="name" class="form-control-label">Nama Client</label>
          <div class="@error('name')border border-danger rounded-3 @enderror">
              <input wire:model="form.name" class="form-control" type="text" placeholder="Nama Client"
                  id="name">
          </div>
          @error('form.name') <div class="text-danger">{{ $message }}</div> @enderror
      </div>
      
      <div class="form-group">
          <label for="no_telp" class="form-control-label">Nomor Telpon</label>
          <div class="@error('no_telp')border border-danger rounded-3 @enderror">
              <input wire:model="form.no_telp" class="form-control" type="text" placeholder="Nomor Telpon"
                  id="no_telp">
          </div>
          @error('form.no_telp') <div class="text-danger">{{ $message }}</div> @enderror
      </div>
      
      <div class="form-group">
          <label for="alamat" class="form-control-label">Alamat</label>
          <div class="@error('alamat')border border-danger rounded-3 @enderror">
              <input wire:model="form.alamat" class="form-control" type="text" placeholder="Alamat"
                  id="alamat">
          </div>
          @error('form.alamat') <div class="text-danger">{{ $message }}</div> @enderror
      </div>
      
      <div class="form-group">
          <label for="note" class="form-control-label">Keterangan</label>
          <div class="@error('note')border border-danger rounded-3 @enderror">
              <input wire:model="form.note" class="form-control" type="text" placeholder="Keterangan"
                  id="note">
          </div>
          @error('form.note') <div class="text-danger">{{ $message }}</div> @enderror
      </div>
      
  </div>
</div>
<div class="d-flex justify-content-end">
  <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Simpan' }}</button>
</div>

