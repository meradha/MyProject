
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

     <title>Saksham Against TB Application</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/datepicker.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/new-sb-admin.css" rel="stylesheet">
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="css/confirm.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
    <script src="js/alert.min.js"></script>
        




<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<script type="text/javascript">
console.log( '475');
var CURRENTUSER = {
    ID      : '475',
    NAME    : 'Komal Sonawane',
    USERNAME    : 'conmh.vv@gmail.com',
    CID     : '223',
    ROLE    : 'CO',
    RoleId  : '6',
    PMID    : '0',
    POID    : '0',
    stateId :   '0',
    regionId :  '0',
    pmIdSuperior:'0',
    CODE    : 'MH59',
}
 
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}    
</script>
</head>
<body>
</body>
</html>
    <!-- jQuery -->
    
        
         

   

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
     <script src="js/user.js"></script>
     
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    input[type=checkbox]
{
  -webkit-appearance:checkbox;
}
    .label
    {
    color: #064A8E !important;
    }


 input[type="radio"]:checked + .radiolabel { 
    color: #0879EA;
     
}
input[type="radio"]:checked 
{
    border: 2px solid #0879EA;
    padding: 4.5px;
    border-radius: 10px;
    cursor: pointer;
    display: inline-block;
    position: relative;
    -webkit-appearance: none;
    outline: 0;
    background: #0879EA;

}

.selector-select{
    -moz-appearance: menupopup;
    -webkit-appearance: menupopup;
    font-size: 16px;
    line-height: 15px;
    padding: 0px;
    height: 30px;
    width: 400px; !important
    
    }
    
    
  .newDatePickerClass {
    border: 1px solid #CCC;
    border-radius: 5px 0px 0px 5px;
    width: 120px !important;
    min-width: 10px;
}
    
    
    
    </style>
    <script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
<!-- polyfiller file to detect and load polyfills -->
<!-- <script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>
<script>
  webshims.setOptions('waitReady', false);
  webshims.setOptions('forms-ext', {types: 'date'});
  webshims.polyfill('forms forms-ext');
</script> -->
<script src="js/datepicker.js"></script>
<link href="css/datepicker.css" rel="stylesheet">


</head>

<body>

    <div id="wrapper">
    <!--@author santhosh.k  -->
    <!-- Sidebar -->
      
    
    <script type="text/javascript" src="js/lib/jquery/jquery.nimble.loader.js"></script>
       
                    <script>
                  
                    $(document).ready(function() {
                         $('ul.submenu').hide();
                         $('ul.sidebar-nav > li').click(function () {
                             if ($(this).hasClass("haveSubMenu2")) {
                                 $('ul.submenu').hide('slow');
                                 $(this).removeClass("haveSubMenu2");
                                }
                             else
                                 {
                                 $('ul.submenu').hide('slow');
                                 $('ul.sidebar-nav > li').removeClass("haveSubMenu2");
                                 $(this).find('ul.submenu').toggle('slow');
                                 $(this).addClass("haveSubMenu2");
                                 }
                            
                         });
                         
                         $(".logout_icon").click(function(){
                          window.location.href = "home.htm?actionName=signout";
                         });
                         
                          });
                    </script>
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                   <li class="sidebar-brand">
                       
                           <i class="fa fa-user" aria-hidden="true"></i>
                       <p>Role: CO</p>
                       
                       <p>Region:Thane Region  </p>
                       
                        
                       <p>District: Vasai virar</p>
                        
                         
                       <p>State: Maharashtra</p>
                       
                    </li>
                    
                    <!-- <li>
                        <a href="login">Login</a>
                    </li> -->
                      <li>
                        <a href="dashboardController.htm?screenType=annualIndicatorReport"> Indicator Report</a>
                    </li>
                    
                    
                      
                     
                
                     
                     
                    
                    <li>
                        <a href="dashboardController.htm?screenType=cmpMonthlyReport">Counselor Monthly Report</a>
                    </li>
                    <li>
                        <a href="dashboardController.htm?screenType=cmpReport">Counsellor Monthly Plan </a>
                    </li>
                      <!-- <li>
                        <a href="dashboardController.htm?screenType=addNotification">Add Notification</a>
                    </li> -->
                     <li>
                        <a href="dashboardController.htm?screenType=notificationList">Notification List</a>
                    </li>
                     
                    
                    
                    <li class="crud haveSubMenu">
                        <a>Registration</a>
                     <ul class="submenu">
                    <li class="index">
                        <a href="patientRegistrationcontroller.htm">Patient Registration</a>
                    </li>
                     <li class="index"><!--  Previous Name is Pre-Sakham -->
                        <a href="patientRegistrationcontroller.htm?screenFromPresakham=presakham&screenType=PreSaksham">Previous Quarter Patient Registration</a>
                    </li> 
                    <li class="index">
                        <a href="dashboardController.htm?screenType=drtb">DR TB Registration</a>
                    </li>
                    <li class="index">
                        <a href="dashboardController.htm?screenType=inform">Base line Registration</a>
                    </li>
                     </ul>
                    </li>
                         
                    <li class="crud haveSubMenu">
                        <a>View</a>
                     <ul class="submenu">
                   <li>
                        <a href="dashboardController.htm?screenType=view">View Patients </a>
                    </li>
                    <li>
                        <a href="dashboardController.htm?screenType=viewDRTB">View DRTB Patients</a>
                    </li>
                     <li>
                        <a href="dashboardController.htm?screenType=viewPreSaksham">View Previous Quarter Patient</a>
                    </li>
                    <li>  <!--  Previous Name is Pre-Sakham -->
                        <a href="dashboardController.htm?screenType=viewPreSakshamFollowUp">View Previous Quarter Patient Follow-up</a>
                    </li>
                      <li>
                        <a href="dashboardController.htm?screenType=viewFollowup">View Follow-Ups</a>
                    </li>
                      <li> <!-- Previous Name is View Lost To Follow-Ups -->
                        <a href="dashboardController.htm?screenType=viewLTF">View Patient Not Taking Treatment Since 1 Month</a>
                    </li>  
                     <li>
                        <a href="dashboardController.htm?screenType=viewRefer">View Referral Patient </a>
                    </li>  
                      <li>
                        <a href="dashboardController.htm?screenType=viewCareGiver">View Caregiver</a>
                    </li>
                      <li>
                        <a href="dashboardController.htm?screenType=viewBaseline">View Baseline</a>
                    </li>
                    
                    
                    
                     </ul>
                    </li>
                    
                     
                     
                     
                   
                    
                    
                         
                        <li class="dashboard">
                        <a href="dashboardController.htm?screenType=dashboard">Dashboard</a>
                    </li> 
                     
                    <li class="crud haveSubMenu">
                        <a>Leave Management</a>
                     <ul class="submenu">
                     
                     
                      
                      <li><a href="dashboardController.htm?screenType=leaveManagement&flag=applyLeave&userid=475">Apply Leave</a></li>
                     
                      <li><a href="dashboardController.htm?screenType=holidayInfo&flag=holidays&userid=475">Holidays List</a></li>
                     </ul>
                    </li>
                     <li class="crud haveSubMenu">
                        <a>Attendance</a>
                     <ul class="submenu">
                     
                      <li><a href="dashboardController.htm?screenType=viewAttendance">View Attendance</a></li>
                     </ul>
                    </li>
                     
                      
                    <li class="crud haveSubMenu">
                        <a>Knowledge Base</a>
                     <ul class="submenu">
                     
                      <li><a href="dashboardController.htm?screenType=searchScreen&flag=searchScreen&start=0&limit=10&userid=475">Search File</a>
                     </ul>
                    </li>
                         
                      <li>
                        <a href="dashboardController.htm?screenType=Gcs">Group Counselling</a>
                    </li>
                    
                    <!-- <li class="logout">
                        <a href="dashboardController.htm?screenType=sendBulkSms">Send Bulk SMS</a>
                    </li> -->
                   
                   
                      <li class="logout">
                        <a href="dashboardController.htm?screenType=datadownload">Excel Download</a>
                    </li>
                    
                   
                    
                     
                    
                     
    
                        <li class="logout">
                        <a href="home.htm?actionName=signout">Logout</a>
                    </li>
                   
                   
                        
                        
                    <!-- <li class="crud">
                        <a href="dashboardController.htm?screenType=crud">Edit User</a>
                    </li>
                    
                    <li class="Manage State">
                        <a href="dashboardController.htm?screenType=state">Manage State</a>
                    </li>
                    <li class="Manage District">
                        <a href="dashboardController.htm?screenType=district">Manage District</a>
                    </li>
                    <li class="Healthcare Provider">
                        <a href="dashboardController.htm?screenType=healthcareprovider">Healthcare Provider</a>
                    </li>
                    <li class="Health Service">
                        <a href="dashboardController.htm?screenType=healthservice">Health Service</a>
                    </li>
                     <li class="Stigma Master">
                        <a href="dashboardController.htm?screenType=stigmamaster">Stigma Master</a>
                    </li>
                   <li class="Treatment Category">
                        <a href="dashboardController.htm?screenType=treatmentcategory">Treatment Category</a>
                    </li>
                    <li class="Unemployment  Cause">
                        <a href="dashboardController.htm?screenType=unemploymentcause">Unemployment  Cause</a>
                    </li>
                    <li class="Verified DrTbStatus With Card">
                        <a href="dashboardController.htm?screenType=verifieddrtbstatuswithcard">Verified DrTbStatus With Card</a>
                    </li>
                    <li class="Verified Phase With Card">
                        <a href="dashboardController.htm?screenType=verifiedphasewithcard">Verified Phase With Card</a>
                    </li>
                    <li class="Verified TbType With Card">
                        <a href="dashboardController.htm?screenType=verifiedtbtypewithcard">Verified TbType With Card</a>
                    </li>
                    <li class="Visited Place">
                        <a href="dashboardController.htm?screenType=visitedplace">Visited Place</a>
                    </li>
                    <li class="Locality Type">
                        <a href="dashboardController.htm?screenType=localitytype">Locality Type</a>
                    </li>
                     <li class="Education Qualification">
                        <a href="dashboardController.htm?screenType=educationqualification">Education Qualification</a>
                    </li>
                    <li class="Staying With">
                        <a href="dashboardController.htm?screenType=stayingwith">Staying With</a>
                    </li>
                    <li class="Occupation">
                        <a href="dashboardController.htm?screenType=occupation">Occupation</a>
                    </li>
                    <li class="Householder Type">
                        <a href="dashboardController.htm?screenType=householdertype">Householder Type</a>
                    </li>
                    <li class="Householders Income Range">
                        <a href="dashboardController.htm?screenType=householdersincomerange">Householders Income Range</a>
                    </li>
                    <li class="Marriage status">
                        <a href="dashboardController.htm?screenType=masterdatatable">Marriage status</a>
                    </li> -->
                </ul>
            </div>
            
      
        <!-- Sidebar -->
       <!--  <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                       Quick Links
                    </a>
                </li>
                <li>
                    <a href="login.html">Login</a>
                </li>
                <li class="active">
                    <a href="index.html">Patient Registration</a>
                </li>
                <li>
                    <a href="caregiver.html">Caregiver Registration</a>
                </li>
                 <li>
                    <a href="referral.html">Refer Patient</a>
                </li>
                <li>
                    <a href="follow.html">Caregiver Follow-up</a>
                </li>
                <li>
                    <a href="lost.html">Patient Follow-Up</a>
                </li>
                <li>
                    <a href="createuser.html">Create User</a>
                </li>
                <li>
                    <a href="crud.html">Edit User</a>
                </li>
                <li>
                    <a href="view.html">View Patient</a>
                </li>
                
            </ul>
        </div> -->
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
          <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"></a>
           <div class="container-fluid">
         <div class="container-fluid page_content">
            <div class="row">
               <div class="col-lg-12 col-md-12">
                  <a href="index.html"><img class="innerlogo" src="images/logo1.png"></a>
                  <h1 class="registration_form">Patient Registration Form</h1>
                   <img class="innerlogo logoright" src="images/logo2.png">
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12 col-md-12">
                  <!-- <h1 class="registration_form">Patient Registration Form</h1> -->
                  
        <ul class="nav nav-tabs mynavigation" role="tablist">
            <li role="presentation" class="active"><a class="steps" step=1 id="step1" href="#Step-1" aria-controls="Step-1" role="tab" data-toggle="tab">Step-1</a></li>
            <li role="presentation"><a class="steps" id="step2"  step=2  aria-controls="Step-2" role="tab" data-toggle="tab">Step-2</a></li><!-- href="#Step-2"  -->
            <!-- <li role="presentation"><a class="steps" id="step2"  step=2  aria-controls="Step-new" role="tab" data-toggle="tab">Step New </a></li> -->
            <li role="presentation"><a  class="steps"  id="step3" step=3 aria-controls="Step-3" role="tab" data-toggle="tab">Step-3</a></li><!--   -->
            <li role="presentation"><a  class="steps"  id="step4"  step=4 aria-controls="Step-4" role="tab" data-toggle="tab">Step-4</a></li>
            <li role="presentation"><a  class="steps"  id="step5"    step=5 aria-controls="Step-5" role="tab" data-toggle="tab">Step-5</a></li>
            <li role="presentation"><a  class="steps"  id="step6"   step=6 aria-controls="Step-6" role="tab" data-toggle="tab">Step-6</a></li>
            <li role="presentation"><a  class="steps" id="step7"    step=7  aria-controls="Step-7" role="tab" data-toggle="tab">Step-7</a></li>
            <li role="presentation"><a  class="steps"  id="step8"  step=8 aria-controls="Step-8" role="tab" data-toggle="tab">Step-8</a></li>
            <li role="presentation"><a  class="steps"  id="step9"   step=9 aria-controls="Step-9" role="tab" data-toggle="tab">Step-9</a></li>
            <li role="presentation"><a class="steps"  id="step10" step=10  aria-controls="Step-10" role="tab" data-toggle="tab">Step-10</a></li>
            <li role="presentation"  id="closeNext"><a class="steps"  step=11 id="step11" aria-controls="Step-11" role="tab" data-toggle="tab">Step-11</a></li>
        </ul>
 <div class="row price_table_row">
     <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="middle_content">
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="Step-1">
        
                  <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <span class="input_box"><input type="text" name="sakshamPatientId" style="min-width: 1px; width: 278px;" placeholder="Saksham Patient ID" readonly></span>
                           <span class="sakshamPatientIdDiv">MH/<select id=districtId><option displayName='Vasai virar' value='21'>Vasai virar</option></select>/MH59/</span>
                        </div>
                    <!--     <div class="col-lg-3 col-md-3 col-sm-12">
                          <span class="">Priority (प्राथमिकता) : 
                          <input  type="radio" name="priorityName" value="priority1"><span class="radiolabel"> 1 </span>
                          <input type="radio" name="priorityName"  value="priority2"> <span class="radiolabel">2</span> 
                          <input type="radio" name="priorityName"  value="priority3"><span class="radiolabel"> 3 </span>
                          </span>
                        </div> -->
                         <div class="col-lg-6 col-md-6 col-sm-12">
                          <span class="input_box"><input type="text"  name="blockTalukaTUName"  placeholder="TU name (TU-यूनिट)"></span>
                         </div>
                     </div>
<!--                         <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <span class="label">Finger Print Registered : <input type="radio" name="" value=""> Yes (हाँ )<input type="radio" name="" value=""> No </span>
                        </div>
                     </div>
                 <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                           <span class="label">Date of Saksham registration : </span><span class="input_box1"><input type="DATE"></span>
                        </div>
                     </div> 
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <span class="">Priority : <input type="radio" name="" value=""> 1 <input type="radio" name="" value=""> 2 <input type="radio" name="" value=""> 3 </span>
                        </div>
                     </div>-->
                 <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <input type="checkbox" name="consentForCouseling"   > Patient has provided consent for counselling (पेशेंट परामर्श के लिए सहमति प्रदान की गई है)<br>
                           <input type="checkbox" name="shareDetails"  > Patient agreed to share details about self (पेशेंट ने स्वयं की जानकारी देने व काउंसलिंग करने के लिए सहमती दी)<br>
                           <input type="checkbox" name="contentToCareGivers" > Patient has provided consent to meet Households caregivers(पेशेंट ने अपने देखभालकर्ता से मिलने के लिए सहमती दी)<br>
                            <input type="checkbox" name="contentToReceiveSMS" > Patient has provided consent for receiving SMS from Saksham (रोगी सक्षम से एसएमएस प्राप्त करने के लिए सहमति प्रदान की गई है)<br>
                        </div>
                     </div>

            
                     
                       <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <span class="label">Name of the patient:</span><br>
                          <div class="col-lg-4 col-md-4 col-sm-4">
                          <span class="input_box">
                          <input type="text" id="firstName" name="firstName" class="name" placeholder="First Name" >
                          </span>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4">
                          <span class="input_box">
                          <input type="text" id="middleName" name="middleName" class="name" placeholder="Middle Name" >
                          </span>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4">
                          <span class="input_box">
                          <input type="text" id="lastName" name="lastName" class="name" placeholder="Last Name" >
                          </span>
                          </div>
                        </div>
                        <div class="row">
                        <!-- <div class="col-lg-12 col-md-12 col-sm-12">
                        <span class="input_box"><input type="text" id="fName" name="fatherName" placeholder="Patient's father name (पेशेंट के पिता का पूरा नाम )"></span>
                        </div> -->
                          <div class="col-lg-12 col-md-12 col-sm-12">
                          <span class="label" style="    margin-left: 15px;">Patient's husband/father name :</span><br>
                          <div class="col-lg-4 col-md-4 col-sm-4">
                          <span class="input_box">
                          <input type="text" id="fatherFirstName" name="fatherFirstName" class="name" placeholder="First Name" >
                          </span>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4">
                          <span class="input_box">
                          <input type="text" id="fatherMiddleName" name="fatherMiddleName" class="name" placeholder="Middle Name" >
                          </span>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4">
                          <span class="input_box">
                          <input type="text" id="fatherLastName" name="fatherLastName" class="name" placeholder="Last Name" >
                          </span>
                          </div>
                        </div>
                        </div>
                     </div>
                     
                      
                     
                    <!--  <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                           <span class="input_box"><input type="text" name="address"  placeholder="Address (पेशेंट के पूरा पता)"></span>
                        </div>
                         
                     </div> -->
