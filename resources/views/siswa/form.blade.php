@extends('tema')
@section("menu")
<ul class="nav" id="main-menu">
    <!-- Add the 'active-menu' class conditionally based on the current route -->
    <li><a class="{{ request()->is('beranda') ? 'active-menu' : '' }}" href="{{ url('/') }}"><i class="fa fa-fw fa-home"></i> Home</a></li>
    <li><a class="{{ request()->is('tentang') ? 'active-menu' : '' }}" href="{{ url('/tentang') }}"><i class="fa fa-fw fa-info-circle"></i> Tentang</a></li>
    <li><a class="{{ request()->is('kontak') ? 'active-menu' : '' }}" href="{{ url('/kontak') }}"><i class="fa fa-fw fa-envelope"></i> Kontak</a></li>
    <li><a class="{{ request()->is('siswa') ? 'active-menu' : '' }}" href="{{ url('/siswa') }}"><i class="fa fa-fw fa-users"></i> Data Siswa</a></li>
</ul>
@endsection
@section('title')
    Tambah Data Siswa
@endsection
@section('content')
<style>
    /* Center the form on the page */
    .form-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 30px;
        animation: fadeIn 0.8s ease;
    }

    /* Style the table */
    .styled-table {
        width: 100%;
        max-width: 600px;
        border-collapse: collapse;
        border-radius: 8px;
        overflow: hidden;
        font-family: Arial, sans-serif;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        background-color: #1976D2;
        color: #ffffff;
    }

    .styled-table td, .styled-table th {
        padding: 15px;
        text-align: left;
    }

    .styled-table tr:nth-child(even) {
        background-color: #1E88E5;
    }

    .styled-table tr:hover {
        background-color: #1565C0;
        color: #ffffff;
    }

    .styled-table td {
        border-bottom: 1px solid #ffffff;
    }

    /* Style form inputs */
    .styled-table input[type="text"],
    .styled-table textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #BBDEFB;
        border-radius: 5px;
        box-sizing: border-box;
        background-color: #E3F2FD;
        color: #1976D2;
        font-size: 16px;
        transition: border-color 0.3s;
    }

    .styled-table input[type="text"]:focus,
    .styled-table textarea:focus {
        border-color: #90CAF9;
        outline: none;
    }

    /* Style buttons */
    .styled-table button {
        background-color: #4CAF50;
        color: #ffffff;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    .styled-table button:hover {
        background-color: #388E3C;
    }

    /* Back button */
    .styled-table a {
        color: #BBDEFB;
        text-decoration: none;
        font-weight: bold;
        font-size: 16px;
        transition: color 0.3s ease;
    }

    .styled-table a:hover {
        color: #E3F2FD;
        text-decoration: underline;
    }

    /* Animations */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>

<div class="form-container">
    <form method="POST">
        @csrf
        <table class="styled-table">
            <tr>
                <td>NIS</td>
                <td><input type="text" name="nis" value="{{ isset($siswa) ? $siswa->nis_siswa : '' }}" placeholder="Masukkan NIS"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="{{ isset($siswa) ? $siswa->nama_siswa : '' }}" placeholder="Masukkan Nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" rows="3" placeholder="Masukkan Alamat">{{ isset($siswa) ? $siswa->alamat_siswa : '' }}</textarea></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <button type="submit">Simpan</button>
                    <a href="{{ url('siswa') }}">Kembali</a>
                </td>
            </tr>
        </table>
    </form>
</div>
@endsection
