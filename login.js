
    // VARIABLE DECLARATIONS 

    const form = document.getElementById("loginForm");
    const errorMessage = document.getElementById("errorMessage");


    const registerLink = document.getElementById("registerLink");
    const forgotPasswordLink = document.getElementById("forgotPasswordLink");

    const loginContainer = document.getElementById("loginContainer");
    const forgotContainer = document.getElementById("forgot_password");

    const registerForm = document.getElementById("registerContainer");
    const backToLoginFromRegister = document.getElementById("backToLoginFromRegister");
    const backToLoginFromForgot = document.getElementById("backToLoginFromForgot"); 


    form.addEventListener("submit", function (e) {
      let username = document.getElementById("username").value.trim();
      let index = document.getElementById("index").value.trim();
      let password = document.getElementById("password").value.trim();
      let role = document.getElementById("role").value;

      // Clear previous error
      errorMessage.textContent = "";

      // Validation checks
      if (username === "") {
        e.preventDefault();
        errorMessage.textContent = "Username is required";
        errorMessage.style.color = "red";
        setTimeout(() => {
          errorMessage.textContent = "";
        }, 3000); // Clear error after 3 seconds
        return;
      }

      if (index === "") {
        e.preventDefault();
        errorMessage.textContent = "Index number is required";
        errorMessage.style.color = "red";

        setTimeout(()=>{
          errorMessage.textContent = "";
        }, 3000); // Clear error after 3 seconds
        return;
      }

      // Optional: enforce numbers only for index
      if (!/^[0-9]+$/.test(index)) {
        e.preventDefault();
        errorMessage.textContent = "Index must contain only numbers";
        errorMessage.style.color = "red";

        setTimeout(() => {
          errorMessage.textContent = "";
        }, 3000); // Clear error after 3 seconds
        return;
      }


      if (password === "") {
        e.preventDefault();
        errorMessage.textContent = "Password is required";
        errorMessage.style.color = "red";
          setTimeout(() => {  
            errorMessage.textContent = "";
          }, 3000); // Clear error after 3 seconds
        return;
      }

      if (password.length < 6) {
        e.preventDefault();
        errorMessage.textContent = "Password must be at least 6 characters";
        errorMessage.style.color = "red";

        setTimeout(() => {
          errorMessage.textContent = "";
        }, 3000); // Clear error after 3 seconds
        return;
      }


      if (role === "") {
        e.preventDefault();
        errorMessage.textContent = "Please select a role";
        errorMessage.style.color = "red";
        setTimeout(() => {
          errorMessage.textContent = "";
        }, 3000); // Clear error after 3 seconds
        return;
      }


    });

    forgotPasswordLink.addEventListener("click", function (e) {
      e.preventDefault();
      loginContainer.style.display = "none"; // Hide login form
      forgotContainer.style.display = "flex"; // Show forgot password form
      registerForm.style.display = "none"; // Hide register form
    });

    registerLink.addEventListener("click", function (e) {
      e.preventDefault();

      registerForm.style.display = "flex"; // Show register form
      forgotContainer.style.display = "none"; // Hide forgot password form
      loginContainer.style.display = "none"; // Hide login form
    });

    backToLoginFromRegister.addEventListener("click", function (e) {
      e.preventDefault();
      registerForm.style.display = "none";
      forgotContainer.style.display = "none";
      loginContainer.style.display = "flex";
    });

    backToLoginFromForgot.addEventListener("click", function (e) {
      e.preventDefault();
      forgotContainer.style.display = "none";
      registerForm.style.display = "none";
      loginContainer.style.display = "flex";
    });


  