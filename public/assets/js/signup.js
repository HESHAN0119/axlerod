function passwordValidate(){
    var pass_val = document.getElementById("pass").value;
    if(pass_val.length > 0){
        document.getElementById("pass_check").setAttribute("style","display:block");
        if(pass_val.length > 8){
            document.getElementById("inc_char12_0").setAttribute("style","display:inline;color: green");
            document.getElementById("inc_char12_1").setAttribute("style","display:none");
        }else{
            document.getElementById("inc_char12_0").setAttribute("style","display:none");
            document.getElementById("inc_char12_1").setAttribute("style","display:inline;color: red");
        }

        if(/\d/.test(pass_val)){
            document.getElementById("inc_onenumber_0").setAttribute("style","display:inline;color: green");
            document.getElementById("inc_onenumber_1").setAttribute("style","display:none");
        }else{
            document.getElementById("inc_onenumber_0").setAttribute("style","display:none");
            document.getElementById("inc_onenumber_1").setAttribute("style","display:inline;color: red");
        }

        if(/[a-z]/.test(pass_val)){
            document.getElementById("inc_lowercase_0").setAttribute("style","display:inline;color: green");
            document.getElementById("inc_lowercase_1").setAttribute("style","display:none");
        }else{
            document.getElementById("inc_lowercase_0").setAttribute("style","display:none");
            document.getElementById("inc_lowercase_1").setAttribute("style","display:inline;color: red");
        }

        if(/[A-Z]/.test(pass_val)){
            document.getElementById("inc_uppercase_0").setAttribute("style","display:inline;color: green");
            document.getElementById("inc_uppercase_1").setAttribute("style","display:none");
        }else{
            document.getElementById("inc_uppercase_0").setAttribute("style","display:none");
            document.getElementById("inc_uppercase_1").setAttribute("style","display:inline;color: red");
        }
    }else{
        document.getElementById("pass_check").setAttribute("style","display:none");
    }
}

$(document).ready(function() {
    $("#password_notmatched").hide()
    $("#password_matched").hide()
    $( "#cpassword" ).keyup(function() {
        $("#pass_check").hide()
        var password = $("#pass").val()
        var cpassword = $("#cpassword").val()
        
        if (password == cpassword) {
            $("#password_matched").show()
            $("#password_notmatched").hide()
        } else {
            $("#password_matched").hide()
            $("#password_notmatched").show()
        }
    });
})
    