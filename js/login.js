if(localStorage.getItem("status")=="logged")
{
  window.location.href = 'profile.html';
}
// console.log(localStorage.getItem("email"));
function showpwd()
{
  document.getElementById("pwd").type="text";
}
// console.log("HELLO");
$(document).on('submit','#userForm',function(e){
                        e.preventDefault();
                       var email = document.getElementById("email").value;
                       var pwd = document.getElementById("pwd").value;
                       console.log(email);
                        $.ajax({
                        method:"POST",
                        url: "php/login.php?email="+email+"&pass="+pwd,
                        data:$(this).serialize(),
                        success: function(data){
                          // console.log(data);
                          if(data=="password is wrong")
                          {
                            alert("Password is wrong");
                          }
                          else if(data=="Successful")
                          {
                            localStorage.setItem("email", email);
                            localStorage.setItem("status", "logged");
                            window.location.href = 'index.html';
                          }
                          else
                          {
                            alert("Email is wrong");
                          }
                        // $('#msg').html(data);
                        $('#userForm').find('input').val('')}
                      });
                });
