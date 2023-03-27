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
            $szoveg5=["A megújuló erőforrások fogyasztása","több, mint amit a természet újratermelni képes","a természet újratermelő kapacitásával azonos mértékű","kevesebb, mint amit a természet újratermelni képes"];
            $szoveg6=["A környezet helyzete","a környezet pusztul","környezeti egyensúly","a környezet megújul"];
            $szoveg7=["Fenntarthatóság","nem fenntartható","fenntartható, nem változó állapot","fenntartható fejlődés"];
            $mind2=[$szoveg5,$szoveg6,$szoveg7];
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
        for ($i=0; $i < 4; $i++) {
            for ($x=0; $x < 3 ; $x++) { 
                $tarolo=$mind2[$x];
                if ($i==0) {
                    echo "<td id='bold'>$tarolo[$i]</td>";
                }
                else{
                    echo "<td>$tarolo[$i]</td>";
                }
                    
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
</body>
</html>