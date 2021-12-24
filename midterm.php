<?php
  $json = file_get_contents("url");
  $data = json_decode($json);
  echo "<table border='1'>";
  echo "<tr>";
  echo "<td>";
  echo "ลำดับ";
  echo "</td>";
  echo "<td>";
  echo "จังหวัด";
  echo "</td>";
  echo "</tr>";
  foreach($data as $key=>$val){
    echo "<tr>";
    echo "<td>";
    echo $key+1;
    echo "</td>";
    echo "<td>";
    echo $val->province;
    echo "</td>";
    echo "</tr>";
  }
  echo "</table>";
?>
