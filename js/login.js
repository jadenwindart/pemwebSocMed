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
    var birthDate = $('#datePicker').val();
    var gender = $("input[name='gender']:checked").val();
    var today = new Date();
    if(birthDate > today){ 
        alert("date is in future");
        return -1;
    }
    var data = "action=register&username=" + username + "&" +
            "password=" + password + "&" +
            "firstName=" + firstName + "&" +
            "lastName=" + lastName + "&" +
            "birthDate=" + birthDate + "&" +
            "gender="+gender;
    $.post("php/authentication.php",data,function(response){
        alert(response);
        location.reload();
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
        location.reload();
    })
})