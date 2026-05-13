function showSection(sectionId) {
  const sections = document.querySelectorAll('.section');

  sections.forEach(section => {
    section.classList.remove('active');
  });

  document.getElementById(sectionId).classList.add('active');
}

//DISCIPLINARY FORM VALIDATION
const disciplinaryForm = document.getElementById('disciplinary_form');
const error_message = document.getElementById('error_message');

disciplinaryForm.addEventListener("submit", function(e) {
  let fullName = document.getElementById("full_name").value.trim();
  let admissionNumber = document.getElementById("admission_number").value.trim();
  let caseDescription = document.getElementById("case_description").value.trim();
  let punishmentType = document.getElementById("punishment_type").value.trim();

  if  (fullName == "" || admissionNumber == "" || caseDescription == "" || punishmentType == "") {
    e.preventDefault();
    error_message.innerHTML = "All fields are required";
    error_message.style.color = "red";

    setTimeout(function() {
      error_message.innerHTML = "";
    }, 5000);
  } else if (caseDescription.length < 10 || caseDescription.length > 1000) {
    e.preventDefault();
    error_message.innerHTML = "Case description must be between 10 and 1000 characters";
    error_message.style.color = "red";

    setTimeout(function() {
      error_message.innerHTML = "";
    }, 5000);
  } else if (punishmentType.length < 5 || punishmentType.length > 100) {

    e.preventDefault();
    error_message.innerHTML = "Punishment type must be between 5 and 100 characters";
    error_message.style.color = "red";

    setTimeout(function() {
      error_message.innerHTML = "";
    }, 5000);
  }
    else if(!/^\d+$/.test(admissionNumber)){
      e.preventDefault();
      error_message.innerHTML = "Admission number must be a valid number";
      error_message.style.color = "red";

      setTimeout(function() {
        error_message.innerHTML = "";
      }, 5000);
    }
    
    else {
      error_message.innerHTML = "Case reported successfully";
      error_message.style.color = "green";
    
      setTimeout(function() {
        error_message.innerHTML = "";
      }, 5000);
    }
    }
     )