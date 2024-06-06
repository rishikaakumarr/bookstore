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
            background-image: url('oldromancebg.jpg');
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
            color: #3f0134; /* Gold text color */
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
                <td>Jane Austin</td>
                <td><img src="twistedlove.jpg" height="50px" width="50px"> Pride and Prejudice</td>
                <td>Romantic</td>
                <td><a href="https://www.readingsanctuary.com/twisted-love-pdf/">Buy now</a></td>
            </tr>
            <tr>
                <td>Charlotte Bronte</td>
                <td><img src="twistedhate.jpg" height="50px" width="50px"> Jane Eyre</td>
                <td>Romantic</td>
                <td><a href="https://www.readingsanctuary.com/twisted-love-pdf/">Buy now</a></td>
            </tr>
            <tr>
                <td>Margeret Mitchell </td>
                <td><img src="twistedgame.jpeg" height="50px" width="50px"> Gone with the Wind</td>
                <td>Romantic</td>
                <td><a href="https://bdebooks.com/en/books/twisted-games-by-ana-huang">Buy now</a></td>
            </tr>
            <tr>
                <td>Jane Austen</td>
                <td><img src="twistedlies.jpg" height="50px" width="50px"> Sense and Sensibility</td>
                <td>Romantic</td>
                <td><a href="https://bdebooks.com/en/books/twisted-hate-by-ana-huang">Buy now</a></td>
            </tr>
            <tr>
                <td>Jane Austen</td>
                <td><img src="kingofwrath.jpg" height="50px" width="50px"> Persuaion</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>William Shakespeare</td>
                <td><img src="kingofpride.jpg" height="50px" width="50px"> Romeo and Juliet</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Judith Mcnaught</td>
                <td><img src="kingofgreed.jpg" height="50px" width="50px"> Whitney, My Love</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>D.H Lawrence</td>
                <td><img src="kingofsloth.jpg" height="50px" width="50px"> Lady Chatterley's Lover</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td> May Alcott</td>
                <td><img src="haunting adeline.jpg" height="50px" width="50px"> Little Women</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Anya Seton </td>
                <td><img src="hauntingadeline2.jpg" height="50px" width="50px"> Katherine</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Audrey Niffengger</td>
                <td><img src="whereismolly.jpg" height="50px" width="50px"> The time traveller's wife</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Jude Devaraux</td>
                <td><img src="satansaffair.jpg" height="50px" width="50px"> A knight in shining Armor</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Jane Austen</td>
                <td><img src="shallowriver.jpg" height="50px" width="50px"> Emma</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Dodie Smith</td>
                <td><img src="doesithurt.jpg" height="50px" width="50px"> I capture the castle</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Thomas Hardy</td>
                <td><img src="thefineprint.jpg" height="50px" width="50px"> Far from the madding crowd</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Kathleen E.Woddiwiss</td>
                <td><img src="termsandcondition.jpg" height="50px" width="50px"> The wolf and the dove</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Kathleen E.woodiwiss</td>
                <td><img src="finaloffer.jpg" height="50px" width="50px"> The flame and the flower</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Loretta Chase</td>
                <td><img src="warmth.jpg" height="50px" width="50px"> Lord of the scoundrels</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Jane Austen</td>
                <td><img src="idontloveyouanymore.jpg" height="50px" width="50px"> Northanger Abbey</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Emily Brontee</td>
                <td><img src="whereismolly.jpg" height="50px" width="50px"> Wuthering </td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Leo Tolstoy</td>
                <td><img src="shatter me.jpg" height="50px" width="50px"> Anna Karenina</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>
            <tr>
                <td>Elizabeth Gaskell</td>
                <td><img src="defyme.jpg" height="50px" width="50px"> North and South</td>
                <td>Romantic</td>
                <td><a href="https://www.junkybooks.com/book/twisted-lies">Buy now</a></td></p>
            </tr>

        </table>
    </div>
</body>
</html>
