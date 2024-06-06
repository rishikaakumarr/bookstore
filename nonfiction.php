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
            background-image: url('scifi.jpg');
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
            color: #2e064d; /* Gold heading color */
            font-size: 48px; /* Slightly reduced font size */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        a {
            text-decoration: none;
            color: black; /* Gold link color */
            margin-right: 10px;
        }

        a:hover {
            text-decoration: underline;
        }

        .navbar {
            width: 100%;
            text-align: center;
            margin-top: 20px;
            background-color: #520172; /* Dark red navbar background */
            padding: 10px;
            border-radius: 10px;
        }

        .navbar a {
            text-decoration: none;
            color: #fff;
            margin: 0 10px;
            display: inline-block;
            padding: 10px 20px;
            background-color: #654875; /* Dark red navbar background */
            border-radius: 20px;
            transition: background-color 0.3s ease;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
        }

        .navbar a:hover {
            background-color: #26013b; /* Darker red on hover */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            color: #db1cb8; /* Gold text color */
        }

        th, td {
            padding: 12px; /* Increased padding */
            text-align: left;
            border-bottom: 1px solid #777; /* Light gray border */
        }

        th {
            background-color: #e3d4ed; /* Dark red header background */
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
            background-color: #06b1e0; /* Dark background on hover */
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
                <td>Elizabeth Kolbert</td>
                <td><img src="twistedlove.jpg" height="50px" width="50px"> The Sixth Extinction(2014)</td>
                <td>Non-Fiction</td>
                <td><a href="https://www.readingsanctuary.com/twisted-love-pdf/">Buy now</a></td>
            </tr>
            <tr>
                <td>Joan Didion</td>
                <td><img src="twistedhate.jpg" height="50px" width="50px"> The year of magical thinking (2005)</td>
                <td>Non-Fiction</td>
                <td><a href="https://www.readingsanctuary.com/twisted-love-pdf/">Buy now</a></td>
            </tr>
            <tr>
                <td>Noami Klein</td>
                <td><img src="twistedgame.jpeg" height="50px" width="50px"> No logo</td>
                <td>Romantic</td>
                <td><a href="https://bdebooks.com/en/books/twisted-games-by-ana-huang">Buy now</a></td>
            </tr>
            <tr>
                <td>Ted Hughes</td>
                <td><img src="twistedlies.jpg" height="50px" width="50px"> Birthday Letters(1998)</td>
                <td>Romantic</td>
                <td><a href="https://bdebooks.com/en/books/twisted-hate-by-ana-huang">Buy now</a></td>
            </tr>
            <tr>
                <td>Barack Obama</td>
                <td><img src="kingofwrath.jpg" height="50px" width="50px"> Dreams from My Father(1995)</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Stephen Hawking</td>
                <td><img src="kingofpride.jpg" height="50px" width="50px"> A brief history of time(1988)</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Tom Wolfe</td>
                <td><img src="kingofgreed.jpg" height="50px" width="50px"> The right stuff(1979)</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Edward Said</td>
                <td><img src="kingofsloth.jpg" height="50px" width="50px"> Orientalism(1978)</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td> Michael Herr</td>
                <td><img src="haunting adeline.jpg" height="50px" width="50px"> Dispatches(1977)</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Richard Dawkins </td>
                <td><img src="hauntingadeline2.jpg" height="50px" width="50px"> The Selfish Gene (1976)</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Seamus Heaney</td>
                <td><img src="whereismolly.jpg" height="50px" width="50px"> North(1975)</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Oliver Sacks</td>
                <td><img src="satansaffair.jpg" height="50px" width="50px"> Awakenings(1973)</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Germaine Greer(1970)</td>
                <td><img src="shallowriver.jpg" height="50px" width="50px"> The Female Eunuch(1970)</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Nik Cohn</td>
                <td><img src="doesithurt.jpg" height="50px" width="50px"> Awopbopalppbop Alopbamboom(1969) </td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>James D watson</td>
                <td><img src="thefineprint.jpg" height="50px" width="50px"> The Double Helix </td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Susan Sontag</td>
                <td><img src="termsandcondition.jpg" height="50px" width="50px"> Against Interpretation(1966)</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Sylvia Plath</td>
                <td><img src="finaloffer.jpg" height="50px" width="50px"> Ariel(1965)</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Betty Friedan</td>
                <td><img src="warmth.jpg" height="50px" width="50px"> The Feminine Mystique(1963)</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>EP Thompson</td>
                <td><img src="idontloveyouanymore.jpg" height="50px" width="50px"> The Making of the english working class(1963)</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Rachel Carson</td>
                <td><img src="whereismolly.jpg" height="50px" width="50px"> Silent spring(1962)</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Thomas S kuhn</td>
                <td><img src="shatter me.jpg" height="50px" width="50px"> The Structure of scientific revolution (1962)</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>CS Lewis </td>
                <td><img src="defyme.jpg" height="50px" width="50px"> A grief observed(1961)</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>

        </table>
    </div>
</body>
</html>
