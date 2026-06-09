<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <a class="btn btn-warning mb-3" href="{{ route('Departemen.index') }}" role="button">Back</a>

    {{-- departemen --}}

    <h6>Data Departemen</h6>

    <ul class="list-group mb-3">

        <li class="list-group-item">Nama Departemen : {{ $departemen->nama_departemen }}</li>

        <li class="list-group-item">Kode Departemen : {{ $departemen->kode_departemen }}</li>

        <li class="list-group-item">Lokasi : {{ $departemen->lokasi }}</li>

        <li class="list-group-item">Created At : {{ $departemen->created_at->format('d F Y H:i:s') }}</li>

        <li class="list-group-item">Last Update : {{ $departemen->updated_at->diffForHumans() }}</li>

    </ul>

    {{-- karyawan --}}

    <h6>Data Karyawan</h6>

    <ul class="list-group">

        @forelse ($departemen->karyawans as $karyawan)
            <li class="list-group-item">
                {{ $karyawan->nama_karyawan }} - {{ $karyawan->jabatan }}
            </li>
        @empty
            <li class="list-group-item text-center">Data Karyawan Tidak Ditemukan</li>
        @endforelse

    </ul>

</x-app>
