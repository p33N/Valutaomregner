$(document).ready(function() {
        // Creates request and readies it for use. 
    var xhttp2 = new XMLHttpRequest();
        xhttp2.onreadystatechange = function() {
            // If there's a proper connection, the if statement runs through. 
            if (this.readyState==4 && this.status == 200) {
                // Attach the list of currencies to the <select> HTML tag with the Id Currency
                document.getElementById("currency").innerHTML = this.responseText;                
            }
        }
        // Sends HTTP request to the specified PHP file and collects the data from Nationalbanken.dk
        xhttp2.open("GET", "selectoptions.php", true);
        xhttp2.send();
    
    $(".kurs").click(function () {
        $("#valutas").empty();
        var xhttp =  new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState==4 && this.status == 200) {
                // Retrieves list over currency and rates, and prints them to the #valutas tablebody.
                document.getElementById("valutas").innerHTML = this.responseText;
            }
        }
        xhttp.open("GET", "currencyrates.php", true);
        xhttp.send();
    });    

    $("#udregn1").click(function() {
        // Retrieves type of currency and amount wanted.
        var rate = $("#currency").val();
        var amount = $("#amount").val();
        // Parses rate to a readable float
        var ratef = parseFloat(rate);
        // Reduces rate to a proper amount
        var math1 = ratef / 100;
        // Multiplying modified rate with the amount
        var math2 = math1 * amount;
        // Appends the math result to the span designated for it.
        document.getElementById("result").innerHTML = math2 + " DKK";

    });
});