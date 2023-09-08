<div>
    <div class="col-md-12 mb-2">
        <div class="card">
            <div class="card-body">
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session()->get('error') }}
                    </div>
                @endif
                @if ($updateMajor)
                    @include('livewire.update-major')
                @else
                    @include('livewire.create-major')
                @endif
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">

                        <thead>
                            <tr>
                                <th>Kode Jurusan</th>
                                <th>Nama Jurusan</th>
                                <th>Nama Kode</th>
                                <th>tes</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($major) > 0)
                                @foreach ($major as $Major)
                                    <tr>
                                        <td>
                                            {{ $Major->major_code }}
                                        </td>
                                        <td>
                                            {{ $Major->major_name }}
                                        </td>
                                        <td>
                                            {{ $Major->major_alias }}
                                        </td>
                                        <td>dd{{ $Major->id }}</td>
                                        <td>
                                            <button wire:click="edit({{ $Major->id }})"
                                                class="btn btn-primary btn-sm">Edit</button>
                                            <button onclick="deleteMajor({{ $Major->id }})"
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
            </div>
        </div>
    </div>
</div>
<script>
    function deleteMajor(id) {
        if (confirm("Are you sure to delete this record?"))
            window.livewire.emit('deleteMajor', id);
    }
</script>
