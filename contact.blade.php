<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <style>
        body {font-family: Arial; background-color: #eef2f5; margin:0;}
        .navbar {background-color: #1e3a8a; padding: 15px; text-align:center;}
        .navbar a {color:white; margin: 0 15px; text-decoration:none; font-weight:bold;}
        .navbar a:hover {text-decoration:underline;}
        .content {text-align:center; margin-top:100px;}
        form {margin-top:20px;}
        input, textarea {padding:10px; width:250px; margin:5px; border-radius:5px; border:1px solid #ccc;}
        button {padding:10px 20px; background-color:#1e3a8a; color:white; border:none; border-radius:5px; cursor:pointer;}
        button:hover {background-color:#0d2563;}
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
        <h1>Hubungi Kami 📩</h1>
        <form>
            <input type="text" placeholder="Nama"><br>
            <input type="email" placeholder="Email"><br>
            <textarea placeholder="Pesan"></textarea><br>
            <button type="submit">Kirim</button>
        </form>
    </div>
</body>
</html>
