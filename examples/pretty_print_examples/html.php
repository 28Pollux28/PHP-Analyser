<!DOCTYPE html>
<html>
<head>
<title>How to put PHP in HTML - foreach Example</title>
</head>
<body>
<?php

$employees = array(‘John’, ‘Michelle’, ‘Mari’, ‘Luke’, ‘Nellie’);
$total = count($employees);
?>
<h1>List of Employees</h1>
<ul>
<?php

$i = 0;
?>
<?php while ($i < $total) { ?>
<li><?php echo $employees[$i] ?></li>
<?php  ++$i ?>
<?php }  ?>
</ul>
</body>
</html>
