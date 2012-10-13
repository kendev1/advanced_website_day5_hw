<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">


<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>5 Times Table</title>
<link rel="stylesheet" href="{stylesheet="css/fivetimes.css"}" type="text/css" media="screen">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

<script type="text/javascript" src="js/fivetimes.js"></script>


<script type="text/javascript">

    $(document).ready(function() {
    var message;


   $("#mult_table td").hover(function () {
    $(this).css('background-color','red');
    var htmlValue = $(this).html();


  }, 
  function () {
    $(this).css('background-color','')
        $("#val").html('');
        $("#multq").text("");
  }
);



       });


</script>   





</head>
<body>

<h1>Five Times Table: 5 X ... </h1>

<?PHP
/* Calculate 5 times table Create an array and embed the multiplication results */
/* In Table                                                                     */
 $multiplier = 5;  
 $FactorArray = array(1,2,3,4,5,6,7,8,9,10);  
 for( $i = 0; $i < 10; $i++) {
     $indexval = $i + 1;
     $MultResArray[$i] = $multiplier * $FactorArray[$i];
    
     $MultResult = $MultResArray[$i];
//     print "Multiplier Results for $indexval $multiplier $MultResult <br>";
     }
     echo "<div id='mult_table'> <br>";
     echo "<table> ";
     echo "<thead> "; 
     echo "<tr> <br>";
     echo "<th>1</th> ";
     echo "<th>2</th> ";
     echo "<th>3</th> ";
     echo "<th>4</th> ";
     echo "<th>5</th> ";
     echo "<th>6</th> ";
     echo "<th>7</th> ";
     echo "<th>8</th> ";
     echo "<th>9</th> ";
     echo "<th>10</th> ";
     echo "</tr> ";
     echo "</thead> ";
     echo "<tbody> ";
     echo "<tr> <br>";
     echo "<td> $MultResArray[0] </td> ";
     echo "<td> $MultResArray[1] </td> ";
     echo "<td> $MultResArray[2] </td> ";
     echo "<td> $MultResArray[3] </td> ";
     echo "<td> $MultResArray[4] </td> ";
     echo "<td> $MultResArray[5] </td> ";
     echo "<td> $MultResArray[6] </td> ";
     echo "<td> $MultResArray[7] </td> ";
     echo "<td> $MultResArray[8] </td> ";
     echo "<td> $MultResArray[9] </td> ";
     echo "</tr> ";       
     echo "</tbody> ";
     echo "</table> ";

     echo "</div> ";
  
  

?>


<!---- CSS3 animation of Title ---> 

  <div id="container">


    <div id="parent">
      <div id="multq"><br><br>  5 Times Table</div>
      <div id="multa"><br><br>  5 Times Table</div>
 
    </div>
  </div>



</body>
</html>
