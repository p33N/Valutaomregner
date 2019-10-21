<?php
    $url = "https://www.nationalbanken.dk/_vti_bin/DN/DataService.svc/CurrencyRatesXML?lang=da";
    $xml = simplexml_load_file($url);
    // Selects the Currency child from daily rates
    $long = count( $xml->dailyrates->children());
    // Selects the attributes from the Currency objects. 
    $ling = $xml->dailyrates->currency->children();

    // For each returned currency, it returns a currency name and a value of the rate.
    foreach ($xml->dailyrates as $x) {
        for( $i = 0; $i < $long  ; $i++  ){
                echo "<option value='". $x->currency[$i]["rate"]. "'> ". $x->currency[$i]["desc"]. " </option>";
        }
    }
?>