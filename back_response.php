<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $status = $_POST['Status'];
  if ($status == '1') {
    echo "RECEIVOK";
  }
}
?>