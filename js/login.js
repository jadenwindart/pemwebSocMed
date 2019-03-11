$('#register').submit(function(event){
    event.preventDefault();
    var email = $('#email').val();
    var password = $('#password').val();
    if(password != $('#cpassword').val()){
        $('#alert').text("Your Password Must Be The Same"); 
        return -1;
    }
    var firstName = $('#firstName').val();
    var lastName = $('#lastName').val();
    var data = "action=register&email=" + email + "&" +
            "password=" + password + "&" +
            "firstName=" + firstName + "&" +
            "lastName=" + lastName;
    $.post("php/authentication.php",data,function(response){
        alert(response);
    });
})