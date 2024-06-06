<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Website Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('booksbackground.jpg'); /* Added background image */
            background-size: cover;
            color: #fff; /* White text */
        }

        .container {
            max-width: 90%;
            margin: 50px auto;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #964B00; /* Brown color */
            font-size: 64px; /* Increased font size */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Added text shadow */
        }

        .navbar {
            width: 100%;
            text-align: center;
            margin-top: 20px;
            background-color: #410404; /* Dark red navbar background */
            padding: 10px;
            border-radius: 10px;
        }

        .navbar a {
            text-decoration: none;
            color: #fefbfb;
            margin: 0 10px;
            display: inline-block;
            padding: 10px 20px;
            background-color: #591103; /* Dark red navbar background */
            border-radius: 20px;
            transition: background-color 0.3s ease;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
        }

        .navbar a:hover {
            background-color: #38021b; /* Darker red on hover */
            color: #fff;
        }
        h2 {
            text-align: center;
            color: #fff; /* White text */
        }

        form {
            margin-top: 20px;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #fff; /* White border */
            background-color: #fff;
            color: #333; /* Dark text */
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #800000; /* Royal maroon */
            color: #fff; /* White text */
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #660000; /* Darker royal maroon on hover */
        }

        .bottom-text {
            text-align: center;
            margin-top: 20px;
        }

        .bottom-text a {
            color: #fff; /* White text */
            text-decoration: none;
        }

        .bottom-text a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1><a href="https://www.barnesandnoble.com/">Barnes and Noble</a></h1>
    <div class="navbar">
        <a href="C:\xampp\htdocs\Barnes and nobel\bookstore.html">Home</a>
        <a href="">About us</a>
        <a href="C:\xampp\htdocs\Barnes and nobel\categories.html">Categories</a>
        <a href="C:\xampp\htdocs\Barnes and nobel\ebooks.html">Ebook Link</a>
        <a href="C:\xampp\htdocs\Barnes and nobel\booklogin.html">Login</a>
        <a href="C:\xampp\htdocs\Barnes and nobel\booksign.html">Sign Up</a>
    </div>
    <div class="container">
        <h2>Login</h2>
        <form action="#">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" name="Login" value="Login">
        </form>
        <div class="bottom-text">
            <p>Don't have an account? <a href="C:\Users\kumar\OneDrive\Desktop\Cetpa Course\booksign.html">Sign up here</a></p>
        </div>
    </div>
</body>
</html>
