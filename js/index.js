$(document).on('submit','#userForm',function(e){
                        e.preventDefault();
                        $.ajax({
                        method:"POST",
                        url: "php/index.php",
                        data:$(this).serialize(),
                        success: function(data){
                          if(data="Successful")
                          {
                            alert("Profile creation Successful");
                            localStorage.setItem("status", "out");
                            window.location.href = 'login.html';
                          }
                          else if(data="Unsuccessful")
                          {
                            alert("Profile creation Unsuccessful");
                          }
                          console.log(data);
                        // $('#msg').html(data);
                        $('#userForm').find('input').val('')}
                      });
                });
