<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dobrocsi_kornel_fenntarthatóság</title>
</head>
<body>
        <main>
        <div>
            <img src="images.jpg" alt="">
        </div>
        <div>
        <h1>"Fentarthatóság napja"</h1>
            <?php
            
            $elsoSzint="Ökoszsisztéma";
            $masodikSzint="társadalom";
            $harmadikSzint="Gazdaság";
            $negyedikSzint="pénz";
            $szoveg=["A megújuló erőforrások fogyasztása","A környezet helyzete","Fenntarthatóság"];
            $szoveg2=["több, mint amit a természet újratermelni képes","a környezet pusztul","nem fenntartható"];
            $szoveg3=["a természet újratermelő kapacitásával azonos mértékű","környezeti egyensúly","fenntartható, nem változó állapot"];
            $szoveg4=["kevesebb, mint amit a természet újratermelni képes","a környezet megújul","fenntartható fejlődés"];
            $mind=[$szoveg,$szoveg2,$szoveg3,$szoveg4];
            $id=["elso","masodik","harmadik","negyedik"];
            echo "<ul>";
            echo "<li>$elsoSzint</li>";
            echo '<li>'.$masodikSzint.'</li>';
            echo "<li>$harmadikSzint</li>";
            echo "<li>$negyedikSzint</li>"; 
            echo "</ul>";
            ?>
        </div>
        </main>
        <?php
        echo "<table class='tablazat'>";
        for ($i=0; $i < 3; $i++) {
            for ($x=0; $x < 4 ; $x++) { 
                $tarolo=$mind[$x];
                echo "<td>$tarolo[$i]</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
</body>
</html>