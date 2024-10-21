<!DOCTYPE html>
<html>
<head>
    <title>Surat Permohonan Cuti</title>
    <style>
        @page {
            size: A4;
            margin: 10mm;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0 auto;
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }
        h3 {
            text-align: center;
            margin-top: 0px; /* Ubah nilai ini sesuai kebutuhan */
            margin-bottom: 10px;
        }
        .content-table {
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse; /* Menyatu dengan border dan menghilangkan jarak */
        }
        .content-table td {
            vertical-align: top;
            padding: 5px; /* Menyediakan padding yang konsisten */
            border: 1px solid transparent; /* Menghindari jarak tambahan dari border */
        }
        .content-table td:first-child {
            width: 150px;
            padding-right: 10px; /* Jarak antara kolom kiri dan kanan */
        }
        .content-table td:last-child {
            padding-left: 10px; /* Jarak antara kolom kanan dan kiri */
        }
        .signature {
            margin-top: 50px;
            width: 100%;
        }
        .signature .left, .signature .right {
            width: 45%;
            display: inline-block;
            vertical-align: top;
        }
        .signature .left {
            text-align: left;
        }
        .signature .right {
            text-align: right;
        }
        .signature p {
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <h3>Surat Permohonan Cuti</h3>
    <p>Saya bertanda tangan di bawah ini menerangkan bahwa:</p>

    <table class="content-table">
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

    <p>Dengan ini mengajukan permohonan (tidak masuk bekerja) selama {{ $permohonan->lama_cuti }} hari pada hari {{ $permohonan->hari }} tanggal {{ $permohonan->tanggal_mulai }} s/d {{ $permohonan->tanggal_selesai }} dengan alasan sakit (Surat Keterangan Dokter).</p>
    <p>Demikian surat keterangan ini dibuat dengan sesungguhnya untuk dapat dipergunakan sebagaimana mestinya.</p>

    <div class="signature">
        <div class="left">
            <p>Mengetahui,</p>
            <p>(Pejabat Yang Berwenang)</p>
            <br><br><br>
            <p>{{ $permohonan->atasan }}<br>
            NIP {{ $permohonan->atasan_nip }}</p>
        </div>
        <div class="right">
            <p>Bukit Indah, {{ $permohonan->tanggal_surat }}</p>
            <p>(Pemohon)</p>
            <br><br><br>
            <p>{{ $permohonan->nama }}<br>
            NIP {{ $permohonan->nip }}</p>
        </div>
    </div>
</body>
</html>
