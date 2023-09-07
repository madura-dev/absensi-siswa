<form>
    <div class="form-group mb-12">
        <label for="categoryName">Kode Jurusan:</label>
        <input type="text" class="form-control" id="major_code" wire:model="major_code">

    </div>
    <div class="form-group mb-12">
        <label for="categoryDescription">Nama Jurusan:</label>
        <input type="text" class="form-control" id="major_name" wire:model="major_name">

    </div>
    <div class="form-group mb-12">
        <label for="categoryDescription">Nama Kode:</label>
        <input type="text" class="form-control" id="major_alias" wire:model="major_alias">

    </div>
    <div class="d-grid gap-2">
        <button wire:click.prevent="store()" class="btn btn-success btn-block">Save</button>
    </div>
</form>
