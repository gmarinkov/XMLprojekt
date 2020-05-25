<?php
    date_default_timezone_set('Europe/Zagreb');

    if (isset($_POST['ime'])) {
        $ime = $_POST['ime'];
		$prezime = $_POST['prezime'];
		$noga=$_POST['noga'];
		$pozicija = $_POST['pozicija']; 
        $opis = $_POST['opis'];
        $rating = $_POST['rating'];
        
        $result = '';

        $result .= "<Igrac>\n";

        // ime
        $result .= '<Ime>' . $ime . "</Ime>\n";
		
		// prezime
        $result .= '<Prezime>' . $prezime . "</Prezime>\n";
		
		// noga
		$result .= '<Noga>' . $noga . "</Noga>\n";
		
		// pozicija
        $result .= '<Pozicija>' . $pozicija . "</Pozicija>\n";

        // opis
        $result .= '<Opis>' . $opis . "</Opis>\n";
		
		// rating
        $result .= '<Fifarating>' . $rating . "</Fifarating>\n";

        
        $result .= '</Igrac>';

        $filename = 'igrac' . date('Y_m_d_h_i_s') . '.xml';
        file_put_contents($filename, $result);
        die('Uspješno generiran XML!');

        // INSERT INTO books (book_name, book_description) VALUES ($bookName, $bookDescription);
        // SQL injection
        // --; DROP TABLE books;
    }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
    <title>XML</title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item" style="padding-right:40px;">
        <a class="nav-link" href="#">Obrazac</a>
      </li>
      <li class="nav-item" style="padding-right:40px;">
        <a class="nav-link" target="_blank" href="https://www.goal.com/en-gb">Goal.com</a>
      </li>
	  <li class="nav-item" style="padding-right:40px;">
        <a class="nav-link" target="_blank" href="https://www.fifa.com/">FIFA</a>
      </li>
    </ul>
  </div>
</nav>

    <div class="container mt-3">
        <div class="row">
            <div class="col-6 mx-auto">
                <h1 class="mb-5 text-center" style="color:#009933;">Obrazac za unos igrača</h1>
                <form action="nogomet.php" method="POST">
                    <!-- ime -->
                    <div class="form-group">
                        <label for="ime" style="color:#009933;">Ime:</label><img src="../../example/slika.jpg" width="20" style="margin-left:3px;">
                        <input title="Ovo je ime igraca" type="text" name="ime" class="form-control" id="ime">
                    </div>
                    <!-- prezime -->
                    <div class="form-group">
                        <label for="prezime" style="color:#009933;">Prezime:</label><img src="../../example/slika.jpg" width="20" style="margin-left:3px;">
                        <input type="text" name="prezime" class="form-control" id="prezime">
                    </div>
					<!-- pozicija -->
					<label for="pozicija" style="color:#009933;">Pozicija:</label><img src="../../example/slika.jpg" width="20" style="margin-left:3px;">
                    <select class="custom-select" name="pozicija" id="pozicija">
						<option selected>...</option>
                        <option value="Golman">Golman</option>
                        <option value="Obrana">Obrana</option>
						<option value="Sredina">Sredina</option>
						<option value="Napad">Napad</option>
                    </select>
					<!-- noga -->
					<div style="color:#009933; padding-top:20px;">Jača noga:<img src="../../example/slika.jpg" width="20" style="margin-left:3px;"></div>
					<div class="form-check">
					<input class="form-check-input" type="radio" name="noga" id="noga" value="Lijeva">
					<label class="form-check-label" for="noga">Lijeva</label>
      
					</div>
					<div class="form-check">
					<input class="form-check-input" type="radio" name="noga" id="noga" value="Desna">
					<label class="form-check-label" for="noga">Desna</label>
      
					</div>
                    <!-- detaljniji opis -->
                    <div class="form-group">
                        <label for="opis" style="color:#009933; padding-top:20px;">Detaljniji opis:</label><img src="../../example/slika.jpg" width="20" style="margin-left:3px;">
                        <textarea class="form-control" name="opis" id="opis" rows="3"></textarea>
                    </div>
                    <!-- Fifa rating -->
                    <div class="form-group">
                        <label for="rating" style="color:#009933; padding-top:10px;">Fifa rating:</label><img src="../../example/slika.jpg" width="20" style="margin-left:3px;">
                        <input type="range" name="rating" class="custom-range" min="1" max="10" step="1" id="rating">
                    </div>

                    

                    <button type="submit" class="btn btn-success float-right mt-3">Spremi kao XML</button>
                </form>

            </div>
        </div>
        <div class="mb-5"></div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>