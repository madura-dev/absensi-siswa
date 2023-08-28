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
                                    <td>
                                        <button class="btn btn-primary btn-sm">Edit</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
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
