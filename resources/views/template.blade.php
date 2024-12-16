<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Kelas Laravel 3A</title>
  <style>
    /* General body styling */
    body {
      font-family: 'Poppins', Arial, sans-serif;
      background: linear-gradient(120deg, #005bea 0%, #00c6fb 100%);
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-attachment: fixed;
    }

    /* Main container styling */
    .container {
      background-color: #ffffff;
      border-radius: 16px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      width: 80%;
      max-width: 900px;
      padding: 30px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .container:hover {
      transform: translateY(-10px);
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
    }

    /* Header styling */
    h1 {
      color: #003f88;
      text-align: center;
      margin-bottom: 20px;
      font-size: 2.8rem;
      text-transform: uppercase;
      letter-spacing: 3px;
    }

    /* Navigation menu styling */
    nav {
      text-align: center;
      margin-bottom: 25px;
    }

    nav a {
      text-decoration: none;
      color: #ffffff;
      font-size: 18px;
      font-weight: 600;
      padding: 12px 24px;
      border-radius: 8px;
      background-color: #005bea;
      transition: all 0.4s ease;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
      display: inline-block;
      margin: 0 10px;
    }

    nav a:hover {
      background-color: #003f88;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
      transform: translateY(-3px);
    }

    /* Horizontal rule styling */
    hr {
      border: none;
      height: 2px;
      background-color: #dfe9f3;
      margin: 25px 0;
    }

    /* Content section styling */
    #content {
      padding: 20px;
      text-align: center;
      color: #333;
      font-size: 1.1rem;
      line-height: 1.8;
      background-color: #f7f9fc;
      border-radius: 12px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.05);
      transition: box-shadow 0.3s ease;
    }

    #content:hover {
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    /* Table styling */
    table {
      width: 80%;
      margin: 0 auto; /* Centering the table horizontally */
      border-collapse: collapse;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.05);
      transition: box-shadow 0.3s ease;
    }

    table:hover {
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    table, th, td {
      border: 1px solid #ddd;
      padding: 12px;
    }

    th {
      background-color: #f7f9fc;
      color: #333;
    }

    /* Footer section styling */
    footer {
      text-align: center;
      margin-top: 40px;
      color: #fff;
      font-size: 1rem;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      .container {
        width: 95%;
      }

      nav a {
        font-size: 16px;
        margin: 5px;
        padding: 10px 18px;
      }

      h1 {
        font-size: 2.2rem;
        letter-spacing: 1.5px;
      }

      table {
        width: 100%;
      }
    }
  </style>
  <!-- Added Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body>
  <div class="container">
    <h1>Website Kelas Laravel 3A</h1>
    <hr>
    <nav>
      <a href="{{ url('/') }}">Home</a>
      <a href="{{ url('/tentang') }}">Tentang</a>
      <a href="{{ url('/kontak') }}">Kontak</a>
      <a href="{{ url('/siswa') }}">Data Siswa</a>
    </nav>
    <hr>
    <div id="content">
      @yield('content')
    </div>
    <footer>
      <p>&copy; 2024 Kelas Laravel 3A | All Rights Reserved</p>
    </footer>
  </div>
</body>

</html>
