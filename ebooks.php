<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barnes and Noble Ebook</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('booksbackground.jpg');
            background-size: cover;
            color: #fff;
        }
        .container {
            max-width: 90%;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            width: 100%;
            text-align: center;
            margin-top: 20px;
            color: #FFD700; /* Gold heading color */
            font-size: 48px; /* Slightly reduced font size */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        a {
            text-decoration: none;
            color: #FFD700; /* Gold link color */
            margin-right: 10px;
        }

        a:hover {
            text-decoration: underline;
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
            color: #fff;
            margin: 0 10px;
            display: inline-block;
            padding: 10px 20px;
            background-color: #800000; /* Dark red navbar background */
            border-radius: 20px;
            transition: background-color 0.3s ease;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
        }

        .navbar a:hover {
            background-color: #591103; /* Darker red on hover */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            color: #FFD700; /* Gold text color */
        }

        th, td {
            padding: 12px; /* Increased padding */
            text-align: left;
            border-bottom: 1px solid #777; /* Light gray border */
        }

        th {
            background-color: #800000; /* Dark red header background */
            font-size: 18px; /* Increased font size */
        }

        td img {
            vertical-align: middle;
            margin-right: 10px;
        }

        #myTable {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
            font-size: 16px; /* Reduced font size */
        }

        #myTable th, #myTable td {
            text-align: left;
            padding: 12px;
        }

        #myTable tr {
            border-bottom: 1px solid #ddd;
        }

        #myTable tr.header,
        #myTable tr:hover {
            background-color: #290101; /* Dark background on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Barnes and Noble</h1>
        <div class="navbar">
            <a href="C:\xampp\htdocs\Barnes and nobel\bookstore.html">Home</a>
            <a href="">About us</a>
            <a href="C:\xampp\htdocs\Barnes and nobel\categories.html">Categories</a>
            <a href="C:\xampp\htdocs\Barnes and nobel\ebooks.html">Ebook Link</a>
            <a href="C:\xampp\htdocs\Barnes and nobel\booklogin.html">Login</a>
            <a href="C:\xampp\htdocs\Barnes and nobel\booksign.html">Sign Up</a>
        </div>
        <hr>
        <table id="myTable">
            <tr>
                <th>Author</th>
                <th>Title</th>
                <th>Type</th>
                <th>Ebook Link</th>
            </tr>
            <tr>
                <td>Ana Huang</td>
                <td><img src="twistedlove.jpg" height="50px" width="50px"> Twisted Love</td>
                <td>Romantic</td>
                <td><a href="https://www.readingsanctuary.com/twisted-love-pdf/">Click me</a></td>
            </tr>
            <tr>
                <td>Ana Huang</td>
                <td><img src="twistedlove.jpg" height="50px" width="50px"> Twisted Hate</td>
                <td>Romantic</td>
                <td><a href="https://www.readingsanctuary.com/twisted-love-pdf/">Click me</a></td>
            </tr>
            <tr>
                <td>Ana Huang</td>
                <td><img src="twistedgame.jpeg" height="50px" width="50px"> Twisted Games</td>
                <td>Romantic</td>
                <td><a href="https://bdebooks.com/en/books/twisted-games-by-ana-huang">Click me</a></td>
            </tr>
            <tr>
                <td>Ana Huang</td>
                <td><img src="twistedhate.jpg" height="50px" width="50px"> Twisted Lies</td>
                <td>Romantic</td>
                <td><a href="https://bdebooks.com/en/books/twisted-hate-by-ana-huang">Click me</a></td>
            </tr>
            <tr>
                <td>Ana Huang</td>
                <td><img src="twistedlies.jpg" height="50px" width="50px"> King of Wrath</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Click me</a></td></p>
            </tr>
            <tr>
                <td>Ana Huang</td>
                <td><img src="twistedlies.jpg" height="50px" width="50px"> King of Pride</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Click me</a></td></p>
            </tr>
            <tr>
                <td>Ana Huang</td>
                <td><img src="twistedlies.jpg" height="50px" width="50px"> King of Greed</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Click me</a></td></p>
            </tr>
            <tr>
                <td>Ana Huang</td>
                <td><img src="twistedlies.jpg" height="50px" width="50px"> King of Soth</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Click me</a></td></p>
            </tr>
            <tr>
                <td> H.D Carlton</td>
                <td><img src="twistedlies.jpg" height="50px" width="50px"> Haunting Adeline - Cat and Mouse Duo</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Click me</a></td></p>
            </tr>
            <tr>
                <td>H.D Carlton</td>
                <td><img src="twistedlies.jpg" height="50px" width="50px"> Haunting Adeline</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Click me</a></td></p>
            </tr>
            <tr>
                <td>H.D Carlton</td>
                <td><img src="twistedlies.jpg" height="50px" width="50px"> Wheres Molly</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Click me</a></td></p>
            </tr>
            <tr>
                <td>H.D Carlton</td>
                <td><img src="twistedlies.jpg" height="50px" width="50px"> Satan's Affair</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Click me</a></td></p>
            </tr>
            <tr>
                <td>H.D Carlton</td>
                <td><img src="twistedlies.jpg" height="50px" width="50px"> Shallow River</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Click me</a></td></p>
            </tr>
            <tr>
                <td>H.D Carlton</td>
                <td><img src="twistedlies.jpg" height="50px" width="50px"> Does It Hurt</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Click me</a></td></p>
            </tr>
            <tr>
                <td>Lauren Asher</td>
                <td><img src="twistedlies.jpg" height="50px" width="50px"> The Fine Print</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Click me</a></td></p>
            </tr>
            <tr>
                <td>Lauren Asher</td>
                <td><img src="twistedlies.jpg" height="50px" width="50px"> Terms and Condition</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Click me</a></td></p>
            </tr>
            <tr>
                <td>Lauren Asher</td>
                <td><img src="twistedlies.jpg" height="50px" width="50px"> Final Offer</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Click me</a></td></p>
            </tr>
            <tr>
                <td>Rithvik Singh</td>
                <td><img src="C:\Users\kumar\OneDrive\Desktop\Cetpa Course\twistedlies.jpg" height="50px" width="50px"> Warmth</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Click me</a></td></p>
            </tr>
            <tr>
                <td>Rithvik Singh</td>
                <td><img src="C:\Users\kumar\OneDrive\Desktop\Cetpa Course\twistedlies.jpg" height="50px" width="50px"> I don't love you anymore</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Click me</a></td></p>
            </tr>
            <tr>
                <td>Ana Huang</td>
                <td><img src="C:\Users\kumar\OneDrive\Desktop\Cetpa Course\twistedlies.jpg" height="50px" width="50px"> Wheres Molly</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Click me</a></td></p>
            </tr>
            <tr>
                <td>Tahereh Mafi</td>
                <td><img src="C:\Users\kumar\OneDrive\Desktop\Cetpa Course\twistedlies.jpg" height="50px" width="50px"> Shatter Me </td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Click me</a></td></p>
            </tr>
            <tr>
                <td>Tahereh Mafi</td>
                <td><img src="C:\Users\kumar\OneDrive\Desktop\Cetpa Course\twistedlies.jpg" height="50px" width="50px"> Destroy Me</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Click me</a></td></p>
            </tr>

        </table>
    </div>
</body>
</html>
