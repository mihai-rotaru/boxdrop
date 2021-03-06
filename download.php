<?php require_once( "includes/session.php" ); ?>
<?php require_once( "includes/connection.php" ); ?>
<?php require_once( "includes/functions.php" ); ?>
<?php require_once( "includes/box_drop_functions.php" ); ?>
<?php
if( isset( $_SESSION[ 'user_id' ] ))
{
    $user_id = $_SESSION[ 'user_id' ];
    $file_id = $_GET[ 'file_id' ];
    $folder_name = get_folder_name_by_id( $_GET[ 'folder_id' ] );

    $query = "
        SELECT filename, data, filetype, filesize
        FROM user_${user_id}_folder_${folder_name}
        WHERE id=${file_id}
        "; 
    $result = mysql_query( $query ); 
    check_query( $result );

    $result_array = mysql_fetch_array( $result );

    $data = $result_array[ "data" ]; 
    $name = $result_array[ "filename" ];
    $type = $result_array[ "filetype" ]; 
    $size = $result_array[ "filesize" ]; 

    Header( "Content-disposition: attachment; filename={$name}" );
    Header( "Content-length: $size" );
    Header( "Content-type: $type" );
    echo( $data );
    exit;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<?php include( "includes/head.php" ); ?>

<body>
    <div id="container">
        <?php include( "includes/header.php" ); ?>

        <div id="content-no-margin">
        </div>

        <?php include( "includes/footer.php" ); ?>
    </div>
</body>

</html>
