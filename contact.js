//VARIABLE DECLARATIONS
const contactForm = document.getElementById('contact_form');
const error_message = document.getElementById('error_message');

contactForm.addEventListener("submit", function(e) {
  let fullname =document.getElementById("fullname").value.trim();
  let email = document.getElementById("email").value.trim();
  let phone = document.getElementById("phone").value.trim();
  let message = document.getElementById("message").value.trim();



if(fullname=="" || email=="" || phone=="" || message==""){
  e.preventDefault();
  error_message.innerHTML ="All fields required";
  error_message.style.color = "red";

  setTimeout(function(){
    error_message.innerHTML="";
  }, 5000 );
}

else if(!email.includes("@") || !email.includes(".") || email.startsWith("@") || email.endsWith("@") || email.startsWith(".") || email.endsWith(".")){
  e.preventDefault();
  error_message.innerHTML ="Invalid email address";
  error_message.style.color = "red";

  setTimeout(function(){
    error_message.innerHTML="";
  }, 5000 );
}

else if(phone.length < 10 || phone.length > 15 || !/^\d+$/.test(phone)){
  e.preventDefault();
  error_message.innerHTML ="Invalid phone number";
  error_message.style.color = "red";

  setTimeout(function(){
    error_message.innerHTML="";
  }, 5000 );
}

else if(message.length < 10 || message.length > 1000){
  e.preventDefault();
  error_message.innerHTML ="Message must be between 10 and 1000 characters";
  error_message.style.color = "red";

  setTimeout(function(){
    error_message.innerHTML="";
  } , 5000 );
}

else{
  error_message.innerHTML ="message sent successfully"
  error_message.style.color = "green"

  setTimeout(function(){
    error_message.innerHTML="";
  }, 5000);
}
}
)
