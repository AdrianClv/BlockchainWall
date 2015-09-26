<?php
function printError($err){
    echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> ' . $err . '</div>';
}

function printWarning($msg){
    echo '<div class="alert alert-warning" role="alert">' . $msg . '</div>';
}

function printSuccess($msg){
  echo '<div class="alert alert-success alert-dismissible fade in" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
          </button>'
          . $msg .
        '</div>';
}
?>
