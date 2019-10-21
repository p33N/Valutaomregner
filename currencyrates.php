<?php

$url = "https://www.nationalbanken.dk/_vti_bin/DN/DataService.svc/CurrencyRatesXML?lang=da";
$xml = simplexml_load_file($url);
// Selects the currency object from dailyrates 
$long = count( $xml->dailyrates->children()) ;
// Selects currency attributes from currency object
$ling = $xml->dailyrates->currency->children() ; 

// For each currency in daily rates, the code returns a table row containing all the data from each currency.
foreach ($xml->dailyrates as $x) {
    for( $i = 0; $i < $long  ; $i++  ){
            echo "<tr> <td>". $x->currency[$i]["code"]. "</td> " ; 
            echo "<td>". $x->currency[$i]["desc"]. "</td> " ; 
            echo "<td value='$i'>". $x->currency[$i]["rate"]. "</td> </tr>" ; 
    }
}

?> 