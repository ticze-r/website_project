<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="pl" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Galeria</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<form action="rezerwacja.php" method="post">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <img src="galeria_samochody/logo.jpg " width="930" height="112" alt="blad">
            </div>
        </div>
        </br>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <center>
                    <a href="index.php"><font color="gray"><h4>Home</h4></font></a>
                </center>
            </div>
            <div class="col-md-2">
                <center>
                    <a href="cennik.php"><font color="gray"><h4>Cennik</h4></font></a>
                    <center>
            </div>
            <div class="col-md-2">
                <center>
                    <a href="galeria.php"><font color="gray"><h4>Menu</h4></font></a>
                </center>
            </div>
            <div class="col-md-2">
                <center>
                    <a href="opinia.php"><font color="gray"><h4>Opinie</h4></font></a>
                </center>
            </div>
            <div class="col-md-2">
                <center>
                    <a href="kontakt.php"><font color="gray"><h4>Kontakt</h4></font></a>
                </center>
            </div>
            <div class="col-md-1"></div>
        </div>
        </br></br>

        <form action="rezerwacja.php" method="post">

<?php

if(isset($_POST['produkt_1'])){
    echo '';
    echo "<div class='row'>
            <div class=\"col-md-5 offset-2 \">
            <img src=\"modele/1.jpg\" class=\"img-thumbnail\">
                        <center>
                            <h5>Aston Martin DB9</h5>
                        </center>
                    </div>
                    <input type=\"hidden\" name=\"produkt\" value='1'>";

}
if(isset($_POST['produkt_2'])){
    echo "<div class='row'>
            <div class=\"col-md-5 offset-2 \">
            <img src=\"modele/2.jpg\" class=\"img-thumbnail\">
                        <center>
                            <h5>Audi R8</h5>
                        </center>
                    </div>
                    <input type=\"hidden\" name=\"produkt\" value='2'>";
}
if(isset($_POST['produkt_3'])){
    echo "<div class='row'>
            <div class=\"col-md-5 offset-2 \">
            <img src=\"modele/3.jpg\" class=\"img-thumbnail\">
                        <center>
                            <h5>BMW	i8</h5>
                        </center>
                    </div>
                    <input type=\"hidden\" name=\"produkt\" value='3'>";
}
if(isset($_POST['produkt_4'])){
    echo "<div class='row'>
            <div class=\"col-md-5 offset-2 \">
            <img src=\"modele/4.jpg\" class=\"img-thumbnail\">
                        <center>
                            <h5>Bugatti	Veyron</h5>
                        </center>
                    </div>
                    <input type=\"hidden\" name=\"produkt\" value='4'>";
}
if(isset($_POST['produkt_5'])){
    echo "<div class='row'>
            <div class=\"col-md-5 offset-2 \">
            <img src=\"modele/5.jpg\" class=\"img-thumbnail\">
                        <center>
                            <h5>Chevrolet Camaro V8</h5>
                        </center>
                    </div>
                    <input type=\"hidden\" name=\"produkt\" value='5'>";
}
if(isset($_POST['produkt_6'])){
    echo "<div class='row'>
            <div class=\"col-md-5 offset-2 \">
            <img src=\"modele/5.jpg\" class=\"img-thumbnail\">
                        <center>
                            <h5>Ferrari	488 GTB</h5>
                        </center>
                    </div>
                    <input type=\"hidden\" name=\"produkt\" value='6'>";
}
if(isset($_POST['produkt_7'])){
    echo "<div class='row'>
            <div class=\"col-md-5 offset-2 \">
            <img src=\"modele/7.jpg\" class=\"img-thumbnail\">
                        <center>
                            <h5>Lamborghini	Aventador</h5>
                        </center>
                    </div>
                    <input type=\"hidden\" name=\"produkt\" value='7'>";
}
if(isset($_POST['produkt_8'])){
    echo "<div class='row'>
            <div class=\"col-md-5 offset-2 \">
            <img src=\"modele/8.jpg\" class=\"img-thumbnail\">
                        <center>
                            <h5>Maserati Ghibli</h5>
                        </center>
                    </div>
                    <input type=\"hidden\" name=\"produkt\" value='8'>";
}
if(isset($_POST['produkt_9'])){
    echo "<div class='row'>
            <div class=\"col-md-5 offset-2 \">
            <img src=\"modele/9.jpg\" class=\"img-thumbnail\">
                        <center>
                            <h5>Ford GT</h5>
                        </center>
                    </div>
                    <input type=\"hidden\" name=\"produkt\" value='9'>";
}



?>


        <div class='col-md-3 '>
            </br>
            <input type='text' name="imie" placeholder='Imie' size="30">
            </br></br>
            <input type='text' name="nazwisko" placeholder='Nazwisko' size="30">
            </br></br>
            <input type='email' name="e_mail" placeholder='e-mail' size="30">
            </br></br>
            <input type="number" name="nr_tele" placeholder="tele.">
            </br></br>
            Data : <input type="date" name="data">
            </br></br>
            Godzina : <select name="godzina" >
                <option>8:00</option>
                <option>9:30</option>
                <option>11:00</option>
                <option>12:30</option>
                <option>14:00</option>
                <option>15:30</option>
                <option>17:00</option>
            </select>
            <select name="opcja" >
                <option>1 przejazd</option>
                <option>3 przejazdy</option>
                <option>1 godzina</option>
            </select>
        </div>
    </div>
            <div class="row">
                <div class="col-md-12"></br></br></div>
            </div>
            <div class="row">
                <div class="col-md-12"><center><input type="submit" name="buy" value="kupuje" class="btn btn-outline-secondary"></center></div>
                </br></br></br>
                <div class="col-md-12"><center>2018 Auto wypożyczalnia adres@email.com</center></div>
            </div>
        </div>
</form>
</body>
</html>
