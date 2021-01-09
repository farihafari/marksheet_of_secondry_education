<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>form</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>


<?php
if(isset($_POST['result'])){
   $serial=$_POST['serial'];
   $name=$_POST['name'];
  
   $fname=$_POST['fname'];
   $rollno=$_POST['rollno'];
   $sname=$_POST['sname'];
   $group=$_POST['group'];
   $exam=$_POST['exam'];
   $year=$_POST['year'];
   $isuuedate=$_POST['idate'];
   $english1=$_POST['english1'];
   $english2=$_POST['english2'];
   $sindhi=$_POST['sindhi'];
   $pstudies=$_POST['pstudies'];
   $urdu=$_POST['urdu'];
   $islamiat=$_POST['islamiat'];
   $biology1=$_POST['biology1'];
   $biology2=$_POST['biology2'];
   $chemistry1=$_POST['chemistry1'];
   $chemistry2=$_POST['chemistry2'];
   $physics1=$_POST['physics1'];
   $physics2=$_POST['physics2'];
   $maths=$_POST['maths'];
   $totalmark=850;
   $obtainedmark= $biology1+$biology2+$english1+$english2+$sindhi+$pstudies+$urdu+$islamiat+$chemistry1+$chemistry2+$physics1+$physics2+$maths;
$percentage=($obtainedmark*100)/$totalmark .'%';
}
if ($percentage>=80){
   $grade="A+";
}
elseif ($percentage>=70) {
 $grade="A";
}
elseif ($percentage>=60) {
   $grade="B";
  }
  elseif ($percentage>=50) {
   $grade="C";
  }
  elseif ($percentage>=40) {
   $grade="D";
  }
  else{
     $grade="Fail";
  }    

?>
<body>
   <div class="container-fluid">
      <h6 class="text-left mt-2">Serial NO:<?php echo $serial  ?></h6>
      <div class="jumbotron">
         <h1 class="text-center">Board of Secondry Education Karachi</h1>
         <p class="text-center">STATEMENT OF MARKS</p>
        
         <p class="text-center font-weight-bold">S.S.C. EXAMINATION</p>
      </div>
      <table class="table">
      <tbody>
      <tr>
      <td>EXAMINATTION</td>
      <td><?php echo$exam?></td>
      <td>YEAR</td>
      <td><?php echo $year?></td>
      <td>ROLL NO</td>
      <td><?php echo $rollno?></td>
      </tr>
      </tbody>
      </table>
      <table class="table">
      <tbody>
      <tr>
      <td> Name</td>
       <td><?php echo $name?></td>
       <td>Group</td>
       <td><?php echo $group?></td>
      </tr>
      <tr>
      <td>Father's Name</td>
       <td><?php echo $fname?></td>
       <td>Issue Date</td>
       <td><?php echo $isuuedate?></td>
      </tr>
      <tr>
      <td>School Name</td>
       <td><?php echo $sname?></td>
      </tr>
      </tbody>
      </table>
      <table class="table">
      <thead>
      <tr>
      <th>S.NO.</th>
      <th>Subjects</th>
      <th>Marks Theory</th>
      <th>Marks Practicals</th>
      <th>Obtained Marks </th>
      <th>Grand Total Marks </th>
      <th>Grade</th>
      </tr>
      </thead>
      <tbody>
      <tr>
      <td>1</td>
      <td>Sindhi</td>
      <td><?php echo $sindhi?></td>
      <td>_</td>
      <td><?php echo $sindhi?></td>
      </tr>
      <tr>
      <td>2</td>
      <td>Urdu</td>
      <td><?php echo $urdu?></td>
      <td>_</td>
      <td><?php echo $urdu?></td>
      </tr>
      <tr>
      <td>3</td>
      <td>English P1</td>
      <td><?php echo $english1?></td>
      <td>_</td>
      <td><?php echo $english1?></td>
      </tr>
      <tr>
      <td>4</td>
      <td>English P2</td>
      <td><?php echo $english2?></td>
      <td>_</td>
      <td><?php echo $english2?></td>
      </tr>
      <tr>
      <td>5</td>
      <td>Pakistan St</td>
      <td><?php echo $pstudies?></td>
      <td>_</td>
      <td><?php echo $pstudies?></td>
      </tr>
      <tr>
      <td>6</td>
      <td>islamiat</td>
      <td><?php echo $islamiat?></td>
      <td>_</td>
      <td><?php echo $islamiat?></td>
      </tr>
      <tr>
      <td>7</td>
      <td>Biology </td>
      <td><?php echo $biology1?></td>
      <td><?php echo $biology2?></td>
      <td><?php echo $biology1+$biology2?></td>
      </tr>
      <tr>
      <td>8</td>
      <td>Chemistry</td>
      <td><?php echo $chemistry1?></td>
      <td><?php echo $chemistry2?></td>
      <td><?php echo $chemistry1+$chemistry2?></td>
      </tr>
      <tr>
      <td>9</td>
      <td>Physics</td>
      <td><?php echo $physics1?></td>
      <td><?php echo $physics2?></td>
      <td><?php echo $physics1+$physics2?></td>
      </tr>
      <tr>
      <td>10</td>
      <td>Mathematics</td>
      <td><?php echo $maths?></td>
      <td>_</td>
      <td><?php echo $maths?></td>
      </tr>
      <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><?php echo $obtainedmark."/".$totalmark ?></td>
      <td><?php echo $grade?></td>
      </tr>
      </tbody>
      </table>
   </div>
</body>
</html>