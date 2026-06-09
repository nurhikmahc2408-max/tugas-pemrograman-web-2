<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <form method="POST" action="{{ route('Karyawan.store') }}">

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

            <label for="nip" class="form-label">NIP</label>

            <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip"
                value="{{ old('nip') }}">

            @error('nip')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>

        <div class="mb-3">

            <label for="jabatan" class="form-label">Jabatan</label>

            <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan"
                name="jabatan" value="{{ old('jabatan') }}">

            @error('jabatan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>

        <div class="mb-3">

            <label for="email" class="form-label">Email</label>

            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                name="email" value="{{ old('email') }}">

            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>

        <div class="mb-3">

            <label for="departemen_id" class="form-label">Departemen</label>

            <select class="form-select @error('departemen_id') is-invalid @enderror" id="departemen_id"
                name="departemen_id">

                <option value="">Pilih Departemen</option>

                @foreach ($departemens as $departemen)
                    <option value="{{ $departemen->id }}"
                        {{ old('departemen_id') == $departemen->id ? 'selected' : '' }}>
                        {{ $departemen->nama_departemen }}
                    </option>
                @endforeach

            </select>

            @error('departemen_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>

        <a class="btn btn-warning" href="{{ route('Karyawan.index') }}" role="button">Cancel</a>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

</x-app>
