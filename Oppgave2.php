<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Oblig 1 - Oppgave 2</title>
    </head>

    <body>

        <h3>Oppgave 2</h3>

        <p> Gitt tallrekken: 1,4,8,1,4,10,5,6,2,4,6. Opprett et array for denne rekken av tall. Bruk så dette arrayet til:</br>
            a) Skriv ut alle tallene som er over 5.</br>
            b) Tell opp hvor mange tall som er over 5 og vis dette.</br>
            c) Liste ut tallene baklengs.</br>
            d) Finn det minste tallet ved en løkke. Skriv så tallet ut.</br>
            e) Finn det minste tallet ved en PHP funksjon. Skriv så tallet ut.</br>
            f) Lag så egendefinerte funksjoner med en innparameter for oppgave a) og b).</br>
            Parameteren inn skal angi tallet som skal testes på i oppgavene.</br>
            Funksjonene skal returnere verdier (tips, bruk et array i oppgave a).</br> </p>

        <?php
        $tall = array(1, 4, 8, 1, 4, 10, 5, 6, 2, 4, 6);

        echo "<h5>a) Tall større enn 5 i arrayet</h5>";
        foreach ($tall as $value) {
            if ($value > 5) {
                echo $value . " ";
            }
        }


        echo "<h5>b) Hvor mange tall er større enn 5 i arrayet</h5>";
        $a = 0;
        foreach ($tall as $value) {
            if ($value > 5) {
                $a++;
            }
        }
        echo "Tabellen inneholder " . $a . " tall som er større enn 5.</br>";


        echo "<h5>c) Arrayen i omvendt rekkefølge</h5>";
        for ($j = count($tall) - 1; $j >= 0; $j--) {
            echo $tall[$j] . " ";
        }


        echo "<h5>d) Minste tallet i arreyen ved hjelp av løkke</h5>";
        $n = $tall[rand(0, count($tall) - 1)];
        for ($i = 0; $i < count($tall); $i++) {
            if ($n > $tall[$i]) {
                $n = $tall[$i];
            }
        }
        echo "Minste tall i arreyen er " . $n;


        echo "<h5>e) Minste tallet i arreyen ved hjelp av PHP-funksjon</h5>";
        echo "En enklere måte å finne minste tallet på er ved funksjonen min(Array) som gir " . min($tall) . " i dette tilfellet.";


        echo "<h5>f) Egne funksjoner for oppgave a) og b)</h5>";
        $in = 6;

        function biggerThan($in) {
            $tall = array(1, 4, 8, 1, 4, 10, 5, 6, 2, 4, 6);
            foreach ($tall as $value) {
                if ($value > $in) {
                    echo $value . " ";
                }
            }
        }

        echo "Verdiene større enn en gitt innverdi, i dette tilfelle " . $in . ", gir</br>";
        biggerThan($in);
        echo "</br>";

        function numberBiggerThan($in) {
            $b = 0;
            $tall = array(1, 4, 8, 1, 4, 10, 5, 6, 2, 4, 6);
            foreach ($tall as $value) {
                if ($value > $in) {
                    $b++;
                }
            }
            return $b;
        }

        echo "Tabellen inneholder " . numberBiggerThan($in) . " tall som er større enn " . $in . "</br>";
        ?>
    </body>
</html>
