<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Valuta Omregner </title>
        <link rel="stylesheet" type="text/css" href="index.css">
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
        <script src="tabs.js"></script>
        <script src="calculator.js"></script>
    </head>
    <body>
        <nav>
            <span> Valuta Omregner </span>
            <div>
                <a class="calc" href="#calcbox"> Lommeregner </a>
                <a class="kurs" href="#kursbox"> Valutakurser </a>
            </div>
        </nav>
        <main>
            <div class="calcbox">
                <h1> Valuta Lommeregner </h1>
                <p> Skal du på ferie og ved ikke hvor mange penge du skal tage med? Så tjek ind her!</p>
                <p> Indtast mængden af udenlandsk valuta du gerne vil have med på rejsen, og se hvor mange kroner det sætter dig tilbage. </p>
                <input type="number" id="amount">
                <select id="currency">
                    <!-- JS fills Select Box-->
                </select>
                <input type="submit" value="Udregn" id="udregn1">
                <br> <br>
                <span id="result"></span>
            </div>
            <div class="kursbox" hidden>
                <table id="kurstable">
                    <thead>
                        <tr>
                            <th> Landkode </th>
                            <th> Valuta </th>
                            <th> Kurs </th>
                        </tr>
                    </thead>
                    <tr>
                        <td> DKK </td>
                        <td> Danske Kroner </td>
                        <td> 100,00 </td>
                    </tr>
                    <tbody id="valutas" class="valutas">
                        <tr>
                            <td> Don't look at me </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </body>
</html>
