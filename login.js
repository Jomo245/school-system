// =====================
// ELEMENTS
// =====================
const loginContainer = document.getElementById("loginContainer");
const registerContainer = document.getElementById("registerContainer");
const forgotContainer = document.getElementById("forgot_password");


const registerLink = document.getElementById("registerLink");
const forgotPasswordLink = document.getElementById("forgotPasswordLink");
const backToLoginFromRegister = document.getElementById("backToLoginFromRegister");

// FORM
const registerForm = document.getElementById("register_Form");
const register_error_message = document.getElementById("register_error_message");


const forgotForm = document.getElementById("forgot");
const forgotPasswordMessage = document.getElementById("forgotPasswordMessage");


const loginForm= document.getElementById("loginForm");
const loginErrorMessage = document.getElementById("Login_error_Message");


// =====================
// INITIAL STATE
// =====================
registerContainer.style.display = "none";
forgotContainer.style.display = "none";

// =====================
// NAVIGATION (FIXED)
// =====================

// Go to Register
registerLink.addEventListener("click", function (e) {
  e.preventDefault();
  loginContainer.style.display = "none";
  registerContainer.style.display = "flex";
  forgotContainer.style.display = "none";
});

// Go to Forgot
forgotPasswordLink.addEventListener("click", function (e) {
  e.preventDefault();
  loginContainer.style.display = "none";
  registerContainer.style.display = "none";
  forgotContainer.style.display = "flex";
});

// Back to Login
backToLoginFromRegister.addEventListener("click", function (e) {
  e.preventDefault();
  loginContainer.style.display = "flex";
  registerContainer.style.display = "none";
  forgotContainer.style.display = "none";
});

// =====================
// REGISTER VALIDATION (CLEAN)
// =====================
registerForm.addEventListener("submit", function (e) {

  let fullname = document.getElementById("fullname").value.trim();
  let username = document.getElementById("reg_username").value.trim();
  let email = document.getElementById("reg_email").value.trim();
  let index = document.getElementById("reg_index").value.trim();
  let password = document.getElementById("reg_password").value.trim();
  let confirmPassword = document.getElementById("confirm_password").value.trim();
  let role = document.getElementById("reg_role").value;

  register_error_message.textContent = "";

  // USERNAME
  if (username === "") {
    return showError(e, "Username is required");
    register_error_message.textContent = "Username is required";
    register_error_message.style.color = "red";

    setTimeout(() => {
      register_error_message.textContent = "";
    }, 3000);

  }

  // INDEX
  if (index === "") {
    return showError(e, "Index number is required");
    register_error_message.textContent = "Index number is required";
    register_error_message.style.color = "red";

    setTimeout(() => {
      register_error_message.textContent = "";
    }, 3000);
  }

  if (!/^[0-9]+$/.test(index)) {
    return showError(e, "Index must contain only numbers");
    register_error_message.textContent = "Index must contain only numbers";
    register_error_message.style.color = "red";

    setTimeout(() => {
      register_error_message.textContent = "";
    }, 3000);

  }

  // EMAIL
  if (email === "") {
    return showError(e, "Email is required");
    register_error_message.textContent = "Email is required";
    register_error_message.style.color = "red";

    setTimeout(() => {
      register_error_message.textContent = "";
    }, 3000);
  }

  if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
    return showError(e, "Please enter a valid email address");
    register_error_message.textContent = "Please enter a valid email address";
    register_error_message.style.color = "red";

    setTimeout(() => {
      register_error_message.textContent = "";
    }, 3000);
  }

  // PASSWORD
  if (password === "") {
    return showError(e, "Password is required");
    register_error_message.textContent = "Password is required";
    register_error_message.style.color = "red";

    setTimeout(() => {
      register_error_message.textContent = "";
    }, 3000);
  }

  if (password.length < 6) {
    return showError(e, "Password must be at least 6 characters");
  }

  if (!/[A-Z]/.test(password)) {
    return showError(e, "Password must contain at least one uppercase letter");
    register_error_message.textContent = "Password must contain at least one uppercase letter";
    register_error_message.style.color = "red";

    setTimeout(() => {
      register_error_message.textContent = "";
    }, 3000);
  }

  if (!/[a-z]/.test(password)) {
    return showError(e, "Password must contain at least one lowercase letter");
    register_error_message.textContent = "Password must contain at least one lowercase letter";
    register_error_message.style.color = "red";

    setTimeout(() => {
      register_error_message.textContent = "";
    }, 3000);

  }

  if (!/[0-9]/.test(password)) {
    return showError(e, "Password must contain at least one number");
    register_error_message.textContent = "Password must contain at least one number";
    register_error_message.style.color = "red";

    setTimeout(() => {
      register_error_message.textContent = "";
    }, 3000);
  }

  // CONFIRM PASSWORD
  if (confirmPassword === "") {
    return showError(e, "Please confirm your password");
    register_error_message.textContent = "Please confirm your password";
    register_error_message.style.color = "red";

    setTimeout(() => {
      register_error_message.textContent = "";
    }, 3000);
  }

  if (password !== confirmPassword) {
    return showError(e, "Passwords do not match");
    register_error_message.textContent = "Passwords do not match";
    register_error_message.style.color = "red";

    setTimeout(() => {
      register_error_message.textContent = "";
    }, 3000);
  }

  // ROLE
  if (role === "") {
    return showError(e, "Please select a role");
  }

});

