<form>
    <input type="hidden" wire:model="major_id">
    <div class="form-group mb-3">
        <label for="major_code">Kode Jurusan</label>
        <input type="text" class="form-control id="major_code" wire:model="major_code">
    </div>
    <div class="form-group mb-3">
        <label for="major_name">Nama Jurusan</label>
        <input type="text" class="form-control id="major_name" wire:model="major_name">
    </div>
    <div class="form-group mb-3">
        <label for="major_alias">Nama Kode</label>
        <input type="text" class="form-control id="major_alias" wire:model="major_alias">
    </div>
    <div class="d-grid gap-2">
        <button wire:click.prevent="update()" class="btn btn-success btn-block">Save</button>
        <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
    </div>
</form>
