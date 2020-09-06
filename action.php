<?php
$error= '';
$email='';
$enroll='';
$val=0;
$val1=0;
$val2=0;
$val3=0;
$val4=0;
$val5=0;
$val6=0;
$val7=0;
$val8=0;

if(isset($_REQUEST["submit"]))
{
    $email = $_REQUEST["eaddress"];
    echo $email;
    $enroll = $_REQUEST["enroll"];
    $val1 = $_REQUEST["q1"];
    $val2 = $_REQUEST["q2"];
    $val3 = $_REQUEST["q3"];
    $val4 = $_REQUEST["q4"];
    $val5 = $_REQUEST["q5"];
    $val6 = $_REQUEST["q6"];
    $val7 = $_REQUEST["q7"];
    $val8 = $_REQUEST["q8"];
   $file_open = fopen("file1.csv","a");
   $no_rows = count(file("file1.csv"));
   if($no_rows > 1){$no_rows = ($no_rows -1)+1;}
   $form_data = array(
       'Email' => $email,
       'Enrollment' =>$enroll,
       'value1' => $val1,
       'value2' => $val2,
       'value3' => $val3,
       'value4' => $val4,
       'value5' => $val5,
       'value6' => $val6,
       'value7' => $val7,
       'value8' => $val8 );
   fputcsv($file_open,$form_data);
  // $error = '<THANKS YOU FOR YOUR VALUEABLE FEEDBACK</label>';
   echo  "sucess";
   
}

?>
