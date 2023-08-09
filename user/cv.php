<?php
include 'security.php';
require ('assets/autoloader.php');

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Intern Management System|Cv Builder</title>
  <script src="https://kit.fontawesome.com/ed3373d3a0.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel="stylesheet" href="style.css">
<style type="text/css" id="#some2">* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

#get {
  font-family: sans-serif;
  background: rgba(255, 255, 255, 1);
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 90vh;
  overflow: hidden; /* Prevent vertical scroll */
}

#cont {
  position: relative;
  width: 90%;
  max-width: 900px;
  min-height: 700px;
  background: #fff;
  margin: 30px;
  display: flex;
  /*  flex-wrap: nowrap;Prevent horizontal wrap */
  overflow-x: hidden; /* Enable horizontal scroll if necessary */
  box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
  padding-left: 0px;
  background: #fafcfc;
}

#cont .left {
  position: relative;
  background: #505976;
  padding: 10px;
  width:60%;
  
}

.profileText {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 10px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}

.profileText .profileImg {
  position: relative;
  width: 120px;
  height: 120px;
  border-radius: 50%;
  overflow: hidden;
}

.profileText .profileImg img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.profileText h2 {
  color: #fff;
  font-size: 1em;
  margin-top: 10px;
  text-transform: uppercase;
  text-align: center;
  font-weight: 600;
  line-height: 1.2em;
}

.Info {
  padding: 10px;
}

.title {
  color: #fff;
  text-transform: uppercase;
  font-weight: 600;
  letter-spacing: 0.4px;
  margin-bottom: 10px;
  font-size: 0.8rem;
}

.Info ul {
  position: relative;
  padding-left:0px;
  
}

.Info ul li {
  position: relative;
  list-style: none;
  margin: 5px 0px;
  display:flex;
 
  
  
}

.Info ul li .icon {
  display: inline-block;
  width: 16px;
  font-size: 14px;
  color: #fff;
  
}

.Info ul li span {
  color: #fff;
  font-weight: 200;
  font-size: 0.8em;
}

.Info.education .box {
  margin-bottom: 5px;
  color: white;
}

.Info.education h5 {
  color: white;
  font-weight: 500;
  font-size: 0.5em;
}


.Info.education h4:nth-child(2) {
  color: #fff;
  font-weight: 500;
  font-size: 0.9em;
}

.Info.education h4 {
  color: #fff;
  font-weight: 300;
  font-size: 0.9em;
}

.Info.skill .box {
  display: flex;
  flex-direction: row;
  padding: 10px;
  align-items: center;
}

.Info.skill .box h4{
  color: white;
  font-size: 0.9em;
  margin: 0;
}

.Info.skill .box h5 {color: white;
  font-size: 0.6em;}


.container .right {
  position: relative;
 
  padding: 10px;
}

.about {
  padding: 10px;
  margin-bottom: 10px;
}

.about .box {
  display: flex;
  align-items: flex-start; /* Align items at the start of the container */
  padding-bottom: 10px;
}

.about .box .year_company {
  width: 30%; /* Adjust the width as needed */
  font-size:0.5 rem;
}

.about .box .text {
  width: 70%; /* Adjust the width as needed */
}

.about .box .text p {
  margin-bottom: 0; /* Remove the margin-bottom to align with the other elements */
  font-size: 0.8em;
}

.about h3 {
  color: #000;
  font-size: 1em;
  margin-bottom: 5px;
  font-weight: 600;
}
.about p{
	font-size:0.9rem;
}

.about h4 {
  color: #777;
  font-size: 0.8em;
  margin-bottom: 5px;
  font-weight: 400;
}

.contact {
  padding: 10px;
}

.contact h3 {
  color: #000;
  font-size: 1em;
  margin-bottom: 5px;
  font-weight: 600;
}

.contact ul li {
  position: relative;
  list-style: none;
  margin: 5px 0;
}

.contact ul li a {
  color: #777;
  font-size: 0.8em;
  text-decoration: none;
  transition: color 0.3s ease-in-out;
}

.contact ul li a:hover {
  color: #000;
}

.contact ul li .icon {
  display: inline-block;
  width: 16px;
  font-size: 14px;
  color: #777;
  margin-right: 5px;
}

@media (max-width: 767px) {
  #cont {
    margin: 0;
    width: 100%;
  }

  .left,
  .right {
    width: 100%;
  }
}