// =====================
// ERROR FUNCTION (CLEAN)
// =====================
function showError(e, message) {
  e.preventDefault();
  register_error_message.textContent = message;
  register_error_message.style.color = "red";

  setTimeout(() => {
    register_error_message.textContent = "";
  }, 3000);
}



// =====================
// LOGIN VALIDATION (CLEAN)
// =====================
loginForm.addEventListener("submit", function (e) {

  let username = document.getElementById("login_us").value.trim();
  let index = document.getElementById("login_index").value.trim();
  let password = document.getElementById("login_pass").value.trim();
  let role = document.getElementById("login_role").value; 

  loginErrorMessage.textContent = "";

  // USERNAME
  if (username === "") {
    return showLoginError(e, "Username is required");
    loginErrorMessage.style.color = "red";

    setTimeout(() => {
      loginErrorMessage.textContent = "";
    }, 3000);
  }

  // INDEX
  if (index === "") {
    return showLoginError(e, "Index number is required");
    loginErrorMessage.style.color = "red";

    setTimeout(() => {
      loginErrorMessage.textContent = "";
    }, 3000);
  }

  if (!/^[0-9]+$/.test(index)) {
    return showLoginError(e, "Index must contain only numbers");
    loginErrorMessage.style.color = "red";

    setTimeout(() => {
      loginErrorMessage.textContent = "";
    }, 3000);
  }

  // PASSWORD
  if (password === "") {
    return showLoginError(e, "Password is required");
    loginErrorMessage.style.color = "red";

    setTimeout(() => {
      loginErrorMessage.textContent = "";
    }, 3000);
  }

  if (password.length < 6) {
    return showLoginError(e, "Password must be at least 6 characters");
    loginErrorMessage.style.color = "red";

    setTimeout(() => {
      loginErrorMessage.textContent = "";
    }, 3000);
  }

  // ROLE
  if (role === "") {
    return showLoginError(e, "Please select a role");
    loginErrorMessage.style.color = "red";

    setTimeout(() => {
      loginErrorMessage.textContent = "";
    }, 3000);
  }

  else{
    loginErrorMessage.textContent = "Login successful!";
    loginErrorMessage.style.color = "green";
  }
})


function showLoginError(e, message) {
  e.preventDefault();
  loginErrorMessage.textContent = message;
  loginErrorMessage.style.color = "red";
  setTimeout(() => {
    loginErrorMessage.textContent = "";
  }, 3000);
}


// =====================
// FORGOT PASSWORD VALIDATION (CLEAN)
// =====================
forgotForm.addEventListener("submit", function (e) {
  let email = document.getElementById("forgot_email").value.trim();

  forgotPasswordMessage.textContent = "";

  if (email === "") {
    return showForgotError(e, "Email is required");
    forgotPasswordMessage.style.color = "red";

    setTimeout(() => {
      forgotPasswordMessage.textContent = "";
    }, 3000);
  } 
  else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
    return showForgotError(e, "Please enter a valid email address");
    forgotPasswordMessage.style.color = "red";
    setTimeout(() => {
      forgotPasswordMessage.textContent = "";
    }, 3000);
  } 

  else {
    forgotPasswordMessage.textContent = "Password reset link sent to your email!";
    forgotPasswordMessage.style.color = "green";

    setTimeout(() => {
      forgotPasswordMessage.textContent = "";
    }, 6000);
  }
});

function showForgotError(e, message) {
  e.preventDefault();
  forgotPasswordMessage.textContent = message;
  forgotPasswordMessage.style.color = "red";
  setTimeout(() => {
    forgotPasswordMessage.textContent = "";
  }, 3000);
}