<!--                            <div class="row"> -->
<!--                               <div class="col-lg-12 col-md-12 col-sm-12"> -->
<!--                                  <span class="input_box"><input type="text"   name="landmark"  placeholder="Landmark (सीमा चिन्ह)"></span><span class="input_box labelpadding"><input type="text"  name="city" placeholder="City(शहर)"></span> -->
<!--                               </div> -->
<!--                            </div> -->
                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                            <input type="checkbox" name="havePersonalMobileNumber" > Do you have personal Mobile? <br>
                            </div>
                            </div>


                           <div class="row" id="mobileNumDiv" style="display:none">
                              <div class="col-lg-12 col-md-12 col-sm-12">
                                 <span class="input_box"><input type="text" name="mobileNo" onkeypress="return isNumberKey(event)" maxlength="10" placeholder="Mobile(मोबाइल)"></span>
                                 <span class="input_box"><input type="text" name="telephoneNo" onkeypress="return isNumberKey(event)" maxlength="10" placeholder="Alternate Telephone(वैकल्पिक टेलीफोन)"></span>
                              </div>
                           </div>
                           
                           <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12">
                                 <span class="input_box"><input type="text" name="districtCode" placeholder="District name &amp; code" readOnly></span>
                                 <!-- districtName -->
                                
                              </div>
                           </div>
                           
                           <div class="row" style="margin-bottom: 40px;">
                        
                          <div class="col-lg-12 col-md-12 col-sm-12">
                            <h4 class="label">Patient's present address (पेशेंट के पूरा पता) :</h4>
                          </div>
                         <div class="col-lg-4 col-md-4 col-sm-6">
                            <span class="input_box"><input type="text" class="text" name="presentStreetName" placeholder="Street name"></span>
                         </div>
                         <div class="col-lg-4 col-md-4 col-sm-6">
                            <span class="input_box"><input type="text" class="text" name="presentLocation" placeholder="Area"></span>
                         </div>
                         <div class="col-lg-4 col-md-4 col-sm-6">
                            <span class="input_box"><input type="text" class="text" name="presentLandmark" placeholder="Landmark"></span>
                         </div>
                         <div class="col-lg-4 col-md-4 col-sm-6">
                            <span class="input_box"><input type="text" class="text" name="presentCityTownVillage" placeholder="City/Town/Village" onkeypress="return onlyAlphabets(event,this)"></span>
                         </div>
                         <div class="col-lg-4 col-md-4 col-sm-6">
                            <span class="input_box">
                            <select id="state" class="selector-select" name="presentState">
                               <option value="0">State(राज्य)</option>
                                 
                                       <option displayname="Andhra Pradesh"   value = "1" >Andhra Pradesh</option>
                                       
                                       <option displayname="Arunachal Pradesh"   value = "2" >Arunachal Pradesh</option>
                                       
                                       <option displayname="Assam"   value = "3" >Assam</option>
                                       
                                       <option displayname="Bihar"   value = "4" >Bihar</option>
                                       
                                       <option displayname="Chhattisgarh"   value = "5" >Chhattisgarh</option>
                                       
                                       <option displayname="Goa"   value = "6" >Goa</option>
                                       
                                       <option displayname="Gujarat"   value = "7" >Gujarat</option>
                                       
                                       <option displayname="Haryana"   value = "8" >Haryana</option>
                                       
                                       <option displayname="Himachal Pradesh"   value = "9" >Himachal Pradesh</option>
                                       
                                       <option displayname="Jammu & Kashmir"   value = "10" >Jammu & Kashmir</option>
                                       
                                       <option displayname="Jharkhand"   value = "11" >Jharkhand</option>
                                       
                                       <option displayname="Karnataka"   value = "12" >Karnataka</option>
                                       
                                       <option displayname="Kerala"   value = "13" >Kerala</option>
                                       
                                       <option displayname="Madhya Pradesh"   value = "14" >Madhya Pradesh</option>
                                       
                                       <option displayname="Maharashtra"   value = "15" >Maharashtra</option>
                                       
                                       <option displayname="Manipur"   value = "16" >Manipur</option>
                                       
                                       <option displayname="Meghalaya"   value = "17" >Meghalaya</option>
                                       
                                       <option displayname="Mizoram"   value = "18" >Mizoram</option>
                                       
                                       <option displayname="Nagaland"   value = "19" >Nagaland</option>
                                       
                                       <option displayname="Odisha (Orissa)"   value = "20" >Odisha (Orissa)</option>
                                       
                                       <option displayname="Punjab"   value = "21" >Punjab</option>
                                       
                                       <option displayname="Rajasthan"   value = "22" >Rajasthan</option>
                                       
                                       <option displayname="Sikkim"   value = "23" >Sikkim</option>
                                       
                                       <option displayname="Tamil Nadu"   value = "24" >Tamil Nadu</option>
                                       
                                       <option displayname="Telangana"   value = "25" >Telangana</option>
                                       
                                       <option displayname="Tripura"   value = "26" >Tripura</option>
                                       
                                       <option displayname="Uttar Pradesh"   value = "27" >Uttar Pradesh</option>
                                       
                                       <option displayname="Uttarakhand"   value = "28" >Uttarakhand</option>
                                       
                                       <option displayname="West Bengal"   value = "29" >West Bengal</option>
                                       
                                       </select>
                            
                            </span>
                         </div>
                         <div class="col-lg-4 col-md-4 col-sm-6">
                            <span class="input_box"><input type="text" class="text" name="presentPincode" onkeypress="return isNumberKey(event)" maxlength="6" placeholder="Pincode"></span>
                         </div>
                        </div>
                           
                           
                           

            </div>
            
            
            <div role="tabpanel" class="tab-pane" id="Step-2">
            <div class="row">
                        
                          <div class="col-lg-12 col-md-12 col-sm-12">
                            <h4 class="label">Patient's permanent address (पेशेंट के पूरा पता) :</h4>
                          </div>
                          
                            <div class="col-lg-12 col-md-12 col-sm-12" >
                            <input type="checkbox" name="samePermanentAddress" > Same as present address ? <br>
                            </div>
                            
                         <div class="col-lg-4 col-md-4 col-sm-6">
                            <span class="input_box"><input type="text" name="permanentStreetName" placeholder="Street name"></span>
                         </div>
                         <div class="col-lg-4 col-md-4 col-sm-6">
                            <span class="input_box"><input type="text" name="permanentLocation" placeholder="Area"></span>
                         </div>
                         <div class="col-lg-4 col-md-4 col-sm-6">
                            <span class="input_box"><input type="text" name="permanentLandmark" placeholder="Landmark"></span>
                         </div>
                         <div class="col-lg-4 col-md-4 col-sm-6">
                            <span class="input_box"><input type="text" name="permanentCityTownVillage" placeholder="City/Town/Village" onkeypress="return onlyAlphabets(event,this)"></span>
                         </div>
                         <div class="col-lg-4 col-md-4 col-sm-6">
                            <span class="input_box">
                                                        <select id="permanentState" class="selector-select" name="permanentState">
                               <option value="0">State(राज्य)</option>
                                 
                                       <option displayname="Andhra Pradesh" value = "1" >Andhra Pradesh</option>
                                       
                                       <option displayname="Arunachal Pradesh" value = "2" >Arunachal Pradesh</option>
                                       
                                       <option displayname="Assam" value = "3" >Assam</option>
                                       
                                       <option displayname="Bihar" value = "4" >Bihar</option>
                                       
                                       <option displayname="Chhattisgarh" value = "5" >Chhattisgarh</option>
                                       
                                       <option displayname="Goa" value = "6" >Goa</option>
                                       
                                       <option displayname="Gujarat" value = "7" >Gujarat</option>
                                       
                                       <option displayname="Haryana" value = "8" >Haryana</option>
                                       
                                       <option displayname="Himachal Pradesh" value = "9" >Himachal Pradesh</option>
                                       
                                       <option displayname="Jammu & Kashmir" value = "10" >Jammu & Kashmir</option>
                                       
                                       <option displayname="Jharkhand" value = "11" >Jharkhand</option>
                                       
                                       <option displayname="Karnataka" value = "12" >Karnataka</option>
                                       
                                       <option displayname="Kerala" value = "13" >Kerala</option>
                                       
                                       <option displayname="Madhya Pradesh" value = "14" >Madhya Pradesh</option>
                                       
                                       <option displayname="Maharashtra" value = "15" >Maharashtra</option>
                                       
                                       <option displayname="Manipur" value = "16" >Manipur</option>
                                       
                                       <option displayname="Meghalaya" value = "17" >Meghalaya</option>
                                       
                                       <option displayname="Mizoram" value = "18" >Mizoram</option>
                                       
                                       <option displayname="Nagaland" value = "19" >Nagaland</option>
                                       
                                       <option displayname="Odisha (Orissa)" value = "20" >Odisha (Orissa)</option>
                                       
                                       <option displayname="Punjab" value = "21" >Punjab</option>
                                       
                                       <option displayname="Rajasthan" value = "22" >Rajasthan</option>
                                       
                                       <option displayname="Sikkim" value = "23" >Sikkim</option>
                                       
                                       <option displayname="Tamil Nadu" value = "24" >Tamil Nadu</option>
                                       
                                       <option displayname="Telangana" value = "25" >Telangana</option>
                                       
                                       <option displayname="Tripura" value = "26" >Tripura</option>
                                       
                                       <option displayname="Uttar Pradesh" value = "27" >Uttar Pradesh</option>
                                       
                                       <option displayname="Uttarakhand" value = "28" >Uttarakhand</option>
                                       
                                       <option displayname="West Bengal" value = "29" >West Bengal</option>
                                       
                                       </select>
                            </span>
                         </div>
                         <div class="col-lg-4 col-md-4 col-sm-6">
                            <span class="input_box"><input type="text" name="permanentPincode" onkeypress="return isNumberKey(event)" maxlength="6" placeholder="Pincode"></span>
                         </div>
              </div>
              <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">       
                           <span class="label" style="float:left;">Date of Saksham registration : </span>
                           <span class="input_box1" style="pointer-events: none;">
                          <span class="date-input date">
                            <span class="input-group input-append date" id="to-datePicker" class="noFutureDates">
                                <input type="text" class="form-control" placeholder="DD/MM/YYYY" name="sakshamRegDate">
                                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                            </span>
                           </span>                
                          </span>
             </div>
              <div class="col-lg-12 col-md-12 col-sm-12">
                  <span class="label">Place of registration :</span>
                  
             <input type="radio" id="reg_place" name="reg_place" displayname="Health Center ( हेल्थ सेंटर/फ़सिलिटी )" value="1"> Health Center ( हेल्थ सेंटर/फ़सिलिटी ) 
              
             <input type="radio" id="reg_place" name="reg_place" displayname="Home (घर)" value="2"> Home (घर) 
              
             <input type="radio" id="reg_place" name="reg_place" displayname="Workplace (ऑफिस)" value="3"> Workplace (ऑफिस) 
              
             <input type="radio" id="reg_place" name="reg_place" displayname="Other (अन्य सुविधाजनक जगह)" value="4"> Other (अन्य सुविधाजनक जगह) 
              
              
              <span class="input_box1">
                    <input type="text" name="reg_place_text" style="display: none;">
              </span>
              </div>
            <div class="col-lg-12 col-md-12 col-sm-12">     
            
                           <span class="label" style="float:left;">Patient's Date of Birth (जन्म दिनांक) : </span>
                           <span class="input_box1">
                          <span class="date-input date">
                            <span class="input-group input-append date noFutureDates" id="off-datePicker" >
                                <input type="text" class="form-control noFutureDates" placeholder="DD/MM/YYYY" name="patientDateOfBirth" >
                                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                            </span>
                           </span>                
                          </span>
            </div>
            
            </div>
            <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12">
                                 <span class="label">Religion (धर्म) :  <br></span>
                                 <span class="input_box1">
                                 
                                 
                                 <input type="radio" displayname="Hindu (हिंदू)"  id="patient_religion" name="patient_religion" value="1">
                                <span class="radiolabel">Hindu (हिंदू) </span> 
                                 
                                 <input type="radio" displayname="Muslim (मुसलमान)"  id="patient_religion" name="patient_religion" value="2">
                                <span class="radiolabel">Muslim (मुसलमान) </span> 
                                 
                                 <input type="radio" displayname="Buddhist (बुद्ध धर्म)"  id="patient_religion" name="patient_religion" value="3">
                                <span class="radiolabel">Buddhist (बुद्ध धर्म) </span> 
                                 
                                 <input type="radio" displayname="Christian(ईसाई)"  id="patient_religion" name="patient_religion" value="4">
                                <span class="radiolabel">Christian(ईसाई) </span> 
                                 
                                 <input type="radio" displayname="Sikh (सिख)"  id="patient_religion" name="patient_religion" value="5">
                                <span class="radiolabel">Sikh (सिख) </span> 
                                 
                                 <input type="radio" displayname="Any other (अन्य)"  id="patient_religion" name="patient_religion" value="6">
                                <span class="radiolabel">Any other (अन्य) </span> 
                                 
                                 
                                 <input type="text" name="patient_religion_text" style="display: none">
                                 </span>
                              </div>
            </div>
            <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12" style=" margin-bottom: 40px;">
                                 <span class="label">Caste (जाति) :  <br></span>
                                 <span class="input_box1">
                                 
                                 
                                 
                                <input type="radio" displayname="Scheduled Caste (अनुसूचित जाति)" name="patient_caste" id="patientCaste" value="1">
                                <span class="radiolabel"> Scheduled Caste (अनुसूचित जाति) </span> 
                                 
                                 
                                <input type="radio" displayname="Scheduled Tribe (अनुसूचित जनजाति)" name="patient_caste" id="patientCaste" value="2">
                                <span class="radiolabel"> Scheduled Tribe (अनुसूचित जनजाति) </span> 
                                 
                                 
                                <input type="radio" displayname="Other Backward Class (अन्य पिछड़ा वर्ग)" name="patient_caste" id="patientCaste" value="3">
                                <span class="radiolabel"> Other Backward Class (अन्य पिछड़ा वर्ग) </span> 
                                 
                                 
                                <input type="radio" displayname="General (सामान्य)" name="patient_caste" id="patientCaste" value="4">
                                <span class="radiolabel"> General (सामान्य) </span> 
                                 
                                 
                                <input type="radio" displayname="Other" name="patient_caste" id="patientCaste" value="5">
                                <span class="radiolabel"> Other </span> 
                                 
                                  <input type="text" name="patient_caste_text" style="display: none">
                                </span>
                              </div>
            </div>
            </div>
            
            

            <div role="tabpanel" class="tab-pane" id="Step-3">
                        <div class="row">
                        
                                <div class="col-lg-12 col-md-12 col-sm-12">
                            <input type="checkbox" name="haveAdharCardNumber"> Do you have Aadhaar card No? <br>
                            
                            <div id="aadhaarStatusDiv">
                            <span class="label">Aadhaar Status </span>
                                <span class="input_box1">
                                <input type="radio" displayname="Not yet applied" name="adharSatus"  class="adharSatus" value="2">
                                    <span class="radiolabel"> Not yet applied</span> 
                                    
                                    <input type="radio" displayname="Not available" name="adharSatus" class="adharSatus" value="1">
                                    <span class="radiolabel"> Not available</span> 
                                    <input type="radio" displayname="Under process" name="adharSatus" class="adharSatus" value="3">
                                    <span class="radiolabel"> Under process</span> 
                                </span> 
                                
                            </div>
                            
                            </div>
                            
                              <div class="col-lg-12 col-md-12 col-sm-12" id="adharCardDiv" style="display: none">
                                <span class="input_box"><input name="adharNo" onkeypress="return isNumberKey(event)" maxlength="12" type="text" placeholder="Aadhaar card No (आधार कार्ड नंबर)"></span><br>
                                
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                <span class="label">Type of Ration card : </span>
                                <span class="input_box1">
                                
                                 
                                       
                                      
                                <input type="radio" displayname="Antodaya" name="rationcardColor" value="1">
                                <span class="radiolabel"> Antodaya</span> 
                                  
                                       
                                      
                                <input type="radio" displayname="Above Poverty line" name="rationcardColor" value="2">
                                <span class="radiolabel"> Above Poverty line</span> 
                                  
                                       
                                      
                                <input type="radio" displayname="Below Poverty line" name="rationcardColor" value="3">
                                <span class="radiolabel"> Below Poverty line</span> 
                                  
                                       
                                      
                                <input type="radio" displayname="Not yet applied" name="rationcardColor" value="4">
                                <span class="radiolabel"> Not yet applied</span> 
                                  
                                       
                                      
                                <input type="radio" displayname="Under process" name="rationcardColor" value="5">
                                <span class="radiolabel"> Under process</span> 
                                  
                                       
                                      
                                <input type="radio" displayname="Others" name="rationcardColor" value="6">
                                <span class="radiolabel"> Others</span> 
                                  
                                       
                                  <input type="text" name="otherRationCardTypeText" style="display: none">
                                </span>
                                <!--  <span class="input_box">
                                    <select class="selectpicker">
                                       <option>Select Color</option>
                                       <option>Red</option>
                                       <option>Green</option>
                                       <option>Yellow</option>
                                    </select>
                                 </span> -->
                              </div>
                           </div>
                        <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12">
                                 <span class="label">First Health-care provider contact: </span><br>
                                
                           
                                 <span class="label">Patient approached with symptoms:  </span><br>
                                 <span class="input_box1">
                                 
                                       <input type="radio" name="healthCareProvider" displayname="Government Facility" value= "1"><span class="radiolabel"> Government Facility&nbsp;</span>
                                       
                                       <input type="radio" name="healthCareProvider" displayname="Private Modern Practitioner" value= "2"><span class="radiolabel"> Private Modern Practitioner&nbsp;</span>
                                       
                                       <input type="radio" name="healthCareProvider" displayname="NGO Hospital" value= "3"><span class="radiolabel"> NGO Hospital&nbsp;</span>
                                       
                                       <input type="radio" name="healthCareProvider" displayname="AYUSH Practitioner" value= "4"><span class="radiolabel"> AYUSH Practitioner&nbsp;</span>
                                       
                                       <input type="radio" name="healthCareProvider" displayname="Non-qualified Practitioner(baba)/Faith Healer" value= "5"><span class="radiolabel"> Non-qualified Practitioner(baba)/Faith Healer&nbsp;</span>
                                       
                                       <input type="radio" name="healthCareProvider" displayname="Pharmacy" value= "6"><span class="radiolabel"> Pharmacy&nbsp;</span>
                                       
                                       <input type="radio" name="healthCareProvider" displayname="Others" value= "7"><span class="radiolabel"> Others&nbsp;</span>
                                       
                                 
                                <!--  <input type="text" name="healthCareProvider_text" style="display: none;"> -->
                                  <span class="input_box"><input type="text" name="firstHealthCareProviderContact" style="display: none"></span>
                                 
                            <!--    <input type="radio" name="patient_approach" value=""><span class="radiolabel"> Government facility</span>
                                 <input type="radio" name="patient_approach" value=""><span class="radiolabel"> Private modern practitioner </span>
                                 <input type="radio" name="patient_approach" value=""><span class="radiolabel"> NGO hospital</span>
                                  <input type="radio" name="patient_approach" value=""><span class="radiolabel">AYUSH Practitioner</span>
                                   <input type="radio" name="patient_approach" value=""><span class="radiolabel"> Non-qualified practitioner(baba)/faith healer</span>
                                    <input type="radio" name="patient_approach" value=""><span class="radiolabel"> Pharmacy</span> 
                                    <input type="radio" name="patient_approach" value=""><span class="radiolabel">Others </span> -->
                                </span>
                                 <!-- <span class="input_box1">
                                    <select class="selectpicker">
                                       <option>Select (एक चुनो)</option>
                                       <option>Government facility</option>
                                       <option>Private modern practitioner</option>
                                       <option>NGO hospital</option>
                                       <option>AYUSH Practitioner</option>
                                       <option>Non-qualified practitioner(baba)/faith healer</option>
                                       <option>Pharmacy</option>
                                       <option>Others</option>
                                    </select>
                                 </span> -->
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12">
                                 <span class="label">Type of locality (पेशेंट की रिहायशी जगह का प्रकार):  <br/></span>
                                 <span class="input_box1">
                                 
                                  
                                       <input type="radio" displayname="Urban Slum" name="localityType" value = "1" ><span class="radiolabel">Urban Slum&nbsp;</span> 
                                       
                                       <input type="radio" displayname="Urban Non-slum" name="localityType" value = "2" ><span class="radiolabel">Urban Non-slum&nbsp;</span> 
                                       
                                       <input type="radio" displayname="Rural" name="localityType" value = "3" ><span class="radiolabel">Rural&nbsp;</span> 
                                       
                                       <input type="radio" displayname="Any Other" name="localityType" value = "4" ><span class="radiolabel">Any Other&nbsp;</span> 
                                       
                            
                            <input type="text" name="localityType_text" style="display: none">
                                </span>
         
                              </div>
                              
                           </div>
                         <div class="row">
                            <div class="col-lg-12 col-md-12col-sm-12">
                           <span class="label">Age (in completed years) (पशेंट की उम्र (पुरे किये हुए साल में )): </span><span class="input_box1">
                           <input onkeypress="return isNumberKey(event)" maxlength="2" type="text" name="age" style="min-width: 1px !important;width: 5%; text-align: center;"></span>
                           </div>
                           <div class="col-lg-12 col-md-12 col-sm-12">
                              <span class="label">Sex (पेशेंट का लिंग): <br/></span>
                              <span class="input_box1">
                                <input type="radio" name="gender" displayName="Male (पुरूष)" value="1"><span class="radiolabel"> Male (पुरूष) &nbsp;</span>
                                <input type="radio" name="gender" displayName="Female (महिला)" value="2"><span class="radiolabel"> Female (महिला)&nbsp; </span>
                                <input type="radio" name="gender" displayName="Transgender (ट्रांसजेंडर)" value="3"><span class="radiolabel"> Transgender (ट्रांसजेंडर)&nbsp;</span>
                                </span>
                             <!--  <span class="input_box1">
                              <select class="selectpicker">
                              <option>Select Sex</option>
                              <option>Male (पुरूष)</option>
                              <option>Female (महिला)</option>   
                              <option>Transgender (ट्रांसजेंडर)</option>
                              </select>                  
                              </span> -->
                              </div>
                           </div>
                           
                                               
                           
            </div>
            <div role="tabpanel" class="tab-pane" id="Step-4">

            <div class="row">
                           <div class="col-lg-12 col-md-12 col-sm-12">
                           <span class="label">Education (पेशेंट की  शेक्षणिक योग्यता): <br/></span>
                           <span class="input_box1">
                            
                           
                                       <input type="radio" displayname="Illiterate (निरक्षर) " class="radiolabel" name="educationQualification" value = "1" ><span class="radiolabel">Illiterate (निरक्षर) &nbsp; </span>
                                       
                                       <input type="radio" displayname="Primary (प्राइमरी) " class="radiolabel" name="educationQualification" value = "2" ><span class="radiolabel">Primary (प्राइमरी) &nbsp; </span>
                                       
                                       <input type="radio" displayname="SSC (सेकेंडरी) " class="radiolabel" name="educationQualification" value = "3" ><span class="radiolabel">SSC (सेकेंडरी) &nbsp; </span>
                                       
                                       <input type="radio" displayname="HSC Diploma(डिप्लोमा) " class="radiolabel" name="educationQualification" value = "4" ><span class="radiolabel">HSC Diploma(डिप्लोमा) &nbsp; </span>
                                       
                                       <input type="radio" displayname="Graduate (ग्रेजुएट) " class="radiolabel" name="educationQualification" value = "5" ><span class="radiolabel">Graduate (ग्रेजुएट) &nbsp; </span>
                                       
                                       <input type="radio" displayname="Post graduate (पोस्ट-ग्रेजुएट) " class="radiolabel" name="educationQualification" value = "6" ><span class="radiolabel">Post graduate (पोस्ट-ग्रेजुएट) &nbsp; </span>
                                       
                                       <input type="radio" displayname="Certificate course(सर्टिफिकेट कोर्स) " class="radiolabel" name="educationQualification" value = "7" ><span class="radiolabel">Certificate course(सर्टिफिकेट कोर्स) &nbsp; </span>
                                       
                                       <input type="radio" displayname="Any other (अन्य) " class="radiolabel" name="educationQualification" value = "8" ><span class="radiolabel">Any other (अन्य) &nbsp; </span>
                                       
                                       
                                    <input type="text" name="educationQualification_text" style="display: none;">   
                                <!-- <input type="radio" name="education123" value=""><span class="radiolabel"> Illiterate (निरक्षर) </span>
                                <input type="radio" name="education123" value=""><span class="radiolabel"> Primary (प्राइमरी)</span> 
                                <input type="radio" name="education123" value=""><span class="radiolabel"> SSC (सेकेंडरी) </span>
                                <input type="radio" name="education123" value=""><span class="radiolabel">HSC Diploma/Certificate course(डिप्लोमा/ सर्टिफिकेट कोर्स) </span>
                                <input type="radio" name="education123" value=""><span class="radiolabel"> Graduate (ग्रेजुएट) </span>
                                <input type="radio" name="education123" value=""><span class="radiolabel"> Post graduate (पोस्ट-ग्रेजुएट) </span>
                                <input type="radio" name="education123" value=""><span class="radiolabel"> Any other (अन्य)</span> -->
                                </span>
                           <!-- <span class="input_box1">
                           <select class="selectpicker">
                           <option>Select Education</option>
                           <option>Illiterate (निरक्षर)</option>
                           <option>Primary (प्राइमरी)</option>  
                           <option>SSC (सेकेंडरी)</option>
                           <option>HSC Diploma/Certificate course(डिप्लोमा/ सर्टिफिकेट कोर्स)</option>
                           <option>Graduate (ग्रेजुएट)</option>
                           <option>Post graduate (पोस्ट-ग्रेजुएट)</option>
                           <option>Any other (अन्य)</option>
                           </select>
                           </span> -->
                           </div>
                           </div>
                           <div class="row">
                           <div class="col-lg-12 col-md-12 col-sm-12">
                           <span class="label">Current working status (पेशेंट की वर्तमान कार्य की स्थिति): <br/></span><span class="input_box1">
                           <input type="radio" name="workingStatus" value="Employed"><span class="radiolabel"> Employed (कार्यरत)&nbsp; </span>
                            <input type="radio" name="workingStatus" value="Unemployed"><span class="radiolabel"> Unemployed (बेरोजगार) </span></span>
                           </div>
                           <div class="col-lg-12 col-md-12 col-sm-12" id="working_statusdiv1">
                           <span class="label">If Employed, Occupation (पेशेंट किस प्रकार के कार्य में है ): <br/></span>
                           <span class="input_box1">
                           
                            
                                    <input type="radio" displayname="Professional (प्रोफेशनल)" name="occupation" value= "1" ><span class="radiolabel">Professional (प्रोफेशनल)&nbsp; </span>
                                       
                                    <input type="radio" displayname="Semi Professional/Clerk (सेमी-प्रोफेशनल/क्लर्क)" name="occupation" value= "2" ><span class="radiolabel">Semi Professional/Clerk (सेमी-प्रोफेशनल/क्लर्क)&nbsp; </span>
                                       
                                    <input type="radio" displayname="Trades/Business/Shop-owner (बिज़नस/ट्रेड/दुकान का मालिक)" name="occupation" value= "3" ><span class="radiolabel">Trades/Business/Shop-owner (बिज़नस/ट्रेड/दुकान का मालिक)&nbsp; </span>
                                       
                                    <input type="radio" displayname="Skilled Manual Worker/farmer (कुशल/स्किल्ड मजदूर/ किसान)" name="occupation" value= "4" ><span class="radiolabel">Skilled Manual Worker/farmer (कुशल/स्किल्ड मजदूर/ किसान)&nbsp; </span>
                                       
                                    <input type="radio" displayname="Unskilled Manual worker (अकुशल मजदूर)" name="occupation" value= "5" ><span class="radiolabel">Unskilled Manual worker (अकुशल मजदूर)&nbsp; </span>
                                       
                                    <input type="radio" displayname="Any other (अन्य)" name="occupation" value= "6" ><span class="radiolabel">Any other (अन्य)&nbsp; </span>
                                       
                                <!-- <input type="radio" name="occupation123" value=""><span class="radiolabel"> Professional (प्रोफेशनल) </span>
                                <input type="radio" name="occupation123" value=""><span class="radiolabel"> Semi Professional/Clerk (सेमी-प्रोफेशनल/क्लर्क) </span>
                                <input type="radio" name="occupation123" value=""> <span class="radiolabel">Trades/Business/Shop-owner (बिज़नस/ट्रेड/दुकान का मालिक) </span>
                                <input type="radio" name="occupation123" value=""><span class="radiolabel">Skilled Manual Worker/farmer (कुशल/स्किल्ड मजदूर/ किसान) </span>
                                <input type="radio" name="occupation123" value=""><span class="radiolabel"> Unskilled Manual worker (अकुशल मजदूर) </span>
                                <input type="radio" name="occupation123" value=""><span class="radiolabel"> Any other (अन्य)</span> -->
                            
                            <input type="text" name="occupation_text" style="display: none;">
                            </span>
                           <!-- <span class="input_box1">
                           <select class="selectpicker">
                           <option>Select Occupation</option>
                           <option>Professional (प्रोफेशनल)</option>
                           <option>Semi Professional/Clerk (सेमी-प्रोफेशनल/क्लर्क)</option> 
                           <option>Trades/Business/Shop-owner (बिज़नस/ट्रेड/दुकान का मालिक)</option>
                           <option>Skilled Manual Worker/farmer (कुशल/स्किल्ड मजदूर/ किसान)</option>
                           <option>Unskilled Manual worker (अकुशल मजदूर)</option>
                           <option>Any other (अन्य)</option>
                           </select></span> -->
                           </div>
                           <div class="col-lg-12 col-md-12 col-sm-12" id="working_statusdiv2">
                           <span class="label">If unemployed please specify (पेशेंट के बेरोजगार होने की वजह): <br/></span>
                            <span class="input_box1">
                            
                            
                          <input type="radio" displayname="Was not working earlier (पहले से कभी काम नहीं किया)" name="unEmploymentCause" value= "1" ><span class="radiolabel">Was not working earlier (पहले से कभी काम नहीं किया)&nbsp;</span>
                                       
                          <input type="radio" displayname="Voluntarily left work due to TB(illness) (इच्छा से काम छोड़ दिया के कारण)" name="unEmploymentCause" value= "2" ><span class="radiolabel">Voluntarily left work due to TB(illness) (इच्छा से काम छोड़ दिया के कारण)&nbsp;</span>
                                       
                          <input type="radio" displayname="Lost job due to TB disease (टीबी की बीमारी के कारण नौकरी खो दिया है)" name="unEmploymentCause" value= "3" ><span class="radiolabel">Lost job due to TB disease (टीबी की बीमारी के कारण नौकरी खो दिया है)&nbsp;</span>
                                       
                          <input type="radio" displayname="Student (स्टूडेंट)" name="unEmploymentCause" value= "4" ><span class="radiolabel">Student (स्टूडेंट)&nbsp;</span>
                                       
                          <input type="radio" displayname="Home Maker (होम-मेकर)" name="unEmploymentCause" value= "5" ><span class="radiolabel">Home Maker (होम-मेकर)&nbsp;</span>
                                       
                          <input type="radio" displayname="Retired (अवकाश प्राप्त")" name="unEmploymentCause" value= "6" ><span class="radiolabel">Retired (अवकाश प्राप्त")&nbsp;</span>
                                       
                          <input type="radio" displayname="Any other (अन्य)" name="unEmploymentCause" value= "7" ><span class="radiolabel">Any other (अन्य)&nbsp;</span>
                                       
                                 
                            <input type="text" name="unEmploymentCauseText"  style="display: none">
                            </span>
                            
                           <!-- <span class="input_box1">
                           <select class="selectpicker">
                           <option>Select One</option>
                           १. पहले से कभी काम नहीं किया २.इच्छा से काम छोड़ दिया  के कारण ३. के कारण नौकरी खो दी ४. स्टूडेंट ५. होम-मेकर  ६. रिटायर्ड ७.अन्य
                           <option>Was not working earlier (पहले से कभी काम नहीं किया)</option>
                           <option>Voluntarily left work due to TB(illness) (इच्छा से काम छोड़ दिया  के कारण)</option>   
                           <option>Lost job due to TB disease (के कारण नौकरी खो दी)</option>
                           <option>Student (स्टूडेंट)</option>
                           <option>Home Maker (होम-मेकर)</option>
                           <option>Retired</option>
                           <option>Other Specify</option>
                           </select>
                           </span> -->
                           </div>
                           </div>
            
            </div>
            <div role="tabpanel" class="tab-pane" id="Step-5">
                           <div class="row">
                           <div class="col-lg-12 col-md-12 col-sm-12">
                           <span class="label">Staying (पेशेंट मकान में किस के साथ रहता है ): </span><span class="input_box1">
                           <select id="stayingWith" name="stayingWith" class="selectpicker">
                           
                           
                            <option value="0">Select Staying</option>
                           
                                       <option displayname="Alone (अकेले )" value = "1" >Alone (अकेले )</option>
                                       
                                       <option displayname="Family (परिवार के साथ )" value = "2" >Family (परिवार के साथ )</option>
                                       
                                       <option displayname="Relative or friend (रिश्तेदार/अन्य के साथ)" value = "3" >Relative or friend (रिश्तेदार/अन्य के साथ)</option>
                                       
                          <!--  <option>Select Staying</option>
                           <option>Alone (अकेले)</option>
                           <option>With Households (परिवार के साथ)</option> 
                           <option>With Others (रिश्तेदार/अन्य के साथ)</option> -->
                           </select></span>
                           </div>
                           </div>
                           
                           <div id="aloneDIv">
                            <div class="row">
                           <div class="col-lg-12 col-md-12 col-sm-12">      
                           <span class="input_box"><input onkeypress="return isNumberKey(event)" maxlength="2" name="houseHoldMembers" type="text" placeholder="Total no of Households members (पेशेंट जहाँ रहता है उस मकान में सदस्यों की संख्यां)" style="width: 80%;"></span>
                           </div>
                           </div>
                           
                           <div class="row">
                           <div class="col-lg-12 col-md-12 col-sm-12">
                           <span class="input_box"><input onkeypress="return isNumberKey(event)" maxlength="2"  name="totalNumOfChildrensLessThanSixYears" type="text" placeholder="Total no of children less than 6yrs in the household (पेशेंट जहाँ रहता है उस मकान  में ६ साल से कम उम्र के बच्चों की संख्या)" style="width: 80%;"></span>
                           </div>
                           <div class="col-lg-12 col-md-12 col-sm-12">
                           <span class="input_box"><input onkeypress="return isNumberKey(event)" maxlength="2" name="totalNumOfEarningMembers" type="text" placeholder="Total no of earning members in the household (पेशेंट के परिवार में कमाने वाले सदस्यों की संख्या)" style="width: 80%;"></span>
                           </div>
                           </div>
                            </div>
                           <div class="row">
                           <div class="col-lg-12 col-md-12 col-sm-12">
                           <span class="label">Average Monthly Households income from all sources (पेशेंट के परिवार की सभी स्त्रोत्रों से मासिक आय): </span><span class="input_box1">
                           <select id="houseHoldIncomeRange" class="selectpicker">
                            <option value="0">Select Monthly income</option>
                           
                                       <option displayname="Less than 5000 (Less than 5000 )" value = "1" >Less than 5000 (Less than 5000 )</option>
                                       
                                       <option displayname="5001 to 10000 (5001 से 10000  )" value = "2" >5001 to 10000 (5001 से 10000  )</option>
                                       
                                       <option displayname="10001 to 25000 (10001 से  25000 )" value = "3" >10001 to 25000 (10001 से  25000 )</option>
                                       
                                       <option displayname="25001 to 50000 (25001 से  50000 )" value = "4" >25001 to 50000 (25001 से  50000 )</option>
                                       
                                       <option displayname="50001 to 100000 (50001 से 100000 )" value = "5" >50001 to 100000 (50001 से 100000 )</option>
                                       
                                       <option displayname="More than 1 lakh (१ लाख से अधिक)" value = "6" >More than 1 lakh (१ लाख से अधिक)</option>
                                       
                                       <option displayname="No source of Income (कोई भी आय नहीं)" value = "7" >No source of Income (कोई भी आय नहीं)</option>
                                       
                        <!--    <option>Select Monthly income</option>
                           <option>Less than 5000</option>
                           <option>5001 to 10000</option>   
                           <option>10001 to 25000</option>
                           <option>25001 to 50000</option>
                           <option>50001 to 100000</option> -->
                           </select></span>   
                           </div>
                           </div>
                          
                           <div class="row">
                           <div class="col-lg-12 col-md-12 col-sm-12">
                           <span class="label">Current Marital Status (वर्तमान वैवाहिक स्थिति ): </span><span class="input_box1">
                           <select id="marriageStatus" class="selectpicker">
                            <option value="0">Select Marital Status</option>
                           
                                       <option displayname="Never Married (कभी शादी नहीं हुयी )" value = "1" >Never Married (कभी शादी नहीं हुयी )</option>
                                       
                                       <option displayname="Presently Married (अभी शादीशुदा )" value = "2" >Presently Married (अभी शादीशुदा )</option>
                                       
                                       <option displayname="Divorced/ Separated/ Deserted (दिवोर्सड/अलग/ छोड़ दिया )" value = "3" >Divorced/ Separated/ Deserted (दिवोर्सड/अलग/ छोड़ दिया )</option>
                                       
                                       <option displayname="Widow/ Widower (विधवा/विधुर)" value = "4" >Widow/ Widower (विधवा/विधुर)</option>
                                       
                           <!-- <option>Select Marital Status</option>
                           <option>Never married (कभी शादी नहीं हुयी)</option>
                           <option>Presently Married (अभी शादीशुदा)</option>    
                           <option>Divorced /Separated/ Deserted (दिवोर्सड/अलग/ छोड़ दिया)</option>
                           <option>Widow/widower (विधवा/विधुर)</option> -->
                           </select></span>   
                           </div>
                           </div>
                           <div class="row">
                           <div class="col-lg-12 col-md-12 col-sm-12">
                           <span class="label">Living in present city/town/village since: </span><span class="input_box1">
                           <select id="livingLocalitySince" class="selectpicker">
                            <option value="0">Select</option>
                           
                                       <option displayname="<1 (१ साल से भी कम )" value = "1" ><1 (१ साल से भी कम )</option>
                                       
                                       <option displayname="1 - 5 Yrs (1 - 5 साल )" value = "2" >1 - 5 Yrs (1 - 5 साल )</option>
                                       
                                       <option displayname="5-10 Yrs (5-10 साल)" value = "3" >5-10 Yrs (5-10 साल)</option>
                                       
                                       <option displayname=">10 Yrs (10 साल से अधिक)" value = "4" >>10 Yrs (10 साल से अधिक)</option>
                                       
                                       <option displayname="Since Birth (जन्म से)" value = "5" >Since Birth (जन्म से)</option>
                                       
                        <!--    <option>Select</option>
                           <option>< 1yr</option>
                           <option>1 - 5 Yrs.</option>  
                           <option>5-10 Yrs.</option>
                           <option>>10 Yrs.</option>
                           <option>since Birth</option> -->
                           </select></span>   
                           </div>
                           </div>         
            </div>
            <div role="tabpanel" class="tab-pane" id="Step-6">
            <div class="row price_table_row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                <span class="label">Do you have households ? </span><span
                                                            class="input_boxradio"><input type="radio"
                                                            name="hasHHM" value="yes"> Yes(हाँ) <input type="radio"   name="hasHHM" value="no"> No(ना)</span>
                
                <table  class="price_table detailsHouseHoldsMenbers" width="100%" cellpadding="5" cellspacing="5">
                        <tr class="tableHead"><td colspan="11"><h3 class="registration_form">Details of Households members:</h3>
                        <a style="float:right;" id="deleteRow"> Delete</a>
                        <a style="float:right;margin-right: 20px;" id="addRow"  > Add </a>
                         </td></tr>
                        <tr class="tableHead">
                        <th width="10"></th>
                        <th width="50">SNO</th>
                        <th  width="180">Name of Households Members (presently residing with)</th>
                        <th  width="60">Care Giver Y/N</th>
                        <th  width="80">Age (Completed in Yrs.)</th>
                        <th  width="60">Sex (M/F/TG)</th>
                        <th  width="100">Relationship with Patient</th>
                        <th  width="150">Did the Household member have any history of TB before the patient was diagnosed with TB</th>
                        <th  width="220">Ever tested for TB, then what was the result (Positive/Negative) after patient got diagnosed with TB</th>
                      <!--   <th>If tested Positive for TB, started with treatment (Yes/No)</th>
                        <th>If Symptomatic & not aware of his/her TB status, referred for Testing(yes/No)</th> -->
                        </tr>
                        <!-- <tr rownumber=1>
                        <td><input name="row1" type="checkbox" class="checkBoxChecked" value="1"/></td>
                        <td><input type="text" class="exclude" value="1"></td>
                        <td ><input class="col1" rowid="1" type="text"></td>
                        <td ><select class="col2" >
                        <option>Y</option>
                        <option>N</option>
                        </select>
                        </td>
                        <td><input class="col3"  type="text"></td>
                        <td>
                        <select class="col4" >
                        <option>M</option>
                        <option>F</option>
                        <option>TG</option>
                        </select>
                        </td>
                        <td><input class="col5" type="text"></td>
                        <td>
                        <select class="col6">
                        <option>Yes</option>
                        <option>No</option>
                        </select>
                        </td>
                        <td>
                        <select class="col7">
                        <option>Positive</option>
                        <option>Negative</option>
                        </select>
                        </td>
                        <td>
                        <select class="col8">
                        <option>Yes</option>
                        <option>No</option>
                        </select>
                        </td>
                        <td>
                        <select class="col9">
                        <option>Yes</option>
                        <option>No</option>
                        </select>
                        </td>
                        </tr> -->
                        
                        </table>    
                <!-- <table class="price_table" width="100%" cellpadding="5" cellspacing="5">
                        <tr><td colspan="10"><h3 class="">Details of Households members:</h3></td></tr>
                        <tr>
                        <th width="50">SNO</th>
                        <th  width="180">Name of Households Members (presently residing with)</th>
                        <th  width="60">Care Giver</th>
                        <th  width="80">Age (Completed in Yrs.)</th>
                        <th  width="60">Sex</th>
                        <th  width="100">Relationship with Patient</th>
                        <th  width="150">Any History of TB before patient had TB</th>
                        <th  width="230">Ever tested for TB, then what was the result after patient got diagnosed with TB</th>
                        <th>If tested Positive for TB, started with treatment</th>
                        <th>If Symptomatic & not aware of his/her TB status, referred for Testing</th>
                        </tr>
                        <tr>
                        <td><input type="text" value="1"></td>
                        <td><input type="text"></td>
                        <td>
                        <select>
                        <option>Y</option>
                        <option>N</option>
                        </select>
                        </td>
                        <td><input type="text"></td>
                        <td>
                        <select>
                        <option>M</option>
                        <option>F</option>
                        <option>TG</option>
                        </select>
                        </td>
                        <td><input type="text"></td>
                        <td>
                        <select>
                        <option>Yes</option>
                        <option>No</option>
                        </select>
                        </td>
                        <td>
                        <select>
                        <option>Positive</option>
                        <option>Negative</option>
                        </select>
                        </td>
                        <td>
                        <select>
                        <option>Yes</option>
                        <option>No</option>
                        </select>
                        </td>
                        <td>
                        <select>
                        <option>Yes</option>
                        <option>No</option>
                        </select>
                        </td>
                        </tr>
                         <tr>
                        <td><input type="text" value="1"></td>
                        <td><input type="text"></td>
                        <td>
                        <select>
                        <option>Y</option>
                        <option>N</option>
                        </select>
                        </td>
                        <td><input type="text"></td>
                        <td>
                        <select>
                        <option>M</option>
                        <option>F</option>
                        <option>TG</option>
                        </select>
                        </td>
                        <td><input type="text"></td>
                        <td>
                        <select>
                        <option>Yes</option>
                        <option>No</option>
                        </select>
                        </td>
                        <td>
                        <select>
                        <option>Positive</option>
                        <option>Negative</option>
                        </select>
                        </td>
                        <td>
                        <select>
                        <option>Yes</option>
                        <option>No</option>
                        </select>
                        </td>
                        <td>
                        <select>
                        <option>Yes</option>
                        <option>No</option>
                        </select>
                        </td>
                        </tr>
                        
                        </table>     -->
                </div>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="Step-7">
            
               <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                           <span class="label">Patient-reported history of substance use in patient (पेशेंट की स्वयं के लिए रिपोर्टेड मादक प्रदार्थ सेवन/ व्यसन की जानकारी ): </span>
                           <span class="input_box1">
                     
                        <span class="input_box1 nobackground">
                               
                  
                  
                 <br> <input type="checkbox" displayname="Ghutka (गुटखा)" class="historyPatientSubstance"  name="historyPatientSubstance" value="1">
                                <span class="radiolabel">Ghutka (गुटखा) </span>
                                       
                  
                  
                 <br> <input type="checkbox" displayname="Pan (पान)" class="historyPatientSubstance"  name="historyPatientSubstance" value="2">
                                <span class="radiolabel">Pan (पान) </span>
                                       
                  
                  
                 <br> <input type="checkbox" displayname="Tobacco Chewing" class="historyPatientSubstance"  name="historyPatientSubstance" value="3">
                                <span class="radiolabel">Tobacco Chewing </span>
                                       
                  
                  
                 <br> <input type="checkbox" displayname="Smoking (बीडी/सिगरेट)" class="historyPatientSubstance"  name="historyPatientSubstance" value="4">
                                <span class="radiolabel">Smoking (बीडी/सिगरेट) </span>
                                       
                  
                  
                 <br> <input type="checkbox" displayname="Alcohol consumption (.शराब का सेवन)" class="historyPatientSubstance"  name="historyPatientSubstance" value="5">
                                <span class="radiolabel">Alcohol consumption (.शराब का सेवन) </span>
                                       
                  
                  
                 <br> <input type="checkbox" displayname="Drug Addiction (ड्रग्स का नशा करना)" class="historyPatientSubstance"  name="historyPatientSubstance" value="6">
                                <span class="radiolabel">Drug Addiction (ड्रग्स का नशा करना) </span>
                                       
                  
                  
                 <br> <input type="checkbox" displayname="No history (कुछ भी नहीं)" class="historyPatientSubstance"  name="historyPatientSubstance" value="7">
                                <span class="radiolabel">No history (कुछ भी नहीं) </span>
                                       
                  
                  
                 <br> <input type="checkbox" displayname="Other Specify (अन्य)" class="historyPatientSubstance"  name="historyPatientSubstance" value="8">
                                <span class="radiolabel">Other Specify (अन्य) </span>
                                       
                           </span>  
                     
                          
                          
                        
                        
                        
                          <input type="text" name="historyPatientSubstance_text" style="display: none;">
                        </span>
                     </div>
                     
             </div>
            
             
               
                  <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                     <span class="input_box1">
                  <span class="label">Patient agrees to be visited at :</span><br>
                  Home (पेशेंट ने घर पे मिलने के लिए हामी दी है ): <input type="radio" displayname="Yes(हाँ)" name="visitedPlaceHome" value="yes"> <span class="radiolabel">Yes(हाँ)</span>
                   <input type="radio" displayname="No(ना)" id="homeVisitedPlace" name="visitedPlaceHome" value="no"> <span class="radiolabel">No(ना)</span></span></div>
                  </div>
                  <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">   <span class="input_box1">
                  Workplace/Convenient Place (पेशेंट ने ऑफिस/ किसी अन्य सुविधाजनक जगह पर मिलने के लिए हामी दी है ): 
                  <input type="radio" displayname="Yes(हाँ)" name="visitedPlaceWorkPlace" value="yes"> <span class="radiolabel">Yes(हाँ) </span>
                   <input type="radio" displayname="No(ना)" name="visitedPlaceWorkPlace" value="no"><span class="radiolabel"> No(ना)</span></span>
                  </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                   <div class="col-lg-6 col-md-6 col-sm-6">
                  <table class="right_table" width="100%" cellpadding="0" cellspacing="0" style="margin-bottom: 50px;">
                   <tr>
                    <!-- <th width="50%">Finger Print Registered</th>  -->
                   <th width="50%">Reported from Patient card</th>
                  <!-- <th width="50%"> Verified with patient card</th> -->
                  </tr> 
                  <tr>
                <!--   <td>Type of TB(TB टाइप)</td>  -->
                  <td> 
                  <select id="reportedTBType" class="selectpicker">
                    <option value="0">Select</option>
                    
                                       <option displayname="Pulmonary TB (पल्मोनरी TB)" value = "1" >Pulmonary TB (पल्मोनरी TB)</option>
                                       
                                       <option displayname="Extra Pulmonary TB (एक्स्ट्रा-पल्मोनरी TB)" value = "2" >Extra Pulmonary TB (एक्स्ट्रा-पल्मोनरी TB)</option>
                                       
                <!--   <option>Select</option>
                  <option>Pulmonary TB (पल्मोनरी TB)</option>
                  <option>Extra PulmonaryTB (एक्स्ट्रा-पल्मोनरी TB)</option>    
                  <option>Don't Know</option> -->
                  </select>
                  </td>
             
                  </tr>
                  <tr>
                 <!--   <td>DR TB Status (DR-TB स्टेटस)</td>   -->
                   <td>
                  <select id="reportedDRTBStatus" class="selectpicker"> 
                  <option value="0">Select</option>
                  
                                       <option displayname="MDR" value = "3" >MDR</option>
                                       
                                       <option displayname="XDR" value = "4" >XDR</option>
                                       
                 <!--  <option>Select</option>
                  <option>MDR</option>
                  <option>XDR</option>  
                  <option>Don't Know</option> -->
                  </select>
                  </td>
                 
                  </tr>
                  <tr>
                  <!--  <td>Phase (DR-TB फेज)</td>   -->
                  <td>
                  <select id="reportedTBPhase" class="selectpicker">
                    <option value="0">Select</option>
                    
                                       <option displayname="Intensive (इन्तेंसिवे फेज)" value = "1" >Intensive (इन्तेंसिवे फेज)</option>
                                       
                                       <option displayname="Continuation (काउंटइन्युँसन फेज)" value = "2" >Continuation (काउंटइन्युँसन फेज)</option>
                                       
                 <!--  <option>Select</option>
                  <option>Intensive (इन्तेंसिवे फेज)</option>
                  <option>Continuation (काउंटइन्युँसन फेज)</option> 
                  <option>Don't Know</option> -->
                  </select>
                  </td> 
                  
                  </tr>
                  </table>
                  </div>    
                  <div class="col-lg-6 col-md-6 col-sm-6" id="organDiv" style="display: none;">
                  <span class="label">Organ effected :</span>
                  <span class="input_box">
                          <input type="text"  name="organEffected" class="name" placeholder="Organ effected">
                          </span>
                  </div>
                  
                  </div>                 
            </div>
     
            <div role="tabpanel" class="tab-pane" id="Step-8">
                <div class="row">
                  <!-- <div class="col-lg-12 col-md-12 col-sm-12">
                  <span class="input_box"><input name="wardName" type="text" placeholder="Ward Name and Code" style="width:100%"></span>
                  </div> -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                 <span class="input_box"><input name="healthFaciityName"  type="text" placeholder="Name of the Health facility/post (Where patient is taking treatment)- (पेशेंट के PHC/हेल्थ पोस्ट/ सरकारी दवाखाने का नाम (जहाँ से मरीज दवा ले रहा है) )" style="width:100%"></span>
                  </div>
                  
                  </div>
                  
                  
                  
               
                  
                  
                  
                   <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                  
                  <span class="input_box"><input  name="rmtcppmdtNo"  type="text" placeholder="RNTCP PMDT No (पेशेंट का PMDT नंबर )" style="width:100%"></span>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                  <span class="label" style="float: left;">RNTCP Registration date: </span>
                  <span class="input_box1">
                  <span class="date-input date">
                    <span class="input-group input-append date" id="to-datePicker" class="noFutureDates">
                        <input  type="text" class="form-control" placeholder="DD/MM/YYYY" name="rntcpRegDate" id="rntcpRegDate"/>
                        <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                    </span>
                   </span>                
                  </span>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                  <span class="label" style="float: left;">DR TB diagnosed date (जांच में TB की पुष्टि की तारीख ) : </span>
                  <span class="input_box1">
                  <span class="date-input date">
                    <span class="input-group input-append date" id="to-datePicker" class="noFutureDates">
                        <input  name="drtbDiagnosedDate" type="text" class="form-control" placeholder="DD/MM/YYYY" name="date" />
                        <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                    </span>
                   </span>                
                  </span>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                  <span class="label" style="float: left;">DR TB treatment started (TB ट्रीटमेंट शुरू होने की तारीख ): </span>
                  <span class="input_box1">
                  <span class="date-input date">
                    <span class="input-group input-append date" id="to-datePicker" class="noFutureDates">
                        <input name="drtbTreatementStarted"  type="text" class="form-control" placeholder="DD/MM/YYYY" name="date" />
                        <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                    </span>
                   </span>                
                  </span>
                  </div>
                  </div>
                  
                  
                  
                  
                 <!--  <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                  <span class="input_box"><input name="rmtcppmdtNo" type="text" placeholder="RNTCP PMDT No (पेशेंट का PMDT नंबर )" style="width:100%"></span>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                  <span class="label ">DR TB dignosed date (जांच में TB की पुष्टि की तारीख ) : </span><span class="newDatePickerClass">
                  <input name="drtbDiagnosedDate" type="date"></span>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                  <span class="label">DR TB treatment started (TB ट्रीटमेंट शुरू होने की तारीख ): </span><span class="newDatePickerClass">
                  <input name="drtbTreatementStarted" type="date"></span>
                  </div>
                  </div> -->
                  <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                  <span class="label">History of past TB treatment (क्या पेशेंट की किसी भी प्रकार के TB हिस्ट्री ह): </span><span class="input_box1">
                  <input type="radio" name="historyOfTBTreatement" displayname="Yes (हाँ)" value="yes"><span class="radiolabel"> Yes (हाँ) </span>
                  <input type="radio" name="historyOfTBTreatement" displayname="No (ना)" value="no"> <span class="radiolabel">No (ना) </span></span>
                  </div>
                  </div>
                  <div class="row"  id="TBhistorydiv">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                  <span class="input_box1"> If Yes: 
                  <select id="historyTBTreatmentCause" class="selectpicker">
                   <option value="0" displayname=" ">Select</option>
                  
                                       <option displayname="Recurrent TB case (आवर्ती टीबी केस) " value = "1" >Recurrent TB case (आवर्ती टीबी केस) </option>
                                       
                                       <option displayname="Treatment after failure (विफलता के बाद उपचार) " value = "2" >Treatment after failure (विफलता के बाद उपचार) </option>
                                       
                                       <option displayname="Treatment after LFU (एलएफयू के बाद उपचार) " value = "3" >Treatment after LFU (एलएफयू के बाद उपचार) </option>
                                       
                                       <option displayname="Transferred in (में हस्तांतरित) " value = "4" >Transferred in (में हस्तांतरित) </option>
                                       
                                       <option displayname="Other previously treated patient (अन्य पहले इलाज वाले रोगी) " value = "5" >Other previously treated patient (अन्य पहले इलाज वाले रोगी) </option>
                                       
                 <!--  <option>Recurrent TB case - रेकर्रेंट TB केस (ट्रीटमेंट कम्पलीट किया पहले) </option>
                  <option>Treatment after failure - ट्रीटमेंट फेलियर</option>
                  <option>Treatment after LFU - LFU के बाद ट्रीटमेंट</option>
                  <option>Trannsferred in - ट्रांस्फारद इन</option>
                  <option>Other previously treated patient- अन्य पहले से उपचारित पेशेंट </option> -->                               
                  </select>
                  </span>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-lg-7 col-md-12 col-sm-12">
                  <span class="label">HIV status (HIV स्टेटस ऑफ़ पेशेंट ) : </span>
                  <span class="input_box1"><input type="radio" name="hasHIV" displayname="Positive (पॉजिटिव)" value="yes"><span class="radiolabel"> Positive (पॉजिटिव)</span>
                  <input type="radio" name="hasHIV" displayname="Negative (नेगेटिव)" value="no"><span class="radiolabel"> Negative (नेगेटिव)</span></span>
            
                  </div>    
                  <div class="col-lg-12 col-md-12 col-sm-12" id="HIVhistorydiv">
                  <span class="label"> If HIV Positive, status of treatment (अगर पॉजिटिव, पेशेंट इलाज ले रहे है ): </span>
                  <span class="input_box1"><select id="hivArt" class="selectpicker">
                  <option value="121" displayName=" ">Select</option>
                  <option value="1" displayName="On ART (ART ले रहा है)">On ART (ART ले रहा है)</option>
                  <option value="0" displayName="Not On ART (ART नहीं ले रहा )" >Not On ART (ART नहीं ले रहा )</option>
                  </select></span>
                  <span class="input_box1"><input name="hivArtCenter" type="text" placeholder="Name of ART center" style="display: none"></span>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-lg-7 col-md-12 col-sm-12">                            
                  <span class="label">Diabetes (डायबिटीस स्टेटस ऑफ़ पेशेंट ): </span><span class="input_box1">
                  <input type="radio" name="hasDiabetes" displayname="Yes (हाँ)" value="yes"><span class="radiolabel"> Yes (हाँ)</span>  <input type="radio" name="hasDiabetes" displayname="No (ना)" value="no"><span class="radiolabel"> No (ना) </span> </span>
                  
                  </div>    
                  <div class="col-lg-12 col-md-12 col-sm-12" id="DBShistorydiv">
                  <span class="label"> If Positive, taking treatment for diabetes (अगर पॉजिटिव, पेशेंट इलाज ले रहे ह): </span><span class="input_box1"><select id="diabetesArt"  class="selectpicker">
                  <option displayName="" value="121">Select</option>
                  <option displayName="Yes  (हाँ)" value="1">Yes  (हाँ) </option>
                  <option displayName="No  (ना)" value="0">No  (ना)  </option>
                  </select></span>
                  <span class="input_box1"><input name="diabetesArtCenter" type="text" placeholder="Name of ART center"></span>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12" style="    margin-bottom: 20px;">      
                  <span class="input_box"><input name="otherDiseaseCondition" type="text" placeholder="Any other disease condition (पेशेंट को इनके अन्य कोई और बीमारी)" style="width:100%;"></span>
                  </div>
                  </div>                 
            </div>
            <div role="tabpanel" class="tab-pane" id="Step-9">
                
                     <div class="row ">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        <h4>Counselling sessions (Reinforcing)</h4>
                   <input type="checkbox" name="councelingTopic" displayname="DR-TB treatment & Education (DR-TB ट्रीटमेंट व् एजुकेशन )"  value="1">DR-TB treatment & Education (DR-TB ट्रीटमेंट व् एजुकेशन ) <br/>
                  
                  <input type="checkbox" name="councelingTopic" displayname="Substance abuse & Deaddiction(मादक पदार्थो का सेवन और नशा मुक्ति(दिअदिक्सन) )"  value="2">Substance abuse & Deaddiction(मादक पदार्थो का सेवन और नशा मुक्ति(दिअदिक्सन) ) <br/>
                  
                  <input type="checkbox" name="councelingTopic" displayname="Adverse Drug Reactions (ADR-दवाइयों के साइड-इफेक्ट्स & दुष्प्रभाव)"  value="3">Adverse Drug Reactions (ADR-दवाइयों के साइड-इफेक्ट्स & दुष्प्रभाव) <br/>
                  
                  <input type="checkbox" name="councelingTopic" displayname="DR-TB treatment adherence(DR-TB ट्रीटमेंट की पालना)"  value="4">DR-TB treatment adherence(DR-TB ट्रीटमेंट की पालना) <br/>
                  
                  <input type="checkbox" name="councelingTopic" displayname="Reproductive health related (प्रजनन स्वस्थ्य & गर्भावस्था सम्बंधित)"  value="5">Reproductive health related (प्रजनन स्वस्थ्य & गर्भावस्था सम्बंधित) <br/>
                  
                  <input type="checkbox" name="councelingTopic" displayname="Cough hygiene & sputum disposal (कोउफ़/खाँसी हयजिन एवं थूक निपटान)"  value="6">Cough hygiene & sputum disposal (कोउफ़/खाँसी हयजिन एवं थूक निपटान) <br/>
                  
                  <input type="checkbox" name="councelingTopic" displayname="Role of Diet & Nutrition (पोष्टिक आहार व उपयुक्त डायट का रोल)"  value="7">Role of Diet & Nutrition (पोष्टिक आहार व उपयुक्त डायट का रोल) <br/>
                  
                  <input type="checkbox" name="councelingTopic" displayname="Stigma & Discrimination(कलंक/हीनभावना व् भेदभाव)"  value="9">Stigma & Discrimination(कलंक/हीनभावना व् भेदभाव) <br/>
                  
                  <input type="checkbox" name="councelingTopic" displayname="Role of family support in completing treatment  (परिवार के समर्थन की भूमिका ट्रीटमेंट पूरा करने में  )"  value="10">Role of family support in completing treatment  (परिवार के समर्थन की भूमिका ट्रीटमेंट पूरा करने में  ) <br/>
                  
                  <input type="checkbox" name="councelingTopic" displayname="Others (अन्य)"  value="8">Others (अन्य) <br/>
                  
                        
                        
                        <span class="input_box1">
                    <input type="text" name="councelingTopic_text" style="display: none;">
              </span>
                          <!--  <input type="checkbox" name="counselling" value="">DR-TB treatment & Education (DR-TB ट्रीटमेंट व् एजुकेशन )<br/>
                           <input type="checkbox" name="counselling" value="">Substance abuse & Deaddiction(मादक पदार्थो का सेवन और नशा मुक्ति(दिअदिक्सन) )<br/>
                           <input type="checkbox" name="counselling" value="">Adverse Drug Reactions (ADR-दवाइयों के साइड-इफेक्ट्स & दुष्प्रभाव)<br/>
                           <input type="checkbox" name="counselling" value="">DR-TB treatment adherence(DR-TB ट्रीटमेंट की पालना)<br/>
                           <input type="checkbox" name="counselling" value="">Reproductive health related (प्रजनन स्वस्थ्य & गर्भावस्था सम्बंधित)<br/>
                           <input type="checkbox" name="counselling" value="">Cough hygiene & sputum disposal (कोउफ़/खाँसी हयजिन एवं थूक निपटान)<br/>
                           <input type="checkbox" name="counselling" value="">Role of Diet & Nutrition (पोष्टिक आहार व उपयुक्त डायट का रोल)<br/>
                            <input type="checkbox" name="counselling" value="">Others (अन्य)<br/> -->
                            
                        </div>
                     </div>              
            </div>
            <div role="tabpanel" class="tab-pane" id="Step-10">
            
            <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                      
                         <span class="label">Patient's need for referral/linkage identified: </span>
                           <span class="input_box1">
                             <input type="radio" name="needReferralServiceAndLinkage" displayname="Yes (हाँ)" value="yes"><span class="radiolabel"> Yes (हाँ)</span>  
                             <input type="radio" name="needReferralServiceAndLinkage" displayname="No (ना)" value="no"><span class="radiolabel"> No (ना) </span> 
                         </span>
                        </div>
                </div>
            
                 <div class="row" style="display: none;" id="referLinkage">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                           <h4>Referral Services/Linkages (सेवाओं के लिए रेफरल करा या जोड़ा) : </h4>
                          
                           <span class="input_box1">
                           
                           
                            
                            <input type="checkbox" name="referralServiceAndLinkage" displayname="Health services (स्वास्थय सम्बंधित)"  value='4'>Health services (स्वास्थय सम्बंधित)
                             <input type="text" class="noSpecialChar" id="referralServiceAndLinkage4" ><br>
                 
                            <input type="checkbox" name="referralServiceAndLinkage" displayname="FU sputum (स्पुटम की जांच के लिए भेजना)"  value='6'>FU sputum (स्पुटम की जांच के लिए भेजना)
                             <input type="text" class="noSpecialChar" id="referralServiceAndLinkage6" ><br>
                 
                            <input type="checkbox" name="referralServiceAndLinkage" displayname="Referral for ADR (ADR रेफ़रल)"  value='7'>Referral for ADR (ADR रेफ़रल)
                             <input type="text" class="noSpecialChar" id="referralServiceAndLinkage7" ><br>
                 
                            <input type="checkbox" name="referralServiceAndLinkage" displayname="Mental health professionals (.मानसिक स्वास्थ्य प्रोफेसनल)"  value='8'>Mental health professionals (.मानसिक स्वास्थ्य प्रोफेसनल)
                             <input type="text" class="noSpecialChar" id="referralServiceAndLinkage8" ><br>
                 
                            <input type="checkbox" name="referralServiceAndLinkage" displayname="Nutritional support (न्युट्रिसन/पोष्टिकआहार सहायता)"  value='9'>Nutritional support (न्युट्रिसन/पोष्टिकआहार सहायता)
                             <input type="text" class="noSpecialChar" id="referralServiceAndLinkage9" ><br>
                 
                            <input type="checkbox" name="referralServiceAndLinkage" displayname="Livelihood (आजीविका)"  value='10'>Livelihood (आजीविका)
                             <input type="text" class="noSpecialChar" id="referralServiceAndLinkage10" ><br>
                 
                            <input type="checkbox" name="referralServiceAndLinkage" displayname="lncome Generation Scheme (आय सृजन योजना (इनकम जनरेसन स्कीम) )"  value='11'>lncome Generation Scheme (आय सृजन योजना (इनकम जनरेसन स्कीम) )
                             <input type="text" class="noSpecialChar" id="referralServiceAndLinkage11" ><br>
                 
                            <input type="checkbox" name="referralServiceAndLinkage" displayname="Social Protection Services (सोशल प्रोटेक्शन स्कीम(सामाजिक सुरक्षा योजना) )"  value='12'>Social Protection Services (सोशल प्रोटेक्शन स्कीम(सामाजिक सुरक्षा योजना) )
                             <input type="text" class="noSpecialChar" id="referralServiceAndLinkage12" ><br>
                 
                            <input type="checkbox" name="referralServiceAndLinkage" displayname="Any other (अन्य)"  value='13'>Any other (अन्य)
                             <input type="text" class="noSpecialChar" id="referralServiceAndLinkage13" ><br>
                      </span>
                        </div>
                     </div>              
            </div>
            <div role="tabpanel" class="tab-pane" id="Step-11">
 
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                           <span class="label">Priority classification (वर्तमान प्राथमिकता वर्गीकरण): </span>
                           <span class="input_box">
                              <select id="priority_classification" class="selectpicker">
                               <option displayname="" value="0">Select(एक चुनो)</option>
                                 
                                       <option displayname="Priority1" value = "1" >Priority1</option>
                                       
                                       <option displayname="Priority2" value = "2" >Priority2</option>
                                       
                                       <option displayname="Priority3" value = "3" >Priority3</option>
                                       
                                <!--  <option>Select (एक चुनो)</option>
                                 <option>Priority 1</option>
                                 <option>Priority 2</option>
                                 <option>Priority 3</option> -->
                              </select>
                           </span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="input_box"><input name ="priorityReason" type="text" placeholder="Specify Priority selection reasons"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">     
                           <span class="label" style="float: left;">Next follow-up date (अगली मुलाकात की तारीख ): </span>
 
                            <span class="input_box1">
                          <span class="date-input date">
                            <span class="input-group input-append date" id="to-datePicker">
                                <input type="text" class="form-control" placeholder="DD/MM/YYYY" name="nextFollowUpDate" readonly="readonly">
                                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                            </span>
                           </span>                
                          </span>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                          <!--  <span class="input_box"><input type="text" placeholder="Place of follow up: Health Centre"></span>
                            -->
                           <span class="label">Place of follow up: </span>
                           <span class="input_box">
                              <select id="followUpPlaceType" class="selectpicker">
                               <option value="0">Select(एक चुनो)</option>
                                 
                                       <option displayname="Health Center ( हेल्थ सेंटर/फ़सिलिटी )" value = "1" >Health Center ( हेल्थ सेंटर/फ़सिलिटी )</option>
                                       
                                       <option displayname="Home (घर)" value = "2" >Home (घर)</option>
                                       
                                       <option displayname="Workplace (ऑफिस)" value = "3" >Workplace (ऑफिस)</option>
                                       
                                       <option displayname="Other (अन्य सुविधाजनक जगह)" value = "4" >Other (अन्य सुविधाजनक जगह)</option>
                                       
                                <!--  <option>Select (एक चुनो)</option>
                                 <option>Priority 1</option>
                                 <option>Priority 2</option>
                                 <option>Priority 3</option> -->
                              </select>
                           </span>
                           <div class="input_box" id="followUpLocationDiv" style="display: none;">
                           <input name="followUpLocation" type="text" placeholder="Other follow up">
                           </div>
                           
                        </div>
                     </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                         <span class="input_box"><input type="text" name="counselorRemarks"  placeholder="Remarks of the counsellor  (काउंसलर की टिप्पणिया)" maxlength="500"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                       <span class="input_box"><input type="text"  name="councelorName" placeholder="Name of counsellor (काउंसलर की नाम)" readonly></span>
                        </div>
                     </div>
                <a id="indexpreview" class="btn btn-primary btnSubmit" onclick="myFunction()" style="display: none">Preview(पूर्वावलोकन)</a>
                <a  class="btn btn-primary btnSubmit" onclick="checkPreview()">Preview(पूर्वावलोकन)</a>
            </div>
         
             <a id="nextButton" class="btn btn-primary btnNext">Next(अगला)</a>
            </div>
        </div>
      </div>
    </div>
