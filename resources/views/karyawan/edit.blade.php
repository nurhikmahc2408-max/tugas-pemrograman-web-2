<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <form method="POST" action="{{ route('karyawan.update', $karyawan) }}">

        @method('PUT')
        @csrf

        <div class="mb-3">

            <label for="nama_karyawan" class="form-label">Nama Karyawan</label>

            <input type="text" class="form-control @error('nama_karyawan') is-invalid @enderror" id="nama_karyawan"
                name="nama_karyawan" value="{{ old('nama_karyawan', $karyawan->nama_karyawan) }}">

            @error('nama_karyawan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>

        <div class="mb-3">

            <label for="jabatan" class="form-label">Jabatan</label>

            <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan"
                name="jabatan" value="{{ old('jabatan', $karyawan->jabatan) }}">

            @error('jabatan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>

        <div class="mb-3">

            <label for="alamat" class="form-label">Alamat</label>

            <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="3">{{ old('alamat', $karyawan->alamat) }}</textarea>

            @error('alamat')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>

        <div class="mb-3">

            <label for="no_hp" class="form-label">No HP</label>

            <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp"
                name="no_hp" value="{{ old('no_hp', $karyawan->no_hp) }}">

            @error('no_hp')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>

        <a class="btn btn-warning" href="{{ route('karyawan.index') }}" role="button">
            Cancel
        </a>

        <button type="submit" class="btn btn-primary">
            Update
        </button>

    </form>

</x-app>
