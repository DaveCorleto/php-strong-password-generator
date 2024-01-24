<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Link Css  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Link Bootstrap -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP STRONG PASSWORD GENERATOR</title>
</head>
<body class="bg-info">
<!-- ## Todo
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

### Milestone 1
Creare un form che invii in `GET` la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una *password casuale* (composta da lettere minuscole, lettere maiuscole, numeri e simboli) da restituire all'utente.
Scriviamo tutto (logica e layout) in un unico file `index.php`. -->

    <header>
    <form>

        <div class="form-group">
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
        </div>

        <div class="submit-button">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>

        <div class="gen-pass"> <php? [$newPassword] ?> </div>

    </header>

    <?php
                

        // Questa parte serve per trasmettere la lunghezza della password digitata nel form e salvarla in $lunghezzaPassword

        if(isset($_GET["password"])) {
            $password = $_GET["password"];
            $lunghezzaPassword = strlen($password);
    
            if ($lunghezzaPassword > 0) {
                echo "<h1>" . "La lunghezza della password è di " . $lunghezzaPassword . " caratteri" . "</h1>";
            } else {
                echo "<h1>" . "La password è vuota" . "</h1>";
            }
        } else {
            echo "<h1>" . "La password non è stata fornita" . "</h1>";
        }

        // ora uso $lunghezzaPassword per generare una password randomica che verrà mostrata nel div.gen-pass
        // Scrivo la funzione generaPassword

        function generaPassword ($lunghezzaPassword){
            // Stringa di caratteri da cui generare la parola
                $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+[]{}|;:,.<>?';
                $caratteriMiscelati = str_shuffle ($caratteri);
                return = substr ($caratteriMiscelati, 0, $lunghezzaPassword);
            }
    

        // Verifico se il form è stato inviato 

        if ($lunghezzaPassword >0) {
            $newPassword = generaPassword();
        } 
        else {
            $newPassword = "Non è stata generata ancora nessuna password";
        }

    ?>

</body>
</html>