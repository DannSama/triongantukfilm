<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $comment = $_POST["comment"];
echo $comment;
}
?>
