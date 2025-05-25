<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to AD Bookstore</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #333;
            text-align: center;
            background-image: url('/AD-Task-3/assets/img/book_cover_placeholder.jpg');
            background-size: cover;
            background-position: center;
        }

        .landing-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px 60px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            margin: 20px;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .landing-container h1 {
            color: #333;
            font-size: 2.8em;
            margin-bottom: 20px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }

        .landing-container p {
            font-size: 1.2em;
            line-height: 1.6;
            margin-bottom: 30px;
            color: #555;
        }

        .btn-enter {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 50px;
            font-size: 1.3em;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: 0 4px 8px rgba(0, 123, 255, 0.3);
        }

        .btn-enter:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 123, 255, 0.4);
        }

        @media (max-width: 600px) {
            .landing-container {
                padding: 30px 40px;
            }
            .landing-container h1 {
                font-size: 2em;
            }
            .landing-container p {
                font-size: 1em;
            }
            .btn-enter {
                padding: 12px 25px;
                font-size: 1.1em;
            }
        }
    </style>
</head>
<body>
    <div class="landing-container">
        <h1>Welcome to AD Bookstore!</h1>
        <p>Discover your next favorite book. We offer a wide selection of titles in various genres, from programming to web design.</p>
        <a href="/AD-Task-3/page/home/index.php" class="btn-enter">Enter the Bookstore</a>
    </div>
</body>
</html>