</style>
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
<script>
    function previewImage(event) {
      var file = event.target.files[0];
      var reader = new FileReader();
      
      reader.onload = function(e) {
        var imagePreview = document.getElementById("image_preview");
        imagePreview.src = e.target.result;
        imagePreview.style.borderRadius = "100%";
        imagePreview.style.width = "120px"; // Adjust the width to match your image preview container
        imagePreview.style.height = "120px"; // Adjust the height to match your image preview container
      }
      
      reader.readAsDataURL(file);
    }





   

  </script>
  <script>
 function toggleCVOutputSection() {
  var cvOutputSection = document.getElementById("get");
  var saveButtonContainer = document.getElementById("saveButtonContainer");

  if (cvOutputSection.style.display === "" || cvOutputSection.style.display === "none") {
    cvOutputSection.style.display = "block";
    saveButtonContainer.style.display = "flex";
    cvOutputSection.scrollIntoView({ behavior: 'smooth' }); // Scroll to the "get" section
  } else {
    cvOutputSection.style.display = "none";
    saveButtonContainer.style.display = "none";
  }
}

</script>
<script>$(document).ready(function()
{
    //yaha cv header handle krne k waste
    $("#name").keyup(function(){$("#cvname").text($(this).val());});
    $("#email").keyup(function(){$("#cvemail").text($(this).val());});
    $("#contact").keyup(function(){$("#cvcontact").text($(this).val());});
    $("#dob").change(function() {var selectedDate = $(this).val();$("#cvdob").text(selectedDate);});
    $("#city").keyup(function(){$("#cvcity").text($(this).val());});
    $("#obj").keyup(function(){$("#cvobj").text($(this).val());});
    $("#edulevel").keyup(function(){$("#cvedulevel").text($(this).val());});
    $("#degree").keyup(function(){$("#cvdegree").text($(this).val());});
    $("#cgpa").keyup(function(){$("#cvcgpa").text($(this).val());});
    $("#medal").keyup(function(){$("#cvmedal").text($(this).val());});
    $("#institute").keyup(function(){$("#cvinstitute").text($(this).val());});
    $("#country").keyup(function(){$("#cvcountry").text($(this).val());});
    $("#name").keyup(function(){$("#cvname").text($(this).val());});
    $("#stdate").change(function() {var selectedDate = $(this).val();$("#cvstdate").text(selectedDate);});
    $("#endate").change(function() {var selectedDate = $(this).val();$("#cvendate").text(selectedDate);});
    $("#designation").keyup(function(){$("#cvdesignation").text($(this).val());});
    $("#company").keyup(function(){$("#cvcompany").text($(this).val());});
    $("#xstdate").change(function() {var selectedDate = $(this).val();$("#cvxstdate").text(selectedDate);});
    $("#xendate").change(function() {var selectedDate = $(this).val();$("#cvxendate").text(selectedDate);});
    $("#wstatus").keyup(function(){$("#cvwstatus").text($(this).val());});
    $("#description").keyup(function(){$("#cvdescription").text($(this).val());});
    $("#skill1").keyup(function(){$("#cvskill1").text($(this).val());});
    $("#skill_level1").keyup(function(){$("#cvskill_level1").text($(this).val());});
    $("#skill2").keyup(function(){$("#cvskill2").text($(this).val());});
    $("#skill_level2").keyup(function(){$("#cvskill_level2").text($(this).val());});
    $("#skill3").keyup(function(){$("#cvskill3").text($(this).val());});
    $("#skill_level3").keyup(function(){$("#cvskill_level3").text($(this).val());});
    $("#ptitle").keyup(function(){$("#cvptitle").text($(this).val());});
    $("#role").keyup(function(){$("#cvrole").text($(this).val());});
    $("#pstdate").change(function() {var selectedDate = $(this).val();$("#cvpstdate").text(selectedDate);});
    $("#pendate").change(function() {var selectedDate = $(this).val();$("#cvpendate").text(selectedDate);});
    $("#pcompany").keyup(function(){$("#cvpcompany").text($(this).val());});
    $("#pdescription").keyup(function(){$("#cvpdescription").text($(this).val());});
    $("#ctitle").keyup(function(){$("#cvctitle").text($(this).val());});
    $("#cdate").change(function() {var selectedDate = $(this).val();$("#cvcdate").text(selectedDate);});
    $("#cdescription").keyup(function(){$("#cvcdescription").text($(this).val());});

});

</script>
<body>

<header class="header">
  <h1 class="header__title">CV  Builder Form</h1>
