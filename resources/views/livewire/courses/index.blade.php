<div>
    <div class="card border-light-subtle rounded shadow-sm">
        <div class="card-header border-light-subtle">
            <h3 class="card-title">Data Mata Pelajaran</h3>
        </div>
        <div class="card-body border-bottom py-3">
            <div>
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        @if (session()->has('error'))
            <div class="alert alert-danger" role="alert">
                {{ session()->get('error') }}
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
                                <th>Kode Mata Pelajaran</th>
                                <th>Nama Mata Pelajaran</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($courses) > 0)
                            @foreach ($courses as $Course)
                                <tr>
                                    <td>
                                        {{ $Course->courses_code }}
                                    </td>
                                    <td>
                                        {{ $Course->courses_name }}
                                    </td>

                                    <td>
                                        <a href="{{ route('courses.edit', $Course->id) }}"
                                            class="btn btn-primary btn-sm">Edit</a>
                                        <button onclick="deleteCourse({{ $Course->id }})"
                                            class="btn btn-danger btn-sm">Delete</button>
                                    </td>

                                </tr>

                            @endforeach
                            @else
                            <tr>
                                <td colspan="3" align="center">
                                    No Major Found.
                                </td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
                <div class="card-footer d-flex align-items-center">
                    <p class="text-secondary m-0">Showing <span>{{ $courses->firstItem() }}</span> to <span>
                            {{ $courses->lastItem() }} </span> of <span>{{ $courses->total() }}</span> entries</p>
                    <ul class="pagination m-0 ms-auto">
                        {{ $courses->links() }}
                    </ul>
                </div>
                <div class="card-footer d-flex align-items-center">

                </div>
            </div>
        </div>
    </div>
</div>
<script>
 function deleteCourse(id) {
        if (confirm("Are you sure to delete this record?"))
            window.livewire.emit('deleteCourse', id);
    }
</script>
