$('#register').submit(function(event){
    var password = $('#password').val();
    if(password != $('#cpassword').val()){
        alert("in");
        event.preventDefault();
        $('#alert').text("Your Password Must Be The Same"); 
    }
})