</header>
<div class="content">
  <div class="content__inner">

    <div class="container overflow-hidden">
      <div class="multisteps-form">
        <div class="row">
          <div class="col-12 col-lg-8 ml-auto mr-auto mb-3">
            <div class="multisteps-form__progress">
              <button class="multisteps-form__progress-btn js-active" type="button" title="Personal Info">Personal Info</button>
              <button class="multisteps-form__progress-btn" type="button" title="Picture">Picture</button>
              <button class="multisteps-form__progress-btn" type="button" title="Objective">Objective</button>
              <button class="multisteps-form__progress-btn" type="button" title="Address">Education</button>
              <button class="multisteps-form__progress-btn" type="button" title="Experience">Experience</button>
              <button class="multisteps-form__progress-btn" type="button" title="Skills">Skills</button>
              <button class="multisteps-form__progress-btn" type="button" title="Projects">Projects</button>
              <button class="multisteps-form__progress-btn" type="button" title="Certifications">Certifications</button>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-8 m-auto">
            <form class="multisteps-form__form needs-validation" novalidate>
              <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="SlideHorz">
                <h3 class="multisteps-form__title">Personal Info</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <label for="name">Name</label>
                      <input class="multisteps-form__input form-control" id="name" name="name" type="text" placeholder="Your Name" oninput="validateName()" required /><span id="nameError" class="text-danger small"></span>
                   
					</div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <label for="email">Email</label>
                    <input class="multisteps-form__input form-control" id="email" name="email" type="email" placeholder="Exampl@example.com" oninput="validateEmail()" required /><span id="emailError" class="text-danger small"></span>
                    
					</div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <label for="contact">Contact</label>
                      <input class="multisteps-form__input form-control" id="contact" name="contact" type="text" placeholder="0000-0000000" oninput="validateContact()" required /><span id="contactError" class="text-danger small"></span>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <label for="dob">D.O.B</label>
                      <input class="multisteps-form__input form-control" id="dob" name="dob" type="date" oninput="validateDOB()" required /><span id="dobError" class="text-danger small"></span>
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <label for="city">City</label>
                      <input class="multisteps-form__input form-control" id="city" name="city" type="text" placeholder="Edmonton" oninput="validateCity()" required /><span id="cityError" class="text-danger small"></span>
                    </div>
                    
                  </div>
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                  </div>
                </div>
              </div>
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="SlideHorz">
                <h3 class="multisteps-form__title">Your Picture</h3>
                
                        <label for="pic"><i class="fa-solid fa-circle-plus" style="color: #0f0f0f;font-size:40px;margin-left:175px;margin-bottom:0;padding:230px 45px 45px 230px;cursor:pointer;background:url(pic.png) no-repeat 30% 30%;"></i></label>
					  	<input type="file" name="pic" id="pic" class="multisteps-form__input form-control" style="display:none;visibility:none;" accept="image/jpeg,image/jpg, image/png" input="validatePicture()" required required onchange="previewImage(event)" ><span id="pictureError" class="text-danger small"></span>
		    		
                    <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                  </div>

              </div>
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="SlideHorz">
                <h3 class="multisteps-form__title">Career Objectives</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-12">
                      <label for="obj">Objectives</label>
                      <textarea class="multisteps-form__input form-control" rows="3"name="obj" id="obj"  placeholder="Your career objectives goes here.." oninput="validateObjective()" ></textarea><span id="objectiveError" class="text-danger small"></span>
                    </div>

                  </div>

                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                  </div>
                </div>

              </div>

              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="SlideHorz">
                <h3 class="multisteps-form__title">Education</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <label for="edulevel">Education Level</label>
                      <input class="multisteps-form__input form-control" name="edulevel" id="edulevel" type="text" placeholder="e.g. Bachelors" required oninput="validateEducation()"/><span id="educationError" class="text-danger small"></span>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <label for="degree">Degree</label>
                      <input class="multisteps-form__input form-control" name="degree" id="degree" type="text" placeholder="e.g. Computer Science" oninput="validateDegree()" required /><span id="degreeError" class="text-danger small"></span>
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <label for="cgpa">CGPA</label>
                      <input class="multisteps-form__input form-control" name="cgpa" id="cgpa" type="text" placeholder="e.g. 3.84" oninput="validateCGPA()" required /><span id="cgpaError" class="text-danger small"></span>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <label for="medal">Medals (if any)</label>
                      <input class="multisteps-form__input form-control" name="medal" id="medal" type="text" placeholder="Gold Medalist" required oninput="validateMedals()" /><span id="medalError" class="text-danger small"></span>
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <label for="institute">Institute</label>
                      <input class="multisteps-form__input form-control" name="institute" id="institute" type="text" placeholder="e.g. University of Arizona" oninput="validateInstitute()" required /><span id="instituteError" class="text-danger small"></span>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <label for="country">Country</label>
                      <input class="multisteps-form__input form-control" name="country" id="country" type="text" placeholder="E.g. Australia" oninput="validateCountry()" /><span id="countryError" class="text-danger small"></span>
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <label for="stdate">Start Date</label>
                      <input class="multisteps-form__input form-control" name="stdate" id="stdate" type="date" placeholder="mm/dd/yy" required />
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <label for="endate">End Date</label>
                      <input class="multisteps-form__input form-control" name="endate" id="endate"type="date" placeholder="mm/dd/yy" required />
                    </div>
                  </div>
                  
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                  </div>
                </div>
            </div>
                  
            <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="SlideHorz">
                <h3 class="multisteps-form__title">Experience</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <label for="designation">Designation</label>
                      <input class="multisteps-form__input form-control" name="designation" id="designation" type="text" placeholder="e.g. Databade Adminstrator" oninput="validateDesignation()" required /><span id="designationError" class="text-danger small"></span>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <label for="company">Company</label>
                      <input class="multisteps-form__input form-control" name="company" id="company" type="text" placeholder="e.g. Luvitus" oninput="validateCompany()" required /><span id="companyError" class="text-danger small"></span>
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <label for="xstdate">Start Date</label>
                      <input class="multisteps-form__input form-control" name="xstdate" id="xstdate" type="date" placeholder="mm/dd/yy"/>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <label for="xendate">End Date</label>
                      <input class="multisteps-form__input form-control" name="xendate" id="xendate"type="date" placeholder="mm/dd/yy"/>
                    </div>
                  </div>
                  <div class="form-row mt-4">Currently Working 
                  <div class="form-check   ml-2">
  <input class="form-check-input" type="radio" value="Currently Working" name="wstatus" id="wstatus">
  <label class="form-check-label" for="wstatus" style="padding-right:12px;">
    Yes  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" value="Not Working" name="wstatus" id="wstatus" checked>
  <label class="form-check-label" for="wstatus">
    No
  </label>
