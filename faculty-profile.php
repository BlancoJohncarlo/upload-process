
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f30985c93b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <title>title</title>
</head>
<body>
<div class="layout">
    <?php
    // require 'config';
    include 'header.php';
    include 'sidebar-faculty-member.php';    
    ?>
    </div>

    <div class="content position-relative">
        <!-- start coding here -->
        <?php
            include 'dashboard.php';
            

        ?>
        
        

        <div class="position-absolute tent-div  vw-90 ms-3 p-3 rounded" >
                    <div class="mt-2">
                        <button type="button" class="btn btn-primary"data-bs-toggle="modal" data-bs-target="#exampleModal8">Upload</button>

                        <div class="modal fade " id="exampleModal8"data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel8" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel8">Upload PDS Excel File</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">

                                                        <form action="process_upload.php" method="post"enctype="multipart/form-data">
                                                            <div class="row align-items-start mt-2">
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Excel file:</span>
                                                                <input type="file" name="fileToUpload" class="form-control">
                                                            </div>
                                                        </div>
                                                </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" value="upload" class="btn btn-success" >Submit</button>
                                                            <button type="button" class="btn btn-danger"data-bs-dismiss="modal">Cancel</button>
                                                        </div>
                                                        </div>
                                                        </form>
                                                        
                                                    </div>
                                                    </div>
                        <hr class="hr"/>
                    </div>
                
                            <div class="position-absolute top-60 start-50 translate-middle mt-5 p-3 rounded-3" style="background-color: #D3D3D3">
                                    <div class="d-flex justify-content-center">
                                        <a class="d-inline link-opacity-100  mx-1 px-2  nav-link-info"id="personal" href="#personal-info">Personal Information</a>
                                        <span class="vertical-line"></span>
                                        <a class="d-inline link-opacity-100 mx-1  px-2  nav-link-info"id="family" href="#family-background">Family Background</a>
                                        <span class="vertical-line"></span>
                                        <a class="d-inline link-opacity-100 mx-1  px-2  nav-link-info"id="educational" href="#educational-background">Educational Background</a>
                                        <span class="vertical-line"></span>
                                        <a class="d-inline link-opacity-100 mx-1  px-2  nav-link-info"id="civilservice" href="#civil-service">Civil Service Eligibility</a>
                                        <span class="vertical-line"></span>
                                        <a class="d-inline link-opacity-100 mx-1  px-2  nav-link-info"id="workexp" href="#work-exp">Work Experience</a>
                                        <span class="vertical-line"></span>
                                        <a class="d-inline link-opacity-100 mx-1  px-2  nav-link-info"id="voluntary" href="#voluntary-work">Voluntary Work</a>
                                        <span class="vertical-line"></span>
                                        <a class="d-inline link-opacity-100 mx-1  px-2  nav-link-info"id="interventions" href="#intervention-ld">L&D Interventions</a>
                                    </div>
                            </div>
                                    <div id="personal-info" class="position-absolute m-5  start-10 translate-middle-y z-3 personal-info">
                                            <h4 class="fw-bold">Personal Information </h4>
                                            <div  class="container text-center">
                                                <div class="row align-items-start mt-2">
                                                    <div class="col">
                                                        <div class="input-group input-group-sm mb-3">
                                                            <p>Firstname:</p>
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <p>Surname:</p>
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <p>Middle Name:</p>
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <p>Name Extension(JR,SR):</p>
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <p>Date of Birth:</p>
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <p>Place of Birth:</p>
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <p>Sex:</p>
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <p>Civil Status:</p>
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <p>Height(m):</p>
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <p>Weight(kg):</p>
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <p>Blood Type:</p>
                                                        </div>
                                                        </div>
                                                        <div class="col">
                                                        <div class="input-group input-group-sm mb-3">
                                                            <p>GSIS ID no:</p>
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <p>PHILHEATH ID no:</p>
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <p>SSS no:</p>
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <p>Tin no:</p>
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <p>Agency Employee no:</p>
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <p>Citizenship:</p>
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <p>Residential Address:</p>
                                                            <span class="mx-5"></span>
                                                            <p>Zipcode:</p>
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <p>Permanent Address:</p>
                                                            <span class="mx-5"></span>
                                                            <p>Zipcode:</p>
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <p>Telephone:</p>
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <p>E-mail Address:</p>
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <p>Mobile no:</p>
                                                        </div>
                                                        </div>
                                                                    <div class="mt-2 ">
                                                                        <button type="button" class="btn btn-success px-3 edit-btn-1"data-bs-toggle="modal" data-bs-target="#exampleModal1">Edit</button>
                                                                        <hr class="hr"/>
                                                                    </div>            
                                                    </div>  
                                             </div>

                                        </div> 
                                    </div>
                                    <div class="modal fade" id="exampleModal1"data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                                                            <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h1 class="modal-title fs-5" id="exampleModalLabel1">Personal Information</h1>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                <form>
                                                <div class="row align-items-start mt-2">
                                                    <div class="col">
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Firstname:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Surname:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Middle Name:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Name Extension(JR,SR):</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Date of Birth:</span>
                                                            <input type="date" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Place of Birth:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Sex:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Civil Status:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Height(m):</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Weight(kg):</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Blood Type:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        </div>
                                                        <div class="col">
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">GSIS ID no:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">PHILHEATH ID no:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">SSS no:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Tin no:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Agency Employee no:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Citizenship:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Residential Address:</span>
                                                            <input type="text" class="form-control">
                                                            <span class="mx-2"></span>
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Zipcode:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Permanent Address:</span>
                                                            <input type="text" class="form-control">
                                                            <span class="mx-2"></span>
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Zipcode:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Telephone:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">E-mail Address:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Mobile no:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        </div>          
                                                    </div>
                                                    </form>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn btn-success" >Save</button>
                                                                                <button type="button" class="btn btn-danger"data-bs-dismiss="modal">Cancel</button>
                                                                            </div>
                                                                            </div>
                                                                        </div>
                                                                        </div>
                                    <div class="d-flex justify-content-center align-items-center vh-100">     
                                    <div id="family-background"  class="position-absolute start-10 translate-middle-y z-2 family-background">
                                                <h4 class="fw-bold">Family Background</h4>
                                                <div class="container text-center px-5">
                                                    <div class="row align-items-start mt-2">
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Spouse Surname:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Spouse Firstname:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Spouse Middle Name:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Occupation:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Employer/Business Name:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Business Address:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Telephone no:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Name of Children:</p>
                                                                <span class="mx-5"></span>
                                                                <p>Date of Birth:</p>
                                                                </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Father's Surname:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Father's Firstname:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Father's Middle name:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Name Extension(JR.,SR):</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Mother's Maiden name:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Mother's Surname:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Mother's Firstname:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Mother's Middle name:</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-2">
                                                        <button type="button" class="btn btn-success px-3 edit-btn-1 "data-bs-toggle="modal" data-bs-target="#exampleModal2">Edit</button>
                                                        <hr class="hr"/>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="modal fade" id="exampleModal2"data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel2">Family Background</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <form>
                                                        <div class="row align-items-start mt-2">
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Spouse Surname:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Spouse Firstname:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Spouse Middle Name:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Occupation:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Employer/Business Name:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Business Address:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Telephone no:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Name of Children:</span>
                                                                <input type="text" class="form-control">
                                                                <span class="mx-2"></span>
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Date of Birth:</span>
                                                                <input type="date" class="form-control">
                                                                </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Father's Surname:</span>
                                                                <input type="tel" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Father's Firstname:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Father's Middle name:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Name Extension(JR.,SR):</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Mother's Maiden Name:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Mother's Surname:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Mother's Firstname:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Mother's Middle name:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn btn-success" >Save</button>
                                                            <button type="button" class="btn btn-danger"data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                            
                                                    <div class="d-flex ms-4 justify-content-center align-items-center vh-100">
                                            <div id="educational-background" class="position-absolute start-10 translate-middle-y z-2 educ-background">
                                                <h4 class="fw-bold">Educational Background</h4>
                                                <h5 class="fw-bold">Level</h5>
                                                <h5 class="fw-bold">Elementary</h5>
                                                <div class="container text-center px-5">
                                                        
                                                    <div class="row align-items-start mt-2">
                                                        
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Name of School:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Basic Educational/Degree/Course:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Period Attendance</p>
                                                                <span class="mx-3"></span>
                                                                <p>From:</p>
                                                                <span class="mx-5"></span>
                                                                <p>To:</p>
                                                                </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Highest Level/Unit Earned:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Year Graduated:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Scholarship/Academic Honors Recieved:</p>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h5 class="fw-bold">Secondary</h5>
                                                <div class="container text-center px-5">
                                                        
                                                    <div class="row align-items-start mt-2">
                                                        
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Name of School:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Basic Educational/Degree/Course:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Period Attendance</p>
                                                                <span class="mx-3"></span>
                                                                <p> From:</p>
                                                                <span class="mx-5"></span>
                                                                <p>To:</p>
                                                                </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Highest Level/Unit Earned:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Year Graduated:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Scholarship/Academic Honors Recieved:</p>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h5 class="fw-bold">Vocaltional/Trade Course</h5>
                                                <div class="container text-center px-5">
                                                        
                                                    <div class="row align-items-start mt-2">
                                                        
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Name of School:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Basic Educational/Degree/Course:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Period Attendance</p>
                                                                <span class="mx-3"></span>
                                                                <p>From:</p>
                                                                <span class="mx-5"></span>
                                                                <p>To:</p>
                                                                </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Highest Level/Unit Earned:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Year Graduated:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Scholarship/Academic Honors Recieved:</p>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h5 class="fw-bold">College</h5>
                                                <div class="container text-center px-5">
                                                        
                                                    <div class="row align-items-start mt-2">
                                                        
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Name of School:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Basic Educational/Degree/Course:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Period Attendance</p>
                                                                <span class="mx-3"></span>
                                                                <p>From:</p>
                                                                <span class="mx-5"></span>
                                                                <p>To:</p>
                                                                </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Highest Level/Unit Earned:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Year Graduated</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Scholarship/Academic Honors Recieved:</p>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h5 class="fw-bold">Graduate Studies</h5>
                                                <div class="container text-center px-5">
                                                        
                                                    <div class="row align-items-start mt-2">
                                                        
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Name of School:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Basic Educational/Degree/Course:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Period Attendance</p>
                                                                <span class="mx-3"></span>
                                                                <p>From:</p>
                                                                <span class="mx-5"></span>
                                                                <p>To:</p>
                                                                </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Highest Level/Unit Earned:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Year Graduated:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Scholarship/Academic Honors Recieved:</p>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-2">
                                                        <button type="button" class="btn btn-success px-3 edit-btn-1"data-bs-toggle="modal" data-bs-target="#exampleModal3">Edit</button>
                                                        <hr class="hr me-5"/>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>

                                            <div class="modal fade" id="exampleModal3"data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel3">Educational Background</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                    <form>
                                                        <h5 class="fw-normal">Elementary</h5>
                                                <div class="container text-center px-5">
                                                        
                                                    <div class="row align-items-start mt-2">
                                                        
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Name of School:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Basic Educational/Degree/Course:</span>
                                                                <input type="text"class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Period Attendance From:</span>
                                                                <input type="text"  class="form-control">
                                                                <span class="mx-2"></span>
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">To:</span>
                                                                <input type="text"class="form-control">
                                                                </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Highest Level/Unit Earned:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Year Graduated:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Scholarship/Academic Honors Recieved:</span>
                                                                <input type="text" class="form-control">
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h5 class="fw-normal">Secondary</h5>
                                                <div class="container text-center px-5">
                                                        
                                                    <div class="row align-items-start mt-2">
                                                        
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Name of School:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Basic Educational/Degree/Course:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Period Attendance From:</span>
                                                                <input type="text" class="form-control">
                                                                <span class="mx-2"></span>
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">To:</span>
                                                                <input type="text" class="form-control">
                                                                </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Highest Level/Unit Earned:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Year Graduated:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Scholarship/Academic Honors Recieved:</span>
                                                                <input type="text" class="form-control">
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h5 class="fw-normal">Vocaltional/Trade Course</h5>
                                                <div class="container text-center px-5">
                                                        
                                                    <div class="row align-items-start mt-2">
                                                        
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Name of School:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Basic Educational/Degree/Course:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Period Attendance From:</span>
                                                                <input type="text" class="form-control">
                                                                <span class="mx-2"></span>
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">To:</span>
                                                                <input type="text" class="form-control">
                                                                </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Highest Level/Unit Earned:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Year Graduated:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Scholarship/Academic Honors Recieved:</span>
                                                                <input type="text" class="form-control">
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h5 class="fw-normal">College</h5>
                                                <div class="container text-center px-5">
                                                        
                                                    <div class="row align-items-start mt-2">
                                                        
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Name of School:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Basic Educational/Degree/Course:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Period Attendance From:</span>
                                                                <input type="text" class="form-control">
                                                                <span class="mx-2"></span>
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">To:</span>
                                                                <input type="text" class="form-control">
                                                                </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Highest Level/Unit Earned:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Year Graduated:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Scholarship/Academic Honors Recieved:</span>
                                                                <input type="text" class="form-control">
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h5 class="fw-normal">Graduate Studies</h5>
                                                <div class="container text-center px-5">
                                                        
                                                    <div class="row align-items-start mt-2">
                                                        
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Name of School:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Basic Educational/Degree/Course:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Period Attendance From:</span>
                                                                <input type="text" class="form-control">
                                                                <span class="mx-2"></span>
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">To:</span>
                                                                <input type="text" class="form-control">
                                                                </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Highest Level/Unit Earned:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Year Graduated:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Scholarship/Academic Honors Recieved:</span>
                                                                <input type="text" class="form-control">
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn btn-success" >Save</button>
                                                            <button type="button" class="btn btn-danger"data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                            <div class="d-flex ms-4 justify-content-center align-items-center vh-100"> 
                                            <div id="civil-service" class="position-absolute start-10 translate-middle-y z-2 civil-service">
                                                <h4 class="fw-bold">Civil Service Eligibility </h4>
                                                <div class="container text-center px-5">
                                                    <div class="row align-items-start mt-2">
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Career Service:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Rating:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Date of Examination/Conferment:</p>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Place of Examination/Conferment:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>License:</p>
                                                                <span class="mx-5"></span>
                                                                <p>Number:</p>
                                                                <span class="mx-5"></span>
                                                                <p>Date of Validity:</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                            <div class="mt-2">
                                                                <button type="button" class="btn btn-success px-3 edit-btn-1" data-bs-toggle="modal" data-bs-target="#exampleModal4">Edit</button>
                                                                 <hr class="hr me-2"/>
                                                              </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="modal fade" id="exampleModal4"data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel4">Civil Service Eligibility</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <form>
                                                        <div class="row align-items-start mt-2">
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Career Service:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Rating:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Date of Examination/Conferment:</span>
                                                                <input type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Place of Examination/Conferment:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">License:</span>
                                                                <input type="text" class="form-control">
                                                                <span class="mx-2"></span>
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Number:</span>
                                                                <input type="text" class="form-control">
                                                                <span class="mx-2"></span>
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Date of Validity:</span>
                                                                <input type="date" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </form>  
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-success" >Save</button>
                                                            <button type="button" class="btn btn-danger"data-bs-dismiss="modal">Cancel</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>


                                            <div class="d-flex workexp-margin justify-content-center align-items-center vh-100">
                                            <div id="work-exp" class="position-absolute start-10 translate-middle-y work-exp">
                                                <h4 class="fw-bold">Work Experience  </h4>
                                                <div class="container text-center px-5">
                                                    <div class="row align-items-start mt-2">
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Inclusive Dates</p>
                                                                <span class="mx-3"></span>
                                                                <p>From:</p>
                                                                <span class="mx-5"></span>
                                                                <p>To:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Department/Agency/Office/Company:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Monthly Salary:</p>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Salary/Job/Pay Grade (if applicable)
