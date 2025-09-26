<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Trapped Bum</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box {
            background: white;
            padding: 20px;
            border-radius: 6px;
            width: 300px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #aaa;
            border-radius: 4px;
            font-size: 14px;
        }

        .btn {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            width: 120px;
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease;
            background: #4CAF50;
            color: white;
            font-size: 16px;
        }

        .btn:hover {
            background: #3a9e43;
        }
    </style>
</head>

<body>
    <div class="box">
        <h2>This doesn't work</h2>
        <form id="loginForm">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
        </form>
    </div>

    <button type="submit" form="loginForm" class="btn">LOG</button>
</body>

</html>