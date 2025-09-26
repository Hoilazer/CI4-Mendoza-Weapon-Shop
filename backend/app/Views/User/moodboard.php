<?php
// Simple 3 column layout with colors
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Three Colored Columns</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            height: 100vh;
            /* full screen */
        }

        .col {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            font-weight: bold;
            color: white;
        }

        .yellow {
            background: #FFD700;
            color: #333;
        }

        .purple {
            background: #800080;
        }

        .blue {
            background: #1E90FF;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="col yellow">Yellow</div>
        <div class="col purple">Purple</div>
        <div class="col blue">Blue</div>
    </div>
</body>

</html>