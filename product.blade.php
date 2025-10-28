<!DOCTYPE html>
<html>
<head>
    <title>Product</title>
    <style>
        body {font-family: Arial; background-color: #eef2f5; margin:0;}
        .navbar {background-color: #1e3a8a; padding: 15px; text-align:center;}
        .navbar a {color:white; margin: 0 15px; text-decoration:none; font-weight:bold;}
        .navbar a:hover {text-decoration:underline;}
        .content {text-align:center; margin-top:100px;}
    </style>
</head>
<body>
    <div class="navbar">
        <a href="/dashboard">Dashboard</a>
        <a href="/news">News</a>
        <a href="/product">Product</a>
        <a href="/profile">Profile</a>
        <a href="/contact">Contact</a>
    </div>

    <div class="content">
        <h1>Produk Kami 🛍️</h1>
        <p>Temukan berbagai produk terbaik kami di sini.</p>
        <input type="image" src="{{ asset('image/ga.png') }}" alt="ga" width="350">
    </div>
</body>
</html>
