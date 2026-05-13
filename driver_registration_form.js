//  VARIABLES DECLARATION

const driver_registration=document.getElementById("driver_registration");
const error_message=document.getElementById("error_message");

driver_registration.addEventListener("submit",  function (e){
  let full_name=document.getElementById("myname").value.trim();
  let my_id_number=document.getElementById("my_id_number").value.trim();
  let gender=document.querySelector('input[name="gender"]:checked');
  let my_date_of_birth=document.getElementById("my_date_of_birth").value.trim();
  let phone_number=document.getElementById("phone_number").value.trim();
  let email=document.getElementById("my_email").value.trim(); 
  let my_passport=document.getElementById("my_passport").files.length;
  let my_home_address=document.getElementById("my_home_address").value.trim()
  
  //Employment Details

  let employee_id=document.getElementById("employee_id").value.trim();
  let employment_date=document.getElementById("employment_date").value.trim();
  let position=document.getElementById("position").value.trim();
  let status=document.getElementById("status").value.trim();

  //Driver's Credentials

  let driving_license=document.getElementById("driving_license").value.trim();
  let license_expiry=document.getElementById("license_expiry").value.trim();
  let license_category=document.getElementById("license_category").value.trim();
  let vehicle=document.getElementById("vehicle").value.trim();
  let medical_record=document.getElementById("medical_record").files.length;
  let police_clearance=document.getElementById("police_clearance").files.length;



  
  if(full_name=="" || my_id_number=="" || !gender || my_date_of_birth=="" || phone_number=="" || email=="" || phone_number==""|| my_passport==0 || my_home_address=="" || employee_id=="" || employment_date=="" || position=="" || status=="" || driving_license=="" || license_expiry=="" || license_category=="" || vehicle=="" || medical_record==0 || police_clearance==0 ){
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

  else if(phone_number.length<10 || phone_number.length>15 || !/^\d+$/.test(phone_number)){
    e.preventDefault();
    error_message.innerHTML="Please enter a valid phone number (10-15 digits).";
    error_message.style.color="red";

    setTimeout(function() {
      error_message.innerHTML = "";
    }, 5000);
  }

  else if(my_id_number.length<6 || my_id_number.length>20){
    e.preventDefault();
    error_message.innerHTML="ID number must be between 6 and 20 characters.";
    error_message.style.color="red";

    setTimeout(function() {
      error_message.innerHTML = "";
    }, 5000);
  }

  else if(driving_license.length<6 || driving_license.length>20){
    e.preventDefault();
    error_message.innerHTML="Driving license number must be between 6 and 20 characters.";
    error_message.style.color="red";  

    setTimeout(function() {
      error_message.innerHTML = "";
    }, 5000);
  }

  else if(new Date(my_date_of_birth) >= new Date()){
    e.preventDefault();
    error_message.innerHTML="Please enter a valid date of birth.";
    error_message.style.color="red";  

    setTimeout(function() {
      error_message.innerHTML = "";
    }, 5000);
  }

  else if(new Date(employment_date) > new Date()){
    e.preventDefault();
    error_message.innerHTML="Please enter a valid employment date.";
    error_message.style.color="red";  

    setTimeout(function() {
      error_message.innerHTML = "";
    }, 5000);
  }

  else if(new Date(license_expiry) <= new Date()){
    e.preventDefault();
    error_message.innerHTML="Driving license must be valid and not expired.";
    error_message.style.color="red";

    setTimeout(function() {
      error_message.innerHTML = "";
    }, 5000);
  }


  else if(position.toLowerCase()!="driver"){
    e.preventDefault();
    error_message.innerHTML="Position must be 'Driver'.";
    error_message.style.color="red";

    setTimeout(function() {
      error_message.innerHTML = "";
    }, 5000); 
  }


  else if(license_category.toUpperCase()!="D1" && license_category.toUpperCase()!="D2" && license_category.toUpperCase()!="D3"){
    e.preventDefault();
    error_message.innerHTML="License category must be D1, D2, or D3.";
    error_message.style.color="red";  

    setTimeout(function() {
      error_message.innerHTML = "";
    }, 5000);
  }

  else if(my_passport==0){
    e.preventDefault();
    error_message.innerHTML="Please upload a copy of your passport.";
    error_message.style.color="red";  

    setTimeout(function() {
      error_message.innerHTML = "";
    } , 5000);
  }

  else if(medical_record==0){
    e.preventDefault();
    error_message.innerHTML="Please upload a copy of your medical record.";
    error_message.style.color="red";  

    setTimeout(function() {
      error_message.innerHTML = "";
    } , 5000);
  }

  else if(police_clearance==0){
    e.preventDefault();
    error_message.innerHTML="Please upload a copy of your police clearance certificate.";
    error_message.style.color="red";  

    setTimeout(function() {
      error_message.innerHTML = "";
    } , 5000);
  }

else if(my_home_address.length<10 || my_home_address.length>100){
    e.preventDefault();
    error_message.innerHTML="Home address must be between 10 and 100 characters.";
    error_message.style.color="red";  

    setTimeout(function() {
      error_message.innerHTML = "";
    } , 5000);
  }


  else if(employee_id.length<6 || employee_id.length>20){
    e.preventDefault();
    error_message.innerHTML="Employee ID must be between 6 and 20 characters.";
    error_message.style.color="red";  

    setTimeout(function() {
      error_message.innerHTML = "";
    } , 5000);
  }

  else if(position.length<2 || position.length>50){
    e.preventDefault();
    error_message.innerHTML="Position must be between 2 and 50 characters.";
    error_message.style.color="red";

    setTimeout(function() {
      error_message.innerHTML = "";
    } , 5000);
  }

  else  if(status.toLowerCase()!="active" && status.toLowerCase()!="inactive"){
    e.preventDefault();
    error_message.innerHTML="Status must be 'Active' or 'Inactive'.";
    error_message.style.color="red";

    setTimeout(function() {
      error_message.innerHTML = "";
    } , 5000);
  }

  

else if(vehicle.length<2 || vehicle.length>50){
    e.preventDefault();
    error_message.innerHTML="Vehicle must be between 2 and 50 characters.";
    error_message.style.color="red";

    setTimeout(function() {
      error_message.innerHTML = "";
    } , 5000);
  }


else{
    error_message.innerHTML="Registration successful!";
    error_message.style.color="green";  

    setTimeout(function() {
      error_message.innerHTML = "";
    }, 5000); 
}
}
)
