<?php
$page_content = "No Action";
if( isset($_GET["action"])){
    $page_content = $_GET["action"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Panel</title>
    <!-- custom css files   -->
    <link href="css/main.css" rel="stylesheet">
</head>
<body>
<div class="action" >
   <h3><?php echo $page_content?></h3>
</div>

</body>
</html>
