<?php
  $folder="file/"; 
  $Upload = $folder . basename($_FILES['file']['name']);
  move_uploaded_file($_FILES['file']['tmp_name'], $Upload);
  echo "Foto yang Diupload  : <br>";
  echo "<img src='$Upload' width='100'>";
?>