</div>
</div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <label for="description">Description</label>
                      <textarea class="multisteps-form__input form-control" name="description" id="description" type="textarea" rows="3"placeholder="Description here.." oninput="validateDescription()" required ></textarea><span id="descriptionError" class="text-danger small"></span>
                    </div>
       
                  </div>

                  
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                  </div>
                </div>

              </div>
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="SlideHorz">
                <h3 class="multisteps-form__title">Skills</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                  <label  class="form-label">Skill Name</label>
                    <input type="text" class="form-control" name="skill1" id="skill1" placeholder="e.g. Computer programming"required/>
                    <select class="form-select mt-2" name="skill_level1" required>
                        <option value="">Select Skill level</option>
                        <option value="1"> Novice</option>
                        <option value="2"> Advanced Beginner</option>
                        <option value="3"> Competent</option>
                        <option value="4"> Proficient</option>
                        <option value="5"> Expert</option>
                    </select></div>
                    <div class="form-row mt-4">
                    <label  class="form-label">Skill Name</label>
                    <input type="text" class="form-control" name="skill2" id="skill2" placeholder="e.g. Computer programming"required/>
                    <select class="form-select mt-2" id="skill_level2" name="skill_level2">
                        <option value="">Select Skill level</option>
                        <option value="1"> Novice</option>
                        <option value="2"> Advanced Beginner</option>
                        <option value="3"> Competent</option>
                        <option value="4"> Proficient</option>
                        <option value="5"> Expert</option>
                    </select>
                    </div>
                    <div class="form-row mt-4">
                    <label  class="form-label">Skill Name</label>
                    <input type="text" class="form-control" name="skill3" id="skill3" placeholder="e.g. Computer programming"required/>
                    <select class="form-select mt-2" id="skill_level3" name="skill_level3" >
                        <option value="">Select Skill level</option>
                        <option value="1"> Novice</option>
                        <option value="2"> Advanced Beginner</option>
                        <option value="3"> Competent</option>
                        <option value="4"> Proficient</option>
                        <option value="5"> Expert</option>
                    </select>
                    </div>
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                  </div>
                </div>
            </div>

            <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="SlideHorz">
                <h3 class="multisteps-form__title">Projects</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <label for="ptitle">Project Title</label>
                      <input class="multisteps-form__input form-control" name="ptitle" id="ptitle" type="text" placeholder="e.g. Breakout Ball Game"/>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <label for="role">Role</label>
                      <input class="multisteps-form__input form-control" name="role" id="role" type="text" placeholder="e.g. Developer"/>
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <label for="pstdate">Start Date</label>
                      <input class="multisteps-form__input form-control" name="pstdate" id="pstdate" type="date" placeholder="mm/dd/yy"/>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <label for="pendate">End Date</label>
                      <input class="multisteps-form__input form-control" name="pendate" id="pendate"type="date" placeholder="mm/dd/yy"/>
                    </div>
                  </div>

                  <div class="form-row mt-4">
                  <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                    <label for="pcompany">Company</label>
                      <input class="multisteps-form__input form-control" name="pcompany" id="pcompany" type="text" placeholder="e.g. The Great Company" oninput="validatePCompany()" required /><span id="pcompanyError" class="text-danger small"></span>
                    </div>
                    <div class="col-12 col-sm-6">
                      <label for="pdescription">Description</label>
                      <textarea class="multisteps-form__input form-control" name="pdescription" id="pdescription" type="textarea" rows="3"placeholder="Description here.." oninput="validatePDescription()" required ></textarea><span id="pdescriptionError" class="text-danger small"></span>
                    </div>
       
                  </div>

               
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                  </div>
                </div>

              </div>


              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="SlideHorz">
                <h3 class="multisteps-form__title">Certifications</h3>
                <div class="multisteps-form__content">
                <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <label for="ctitle">Certificate Title</label>
                      <input class="multisteps-form__input form-control" name="ctitle" id="ctitle" type="text" placeholder="e.g. CEH"/>
                    </div>
                   
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <label for="cdate">Date</label>
                      <input class="multisteps-form__input form-control" name="cdate" id="cndate"type="date" placeholder="mm/dd/yy"/>
                    </div>
                  </div>

                  <div class="form-row mt-4">
                  
                    <div class="col-12 col-sm-6">
                      <label for="cdescription">Description</label>
                      <textarea class="multisteps-form__input form-control" name="cdescription" id="cdescription" type="textarea" rows="3" placeholder="Description here.." oninput="validateCDescription()" required ></textarea><span id="cdescriptionError" class="text-danger small"></span>
                    </div>
       
                  </div>

                  
      
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                    <button class="btn btn-success ml-auto" type="button" title="preview" onclick="toggleCVOutputSection()">Preview CV</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!---------CV OUTPUT SECTION--------->
<div class="row justify-content-center">
      <div class="col-12 col-lg-7 ml-auto mr-auto">
