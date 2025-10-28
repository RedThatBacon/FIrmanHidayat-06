<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background: linear-gradient(135deg, #1a73e8, #4285f4, #0f9d58);
            height: 100vh;
            margin: 0;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        h1 {
            font-size: 48px;
            margin-bottom: 10px;
        }
        p {
            font-size: 18px;
            opacity: 0.9;
            margin-bottom: 30px;
        }
        a {
            background: white;
            color: #1a73e8;
            text-decoration: none;
            padding: 10px 25px;
            border-radius: 30px;
            font-weight: bold;
            transition: 0.3s;
        }
        a:hover {
            background: #f1f1f1;
            transform: scale(1.05);
        }
        img {
            width: 200px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <img src="{{ asset('images/pantai.jpg') }}" alt="Pantai">
    <h1>Selamat Datang, Rettaman! 🌊</h1>
    <p>Ini adalah halaman awal project Laravel kamu.</p>
    <a href="/dashboard">Masuk ke Dashboard</a>
</body>
</html>
