
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "tiantsoa";

        try {
            $bdd = new PDO("mysql:host=$servername;dbname=car_rent_db", $username, $password);
            $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e) {
            echo "Erreur:" . $e ->getMessage();
        } 
        var_dump("tonga eto");
    ?>