<div id="get"   style="display:none;visibility:none;"> 

           <div class="container" id="cont">
           
       
        <div class="left">
            <div class="profileText">
                <div class="profileImg">
            <img id="image_preview" src="logo.png" alt="Profile Image">
          </div>
                <h2 id="cvname">Your Name<br></h2>
            </div>
            <div class="Info ">
                <h3 class="title">Personal Info</h3>

                <ul>
                    <li>
                        <span class="icon"><ion-icon name="phone-portrait-outline"></ion-icon></span>
                        <span class="text" id="cvcontact">No number</span>
                    </li>
                    <li>
                        <span class="icon"><ion-icon name="mail-unread-outline"></ion-icon></span>
                        <span class="text" id="cvemail">Example1234@example.com</span>
                    </li>
                  
                    <li>
                        <span class="icon"><ion-icon name="calendar-outline"></ion-icon></span>
                        <span class="text" id="cvdob">dd/mm/yyyy</span>
                    </li>
                    <li>
                        <span class="icon"><ion-icon name="location-outline"></ion-icon></span>
                        <span class="text" id="cvcity">City name</span>
                    </li>
                </ul>
            </div>
            <div class="Info education">
                <div class="h3 title">Education</div>
               
                        <div class="box"><h5 id="cvstdate">05/02/2019</h5></div><div class="box"><h5 id="cvendate"> - 05/02/2021</h5></div>
                        <div class="box"><h4 id="cvedulevel">Education level</h4></div><div class="box"><h5 id="cvmedal"></h5></div>
                        <div class="box"><h4 id="cvdegree">Degree tile</h4></div><div class="box"><h5  id="cvcgpa">CGPA</h5></div>
                        <div class="box"><h4 id="cvinstitute">Institute Name</h4></div><div class="box" ><h5 id="cvcountry">Country</h5></div>

                   
            </div>
            <div class="Info skill">
                <div class="h3 title">Skills</div>
               
                        <div class="box"><h4 id="cvskill1">Skill title</h4></div><div class="box"><h5 id="cvskill_level1">Skill level</h5></div>
                        <div class="box"><h4 id="cvskill2">Skill title</h4></div><div class="box"><h5 id="cvskill_level2">Skill level</h5></div>
                        <div class="box"><h4 id="cvskill3">Skill title</h4></div><div class="box"><h5 id="cvskill_level3">Skill level</h5></div>
                        
                   
            </div>
            
        </div>
        <div class="right">
            <div class="about">
                <h2 class="title2">Objectives</h2>
                <p id="cvobj">Seeking a position in the field of Computer Science where I can utilize my skills to further work towards personal and professional development and contribute towards the prosperity of the organization.</p>
            </div>
            <div class="about">
                <h2 class="title2">Experience</h2>
                <div class="box">
                    <div class="year_company">
                        <h5 id="cvxendate" class="small">dd/mm/yy</h5>
                        <h5 id="cvxstdate" class="small">dd/mm/yy</h5>
                        <h6 id="cvcompany" class="small">Company</h6>
                    </div>
                    <div class="text">
                        <h4 id="cvdesignation">Designation</h4><h4 id="cvwstatus" style="font-size:10px;">working status?</h4>
                        <p id="cvdescription">Working as an intern in Khyber Pakhtunkhwa Information Technology Board in collaboration with Code For Pakistan for six months of duration.</p>
                    </div>
                </div>
            </div>
            <div class="about">
                <h2 class="title2">Projects</h2>
                <div class="box">
                    <div class="year_company">
                        <h5 id="cvpendate" class="small">dd/mm/yy</h5>
                        <h5 id="cvpstdate" class="small">dd/mm/yy</h5>
                        <h6 id="cvpcompany" class="small">Company</h6>
                    </div>
                    <div class="text">
                        <h4 id="cvptitle">Project Title</h4><h4 id="cvrole" style="font-size:10px;">Your Role</h4>
                        <p id="cvpdescription">Working as an intern in Khyber Pakhtunkhwa Information Technology Board in collaboration with Code For Pakistan for six months of duration.</p>
                    </div>
                </div>
            </div>
            <div class="about">
                <h2 class="title2">Certification</h2>
                <div class="box">
                    <div class="year_company">
                        <h5 id="cvcdate" class="small" >dd/mm/yy</h5>
                    </div>
                    <div class="text">
                        <h4 id="cvctitle">Certificate Title</h4>
                        <p id="cvcdescription">Working as an intern in Khyber Pakhtunkhwa Information Technology Board in collaboration with Code For Pakistan for six months of duration.</p>
                    </div>
                </div>
            </div>
            
      </div>

    
           
  
            



        </div>
    </div></div>