</div>                
                 
</div>
</div>
      </div>
        </div>         
        <!-- /#page-content-wrapper -->
      <div class="footer navbar-fixed-bottom">
         <p class="mbr-footer__copyright_left">© 2016  <a href="http://www.tiss.edu/" style="color:#FDE6A2; text-decoration:none;" target="_blank">Tata Institute of Social Sciences</a>, All rights reserved.&nbsp;</p>
         <p class="mbr-footer__copyright_right">Designed and Developed by  <a href="http://www.empover.com" style="color:#2095F9; text-decoration:none;" target="_blank">Empover i-Tech</a></p>
      </div>
    </div>
    <!-- /#wrapper -->

<!-- popup content -->
 <!-- popup content -->
<div id="popup">
        <!-- Page Content -->
    <div id="page-content-wrapper">
        
      <div class="container-fluid">
         <div class="container-fluid page_content">

            <div class="row">
               <div class="col-lg-12 col-md-12">
               <a id="closePopup" onclick="myfunctionClose()">X</a>
                 <h1 class="h1registration_form">Patient Registration Form</h1>
                  <div class="row price_table_row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="middle_content">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Saksham Patient ID : </span><span class="input_box1" name="sakshamPatientId1"></span>
                        </div>
                     </div>
                <!--     <div class="row" >
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Priority (प्राथमिकता) : </span><span class="input_box1" name="priorityName1"></span>
                        </div>
                     </div> -->
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Patient has provided consent for counselling (पेशेंट परामर्श के लिए सहमति प्रदान की गई है) : </span><span class="input_box1" name="consentForCouseling1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Patient agreed to share details about self (पेशेंट ने स्वयं की जानकारी देने व काउंसलिंग करने के लिए सहमती दी) :  </span><span class="input_box1" name="shareDetails1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Patient has provided consent to meet Households caregivers(पेशेंट ने अपने देखभालकर्ता से मिलने के लिए सहमती दी) : </span><span class="input_box1" name="contentToCareGivers1"></span>
                        </div>
                     </div>
                     
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Patient has provided consent for receiving SMS from Saksham (रोगी सक्षम से एसएमएस प्राप्त करने के लिए सहमति प्रदान की गई है) : </span><span class="input_box1" name="contentToReceiveSMS1"></span>
                        </div>
                     </div>
                     
                     <div class="row">
                       <div class="col-lg-12 col-md-12 col-sm-12">
                          <span class="label">Name of the patient :</span><br>
                          <div class="col-lg-4 col-md-4 col-sm-4">
                          <span class="label">First Name : </span><span name="firstName1"></span>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4">
                           <span class="label">Middle Name: </span><span name="middleName1"></span>
                        
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4">
                           <span class="label">Last Name: </span><span name="lastName1"></span>
                          </div>
                        </div>
                     </div>
                     
                     <div class="row">
                       <div class="col-lg-12 col-md-12 col-sm-12">
                          <span class="label">Patient's husband/father name :</span><br>
                          <div class="col-lg-4 col-md-4 col-sm-4">
                          <span class="label">First Name : </span><span name="fatherFirstName1"></span>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4">
                           <span class="label">Middle Name: </span><span name="fatherMiddleName1"></span>
                        
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4">
                           <span class="label">Last Name: </span><span name="fatherLastName1"></span>
                          </div>
                        </div>
                     </div>
                     
                     
                     
                       
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">District name & code : </span><span class="input_box1" name="districtNameAndCode1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Block/Taluka/ TU name(ब्लॉक/तालुका/ TU-यूनिट) : </span><span class="input_box1" name="blockTalukaTUName1"></span>
                        </div>
                     </div>
                    
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Mobile(मोबाइल) : </span><span class="input_box1" name="mobileNo1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Alternate Telephone(वैकल्पिक टेलीफोन) : </span><span class="input_box1" name="telephoneNo1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Patient's present address (पेशेंट के पूरा पता)  : </span><span class="input_box1" name="presentAddress1"></span>
                        </div>
                     </div>
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Patient's permanent address (पेशेंट के पूरा पता)  : </span><span class="input_box1" name="permanentAddress1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label" style="float: left;">Date of Saksham registration : </span><span class="input_box1" name="sakhamRegistrationDate1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Place of registration : </span><span class="input_box1" name="placeOfRegistration1"></span>
                        </div>
                     </div>
                     <div class="row" style="display: none;">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">If other place of registration : </span><span class="input_box1" name="reg_place_text1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Patient's Date of Birth (जन्म दिनांक) :</span><span class="input_box1" name="patientDateOfBirth1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Religion (धर्म) :  </span><span class="input_box1" name="religion1"></span>
                        </div>
                     </div>
                     <div class="row" style="display: none;">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">If other religion (धर्म) :  </span><span class="input_box1" name="patient_religion_text1"></span>
                        </div>
                     </div>                  
                     
                     
                     
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Caste (जाति) :  </span><span class="input_box1" name="caste1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12" style="display: none;">  
                           <span class="label">If other Caste (जाति) :  </span><span class="input_box1" name="otherCaste1"></span>
                        </div>
                     </div> 
