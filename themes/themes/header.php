<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo( 'charset' );?>">
    <title><?php bloginfo( 'name' );?></title>
    <?php wp_head()?>
</head>

<body <?php body_class();?>>

<div class="site-header">
    <header class="site=header">
        <h1><a href="<?php echo home_url();?>"><?php bloginfo( 'name' );?></h1>
        <h4><?php bloginfo( 'description' );?></h4>
    </header>
