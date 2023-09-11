<div>
    <div class="card rounded shadow-sm border-light-subtle">
        <div class="card-header border-light-subtle">
            <h3 class="card-title">Data Guru</h3>
        </div>
        <div class="card-body border-bottom py-3">
            <div class="d-flex">
                <div class="text-secondary ms-auto">
                    Search:
                    <div class="d-inline-block ms-2">
                        <input type="text" class="form-control" aria-label="Search invoice"
                               wire:model="search" placeholder="Masukkan nama...">
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
                            <a href="" class="btn btn-warning btn-sm w-50 btn-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit"
                                     width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                     stroke="currentColor" fill="none" stroke-linecap="round"
                                     stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                    <path
                                        d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                    </path>
                                    <path d="M16 5l3 3"></path>
                                </svg>
                            </a>
                            <a href="" class="btn btn-danger btn-sm w-50 btn-icon">
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

