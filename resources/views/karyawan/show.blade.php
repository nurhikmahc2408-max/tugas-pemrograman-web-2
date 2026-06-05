<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <a class="btn btn-warning mb-3" href="{{ route('karyawan.index') }}" role="button">
        Back
    </a>

    <h6>Data Karyawan</h6>

    <ul class="list-group mb-3">

        <li class="list-group-item">
            Nama Karyawan : {{ $karyawan->nama_karyawan }}
        </li>

        <li class="list-group-item">
            Jabatan : {{ $karyawan->jabatan }}
        </li>

        <li class="list-group-item">
            Alamat : {{ $karyawan->alamat }}
        </li>

        <li class="list-group-item">
            No HP : {{ $karyawan->no_hp }}
        </li>

        <li class="list-group-item">
            Departemen : {{ $karyawan->departemen->nama_departemen }}
        </li>

        <li class="list-group-item">
            Created At : {{ $karyawan->created_at->format('d F Y H:i:s') }}
        </li>

        <li class="list-group-item">
            Last Update : {{ $karyawan->updated_at->diffForHumans() }}
        </li>

    </ul>

</x-app>
