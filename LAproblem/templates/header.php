<!DOCTYPE html>

<html lang="en">

    <head>

        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">


        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="county help">
        <meta name="author" content="Georgios Kontogiannis">

        <?php if (isset($title)): ?>
            <title>County Help: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>County Help</title>
        <?php endif ?>

        <!-- Bootstrap CSS 
        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        -->
        <!-- Custom CSS -->
        <link href="/css/style.css" rel="stylesheet" type="text/css"/>

        <!-- jQuery -->
        <script src="/js/jquery-1.10.2.min.js"></script>
        <!-- Boostrap Core JS -->
        <script src="/js/bootstrap.min.js"></script>
        <!-- Custom JS -->
        <script src="/js/scripts.js"></script>

        <script>
          function showHint(str) {
              if (str.length == 0) { 
                  document.getElementById("txtHint").innerHTML = "";
                  return;
              } else {
                  var xmlhttp = new XMLHttpRequest();
                  xmlhttp.onreadystatechange = function() {
                      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                          document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                      }
                  }
                  xmlhttp.open("GET", "gethint.php?q=" + str, true);
                  xmlhttp.send();
              }
          }
        </script>

</head>

  <body>
  <div class="navig">
    <a href="/">VIDI: I saw, I helped.</a>
  </div>