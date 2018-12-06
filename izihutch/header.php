<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/assets/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<!-- <title>Titre de la page</title> -->
<?php wp_head(); ?>    
</head>
<body>

<div id="container">

<header>
    
    <div id="mainHeader">
        <div id="avatarPicture">
            
        </div>
        <h1><a href="<?= home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
    </div>
    <p id="description"><?php bloginfo('description'); ?></p>

    <?php

        $headerMenu = wp_nav_menu([
        'theme_location' => 'headerIzi',
        'container' => 'nav',
        'container_class' => 'izihutch-nav',
        'menu_class' => 'izihutch-ul',
        'echo' => false
        ]);

        // $headerMenu = str_replace('menu-item ', 'left__nav-item ', $headerMenu);

        echo $headerMenu;

    ?>


<?php

get_search_form();

?>

<div id="mainLine"></div>

</header>

<main>
