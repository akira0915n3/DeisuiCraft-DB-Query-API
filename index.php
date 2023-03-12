<!DOCTYPE html>
<html lang="ja">
 <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>DeisuiCraft-link-Users</title>
 </head>
 
 <body>

 <header>

 <main>

 <div id="main">
    <?php
        $dsn = 'mysql:host=192.168.100.245;dbname=Discord_Users;charset=utf8';
        $user = 'dbuser';
        $pass = 'dbuser';

    try{
        $dbh = new PDO($dsn, $user, $pass);
    }catch (PDOException $e) {
        echo 'Database Access Denied...' . $e->getMessage();
        exit;
    }
        $sql = "SELECT * FROM discordsrv_accounts";
        $stmt = $dbh->query($sql);
        foreach ($stmt as $row){
            echo $row['discord'].':'.$row['uuid'].;
            echo '<br>';
    }
    ?>
 </div>

 </main>

 <footer>
 </footer>
 </header>

 </body>
</html>
