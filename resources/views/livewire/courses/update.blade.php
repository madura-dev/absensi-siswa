<div class="container-xl" >
    <div class="row row-cards">
      <div class="col-md-6">
        <div class="card">
              <div class="card-header">
                <i class="ti ti-book"></i>
                    <strong>
                        Edit Data Mata Pelajaran
                    </strong>
              </div>
<div class="card-body">
<form wire:submit.prevent="update">
    <input type="hidden" wire:model="courses_id">
    <div class="form-group mb-3">
        <label>Kode Pelajaran</label>
        <input type="text" wire:model="courses_code" class="form-control @error('courses_code') is-invalid @enderror" rows="4" placeholder="Masukkan kode pelajaran">
        @error('courses_code')
            <span class="invalid-feedback">
                    {{ $message }}
             </span>
        @enderror
    </div>
    <div class="form-group mb-3">
        <label>Mata Pealajaran</label>
        <input wire:model="courses_name" class="form-control @error('courses_name') is-invalid @enderror" rows="4" placeholder="masukkan mata pelajaran"></input>
        @error('courses_name')
             <span class="invalid-feedback">
                     {{ $message }}
              </span>
         @enderror
    </div>

    <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary">UPDATE</button>
        <a href="/mapel" class="btn btn-danger">Cancel</a>
    </div>
</form>
</div>
        </div>
      </div>
    </div>
</div>
