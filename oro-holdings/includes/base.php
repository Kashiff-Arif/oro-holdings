<!DOCTYPE html>

<html lang="en" dir="ltr">



<head>

    <title>ORO HOLDINGS</title>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

    <meta name="description" content="ORO HOLDINGS">
    <meta property="og:image" content="src/images/logo.svg">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="ORO HOLDINGS" />
    <meta property="og:description" content="ORO HOLDINGS" />
    <link rel="icon" type="image/x-icon" href="src/images/favicon.png">
    <link rel="preload" fetchpriority="high" as="image" href="src/images/logo.svg">
    <!-- Styles -->
    <link rel="stylesheet" href="src/dist/main.min.css?v=<?php echo time(); ?>">
</head>

<?php

$pageClass = "";

if (isset($ishome)) {

    $pageClass .= " front-page";
}

if (isset($innerPages)) {

    $pageClass .= " inner-page";
}

?>





<body class="<?php echo trim($pageClass); ?>">
    <?php include_once "includes/svg-icons.php"; ?>

    <main>

