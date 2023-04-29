// console.log("HELLO");
// alert("hello");
console.log(localStorage.getItem("email"));
var email = localStorage.getItem("email");
console.log(email);
$.ajax({
method:"POST",
url: "php/profile.php?email="+email,
data:$(this).serialize(),
success: function(data){
  document.getElementsByTagName("body")[0].innerHTML= data;
// $('#msg').html(data);
// $('#userForm').find('input').val('')
}
});