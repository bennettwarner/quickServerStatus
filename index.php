<?php require 'functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>quickServerStatus</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
</head>
<body>
  <meta http-equiv="refresh" content="<?php echo $refreshRate; ?>">
  <div class="container">
    <div class="row">
      <div class="two columns" style="margin-top: 10%">
      </div>
      <div class="eight columns" style="margin-top: 10%">
        <h2 align='center' class="text-center">quickServerStatus</h2>
        <?php makeTable(getHosts()); ?>
      </div>
    </div>
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.tablesorter.min.js"></script>
  <script>
  $(document).ready(function()
{
    $("#hostsTable").tablesorter();
}
);

  </script>
</body>
</html>
