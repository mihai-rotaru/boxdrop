<?php

// what databases are available ?
function show_databases()
{
    $query = 'SHOW DATABASES';
    $dbs = mysql_query( "$query" );
    if( !$dbs )
    {
        $message  = 'Invalid query: ' . mysql_error() . "\n";
        $message .= 'Whole query: ' . $query;
        die($message);
    }
    else
    {
        echo( "<br/>" );
        echo( "Databases: " );
        echo( "<hr/>" );

        while( $db = mysql_fetch_array( $dbs ))
        {
            echo $db[0] . "<br/>";
        }
        echo( "<hr/>" );
    }
}

// die if query has not been executed successfully
function check_query( $result_set )
{
    if( !$result_set )
    {
        die( "Database query failed: " . mysql_error() );
    }
}

?>
