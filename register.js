// console.log("HELLO");
function showpwd()
{
  document.getElementById("pwd").type="text";
}
function showcpwd()
{
  document.getElementById("cpwd").type="text";
}
$(document).on('submit','#userForm',function(e){
                        e.preventDefault();
                       var email = document.getElementById("email").value;
                       var pwd = document.getElementById("pwd").value;
                       var cpwd = document.getElementById("cpwd").value;
                       console.log(email);
                        $.ajax({
                        method:"POST",
                        url: "php/register.php?email="+email+"&pass="+pwd+"&cpass="+cpwd,
                        data:$(this).serialize(),
                        success: function(data){
                          if(data=="password doesn't match")
                          {
                            alert("password doesn't match");
                          }
                          else if(data="Successful")
                          {
                            alert("Account creation Successful");
                            window.location.href = 'login.html';
                          }
                          else if(data="Unsuccessful")
                          {
                            alert("Account creation Unsuccessful");
                          }
                        // $('#msg').html(data);
                        $('#userForm').find('input').val('')}
                      });
                });