<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    <form method="POST" action="{{ route('Absen.store') }}">
        @csrf

        <div class="mb-3">
            <label for="nama_karyawan" class="form-label">Nama Karyawan</label>
            <input type="text" class="form-control @error('nama_karyawan') is-invalid @enderror" id="nama_karyawan"
                name="nama_karyawan" value="{{ old('nama_karyawan') }}">

            @error('nama_karyawan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal"
                name="tanggal" value="{{ old('tanggal') }}">

            @error('tanggal')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="jam_masuk" class="form-label">Jam Masuk</label>
            <input type="time" class="form-control @error('jam_masuk') is-invalid @enderror" id="jam_masuk"
                name="jam_masuk" value="{{ old('jam_masuk') }}">

            @error('jam_masuk')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="jam_keluar" class="form-label">Jam Keluar</label>
            <input type="time" class="form-control @error('jam_keluar') is-invalid @enderror" id="jam_keluar"
                name="jam_keluar" value="{{ old('jam_keluar') }}">

            @error('jam_keluar')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>

            <select class="form-select @error('status') is-invalid @enderror" id="status" name="status">

                <option value="">-- Pilih Status --</option>
                <option value="Hadir" {{ old('status') == 'Hadir' ? 'selected' : '' }}>Hadir</option>
                <option value="Izin" {{ old('status') == 'Izin' ? 'selected' : '' }}>Izin</option>
                <option value="Sakit" {{ old('status') == 'Sakit' ? 'selected' : '' }}>Sakit</option>
                <option value="Alfa" {{ old('status') == 'Alfa' ? 'selected' : '' }}>Alfa</option>
            </select>

            @error('status')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <a class="btn btn-warning" href="{{ route('Absen.index') }}" role="button">
            Cancel
        </a>

        <button type="submit" class="btn btn-primary">
            Submit
        </button>

    </form>

</x-app>
