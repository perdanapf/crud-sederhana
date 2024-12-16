@extends('login')

@section('title')
Register
@endsection

@section('judul')
Register
@endsection

@section('content')
@if($message = Session::get('pesan'))
    <div class="alert alert-success" style="animation: fadeIn 0.5s; font-size: 1.2rem; font-weight: bold; text-align: center; border: 2px solid #2196f3; background-color: #e3f2fd; border-radius: 10px;">
        {{ Session::get('pesan') }}
    </div>
@endif

<div class="header" style="text-align: center; margin-bottom: 20px; animation: fadeIn 0.7s;">
    <h1 style="font-size: 2rem; color: #2196f3; font-weight: bold;">Register</h1>
    <p style="font-size: 1rem; color: #757575;">Silakan buat akun Anda untuk mulai menggunakan layanan kami</p>
</div>

<div class="panel-body" style="animation: slideIn 0.7s ease-out; max-width: 400px; margin: auto;">
    <form role="form" action="session/register" method="POST" style="background: #ffffff; padding: 30px; border-radius: 15px; box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);">
        @csrf
        <div class="form-group">
            <label style="color: #1e88e5; font-size: 1rem; font-weight: bold;">Nama</label>
            <input
                class="form-control"
                type="text"
                name="nama"
                placeholder="Masukkan Nama"
                required
                style="border: 1px solid #90caf9; border-radius: 8px; padding: 10px; font-size: 0.95rem; background: #f1f8ff; transition: border-color 0.3s ease, box-shadow 0.3s ease;">
        </div>
        <div class="form-group">
            <label style="color: #1e88e5; font-size: 1rem; font-weight: bold;">Email</label>
            <input
                class="form-control"
                type="email"
                name="email"
                placeholder="Masukkan Email"
                required
                style="border: 1px solid #90caf9; border-radius: 8px; padding: 10px; font-size: 0.95rem; background: #f1f8ff; transition: border-color 0.3s ease, box-shadow 0.3s ease;">
        </div>
        <div class="form-group">
            <label style="color: #1e88e5; font-size: 1rem; font-weight: bold;">Password</label>
            <input
                class="form-control"
                type="password"
                name="password"
                placeholder="Masukkan Password"
                required
                style="border: 1px solid #90caf9; border-radius: 8px; padding: 10px; font-size: 0.95rem; background: #f1f8ff; transition: border-color 0.3s ease, box-shadow 0.3s ease;">
        </div>
        <button
            type="submit"
            class="btn btn-default"
            style="background: #2196f3; color: white; font-weight: bold; padding: 10px 20px; border: none; border-radius: 8px; font-size: 1rem; cursor: pointer; transition: all 0.3s ease; width: 100%;">
            REGISTER
        </button>
    </form>
</div>

<style>
    /* Animations */
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideIn {
        from { transform: translateY(-20px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }

    /* Form hover and focus */
    .form-control:hover {
        background-color: #e3f2fd;
    }

    .form-control:focus {
        border-color: #2196f3;
        box-shadow: 0 0 6px rgba(33, 150, 243, 0.5);
        outline: none;
    }

    /* Button hover effect */
    .btn:hover {
        background: #1e88e5;
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    }

    /* Responsive Design */
    @media (max-width: 576px) {
        .panel-body {
            padding: 15px;
        }

        form {
            padding: 20px;
        }

        .btn {
            font-size: 0.95rem;
            padding: 10px 15px;
        }

        .form-group label {
            font-size: 0.9rem;
        }

        .form-control {
            font-size: 0.9rem;
            padding: 8px;
        }
    }
</style>
@endsection
