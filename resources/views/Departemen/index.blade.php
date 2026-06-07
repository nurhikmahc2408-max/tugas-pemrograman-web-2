<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <form action="{{ route('Departemen.index') }}" method="GET" class="mb-3">
        <a class="btn btn-primary mb-3" href="{{ route('Departemen.create') }}" role="button">Create</a>
        <div class="row">

            <div class="col-md-10">
                <input type="text" name="search" class="form-control" placeholder="Cari Departemen..."
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
                <th>Nama Departemen</th>
                <th>Kode Departemen</th>
                <th>Lokasi</th>
                <th style="width: 160px;">Aksi</th>
            </tr>

        </thead>

        <tbody>

            @forelse ($departemens as $item)
                <tr>

                    <td>{{ $departemens->firstItem() + $loop->index }}</td>
                    <td>{{ $item->nama_departemen }}</td>
                    <td>{{ $item->kode_departemen }}</td>
                    <td>{{ $item->lokasi }}</td>
                    <td style="white-space: nowrap;">
                        <a class="btn btn-warning btn-sm"
                            href="{{ route('Departemen.edit', $item) }}"role="button">Edit</a>
                </tr>

                </td>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Data Departemen Tidak Ditemukan</td>
                </tr>
            @endforelse

        </tbody>

    </table>

    {{ $departemens->links() }}

</x-app>
