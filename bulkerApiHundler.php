<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>School</title>

<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-social.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<?php require 'bootstrap/js/bootstrap.min.js.php'?>
<link rel="stylesheet" href="css/fileinput.min.css">
<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
</head>
<body>

<?php
 include 'schoolClass.php';
 $objSchool = new schoolClass();
 switch (@$_GET['action']) {
   
    case 'sendAnsms':
    $studentData  = $objSchool->selectAllInformationRelatedToTheStudent(@$_GET['studentId']);
    $studentInfo  = $objSchool->selectAllStudentInformation(@$_GET['studentId']);
    $parentInfo   = $objSchool->selectAllInformationRelatedParentOfStudent(@$_GET['studentId']);
    $totalPercentage  = 0;$numberOfContent  = 0;$totalMarks =0;
    $studentNames  = $studentInfo[0]['firstname']." ".$studentInfo[0]['lastname'];
    foreach ($studentData as $key => $value) { $numberOfContent  +=1; $totalMarks += $studentData[$key]['total_marks']; $totalPercentage  = $totalMarks  / $numberOfContent;
    }$guardianPhone  = $parentInfo[0]['emergency'];
    $message= "Muraho ba byeyi dufatanije kurera kukigo cya ESTG,twabamenyeshaga ko umwana wawe ".$studentNames." wiga muri ".$studentInfo[0]['level3']." ".$studentInfo[0]['department']." mugihembwe cya mbere yagize amanota : ".$totalPercentage."%";if(sendBulker($guardianPhone,$message) === "dispatched"){ header("location:viewreportl3sod_first_term.php?status=dispatched");}else{ echo "Opps try  Again! contact Developer";}
    break; 



    case 'sendAnsmsSodSecondTerm':
    $studentData  = $objSchool->selectAllInformationRelatedToTheStudentSecondTerm(@$_GET['studentId']);
    $studentInfo  = $objSchool->selectAllStudentInformation(@$_GET['studentId']);
    $parentInfo   = $objSchool->selectAllInformationRelatedParentOfStudent(@$_GET['studentId']);
    $totalPercentage  = 0;$numberOfContent  = 0;$totalMarks =0;
    $studentNames  = $studentInfo[0]['firstname']." ".$studentInfo[0]['lastname'];
    foreach ($studentData as $key => $value) { $numberOfContent  +=1; $totalMarks += $studentData[$key]['total_marks']; $totalPercentage  = $totalMarks  / $numberOfContent;
    }$guardianPhone  = $parentInfo[0]['emergency'];$message= "Muraho ba byeyi dufatanije kurera kukigo cya ESTG,twabamenyeshaga ko umwana wawe ".$studentNames." wiga muri ".$studentInfo[0]['level3']." ".$studentInfo[0]['department']." mugihembwe cya Kabiri yagize amanota : ".$totalPercentage."%";if(sendBulkerTwo($guardianPhone,$message) === "dispatched"){ header("location:viewreportl3sod_second_term.php?status=dispatched");}else{ echo "Opps try  Again! contact Developer";}

    break; 


    case 'sendAnsmsSodThirdTerm':
    $studentData  = $objSchool->selectAllInformationRelatedToTheStudentThirdTerm(@$_GET['studentId']);
    $studentInfo  = $objSchool->selectAllStudentInformation(@$_GET['studentId']);
    $parentInfo   = $objSchool->selectAllInformationRelatedParentOfStudent(@$_GET['studentId']);
    $totalPercentage  = 0;$numberOfContent  = 0;$totalMarks =0;
    $studentNames  = $studentInfo[0]['firstname']." ".$studentInfo[0]['lastname'];
    foreach ($studentData as $key => $value) { $numberOfContent  +=1; $totalMarks += $studentData[$key]['total_marks']; $totalPercentage  = $totalMarks  / $numberOfContent;
    }$guardianPhone  = $parentInfo[0]['emergency'];$message= "Muraho ba byeyi dufatanije kurera kukigo cya ESTG,twabamenyeshaga ko umwana wawe ".$studentNames." wiga muri ".$studentInfo[0]['level3']." ".$studentInfo[0]['department']." mugihembwe cya gatatu yagize amanota : ".$totalPercentage."%";if(sendBulkerThree($guardianPhone,$message) === "dispatched"){ header("location:viewreportl3sod_third_term.php?status=dispatched");}else{ echo "Opps try  Again! contact Developer";}

    break; 


    case 'sendBulkerSODLV4SM1':

      $studentData  = $objSchool->selectAllInformationRelatedToTheStudentSODLV4SM1(@$_GET['studentId']);
      $studentInfo  = $objSchool->selectAllStudentInformation(@$_GET['studentId']);
      $parentInfo   = $objSchool->selectAllInformationRelatedParentOfStudent(@$_GET['studentId']);
      

      $totalPercentage  = 0;$numberOfContent  = 0;$totalMarks =0;
      $studentNames  = $studentInfo[0]['firstname']." ".$studentInfo[0]['lastname'];
      foreach ($studentData as $key => $value) { $numberOfContent  +=1; $totalMarks += $studentData[$key]['total_marks']; $totalPercentage  = $totalMarks  / $numberOfContent;
      }$message= "Muraho ba byeyi dufatanije kurera kukigo cya ESTG,twabamenyeshaga ko umwana wawe ".$studentNames." wiga muri ".$studentInfo[0]['level4']." ".$studentInfo[0]['department']." mugihembwe cya mbere yagize amanota : ".$totalPercentage."%";      
      
      if(sendBulkerSODLV4SM1($parentInfo[0]['emergency'],$message) === "dispatched"){ header("location:viewreportl4sod_first_term.php?status=dispatched");}else{ echo "Ooops try  Again! contact Developer";}
      
    break;


    case 'sendBulkerSODLV4SM2':

      $studentData  = $objSchool->selectAllInformationRelatedToTheStudentSODLV4SM2(@$_GET['studentId']);
      $studentInfo  = $objSchool->selectAllStudentInformation(@$_GET['studentId']);
      $parentInfo   = $objSchool->selectAllInformationRelatedParentOfStudent(@$_GET['studentId']);
      

      $totalPercentage  = 0;$numberOfContent  = 0;$totalMarks =0;
      $studentNames  = $studentInfo[0]['firstname']." ".$studentInfo[0]['lastname'];
      foreach ($studentData as $key => $value) { $numberOfContent  +=1; $totalMarks += $studentData[$key]['total_marks']; $totalPercentage  = $totalMarks  / $numberOfContent;
      }$message= "Muraho ba byeyi dufatanije kurera kukigo cya ESTG,twabamenyeshaga ko umwana wawe ".$studentNames." wiga muri ".$studentInfo[0]['level4']." ".$studentInfo[0]['department']." mugihembwe cya kabiri yagize amanota : ".$totalPercentage."%";      

      if(sendBulkerSODLV4SM2($parentInfo[0]['emergency'],$message) === "dispatched"){ header("location:viewreportl4sod_second_term.php?status=dispatched");}else{ echo "Ooops try  Again! contact Developer";}
      
    break;


    case 'sendBulkerSODLV4SM3':

      $studentData  = $objSchool->selectAllInformationRelatedToTheStudentSODLV4SM3(@$_GET['studentId']);
      $studentInfo  = $objSchool->selectAllStudentInformation(@$_GET['studentId']);
      $parentInfo   = $objSchool->selectAllInformationRelatedParentOfStudent(@$_GET['studentId']);
      

      $totalPercentage  = 0;$numberOfContent  = 0;$totalMarks =0;
      $studentNames  = $studentInfo[0]['firstname']." ".$studentInfo[0]['lastname'];
      foreach ($studentData as $key => $value) { $numberOfContent  +=1; $totalMarks += $studentData[$key]['total_marks']; $totalPercentage  = $totalMarks  / $numberOfContent;
      }$message= "Muraho ba byeyi dufatanije kurera kukigo cya ESTG,twabamenyeshaga ko umwana wawe ".$studentNames." wiga muri ".$studentInfo[0]['level4']." ".$studentInfo[0]['department']." mugihembwe cya gatatu yagize amanota : ".$totalPercentage."%";      

      if(sendBulkerSODLV4SM3($parentInfo[0]['emergency'],$message) === "dispatched"){ header("location:viewreportl4sod_second_term.php?status=dispatched");}else{ echo "Ooops try  Again! contact Developer";}
      
    break;


   //  Awesome Chnage

    case 'sendBulkerSODLV5SM1':

      $studentData  = $objSchool->selectAllInformationRelatedToTheStudentSM1(@$_GET['studentId']);
      $studentInfo  = $objSchool->selectAllStudentInformation(@$_GET['studentId']);
      $parentInfo   = $objSchool->selectAllInformationRelatedParentOfStudent(@$_GET['studentId']);
      

      $totalPercentage  = 0;$numberOfContent  = 0;$totalMarks =0;
      $studentNames  = $studentInfo[0]['firstname']." ".$studentInfo[0]['lastname'];
      foreach ($studentData as $key => $value) { $numberOfContent  +=1; $totalMarks += $studentData[$key]['total_marks']; $totalPercentage  = $totalMarks  / $numberOfContent;
      }$message= "Muraho ba byeyi dufatanije kurera kukigo cya ESTG,twabamenyeshaga ko umwana wawe ".$studentNames." wiga muri ".$studentInfo[0]['level5']." ".$studentInfo[0]['department']." mugihembwe cya mbere yagize amanota : ".$totalPercentage."%";      

      if(sendBulkerMessage($parentInfo[0]['emergency'],$message) === "dispatched"){ header("location:viewreportl5sod_first_term.php?status=dispatched");}else{ echo "Ooops try  Again! contact Developer";}
      
      
    break;


    case 'sendBulkerSODLV5SM2':

      $studentData  = $objSchool->selectAllInformationRelatedToTheStudentSM2(@$_GET['studentId']);
      $studentInfo  = $objSchool->selectAllStudentInformation(@$_GET['studentId']);
      $parentInfo   = $objSchool->selectAllInformationRelatedParentOfStudent(@$_GET['studentId']);
      

      $totalPercentage  = 0;$numberOfContent  = 0;$totalMarks =0;
      $studentNames  = $studentInfo[0]['firstname']." ".$studentInfo[0]['lastname'];
      foreach ($studentData as $key => $value) { $numberOfContent  +=1; $totalMarks += $studentData[$key]['total_marks']; $totalPercentage  = $totalMarks  / $numberOfContent;
      }$message= "Muraho ba byeyi dufatanije kurera kukigo cya ESTG,twabamenyeshaga ko umwana wawe ".$studentNames." wiga muri ".$studentInfo[0]['level5']." ".$studentInfo[0]['department']." mugihembwe cya kabiri yagize amanota : ".$totalPercentage."%";      

      if(sendBulkerMessage($parentInfo[0]['emergency'],$message) === "dispatched"){ header("location:viewreportl5sod_second_term.php?status=dispatched");}else{ echo "Ooops try  Again! contact Developer";}
      
      
    break;


    case 'sendBulkerSODLV5SM3':

      $studentData  = $objSchool->selectAllInformationRelatedToTheStudentSM3(@$_GET['studentId']);
      $studentInfo  = $objSchool->selectAllStudentInformation(@$_GET['studentId']);
      $parentInfo   = $objSchool->selectAllInformationRelatedParentOfStudent(@$_GET['studentId']);
      

      $totalPercentage  = 0;$numberOfContent  = 0;$totalMarks =0;
      $studentNames  = $studentInfo[0]['firstname']." ".$studentInfo[0]['lastname'];
      foreach ($studentData as $key => $value) { $numberOfContent  +=1; $totalMarks += $studentData[$key]['total_marks']; $totalPercentage  = $totalMarks  / $numberOfContent;
      }$message= "Muraho ba byeyi dufatanije kurera kukigo cya ESTG,twabamenyeshaga ko umwana wawe ".$studentNames." wiga muri ".$studentInfo[0]['level5']." ".$studentInfo[0]['department']." mugihembwe cya gatatu yagize amanota : ".$totalPercentage."%";      

      if(sendBulkerMessage($parentInfo[0]['emergency'],$message) === "dispatched"){ header("location:viewreportl5sod_third_term.php?status=dispatched");}else{ echo "Ooops try  Again! contact Developer";}
      
      
    break;

    case 'sendBulkerELCLV3SM1':
      $studentData  = $objSchool->selectAllInformationRelatedToTheStudentSM1(@$_GET['studentId']);
      $studentInfo  = $objSchool->selectAllStudentInformation(@$_GET['studentId']);
      $parentInfo   = $objSchool->selectAllInformationRelatedParentOfStudent(@$_GET['studentId']);
      

      $totalPercentage  = 0;$numberOfContent  = 0;$totalMarks =0;
      $studentNames  = $studentInfo[0]['firstname']." ".$studentInfo[0]['lastname'];
      foreach ($studentData as $key => $value) { $numberOfContent  +=1; $totalMarks += $studentData[$key]['total_marks']; $totalPercentage  = $totalMarks  / $numberOfContent;
      }$message= "Muraho ba byeyi dufatanije kurera kukigo cya ESTG,twabamenyeshaga ko umwana wawe ".$studentNames." wiga muri ".$studentInfo[0]['level3']." ".$studentInfo[0]['department']." mugihembwe cya mbere yagize amanota : ".$totalPercentage."%";      

      if(sendBulkerMessage($parentInfo[0]['emergency'],$message) === "dispatched"){ header("location:viewreportl3elc_first_term.php?status=dispatched");}else{ echo "Ooops try  Again! contact Developer";}
      
    break;


    case 'sendBulkerELCLV3SM2':
      $studentData  = $objSchool->selectAllInformationRelatedToTheStudentSM2(@$_GET['studentId']);
      $studentInfo  = $objSchool->selectAllStudentInformation(@$_GET['studentId']);
      $parentInfo   = $objSchool->selectAllInformationRelatedParentOfStudent(@$_GET['studentId']);
      

      $totalPercentage  = 0;$numberOfContent  = 0;$totalMarks =0;
      $studentNames  = $studentInfo[0]['firstname']." ".$studentInfo[0]['lastname'];
      foreach ($studentData as $key => $value) { $numberOfContent  +=1; $totalMarks += $studentData[$key]['total_marks']; $totalPercentage  = $totalMarks  / $numberOfContent;
      }$message= "Muraho ba byeyi dufatanije kurera kukigo cya ESTG,twabamenyeshaga ko umwana wawe ".$studentNames." wiga muri ".$studentInfo[0]['level3']." ".$studentInfo[0]['department']." mugihembwe cya kabiri yagize amanota : ".$totalPercentage."%";      

      if(sendBulkerMessage($parentInfo[0]['emergency'],$message) === "dispatched"){ header("location:viewreportl3elc_second_term.php?status=dispatched");}else{ echo "Ooops try  Again! contact Developer";}
      
    break;


    case 'sendBulkerELCLV3SM3':
      
      $studentData  = $objSchool->selectAllInformationRelatedToTheStudentSM3(@$_GET['studentId']);
      $studentInfo  = $objSchool->selectAllStudentInformation(@$_GET['studentId']);
      $parentInfo   = $objSchool->selectAllInformationRelatedParentOfStudent(@$_GET['studentId']);
      

      $totalPercentage  = 0;$numberOfContent  = 0;$totalMarks =0;
      $studentNames  = $studentInfo[0]['firstname']." ".$studentInfo[0]['lastname'];
      foreach ($studentData as $key => $value) { $numberOfContent  +=1; $totalMarks += $studentData[$key]['total_marks']; $totalPercentage  = $totalMarks  / $numberOfContent;
      }$message= "Muraho ba byeyi dufatanije kurera kukigo cya ESTG,twabamenyeshaga ko umwana wawe ".$studentNames." wiga muri ".$studentInfo[0]['level3']." ".$studentInfo[0]['department']." mugihembwe cya gatatu yagize amanota : ".$totalPercentage."%";      

      if(sendBulkerMessage($parentInfo[0]['emergency'],$message) === "dispatched"){ header("location:viewreportl3elc_third_term.php?status=dispatched");}else{ echo "Ooops try  Again! contact Developer";}
      
    break;




   //  ELC VEL 4


   case 'sendBulkerELCLV4SM1':

      $studentData  = $objSchool->selectAllInformationRelatedToTheStudentSM1(@$_GET['studentId']);
      $studentInfo  = $objSchool->selectAllStudentInformation(@$_GET['studentId']);
      $parentInfo   = $objSchool->selectAllInformationRelatedParentOfStudent(@$_GET['studentId']);
      

      $totalPercentage  = 0;$numberOfContent  = 0;$totalMarks =0;
      $studentNames  = $studentInfo[0]['firstname']." ".$studentInfo[0]['lastname'];
      foreach ($studentData as $key => $value) { $numberOfContent  +=1; $totalMarks += $studentData[$key]['total_marks']; $totalPercentage  = $totalMarks  / $numberOfContent;
      }$message= "Muraho ba byeyi dufatanije kurera kukigo cya ESTG,twabamenyeshaga ko umwana wawe ".$studentNames." wiga muri ".$studentInfo[0]['level4']." ".$studentInfo[0]['department']." mugihembwe cya mbere yagize amanota : ".$totalPercentage."%";      

      if(sendBulkerMessage($parentInfo[0]['emergency'],$message) === "dispatched"){ header("location:viewreportl4elc_first_term.php?status=dispatched");}else{ echo "Ooops try  Again! contact Developer";}
 
   break;


   case 'sendBulkerELCLV4SM2':
      $studentData  = $objSchool->selectAllInformationRelatedToTheStudentSM2(@$_GET['studentId']);
      $studentInfo  = $objSchool->selectAllStudentInformation(@$_GET['studentId']);
      $parentInfo   = $objSchool->selectAllInformationRelatedParentOfStudent(@$_GET['studentId']);
      

      $totalPercentage  = 0;$numberOfContent  = 0;$totalMarks =0;
      $studentNames  = $studentInfo[0]['firstname']." ".$studentInfo[0]['lastname'];
      foreach ($studentData as $key => $value) { $numberOfContent  +=1; $totalMarks += $studentData[$key]['total_marks']; $totalPercentage  = $totalMarks  / $numberOfContent;
      }$message= "Muraho ba byeyi dufatanije kurera kukigo cya ESTG,twabamenyeshaga ko umwana wawe ".$studentNames." wiga muri ".$studentInfo[0]['level4']." ".$studentInfo[0]['department']." mugihembwe cya kabiri yagize amanota : ".$totalPercentage."%";      

      if(sendBulkerMessage($parentInfo[0]['emergency'],$message) === "dispatched"){ header("location:viewreportl4elc_second_term.php?status=dispatched");}else{ echo "Ooops try  Again! contact Developer";}
   break;

   case 'sendBulkerELCLV4SM3':
      $studentData  = $objSchool->selectAllInformationRelatedToTheStudentSM3(@$_GET['studentId']);
      $studentInfo  = $objSchool->selectAllStudentInformation(@$_GET['studentId']);
      $parentInfo   = $objSchool->selectAllInformationRelatedParentOfStudent(@$_GET['studentId']);
      

      $totalPercentage  = 0;$numberOfContent  = 0;$totalMarks =0;
      $studentNames  = $studentInfo[0]['firstname']." ".$studentInfo[0]['lastname'];
      foreach ($studentData as $key => $value) { $numberOfContent  +=1; $totalMarks += $studentData[$key]['total_marks']; $totalPercentage  = $totalMarks  / $numberOfContent;
      }$message= "Muraho ba byeyi dufatanije kurera kukigo cya ESTG,twabamenyeshaga ko umwana wawe ".$studentNames." wiga muri ".$studentInfo[0]['level4']." ".$studentInfo[0]['department']." mugihembwe cya gatatu yagize amanota : ".$totalPercentage."%";      


      if(sendBulkerMessage($parentInfo[0]['emergency'],$message) === "dispatched"){ header("location:viewreportl4elc_third_term.php?status=dispatched");}else{ echo "Ooops try  Again! contact Developer";}   
   break;



   // SOD LV5


   case 'sendBulkerELCLV5SM1':
      $studentData  = $objSchool->selectAllInformationRelatedToTheStudentSM1(@$_GET['studentId']);
      $studentInfo  = $objSchool->selectAllStudentInformation(@$_GET['studentId']);
      $parentInfo   = $objSchool->selectAllInformationRelatedParentOfStudent(@$_GET['studentId']);
      

      $totalPercentage  = 0;$numberOfContent  = 0;$totalMarks =0;
      $studentNames  = $studentInfo[0]['firstname']." ".$studentInfo[0]['lastname'];
      foreach ($studentData as $key => $value) { $numberOfContent  +=1; $totalMarks += $studentData[$key]['total_marks']; $totalPercentage  = $totalMarks  / $numberOfContent;
      }$message= "Muraho ba byeyi dufatanije kurera kukigo cya ESTG,twabamenyeshaga ko umwana wawe ".$studentNames." wiga muri ".$studentInfo[0]['level5']." ".$studentInfo[0]['department']." mugihembwe cya mbere yagize amanota : ".$totalPercentage."%";      

      // echo $message;
      if(sendBulkerMessage($parentInfo[0]['emergency'],$message) === "dispatched"){ header("location:viewreportl5elc_first_term.php?status=dispatched");}else{ echo "Ooops try  Again! contact Developer";}
   break;


   case 'sendBulkerELCLV5SM2':
      $studentData  = $objSchool->selectAllInformationRelatedToTheStudentSM2(@$_GET['studentId']);
      $studentInfo  = $objSchool->selectAllStudentInformation(@$_GET['studentId']);
      $parentInfo   = $objSchool->selectAllInformationRelatedParentOfStudent(@$_GET['studentId']);
      

      $totalPercentage  = 0;$numberOfContent  = 0;$totalMarks =0;
      $studentNames  = $studentInfo[0]['firstname']." ".$studentInfo[0]['lastname'];
      foreach ($studentData as $key => $value) { $numberOfContent  +=1; $totalMarks += $studentData[$key]['total_marks']; $totalPercentage  = $totalMarks  / $numberOfContent;
      }$message= "Muraho ba byeyi dufatanije kurera kukigo cya ESTG,twabamenyeshaga ko umwana wawe ".$studentNames." wiga muri ".$studentInfo[0]['level5']." ".$studentInfo[0]['department']." mugihembwe cya kabiri yagize amanota : ".$totalPercentage."%";      

      if(sendBulkerMessage($parentInfo[0]['emergency'],$message) === "dispatched"){ header("location:viewreportl5elc_second_term.php?status=dispatched");}else{ echo "Ooops try  Again! contact Developer";}
   break;

   case 'sendBulkerELCLV5SM3':
      $studentData  = $objSchool->selectAllInformationRelatedToTheStudentSM3(@$_GET['studentId']);
      $studentInfo  = $objSchool->selectAllStudentInformation(@$_GET['studentId']);
      $parentInfo   = $objSchool->selectAllInformationRelatedParentOfStudent(@$_GET['studentId']);
      

      $totalPercentage  = 0;$numberOfContent  = 0;$totalMarks =0;
      $studentNames  = $studentInfo[0]['firstname']." ".$studentInfo[0]['lastname'];
      foreach ($studentData as $key => $value) { $numberOfContent  +=1; $totalMarks += $studentData[$key]['total_marks']; $totalPercentage  = $totalMarks  / $numberOfContent;
      }$message= "Muraho ba byeyi dufatanije kurera kukigo cya ESTG,twabamenyeshaga ko umwana wawe ".$studentNames." wiga muri ".$studentInfo[0]['level5']." ".$studentInfo[0]['department']." mugihembwe cya gatatu yagize amanota : ".$totalPercentage."%";      

      if(sendBulkerMessage($parentInfo[0]['emergency'],$message) === "dispatched"){ header("location:viewreportl5elc_third_term.php?status=dispatched");}else{ echo "Ooops try  Again! contact Developer";} 
   break;

    default:
    break;
 }
?>
</body>
</html>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<script src="js/Chart.min.js"></script>
<script src="js/fileinput.js"></script>
<script src="js/chartData.js"></script>
<script src="js/main.js"></script>

