<?php include 'includes/header.php'; ?>

<body class="bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 font-inter overflow-x-hidden" x-data
    :class="{ 'dark': $store.darkMode }">

    <?php include 'includes/loader.php'; ?>

    <?php include 'includes/nav.php'; ?>

    <?php include 'includes/hero.php'; ?>

    <?php include 'includes/about.php'; ?>

    <?php include 'includes/skills.php'; ?>

    <?php include 'includes/portfolio.php'; ?>

    <?php include 'includes/kaggle.php'; ?>

    <?php include 'includes/dev_hub.php'; ?>

    <?php include 'includes/specializations.php'; ?>

    <?php include 'includes/project_modal.php'; ?>

    <!-- IoT & Robotics section mapping (Redirects to #portfolio) -->
    <div id="iot-robotics"></div>

    <?php include 'includes/services.php'; ?>

    <?php include 'includes/contact.php'; ?>

    <?php include 'includes/footer.php'; ?>