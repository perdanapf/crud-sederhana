@extends('tema')
@section('menu')
<ul class="nav" id="main-menu">
    <!-- Add the 'active-menu' class conditionally based on the current route -->
    <li><a class="{{ request()->is('beranda') ? 'active-menu' : '' }}" href="{{ url('/beranda') }}"><i class="fa fa-fw fa-home"></i> Home</a></li>
    <li><a class="{{ request()->is('tentang') ? 'active-menu' : '' }}" href="{{ url('/tentang') }}"><i class="fa fa-fw fa-info-circle"></i> Tentang</a></li>
    <li><a class="{{ request()->is('kontak') ? 'active-menu' : '' }}" href="{{ url('/kontak') }}"><i class="fa fa-fw fa-envelope"></i> Kontak</a></li>
    <li><a class="{{ request()->is('siswa') ? 'active-menu' : '' }}" href="{{ url('/siswa') }}"><i class="fa fa-fw fa-users"></i> Data Siswa</a></li>
</ul>
@endsection
@section('title')
    Data Siswa
@endsection
@section('content')
<style>
    /* Center the content and style the add button with blue theme */
    .content-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 20px;
    }

    .content-container a.add-button {
        background-color: #2196F3;
        color: white;
        padding: 10px 15px;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
        margin-bottom: 20px;
        text-align: center;
        transition: background-color 0.3s ease, transform 0.3s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .content-container a.add-button:hover {
        background-color: #1976D2;
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
    }

    /* Style the table with blue headers */
    .styled-table {
        width: 100%;
        max-width: 800px;
        border-collapse: collapse;
        border-radius: 8px;
        overflow: hidden;
        font-family: Arial, sans-serif;
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
        margin-bottom: 20px;
    }

    .styled-table th, .styled-table td {
        padding: 15px;
        text-align: left;
    }

    .styled-table th {
        background-color: #2196F3;
        color: white;
        text-transform: uppercase;
    }

    .styled-table tr:nth-child(even) {
        background-color: #f3f9fe;
    }

    .styled-table tr:hover {
        background-color: #e3f2fd;
        transition: background-color 0.2s ease;
    }

    .styled-table td {
        border-bottom: 1px solid #dddddd;
    }

    /* Style action links with a color transition */
    .action-links a {
        margin-right: 10px;
        color: #2196F3;
        text-decoration: none;
        font-weight: bold;
        transition: color 0.3s ease;
    }

    .action-links a:hover {
        color: #1565C0;
        text-decoration: underline;
    }

    /* Style session message with fade-in animation */
    .session-message {
        color: #2196F3;
        font-weight: bold;
        margin-bottom: 15px;
        animation: fadeIn 1s ease-in-out;
    }

    /* Fade-in animation */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>

<div class="content-container">
    @if(Session::has('pesan'))
        <div class="session-message">
            {{ Session::get('pesan') }}
        </div>
    @endif

    <a href="{{ url('siswa/insert') }}" class="add-button">Tambah Data</a>

    <table class="styled-table">
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($dt_siswa as $siswa)
            <tr>
                <td>{{ $siswa->nis_siswa }}</td>
                <td>{{ $siswa->nama_siswa }}</td>
                <td>{{ $siswa->alamat_siswa }}</td>
                <td class="action-links">
                    <a href="{{ url('siswa/ubah/'.$siswa->id_siswa) }}">Ubah</a>
                    <a href="{{ url('siswa/hapus/'.$siswa->id_siswa) }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
