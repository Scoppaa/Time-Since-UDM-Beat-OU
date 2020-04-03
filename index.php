<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <title>OUvsUDM Time</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" href="theme.css">
    <link rel="icon" type="image/x-icon" href="" />
</head>

<?php
    $now = time(); // or your date as well
    $loss = strtotime("2017-01-13");
    $elapsed = $now - $loss;
    $totaldays = round($elapsed / (60 * 60 * 24));
    
    $years = round($totaldays/365);
    
    $days = ($totaldays - ($years*365)-1);
?>

<body>
    <div class="primary">
        <h1><?=$totaldays?> Days<br></h1>
        <h2>(<?=$years?> years and <?=$days?> days)</h2>
    </div>
    <div id="twitter" style="text-align: center;">
        <a href="https://twitter.com/OUvsUDMTime?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="true" data-size="large">Follow @OUvsUDMTime</a>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
</body>

</html>
