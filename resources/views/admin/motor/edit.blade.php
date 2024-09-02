@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                FORM EDIT DATA MOTOR
            </div>

            <div class="card-body">
                <form action="{{ route('motor.update', $motor->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="nama_motor">Nama Motor</label>
                        <input type="text" name="nama_motor" class="form-control" value="{{ old('nama_mobil', $motor->nama_motor) }}">
                    </div>

                    <div class="form-group">
                        <label for="harga_sewa">Harga Sewa</label>
                        <input type="number" name="harga_sewa" class="form-control" value="{{ old('harga_sewa', $motor->harga_sewa) }}">
                    </div>

                    <div class="form-group">
                        <label for="bahan_bakar">Bahan Bakar</label>
                        <input type="text" name="bahan_bakar" class="form-control" value="{{ old('bahan_bakar', $motor->bahan_bakar) }}">
                    </div>

                    <div class="form-group">
                        <label for="jumlah_kursi">Jumlah Kursi</label>
                        <input type="number" name="jumlah_kursi" class="form-control" value="{{ old('jumlah_kursi', $motor->jumlah_kursi) }}">
                    </div>

                    <div class="form-group">
                        <label for="transmisi">Transmisi</label>
                        <select name="transmisi" id="transmisi" class="form-control">
                            <option {{ $motor->transmisi == 'manual' ? 'select' : null}} value="manual">Manual</option>
                            <option {{ $motor->transmisi == 'automatic' ? 'select' : null}} value="automatic">Automatic</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option {{ $motor->status == 'tersedia' ? 'select' : null}} value="tersedia">Tersedia</option>
                            <option {{ $motor->status == 'tidak tersedia' ? 'select' : null}} value="tidak tersedia">Tidak Tersedia</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control">{{ old('deskripsi', $motor->deskripsi) }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="charger">Charger</label>
                        <select name="charger" id="charger" class="form-control">
                            <option {{ $motor->charger === 1 ? 'selected' : null}} value="1">Tersedia</option>
                            <option {{ $motor->charger === 0 ? 'selected' : null}} value="0">Tidak Tersedia</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="hybrid">Hybrid</label>
                        <select name="hybrid" id="hybrid" class="form-control">
                            <option {{ $motor->hybrid === 1 ? 'selected' : null}} value="1">Tersedia</option>
                            <option {{ $motor->hybrid === 0 ? 'selected' : null}} value="0">Tidak Tersedia</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tumbler_space">Tumbler Space</label>
                        <select name="tumbler_space" id="tumbler_space" class="form-control">
                            <option {{ $motor->tumbler_space === 1 ? 'selected' : null}} value="1">Tersedia</option>
                            <option {{ $motor->tumbler_space === 0 ? 'selected' : null}} value="0">Tidak Tersedia</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="GPS">GPS</label>
                        <select name="GPS" id="GPS" class="form-control">
                            <option {{ $motor->GPS === 1 ? 'selected' : null}} value="1">Tersedia</option>
                            <option {{ $motor->GPS === 0 ? 'selected' : null}} value="0">Tidak Tersedia</option>
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
    </div>

    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                EDIT GAMBAR
            </div>

            <div class="card-body">
                <form action="{{ route('admin.motor.updateImage', $motor->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="form-group">
                        <img src="{{ Storage::url($motor->gambar) }}" class="img-fluid" alt="">
                    </div>

                    <div class="form-group">
                        <label for="gambar">Gambar Motor</label>
                        <input type="file" class="form-control" name="gambar">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection