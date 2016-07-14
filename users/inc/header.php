<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Worling">

    <title>
        <?=
            isset($title)
                ? $title .' - '.WEBSITE_NAME
                : WEBSITE_NAME.'- Le reseau social qui regarde a demain!';
        ?>
    </title>

	<link rel="stylesheet" href="../assets/css/style.css"/>
	<body>

<?php include('inc/nav.php'); ?>  