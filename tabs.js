$(document).ready(function() {
    $(".calc").click(function() {
        $(".calcbox").css("display", "block");
        $(".kursbox").css("display", "none");
    });
    $(".kurs").click(function() {
        $(".calcbox").css("display", "none");
        $(".kursbox").css("display", "block");
    });
});