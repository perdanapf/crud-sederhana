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
Beranda
@endsection
@section('content')
@if ($message = Session::get('pesan'))
<div class="alert alert-succes">
    {{ Session::get('pesan') }}
</div>
@endif
<style>
    /* Main welcome container with a blue theme and subtle animation */
    .welcome-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin: 40px auto;
        max-width: 700px;
        padding: 30px;
        border-radius: 10px;
        background: linear-gradient(to right, #2196F3, #64B5F6);
        color: white;
        text-align: center;
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
        font-family: Arial, sans-serif;
        animation: fadeIn 1s ease-in-out;
        overflow: hidden;
    }

    /* Keyframes for fade-in animation */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Heading styling with glow effect */
    .welcome-container h1 {
        font-size: 2.5em;
        font-weight: bold;
        margin-bottom: 10px;
        text-shadow: 0 0 10px rgba(255, 255, 255, 0.6);
    }

    /* Subtitle styling with a subtle animation */
    .welcome-container p {
        font-size: 1.3em;
        margin: 15px 0;
        animation: slideIn 1s ease-in-out;
    }

    /* Slide-in effect for paragraph */
    @keyframes slideIn {
        from { opacity: 0; transform: translateX(-20px); }
        to { opacity: 1; transform: translateX(0); }
    }

    /* Decorative line styling with pulsing effect */
    .decorative-line {
        width: 100px;
        height: 4px;
        background-color: white;
        margin: 20px 0;
        border-radius: 2px;
        animation: pulse 2s infinite;
    }

    /* Pulsing animation for the decorative line */
    @keyframes pulse {
        0%, 100% { transform: scaleX(1); }
        50% { transform: scaleX(1.2); }
    }

    /* Button styling with a subtle hover animation */
    .welcome-button {
        background-color: #fff;
        color: #2196F3;
        padding: 12px 25px;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
        margin-top: 20px;
        transition: background-color 0.3s ease, transform 0.3s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        cursor: pointer;
    }

    /* Hover effect for button */
    .welcome-button:hover {
        background-color: #e3f2fd;
        transform: translateY(-3px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
    }
</style>

<div class="welcome-container">
    <h1>Selamat Datang!</h1>
    <div class="decorative-line"></div>
    <p>Selamat Datang di Halaman Beranda Kelas Laravel 3A. Kami berkomitmen untuk membantu Anda belajar dan berkembang dalam pengembangan web menggunakan Laravel.</p>
    <a href="{{ url('kontak') }}" class="welcome-button">Hubungi Kami</a>
</div>
@endsection
