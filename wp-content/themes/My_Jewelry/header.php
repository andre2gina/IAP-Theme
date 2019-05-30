<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes();?>>
<head> 
    <meta charset="<?php blginfo('charset');?>"/>
    <title> <?php bloginfo('name')?><?php wp_title();?> </title> 
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>"/> 
    <?php wp_head();?>
</head> 
<body> 
    <div id="header"> 
        <h1><a href="<?php bloginfo('url');?>"> <?php bloginfo('name');?></a> </h1> 
        <p><?php bloginfo('description');?></p> 
    </div> 