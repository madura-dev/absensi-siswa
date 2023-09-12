<div>
    <div class="card border-light-subtle rounded shadow-sm">
        <div class="card-header border-light-subtle">
            <h3 class="card-title">Data Guru</h3>
        </div>
        <div class="card-body border-bottom py-3">
            <div>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
            <div class="d-flex">
                <div class="text-secondary ms-auto">
                    Search:
                    <div class="d-inline-block ms-2">
                        <input type="text" class="form-control" aria-label="Search teachers" wire:model="search"
                            placeholder="Masukkan nama...">
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="card-table table-vcenter text-nowrap datatable table">
                <thead>
                    <tr>
                        <th class="w-1">No.</th>
                        <th>Nomer Induk Guru</th>
                        <th>Nama Guru</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Pendidikan terakhir</th>
                        <th>Nomer Telepon</th>
                        <th>Jabatan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teachers as $teacher)
                        <tr>
                            <td>{{ ($teachers->currentPage() - 1) * $teachers->perPage() + $loop->index + 1 }}</td>
                            <td>{{ $teacher->teacher_id }}</td>
                            <td>{{ $teacher->name }}</td>
                            <td>{{ $teacher->gender }}</td>
                            <td>{{ $teacher->birthplace }}, {{ dateFormat($teacher->birthday) }}</td>
                            <td>{{ $teacher->address }}</td>
                            <td>{{ $teacher->last_education }}</td>
                            <td>{{ $teacher->phone_number }}</td>
                            <td>{{ $teacher->position }}</td>
                            <td>
                                <a href="/guru/{{ $teacher->id }}/edit"
                                    class="btn btn-warning btn-sm w-50 btn-icon">
                                    <i class="ti ti-edit"></i>
                                </a>
                                <a onclick="deleteTeacher({{ $teacher->id }})"
                                    class="btn btn-danger btn-sm w-50 btn-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 7l16 0"></path>
                                        <path d="M10 11l0 6"></path>
                                        <path d="M14 11l0 6"></path>
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer d-flex align-items-center">
            <p class="text-secondary m-0">Showing <span>{{ $teachers->firstItem() }}</span> to <span>
                    {{ $teachers->lastItem() }} </span> of <span>{{ $teachers->total() }}</span> entries</p>
            <ul class="pagination m-0 ms-auto">
                {{ $teachers->links() }}
            </ul>
        </div>
    </div>
</div>
<script>
    function deleteTeacher(id) {
        if (confirm("Are you sure to delete this record?"))
            window.livewire.emit('deleteTeacher', id);
    }
</script>