& Step  (Format "00-0")/ Increment:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Status of Appointment:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Gov't Service (Y/N):</p>
                                                            </div>
                                                        </div>
                                                            <div class="mt-2">
                                                                <button type="button" class="btn btn-success px-3 edit-btn-1 " data-bs-toggle="modal" data-bs-target="#exampleModal5">Edit</button>
                                                                 <hr class="hr me-4"/>
                                                              </div>
                                                </div>
                                            </div>
                                            </div>
</div>

                            
                                            <div class="modal fade " id="exampleModal5"data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel5" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel5">Work Experience </h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>
                                                        <div class="row align-items-start mt-2">
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Inclusive Dates from:</span>
                                                                <input type="text" class="form-control">
                                                                <span class="mx-2"></span>
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">To:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Department/Agency/Office/Company:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Monthly Salary:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Salary/Job/Pay Grade (if applicable)
& Step  (Format "00-0")/ Increment:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Status of Appointment:</span>
                                                                <input type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Gov't Service (Y/N):</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-success" >Save</button>
                                                            <button type="button" class="btn btn-danger"data-bs-dismiss="modal">Cancel</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="d-flex workexp-margin justify-content-center align-items-center vh-100">
                                            <div id="voluntary-work" class="position-absolute start-10 translate-middle-y z-2 voluntary-work">
                                                <h5 class="fw-bold">Voluntary Work or Involvement in Civic/Non-Government/People/Voluntary Organization/s  </h5>
                                                <div class="container text-center px-5">
                                                    <div class="row align-items-start mt-2">
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Name and Address of Organization:</p>
                                                                
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Inclusive</p>
                                                                <span class="mx-3"></span>
                                                                <p>From:</p>
                                                                <span class="mx-5"></span>
                                                                <p>To:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Number of Hours:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Position/ Nature of Work:</p>
                                                            </div>
                                                        </div>
                                                            <div class="mt-2">
                                                                <button type="button" class="btn btn-success px-3 edit-btn-1" data-bs-toggle="modal" data-bs-target="#exampleModal6">Edit</button>
                                                                 <hr class="hr me-4"/>
                                                              </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="modal fade " id="exampleModal6"data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel6" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel6">Voluntary Work or Involvement in Civic/Non-Government/People/Voluntary Organization/s </h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>
                                                            <div class="row align-items-start mt-2">
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Name and Address of Organization:</span>
                                                                <input type="text" class="form-control">
                                                                
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Inclusive Dates From:</span>
                                                                <input type="text" class="form-control">
                                                                <span class="mx-2"></span>
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">To:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Number of Hours:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Position/ Nature of Work:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                </div>
                                                        </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-success" >Save</button>
                                                            <button type="button" class="btn btn-danger"data-bs-dismiss="modal">Cancel</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                            <div class="d-flex  justify-content-center align-items-center vh-100">
                                            <div id="intervention-ld" class="position-absolute start-10 translate-middle-y z-2 learn-dev">
                                                <h5 class="fw-bold">Learning and Development (L&D) Interventions/Training Programs Attended</h5>
                                                <div class="container text-center px-5">
                                                    <div class="row align-items-start mt-2">
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Title of Learning and Development Interventions/Training Programs:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Inclusive Dates of Attendance</p>
                                                                <span class="mx-3"></span>
                                                                <p>From:</p>
                                                                <span class="mx-5"></span>
                                                                <p>To:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Number of Hours:</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Type of LD( Managerial/ Supervisory/Technical/etc):</p>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>Conducted/Sponsored by:</p>
                                                            </div>
                                                        </div>
                                                            <div class="mt-2">
                                                                <button type="button" class="btn btn-success px-3 edit-btn-1"data-bs-toggle="modal" data-bs-target="#exampleModal7">Edit</button>
                                                                 <hr class="hr me-4"/>
                                                              </div>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="modal fade " id="exampleModal7"data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel7" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel7">Learning and Development (L&D) Interventions/Training Programs Attended</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>
                                                            <div class="row align-items-start mt-2">
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Title of Learning and Development Interventions/Training Programs:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Inclusive Dates of Attendance from:</span>
                                                                <input type="text" class="form-control">
                                                                <span class="mx-2"></span>
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">To:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Number of Hours:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Type of LD( Managerial/ Supervisory/Technical/etc):</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Conducted/Sponsored by :</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                </div>
                                                        </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-success" >Save</button>
                                                            <button type="button" class="btn btn-danger"data-bs-dismiss="modal">Cancel</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
            </div>
    </div>

</body>

</html>
