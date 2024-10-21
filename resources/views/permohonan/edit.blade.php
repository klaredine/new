<!-- resources/views/permohonan/edit.blade.php -->
@extends('layouts.admin.tabler')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2>Edit Permohonan Cuti</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('permohonan.update', $permohonan->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $permohonan->nama }}" required>
                </div>
                <div class="form-group">
                    <label for="nip">NIP:</label>
                    <input type="text" class="form-control" id="nip" name="nip" value="{{ $permohonan->nip }}" required>
                </div>
                <div class="form-group">
                    <label for="pangkat_gol">Pangkat/Gol:</label>
                    <input type="text" class="form-control" id="pangkat_gol" name="pangkat_gol" value="{{ $permohonan->pangkat_gol }}" required>
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan:</label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $permohonan->jabatan }}" required>
                </div>
                <div class="form-group">
                    <label for="unit_kerja">Unit Kerja:</label>
                    <input type="text" class="form-control" id="unit_kerja" name="unit_kerja" value="{{ $permohonan->unit_kerja }}" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <textarea class="form-control" id="alamat" name="alamat" required>{{ $permohonan->alamat }}</textarea>
                </div>
                <div class="form-group">
                    <label for="no_hp">No HP:</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $permohonan->no_hp }}" required>
                </div>
                <div class="form-group">
                    <label for="tanggal_mulai">Tanggal Mulai:</label>
                    <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="{{ $permohonan->tanggal_mulai }}" required>
                </div>
                <div class="form-group">
                    <label for="tanggal_selesai">Tanggal Selesai:</label>
                    <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" value="{{ $permohonan->tanggal_selesai }}" required>
                </div>
                <div class="form-group">
                    <label for="alasan">Alasan:</label>
                    <textarea class="form-control" id="alasan" name="alasan" required>{{ $permohonan->alasan }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection