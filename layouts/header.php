<?php include('layouts/arrays.php'); 
if (basename($_SERVER['REQUEST_URI']) == 'contact.php') {
    $specialBackground = 'special';
} else {
    $specialBackground = '';
}; 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $pageTitle; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/normalize.css">
	<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Fredericka+the+Great' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/lightbox.css">
	<link rel="shortcut icon" href="favicon.png" type="image/png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery.js"><\/script>')</script>
	<script src="js/modernizr.js"></script>
	<meta name="description" content="<?php echo $pageDescription; ?>">
	<meta name="keywords" content="<?php echo $pageDescription; ?>">
	</head>
<body class="body <?php echo $specialBackground; ?>">
	<header>
		<div class="header-container">
		<div class="language">
   <a href="index.php"><div class="language-ru"></div></a>
   <a href="en/index.php"><div class="language-en"></div></a>
    </div>
		<div class="logo-wrapper">
		<a href="index.php" id="logo">
			<h1>Regina Tihonova</h1>
			<h2>Фотограф и ретушер</h2>
		</a>
		</div>
		<nav>
			<?php include('layouts/nav.php'); ?>
		</nav>
		</div>		
		  		
	</header>

