<x-app>
    <x-slot:title>Data Absen</x-slot>

    <a href="{{ route('Absen.create') }}" class="btn btn-primary mb-3">Create</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Karyawan</th>
                <th>Tanggal</th>
                <th>Jam Masuk</th>
                <th>Jam Keluar</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($absens as $index => $absen)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $absen->nama_karyawan }}</td>
                    <td>{{ $absen->tanggal }}</td>
                    <td>{{ $absen->jam_masuk }}</td>
                    <td>{{ $absen->jam_keluar }}</td>
                    <td>{{ $absen->status ?? '-' }}</td>
                    <td>
                        <a href="{{ route('Absen.edit', $absen->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('Absen.destroy', $absen->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app>
