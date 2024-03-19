<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <h2>Array Terindeks</h2>
        <?php
        $Listdosen=["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];

        $total_dosen = count($Listdosen);
        for ($i = 0; $i < $total_dosen; $i++) {
            echo $Listdosen[$i] . "<br>";
        }
        echo $Listdosen[2] . "<br>";
        echo $Listdosen[0] . "<br>";
        echo $Listdosen[1] . "<br>";
        ?>
    </body>
</html>