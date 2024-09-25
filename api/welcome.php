<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            background-color: #f0f4f8;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .welcome-box {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 90%;
            max-width: 400px;
        }
        h1 {
            font-size: 2.5em;
            color: #333;
            margin-bottom: 10px;
        }
        p {
            font-size: 1.2em;
            color: #666;
        }
    </style>
</head>
<body>

<div class="welcome-box">
    <h1>Welcome!</h1>
    <p>
        <?php
            echo "We're glad to see you here.";
        ?>
    </p>
</div>

</body>
</html>
