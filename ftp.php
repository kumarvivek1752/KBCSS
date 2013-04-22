<?php
// set up basic connection
echo "Start the magic ";
$ftp_server='localhost';
$ftp_user_name='root';
$source_file='susu.txt';
$destination_file=$source_file;
$conn_id = ftp_connect('localhost'); 
echo $conn_id;
// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name,''); 

// check connection
if ((!$conn_id) || (!$login_result)) { 
    echo "FTP connection has failed!";
    echo "Attempted to connect to $ftp_server for user $ftp_user_name"; 
    exit; 
} else {
    echo "Connected to $ftp_server, for user $ftp_user_name";
}

// upload the file
$upload = ftp_put($conn_id, $destination_file, $source_file, FTP_BINARY); 

// check upload status
if (!$upload) { 
    echo "FTP upload has failed!";
} else {
    echo "Uploaded $source_file to $ftp_server as $destination_file";
}

// close the FTP stream 
ftp_close($conn_id); 
?>
