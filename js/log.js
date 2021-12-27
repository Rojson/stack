$(document).ready(function(){
    $( "#toggle_log" ).click(function() {
        $( "#log_in" ).toggleClass("log_display_a log_display_b")
        console.log("ss")
    });
    
    $( "#toggle_sign" ).click(function() {
        $( "#sign_in" ).toggleClass("log_display_a log_display_b")
    });
});