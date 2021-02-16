<?php
include 'connection.php';
$id = $_GET["id"];

$sql = "DELETE FROM ruang WHERE id_ruang='".$id."'";
$result = $db-> query ($sql);
if($result){
      echo"
      <script>
      alert('Data successfully deleted!');
      window.location = 'ruang.php';
      </script>
      ";
}
else{
      echo"
      <scripit>
      alert('Error!');
      window.location = 'ruang.php';
      </script>
      ";
}
?>