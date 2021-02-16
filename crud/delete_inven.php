<?php
include 'connection.php';
$id = $_GET["id"];

$sql = "DELETE FROM inven WHERE id_inventaris='".$id."'";
$result = $db-> query ($sql);
if($result){
      echo"
      <script>
      alert('Data successfully deleted!');
      window.location = 'inven.php';
      </script>
      ";
}
else{
      echo"
      <scripit>
      alert('Error!');
      window.location = 'inven.php';
      </script>
      ";
}
?>