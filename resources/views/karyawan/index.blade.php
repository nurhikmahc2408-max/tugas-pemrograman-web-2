<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <form action="{{ route('karyawan.index') }}" method="GET" class="mb-3">

        <div class="row">
            <a class="btn btn-primary mb-3" href="{{ route('karyawan.create') }}" role="button">Create</a>
            <div class="col-md-10">
                <input type="text" name="search" class="form-control" placeholder="Cari Karyawan..."
                    value="{{ request('search') }}">
            </div>

            <div class="col-md-2">
                <button class="btn btn-primary w-100">Search</button>
            </div>

        </div>

    </form>

    <table class="table table-bordered border-primary">

        <thead class="table-primary">

            <tr>
                <th>No</th>
                <th>Nama Karyawan</th>
                <th>Jabatan</th>
                <th>Alamat</th>
                <th>No HP</th>
            </tr>

        </thead>

        <tbody>

            @forelse ($karyawans as $item)
                <tr>

                    <td>{{ $karyawans->firstItem() + $loop->index }}</td>
                    <td>{{ $item->nama_karyawan }}</td>
                    <td>{{ $item->jabatan }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->no_hp }}</td>

                </tr>
                <td style="white-space: nowrap;">
                    <a class="btn btn-warning btn-sm" href="{{ route('karyawan.edit', $item) }}"role="button">Edit</a>

                </td>
            @empty
                <tr>
                    <td colspan="5" class="text-center">
                        Data Karyawan Tidak Ditemukan
                    </td>
                </tr>
            @endforelse

        </tbody>

    </table>

    {{ $karyawans->links() }}

</x-app>
