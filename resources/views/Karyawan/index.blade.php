<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <form action="">

        <div class="row g-3 mb-3">

            <div class="col-md-4">
                <input type="text" class="form-control" id="keyword" name="keyword"
                    placeholder="Search karyawan name ..." value="{{ request('keyword') }}">
            </div>

            <div class="col-md-4">

                <select class="form-select" id="departemen_id" name="departemen_id">

                    <option value="">All Departemen</option>

                    @foreach ($departemens as $departemen)
                        <option value="{{ $departemen->id }}"
                            {{ request('departemen_id') == $departemen->id ? 'selected' : '' }}>
                            {{ $departemen->nama_departemen }}
                        </option>
                    @endforeach

                </select>

            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-success">Search</button>
            </div>

            <div class="col-md-4">
                <button type="submit" class="btn btn-success">Search</button>
            </div>

        </div>

    </form>

    <table class="table table-bordered border-primary">

        <thead class="table-primary">

            <tr>
                <th>No</th>
                <th>Nama Karyawan</th>
                <th>Jabatan</th>
                <th>Departemen</th>
                <th>No HP</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>

        </thead>

        <tbody>

            @forelse ($karyawans as $karyawan)
                <tr>
                    <td>{{ $karyawans->firstItem() + $loop->index }}</td>
                    <td>{{ $karyawan->nama_karyawan }}</td>
                    <td>{{ $karyawan->jabatan }}</td>
                    <td>{{ $karyawan->departemen->nama_departemen }}</td>
                    <td>{{ $karyawan->no_hp }}</td>
                    <td>{{ $karyawan->alamat }}</td>
                    <td style="white-space: nowrap;">
                        <a class="btn btn-info btn-sm" href="{{ route('karyawan.show', $karyawan) }}"
                            role="button">Detail</a>
                        <a class="btn btn-warning btn-sm" href="{{ route('karyawan.edit', $karyawan) }}"
                            role="button">edit</a>
                        <form action="{{ route('karyawan.destroy', $karyawan) }}" method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Anda yakin?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">Data Karyawan Tidak Ditemukan</td>
                </tr>
            @endforelse

        </tbody>

    </table>


    {{ $karyawans->links() }}

</x-app>
