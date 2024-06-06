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
            background-image: url('mysterybg.jpg');
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
                <td>Sourabh Mukherjee</td>
                <td><img src="C:\Users\kumar\OneDrive\Desktop\Cetpa Course\twistedlove.jpg" height="50px" width="50px"> The Web of lies</td>
                <td>Murder mystery</td>
                <td><a href="https://www.readingsanctuary.com/twisted-love-pdf/">Buy now</a></td>
            </tr>
            <tr>
                <td>Kritika Sharma</td>
                <td><img src="C:\Users\kumar\OneDrive\Desktop\Cetpa Course\twistedlove.jpg" height="50px" width="50px"> The Rogue Spy</td>
                <td>Thriller</td>
                <td><a href="https://www.readingsanctuary.com/twisted-love-pdf/">Buy now</a></td>
            </tr>
            <tr>
                <td>Lucy Foley</td>
                <td><img src="C:\Users\kumar\OneDrive\Desktop\Cetpa Course\twistedgame.jpeg" height="50px" width="50px"> The Paris Apartment</td>
                <td>Murder mystery thriller</td>
                <td><a href="https://bdebooks.com/en/books/twisted-games-by-ana-huang">Buy now</a></td>
            </tr>
            <tr>
                <td>A.J.Finn</td>
                <td><img src="C:\Users\kumar\OneDrive\Desktop\Cetpa Course\twistedhate.jpg" height="50px" width="50px"> The Woman in the Window</td>
                <td>Thriller</td>
                <td><a href="https://bdebooks.com/en/books/twisted-hate-by-ana-huang">Buy now</a></td>
            </tr>
            <tr>
                <td>Ashley Elston</td>
                <td><img src="C:\Users\kumar\OneDrive\Desktop\Cetpa Course\twistedlies.jpg" height="50px" width="50px"> First Lie wins </td>
                <td>Mystery</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Kate Brody</td>
                <td><img src="C:\Users\kumar\OneDrive\Desktop\Cetpa Course\twistedlies.jpg" height="50px" width="50px"> Rabbit Hole</td>
                <td>Thriller</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Dwane Swierchynski</td>
                <td><img src="C:\Users\kumar\OneDrive\Desktop\Cetpa Course\twistedlies.jpg" height="50px" width="50px"> California Bear</td>
                <td>Thriller</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Nicolar Ferraro</td>
                <td><img src="C:\Users\kumar\OneDrive\Desktop\Cetpa Course\twistedlies.jpg" height="50px" width="50px"> My Favortie Scar</td>
                <td>Mystery</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td> Alex Michaelides</td>
                <td><img src="C:\Users\kumar\OneDrive\Desktop\Cetpa Course\twistedlies.jpg" height="50px" width="50px"> The Fury</td>
                <td>Mystery</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Lea Carpenter</td>
                <td><img src="C:\Users\kumar\OneDrive\Desktop\Cetpa Course\twistedlies.jpg" height="50px" width="50px"> Ilium</td>
                <td>Thriller</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Benjamin Stevenson</td>
                <td><img src="C:\Users\kumar\OneDrive\Desktop\Cetpa Course\twistedlies.jpg" height="50px" width="50px"> Everyone on this train is a suspect</td>
                <td>Mystery</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Janice Haleet</td>
                <td><img src="C:\Users\kumar\OneDrive\Desktop\Cetpa Course\twistedlies.jpg" height="50px" width="50px"> The mysterious case of the alperton angels</td>
                <td>Mystery</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Jahmal Mayfield</td>
                <td><img src="C:\Users\kumar\OneDrive\Desktop\Cetpa Course\twistedlies.jpg" height="50px" width="50px"> Smoke Kings</td>
                <td>Thriller</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Megon Nolan</td>
                <td><img src="C:\Users\kumar\OneDrive\Desktop\Cetpa Course\twistedlies.jpg" height="50px" width="50px"> Orfinary Human Failings</td>
                <td>Thriller</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Jenny Hollander</td>
                <td><img src="C:\Users\kumar\OneDrive\Desktop\Cetpa Course\twistedlies.jpg" height="50px" width="50px"> Everyone who can forgive me is dead</td>
                <td>Mystery</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Tracy Sierra</td>
                <td><img src="C:\Users\kumar\OneDrive\Desktop\Cetpa Course\twistedlies.jpg" height="50px" width="50px"> Nightwatching</td>
                <td>Thriller</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Kit Frick</td>
                <td><img src="C:\Users\kumar\OneDrive\Desktop\Cetpa Course\twistedlies.jpg" height="50px" width="50px">The Split</td>
                <td>Thriller</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Kobby Ben Ben</td>
                <td><img src="C:\Users\kumar\OneDrive\Desktop\Cetpa Course\twistedlies.jpg" height="50px" width="50px"> No one Dies yet </td>
                <td>Mystery</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Vera Kurian</td>
                <td><img src="C:\Users\kumar\OneDrive\Desktop\Cetpa Course\twistedlies.jpg" height="50px" width="50px"> A step past Darkness</td>
                <td>Thriller</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Kira Peikoff</td>
                <td><img src="C:\Users\kumar\OneDrive\Desktop\Cetpa Course\twistedlies.jpg" height="50px" width="50px"> Baby X</td>
                <td>Thriller</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Jennifer Croft</td>
                <td><img src="C:\Users\kumar\OneDrive\Desktop\Cetpa Course\twistedlies.jpg" height="50px" width="50px"> The Extinction of Irena Rey </td>
                <td>Mystery</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Tana French</td>
                <td><img src="C:\Users\kumar\OneDrive\Desktop\Cetpa Course\twistedlies.jpg" height="50px" width="50px"> The Hunter</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>

        </table>
    </div>
</body>
</html>
