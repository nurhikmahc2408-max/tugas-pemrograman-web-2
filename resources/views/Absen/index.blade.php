<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    <table class="table table-bordered border-primary">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nama Karyawan</th>
                <th>Tanggal</th>
                <th>Jam Masuk</th>
                <th>Jam Keluar</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($absen as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_karyawan }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->jam_masuk }}</td>
                    <td>{{ $item->jam_keluar }}</td>
                    <td>{{ $item->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-app>
