<?php

$username = 'blacksmith';
$password = 'AG1TLWe0';

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'You must authenticate to access this page.';
    exit;
} else {
	if ($_SERVER['PHP_AUTH_USER'] != $username || $_SERVER['PHP_AUTH_PW'] != $password) {
		echo 'Invalid credentials, try again.';
    	exit;
	}
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
		<meta charset="utf-8">
        <title>BSA Developer Test</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui">
        <link rel="stylesheet" href="dist/css/index.css">
    </head>
    <body>
        <?php include_once('template-parts/navigation.php'); ?>

        <main class="main-content">
            <?php include_once('template-parts/hero.php'); ?>
            <?php include_once('template-parts/openings.php'); ?>
            <?php include_once('template-parts/culture.php'); ?>
            <?php include_once('template-parts/about.php'); ?>
            <?php include_once('template-parts/testimonials.php'); ?>
        </main>

        <?php include_once('template-parts/footer.php'); ?>
        <script type="text/javascript" src="dist/js/index.js" defer></script>
    </body>
</html>