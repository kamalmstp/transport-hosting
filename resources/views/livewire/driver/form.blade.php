
<div class="row">
  <div class="col-md-6">
      <div class="form-group">
          <label for="nik" class="form-control-label">NIK</label>
          <input wire:model="form.nik" class="form-control" type="text" placeholder="NIK"
                  id="nik">
          @error('form.nik')
            <div class="text-danger">{{ $message }}</div> 
          @enderror
      </div>
      
      <div class="form-group">
          <label for="nama" class="form-control-label">Nama</label>
          <input wire:model="form.nama" class="form-control" type="text" placeholder="Nama"
                  id="nama">
          @error('form.nama')
            <div class="text-danger">{{ $message }}</div> 
          @enderror
      </div>
      
      <div class="form-group">
          <label for="note" class="form-control-label">Note</label>
          <input wire:model="form.note" class="form-control" type="text" placeholder="Note"
                  id="note">
          @error('form.note')
            <div class="text-danger">{{ $message }}</div> 
          @enderror
      </div>
      
  </div>
</div>
<div class="d-flex justify-content-end">
  <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Simpan' }}</button>
</div>