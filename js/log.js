$(document).ready(function(){
    $( "#toggle_log" ).click(function() {
        $( "#log_in" ).toggleClass("log_display_a log_display_b")
        console.log("ss")
    });
    
    $( "#toggle_sign" ).click(function() {
        $( "#sign_in" ).toggleClass("log_display_a log_display_b")
    });

    $( "#file_hook" ).click(function() {

        $( "#file_hook" ).toggleClass("fileUpload fileUpload2")
    });

    
});
function validateForm() {
    let tytul = document.forms["upload_form"]["title"].value;
    let opis = document.forms["upload_form"]["description"].value;
    let plik = document.forms["upload_form"]["image"].value;
    let kat1 = document.forms["upload_form"]["chceck-smieszne"].checked;
    let kat2 = document.forms["upload_form"]["chceck-Krajobraz"].checked;
    let kat3 = document.forms["upload_form"]["chceck-sztuka"].checked;
console.log(kat1);
    if (tytul == "") {
      alert("Pole tytuł musi mieć wartość");
      return false;
    }
    if (opis == "") {
        alert("Pole opis musi mieć wartość");
        return false;
    }
    if (plik == "") {
        alert("Nie dodano zdjęcia");
        return false;
    }
    if (kat1 == false && kat2 == false && kat3 == false) {
        alert("Nie wybrano kategorii");
        return false;
    }
    return true;
  }