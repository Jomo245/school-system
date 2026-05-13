// VARIABLE DECLARATION

const registration_form=document.getElementById("registration_form");
const error_message=document.getElementById("error_message");


registration_form.addEventListener("submit",  function (e){
  let full_name=document.getElementById("full_name").value.trim();
  let date_of_birth=document.getElementById("dob").value.trim();
  let gender=document.querySelector('input[name="gender"]:checked');
  let postal_address=document.getElementById("postal_address").value.trim();
  let birth_certificate=document.getElementById("birth_certificate").value.trim();
  let email=document.getElementById("email").value.trim();

  // Parent / Guardian Details

  let guardian=document.getElementById("guardian").value.trim();
  let relationship=document.getElementById("relationship").value.trim();
  let phone_number=document.getElementById("phone").value.trim();
  let guardian_email=document.getElementById("guardian_email").value.trim();


  // Academic Information

  let prev_school=document.getElementById("prev_school").value.trim();
  let kpsea_index=document.getElementById("kpsea_index").value.trim();
  let course_pathway=document.getElementById("course_pathway").value.trim();
  let admission_year=document.getElementById("admission_year").value.trim();


  // Document Uploads

  let my_photo=document.getElementById("my_photo").files.length;
  let birth_cert=document.getElementById("birth_cert").files.length;
  let results_slip=document.getElementById("results_slip").files.length;
  let medical_report=document.getElementById("medical_report").files.length;


  // Declaration
  let confirm=document.getElementById("confirm").checked;
  

  if(full_name=="" || date_of_birth=="" || !gender || postal_address=="" || birth_certificate=="" || email=="" || guardian=="" || relationship=="" || phone_number=="" || guardian_email=="" || prev_school=="" || kpsea_index=="" || course_pathway=="" || admission_year=="" || my_photo==0 || birth_cert==0 || results_slip==0 || medical_report==0 || !confirm){
    e.preventDefault();
    error_message.innerHTML="Please fill in all the required fields.";
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

  else if(!email.includes("@") || !email.includes(".") || email.startsWith("@") || email.endsWith("@") || email.startsWith(".") || email.endsWith(".")){
    e.preventDefault();
    error_message.innerHTML="Please enter a valid email address.";
    error_message.style.color="red";

    setTimeout(function() {
      error_message.innerHTML = "";
    }, 5000);
  }

  else if(!guardian_email.includes("@") || !guardian_email.includes(".") || guardian_email.startsWith("@") || guardian_email.endsWith("@") || guardian_email.startsWith(".") || guardian_email.endsWith(".")){
    e.preventDefault();
    error_message.innerHTML="Please enter a valid email address for the guardian.";
    error_message.style.color="red";

    setTimeout(function() {
      error_message.innerHTML = "";
    }, 5000);
  }

  else if(phone_number.length<10 || phone_number.length>15 || !/^\d+$/.test(phone_number)){
    e.preventDefault();
    error_message.innerHTML="Please enter a valid phone number (10-15 digits).";
    error_message.style.color="red";

    setTimeout(function() {
      error_message.innerHTML = "";
    }, 5000);
  }


  else if(kpsea_index.length<5 || kpsea_index.length>10){
    e.preventDefault();
    error_message.innerHTML="Please enter a valid KPSEA index number (5-10 characters).";
    error_message.style.color="red";

    setTimeout(function() {
      error_message.innerHTML = "";
    }, 5000);
  }

  else if(admission_year.length!=4 || isNaN(admission_year) || admission_year<2000 || admission_year>new Date().getFullYear()){
    e.preventDefault();
    error_message.innerHTML="Please enter a valid admission year (4 digits, between 2000 and the current year).";
    error_message.style.color="red";

    setTimeout(function() {
      error_message.innerHTML = "";
    }, 5000);
  }

  else if(my_photo==0 || birth_cert==0 || results_slip==0 || medical_report==0){
    e.preventDefault();
    error_message.innerHTML="Please upload all the required documents.";
    error_message.style.color="red";

    setTimeout(function() {
      error_message.innerHTML = "";
    }, 5000);
  }


else{ error_message.innerHTML="Form submitted successfully!";
    error_message.style.color="green";}


    setTimeout(function() {
      error_message.innerHTML = "";
    }, 10000);
  } )