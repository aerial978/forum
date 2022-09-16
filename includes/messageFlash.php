<?php 
if (isset($errorMsg)) {
    echo '<p>'.$errorMsg.'</p>';
} else if (isset($successMsg)) {
    echo '<p>'.$successMsg. '</p>';
}
?>