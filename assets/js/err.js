

var form = document.querySelector('form');
form.addEventListener('submit', function(e) {

    var pageURL = $(location).attr("href");
    if($(location).attr("search") == "?error=emptyinput"){
        alert("Empty Input!");
     }
     if($(location).attr("search") == "?error=name"){
        alert("Invalid Name! Use one word!");
     }
     if($(location).attr("search") == "?error=email"){
        alert("Invalid Email");
     }
     if($(location).attr("search") == "?error=useroremailtaken"){
        alert("This email has already registered!");
     }
    
});
