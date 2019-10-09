<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>
        <?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

</head>

<body>