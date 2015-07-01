<?php
$target_dir = "/usr0/home/austinma/jsalt-uploads/";
$uploaded_filename = basename( $_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

if(isset($_POST["submit"])) {
  if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large. <br />";
    $uploadOk = 0;
  }
}

if ($uploaded_filename == "2555110218.txt") {
  $team_name = "Curry Rice";
}
else if ($uploaded_filename == "4938552685.txt") {
  $team_name = "Melon Bread";
}
else if ($uploaded_filename == "5642287855.txt") {
  $team_name = "Tuna Onigiri";
}
else if ($uploaded_filename == "6000418101.txt") {
  $team_name = "Shrimp Tempura";
}
else if ($uploaded_filename == "8271120153.txt") {
  $team_name = "Miso Soup";
}
else if ($uploaded_filename == "2109644392.txt") {
  $team_name = "Shabu Shabu";
}
else if ($uploaded_filename == "3049423000.txt") {
  $team_name = "Zaru Soba";
}
else if ($uploaded_filename == "0156039782.txt") {
  $team_name = "Katsudon";
}
else if ($uploaded_filename == "8829326538.txt") {
  $team_name = "Tamago Zushi";
}
else if ($uploaded_filename == "7118006208.txt") {
  $team_name = "Kappa Maki";
}
else if ($uploaded_filename == "7658521347.txt") {
  $team_name = "Tonkotsu Ramen";
}
else if ($uploaded_filename == "1106124136.txt") {
  $team_name = "Yakitori";
}
else if ($uploaded_filename == "9160271460.txt") {
  $team_name = "Nikujaga";
}
else {
  $uploadOk = 0;
  echo "Invalid file name. Please name your file <i>&lt;teamcode&gt;</i>.txt<br />.";
}

$target_file = $target_dir . $team_name . ".txt";
if ($uploadOk == 1) {
    if (file_exists($target_file)) {
      rename($target_file, dirname($target_file)."/prev/".basename($target_file).time());
    }
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Team " . $team_name . "'s output has been uploaded successfully.";
        echo "<script language=\"javascript\">alert(\"Success!\"); document.location=\"leaderboard.html\"; </script>";
    } else {
        echo "Sorry, there was an error uploading your file. <br/>";
    }
}

?>
