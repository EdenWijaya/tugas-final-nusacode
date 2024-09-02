@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Daftar Motor</h3>
            <a href="{{ route('motor.create') }}" class="btn btn-primary">Tambah Data Motor</a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Motor</th>
                            <th>Gambar</th>
                            <th>Harga Sewa</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($motor as $motor)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $motor->nama_motor }}</td>
                            <td>
                                <img src="{{ Storage::url($motor->gambar) }}" width="200" alt="">
                            </td>
                            <td>{{ $motor->harga_sewa }}</td>
                            <td>{{ $motor->status }}</td>
                            <td>
                                <a href="{{ route('motor.edit', $motor->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                <!-- <a href="#" class="btn btn-sm btn-danger">DELETE</a> -->

                                <form onclick="return confirm('yakin untuk menghapus data?');" class="d-inline" action="{{ route('motor.destroy', $motor->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">DELETE</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">DATA KOSONG</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