<!--                     <div class="row"> -->
<!--                         <div class="col-lg-12 col-md-12 col-sm-12">     -->
<!--                            <span class="label">Patient's permanent address (पेशेंट के पूरा पता) :  : </span><span class="input_box1" name=""></span> -->
<!--                         </div> -->
<!--                      </div> -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Aadhaar card No (आधार कार्ड नंबर) : </span><span class="input_box1" name="adharNo1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <span class="label">Aadhaar Status : </span><span class="input_box1" name="adharSatus1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Type of Ration card : </span><span class="input_box1" name="rationcardColor1"></span>
                        </div>
                     </div>
                    <!--  <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">First Health-care provider contact: </span><span class="input_box1" name="healthCareProvider1"></span>
                        </div>
                     </div> -->
                      
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Patient approached with symptoms: </span><span class="input_box1" name="otherHealthCareProvider1"></span>
                        </div>
                     </div>
                     <div class="row" style="display: none;">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">If others first Health-care provider contact: </span><span class="input_box1" name="healthCareProvider_text1"></span>
                        </div>
                     </div>
                     <div class="row" >
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Type of locality (पेशेंट की रिहायशी जगह का प्रकार) : </span><span class="input_box1" name="localityType1"></span>
                        </div>
                     </div>
                     <div class="row" style="display: none;">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">If other Type of locality (पेशेंट की रिहायशी जगह का प्रकार) : </span><span class="input_box1" name="localityType_text1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Age (in completed years) (पशेंट की उम्र (पुरे किये हुए साल में )) : </span><span class="input_box1" name="age1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Sex (पेशेंट का लिंग) : </span><span class="input_box1" name="gender1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Education (पेशेंट की शेक्षणिक योग्यता): </span><span class="input_box1" name="educationQualification1"></span>
                        </div>
                     </div>
                     <div class="row" style="display: none;">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">If other Education specification (पेशेंट की शेक्षणिक योग्यता): </span><span class="input_box1" name="educationQualification_text1"></span>
                        </div>
                     </div>
                     
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Current working status (पेशेंट की वर्तमान कार्य की स्थिति) : </span><span class="input_box1" name="workingStatus1"></span>
                        </div>
                     </div>
                     <div class="row" id="working_statusdiv75" style="display: none;">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">If Employed, Occupation (पेशेंट किस प्रकार के कार्य में है ) : </span><span class="input_box1" name="occupation1"></span>
                        </div>
                     </div>
                     <div class="row" style="display: none;">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Other occupation specification details (पेशेंट किस प्रकार के कार्य में है ) : </span><span class="input_box1" name="occupation_text1"></span>
                        </div>
                     </div>
                     <div class="row" id="working_statusdiv76" style="display: none;">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">If unemployed please specify (पेशेंट के बेरोजगार होने की वजह) : </span><span class="input_box1" name="unEmploymentCause1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Staying (पेशेंट मकान में किस के साथ रहता है ) : </span><span class="input_box1" name="stayingWith1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Total no of Households members (पेशेंट जहाँ रहता है उस मकान में सदस्यों की संख्यां) : </span><span class="input_box1" name="houseHoldMembers1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Total no of children less than 6yrs in the household (पेशेंट जहाँ रहता है उस मकान  में ६ साल से कम उम्र के बच्चों की संख्या): </span><span class="input_box1" name="totalNumOfChildrensLessThanSixYears1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Total no of earning members in the household (पेशेंट के परिवार में कमाने वाले सदस्यों की संख्या) : </span><span class="input_box1" name="totalNumOfEarningMembers1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Average Monthly Households income from all sources (पेशेंट के परिवार की सभी स्त्रोत्रों से मासिक आय) : </span><span class="input_box1" name="houseHoldIncomeRange1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Current Marital Status (वर्तमान वैवाहिक स्थिति ) : </span><span class="input_box1" name="marriageStatus1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Living in present city/town/village since : </span><span class="input_box1" name="livingLocalitySince1"></span>
                        </div>
                     </div>
                     <table class="price_table detailsHouseHoldsMenbers1" width="100%" cellpadding="5" cellspacing="5">
                        <tbody><tr><td colspan="8"><h3 class="">Details of Households members:</h3></td></tr>
                        <tr>
                        <th width="50">SNO</th>
                        <th width="180">Name of Households Members (presently residing with)</th>
                        <th width="60">Care Giver</th>
                        <th width="80">Age (Completed in Yrs.)</th>
                        <th width="60">Sex</th>
                        <th width="100">Relationship with Patient</th>
                        <th width="150">Any History of TB before patient had TB</th>
                        <th width="230">Ever tested for TB, then what was the result after patient got diagnosed with TB</th>
                       <!--  <th>If tested Positive for TB, started with treatment</th>
                        <th>If Symptomatic &amp; not aware of his/her TB status, referred for Testing</th> -->
                        </tr>
                        <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        </tr>
                        
                        
                        </tbody></table>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Patient-reported history of substance use in patient (पेशेंट की स्वयं के लिए रिपोर्टेड मादक प्रदार्थ सेवन/ व्यसन की जानकारी ) : </span><span class="input_box1" name="historySubstance1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Patient's history of substance use , Other: </span>
                           <span class="input_box1" id="otherHistoryPatientSubstance1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Patient agrees to be visited at home (पेशेंट ने घर पे मिलने के लिए हामी दी है ) : </span><span class="input_box1" name="visitedPlaceHome1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Workplace/Convenient Place (पेशेंट ने ऑफिस/ किसी अन्य सुविधाजनक जगह पर मिलने के लिए हामी दी है ) : </span><span class="input_box1" name="visitedPlaceWorkPlace1"></span>
                        </div>
                     </div>
                     <div class="col-lg-12 col-md-12 col-sm-12">    
                     <div class="col-lg-6 col-md-6  col-sm-6 "> 
                     <table class="right_table" width="100%" cellpadding="0" cellspacing="0">
                  <tbody><tr>
                  <!--  <th width="270">Finger Print Registered</th>  -->
                   <th width="50%">Reported from Patient card</th>
                <!--   <th>Verified with patient card</th> -->
                  </tr>
                  <tr>
                 <!--  <td >Type of TB(TB टाइप)</td>   -->
                   <td id="reportedTBType1"></td> 
                  <!-- <td id="verifiedTBTypeWithCard1"></td> -->
                  </tr>
                  <tr>
                 <!--   <td >DR TB Status (DR-TB स्टेटस)</td>  -->
                  <td id="reportedDRTBStatus1"></td> 
                 <!--  <td id="verifiedDRTBStatusWithCard1"></td> -->
                  </tr>
                  <tr>
             <!--      <td>Phase (DR-TB फेज)</td>  -->
                  <td id="reportedTBPhase1"></td>
                <!--   <td id="verifiedPhaseWithCard1"></td> -->
                  </tr>
                  </tbody></table>
                  </div>
                  </div>
                  <div class="col-lg-6 col-md-6  col-sm-6 ">    
                  <span class="label">Organ effected :</span>
                  <span name="organEffected1"></span>
                  
                  </div>
                  
                    <!--  <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Ward Name and Code : </span><span class="input_box1" name="wardNameAndCode"></span>
                        </div>
                     </div> -->
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Name of the Health facility/post (Where patient is taking treatment)- (पेशेंट के PHC/हेल्थ पोस्ट/ सरकारी दवाखाने का नाम (जहाँ से मरीज दवा ले रहा है) ) : </span><span class="input_box1" name="healthFacilityName1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">RNTCP PMDT No (पेशेंट का PMDT नंबर ) : </span><span class="input_box1" name="rmtcppmdtNo1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">RNTCP registration date : </span><span class="input_box1" name="rntcpRegDate1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">DR TB diagnosed date (जांच में TB की पुष्टि की तारीख )  : </span><span class="input_box1" name="drtbDiagnosedDate1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">DR TB treatment started (TB ट्रीटमेंट शुरू होने की तारीख ): </span><span class="input_box1" name="drtbTreatementStarted1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">History of past TB treatment (क्या पेशेंट की किसी भी प्रकार के TB हिस्ट्री ह) : </span><span class="input_box1" name="historyOfTBTreatement1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">If Yes:: </span><span class="input_box1" name="historyOfTBTreatementIfYes"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">HIV status (HIV स्टेटस ऑफ़ पेशेंट ): </span><span class="input_box1" name="hasHIV1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">If HIV Positive, status of treatment (अगर पॉजिटिव, पेशेंट इलाज ले रहे है ): </span><span class="input_box1" name="ifHIVPositive"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Diabetes (डायबिटीस स्टेटस ऑफ़ पेशेंट ) : </span><span class="input_box1" name="hasDiabetes1"></span>
                        </div>
                     </div>
                    <!--  <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">If Positive, taking treatment for diabetes (अगर पॉजिटिव, पेशेंट इलाज ले रहे ह) : </span><span class="input_box1" id="diabetesArt1"></span>
                        </div>
                     </div> -->
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Any other disease condition (पेशेंट को इनके अन्य कोई और बीमारी) : </span><span class="input_box1" name="otherDiseaseCondition1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Counselling sessions : </span><span class="input_box1" name="councelingTopic2"></span>
                        </div>
                     </div>
                     <div class="row" style="display: none;">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">If other Counselling sessions : </span><span class="input_box1" name="councelingTopic_text1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Referral Services/Linkages (सेवाओं के लिए रेफरल करा या जोड़ा) : </span><span class="input_box1" name="referaralServices1"></span>
                        </div>
                     </div>
                     <div class="row" style="display: none;" >
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">If other referral Services/Linkages (सेवाओं के लिए रेफरल करा या जोड़ा) : </span><span class="input_box1" id="referralServiceAndLinkage131"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Priority classification (वर्तमान प्राथमिकता वर्गीकरण) : </span><span class="input_box1" name="priority_classification1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Specify Priority selection reasons :</span><span class="input_box1" name="priorityReason1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Next follow-up date (अगली मुलाकात की तारीख ) : </span><span class="input_box1" name="nextFollowUpDate1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Place of follow up:</span><span class="input_box1" name="followUpPlaceType1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Remarks of the counsellor (काउंसलर की टिप्पणिया) :</span><span class="input_box1" name="counselorRemarks1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Counsellor code: </span><span class="input_box1" name="counselor1"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> 
                           <span class="label">Counsellor Name (काउंसलर की नाम) : </span><span class="input_box1" name="councelorName1"></span>
                        </div>
                     </div>
                     <a id="submitButton" class="btn btn-primary btnSubmit">Submit(जमा करें)</a>
                  </div>
                  </div>
                  </div>
            </div>                
                 
            </div>
        </div>
      </div>
    </div> 
