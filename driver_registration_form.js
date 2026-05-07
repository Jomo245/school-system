//  VARIABLES DECLARATION

const registration_form=document.getElementById("driver_registration");
const error_message=document.getElementById("error_message");

registration_form.addEventListener("submit",  function (e){
  let full_name=document.getElementById("full_name").value.trim();
  let date_of_birth=document.getElementById("dob").value.trim();
  let gender=document.querySelector('input[name="gender"]:checked');
  let postal_address=document.getElementById("postal_address").value.trim();
  let birth_certificate=document.getElementById("birth_certificate").value.trim();
  let email=document.getElementById("email").value.trim();    
  let phone_number=document.getElementById("phone").value.trim();
  let confirm=document.getElementById("confirm").checked;

  if(full_name=="" || date_of_birth=="" || !gender || postal_address=="" || birth_certificate=="" || email=="" || phone_number=="" || !confirm){
    e.preventDefault();
    error_message.innerHTML="Please fill in all the required fields.";
    error_message.style.color="red";  

    setTimeout(function() {
      error_message.innerHTML = "";
    }, 5000);
  } 

  else if(!email.includes("@") || !email.includes(".") || email.startsWith("@") || email.endsWith("@") || email.startsWith(".") || email.endsWith(".")){
    e.preventDefault();
    error_message.innerHTML="Please enter a valid email address.";
    error_message.style.color="red";  

    setTimeout(function() {
      error_message.innerHTML = "";
    }, 5000);
  }

  else if(!confirm){
    e.preventDefault();
    error_message.innerHTML="Please confirm that the information provided is accurate.";
    error_message.style.color="red";  

    setTimeout(function() {
      error_message.innerHTML = "";
    }, 5000);
  }

  else{
    e.preventDefault();
    error_message.innerHTML="Registration successful!";
    error_message.style.color="green";  

    setTimeout(function() {
      error_message.innerHTML = "";
    }, 5000); 
}
}

);

