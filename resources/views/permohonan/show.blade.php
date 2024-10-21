@extends('layouts.admin.tabler')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center">Surat Permohonan Cuti</h3>
                    <p>Saya bertanda tangan di bawah ini menerangkan bahwa:</p>

                    <table>
                        <tr>
                            <td><strong>Nama</strong></td>
                            <td>: {{ $permohonan->nama }}</td>
                        </tr>
                        <tr>
                            <td><strong>NIP</strong></td>
                            <td>: {{ $permohonan->nip }}</td>
                        </tr>
                        <tr>
                            <td><strong>Pangkat/Gol</strong></td>
                            <td>: {{ $permohonan->pangkat_gol }}</td>
                        </tr>
                        <tr>
                            <td><strong>Jabatan</strong></td>
                            <td>: {{ $permohonan->jabatan }}</td>
                        </tr>
                        <tr>
                            <td><strong>Unit Kerja</strong></td>
                            <td>: {{ $permohonan->unit_kerja }}</td>
                        </tr>
                        <tr>
                            <td><strong>Alamat</strong></td>
                            <td>: {{ $permohonan->alamat }}</td>
                        </tr>
                        <tr>
                            <td><strong>No HP</strong></td>
                            <td>: {{ $permohonan->no_hp }}</td>
                        </tr>
                    </table>

                    <p>Dengan ini mengajukan permohonan cuti selama {{ $permohonan->lama_cuti }} hari pada hari {{ $permohonan->hari }} tanggal {{ $permohonan->tanggal_mulai }} s/d {{ $permohonan->tanggal_selesai }} dengan alasan {{ $permohonan->alasan }}.</p>
                    <p>Demikian surat keterangan ini dibuat dengan sesungguhnya untuk dapat dipergunakan sebagaimana mestinya.</p>

                    <div class="row mt-5">
                        <div class="col-md-6 text-left">
                            <p>Mengetahui,</p>
                            <p>(Pejabat Yang Berwenang)</p>
                            <br><br><br>
                            <p>{{ $permohonan->atasan }}<br>
                            NIP {{ $permohonan->atasan_nip }}</p>
                        </div>
                        <div class="col-md-6 text-right">
                            <p>Bukit Indah, {{ $permohonan->tanggal_surat }}</p>
                            <p>(Pemohon)</p>
                            <br><br><br>
                            <p>{{ $permohonan->nama }}<br>
                            NIP {{ $permohonan->nip }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3">
                <a class="btn btn-primary" href="{{ route('permohonan.index') }}">Kembali</a>
                <a class="btn btn-success" href="{{ route('permohonan.print', $permohonan->id) }}">Cetak PDF</a>
            </div>
        </div>
    </div>
</div>
@endsection