<!-- resources/views/permohonan/index.blade.php -->
@extends('layouts.admin.tabler')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Daftar Permohonan Cuti</h2>
            <a class="btn btn-success" href="{{ route('permohonan.create') }}">Buat Permohonan Cuti Baru</a>
            @if (session('success'))
                <div class="alert alert-success mt-2">
                    {{ session('success') }}
                </div>
            @endif
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Pangkat/Gol</th>
                        <th>Jabatan</th>
                        <th>Unit Kerja</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>Mulai</th>
                        <th>Selesai</th>
                        <th>Alasan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permohonans as $permohonan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $permohonan->nama }}</td>
                            <td>{{ $permohonan->nip }}</td>
                            <td>{{ $permohonan->pangkat_gol }}</td>
                            <td>{{ $permohonan->jabatan }}</td>
                            <td>{{ $permohonan->unit_kerja }}</td>
                            <td>{{ $permohonan->alamat }}</td>
                            <td>{{ $permohonan->no_hp }}</td>
                            <td>{{ $permohonan->tanggal_mulai }}</td>
                            <td>{{ $permohonan->tanggal_selesai }}</td>
                            <td>{{ $permohonan->alasan }}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{ route('permohonan.edit', $permohonan->id) }}">Edit</a>
                                <a class="btn btn-info btn-sm" href="{{ route('permohonan.show', $permohonan->id) }}">Show</a>
                                <a class="btn btn-success btn-sm" href="{{ route('permohonan.print', $permohonan->id) }}">Print</a>
                                <form action="{{ route('permohonan.destroy', $permohonan->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection