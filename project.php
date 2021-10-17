<!Doctype html>
<head>
    <title>
        Matrix operation
    </title>
</head>  
<?php 

   

   
   $result_0_0 = ""  ;
   $result_0_1 =  "";
   $result_0_2 =  ""; 
   $result_1_0 =   "";
   $result_1_1 =   "";
   $result_1_2 =   "";
   $result_2_0 =   "";
   $result_2_1 =   "";
   $result_2_2 =  "";



if (isset($_POST['operator'])){
    $a1_0_0=$_POST['a1_0_0'];
    $a1_0_1=$_POST['a1_0_1'];
    $a1_0_2=$_POST['a1_0_2'];
    $a1_1_0=$_POST['a1_1_0'];
    $a1_1_1=$_POST['a1_1_1'];
    $a1_1_2=$_POST['a1_1_2'];
    $a1_2_0=$_POST['a1_2_0'];
    $a1_2_1=$_POST['a1_2_1'];
    $a1_2_2=$_POST['a1_2_2'];


    $operator =$_POST['operator'];
  
    $a2_0_0=$_POST['a2_0_0'];
    $a2_0_1=$_POST['a2_0_1'];
    $a2_0_2=$_POST['a2_0_2'];
    $a2_1_0=$_POST['a2_1_0'];
    $a2_1_1=$_POST['a2_1_1'];
    $a2_1_2=$_POST['a2_1_2'];
    $a2_2_0=$_POST['a2_2_0'];
    $a2_2_1=$_POST['a2_2_1'];
    $a2_2_2=$_POST['a2_2_2'];
$ARRAY_1=array(
    array("$a1_0_0","$a1_0_1"," $a1_0_2 "   ),array( " $a1_1_0"," $a1_1_1 ","$a1_1_2"),array("$a1_2_0","$a1_2_1","$a1_2_2"  )
);
$Array_2=array(
    array("$a2_0_0","$a2_0_1","$a2_0_2"),array("$a2_1_0","$a2_1_1","$a2_1_2"),array("$a2_2_0","$a2_2_1","$a2_2_2")
);
   if($operator=="add"){
    $result_0_0=$ARRAY_1  [0][0] + $Array_2[0][0];
    $result_0_1=$ARRAY_1  [0][1] + $Array_2[0][1];
    $result_0_2= $ARRAY_1 [0][2]+ $Array_2[0][2];
    $result_1_0=$ARRAY_1  [1][0]+ $Array_2[1][0];
    $result_1_1= $ARRAY_1 [1][1]+ $Array_2[1][1];
    $result_1_2= $ARRAY_1 [1][2]+ $Array_2[1][2];
    $result_2_0=$ARRAY_1  [2][0]+ $Array_2[2][0];
    $result_2_1= $ARRAY_1 [2][1]+ $Array_2[2][1];
    $result_2_2= $ARRAY_1 [2][2]+ $Array_2[2][2];
   }elseif($operator=="sub"){
    $result_0_0= $ARRAY_1[0][0] - $Array_2[0][0] ;
    $result_0_1=$ARRAY_1[0][1] - $Array_2[0][1];
    $result_0_2=$ARRAY_1[0][2]- $Array_2[0][2];
    $result_1_0=$ARRAY_1[1][0]-$Array_2[1][0];
    $result_1_1=$ARRAY_1[1][1]-$Array_2[1][1];
    $result_1_2=$ARRAY_1[1][2]-$Array_2[1][2];
    $result_2_0=$ARRAY_1[2][0]-$Array_2[2][0];
    $result_2_1=$ARRAY_1[2][1]-$Array_2[2][1];
    $result_2_2=$ARRAY_1[2][2]-$Array_2[2][2];
   }else{
    $result_0_0=$ARRAY_1[0][0] * $Array_2[0][0] + $ARRAY_1[0][1] * $Array_2[1][0] + $ARRAY_1[0][2] * $Array_2[2][0];
    $result_0_1=$ARRAY_1[0][0] * $Array_2[0][1] + $ARRAY_1[0][1] * $Array_2[1][1] + $ARRAY_1[0][2] * $Array_2[2][1];
    $result_0_2=$ARRAY_1[0][0] * $Array_2[0][2] + $ARRAY_1[0][1] * $Array_2[1][2] + $ARRAY_1[0][2] * $Array_2[2][2];
    $result_1_0=$ARRAY_1[1][0] * $Array_2[0][0] + $ARRAY_1[1][1] * $Array_2[1][0] + $ARRAY_1[1][2] * $Array_2[2][0];
    $result_1_1=$ARRAY_1[1][0] * $Array_2[0][1] + $ARRAY_1[1][1] * $Array_2[1][1] + $ARRAY_1[1][2] * $Array_2[2][1];
    $result_1_2=$ARRAY_1[1][0] * $Array_2[0][2] + $ARRAY_1[1][1] * $Array_2[1][2] + $ARRAY_1[1][2] * $Array_2[2][2];
    $result_2_0=$ARRAY_1[2][0] * $Array_2[0][0] + $ARRAY_1[2][1] * $Array_2[1][0] + $ARRAY_1[2][2] * $Array_2[2][0];
    $result_2_1=$ARRAY_1[2][0] * $Array_2[0][1] + $ARRAY_1[2][1] * $Array_2[1][1] + $ARRAY_1[2][2] * $Array_2[2][1];
    $result_2_2=$ARRAY_1[2][0] * $Array_2[0][2] + $ARRAY_1[2][1] * $Array_2[1][2] + $ARRAY_1[2][2] * $Array_2[2][2];
   
  
   }




}




