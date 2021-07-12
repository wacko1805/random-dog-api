<?php
if (!empty($_SERVER['HTTPS'])) 
{
  $ssl = 'https';
}
else
{
  $ssl = 'http';
}
?>
<?php
$host = $_SERVER['SERVER_NAME'];
$path    = 'images/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){
    echo  $ssl.'://'.$host.'/dog/images/' .$file. '<br>';
}
?>



