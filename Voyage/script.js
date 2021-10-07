var x = document.getElementById("login");
var y = document.getElementById("register");
var z = document.getElementById("color-botton");

//This function allows me to switch back and fourth from login to signup
function register(){
    x.style.left="-400px";
    y.style.left="50px";
    z.style.left="110px";
  }
function login(){
    x.style.left="50px";
    y.style.left="450px";
    z.style.left="0";
  }
function myFunction() {
  var x = document.getElementById("userPassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
