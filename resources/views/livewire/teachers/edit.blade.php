<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="container-xl" style="box-align: center">
        <div class="row row-cards">

            <div class="col-md-6">
                <div class="card">
                      <div class="card-header">
                        <i class="ti ti-user"></i>
                        <strong>
                            Biodata Guru
                        </strong>
                      </div>
                      <div class="card-body">
                    <form wire:submit.prevent="update">
                        <input type="hidden" wire:model="id_teacher_old" name="id_teacher_old">
                        <div class="mb-3">
                            <label class="form-label">Nomor Induk Guru</label>
                            <div>
                                <x-form-input name="teacher_id" type="number" wire:model="teacher_id" placeholder="Masukan Nomor Induk Guru"/>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">Nama Lengkap</label>
                            <div>
                                <x-form-input name="name" wire:model="name" placeholder="Masukan Nama Lengkap"/>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">Jenis Kelamin</label>
                            <div>
                                <x-form-select name="gender" wire:model="gender">
                                    <option value="Laki-laki">Pilih Jenis Kelamin</option>
                                    <option value="Laki-laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </x-form-select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">Tempat Lahir</label>
                            <div>
                                <x-form-input name="birthplace" wire:model="birthplace" placeholder="Masukan Tempat Lahir"/>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">Tanggal Lahir</label>
                            <div>
                                <x-form-input name="birthday" wire:model="birthday" placeholder="Masukan Tempat Lahir" type="date"/>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">Alamat</label>
                            <div>
                                <textarea class="form-control" wire:model="address" rows="5" name="address"></textarea>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">Pendidikan Terakhir</label>
                            <div>
                                <x-form-select name="last_education" wire:model="last_education">
                                    <option value="SD">Pilih Pendidikan Terakhir</option>
                                    <option value="SD">SD</option>
                                    <option value="SMA">SLTA</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </x-form-select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">Nomer Telepon</label>
                            <div>
                                <x-form-input name="phone_number" wire:model="phone_number" placeholder="Masukan Telepon"/>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">Jabatan</label>
                            <div>
                                <x-form-select name="position" wire:model="position">
                                    <option value="guru_honorer">Pilih Jabatan</option>
                                    <option value="guru_honorer">Guru Honorer</option>
                                </x-form-select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">Nominal Gaji</label>
                            <div>
                                <x-form-input name="nominal_salary" wire:model="nominal_salary" placeholder="Masukan Telepon"/>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

        <div class="col-md-6">
            <div class="card">
                <form class="card">
                  <div class="card-header">
                    <i class="ti ti-lock-access"></i>
                        <strong>Akun Guru</strong>
                  </div>
                  <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label required">Email</label>
                        <div>
                            <x-form-input name="email" wire:model="email" placeholder="Masukan Email"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label required">Password</label>
                        <div>
                            <x-form-input type="password" wire:model="password" name="password" placeholder="Masukan Password"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                        @if ($image)
                          <div class="col-auto">
                            <span class="avatar avatar-xl" style="background-image: url({{ $image->temporaryUrl()}})">
                            </div>
                          @else
                          <div class="col-auto">
                            <span class="avatar avatar-xl" style="background-image: url(/uploads/images/{{ $image_old }})">
                            </div>
                          @endif
                          <div class="col">
                            <div class="mb-3">
                              <label class="form-label">Foto Profile</label>
                              <x-form-input type="file" wire:model="image" name="image" placeholder="Masukan Gambar pofile"/>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-primary" type="submit">
                        <i class="ti ti-device-floppy me-1"></i>
                        Simpan
                    </button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
