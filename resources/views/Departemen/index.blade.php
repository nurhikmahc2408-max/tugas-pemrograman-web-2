<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <form action="{{ route('departemen.index') }}" method="GET" class="mb-3">

        <div class="row">
            <a class="btn btn-primary mb-3" href="{{ route('departemen.create') }}" role="button">Create</a>
            <div class="col-md-10">
                <input type="text" name="search" class="form-control" placeholder="Cari Departemen..."
                    value="{{ request('search') }}">
            </div>
            <form action="{{ route('departemen.destroy', $item) }}" method="POST" class="d-inline">
                @method('DELETE')
                @csrf

                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin?')">
                    Delete
                </button>
            </form>
            <div class="col-md-2">
                <button class="btn btn-primary w-100">Search</button>
            </div>

        </div>

    </form>

    <table class="table table-bordered border-primary">

        <thead class="table-primary">

            <tr>
                <th>No</th>
                <th>Nama Departemen</th>
                <th>Jabatan</th>
                <th>Alamat</th>
                <th>No HP</th>
            </tr>

        </thead>

        <tbody>

            @forelse ($departemens as $item)
                <tr>

                    <td>{{ $departemens->firstItem() + $loop->index }}</td>
                    <td>{{ $item->nama_departemen }}</td>
                    <td>{{ $item->jabatan }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->no_hp }}</td>

                </tr>
                <td style="white-space: nowrap;">
                    <a class="btn btn-info btn-sm" href="{{ route('departemen.show', $item) }}"role="button">Detail</a>
                    <a class="btn btn-warning btn-sm"
                        href="{{ route('departemen.edit', $item) }}"role="button">Edit</a>

                </td>
            @empty
                <tr>
                    <td colspan="5" class="text-center">
                        Data Departemen Tidak Ditemukan
                    </td>
                </tr>
                <td colspan="5" class="text-center">Data Kecamatan Tidak Ditemukan</td>
            @endforelse

        </tbody>

    </table>

    {{ $departemens->links() }}

</x-app>
