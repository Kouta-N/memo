<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>

<body>
  <header>
    <h1 class="font-weight-normal">PHP</h1>
  </header>

  <main>
    <h2>Practice</h2>
    <pre>
  <?php
    require('dbconnect.php');
 
    if(isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])) {
      $id = $_REQUEST['id'];
      
      $statement = $db->prepare('DELETE FROM memos WHERE id=?');
      $statement -> execute(array($id));
      var_dump($db->errorInfo()); // ここ
      exit(); // ここ
    }
  ?>
  <p>メモを削除しました</p>
</pre>
    <p><a href="index.php">戻る</a></p>
  </main>
</body>

</html>