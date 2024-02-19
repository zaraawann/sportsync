<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sports Sync</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: beige; 
            margin: 0;
        }

        nav {
            background-color: #ff0000; /* Red color */
            padding: 15px 0;
        }

        nav a {
            color: white;
        }

        nav a:hover, nav a:active {
            color: #f8f9fa; /* Light Gray */
        }

        h1 {
            color: #2c3e50; /* Midnight Blue */
            text-align: center;
            margin-bottom: 30px;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 40px;
        }

        .gallery .col-md-4 {
            margin-bottom: 20px;
        }

        .gallery img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .gallery img:hover {
            transform: scale(1.05);
        }

        footer {
            background-color: #ff0000; /* Red color */
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 10px; /* Reduced height */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Sports Sync</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Welcome to Sports Sync!</h1>
                <div class="gallery">
                    <div class="col-md-4">
                        <img src="https://i.pinimg.com/236x/5d/7c/ff/5d7cff86488b2b26db073d041b559bc2.jpg" alt="Sport Image 1">
                    </div>
                    <div class="col-md-4">
                        <img src="https://i.pinimg.com/236x/42/3f/95/423f95a0553c63aa32610fa220bf9643.jpg" alt="Sport Image 2">
                    </div>
                    <div class="col-md-4">
                        <img src="https://i.pinimg.com/236x/ee/6c/a3/ee6ca3eb43fea53e186df27f44b2e969.jpg" alt="Sport Image 3">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-primary text-light text-center py-3">
        <p>&copy; 2023 Sports Sync. All rights reserved.</p>
    </footer>
</body>
</html>