</div>      

</body>
 <script>
 
  $(document).ready(function () { 
      

      
      
      $('.date')
      .datepicker({
          maxDate: '0', 
          format: 'dd/mm/yyyy',
            autoclose: true
            
            
      });
      
      
      $('#off-datePicker').datepicker({
          maxDate: '0', 
          format: 'dd/mm/yyyy',
            autoclose: true
            
            
      });
      
      
      $('.noFutureDates')
      .datepicker({
          maxDate: '0', 
          format: 'dd/mm/yyyy',
            autoclose: true
            
            
      });
      
    
     /*  $( document ).ready(function() {
          var picker = $('#off-datePicker').data('datepicker');
           picker.setEndDate('today');
         // picker.setStartDate('today');
          }); */

 // alert("cmg");
    var n = new Date().getTime();
    var idTemp="A"+n;
    
    var isPresakham= new Boolean(false);
    var preSaksham=" ";
    preSaksham='';
    
    if(preSaksham=="presakham"){
        isPresakham=true;
    }
    
    $('[name=sakshamRegDate]').val(new Date().getDate()+"/"+(("0" + (new Date().getMonth() + 1)).slice(-2))+"/"+new Date().getFullYear());
    
    //step1
    var sakshamPatientId="";
    var priorityName="";
    var  consentForCouseling=new Boolean(false);
    var consentForCouselingChecked=0;
    var  shareDetails=new Boolean(false);
    var  shareDetailsChecked=0;
    var  contentToCareGivers= new Boolean(false);
    var contentToReceiveSMS=new Boolean(false);
    var  contentToCareGiversChecked=0;
    var districtCode="";
    var districtName="";
    var  name="";
    var  address="";
    var  landmark="";
    var  state=0;
    var  city="";
    var  pin="";
    var  telephoneNo="";
    var  mobileNo="";
    var sakhamId="";
    var displayName1="No";
    var displayName2="No";
    var displayName3="No";
    var displayName4="No";
    
    var firstName="";
    var middleName="";
    var lastName="";
    var fatherFirstName="";
    var fatherMiddleName="";
    var fatherLastName="";
    var testAlertData="";
    
    
    if(isPresakham===true){
        sakhamId='OLD-';
        sakhamId+="MH"+"/"+"21"+"/"+"MH59"+"/"+2016;
    }else{
        sakhamId="MH"+"/"+"21"+"/"+"MH59"+"/"+2016;;
    }
    districtName=$("#districtId option:selected" ).text();
    districtCode=$("#districtId option:selected" ).val();
    $('[name=districtCode]').val(districtCode+"  "+districtName);
    
    //step2
    var adharNo="";
    var rationcardColor=0;
    var healthCareProvider=0;
    var otherHealthCareProvider="";
    var localityType=0;
    var otherLocalityType="";
    var age=0;
    var gender="";
    
    ////step3
    var educationQualification=0;
    var otherEducationQualification="";
    var workingStatus=new Boolean(false);
    var workingStatusChecked=0;
    var occupation=0;
    var otherOccupation="";
    var unEmploymentCause=0;
    var hasAdhar=new Boolean(false);
    //step4
    var stayingWith=0;
    var houseHoldMembers=0;
    var totalNumOfChildrensLessThanSixYears=0;
    var totalNumOfEarningMembers=0;
    var houseHoldIncomeRange=0;
    var marriageStatus=0;
    var livingLocalitySince=0;
    
    //step5
/* //   name,careGiver,age,sex,relationShip,hisOfTb,everTestedTbOutCome,teatmentStarted,referdTesting
    var name=0;
    var houseHoldMembers=0;
    var totalNumOfChildrensLessThanSixYears=0;
    var totalNumOfEarningMembers=0;
    var houseHoldIncomeRange=0;
    var marriageStatus=0;
    var livingLocalitySince=0; */
    
    
    //step6
    var historySubstance=0;
    var visitedPlaceHome="";
    var visitedPlaceHomeChecked=0;
    var visitedPlaceWorkPlace="";
    var visitedPlaceWorkPlaceChecked=0;
    var  reportedDRTBStatus =0;
    var reportedTBType =0;
    var reportedTBPhase =0;
    var  verifiedDRTBStatusWithCard =0;
    var verifiedPhaseWithCard  =0;
    var  verifiedTBTypeWithCard =0;
    
    //step7
    var wardName="";
    var wardCode="";
    var healthFaciityName="";
    var rmtcppmdtNo="";
    var drtbDiagnosedDate="";
    var drtbTreatementStarted="";
    var historyOfTBTreatement=new Boolean(false);
    var historyTBTreatmentCause=0;
    var hasDiabetes=new Boolean(false);
    var hasHIV=new Boolean(false);
    var hivArtCenter="";
    var diabetesArtCenter="";
    var diabetesArt=0;
    var hivArt=0;
    
    //step8
    var councelingTopic="";
    var councelingTopicChecked=0;
    var otherPatientCouncelingTopics="";
    
    //step9
    var referralServiceAndLinkage="";
    var referralServiceAndLinkageChecked="";
    var referralServiceAndLinkagePreview="";
    var referralServiceAndLinkageDisplay="";
    var finalDispaly="";
    
    //step10
    var priority_classification=0;
    var priorityReason="";
    var nextFollowUpDate="";
    var followUpPlaceType=0;
    var followUpLocation="";
    var testState=0;
    var counselorRemarks="";
     var councelorCode= CURRENTUSER.CODE
    var councelorName=CURRENTUSER.NAME;
    //var counselor=CURRENTUSER.CID;
    var counselor=CURRENTUSER.ID;
    var houseHoldDtlsRecordArray = []; 
    var houseHoldDtlsRecord = {
             
            name        : "",
            careGiver   :"",
            age         :"",
            sex         : "",
            relationShip:"",
            hisOfTb     :"",
            everTestedTbOutCome:"",
            /* teatmentStarted:"",
            referdTesting:""     */     
            
        }  
     var housholdinnerDiv="";
    var hasHHM=new Boolean(false);
    var hasHHMChecked=0;
    
    
    var religion=0;
    var placeOfRegistration=0;
    var  caste=0;
    
    var  fatherName="";
    var blockTalukaTUName="";
    
    var patientDateOfBirth="";
    var sakhamRegistrationDate="";
    var counselorCode="";
    var adharSatus=0;
    var presentStreetName="";
    var presentLocation="";
    var presentLandmark="";
    var presentCityTownVillage="";
    var presentPincode="";
    var  presentState =0;
    var aloneFlag=new Boolean(false);
    var permanentStreetName="";
    var permanentLocation="";
    var permanentLandmark="";
    var permanentCityTownVillage="";
    var permanentPincode="";
    var  permanentState =0;
    var regPlace=0;
    var councelingTopicData="";
    var referralServiceAndLinkageDataSource="";
    var havePersonalMobileNumber= new Boolean(false);
    var havePersonalMobileNumberTest= new Boolean(false);
    /* var myObject = new Object();
    myObject.name = "John";
    myObject.age = 12;
    myObject.pets = ["cat", "dog"];
    
    var txt="some text 2";
    var numb = txt.match(/\d/g);
    alert (numb);
    var myString = JSON.stringify(myObject);
    alert(myString); */
    var patientListDTO=[];
     $(".detailsHouseHoldsMenbers").css("display", "none");
     
     
     $('input[type=radio][name=hasHHM]').change(function() {
         hasHHMChecked=1;
         var thisVal=this.value;
         if(this.value=='yes'){
             $(".detailsHouseHoldsMenbers").css("display", "block");
             $(".detailsHouseHoldsMenbers1").css("display", "block");
             hasHHM=new Boolean(true);
         }
         else{
             $(".detailsHouseHoldsMenbers").css("display", "none");
             $(".detailsHouseHoldsMenbers1").css("display", "none");
             hasHHM=new Boolean(false);
         }
     }); 
              
         var validationMessaheForStep1="";
         var step1validationFlag=new Boolean(false);
         var messaheForStep1=[];
         var step=0;
         var myVar;
            /*  $("#step2").click(function(){
                 alert("cmg");
                 if(step1validationFlag)
                     {
                     $(".tab-content").children().each(function() {
                          if($(this).hasClass("tab-pane active")){
                             $(this).removeClass("active");
                              
                          }
                    });
                            $(".tab-content").children().each(function() {
                              if($(this).attr("id")=="Step-2" ){
                                $(this).addClass("active");
                                  
                              }
                        });
                    // $(this).attr("href","#Step-2");
                     }else{
                 $("nextButton").trigger("click");
                     }
             }); */
             $(".steps").click(function(){
                var id= $(this).attr("id");
                var id= $(this).attr("step");
                /* id=id.match(/\d/g);
                id=id.replace(".","");
                alert(id); */
                id=parseInt(id);
                getstepNum();
                if(id>=step){
                    var testing =nextButtonClick();
                     if(testing)
                         {
                            removeActive();
                            setActive(id);
                            
                         return true;
                         }
                     else
                         {
                        // alert(messaheForStep1.join(","));
                        if(messaheForStep1.length!=0){
                         testAlertData="";
                        for( var i=0; i<messaheForStep1.length; i++ )
                            {
                            testAlertData+=messaheForStep1[i] + '<br />'
                            }
                        var title= 'Please enter the following !';
                         alert(testAlertData,title);
                        }
                         return false;
                         }
                }
                else
                    {
                    removeActive();
                    setActive(id);
                    return true;
                    }
                 
             });
             
             function getstepNum(){
                 
                 $(".tab-content").children().each(function() {
                      if($(this).hasClass("tab-pane active")){
                          var id=$(this).attr("id");
                        id= id.replace("-","");
                         step= id.match(/\d/g);
                         step=parseInt(step);
                      }
                });
                 return step;
             }
             
             function removeActive()
             {
                 $(".tab-content").children().each(function() {
                      if($(this).hasClass("tab-pane active")){
                         $(this).removeClass("active");
                          
                      }
                });

                 $('.steps').each(function() {
                     
                     if($(this).parents("li").hasClass("active")){
                         $(this).parents("li").removeClass("active");
                          
                      }
                });
                 
                 
                 
                    
             }
             
             function setActive(i)
             {
                 $(".tab-content").children().each(function() {
                      if($(this).attr("id")=="Step-"+(i) ){
                        $(this).addClass("active");
                          
                      }
                }); 
                
                    $("#step"+i).parents("li").addClass("active");
             }
             function nextButtonClick(stepValue)
             {
                
                var stepActive=step;
                     
                     if(typeof(stepValue) != "undefined" )
                     {
                         stepActive=stepValue;
                     }
                     
                 messaheForStep1=[];
                 
                            
                  if( stepActive==1)
                    {
                    messaheForStep1=[];
                    
                        name=$('[name=firstName]').val();
                        lastName=$('[name=lastName]').val();
                        fatherFirstName=$('[name=fatherFirstName]').val();
                        fatherLastName=$('[name=fatherLastName]').val();
                       blockTalukaTUName=$('[name=blockTalukaTUName]').val();
                        mobileNo=$('[name=mobileNo]').val();
                        telephoneNo=$('[name=telephoneNo]').val();
                        
                         presentStreetName=$('[name=presentStreetName]').val();
                         presentLocation=$('[name=presentLocation]').val();
                         presentLandmark=$('[name=presentLandmark]').val();
                         presentCityTownVillage=$('[name=presentCityTownVillage]').val();
                         presentPincode=$('[name=presentPincode]').val();
                          presentState =$('[name=presentState]').val();
                        
                          
                        if($("[name=havePersonalMobileNumber]").prop('checked') == true){
                            havePersonalMobileNumber=true;
                            mobileNo=$('[name=mobileNo]').val();
                            if(mobileNo.length<10){
                                messaheForStep1.push(" Mobile Number ");
                            }
                        }else{
                            havePersonalMobileNumber=false;
                        }
                          
                          
                                    /*  if(priorityName.length==0)   priorityName.length>0 &&
                                    {
                                    messaheForStep1.push("Priority ");
                                    } */
                                    if(name.length==0 )
                                    {
                                        messaheForStep1.push("Patient first name ");
                                    }
                                if(lastName.length==0 )
                                    {
                                        messaheForStep1.push("Patient last name ");
                                    }
                                    if(fatherFirstName.length==0 )
                                        {
                                        messaheForStep1.push("Father First Name ");
                                        }
                                if(fatherLastName.length==0 )
                                    {
                                    messaheForStep1.push("Father last Name ");
                                    }
                                    if(districtCode.length==0 )
                                        {
                                        messaheForStep1.push("District Code ");
                                        }
                                    if( blockTalukaTUName.length==0 )
                                        {
                                        messaheForStep1.push("TU Name ");
                                        }
             
                                    if( presentStreetName.length==0  )
                                        {
                                        messaheForStep1.push(" Present Street Name ");
                                        } 
                                    if( presentLocation.length==0  )
                                        {
                                        messaheForStep1.push(" Present Location ");
                                        }
                                    if( presentLandmark.length==0  )
                                        {
                                        messaheForStep1.push(" Present Landmark ");
                                        }
                                    if( presentCityTownVillage.length==0  )
                                        {
                                        messaheForStep1.push(" Present City/Town/Village ");
                                        }
                                     if( presentPincode.length==0 || presentPincode.length<6 || presentPincode =="000000")
                                        {
                                        messaheForStep1.push(" Present Pincode ");  
                                        } 
                                    if( presentState==0  )
                                        {
                                        messaheForStep1.push(" Present State ");
                                        }
                                        
                                    if( telephoneNo.length!=0 && telephoneNo.length<10  ){
                                    messaheForStep1.push(" Alternate number ");
                                    }
                                         if(  name.length>0 && lastName.length>0 && fatherFirstName.length>0 && fatherLastName.length>0  && districtCode.length>0  && blockTalukaTUName.length>0 
                                            && (presentPincode.length==0 || presentPincode.length==6) 
                                            && presentStreetName.length>0 && presentLocation.length>0 && presentLandmark.length>0 && presentCityTownVillage.length>0 
                                             && presentState>0 && (havePersonalMobileNumber==false || (havePersonalMobileNumber==true && mobileNo.length==10) )
                                            && (havePersonalMobileNumber==false || (telephoneNo.length==0 || telephoneNo.length==10 )) )
                                            
                                         { 
                                        step1validationFlag=new Boolean(true);
                                        removeActive();
                                        setActive(stepActive+1);
                                        return true;
                                        }
                                else {
                                     step1validationFlag=new Boolean(false);
                                
                                    return false;
                                }
                                    
                    }else if(stepActive==2){
                        messaheForStep1=[];
                        permanentStreetName=$('[name=permanentStreetName]').val();
                         permanentLocation=$('[name=permanentLocation]').val();
                         permanentLandmark=$('[name=permanentLandmark]').val();
                         permanentCityTownVillage=$('[name=permanentCityTownVillage]').val();
                         permanentPincode=$('[name=permanentPincode]').val();
                           permanentState =$('[name=permanentState]').val();
                        
                         patientDateOfBirth=$('[name=patientDateOfBirth]').val();
                         sakhamRegistrationDate=$('[name=sakshamRegDate]').val();
                         
                          if(permanentStreetName.length==0){
                              
                             messaheForStep1.push(" Permanent Street Name ");
                          }
                         if(permanentLocation.length==0){
                              
                             messaheForStep1.push(" Permanent Location ");
                          }
                        if(permanentLandmark.length==0){
                              
                             messaheForStep1.push(" Permanent Landmark ");
                          }
                        if(permanentCityTownVillage.length==0){
                              
                             messaheForStep1.push(" Permanent City/Town/Village ");
                          }
                        /* if(permanentPincode.length==0 || permanentPincode.length<6 || permanentPincode =="000000"){
                              
                             messaheForStep1.push(" Permanent Pincode ");   //(permanentPincode.length>0 || permanentPincode.length==6) &&
                          } */ 
                        if(permanentState==0 ){
                              
                             messaheForStep1.push(" Permanent State ");
                          }
                         if(patientDateOfBirth.length==0){
                              
                             messaheForStep1.push(" Patient Date Of Birth ");           //&& patientDateOfBirth.length>0
                          } 
                        if(sakhamRegistrationDate.length==0){
                              
                             messaheForStep1.push(" Sakham Registration Date ");
                          }
                        if(religion.length==0 || religion==0){
                              
                             messaheForStep1.push(" Religion ");
                          }
                        if(caste.length==0 || caste==0){
                              
                             messaheForStep1.push(" Caste ");
                          }
                        if(placeOfRegistration.length==0 || placeOfRegistration==0){
                              
                             messaheForStep1.push(" Place Of Registration ");
                          }
                        
                        if($('input[name="reg_place"]:checked').val()=="0"){
                            messaheForStep1.push(" Place Of Registration ");
                            
                        }
                        if($('input[name="reg_place"]:checked').val()!="0"){
                            if($('input[name="reg_place"]:checked').val()=="4"){
                                
                                if($('[name=reg_place_text]').val().trim().length==0)
                                messaheForStep1.push("Other Place Of Registration ");
                                
                            }
                            
                        }
                        
                        
                        if($('[name=reg_place]:checked').attr('displayname')=="Other" && $('[name=reg_place_text]').val()==""){
                             messaheForStep1.push(" Place Of Registration ");
                        }
                        
                        if($('[name=patient_religion]:checked').val()=="6" && $('[name=patient_religion_text]').val()==""){
                             messaheForStep1.push(" Religion  ");
                        }
                        
                        if($('[name=patient_caste]:checked').attr('displayname')=="Other" && $('[name=patient_caste_text]').val()==""){
                             messaheForStep1.push(" Caste  ");
                        }
                        
                        
                     /*       if(permanentStreetName.length>0 && permanentLocation.length>0 && permanentLandmark.length>0 && permanentCityTownVillage.length>0 &&
                                  (permanentPincode.length==0 || permanentPincode.length==6) && permanentState>0 && placeOfRegistration>0   
                                  && sakhamRegistrationDate.length>0 && religion>0 && caste>0  && ($('[name=reg_place]:checked').attr('displayname')=="Other" && $('[name=reg_place_text]').val()=="")){
                          */     
                          if(messaheForStep1.length==0){
                             step1validationFlag=new Boolean(true);
                            removeActive();
                            setActive(stepActive+1);
                            return true;
                            }
                        else {
                             step1validationFlag=new Boolean(false);
                            
                            return false;
                        }
                          
                          
                    }
                else if(stepActive==3)
                    {
                        
                    messaheForStep1=[];
                    messaheForStep1.length=0;
                    
                                var ano=$('[name=adharNo]').val();
                                
                                var haveAdharCardNumber1=false;
                                
                                if($("[name=haveAdharCardNumber]").prop('checked') == true){
                                    haveAdharCardNumber1=true;
                                    
                                    if(ano.length<12){
                                        messaheForStep1.push(" Aadhaar card Number");
                                    }
                                }
                            
                            age=$('[name=age]').val();
                            
                            if($('[name=adharNo]').val()=="" && $('input[type=radio][name=adharSatus]:checked').val()==undefined){
                                messaheForStep1.push(" Aadhar card ");
                            }
                            
                            if($('input[type=radio][name=rationcardColor]:checked').val()==undefined){
                                messaheForStep1.push(" Type of Ration card  ");
                            }
                            
                            if($('input[type=radio][name=healthCareProvider]:checked').val()==undefined){
                                messaheForStep1.push(" Patient approached with symptoms  ");
                            }
                            
                            if($('input[type=radio][name=localityType]:checked').val()==undefined){
                                messaheForStep1.push(" Type of locality  ");
                            }
                            
                            
                            
                            if( age.length==0 || age==0 )
                                    {
                                    messaheForStep1.push("age ");
                                    }
                                if( gender.length==0 )
                                    {       messaheForStep1.push("gender ");
                                    }
                                
                                if($('[name=rationcardColor]:checked').attr('displayname')=="Others" && $('[name=otherRationCardTypeText]').val()==""){
                                 messaheForStep1.push(" Type of Ration card ");
                            }
                                if($('[name=healthCareProvider]:checked').attr('displayname')=="Others" && $('[name=firstHealthCareProviderContact]').val()==""){
                                     messaheForStep1.push(" Patient approached with symptoms ");
                                }
                                if($('[name=localityType]:checked').attr('displayname')=="Any Other" && $('[name=localityType_text]').val()==""){
                                     messaheForStep1.push(" Type of locality ");
                                }
                                /* if(ano.length<=11){
                                    messaheForStep1.push(" aadhar number ");
                                } */
                            /* if( age.length>0 && age>0 && (haveAdharCardNumber1==false || (ano.length==12 ) ) && messaheForStep1.length==0) */
                                //{
                                if(messaheForStep1.length==0){
                                step1validationFlag=new Boolean(true);
                                removeActive();
                                setActive(stepActive+1);
                                return true;
                                }
                                else {
                                     step1validationFlag=new Boolean(false);
                                    
                                    return false;
                                }
                        }
                    
                else if(stepActive==4)
                {
                    
                    
                    
                        messaheForStep1=[];
                        //otherEducationQualification=$('[name=otherEducationQualification]').val();
                        
                        if($('input[name="educationQualification"]:checked').val()==undefined){
                            messaheForStep1.push("Education ");
                        }
                        
                        if($('input[name="educationQualification"]:checked').val()=="8"){
                            if($('[name=educationQualification_text]').val()==""){
                            messaheForStep1.push("Enter other education information");
                            }
                        }
                        
                        
                        
                        if($('input[name="workingStatus"]:checked').val()==undefined){
                            messaheForStep1.push("Working Status ");
                        }
                        
                        if($('input[name="workingStatus"]:checked').val()=="Employed" && $('input[name="occupation"]:checked').val()==undefined){
                            messaheForStep1.push("If Employed, Occupation ");   
                        }
                        
                        if($('input[name="workingStatus"]:checked').val()=="Employed" && $('input[name="occupation"]:checked').val()=="6"){
                            if($('[name=occupation_text]').val()==""){
                                messaheForStep1.push("Enter other occupation information");
                                }
                        }
                        
                        if($('input[name="workingStatus"]:checked').val()=="Unemployed" && $('input[name="unEmploymentCause"]:checked').val()==undefined){
                            messaheForStep1.push("If unemployed please specify ");
                        }
                        
                        if($('input[name="workingStatus"]:checked').val()=="Unemployed" && $('input[name="unEmploymentCause"]:checked').val()=="7"){
                            if($('[name=unEmploymentCauseText]').val()==""){
                                messaheForStep1.push("Enter other unemployment information");
                                }
                        }
                        
                        
                        if(messaheForStep1.length==0){
                            step1validationFlag=new Boolean(true);
                            removeActive();
                            setActive(stepActive+1);
                            return true;
                            }
                            else {
                                 step1validationFlag=new Boolean(false);
                                
                                return false;
                            }
                    }
                
                else if(stepActive==5)
                {
                    
                    
                    
                        
                        messaheForStep1=[];
                        var houseHoldMembers=$('[name=houseHoldMembers]').val();
                        var totalNumOfChildrensLessThanSixYears=$('[name=totalNumOfChildrensLessThanSixYears]').val();
                        //otherEducationQualification=$('[name=otherEducationQualification]').val();
                        
                        if( stayingWith==0 )
                            {
                            messaheForStep1.push("Staying With ");
                            }
                        if( marriageStatus==0 )
                            {
                            messaheForStep1.push("Marriage Status ");
                            }
                         if($('#houseHoldIncomeRange :selected').val()=="0"){
                            messaheForStep1.push("Average Monthly Households income ");
                         }
                        
                        if(houseHoldMembers.length==0)
                            {
                            messaheForStep1.push("houseHold Members ");
                            }
                        
                        if(totalNumOfChildrensLessThanSixYears.length==0)
                            {
                            messaheForStep1.push("total NO.Of Childrens Less Than Six Years ");
                            }
                        if($('#stayingWith :selected').val()=="2" ){
                            messaheForStep1=[];
                            if($('#houseHoldIncomeRange :selected').val()=="0"){
                                messaheForStep1.push("Average Monthly Households income from all sources ");
                            }
                            
                            if($('#marriageStatus :selected').val()=="0"){
                                messaheForStep1.push("Current Marital Status  ");
                            }
                            
                            if($('#livingLocalitySince :selected').val()=="0"){
                                messaheForStep1.push("Living in present city/town/village since ");
                            }
                            
                         if($('#houseHoldIncomeRange :selected').val()=="0"){
                                messaheForStep1.push("Average Monthly Households income ");
                             }
                            
                            if(houseHoldMembers.length==0)
                            {
                            messaheForStep1.push("houseHold Members ");
                            }
                            
                            if(totalNumOfChildrensLessThanSixYears.length==0)
                            {
                            messaheForStep1.push("total NO.Of Childrens Less Than Six Years ");
                            }
                        }
                        if($('#stayingWith :selected').val()=="1" ){
                            messaheForStep1=[];
                            if($('#houseHoldIncomeRange :selected').val()=="0"){
                                messaheForStep1.push("Average Monthly Households income from all sources ");
                            }
                            
                            if($('#marriageStatus :selected').val()=="0"){
                                messaheForStep1.push("Current Marital Status  ");
                            }
                            
                            if($('#livingLocalitySince :selected').val()=="0"){
                                messaheForStep1.push("Living in present city/town/village since ");
                            }
                            
                        }
                        if($('#stayingWith :selected').val()=="1" && messaheForStep1.length==0 ){
                            if($('#houseHoldIncomeRange :selected').val()!="0" && $('#marriageStatus :selected').val()!="0" && $('#livingLocalitySince :selected').val()!="0"){
                            removeActive();
                            setActive(7);
                            $("#step6").parents("li").css("pointer-events", "none");
                            }
                            return false;
                        }else if(stayingWith>0 && ($('#stayingWith :selected').val()=="1" ||(houseHoldMembers.length>0 && totalNumOfChildrensLessThanSixYears.length>0)) && marriageStatus>0  && messaheForStep1.length==0)
                            {
                            step1validationFlag=new Boolean(true);
                            removeActive();
                            setActive(stepActive+1);
                            $("#step6").parents("li").css("pointer-events", "all");
                            return true;
                            }
                            else {
                                 step1validationFlag=new Boolean(false);
                                
                                return false;
                            }
                    }
                
                else if(stepActive==6)
                {   messaheForStep1=[];
                    if(hasHHM==false)
                    return true;
                }
                else if(stepActive==7)
                {
                    messaheForStep1=[];
                    var selectedPatinetSubstance=new Boolean(false);
                     $('input[type=checkbox][name=historyPatientSubstance]:checked').each(function() {
                            selectedPatinetSubstance=true;
                              if($(this).val()=="8"){
                                var textval=$('[name=historyPatientSubstance_text]').val();
                                if(textval.trim().length==0){
                                selectedPatinetSubstance=false;
                                messaheForStep1.push("Other history of substance ");
                                }
                             
                             } 
                                });
                         
                    if( selectedPatinetSubstance==false )
                        {
                        messaheForStep1.push("history Substance ");
                        }   
            /*      if( visitedPlaceHomeChecked==0 &&  visitedPlaceWorkPlaceChecked==0 )
                    {
                    messaheForStep1.push("visited Place ");
                    } */
                    
                    if($('input[name="visitedPlaceHome"]:checked').val()==undefined){
                        messaheForStep1.push("visited Place Home");
                    }
                    
                    if($('input[name="visitedPlaceWorkPlace"]:checked').val()==undefined){
                        messaheForStep1.push("Workplace/Convenient Place");
                    }
                    /* if( reportedDRTBStatus==0 )
                    {
                    messaheForStep1.push("reported DRTB Status ");
                    }
                    if( reportedTBType==0 )
                    {
                    messaheForStep1.push("reported TB Type");
                    }
                    if( reportedTBPhase==0 )
                    {
                    messaheForStep1.push("reported TB Phase ");
                    } */
                    if( $('#reportedTBType :selected').val()=="0" )
                    {
                    messaheForStep1.push("Type of Tuberculosis");
                    }
                    if( $('#reportedDRTBStatus :selected').val()=="0" )
                    {
                    messaheForStep1.push("DR TB status");
                    }
                    if( $('#reportedTBPhase :selected').val()=="0" )
                    {
                    messaheForStep1.push("Phase");
                    }
                    
                    
                    if(messaheForStep1.length==0){
                        
                        return true 
                    }else{
                        return false;
                    }
                    
                    
                    
                    
                    /* && reportedDRTBStatus>0otherHealthCareProvider
                    {
                        step1validationFlag=new Boolean(true);
                        removeActive();
                        setActive(stepActive+1);
                        return true;
                    }
                    else
                        {
                         step1validationFlag=new Boolean(false);
                            return false;
                        }*/
                }
                     
                else if(stepActive==8)
                {
                    messaheForStep1=[];
                    messaheForStep1.length=0;
                    hivArtCenter=$('[name=hivArtCenter]').val();
                    diabetesArtCenter=$('[name=diabetesArtCenter]').val();
                    if($('[name=healthFaciityName]').val()==""){
                        messaheForStep1.push(" Name of the Health facility/post  ")
                    }
                    
                    if($('input[name="historyOfTBTreatement"]:checked').val()==undefined){
                        messaheForStep1.push(" History of past TB treatment ")
                    }
                    
                    if($('input[name="historyOfTBTreatement"]:checked').val()=="yes"){
                        
                        if($('#historyTBTreatmentCause :selected').val()=="0"){
                            messaheForStep1.push(" Select the History of past TB treatment ")
                        }
                        
                    }
                    
                    if($('input[name="hasHIV"]:checked').val()==undefined){
                        messaheForStep1.push(" HIV status ")
                    }
                    
                    if($('input[name="hasHIV"]:checked').val()=="yes" && $('#hivArt :selected').val()=="121"){
                        messaheForStep1.push(" If HIV Positive, status of treatment ")
                    }
                    
                    if($('input[name="hasDiabetes"]:checked').val()==undefined){
                        messaheForStep1.push(" Diabetes  ")
                    }
                    
                    
                    
                /*  if( historyOfTBTreatement && historyTBTreatmentCause==0 )
                    {
                    messaheForStep1.push("history Of past TB treatement cause ");
                    }
                     
                     if(hasDiabetes==true && diabetesArt=="1" && diabetesArtCenter.length==0  )
                        {
                        messaheForStep1.push("diabetes art center ");
                        }
                     
                    if(hasHIV==true && hivArt=="1" && hivArtCenter.length==0  )
                        {
                        messaheForStep1.push("hiv art center ");
                        }
                    if((( historyOfTBTreatement==true && historyTBTreatmentCause>0) || (historyOfTBTreatement==false)) 
                            &&( ((hasDiabetes==true && (diabetesArt=="1" && diabetesArtCenter.length>0 )) || (hasDiabetes==true &&
                                    (diabetesArt=="0" && diabetesArtCenter.length==0 ))
                                    || hasDiabetes==false))
                            && ((hasHIV==true && ( hivArt=="1" && hivArtCenter.length>0)) || (hasHIV==true && (hivArt=="0" && hivArtCenter.length==0 )) 
                                    || hasHIV==false)) */
                                    
                                    if(messaheForStep1.length==0)
                        {

                        step1validationFlag=new Boolean(true);
                        removeActive();
                        setActive(stepActive+1);
                        return true;
                        
                        }
                    else
                    {
                     step1validationFlag=new Boolean(false);
                        return false;
                    }
                }else if(stepActive==9){
                    messaheForStep1=[];
                    var selectedPatinetSubstance=new Boolean(false);
                     $('input[type=checkbox][name=councelingTopic]:checked').each(function() {
                            selectedPatinetSubstance=true;
                              if($(this).val()=="8"){
                                var textval=$('[name=councelingTopic_text]').val();
                                if(textval.trim().length==0){
                                selectedPatinetSubstance=false;
                                messaheForStep1.push("Other Counselling sessions ");
                                }
                             
                             } 
                                });
                         
                    /* if( selectedPatinetSubstance==false )
                        {
                        messaheForStep1.push("history Substance ");
                        }  */  
                    
                    
                    if(messaheForStep1.length==0)
                    {

                    step1validationFlag=new Boolean(true);
                    removeActive();
                    setActive(stepActive+1);
                    return true;
                    
                    }
                else
                {
                 step1validationFlag=new Boolean(false);
                    return false;
                }
                    
                }
                              
                            
                    return true;
                    
             }
        /*  $("#nextButton").click(function(){
             var testing =nextButtonClick();
            if(testing)
                {
                return true;
                }
            else{
                alert("Please select the "+messaheForStep1.join(","));
            return false;
            }
             
                }); */
                
    $('[name=needReferralServiceAndLinkage]').change(function(){
        
        if($('input[name="needReferralServiceAndLinkage"]:checked').val()=="yes"){
            $('#referLinkage').show();
        }else{
            $('#referLinkage').hide();
            
            $('[name=referralServiceAndLinkage]:checked').each(function() { 
                $(this).removeAttr('checked')
            })
            jQuery( 'input[id*=referralServiceAndLinkage]' ).each(function(){
                  $(this).val('')
            }); 
        }
        
        
    })          
                
    $("#submitButton").click(function()
            {
        $( "#submitButton" ).prop( "disabled", true );
        
              callMe()
            });
    
    
    function callMe()
    {
        $.ajax({
             type: "POST",
             url: "./rest/patientInfo/insertPatients",
             contentType: "application/json; charset=utf-8",
             dataType: "json",
             data: "{\"patientListDTO\":"+JSON.stringify(patientListDTO)+"}",
             headers: {
                    "X-Authorization": "",
                    "code": "xyz",
                    "requestType":"web"
                },
             success: function(data) {
                 $.each(data.sakhamPatientIds, function(index, item) {
                     
                     if(item.success)
                         {
                         alert(item.successMessage);
                         window.location.href ="./dashboardController.htm?screenType=dashboard";
                         window.reload();
                        
                         }
                     else
                         {
                         alert(item.failMessage);
                         
                         }
                     
                 });
            //  $(".sakshamPatientIdDiv").append(data); 
             },
                error: function() {
                 alert("Failed to load names");
                 $( "#submitButton" ).prop( "disabled", false );
             }
         });  
    }
     
     
     function setCouncelingTopicPreview()
    {
        if(councelingTopic!="" && councelingTopic.length>0){
    
    var arrayCouncelingTopic= councelingTopic.split(",");
     
    for(var i=0;i<arrayCouncelingTopic.length;i++)
        {
         if(arrayCouncelingTopic[i]!="" && arrayCouncelingTopic[i].length>0){
             
         $('input[type=checkbox][name=councelingTopic1]').each(function() {
                 if($(this).prop('value')==arrayCouncelingTopic[i] ||  councelingTopic.indexOf($(this).prop('value'))>=0)
                    { 
                    $(this).prop("checked",true);
                    }
                 else
                     {
                        $(this).prop("checked",false);
                     }
                
             });
         }
        }
    }
    }
    
     
     
    
     function addTableRows(){
         
             
         $('.detailsHouseHoldsMenbers1').html("");
            $('.detailsHouseHoldsMenbers1').html(housholdinnerDiv);
            
            
            /* $('.detailsHouseHoldsMenbers1 tr a').each(function() {
               // if($($(this).parents("tr").hasClass("tableHead")){
                     $(this).remove();
               //  }
                    
                 }); */
             
             $('input:checkbox,input:text,select','.detailsHouseHoldsMenbers1').each(function() {
                        $(this).attr("disabled", true);
     });
             
    
     }
    /*********************************************************************************************************************************************************/
    
    
    function getNumber(txt){
    var numb = priorityName.match(/\d/g);
    
    return numb;
    }
      $('[name=sakshamPatientId]').val(sakhamId);
     $('[name=councelorName]').val(CURRENTUSER.NAME);
    
     $("#districtId").change(function(){
         var districtId_selected = $(this).val();
      //  alert( $(this:selected).Val());
         districtCode=districtId_selected;
         districtName=$("#districtId option:selected" ).attr("displayName");
         /* var displayName= $(this:selected).attr("displayName");
         districtName=displayName; */
         $('[name=districtCode]').val(districtCode+"  "+districtName);
         var valSelected="";
        
       
         valSelected="MH"+"/"+districtId_selected+"/"+"MH59"+"/"+2016;
         
         
         if(isPresakham===true){
        var sakhamIdTest='OLD-';
        valSelected=sakhamIdTest+valSelected;
            
         }
         $('[name=sakshamPatientId]').val(valSelected);
         sakhamId=valSelected;
     });
     
     function setNextFollowUpDate()
     {
        var priority= $("#priority_classification").val();
         var numberOfDaysToAdd = 0; 
         var datetoShow = 1; 
         var someFormattedDate = ""; 
         if(priority == 1)
         {
            datetoShow = 1; 
            numberOfDaysToAdd =10; }
         else if(priority ==2)
        { 
             datetoShow = 1;
            numberOfDaysToAdd =30; }
        else if(priority == 3)
        { 
            datetoShow = 1; 
            numberOfDaysToAdd =30;
        }else{
            datetoShow = 0;
            } 
         if(datetoShow == 1){ 
             var someDate = new Date();
        someDate.setDate(someDate.getDate() + numberOfDaysToAdd);

        var dd = someDate.getDate();
        var mm = someDate.getMonth()+ 1; 
        var y = someDate.getFullYear(); 
        someFormattedDate = dd + '/'+ mm + '/'+ y;
        }
         
         if(priorityName == 'priority3'){
        someFormattedDate = someFormattedDate +" "; 
        }
         $('input[name=nextFollowUpDate]').val(someFormattedDate);
     }
     
     
    
     $('input[type=radio][name=priorityName]').change(function() {
             //  alert(this.value);
                priorityName=this.value;
                var selectedPriority=getNumber(getNumber);
                priority_classification=selectedPriority;
                $("#priority_classification").val(selectedPriority);
                $("[name=priority_classification1]").val(selectedPriority);
                $('input[type=radio][name=priorityName1]').each(function() {
                    var flagChecked=new Boolean(true);
                    if($(this).prop('value')==selectedPriority && flagChecked )
                        { 
                        
                        flagChecked=false;
                        $(this).attr("checked",true);
                        }
                   
                });
                priority_classification=parseInt(priority_classification);
                setNextFollowUpDate();
                 
        });
     
     
     $('input[type=checkbox][name=consentForCouseling]').change(function() {
        
        
         if ($(this).is(':checked')) {
             displayName1="Yes";
             consentForCouselingChecked=1;
         consentForCouseling=new Boolean(true);
         }
         else
             {
             displayName1="No";
             consentForCouselingChecked=2;
              consentForCouseling=new Boolean(false);
            
               
             }
         $('[name=consentForCouseling1]').html(displayName1);    
     });
         //alert(displayName);
        
     
        

        $('input[type=checkbox][name=havePersonalMobileNumber]').change(function() {
            if ($(this).is(':checked')) {
                
                $('#mobileNumDiv').css('display','block');
            }else{
                $('#mobileNumDiv').css('display','none');
                $('[name=mobileNo]').val('');
                $('[name=telephoneNo]').val('');
            }
            
            
        });
         
        /* $('#state').change(function() {
             
            console.log();
            if($("[name=samePermanentAddress]").prop('checked') == true){
                
                $('#permanentState').val($(this).val());
            }
            
            
        }); */
         
         
     $('input[type=checkbox][name=shareDetails]').change(function() {
        
         if ($(this).is(':checked')) {
             displayName2="Yes";
             shareDetailsChecked=1;
             shareDetails=new Boolean(true);
             $('input[type=checkbox][name=shareDetails1]').attr("checked",true);
            // alert(shareDetails);
             }
             else
                 {
                 displayName2="No";
                 shareDetailsChecked=2;
                 shareDetails=new Boolean(false);
                 $('input[type=checkbox][name=shareDetails1]').attr("checked",false);
                 //    alert(shareDetails);
                 }
         
         $('[name=shareDetails1]').html(displayName2);
 });
     $('input[type=checkbox][name=contentToCareGivers]').change(function() {
        
         if ($(this).is(':checked')) {
             displayName3="Yes";
             contentToCareGiversChecked=1;
             contentToCareGivers=new Boolean(true);
             $('input[type=checkbox][name=contentToCareGivers1]').attr("checked",true);
           //  alert(contentToCareGivers);
             }
             else
                 {
                 displayName3="No";
                 contentToCareGiversChecked=2;
                 $('input[type=checkbox][name=contentToCareGivers1]').attr("checked",false);
                 contentToCareGivers=new Boolean(false);
               //      alert(contentToCareGivers);
                 }
         $('[name=contentToCareGivers1]').html(displayName3);
 });
     
     $('input[type=checkbox][name=contentToReceiveSMS]').change(function() {
            
         if ($(this).is(':checked')) {
             displayName4="Yes";
             contentToReceiveSMS=new Boolean(true);
           //  alert(contentToCareGivers);
             }
             else
                 {
                 displayName4="No";
                 contentToReceiveSMS=new Boolean(false);
               //      alert(contentToCareGivers);
                 }
         $('[name=contentToReceiveSMS1]').html(displayName3);
 });
         
     
     
     
     $('input[type=radio][name=rationcardColor]').change(function() {
     //    alert(this.value);
         rationcardColor=this.value;
         $("#rationcardColor1").val(rationcardColor);
         rationcardColor=parseInt(rationcardColor);
         var displayname=$(this).attr("displayname");
         if(displayname=="Others"){
             $('[name=otherRationCardTypeText]').show();
         }else{
             $('[name=otherRationCardTypeText]').hide();
             $('[name=otherRationCardTypeText]').val('');
         }
         
 });

     $('input[type=radio][name=patient_religion]').change(function() {
         //    alert(this.value);
             religion=this.value;
             religion=parseInt(religion);
             
             if($('input[type=radio][name=patient_religion]:checked').val()=="6"){
                 $('[name=patient_religion_text]').css("display", "block");
             }else{
                 $('[name=patient_religion_text]').css("display", "none");
                 $('[name=patient_religion_text]').val('');
             }
             
             
     });
     $('input[type=radio][name=patient_caste]').change(function() {
         //    alert(this.value);
             caste=this.value;
             caste=parseInt(caste);
             
     });
     $('input[type=radio][name=reg_place]').change(function() {
         //    alert(this.value);
             placeOfRegistration=this.value;
             placeOfRegistration=parseInt(placeOfRegistration);
             
             if($('input[type=radio][name=reg_place]:checked').val()=="4"){
                 $('[name=reg_place_text]').css("display", "block");
             }else{
                 $('[name=reg_place_text]').css("display", "none");
                 $('[name=reg_place_text]').val('');
             }
             
             
     });

     $('input[type=radio][name=healthCareProvider]').change(function() {
       //  alert(this.value);
         healthCareProvider=this.value;
         $("#healthCareProviders1").val(healthCareProvider);
         healthCareProvider=parseInt(healthCareProvider);
         
         if($('input[type=radio][name=healthCareProvider]:checked').val()=="7"){
             $('[name=firstHealthCareProviderContact]').css("display", "block");
         }else{
             $('[name=firstHealthCareProviderContact]').css("display", "none");
             $('[name=firstHealthCareProviderContact]').val('');
         }
         
 }); 

     $('input[type=radio][name=localityType]').change(function() {
        // alert(this.value);
         localityType=this.value;
         $("#localityType1").val(localityType);   
         localityType=parseInt(localityType);
         
         if($('input[type=radio][name=localityType]:checked').val()=="4"){
             $('[name=localityType_text]').css("display", "block");
         }else{
             $('[name=localityType_text]').css("display", "none");
             $('[name=localityType_text]').val('');
         }
         
 });
     $('input[type=radio][name=gender]').change(function() {
       //  alert(this.value);
         gender=this.value;
         $("#gender1").val(gender);   
       //  gender=parseInt(gender);
         
 });
     
     $('input[type=radio][name=educationQualification]').change(function() {
       //  alert(this.value);
         educationQualification=this.value;
         $("#educationQualification1").val(educationQualification); 
         educationQualification=parseInt(educationQualification);
         
         if(($('input[type=radio][name=educationQualification]:checked').attr('displayname').indexOf('other')>0)==true){
             $('[name=educationQualification_text]').css("display", "block");
         }else{
             $('[name=educationQualification_text]').css("display", "none");
             $('[name=educationQualification_text]').val('');
         }
         
         
 }); 
     
     $('input[type=radio][name=workingStatus]').change(function() {
         var thisVal=this.value;
         if(this.value=='Unemployed'){
             console.log("Unemployed");
             $("#working_statusdiv1").css("display", "none");
             $("#working_statusdiv2").css("display", "block");
             $("#working_statusdiv75").hide();
             $("#working_statusdiv76").show();
             
             $("#working_statusdiv3").css("display", "none");
             $("#working_statusdiv4").css("display", "block");
             $('[name=occupation1]').val('');
         workingStatus=new Boolean(false);
         $('[name=occupation1]').val('');
         occupation=0;
         $('input[type=radio][name=occupation]').each(function() {
             
            $(this).attr("checked",false);
         
      });
         }
         else{
             console.log("employee");
             $("#working_statusdiv2").css("display", "none");
             $("#working_statusdiv1").css("display", "block");
             $("#working_statusdiv76").hide();
             $("#working_statusdiv75").show();
             
             $("#working_statusdiv4").css("display", "none");
             $("#working_statusdiv3").css("display", "block");
             unEmploymentCause=0;
             workingStatus=new Boolean(true);
             $('[name=unEmploymentCause1]').val('');
         }
         $('input[type=radio][name=unEmploymentCause]').each(function() {
              
                $(this).attr("checked",false);
            
         });
         
         
         if($('input[type=radio][name="workingStatus"]:checked').val()=="Employed"){
             $('[name=unEmploymentCause]').removeAttr('checked');
             $('[name=unEmploymentCauseText]').val('')
        }
         
         if($('input[type=radio][name="workingStatus"]:checked').val()=="Unemployed"){
             $('[name=occupation]').removeAttr('checked')
              $('[name=occupation_text]').val('')
        }  
         
         
 }); 
     
     $('input[type=radio][name=occupation]').change(function() {
        //  alert(this.value);
          occupation=this.value;
          unEmploymentCause=0;
          $('[name=occupation1]').val(occupation); 
          occupation=parseInt(occupation);
          
          if(($('input[type=radio][name=occupation]:checked').attr('displayname').indexOf('other')>0)==true){
                 $('[name=occupation_text]').css("display", "block");
             }else{
                 $('[name=occupation_text]').css("display", "none");
                 $('[name=occupation_text]').val('');
             }
 }); 
     
     
     $('input[type=radio][name=unEmploymentCause]').change(function() {
         // alert(this.value);
          unEmploymentCause=this.value;
          occupation=0;
          $('[name=unEmploymentCause1]').val(unEmploymentCause);
          unEmploymentCause=parseInt(unEmploymentCause);
 }); 

     $("#stayingWith").change(function(){
        // alert(this.value);
         stayingWith= $(this).val();
         $("#stayingWith1").val(stayingWith);
         stayingWith=parseInt(stayingWith);
     });
     $("#marriageStatus").change(function(){
        // alert(this.value);
         marriageStatus= $(this).val();
         $("#marriageStatus1").val(marriageStatus);
         marriageStatus=parseInt(marriageStatus);
     })
     
     $("#houseHoldIncomeRange").change(function(){
        // alert(this.value);
         houseHoldIncomeRange= $(this).val();
         $("#houseHoldIncomeRange1").val(houseHoldIncomeRange);
         houseHoldIncomeRange=parseInt(houseHoldIncomeRange);
     });
     $("#livingLocalitySince").change(function(){
        // alert(this.value);
         livingLocalitySince= $(this).val();
         $("#livingLocalitySince1").val(livingLocalitySince); 
         livingLocalitySince=parseInt(livingLocalitySince);
         
     });
     
     $('input[type=checkbox][name=historyPatientSubstance]').change(function() {
           //  alert(this.value);
             historyPatientSubstance=this.value;
             var thisVal=this.value;
             var displayName= $(this).attr("displayName");
             $('#historyPatientSubstance1').html(displayName);
             
            if($(this).val()=="8"){
                if($(this).is(':checked')){
                    $('[name=historyPatientSubstance_text]').show();
                } else{
                    $('[name=historyPatientSubstance_text]').hide();
                 $('[name=historyPatientSubstance_text]').val('');
           
             }
             }
             
     });
     $('input[type=radio][name=visitedPlaceHome]').change(function() {
         visitedPlaceHomeChecked=1;
         var thisVal=this.value;
         if(this.value=='yes'){
             visitedPlaceHome=new Boolean(true);
            
        //   alert(visitedPlaceHome);
        
        
            
         }
         else{
             visitedPlaceHome=new Boolean(false);
            // alert(visitedPlaceHome);
         }
         
         $('input[type=radio][name=visitedPlaceHome1]').each(function() {
                var flagCheckedVal=new Boolean(true);
                 if($(this).prop('value')==thisVal && flagCheckedVal )
                    { 
                     
                    // alert($(this).prop('value'));
                     flagCheckedVal=false;
                    $(this).attr("checked",true);
                    }
                
             });
         
 }); 
     $('input[type=radio][name=visitedPlaceWorkPlace]').change(function() {
         visitedPlaceWorkPlaceChecked=1;
         var thisVal=this.value;
         if(this.value=='yes'){
             visitedPlaceWorkPlace=new Boolean(true);
      
         }
         else{
             visitedPlaceWorkPlace=new Boolean(false);
            // alert(visitedPlaceWorkPlace);
         }
         $('input[type=radio][name=visitedPlaceWorkPlace1]').each(function() {
                var flagCheckedVal=new Boolean(true);
                 if($(this).prop('value')==thisVal && flagCheckedVal )
                    { 
                     
                    // alert($(this).prop('value'));
                     flagCheckedVal=false;
                    $(this).attr("checked",true);
                    }
                
             });
          
 }); 
     
     
    
     $("#reportedDRTBStatus").change(function(){
         reportedDRTBStatus= $(this).val();
        // alert( $(this).val());
         var displayName= $(this).attr("displayName");
         $("#reportedDRTBStatus1").html($('#reportedDRTBStatus option:checked').attr('displayName')); 
         
         reportedDRTBStatus=parseInt(reportedDRTBStatus);
     });
     $("#reportedTBType").change(function(){
         reportedTBType= $(this).val();
         var displayName=$("#reportedTBType option:selected" ).attr("displayName");
         $("#reportedTBType1").html($('#reportedTBType option:checked').attr('displayName')); 
         reportedTBType=parseInt(reportedTBType);
        
         if($('#reportedTBType :selected').val()=="2"){
             $('#organDiv').show();
         }else{
             $('#organDiv').hide();
             $('[name=organEffected]').val('');
             
         }
         
        // alert( $(this).val());
     });
     $("#reportedTBPhase").change(function(){
         reportedTBPhase= $(this).val();
         var displayName= $(this).attr("displayName");
         $("#reportedTBPhase1").html($('#reportedTBPhase option:checked').attr('displayName')); 
         reportedTBPhase=parseInt(reportedTBPhase);
        // alert( $(this).val());
     }); 
     $("#verifiedDRTBStatusWithCard").change(function(){
         verifiedDRTBStatusWithCard= $(this).val();
         $("#verifiedDRTBStatusWithCard1").html($('#verifiedDRTBStatusWithCard option:checked').attr('displayName')); 
         verifiedDRTBStatusWithCard=parseInt(verifiedDRTBStatusWithCard);
         //alert( $(this).val());
     });
     $("#verifiedPhaseWithCard").change(function(){
         verifiedPhaseWithCard= $(this).val();
         $("#verifiedPhaseWithCard1").html($('#verifiedPhaseWithCard option:checked').attr('displayName'));
         verifiedPhaseWithCard=parseInt(verifiedPhaseWithCard);
        // alert( $(this).val());
     });
     $("#verifiedTBTypeWithCard").change(function(){
         verifiedTBTypeWithCard= $(this).val();
         $("#verifiedTBTypeWithCard1").html($('#verifiedTBTypeWithCard option:checked').attr('displayName'));
         verifiedTBTypeWithCard=parseInt(verifiedTBTypeWithCard);
        // alert( $(this).val());
     });
     
     $('input[type=radio][name=historyOfTBTreatement]').change(function() {
         var thisVal=this.value;
         if(this.value=='yes'){
             historyOfTBTreatement=new Boolean(true);
             
            // alert(historyOfTBTreatement);
            
             $("#TBhistorydiv").css("display", "block");
             $("#TBhistorydiv1").css("display", "block");
         }
         else{
             $('#historyTBTreatmentCause option[value="0"]').attr("selected",true);
             historyOfTBTreatement=new Boolean(false);
             $("#TBhistorydiv").css("display", "none");
             $("#TBhistorydiv1").css("display", "none");
             historyTBTreatmentCause=0;
         }
         
         $('input[type=radio][name=historyOfTBTreatement1]').each(function() {
            
                var flagCheckedVal=new Boolean(true);
                 if($(this).prop('value')==thisVal && flagCheckedVal )
                    { 
                     
                    // alert($(this).prop('value'));
                     flagCheckedVal=false;
                    $(this).attr("checked",true);
                    }
                
             });
        }); 
     
     
     $('[name=adharNo]').change(function(){
         
         $('.adharSatus').prop('checked', false);
     })
     
     
     
     
     $("#historyTBTreatmentCause").change(function(){
         historyTBTreatmentCause= $(this).val();
         $("#historyTBTreatmentCause1").val(historyTBTreatmentCause);
        // alert( $(this).val());
         historyTBTreatmentCause=parseInt(historyTBTreatmentCause);
     });
     
     $('input[type=radio][name=hasHIV]').change(function() {
         var thisVal=this.value;
         if(this.value=='yes'){
             hasHIV=new Boolean(true);
             $("#HIVhistorydiv").css("display", "block"); 
             $("#HIVhistorydiv1").css("display", "block"); 
        //   alert(hasHIV);
            
         }
         else{
             hasHIV=new Boolean(false);
             $("#HIVhistorydiv").css("display", "none"); 
             $("#HIVhistorydiv1").css("display", "none"); 
             hivArt=0;
             $('[name=hivArtCenter]').val("");
            // alert(hasHIV);hivArt
             $('#hivArt option[value="121"]').attr("selected",true);
            $('[name=hivArtCenter]').val('');
         }
         $('input[type=radio][name=hasHIV1]').each(function() {
                
                var flagCheckedVal=new Boolean(true);
                 if($(this).prop('value')==thisVal && flagCheckedVal )
                    { 
                     
                    // alert($(this).prop('value'));
                     flagCheckedVal=false;
                    $(this).attr("checked",true);
                    }
                
             });
        }); 
     
    
     
     $("#hivArt").change(function(){
         hivArt= $(this).val();
         $("#hivArt1").val(hivArt);
         if(hivArt=="0"){
         $('input[name=hivArtCenter]').val("");
         $('input[name=hivArtCenter]').attr('readonly', true);
         }else{
             $('input[name=hivArtCenter]').attr('readonly', false);
         }
        // alert( $(this).val());
     });
     
     $('input[type=radio][name=hasDiabetes]').change(function() {
         var thisVal=this.value;
         if(this.value=='yes'){
             hasDiabetes=new Boolean(true);
             
        //   $("#DBShistorydiv").css("display", "block"); 
        //   $("#DBShistorydiv1").css("display", "block"); 
        //   alert(hasDiabetes);
            
         }
         else{
             hasDiabetes=new Boolean(false);
        //   $("#DBShistorydiv").css("display", "none"); 
        //   $("#DBShistorydiv1").css("display", "none"); 
             diabetesArt=0;
             $('[name=diabetesArtCenter]').val("");
            // alert(hasDiabetes);
         }
         
         $('input[type=radio][name=hasDiabetes1]').each(function() {
                
                var flagCheckedVal=new Boolean(true);
                 if($(this).prop('value')==thisVal && flagCheckedVal )
                    { 
                     
                    // alert($(this).prop('value'));
                     flagCheckedVal=false;
                    $(this).attr("checked",true);
                    }
                
             });
         
        }); 
     
     
     $("#diabetesArt").change(function(){
         diabetesArt= $(this).val();
         if(diabetesArt=="0"){
             $('input[name=diabetesArtCenter]').val("");
             $("#diabetesArt1").val($(this).attr('displayName'));
             $('input[name=diabetesArtCenter]').attr('readonly', true);
         }else if(diabetesArt=="121"){
             $('input[name=diabetesArtCenter]').val("");
             $("#diabetesArt1").val(diabetesArt);
             $("#diabetesArt1").val($(this).attr('displayName'));
         }else{
             $("#diabetesArt1").val(diabetesArt);
             $('input[name=diabetesArtCenter]').attr('readonly', false);
             $("#diabetesArt1").val($(this).attr('displayName'));
         }
         
        // alert( $(this).val());
     });
      
     
     
     $('input[type=checkbox][name=councelingTopic]').change(function() {
         var displayName= $(this).attr("displayName");
         if ($(this).is(':checked')) {
             if(councelingTopic.length>0){
                 councelingTopic=councelingTopic+","+ $(this).val();
                 councelingTopicData=councelingTopicData+","+displayName;
             }
             else{
                 councelingTopicData=displayName;
                 councelingTopic= $(this).val();
             }
         }
         else
             {
             councelingTopic=councelingTopic.replace($(this).val(), "");
             councelingTopic=councelingTopic.replace(",,", ",");
             
             councelingTopicData=councelingTopicData.replace(displayName, "");
             councelingTopicData=councelingTopicData.replace(",,", ",");
             }
         
         
         if($(this).val()=="8"){
                //var testTopic= new Boolean(true)
                if ($(this).prop('checked')==true) {
                    $('[name=councelingTopic_text]').css("display", "block");
                }else{
                    $('[name=councelingTopic_text]').css("display", "none");
                    $('[name=councelingTopic_text]').val('');
                }
                 
             } 
        
 });
     
     /* $('input[type=checkbox][name=councelingTopic]').change(function() {
         if ($(this).is(':checked')) {
             var temp=$(this).attr('displayname');
             councelingTopicData+=temp+",";
             if(councelingTopic.length>0){
            councelingTopic+= $(this).val()+",";
             }
             else{
                 councelingTopic= $(this).val()+",";
             }
        // alert(councelingTopic);
         }
         else
             {
             councelingTopicData=councelingTopicData.replace($(this).attr('displayname'), "");
             councelingTopic=councelingTopic.replace($(this).val(), "");
             councelingTopic=councelingTopic.replace(",,", ",");
        //   alert(councelingTopic);
             }
         setCouncelingTopicPreview();
 }); */
 $('input[type=checkbox][name=haveAdharCardNumber]').change(function() {
     if ($(this).is(':checked')) {
         $('#adharCardDiv').css('display','block');
         $('#aadhaarStatusDiv').css('display','none');
         adharSatus=$('input[name="adharSatus"]:checked').val();
         hasAdhar=true;
     }else{
         $('#adharCardDiv').css('display','none');
         $('#aadhaarStatusDiv').css('display','block');
         $('[name=adharNo]').val('');
         adharSatus=0;
         hasAdhar=false;
     }
 });
     
     
     $('input[type=checkbox][name=referralServiceAndLinkage]').change(function() {
         var displayName= $(this).attr("displayName");
         if ($(this).is(':checked')) {
             if(referralServiceAndLinkage.length>0){
                 referralServiceAndLinkage=referralServiceAndLinkage+","+ $(this).val();
                 referralServiceAndLinkageDisplay=referralServiceAndLinkageDisplay+","+ displayName;
             }
             else{
                 referralServiceAndLinkage= $(this).val()+",";
                 referralServiceAndLinkageDisplay= displayName+",";
             }
        // alert(referralServiceAndLinkage);
         }
         else
             {
             referralServiceAndLinkage=referralServiceAndLinkage.replace($(this).val(), "");
             referralServiceAndLinkageDisplay=referralServiceAndLinkageDisplay.replace(displayName, "");
             }
         referralServiceAndLinkage=referralServiceAndLinkage.replace(",,", ",");
         referralServiceAndLinkageDisplay=referralServiceAndLinkageDisplay.replace(",,", ",");
         referralServiceAndLinkagePreview=referralServiceAndLinkage;
         });
     
     $("#priority_classification").change(function(){
         priority_classification= $(this).val();
         
         var selectedPriority=priority_classification;
             //getNumber(getNumber);
         $("[name=priority_classification1]").val(selectedPriority);
         $('input[type=radio][name=priorityName1]').each(function() {
            var flagChecked=new Boolean(true);
             if($(this).prop('value')==selectedPriority && flagChecked )
                { 
                
                flagChecked=false;
                $(this).prop("checked",true);
                }
            
         });
         $('input[type=radio][name=priorityName]').each(function() {
            var flagChecked=new Boolean(true);
               if(($(this).prop('value')).indexOf(selectedPriority)>=0 && flagChecked )
                { 
                flagChecked=false;
                $(this).prop("checked",true);
                }  
             
          });
         priority_classification=parseInt(priority_classification);
         setNextFollowUpDate();
        // alert( $(this).val());
     });
     $("#followUpPlaceType").change(function(){
         followUpPlaceType= $(this).val();
         $('#followUpPlaceType1').val(followUpPlaceType);
         
         if($('[name=followUpLocation]').val()!=""){
             var test=$('[name=followUpLocation]').val();
             $('#followUpPlaceType1').val(test);
         }
         followUpPlaceType=parseInt(followUpPlaceType);
        // alert( $(this).val());
     });
     
     $("#state").change(function(){
         state= $(this).val();
         $("#state1").val(state);
         state=parseInt(state);
        // alert( $(this).val());
         if($("[name=samePermanentAddress]").prop('checked') == true){
                
                $('#permanentState').val($(this).val());
                
            }
            
     });
     
     
     $("#deleteRow").click(function(){
         
             if($('input:checkbox:checked', '.detailsHouseHoldsMenbers').length==0){
                 alert("please select row to delete");
                 return false;
             }
         $('input:checkbox:checked', '.detailsHouseHoldsMenbers').each(function() {
                $(this).addClass("deletedRow");
            });
         $('input:checkbox','.detailsHouseHoldsMenbers').each(function() {
                if($(this).hasClass("deletedRow")){
                    $(this).parents("tr").remove();
                }  
            });
         
     });
     
     $("#addRow").click(function(){
            var dtlHm = $($(".detailsHouseHoldsMenbers tr:last td:first input")[0]).val();
            
            var validData=$(".detailsHouseHoldsMenbers tr:last td:eq(2) input").val();
            
            if(validData!=""){
            
            if(dtlHm == "undefined" || isNaN(dtlHm))
            {
                dtlHm=0;
            }
            dtlHm = parseInt(dtlHm) + 1;
            var rowNum = $(".detailsHouseHoldsMenbers tr:last").attr("rownumber");
            if(rowNum == "undefined" || isNaN(rowNum))
                {
                rowNum=0;
                }
            rowNum = parseInt(rowNum) +1;
            var html = "<tr rownumber="+rowNum+">"+
            "<td><input type='checkbox' class='checkBoxChecked exclude' style=' min-width: 16px;' value='"+dtlHm+"'    name='row"+dtlHm+"'  /></td>"+
            "<td><input type='text' class='exclude name' value='"+dtlHm+"'></td>"+
            "<td><input type='text' id='textOnly"+rowNum+"'  class='col1 ' onkeyup='onlyalpha(this.value,this.id)'   ></td>"+
            '<td>'+
            '<select class="col2">'+
            '<option>Y</option>'+
            '<option>N</option>'+
            '</select>'+
            '</td>'+
            '<td><input class="col3" onkeypress="return isNumberKey(event)" maxlength="2" type="text"></td>'+
            '<td>'+
            '<select class="col4" onchange="gender(this)" name="householdSex">'+
            '<option>Select</option>'+
            '<option>M</option>'+
            '<option>F</option>'+
            '<option>TG</option>'+
            '</select>'+
            '</td>'+
             '<td>'+
            '<select class="col5" name="householdRelation">'+
            '<option>Select</option>'+
            '<option>Mother</option>'+
             '<option>Father</option>'+
             '<option>Daughter</option>'+
             '<option>Son</option>'+
              '<option>Brother</option>'+
               '<option>Sister</option>'+ 
               '<option>Husband</option>'+
                '<option>Wife</option>'+
                 '<option>Mother-in-law</option>'+
                  '<option>Father-in-law</option>'+
                    '<option>Brother-in-law</option>'+
                        '<option>Sister-in-law</option>'+
                        '<option>Uncle</option>'+
                            '<option>Aunty</option>'+
            '</select>'+
            '</td>'+
            /* '<td><input class="col5" onkeypress="return onlyAlphabets(event,this)" type="text"></td>'+*/
            '<td>'+  
            '<select class="col6">'+
            '<option> No(ना) </option>'+
            '<option> Yes(हाँ) </option>'+
            
            '</select>'+
            '</td>'+
            '<td>'+
            '<select class="col7">'+
            '<option>Negative</option>'+
            '<option>Positive</option>'+
            
            '</select>'+
            '</td>'+
           /*  '<td>'+
            '<select class="col8">'+
            '<option>Yes</option>'+
            '<option>No</option>'+
            '</select>'+
            '</td><td><select class="col9"><option>Yes</option><option>No</option></select></td>'+ */
            '</tr>';
            $(".detailsHouseHoldsMenbers").append(html);
            
            }else{
                
                alert(" Enter Name of Households Member Name")
            }
            
     } );
     
     
     $(".namesText").keypress(function(event){
            var inputValue = event.charCode;
            if(!(inputValue >= 65 && inputValue <= 123) && (inputValue != 32 && inputValue != 0)){
                event.preventDefault();
            }
        });
     
     
     var houseHoldDtlsRecords =[];
    
     
     
         function  getHouseHolders(){ 
             houseHoldDtlsRecordArray=[];
             var rowCount=0;
        $('.detailsHouseHoldsMenbers tr').each(function() {
         if($(this).hasClass("tableHead")){
             housholdinnerDiv= " <tr class='tableHead'><td colspan='8'><h3 class='registration_form'>Details of Households members:</h3></td></tr>"+
             "<tr class='tableHead'>"+
             /* "<th width='10'></th>"+ */
             "<th width='50'>SNO</th>"+
             "<th  width='180'>Name of Households Members (presently residing with)</th>"+
             "<th  width='60'>Care Giver Y/N</th>"+
             "<th  width='80'>Age (Completed in Yrs.)</th>"+
             "<th  width='60'>Sex (M/F/TG)</th>"+
             "<th  width='100'>Relationship with Patient</th>"+
             "<th  width='150'>Did the Household member have any history of TB before the patient was diagnosed with TB</th>"+
             "<th  width='220'>Ever tested for TB, then what was the result (Positive/Negative) after patient got diagnosed with TB</th>"+
            /*  "<th>If tested Positive for TB, started with treatment (Yes/No)</th>"+
             "<th>If Symptomatic & not aware of his/her TB status, referred for Testing(yes/No)</th>"+ */
             "</tr>";
             
             
            return;
         }else{
             rowCount=rowCount+1;
            
             var houseHoldDtlsRecord1 = {
                     
                    name        : "",
                    careGiver   :"",
                    age         :"",
                    sex         : "",
                    relationShip:"",
                    hisOfTb     :"",
                    everTestedTbOutCome:""
                    
                }
             housholdinnerDiv=housholdinnerDiv+"<tr>";
             housholdinnerDiv=housholdinnerDiv+"<td><input type='text' value='"+rowCount+"'></td>";
            for(var i=1;i< 10;i++){
                
                if(i == 1){
                    var rowid = $(this).find(".col"+i).attr("rowid");
                    if(rowid)
                        {
                    
                        }
                    
                }
                
                if($(this).find(".col"+i).val()){
                    housholdinnerDiv=housholdinnerDiv+"<td><input type='text' value='"+$(this).find(".col"+i).val()+"'></td>";
                    if(i==1)
                      {
                        
                        houseHoldDtlsRecord1.name=$(this).find(".col"+i).val();
                      }
                    if(i==2)
                    {
                        
                        houseHoldDtlsRecord1.careGiver=$(this).find(".col"+i).val();
                    }
                    if(i==3)
                        {
                        houseHoldDtlsRecord1.age=$(this).find(".col"+i).val();
                        }
                    if(i==4)
                    {
                        houseHoldDtlsRecord1.sex=$(this).find(".col"+i).val();
                    }
                    
                    if(i==5)
                    {
                        houseHoldDtlsRecord1.relationShip=$(this).find(".col"+i).val();
                    }
                    if(i==6)
                    {
                        houseHoldDtlsRecord1.hisOfTb=$(this).find(".col"+i).val();
                    }
                    if(i==7)
                    {
                        houseHoldDtlsRecord1.everTestedTbOutCome=$(this).find(".col"+i).val();
                    }
 
                    
                } 
             
            
         }
            houseHoldDtlsRecordArray.push(houseHoldDtlsRecord1);
             housholdinnerDiv=housholdinnerDiv+"</tr>";
             console.log("housholdinnerDiv is "+housholdinnerDiv);
         }
     
    });
    if(rowCount>0){
      var myString1 = JSON.stringify(houseHoldDtlsRecordArray);
     houseHoldDtlsRecords=houseHoldDtlsRecordArray;
    return myString1
    }
    else
        {
        myString1=[];
        return "[]";
        }
         } 
     var referralServiceAndLinkageDisplayTemp="";
     var referralServiceAndLinkageTemp="";
         function referralServiceAndLinkageData()
         {
             referralServiceAndLinkagePreview=referralServiceAndLinkage;
             referralServiceAndLinkageDisplayTemp="";
             referralServiceAndLinkageTemp="";
             if(referralServiceAndLinkage.length>0)
                 {
                
                 var referralServiceAndLinkageArray=referralServiceAndLinkage.split(",");
                 var referralServiceAndLinkageDisplayTempArray=referralServiceAndLinkageDisplay.split(",");
                 for(var i=0;i<referralServiceAndLinkageArray.length;i++){
                     {
                         if(i==0){
                         referralServiceAndLinkageTemp=referralServiceAndLinkageArray[i]+"["+ $("#referralServiceAndLinkage"+referralServiceAndLinkageArray[i]).val()+"]";
                         referralServiceAndLinkageDisplayTemp=referralServiceAndLinkageDisplayTempArray[i]+"["+ $("#referralServiceAndLinkage"+referralServiceAndLinkageArray[i]).val()+"]";
                     }
                     else
                         {
                         referralServiceAndLinkageTemp=referralServiceAndLinkageTemp+","+referralServiceAndLinkageArray[i]+"["+ $("#referralServiceAndLinkage"+referralServiceAndLinkageArray[i]).val()+"]";
                         referralServiceAndLinkageDisplayTemp=referralServiceAndLinkageDisplayTemp+","+referralServiceAndLinkageDisplayTempArray[i]+"["+ $("#referralServiceAndLinkage"+referralServiceAndLinkageArray[i]).val()+"]";
                         }
                     }
                 
                 }
                 
                 }
         }
         
         
     $("#indexpreview").click(function(){
         patientListDTO=[];
        // mySetTimeOut();
         $('[name=occupation1]').html('');
         $('[name=unEmploymentCause1]').html('');
         
         if(hasHHM){
         getHouseHolders();
         }
         else
             {
             houseHoldDtlsRecords=[];
             }
         referralServiceAndLinkageData();
         refferal();
         setCouncelingTopicPreview();
         addTableRows();
         setValuesToPreview();
         
         
         /****************************************************************************************************************************************************/
    /*  $('[name=sakshamPatientId1]').val($('[name=sakshamPatientId]').val());
        
        $('[name=name1]').val($('[name=name]').val());
        $('[name=address1]').val($('[name=address]').val());
        $('[name=landmark1]').val($('[name=landmark]').val()); */
        
        
        
         
        //$('[name=state1]').val($('[name=state]').val());
        // $('[name=state1]').val(state);
    /*  $('[name=city1]').val($('[name=city]').val());
        $('[name=pin1]').val($('[name=pin]').val());
        
        $('[name=telephoneNo1]').val($('[name=telephoneNo]').val());
        $('[name=mobileNo1]').val($('[name=mobileNo]').val());
         
        $('[name=adharNo1]').val($('[name=adharNo]').val());
        
        $('[name=age1]').val($('[name=age]').val());
        
        
        $('[name=houseHoldMembers1]').val($('[name=houseHoldMembers]').val());
        
        $('[name=totalNumOfChildrensLessThanSixYears1]').val($('[name=totalNumOfChildrensLessThanSixYears]').val());
        $('[name=totalNumOfEarningMembers1]').val($('[name=totalNumOfEarningMembers]').val());
        
        $('[name=wardName1]').val($('[name=wardName]').val());
        $('[name=healthFaciityName1]').val($('[name=healthFaciityName]').val());
        $('[name=rmtcppmdtNo1]').val($('[name=rmtcppmdtNo]').val());
         
        $('[name=drtbDiagnosedDate1]').val($('[name=drtbDiagnosedDate]').val());
        $('[name=drtbTreatementStarted1]').val($('[name=drtbTreatementStarted]').val());
        $('[name=hivArtCenter1]').val($('[name=hivArtCenter]').val());
        $('[name=diabetesArtCenter1]').val($('[name=diabetesArtCenter]').val());
        $('[name=otherDiseaseCondition1]').val($('[name=otherDiseaseCondition]').val());
        $('[name=priorityReason1]').val($('[name=priorityReason]').val());
        $('[name=nextFollowUpDate1]').val($('[name=nextFollowUpDate]').val());
        $('[name=followUpLocation1]').val($('[name=followUpLocation]').val());
        $('[name=counselorRemarks1]').val($('[name=counselorRemarks]').val());
        $('[name=councelorName1]').val($('[name=councelorName]').val()); */
        
        
        
        
         /****************************************************************************************************************************************/

        // $('input[type=radio][name=priorityName1]').attr("checked", false);
         
                
         var patientInfo={
                
                    sakshamPatientId: $('[name=sakshamPatientId]').val(),
                    preSakshamPatientId:$('[name=sakshamPatientId]').val(),
                    isPresakham:isPresakham,
                    priorityName:$('#priority_classification :selected').val(),
                    consentForCouseling:consentForCouseling,
                    shareDetails:shareDetails,
                    contentToCareGivers:contentToCareGivers,
                    contentToReceiveSMS:contentToReceiveSMS,
                    name:$('[name=firstName]').val(),
                    fatherName:$('[name=fatherFirstName]').val(), 
                    //firstName:$('[name=firstName]').val(),
                    middleName:$('[name=middleName]').val(),
                    lastName:$('[name=lastName]').val(),
                    //fatherFirstName:$('[name=fatherFirstName]').val(),
                    fatherMiddleName:$('[name=fatherMiddleName]').val(),
                    fatherLastName:$('[name=fatherLastName]').val(),
                    districtCode:districtCode,
                    districtName:districtName,
                    blockTalukaTUName:$('[name=blockTalukaTUName]').val(),
                    mobileNo:$('[name=mobileNo]').val(),
                    telephoneNo:$('[name=telephoneNo]').val(),
                    presentStreetName:$('[name=presentStreetName]').val(),
                    presentLocation:$('[name=presentLocation]').val(),
                    presentLandmark:$('[name=presentLandmark]').val(),
                    presentCityTownVillage:$('[name=presentCityTownVillage]').val(),
                    presentPincode:$('[name=presentPincode]').val(),
                    presentState:$('#state option:selected').val(),
                    permanentStreetName:$('[name=permanentStreetName]').val(),
                    permanentLocation:$('[name=permanentLocation]').val(),
                    permanentLandmark:$('[name=permanentLandmark]').val(),
                    permanentCityTownVillage:$('[name=permanentCityTownVillage]').val(),
                    permanentPincode:$('[name=permanentPincode]').val(),
                    permanentState:$('#permanentState option:selected').val(),
                    patientDateOfBirth:$('[name=patientDateOfBirth]').val(),
                    sakhamRegistrationDate:$('[name=sakshamRegDate]').val(),
                    placeOfRegistration:placeOfRegistration,
                    religion:religion,
                    caste:caste,
                    hasAdhar:hasAdhar,
                    adharNo:$('[name=adharNo]').val(),
                    rationcardColor:rationcardColor,
                    healthCareProvider:healthCareProvider,
                    localityType:localityType,
                    age:$('[name=age]').val(),
                    gender:$('input[type=radio][name=gender]:checked').val(),
                    educationQualification:$('input[type=radio][name=educationQualification]:checked').val(),
                    workingStatus:workingStatus,
                    occupation:occupation,
                    unEmploymentCause:unEmploymentCause,
                    stayingWith:$('#stayingWith :selected').val(),
                    houseHoldMembers:$('[name=houseHoldMembers]').val(),
                    totalNumOfChildrensLessThanSixYears:$('[name=totalNumOfChildrensLessThanSixYears]').val(),
                    totalNumOfEarningMembers:$('[name=totalNumOfEarningMembers]').val(),
                    houseHoldIncomeRange:houseHoldIncomeRange,
                    marriageStatus:$('#marriageStatus :selected').val(),
                    livingLocalitySince:livingLocalitySince,
                    historySubstance:patientSubstance_arr.join(","),
                    otherHistoryPatientSubstance:$('[name=historyPatientSubstance_text]').val(),
                    visitedPlaceHome:visitedPlaceHome,
                    visitedPlaceWorkPlace:visitedPlaceWorkPlace,
                    reportedDRTBStatus :reportedDRTBStatus,
                    reportedTBType :reportedTBType,
                    reportedTBPhase :reportedTBPhase,
                    verifiedDRTBStatusWithCard :verifiedDRTBStatusWithCard,
                    verifiedPhaseWithCard  :verifiedPhaseWithCard,
                    verifiedTBTypeWithCard :verifiedTBTypeWithCard,
                /*  wardName:$('[name=wardName]').val(),
                    wardCode:"", */
                    healthFaciityName:$('[name=healthFaciityName]').val(),
                    rmtcppmdtNo:$('[name=rmtcppmdtNo]').val(),
                    drtbDiagnosedDate:$('[name=drtbDiagnosedDate]').val(),
                    drtbTreatementStarted:$('[name=drtbTreatementStarted]').val(),
                    historyOfTBTreatement:historyOfTBTreatement,
                    historyTBTreatmentCause:historyTBTreatmentCause,
                    hasDiabetes:hasDiabetes,
                    hasHIV:hasHIV,
                    hivArtCenter:$('[name=hivArtCenter]').val(),
                    diabetesArtCenter:$('[name=diabetesArtCenter]').val(),
                    councelingTopic:councelingTopic,
                    referralServiceAndLinkage:referralServiceAndLinkage_json,
                    priority_classification:$('#priority_classification :selected').val(),
                    priorityReason:$('[name=priorityReason]').val(),
                    nextFollowUpDate:$('[name=nextFollowUpDate]').val(),
                    followUpPlaceType:followUpPlaceType,
                    followUpLocation:$('[name=followUpLocation]').val(),
                    counselorRemarks:$('[name=counselorRemarks]').val(),
                    councelorName:$('[name=councelorName]').val(),
                    counselor:CURRENTUSER.ID,
                    houseHoldDtlsRecords:houseHoldDtlsRecords,
                    otherReligion:$('[name=patient_religion_text]').val(),
                    otherCaste:$('[name=patient_caste_text]').val(),
                    otherHealthCareProvider:$('[name=firstHealthCareProviderContact]').val(),
                    otherLocalityType:$('[name=localityType_text]').val(),
                    otherEducationQualification:$('[name=educationQualification_text]').val(),
                    otherOccupation:$('[name=occupation_text]').val(),
                    otherPatientCouncelingTopics:$('[name=councelingTopic_text]').val(),
                    otherReferAndLinkage:$('#referralServiceAndLinkage13').val(),
                    otherPlaceOfRegistration: $('[name=reg_place_text]').val(),
                    adharSatus:$('input[name="adharSatus"]:checked').val(),
                    otherUnemployemnetCause:$('[name=unEmploymentCauseText]').val(),
                    rmtcpregDate:$('#rntcpRegDate').val(),
                    otherDiseaseCondition:$('[name=otherDiseaseCondition]').val(),
                    otherRationCardType:$('[name=otherRationCardTypeText]').val(),
                    organEffected:$('[name=organEffected]').val(),
                    hivPositiveStatusOfTreatment:$('#hivArt option:selected').attr('displayName')
                    }
         ////debugger
         patientListDTO.push(patientInfo);
        //console.log("json data for patient registration"+ JSON.stringify(patientListDTO));
        
        
        if($('[name=followUpLocation]').val()!=""){
             var test=$('[name=followUpLocation]').val();
             $('[name=followUpPlaceType1]').html(test);
         }
     });
     
     /* 
     $('input[type=checkbox][name=referralServiceAndLinkage]').change(function(){
         if ($(this).is(':checked')) {
             var temp1=$(this).attr('displayname');
             var tempValue=$(this).val();
             var tempData = 'referralServiceAndLinkage'+tempValue;
             var textBoxData=$('#'+tempData).val();
             referralServiceAndLinkageDataSource+=temp1+"-"+textBoxData;
             
         }else{
             var tempValue=$(this).val();
             var tempData = 'referralServiceAndLinkage'+tempValue;
             var textBoxData=$('#'+tempData).val();
             referralServiceAndLinkageDataSource=referralServiceAndLinkageDataSource.replace($(this).attr('displayname'), " ");
             referralServiceAndLinkageDataSource=referralServiceAndLinkageDataSource.replace(textBoxData," ");
         }
         
         
     });
          */
          
     if($('[name=followUpLocation]').val()!=""){
         var test=$('[name=followUpLocation]').val();
         $('#followUpPlaceType1').val(test);
     }
          
          
          var referralServiceAndLinkage_arr_preview=[];
          var referralServiceAndLinkage_arr_json=[];
          var referralServiceAndLinkage_json="";
          
        function refferal(){
            referralServiceAndLinkage_json="";
            referralServiceAndLinkage_arr_json.length=0;
            referralServiceAndLinkage_arr_preview.length=0;
            $('input[type=checkbox][name=referralServiceAndLinkage]:checked').each(function() {
                //referralServiceAndLinkage_arr.push($(this).attr('displayname'));
                var test=$(this).val();
                var id="referralServiceAndLinkage"+test
                referralServiceAndLinkage_arr_preview.push($(this).attr('displayname')+"["+$('#'+id).val()+"]");
                referralServiceAndLinkage_arr_json.push(test+"["+$('#'+id).val()+"]");
                }); 
            
            referralServiceAndLinkage_json=referralServiceAndLinkage_arr_json.join(",");
          }  
          
          
        var patientSubstance_arr=[];
        var  patientSubstance_json=[];  
          
     function setValuesToPreview(){
         refferal();
    
         patientSubstance_arr=[];
           patientSubstance_json=[];
         $('input[type=checkbox][name=historyPatientSubstance]:checked').each(function() {
              if($(this).val()!="8"){
             patientSubstance_arr.push($(this).attr('displayname'));
             patientSubstance_json.push($(this).val());
             }
                });
         var counselling_arr=[]
         $('input[type=checkbox][name=councelingTopic]:checked').each(function() {
             
             counselling_arr.push($(this).attr('displayname'));
            
                });
         if($('[name=councelingTopic_text]').val()!=""){
             counselling_arr.pop();
             counselling_arr.push($('[name=councelingTopic_text]').val());
         }
         
         var referralServiceAndLinkage_arr=[];
         $('input[type=checkbox][name=referralServiceAndLinkage]:checked').each(function() {
             
             referralServiceAndLinkage_arr.push($(this).attr('displayname'));
            
                });
         if($('#referralServiceAndLinkage13').val()!=""){
             referralServiceAndLinkage_arr.pop();
             referralServiceAndLinkage_arr.push($('#referralServiceAndLinkage13').val());
         }
         
         
         
         $('[name=sakshamPatientId1]').html($('[name=sakshamPatientId]').val());
        // $('[name=priorityName1]').html($('input[type=radio][name=priorityName]:checked').val());
         
         $('[name=firstName1]').html($('[name=firstName]').val());
         $('[name=lastName1]').html($('[name=lastName]').val());
         $('[name=middleName1]').html($('[name=middleName]').val());
         $('[name=fatherFirstName1]').html($('[name=fatherFirstName]').val());
         $('[name=fatherMiddleName1]').html($('[name=fatherMiddleName]').val());
         $('[name=fatherLastName1]').html($('[name=fatherLastName]').val());
         //$('[name=name1]').html($('[name=name]').val());
         //$('[name=fatherName1]').html($('[name=fatherName]').val());
         $('[name=districtNameAndCode1]').html($('[name=districtCode]').val());
         $('[name=blockTalukaTUName1]').html($('[name=blockTalukaTUName]').val());
         $('[name=mobileNo1]').html($('[name=mobileNo]').val());
         $('[name=telephoneNo1]').html($('[name=telephoneNo]').val());
         $('[name=presentAddress1]').html($('[name=presentStreetName]').val()+','+$('[name=presentLocation]').val()+','+$('[name=presentCityTownVillage]').val()+','+$('[name=presentLandmark]').val()+','+$('[name=presentPincode]').val()+','+$('#state option:selected').attr('displayName'));   
         $('[name=permanentAddress1]').html($('[name=permanentStreetName]').val()+','+$('[name=permanentLocation]').val()+','+$('[name=permanentCityTownVillage]').val()+','+$('[name=permanentLandmark]').val()+','+$('[name=permanentPincode]').val()+','+$('#permanentState option:selected').attr('displayName'));
         $('[name=sakhamRegistrationDate1]').html($('[name=sakshamRegDate]').val());
         $('[name=placeOfRegistration1]').html($('[name=reg_place_text]').val()!=""?$('[name=reg_place_text]').val():$('input[name=reg_place]:checked').attr('displayName'));
         $('[name=patientDateOfBirth1]').html($('[name=patientDateOfBirth]').val());
         $('[name=religion1]').html(($('[name=patient_religion_text]').val()!=""?$('[name=patient_religion_text]').val():$('input[type=radio][name=patient_religion]:checked').attr('displayname')));
         $('[name=caste1]').html( (($('[name=patient_caste_text]').val()!="")?$('[name=patient_caste_text]').val():$('input[type=radio][name=patient_caste]:checked').attr('displayname') ));
         $('[name=adharNo1]').html($('[name=adharNo]').val());
         $('[name=rationcardColor1]').html($('[name=otherRationCardTypeText]').val()!=""?$('[name=otherRationCardTypeText]').val():$('input[type=radio][name=rationcardColor]:checked').attr('displayname'));
         $('[name=healthCareProvider1]').html($('[name=firstHealthCareProviderContact]').val());
         $('[name=otherHealthCareProvider1]').html($('[name=firstHealthCareProviderContact]').val()!=""?$('[name=firstHealthCareProviderContact]').val():$('input[type=radio][name=healthCareProvider]:checked').attr('displayname'));
         $('[name=localityType1]').html($('[name=localityType_text]').val()!=""?$('[name=localityType_text]').val():$('input[type=radio][name=localityType]:checked').attr('displayname'));
         $('[name=age1]').html($('[name=age]').val());
         $('[name=gender1]').html($('input[type=radio][name=gender]:checked').attr('displayname'));
         $('[name=educationQualification1]').html($('[name=educationQualification_text]').val()!=""?$('[name=educationQualification_text]').val():$('input[type=radio][name=educationQualification]:checked').attr('displayname'));
         $('[name=workingStatus1]').html($('input[name="workingStatus"]:checked').val());
         $('[name=occupation1]').html($('[name=occupation_text]').val()!=""?$('[name=occupation_text]').val():$('input[type=radio][name=occupation]:checked').attr('displayname'));
         $('[name=workingStatus1]').html($('input[type=radio][name=workingStatus]:checked').attr('displayname'));
         $('[name=unEmploymentCause1]').html($('[name=unEmploymentCauseText]').val()!=""?$('[name=unEmploymentCauseText]').val():$('input[type=radio][name=unEmploymentCause]:checked').attr('displayname'));
         $('[name=stayingWith1]').html($('#stayingWith :selected').attr('displayname'));
         $('[name=houseHoldMembers1]').html($('[name=houseHoldMembers]').val());
         $('[name=totalNumOfChildrensLessThanSixYears1]').html($('[name=totalNumOfChildrensLessThanSixYears]').val());
         $('[name=totalNumOfEarningMembers1]').html($('[name=totalNumOfEarningMembers]').val());
         $('[name=houseHoldIncomeRange1]').html($('#houseHoldIncomeRange :selected').attr('displayname'));
         $('[name=marriageStatus1]').html($('#marriageStatus :selected').attr('displayname'));
         $('[name=livingLocalitySince1]').html($('#livingLocalitySince :selected').attr('displayname'));
         $('[name=historySubstance1]').html(patientSubstance_arr.join(","));
         $('#otherHistoryPatientSubstance1').html($('[name=historyPatientSubstance_text]').val()),
         $('[name=visitedPlaceHome1]').html($('input[type=radio][name=visitedPlaceHome]:checked').attr('displayname'));
         $('[name=visitedPlaceWorkPlace1]').html($('input[type=radio][name=visitedPlaceWorkPlace]:checked').attr('displayname'));
         
    /*   $('[name=wardNameAndCode]').html($('[name=wardName]').val()); */
         $('[name=healthFacilityName1]').html( $('[name=healthFaciityName]').val());
         $('[name=rmtcppmdtNo1]').html( $('[name=rmtcppmdtNo]').val());
         $('[name=drtbDiagnosedDate1]').html(  $('[name=drtbDiagnosedDate]').val());
         $('[name=drtbTreatementStarted1]').html(  $('[name=drtbTreatementStarted]').val());
         $('[name=hasHIV1]').html($('input[type=radio][name=hasHIV]:checked').attr('displayname'));
         $('[name=hasDiabetes1]').html($('input[type=radio][name=hasDiabetes]:checked').attr('displayname'));
         $('[name=counselorRemarks1]').html($('[name=counselorRemarks]').val());
         $('[name=councelorName1]').html($('[name=councelorName1]').val());
         $('[name=historyOfTBTreatement1]').html($('input[type=radio][name=historyOfTBTreatement]:checked').attr('displayname'));
         $('[name=councelingTopic2]').html(counselling_arr.join(","));
         $('[name=historyOfTBTreatementIfYes]').html($('#historyTBTreatmentCause option:selected').attr('displayName'));
         $('[name=otherDiseaseCondition1]').html($('[name=otherDiseaseCondition]').val());
         $('[name=ifHIVPositive]').html($('#hivArt option:selected').attr('displayName'));
         $('[name=referaralServices1]').html(referralServiceAndLinkage_arr_preview.join(","));
         $('[name=priority_classification1]').html($('#priority_classification :selected').attr('displayname'));
         $('[name=priorityReason1]').html($('[name=priorityReason]').val());
         $('[name=nextFollowUpDate1]').html($('[name=nextFollowUpDate]').val());
         $('[name=followUpPlaceType1]').html($('#followUpPlaceType :selected').attr('displayname'));
         $('[name=counselorRemarks1]').html($('[name=counselorRemarks]').val());
         $('[name=councelorName1]').html($('[name=councelorName]').val());
         $('[name=patient_religion_text1]').html($('[name=patient_religion_text]').val());
         $('[name=otherCaste1]').html($('[name=patient_caste_text]').val());
         
         $('[name=healthCareProvider_text1]').html($('[name=firstHealthCareProviderContact]').val());
         $('[name=localityType_text1]').html($('[name=localityType_text]').val());
         $('[name=educationQualification_text1]').html($('[name=educationQualification_text]').val());
         $('[name=occupation_text1]').html($('[name=occupation_text]').val());
         $('[name=councelingTopic_text1]').html($('[name=councelingTopic_text]').val());
         $('#referralServiceAndLinkage131').html($('[name=councelingTopic_text]').val());
         $('[name=reg_place_text1]').html($('[name=reg_place_text]').val());
         $('[name=counselor1]').html(CURRENTUSER.CODE);
         $('[name=shareDetails1]').html(displayName2);      
         $('[name=rntcpRegDate1]').html($('#rntcpRegDate').val());      
        $('[name=consentForCouseling1]').html(displayName1);         
        $('[name=contentToCareGivers1]').html(displayName3);
        $('[name=contentToReceiveSMS1]').html(displayName4);
        $('[name=adharSatus1]').html($('input[name="adharSatus"]:checked').attr('displayname'));
          $('#diabetesArt1').html($('[name=diabetesArtCenter]').val());
         
          $('[name=organEffected1]').html($('[name=organEffected]').val());
          
     }
          
     
          
          $('input[type=checkbox][name=samePermanentAddress]').change(function(){
                 if ($(this).is(':checked')) {
                     
                     $('[name=permanentStreetName]').val($('[name=presentStreetName]').val());
                     $('input[name=permanentStreetName]').attr('readonly', true);       
                 
                     $('[name=permanentLocation]').val($('[name=presentLocation]').val());
                     $('input[name=permanentLocation]').attr('readonly', true);
                     
                     $('[name=permanentLandmark]').val($('[name=presentLandmark]').val());
                     $('input[name=permanentLandmark]').attr('readonly', true);
                     
                     $('[name=permanentCityTownVillage]').val($('[name=presentCityTownVillage]').val());
                     $('input[name=permanentCityTownVillage]').attr('readonly', true);
                     
                     $('[name=permanentPincode]').val($('[name=presentPincode]').val());
                     $('input[name=permanentPincode]').attr('readonly', true);
                     
                      testState= $('#state :selected').val();
                     
                     $('#permanentState').val(testState);
                     $('#permanentState').attr("disabled", true);
                 
                 }else{
                     $('#permanentState').val(0);
                     $('[name=permanentStreetName]').val('');
                     $('input[name=permanentStreetName]').attr('readonly', false);      
                 
                     $('[name=permanentLocation]').val('');
                     $('input[name=permanentLocation]').attr('readonly', false);
                     
                     $('[name=permanentLandmark]').val('');
                     $('input[name=permanentLandmark]').attr('readonly', false);
                     
                     $('[name=permanentCityTownVillage]').val('');
                     $('input[name=permanentCityTownVillage]').attr('readonly', false);
                     
                     $('[name=permanentPincode]').val('');
                     $('input[name=permanentPincode]').attr('readonly', false);
                     
                     $('#permanentState').attr("disabled", false);
                 }
                 
          })
          
     
      
          
     $('input[type=radio][name=patient_caste]').change(function() {
         //    alert(this.value);
             caste=this.value;
             caste=parseInt(caste);
             
             if($('input[name="patient_caste"]:checked').val()=="5"){
                 $('[name=patient_caste_text]').css("display", "block");
             }else{
                 $('[name=patient_caste_text]').css("display", "none");
                 $('[name=patient_caste_text]').val('');
             }
             
             
     });
          
    
          
    $('[name=patientDateOfBirth]').change(function(){
        
        var testDOB = $('[name=patientDateOfBirth]').val();
        var testDOB1 = testDOB.split('/');
        $('[name=age]').val(new Date().getFullYear()-testDOB1[2])
        
        /* var todayTime = new Date();  
        var month = todayTime .getMonth() + 1;   
        var day = todayTime .getDate();   
        var year = todayTime .getFullYear(); 
        var present=day  + "/" +month  + "/" + year;
        
        if(testDOB>=present){
            alert("Patient's Date of Birth is having future date ")
            var testDOB = $('[name=patientDateOfBirth]').val('');
            $('[name=age]').val(0)
        } */
        
        
    })    
          
          
     
     
     $(".name").keypress(function(event){
            var inputValue = event.charCode;
            if(!(inputValue >= 65 && inputValue <= 123) && (inputValue != 32 && inputValue != 0)){
                event.preventDefault();
            }
        });
    

          
  });
            
            
            
            $('.text').change(function(){
                
                if($("[name=samePermanentAddress]").prop('checked') == true){
                    
                     testState= $('#state :selected').val();
                     
                     $('#permanentState').val(testState);
                    
                    
                    $('[name=permanentStreetName]').val($('[name=presentStreetName]').val());
                     $('input[name=permanentStreetName]').attr('readonly', true);       
                 
                     $('[name=permanentLocation]').val($('[name=presentLocation]').val());
                     $('input[name=permanentLocation]').attr('readonly', true);
                     
                     $('[name=permanentLandmark]').val($('[name=presentLandmark]').val());
                     $('input[name=permanentLandmark]').attr('readonly', true);
                     
                     $('[name=permanentCityTownVillage]').val($('[name=presentCityTownVillage]').val());
                     $('input[name=permanentCityTownVillage]').attr('readonly', true);
                     
                     $('[name=permanentPincode]').val($('[name=presentPincode]').val());
                     $('input[name=permanentPincode]').attr('readonly', true);
                    
                }
                
                
            })
            
            
 
            
    function onlyAlphabets(e, t) {
      try {
          if (window.event) {
              var charCode = window.event.keyCode;
          }
          else if (e) {
              var charCode = e.which;
          }
          else { return true; }
          if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
              return true;
          else
              return false;
      }
      catch (err) {
          console.log(err.Description);
      }
  } 
    
    
    $('#stayingWith').change(function(){
        
        
        if($('#stayingWith :selected').val()=="1"){
            $('#aloneDIv').hide();
            $('[name=houseHoldMembers]').val(0);
            $('[name=totalNumOfChildrensLessThanSixYears]').val(0);
            $('[name=totalNumOfEarningMembers]').val(0);
        }else{
            $('#aloneDIv').show();
            $('[name=houseHoldMembers]').val('');
            $('[name=totalNumOfChildrensLessThanSixYears]').val('');
            $('[name=totalNumOfEarningMembers]').val('');
        }
        
    })
    