?>
<body>
<h1>  MATRIX OPERATION   </h1>
<form method= "POST">
 <lebel>
      <p> First matrix </p> </lebel>

     <input type = "number" step="0.001" name= "a1_0_0" value="<?php echo $a1_0_0 ; ?>">
     <input type = "number" step="0.001" name= "a1_0_1" value="<?php echo $a1_0_1; ?>" >
     <input type = "number" step="0.001" name= "a1_0_2" value="<?php echo $a1_0_2; ?>" ></br>
     <input type = "number" step="0.001" name= "a1_1_0" value="<?php echo $a1_1_0; ?>" >
     <input type = "number" step="0.001" name= "a1_1_1" value="<?php echo $a1_1_1; ?>" >
     <input type = "number" step="0.001" name= "a1_1_2" value="<?php echo $a1_1_2; ?>" ></br>
     <input type = "number" step="0.001" name= "a1_2_0" value="<?php echo $a1_2_0; ?>" >
     <input type = "number" step="0.001" name= "a1_2_1" value="<?php echo $a1_2_1; ?>" >
     <input type = "number" step="0.001" name= "a1_2_2" value="<?php echo $a1_2_2; ?>" ></br></br></br>
  <lebel>
     <p> SECOND MATRIX </p>
  </lebel>  
      <input type = "number" step="0.001"  name= "a2_0_0" value="<?php echo $a2_0_0; ?>" >
      <input type = "number" step="0.001" name= "a2_0_1" value="<?php echo $a2_0_1; ?>" >
      <input type = "number" step="0.001" name= "a2_0_2" value="<?php echo $a2_0_2; ?>" ></br>
      <input type = "number" step="0.001" name= "a2_1_0" value="<?php echo $a2_1_0; ?>">
      <input type = "number" step="0.001" name= "a2_1_1" value="<?php echo $a2_1_1; ?>" >
      <input type = "number" step="0.001" name= "a2_1_2" value="<?php echo $a2_1_2; ?>" ></br>
      <input type = "number" step="0.001" name= "a2_2_0" value="<?php echo $a2_2_0; ?>" >
      <input type = "number" step="0.001" name= "a2_2_1" value="<?php echo $a2_2_1; ?>" >
      <input type = "number" step="0.001" name= "a2_2_2" value="<?php echo $a2_2_2; ?>" ></br></br></br>

      <input type= "submit"  name ="operator"  value = "add"></br>
      <input type= "submit"  name ="operator"  value = "sub"></br>
      <input type= "submit"  name = "operator" value = "multiply" ></br>
       

     
   <lebel>
       <p> RESULT </p>
   </lebel>

          <input type= "number" step="0.001" name= "result_0_0" value="<?php  echo $result_0_0; ?>" >
          <input type= "number" step="0.001" name= "result_0_1" value="<?php  echo $result_0_1; ?>">
          <input type= "number" step="0.001" name= "result_0_2" value="<?php  echo $result_0_2; ?>"></br>
          <input type= "number" step="0.001" name= "result_1_0" value="<?php  echo $result_1_0; ?>">
          <input type= "number" step="0.001" name= "result_1_1" value="<?php  echo $result_1_1; ?>">
          <input type= "number" step="0.001" name= "result_1_2" value="<?php  echo $result_1_2; ?>"></br>
          <input type= "number" step="0.001" name= "result_2_0" value="<?php  echo $result_2_0; ?>">
          <input type= "number" step="0.001" name= "result_2_1" value="<?php  echo $result_2_1; ?>">
          <input type= "number" step="0.001" name= "result_2_2" value="<?php  echo $result_2_2; ?>">


</form>
</body>