</div>
    <div id="saveButtonContainer" class="row justify-content-center mt-0" style="display: none;visibility:none;">
      <div class="col-md-2">
        <div class="text-center mt-4 mb-4">
        </div><button id="saveButton" class="btn btn-success" type="button">Save and Download</button>
        </div>
      </div>
    
    <div id="dialog" style="z-index: 2;position: absolute;width: 100%;display: none;top: 150%;left: 50%;transform: translate(-50%, -50%);">
	<div class="" style="width: 366px;padding: 22px;margin: auto;margin-top: 155px">
		<div class="panel panel-primary" style="background-color: white;padding: 1.5rem!important;box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;border-radius: 0.25rem!important;">
			<div class="panel-heading">
				What you want?
			</div>
			<div class="panel-body">
				<button class="btn btn-block btn-success " id="saveCv"><i class="pull-left fa fa-save fa-fw"></i >Save CV</button>
				<button class="btn btn-block btn-success " id="saved" disabled style="display: none;"><i class="pull-left fa fa-save fa-fw"></i >Saved</button>
						<p style="display:flex;justify-content:center;align-items:center;flex-direction:column;padding:10px;letter-spacing:1px;">
			     <span id="save-resume">Click Save to Download  </span>

				 <span id="share-link"><i class="fa fa-hand-pointer-o" aria-hidden="true"></i></span>
			</p>
					<button class="btn btn-block btn-primary " id="download-resume" style="display:none;"><i class="pull-left fa fa-edit fa-fw"></i >Download resume</button><br>
				<a href='index.php' style="text-decoration: none"><button class="btn btn-block btn-danger "><i class="pull-left fa fa-home fa-fw"></i >Goto HOME</button></a>

			</div>
			<div class="panel-footer">
				Goto Home without saving will discard your changes 
			</div>
		</div>
	</div>
</div>
<div id="cvUploadDialog" style="z-index: 2;position: absolute;width: 100%;display: none;top: 150%;left: 50%;transform: translate(-50%, -50%);">
	<div class="" style="width: 366px;padding: 22px;margin: auto;margin-top: 155px">
		<div class="panel panel-primary" style="background-color: white;padding: 1.5rem!important;box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;border-radius: 0.25rem!important;position:relative">
		<div class="close-upload-cv"><i class="fa fa-times-circle" aria-hidden="true"></i></div>
			<div class="panel-heading">
				Type Cv Name
			</div>
			<div class="panel-body">
				<input type="text" required class="form-control" id="cvNameInput" placeholder="Type Cv Name" style="margin-bottom: 5px">
				<button class="btn btn-block btn-success bt-sm " id="uploadCv"><i class="pull-left fa fa-save fa-fw"></i >Upload CV</button>
				

			</div>
			<div class="panel-footer">
				Cv will be uploaded to database for later use. 
			</div>
		</div>
	</div>