/*  function mySetTimeOut(){
        
         myVar = setTimeout(function(){ 
             window.location.href ="../home.htm?actionName=signout";
             window.reload();
         
         }, 1800000);
    }       
            
    function myStopFunction() {
        clearTimeout(myVar);
    } */
    
/*  $('#closePopup').click(function(){
        myStopFunction()
        
    }) */
    
    function checkPreview(){
        
        var validArr=[];
        validArr.length=0;
        if($('#priority_classification :selected').val()=="0"){
            validArr.push(" priority ")
        }
        if($('#followUpPlaceType :selected').val()=="0"){
            validArr.push(" next follow up place ")
        }
        if($('#followUpPlaceType :selected').val()=="4"){
            if($('[name=followUpLocation]').val()==""){
                validArr.push(" other place of visit ")
            }
            
        }
        if($('[name=nextFollowUpDate]').val()==""){
            validArr.push(" Next follow-up date ")
        }
        
        if(validArr.length==0){
            $('#indexpreview').click();
        }else{
            alert("enter the "+validArr.join(","))
        }
        
        
    }
    
    
    $('[name=historyPatientSubstance]').change(function(){
        $('[name=historyPatientSubstance]').each(function(){
                if($(this).is(':checked')){
                if($(this).val()=="7"){
                $('.historyPatientSubstance').removeAttr('checked');
                $("input[type=checkbox][name=historyPatientSubstance][value=7]").prop("checked",true);
                $('[name=historyPatientSubstance_text]').hide();
                $('[name=historyPatientSubstance_text]').val('');
                }
                }
            })
                
    })
    
    function alert(dataAlert,title){
        
        title=((title!=undefined)?title:"Alert...!!!")  
        $.alert({
          //  title: 'Please enter the following !',
          title:title,  
          content: dataAlert,
        });
        
    }
    

     $('input[type=radio][name=unEmploymentCause]').change(function() {
    
         
         if($('input[name="unEmploymentCause"]:checked').val()=="7"){
             
             $('[name="unEmploymentCauseText"]').show();
         }else{
             $('[name="unEmploymentCauseText"]').hide();
             $('[name="unEmploymentCauseText"]').val('');
         }
         
         
     })
     
     $('[name=totalNumOfChildrensLessThanSixYears]').change(function(){
         
         var temp=parseInt($('[name=houseHoldMembers]').val());
         if(isNaN(temp)){
             $('[name=totalNumOfChildrensLessThanSixYears]').val(0)
             alert('Please enter total no of Households members first')
         }
        var temp1= parseInt($('[name=totalNumOfChildrensLessThanSixYears]').val());
        temp1=temp1>temp?temp:temp1;
        $('[name=totalNumOfChildrensLessThanSixYears]').val(temp1)
     })
     

       $('#followUpPlaceType').change(function(){
           if($('#followUpPlaceType :checked').val()=="4"){
                 
                 $('#followUpLocationDiv').show();
             }else{
                 $('#followUpLocationDiv').hide();
                 $('[name=followUpLocation]').val('');
             }
           
       })
    
        function onlyText(event){
            var inputValue = event.charCode;
            if(!(inputValue >= 65 && inputValue <= 123) && (inputValue != 32 && inputValue != 0)){
                event.preventDefault();
              
            }   
           
        }

     
            function  gender(value){
                
                if(value.value=="F"){
                    var options='<select class="col5" name="householdRelation"><option>Mother</option><option>Daughter</option><option>Sister</option><option>Wife</option><option>Mother-in-law</option><option>Sister-in-law</option><option>Aunty</option><option>Grand Mother</option><option>Grand Daughter</option><option>Niece</option></select>';
                    value.parentElement.nextElementSibling.firstElementChild.innerHTML="";
                    value.parentElement.nextElementSibling.firstElementChild.innerHTML=options;
                }else if(value.value=="M"){
                    var options='<select class="col5" name="householdRelation"><option>Father</option><option>Son</option><option>Brother</option><option>Husband</option><option>Father-in-law</option><option>Brother-in-law</option><option>Uncle</option><option>Grand Father</option><option>Grand Son</option><option>Nephew</option></select>';
                    value.parentElement.nextElementSibling.firstElementChild.innerHTML="";
                    value.parentElement.nextElementSibling.firstElementChild.innerHTML=options;
                } if(value.value=="TG"){
                    var options='<select class="col5" name="householdRelation"><option>Mother</option><option>Father</option><option>Daughter</option><option>Son</option><option>Brother</option><option>Sister</option><option>Husband</option><option>Wife</option><option>Mother-in-law</option><option>Father-in-law</option><option>Brother-in-law</option><option>Sister-in-law</option><option>Uncle</option><option>Aunty</option><option>Grand Mother</option><option>Grand Daughter</option><option>Niece</option><option>Grand Father</option><option>Grand Son</option><option>Nephew</option></select>';
                    value.parentElement.nextElementSibling.firstElementChild.innerHTML="";
                    value.parentElement.nextElementSibling.firstElementChild.innerHTML=options;
                }
                
            }
            
          
            function  onlyalpha(value,id){
            
                
                var textValue=value;
                value=value.charAt(value.length-1)
                if(value.trim()==""){
                    this.value=textValue
                }
                else if(isNaN(value)){
                    this.value=textValue
                }else{
                    this.value=textValue.replace(textValue.slice(textValue.length-1),'')
                }
                $('#'+id).val(this.value)
            }
            
        
            $('.noSpecialChar').keyup( function() {
                  $(this).val($(this).val().replace(/[^a-z0-9]/gi, ''));
                });
  </script>
</html>
