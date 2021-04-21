<?php
$folder = "folderup/";
// Lalu cek menggunakan fungsi file_exist
if (!file_exists($folder.$_GET['nama'])) {
  echo "<h1>Access forbidden!</h1>
      <p> Anda tidak diperbolehkan mendownload file ini.</p>";
  exit;
}

// Apabila mendownload file di folder files
else {
  header("Content-Type: File Transfer");
  header("Content-Type: octet/stream");
  header("Content-Disposition: attachment; filename=".$_GET['nama']);
  header("Content-Transfer-Encoding: binary");
  header("Expires: 0");
  header("Content-Length: ".filesize($folder.$_GET['nama']));
  ob_clean();
  flush();
  readfile($folder.$_GET['nama']);
  exit;
}
?>