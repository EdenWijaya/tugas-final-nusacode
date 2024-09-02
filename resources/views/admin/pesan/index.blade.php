@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Daftar Pesan</h3>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Judul Pesan</th>
                            <th>Pesan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($pesan as $pesan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pesan->nama }}</td>
                            <td>{{ $pesan->email }}</td>
                            <td>{{ $pesan->judul }}</td>
                            <td>{{ $pesan->pesan }}</td>
                            <td>
                                <form onclick="return confirm('yakin untuk menghapus data?');" class="d-inline" action="{{ route('admin.pesan.destroy', $pesan->id) }}" method="post">
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
