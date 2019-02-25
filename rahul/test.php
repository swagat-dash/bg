

<?php 
  phpinfo(); 




if(ini_get('file_uploads') == 1)
{
  echo 'HTTP Upload Enabled';
}
else
{
  echo 'HTTP Upload Disabled';
}

?>
