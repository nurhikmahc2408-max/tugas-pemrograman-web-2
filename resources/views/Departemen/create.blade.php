<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <form method="POST" action="{{ route('Departemen.store') }}">

        @csrf

        <div class="mb-3">

            <label for="nama_departemen" class="form-label">Nama Departemen</label>

            <input type="text" class="form-control @error('nama_departemen') is-invalid @enderror" id="nama_departemen"
                name="nama_departemen" value="{{ old('nama_departemen') }}">

            @error('nama_departemen')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>

        <div class="mb-3">

            <label for="kode_departemen" class="form-label">Kode Departemen</label>

            <input type="text" class="form-control @error('kode_departemen') is-invalid @enderror"
                id="kode_departemen" name="kode_departemen" value="{{ old('kode_departemen') }}">

            @error('kode_departemen')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>

        <div class="mb-3">

            <label for="lokasi" class="form-label">Lokasi</label>

            <textarea class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" rows="3">{{ old('lokasi') }}</textarea>

            @error('lokasi')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>

        <a class="btn btn-warning" href="{{ route('Departemen.index') }}" role="button">Cancel</a>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

</x-app>
