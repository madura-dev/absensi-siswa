<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="card shadow-sm border-light-subtle rounded">
        <div class="row">
            <div class="col-md-5 border-end border-light-subtle">
                <div class="card-body">
                    <form wire:submit.prevent="simpan">
                        <div class="card-title">
                            <i class="ti ti-user"></i>
                            Biodata Guru
                        </div>
                        <div class="form-group mb-3">
                            <x-form-input name="name" placeholder="Masukan Nama Lengkap" label="Nama Lengkap"/>
                        </div>
                        <div class="form-group mb-3">
                            <x-form-select name="gender" label="Jenis Kelamin" wire:model="gender">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </x-form-select>
                        </div>
                        <div class="form-group mb-3">
                            <x-form-input name="birthplace" placeholder="Masukan Tempat Lahir" label="Tempat Lahir"/>
                        </div>
                        <div class="form-group mb-3">
                            <x-form-input name="birthday" placeholder="Masukan Tempat Lahir" type="date" label="Tanggal Lahir"/>
                        </div>
                        <div class="form-group mb-3">
                            <x-form-select name="last_education" label="Pendidikan Terakhir" wire:model="last_education">
                                <option value="">Pendidikan Terakhir</option>
                                <option value="SD">SD</option>
                                <option value="SMA">SLTA</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </x-form-select>
                        </div>
                        <div class="form-group mb-3">
                            <x-form-input name="phone_number" placeholder="Masukan Telepon" label="Telepon"/>
                        </div>
                        <div class="card-title">
                            <i class="ti ti-lock-access"></i>
                            Account
                        </div>
                        <div class="form-group mb-3">
                            <x-form-input name="email" placeholder="Masukan Email" label="Email" required/>
                        </div>
                        <div class="form-group mb-3">
                            <x-form-input name="password" placeholder="Masukan Password" value="Bismillah" label="Password" readonly required/>
                        </div>
                        <div class="form-group mb-3 text-end">
                            <button class="btn btn-primary">
                                <i class="ti ti-device-floppy me-1"></i>
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col bg-light-subtle">
                <div class="card-body p-5">
                    <img src="{{asset('static/illustrations/teacher-illustration.svg')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
