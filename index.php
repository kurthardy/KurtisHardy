<html>
    <head>
        <title>Kurtis Hardy</title>
        <link rel=stylesheet href="content/kurtishardy.css" type="text/css">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
    </head>
    <body>
        <?php include('includes/header.php'); ?>
        <div id="wrapper">
            <?php include('includes/subNav.php'); ?>
            <div id="content">

            <?php
                if (isset($_GET["page"])) {
                    if ($_GET["page"] == "Profile") {
                        include('includes/profile.php');
                    } else if ($_GET["page"] == "Blog") {
                        include('blog.php');
                    } else if ($_GET["page"] == "Contact") {
                        include('contact.php');
                    } else {
                        include('home.php');
                    }
                } else {
                    include('home.php');
                }
            ?>
            </div>
            <?php include('includes/footer.php'); ?>
        </div>
    </body>
</html>