</div>

 <script>
	$(document).ready(function() {
		var cvName;
    
		$("#download-resume").click(function() {
			$(".cvBody").css("width", "100%");
			var some = $("#get").html();
			var some2 = $("#some2").html();
			var pdfname = $("#cvname").html();
			pdf(cvName, some);
		});

		// for downloading cv

$("#saveButton").click(function() {
  $("#dialog").fadeIn(function() {
    openExitModel();

    // Scroll to the #dialog element smoothly
    $('html, body').animate({
      scrollTop: $("#get").offset().top
    }, 500);
  });
});



		function pdf(pdfname, some) {
			var opt = {
				margin: 0.2,
				filename: 'Online Resume-' + pdfname + '.pdf',
				image: { type: 'jpeg', quality: 0.98 },
				pagebreak: { mode: ['avoid-all', 'css', 'legacy'] },
				html2canvas: { scale: 2 },
				jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
			};
			html2pdf().from(some).set(opt).save();
			$(".cvBody").css({ "width": "55%" });
		}

		// for saving cv
		// dialog pr save wale btn pr click k lye bad yeh chalna
		$("#saveCv").click(function() {
			$("#dialog").hide();
			$("#cvUploadDialog").fadeIn();
		});

		// ab cvNameDialog pr save Wale btn pr click
		$(".close-upload-cv").click(function() {
			$("#dialog").fadeIn();
			$("#cvUploadDialog").hide();
		});

		$("#uploadCv").click(function() {
  cvName = $("#cvNameInput").val();
  var cvData = $("#get").html();

  // Remove the $.post request and modify the code accordingly

  $("#cvUploadDialog").hide();
  $("#dialog").fadeIn();
  $("#download-resume").show();
  $("#saveCv").hide();
  $(".cvBody").css({ "width": "55%" });
  $("#saved").show();

  file_pdf = "1645556014-16.html";
  var some = $("#get").html();
  $.ajax({
    type: "POST",
    url: "savepdf.php",
    data: { name: cvName, content: file_pdf },
    success: function(response) {
      alert(response);
    }
  });
});


		// closing dialog model
		$("#closeDialog").click(function() {
			$("#dialog").fadeOut();
			$("#dialogCover").hide();
		});

		function openExitModel() {
			$("#dialog").slideDown();
			$("#saveCv").show();
			$("#saved").hide();
		}
	});
	
</script>   


