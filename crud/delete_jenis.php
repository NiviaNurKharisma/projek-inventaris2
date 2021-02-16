<?php
include 'connection.php';
$id = $_GET["id"];

$sql = "DELETE FROM jenis WHERE id_jenis='".$id."'";
$result = $db-> query ($sql);
if($result){
      echo"
      <script>
      alert('Data successfully deleted!');
      window.location = 'jenis.php';
      </script>
      ";
}
else{
      echo"
      <scripit>
      alert('Error!');
      window.location = 'jenis.php';
      </script>
      ";
}
?>