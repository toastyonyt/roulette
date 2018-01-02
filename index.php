<?php
function random_pic($dir = ''){
 $files = glob($dir . '*.png');
 $file = array_rand($files);
 return $files[$file];
}
?>
<!DOCTYPE html>
<html>
<head>

   <title>Roulette</title>
   <meta name="description" content="Random roulette number generator." />
   <meta property="og:title" content="Roulette" />
   <meta property="og:description" content="Random roulette number generator." />
   <?php echo '<meta property="og:image" content="https://toasty.club/roulette/'.random_pic().'" />'; ?>
   <meta property="og:url" content="https://toasty.club/roulette/" />
   <link rel="shortcut icon" href="http://toasty.club/favicon.ico" type="image/x-icon" />

</head>

<body>
<center>

<script>

   images = 38;
   number = Math.floor(Math.random(1) * images) + 1;
   document.write("<img src=\"image" + number + ".png\" />");   
   
</script>

</center>
</body>
</html>