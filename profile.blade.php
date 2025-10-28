<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <style>
        body {
            font-family: Arial;
            background-color: #eef2f5;
            margin: 0;
        }
        .navbar {
            background-color: #1e3a8a;
            padding: 15px;
            text-align: center;
        }
        .navbar a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }
        .navbar a:hover {
            text-decoration: underline;
        }
        .content {
            text-align: center;
            margin-top: 60px;
        }
        .content img {
            width: 350px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="/dashboard">Dashboard</a>
        <a href="/news">News</a>
        <a href="/product">Product</a>
    </div>

    <div class="content">
        <h2>Profil Kamu</h2>
        <p>Selamat datang di halaman profil!</p>
        <img src="{{ asset('image/pat.png') }}" alt="pat">
    </div>
</body>
</html>