<script>


  function validateName() {
    const nameInput = document.getElementById('name').value;
    const nameRegex = /^[A-Za-z\s]+$/;

    if (nameInput === '') {
      document.getElementById('nameError').textContent = 'Please enter your name.';
    } else if (!nameRegex.test(nameInput)) {
      document.getElementById('nameError').textContent = 'Please enter alphabets and spaces only for the name.';
    } else if (nameInput.length > 20) {
      document.getElementById('nameError').textContent = 'Name cannot exceed 20 characters.';
    } else {
      document.getElementById('nameError').textContent = '';
    }
    
  }

  function validateEmail() {
    const email = document.getElementById('email').value;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (email === '') {
      document.getElementById('emailError').textContent = 'Please enter your email.';
    } else if (!emailRegex.test(email)) {
      document.getElementById('emailError').textContent = 'Please enter a valid email address.';
    } else {
      document.getElementById('emailError').textContent = '';
    }
   
  }

  function validateContact() {
    const contact = document.getElementById('contact').value;
    const phoneRegex = /^\d{4}-\d{7}$/;

    if (contact.trim() === '') {
      document.getElementById('contactError').textContent = 'Please enter your contact.';
    } else if (!phoneRegex.test(contact)) {
      document.getElementById('contactError').textContent = 'Please enter a valid contact number in the format 0000-0000000.';
    } else {
      document.getElementById('contactError').textContent = '';
    }
   
  }

  function validateDOB() {
    const dob = document.getElementById('dob').value;

    if (dob.trim() === '') {
      document.getElementById('dobError').textContent = 'Please enter your date of birth.';
    } else if (dob === '') {
      document.getElementById('dobError').textContent = 'Please enter your date of birth.';
    } else {
      document.getElementById('dobError').textContent = '';
    }
    
  }

  function validateCity() {
    const cityInput = document.getElementById('city');
    const cityError = document.getElementById('cityError');
    const city = cityInput.value;

    if (city.trim() === '') {
      cityError.textContent = 'Please enter your city.';
    } else if (city.length > 20) {
      cityError.textContent = 'City name should not exceed 20 characters.';
    } else {
      cityError.textContent = '';
    }
    
  }

  function validatePicture() {
    var pictureInput = document.getElementById("pic");

    if (!pictureInput.files || pictureInput.files.length === 0 || !['image/jpeg','image/jpg', 'image/png'].includes(pictureInput.files[0].type)) {
      document.getElementById('pictureError').textContent = "Please select a valid picture file (jpg, jpeg, or png).";
    } else {
      document.getElementById('pictureError').textContent = '';
    }
   
  }

  function validateObjective() {
    var objectiveInput = document.getElementById("obj");
    var objectiveError = document.getElementById("objectiveError");
    var objective = objectiveInput.value.trim(); // Remove leading and trailing white spaces

    if (objective === '') {
      objectiveError.textContent = "Please enter your objective.";
    } else if (objective.length > 300) {
      objectiveError.textContent = "Objective should not exceed 300 characters.";
    } else {
      objectiveError.textContent = '';
    }
   
  }

  function validateCGPA() {
    var cgpaInput = document.getElementById("cgpa");
    const cgpaRegex = /^\d{1}(\.\d{1,2})?$/;

    if (!cgpaRegex.test(cgpaInput.value)) {
      document.getElementById('cgpaError').textContent = "Please enter a valid CGPA in the format 0.00.";
    } else {
      document.getElementById('cgpaError').textContent = '';
    }
    
  }

  function validateDescription() {
    var descriptionInput = document.getElementById("description");

    if (descriptionInput.value.length > 150) {
      document.getElementById('descriptionError').textContent = "Description should not exceed 150 characters.";
    } else {
      document.getElementById('descriptionError').textContent = '';
    }
    
  }
  function validatePDescription() {
    var descriptionInput = document.getElementById("pdescription");

    if (descriptionInput.value.length > 150) {
      document.getElementById('pdescriptionError').textContent = "Description should not exceed 150 characters.";
    } else {
      document.getElementById('pdescriptionError').textContent = '';
    }
    
  }
  function validateCDescription() {
    var descriptionInput = document.getElementById("cdescription");

    if (descriptionInput.value.length > 150) {
      document.getElementById('cdescriptionError').textContent = "Description should not exceed 150 characters.";
    } else {
      document.getElementById('cdescriptionError').textContent = '';
    }
    
  }

  // Education Level validation
  function validateEducation() {
    const field = document.getElementById('edulevel');
    const error = document.getElementById('educationError');

    if (field.value.trim() === '') {
      error.textContent = 'This field is required.';
    } else if (field.value.length > 30) {
      error.textContent = 'Maximum length exceeded (30 characters).';
    } else {
      error.textContent = '';
    }
   
  }

  // Degree validation
  function validateDegree() {
    const field = document.getElementById('degree');
    const error = document.getElementById('degreeError');

    if (field.value.trim() === '') {
      error.textContent = 'This field is required.';
    } else if (field.value.length > 30) {
      error.textContent = 'Maximum length exceeded (30 characters).';
    } else {
      error.textContent = '';
    }
  }

  // Medals validation
  function validateMedals() {
    const field = document.getElementById('medal');
    const error = document.getElementById('medalError');

    if (field.value.trim() === '') {
      error.textContent = 'This field is required.';
    } else if (field.value.length > 30) {
      error.textContent = 'Maximum length exceeded (30 characters).';
    } else {
      error.textContent = '';
    }
   
  }

  function validateInstitute() {
    var instituteInput = document.getElementById("institute");
    var instituteError = document.getElementById("instituteError");
    var institute = instituteInput.value.trim();

    if (institute === '') {
      instituteError.textContent = "Please enter the institute.";
    } else if (institute.length > 30) {
      instituteError.textContent = "Institute name should not exceed 30 characters.";
    } else {
      instituteError.textContent = '';
    }
    
  }

  function validateCountry() {
    var countryInput = document.getElementById("country");
    var countryError = document.getElementById("countryError");
    var country = countryInput.value.trim();

    if (country === '') {
      countryError.textContent = "Please enter the country.";
    } else if (country.length > 30) {
      countryError.textContent = "Country name should not exceed 30 characters.";
    } else {
      countryError.textContent = '';
    }
    
  }

  function validateDesignation() {
    var designationInput = document.getElementById("designation");
    var designationError = document.getElementById("designationError");
    var designation = designationInput.value.trim();

    if (designation === '') {
      designationError.textContent = "Please enter the designation.";
    } else if (designation.length > 30) {
      designationError.textContent = "Designation should not exceed 30 characters.";
    } else {
      designationError.textContent = '';
    }
    
  }

  function validateCompany() {
    var companyInput = document.getElementById("company");
    var companyError = document.getElementById("companyError");
    var company = companyInput.value.trim();

    if (company === '') {
      companyError.textContent = "Please enter the company.";
    } else if (company.length > 30) {
      companyError.textContent = "Company name should not exceed 30 characters.";
    } else {
      companyError.textContent = '';
    }
    
  }

function validatePCompany() {
    var companyInput = document.getElementById("pcompany");
    var companyError = document.getElementById("pcompanyError");
    var company = companyInput.value.trim();

    if (company === '') {
      companyError.textContent = "Please enter the company.";
    } else if (company.length > 30) {
      companyError.textContent = "Company name should not exceed 30 characters.";
    } else {
      companyError.textContent = '';
    }
    
  }

</script>
<script  src="function.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
