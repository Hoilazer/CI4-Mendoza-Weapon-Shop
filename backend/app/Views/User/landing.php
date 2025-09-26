<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        header {
            width: 100%;
            background: #007bff;
            padding: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .nav-buttons {
            display: flex;
            gap: 15px;
        }

        header button {
            padding: 8px 16px;
            font-size: 1rem;
            background-color: white;
            color: #007bff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        header button:hover {
            background-color: #e0e0e0;
        }

        main {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        h1 {
            font-size: 3rem;
            color: #333;
            margin-bottom: 20px;
        }

        button.main-btn {
            padding: 10px 20px;
            font-size: 1rem;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            margin-bottom: 20px;
            transition: background 0.3s ease;
        }

        button.main-btn:hover {
            background-color: #0056b3;
        }

        img {
            width: 200px;
            height: auto;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <header>
        <div class="nav-buttons">
            <button onclick="window.location.href='/login'">Login</button>
            <button onclick="window.location.href='/moodboard'">Moodboard</button>
            <button onclick="window.location.href='/roadmap'">Roadmap</button>
            <button onclick="window.location.href='/signup'">Signup</button>
        </div>
    </header>

    <main>
        <h1>Hello</h1>
        <button class="main-btn" onclick="alert('Buru Nya!')">Press me</button>
        <img src="https://wiki.gbl.gg/images/thumb/a/af/MBTL_Neco-Arc_Art.png/479px-MBTL_Neco-Arc_Art.png" alt="Sample Image">
    </main>
</body>

</html>