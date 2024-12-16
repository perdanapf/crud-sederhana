@extends('tema')
@section('menu')
<ul class="nav" id="main-menu">
    <!-- Add the 'active-menu' class conditionally based on the current route -->
    <li><a class="{{ request()->is('beranda') ? 'active-menu' : '' }}" href="{{ url('/') }}"><i class="fa fa-fw fa-home"></i> Home</a></li>
    <li><a class="{{ request()->is('tentang') ? 'active-menu' : '' }}" href="{{ url('/tentang') }}"><i class="fa fa-fw fa-info-circle"></i> Tentang</a></li>
    <li><a class="{{ request()->is('kontak') ? 'active-menu' : '' }}" href="{{ url('/kontak') }}"><i class="fa fa-fw fa-envelope"></i> Kontak</a></li>
    <li><a class="{{ request()->is('siswa') ? 'active-menu' : '' }}" href="{{ url('/siswa') }}"><i class="fa fa-fw fa-users"></i> Data Siswa</a></li>
</ul>
@endsection
@section('title')
    Tentang
@endsection
@section('content')
<style>
    /* Center and style the main content container with a blue theme and animation */
    .about-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 30px auto;
        max-width: 800px;
        padding: 25px;
        border-radius: 10px;
        background: linear-gradient(to right, #2196F3, #64B5F6);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
        font-family: Arial, sans-serif;
        text-align: center;
        color: white;
        animation: fadeIn 1s ease-in-out;
    }

    /* Fade-in animation for the container */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Page title styling with glowing effect */
    .about-container h1 {
        color: #ffffff;
        font-size: 2.2em;
        font-weight: bold;
        margin-bottom: 10px;
        text-shadow: 0 0 10px rgba(255, 255, 255, 0.6);
    }

    /* Subtitle styling with sliding animation */
    .about-container p {
        color: #e3f2fd;
        font-size: 1.2em;
        line-height: 1.6;
        margin: 15px 0;
        animation: slideIn 1s ease-in-out;
    }

    /* Slide-in animation for paragraph */
    @keyframes slideIn {
        from { opacity: 0; transform: translateX(-20px); }
        to { opacity: 1; transform: translateX(0); }
    }

    /* Decorative line with pulsing effect */
    .about-container .decorative-line {
        width: 80px;
        height: 4px;
        background-color: #ffffff;
        margin: 20px 0;
        border-radius: 2px;
        animation: pulse 2s infinite;
    }

    /* Pulsing animation for decorative line */
    @keyframes pulse {
        0%, 100% { transform: scaleX(1); }
        50% { transform: scaleX(1.3); }
    }
</style>

<div class="about-container">
    <h1>Tentang Kami</h1>
    <div class="decorative-line"></div>
    <p>Kelas ini merupakan kelas belajar Laravel 3A. Di sini, kami fokus pada pengembangan keterampilan pemrograman web menggunakan Laravel untuk menciptakan aplikasi yang efisien dan andal.</p>
</div>
@endsection
