/*  VARIABLE DECLARATIONS */
const loginForm = document.getElementById("loginForm");
const adminLogin = document.getElementById("adminLogin");
const roleLinks = document.querySelectorAll('.role a');
const registerLink = document.getElementById("registerLink");
const username= document.getElementById("username");
const pass= document.getElementById("password");
const adminUser= document.getElementById("admin_username");
const adminPass= document.getElementById("admin_password");
const loginContainer = document.getElementById("loginContainer");
const adminContainer = document.getElementById("adminContainer");
const registration=document.getAnimations("registration_tow_container")
const errorMessage = document.getElementById("errorMessage");

/* registration link is only present in login.php, so we check if it exists before adding event listener 

if  (registerLink) {
    registerLink.addEventListener('click', (e) => {
        e.preventDefault();
        window.location.href = "register_form";
    });
}

*/

/********** EVENT LISTENERS **********/


roleLinks.forEach(link => {
  link.addEventListener('click', (e) => {
    e.preventDefault();
    if ( link.id === "adminLink") {
         loginContainer.style.display = "none";
          registration.style.display="none";
          adminContainer.style.display = "block";
    }

    if  (link.id === "registerLink") {
          adminContainer.style.display = "none";
          loginContainer.style.display = "none";
          registration.style.display="block";
        }
       
    
else if (link.id === "userLink") {
         adminContainer.style.display = "none";
        
         loginContainer.style.display = "block";
        }

  });
});


if(loginForm){
    loginForm.addEventListener("submit", (e) => {
    e.preventDefault();
    const usernameValue = username.value.trim();
    const passwordValue = pass.value.trim();  

    if (usernameValue === "" || passwordValue === "") {
        errorMessage.innerHTML= "Please fill in all fields.";
        errorMessage.style.color = "#721c24";
    } 
    else {
      loginForm.submit();
    } 
  });
}

if(adminLogin){
  adminLogin.addEventListener("submit", (e) => {
    e.preventDefault();
    const adminUserValue = adminUser.value.trim();
    const adminPassValue = adminPass.value.trim();  
  

    if (adminUserValue === "" || adminPassValue === "") {
        errorMessage.innerHTML= "Please fill in all fields.";
        errorMessage.style.color = "#721c24";
    }
     else {
      adminLogin.submit();
    }   
  });
}