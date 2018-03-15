<?php
require 'settings.php';

function hostStatus($hostUrl) {
    $ping = @fsockopen ($hostUrl, 80, $errno, $errstr, 10);
    if (!$ping) {
        return false;
    } else {
        @fclose($ping);
        return true;
    }
}

function getHosts(){
  global $hostsFile;
  return file($hostsFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
}

function makeTable($hosts){
  echo '<table class="table table-striped table-bordered" style="text-align: center;">
          <tr>
           <th style="text-align: center;">Server</th>
           <th style="text-align: center;">Bandwidth</th>
          </tr>
          ';
  foreach ($hosts as $host) {
 		$status = hostStatus($host);
      echo
          "<tr";
        if ($status == false)
          echo " class=\"table-danger\"";
          echo ">
          <td>
            <a href=\"http://".$host."\" target=\"_blank\">".$host."</a>
          </td>
          <td>";
        if ($status == true) {
            echo "Online";
          }
        else {
              echo "Offline";
        }
          echo "</td>
          </tr>
          ";
    }
    echo "</table>
    ";
  }
?>
