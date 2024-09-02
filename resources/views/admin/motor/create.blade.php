@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-header">
            FORM TAMBAH DATA MOTOR
        </div>

        <div class="card-body">
            <form action="{{ route('motor.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama_motor">Nama Motor</label>
                    <input type="text" name="nama_motor" class="form-control" value="{{ old('nama_mobil') }}">
                </div>

                <div class="form-group">
                    <label for="harga_sewa">Harga Sewa</label>
                    <input type="number" name="harga_sewa" class="form-control" value="{{ old('harga_sewa') }}">
                </div>

                <div class="form-group">
                    <label for="bahan_bakar">Bahan Bakar</label>
                    <input type="text" name="bahan_bakar" class="form-control" value="{{ old('bahan_bakar') }}">
                </div>

                <div class="form-group">
                    <label for="jumlah_kursi">Jumlah Kursi</label>
                    <input type="number" name="jumlah_kursi" class="form-control" value="{{ old('jumlah_kursi') }}">
                </div>

                <div class="form-group">
                    <label for="transmisi">Transmisi</label>
                    <select name="transmisi" id="transmisi" class="form-control">
                        <option value="manual">Manual</option>
                        <option value="automatic">Automatic</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="tersedia">Tersedia</option>
                        <option value="tidak_tersedia">Tidak Tersedia</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="gambar">Gambar Motor</label>
                    <input type="file" class="form-control" name="gambar">
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control">{{ old('deskripsi') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="charger">Charger</label>
                    <select name="charger" id="charger" class="form-control">
                        <option value="1">Tersedia</option>
                        <option value="0">Tidak Tersedia</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="hybrid">Hybrid</label>
                    <select name="hybrid" id="hybrid" class="form-control">
                        <option value="1">Tersedia</option>
                        <option value="0">Tidak Tersedia</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="tumbler_space">Tumbler Space</label>
                    <select name="tumbler_space" id="tumbler_space" class="form-control">
                        <option value="1">Tersedia</option>
                        <option value="0">Tidak Tersedia</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="GPS">GPS</label>
                    <select name="GPS" id="GPS" class="form-control">
                        <option value="1">Tersedia</option>
                        <option value="0">Tidak Tersedia</option>
                    </select>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection