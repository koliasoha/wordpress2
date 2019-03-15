<!DOCTYPE html>
<html>
<?php echo get_stylesheet_uri(); ?>
<?php wp_head(); ?>
<head>
    <title><?php wp_title(' | ',true, 'right');?>My Bootstrap Theme</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
</head>
<body>
<div class = "navbar navbar-inverse navbar-static-top">
    <div class = "container">

        <a href = "index.php" class = "navbar-brand">Bootstrap WordPress Theme</a>

        <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
            <span class = "icon-bar" ></span>
            <span class = "icon-bar"></span>
            <span class = "icon-bar"></span>
        </button>
    </div>
</div>
</body>
</html>

