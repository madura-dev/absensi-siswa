<div class="container-xl" >
    <div class="row row-cards">
      <div class="col-md-6">
        <div class="card">
              <div class="card-header">
                <i class="ti ti-book"></i>
                    <strong>
                        Tambah Data Mata Pelajaran
                    </strong>
              </div>
<div class="card-body">
<form>
	<div class="form-group">
		<label for="categoryName">Kode Mata Pelajaran:</label>
        <input type="text" class="form-control" name="courses_code" wire:model="courses_code">

	</div>

	<div class="form-group">
		<label for="categoryDescription">Nama Mata Pelajaran:</label>
        <input type="text" class="form-control" name="courses_name" wire:model="courses_name">
	</div>
<br>
	<button wire:click.prevent="store()" class="btn btn-success btn-block" >Save</button>
</div>
</form>
</div>
        </div>
      </div>
    </div>
</div>
