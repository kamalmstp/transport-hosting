
<div class="row">
  <div class="col-md-6">
      <div class="form-group">
          <label for="nopol" class="form-control-label">Nomor Polisi</label>
          <div class="@error('nopol')border border-danger rounded-3 @enderror">
              <input wire:model="form.nopol" class="form-control" type="text" placeholder="Nomor Polisi"
                  id="nopol">
          </div>
          @error('form.nopol') <div class="text-danger">{{ $message }}</div> @enderror
      </div>
      
      <div class="form-group">
          <label for="merk" class="form-control-label">Merk</label>
          <div class="@error('merk')border border-danger rounded-3 @enderror">
              <input wire:model="form.merk" class="form-control" type="text" placeholder="Merk"
                  id="merk">
          </div>
          @error('form.merk') <div class="text-danger">{{ $message }}</div> @enderror
      </div>
      
      <div class="form-group">
          <label for="status" class="form-control-label">Pemilik</label>
          <div class="@error('status')border border-danger rounded-3 @enderror">
              <input wire:model="form.status" class="form-control" type="text" placeholder="Status"
                  id="status">
          </div>
          @error('form.status') <div class="text-danger">{{ $message }}</div> @enderror
      </div>
      
      <div class="form-group">
          <label for="pemilik" class="form-control-label">Pemilik</label>
          <div class="@error('pemilik')border border-danger rounded-3 @enderror">
              <input wire:model="form.pemilik" class="form-control" type="text" placeholder="Pemilik"
                  id="pemilik">
          </div>
          @error('form.pemilik') <div class="text-danger">{{ $message }}</div> @enderror
      </div>
      
  </div>
</div>
<div class="d-flex justify-content-end">
  <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Simpan' }}</button>
</div>

