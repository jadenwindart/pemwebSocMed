$('#register').submit(function(event){
    event.preventDefault();
    var username = $('#username').val();
    var password = $('#password').val();
    if(password != $('#cpassword').val()){
        $('#alert').text("Your Password Must Be The Same"); 
        return -1;
    }
    var firstName = $('#firstName').val();
    var lastName = $('#lastName').val();
    var data = "action=register&username=" + username + "&" +
            "password=" + password + "&" +
            "firstName=" + firstName + "&" +
            "lastName=" + lastName;
    $.post("php/authentication.php",data,function(response){
        alert(response);
    });
})

$('#login').submit(function(event){
    event.preventDefault();
    var username = $('#usernameLogin').val();
    var password = $("#passwordLogin").val();
    alert(username);
    var data = "action=login&username=" + username +"&"+
            "password="+password ;
    $.post("php/authentication.php",data,function(response){
        alert(response);
    })
})