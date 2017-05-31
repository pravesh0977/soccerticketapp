<?php
// $con=mysqli_connect('localhost', 'root', 'root') or die ('stop it yo');
// $db=mysql_select_db('testdatabase');
$connection = mysqli_connect("localhost", "root", "root", "testdatabase");
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  
<?php
echo "first";
$query = mysqli_query("SELECT * FROM bumtable");
// $num_rows = mysql_num_rows($query);
echo $query;
echo "helleye";

?>
</body>
</html>


