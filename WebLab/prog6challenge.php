<?php
$user = "YourName";
?>
<!DOCTYPE html>
<html>
<head>
 <title> program 6 </title>
 <style>
 body{
     background-color:blue;
     color:white;
 }
 .heading{
     text-align:center;
 }
 </style>
 </head>
<body>
<h2 class="heading"> <?php echo $user; ?>,Welcome to Sample PHP Script </h2>
<h2>This Program displays the number page visits </h2>
<?php
print "<h3> REFRESH PAGE </h3>";
$name="counter.txt";
$file = fopen($name,"r");
$hits = fscanf($file,"%d");
fclose($file);
$hits[0]++;
$file = fopen($name,"w");
fprintf($file,"%d",$hits[0]);
fclose($file);
print "Total number of views: ".$hits[0];
?>
</body>
</html>