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
    Kontak
@endsection
@section('content')
<style>
    /* Center and style the main contact container with a blue theme and animations */
    .contact-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 30px auto;
        max-width: 600px;
        padding: 25px;
        border-radius: 10px;
        background: linear-gradient(to right, #2196F3, #64B5F6);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
        font-family: Arial, sans-serif;
        text-align: center;
        color: white;
        animation: fadeIn 1s ease-in-out;
    }

    /* Fade-in animation for container */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Page title styling with glow effect */
    .contact-container h1 {
        font-size: 2em;
        font-weight: bold;
        margin-bottom: 10px;
        color: #ffffff;
        text-shadow: 0 0 8px rgba(255, 255, 255, 0.6);
    }

    /* Decorative line with pulsing effect */
    .contact-container .decorative-line {
        width: 80px;
        height: 4px;
        background-color: #ffffff;
        margin: 15px 0;
        border-radius: 2px;
        animation: pulse 2s infinite;
    }

    /* Pulsing effect for decorative line */
    @keyframes pulse {
        0%, 100% { transform: scaleX(1); }
        50% { transform: scaleX(1.3); }
    }

    /* Description styling with slide-in effect */
    .contact-container p {
        font-size: 1.1em;
        line-height: 1.6;
        margin-bottom: 20px;
        animation: slideIn 1s ease-in-out;
    }

    /* Slide-in animation for paragraph */
    @keyframes slideIn {
        from { opacity: 0; transform: translateX(-20px); }
        to { opacity: 1; transform: translateX(0); }
    }

    /* Contact info styling with subtle zoom on hover */
    .contact-info {
        display: flex;
        align-items: center;
        gap: 12px;
        color: #ffffff;
        font-size: 1.2em;
        font-weight: bold;
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    /* Hover effect for contact info */
    .contact-info:hover {
        transform: scale(1.05);
    }

    /* Icon styling with color and animation */
    .contact-info i {
        font-size: 1.5em;
        color: #ffffff;
        transition: color 0.3s ease;
    }

    /* Icon color change on hover */
    .contact-info:hover i {
        color: #e3f2fd;
    }
</style>

<div class="contact-container">
    <h1>Kontak Kami</h1>
    <div class="decorative-line"></div>
    <p>Jika ada pertanyaan, silahkan kontak kami via email. Kami siap membantu Anda!</p>

    <div class="contact-info">
        <i style="font-size:24px" class="fa">&#xf0e0;</i>
        <span>rocadelion@gmail.com</span>
    </div>
</div>
@endsection
