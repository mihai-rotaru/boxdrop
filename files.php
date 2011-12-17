<?php require_once( "includes/session.php" ); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>

<?php require_once( "includes/connection.php" ); ?>
<?php require_once( "includes/functions.php" ); ?>
<?php require_once( "includes/box_drop_functions.php" ); ?>
<?php include( "includes/head.php" ); ?>

<body>
    <div id="container">
        <?php include( "includes/header.php" ); ?>

        <div id="content-no-margin">

            <?php
            echo( "Your files:" );
            show_files();
            ?>
                

            <input type='button' class='button' value='Upload' onclick="window.location='upload.php';" />
            <input type='button' class='button' value='New Folder' onclick="" />

        </div>

        <?php include( "includes/footer.php" ); ?>
    </div>
</body>
        
</html>