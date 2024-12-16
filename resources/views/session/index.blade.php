@extends('login')

@section('title')
Login
@endsection

@section('judul')
Login
@endsection

@section('content')
@if ($message = Session::get('pesan'))
    <div class="alert alert-danger" style="animation: fadeIn 0.5s; font-size: 1.2rem; font-weight: bold; text-align: center; border: 2px solid #ff6b6b; background-color: #ffe6e6; border-radius: 10px;">
        {{ Session::get('pesan') }}
    </div>
@endif

<div class="header" style="text-align: center; margin-bottom: 20px; animation: fadeIn 0.7s;">
    <h1 style="font-size: 2rem; color: #2196f3; font-weight: bold;">Login</h1>
    <p style="font-size: 1rem; color: #757575;">Masuk untuk melanjutkan ke akun Anda</p>
</div>

<div class="panel-body" style="animation: slideIn 0.7s ease-out; max-width: 400px; margin: auto;">
    <form role="form" action="session/login" method="POST" style="background: #ffffff; padding: 30px; border-radius: 15px; box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);">
        @csrf
        <div class="form-group">
            <label style="color: #1e88e5; font-size: 1rem; font-weight: bold;">Email</label>
            <input
                class="form-control"
                type="email"
                value="{{ Session::get('email') }}"
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
        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 20px;">
            <button
                type="submit"
                class="btn btn-default"
                style="background: #2196f3; color: white; font-weight: bold; padding: 10px 20px; border: none; border-radius: 8px; font-size: 1rem; cursor: pointer; transition: all 0.3s ease;">
                LOGIN
            </button>
            <button
                type="button"
                onclick="location.href='session/register'"
                class="btn btn-default"
                style="background: #50c878; color: white; font-weight: bold; padding: 10px 20px; border: none; border-radius: 8px; font-size: 1rem; cursor: pointer; transition: all 0.3s ease;">
                REGISTER
            </button>
        </div>
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
        background-color: #ffffff;
    }

    .form-control:focus {
        border-color: #2196f3;
        box-shadow: 0 0 6px rgba(33, 150, 243, 0.5);
        outline: none;
    }

    /* Button hover effect */
    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
    }

    /* Responsive Design */
    @media (max-width: 576px) {
        .panel-body {
            padding: 20px;
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

        /* Adjust button layout for small screens */
        div[style*="display: flex;"] {
            flex-direction: column;
            gap: 10px;
        }
    }
</style>
@endsection
