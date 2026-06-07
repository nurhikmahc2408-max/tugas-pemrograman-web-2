<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <form method="POST" action="{{ route('Departemen.update', $departemen) }}">

        @method('PUT')
        @csrf

        <div class="mb-3">

            <label for="nama_departemen" class="form-label">Nama Departemen</label>

            <input type="text" class="form-control @error('nama_departemen') is-invalid @enderror" id="nama_departemen"
                name="nama_departemen" value="{{ old('nama_departemen', $departemen->nama_departemen) }}">

            @error('nama_departemen')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>

        <div class="mb-3">

            <label for="kode_departemen" class="form-label">Kode Departemen</label>

            <input type="text" class="form-control @error('kode_departemen') is-invalid @enderror"
                id="kode_departemen" name="kode_departemen"
                value="{{ old('kode_departemen', $departemen->kode_departemen) }}">

            @error('kode_departemen')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>

        <div class="mb-3">

            <label for="alamat_kantor" class="form-label">Alamat Kantor</label>

            <textarea class="form-control @error('alamat_kantor') is-invalid @enderror" id="alamat_kantor" name="alamat_kantor"
                rows="3">{{ old('alamat_kantor', $departemen->alamat_kantor) }}</textarea>

            @error('alamat_kantor')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>

        <a class="btn btn-warning" href="{{ route('Departemen.index') }}" role="button">Cancel</a>

        <button type="submit" class="btn btn-primary">Update</button>

    </form>

</x-app>
