<?php
session_start();
if(isset($_SESSION['id'])){
    header("Location:mypage.php");
}
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ログイン</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <body>
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="login"><a href="login.php">ログイン</a></div>
        </header>   
        <main>  
            <form action="mypage.php" method="post">    
                <div class="login_form"> 
                    <div class="login_contents">  
                        <div class="mail">  
                          メールアドレス<br>
                          <input type="text" class="formbox" size="40" value="<?php if(isset($_COOKIE['keep_login'])){echo $_COOKIE['mail'];}?>" name="mail">
                        </div>
                        <div class="password">
                           パスワード<br>
                           <input type="text" class="formbox" size="40" value="<?php if(isset($_COOKIE['keep_login'])){echo $_COOKIE['password'];}?>" name="password">
                        </div>
                        <div class="keep_login">
                            <input type="checkbox" class="formbox" size="40" name="keep_login" value="keep_login" 
                            <?php if(isset($_COOKIE['keep_login'])){
                                echo "checked='checked'";
                            }
                            ?>>ログイン状態を保持する
                        </div>  
                    </div>  
                    <div class="login_b">  
                        <input type="submit" class="login_button" size="35" value="ログイン">
                    </div>
                </div>
            </form>
        </main>
        <footer>
            ©︎ 2018 InterNous.inc. All rights reserved
        </footer>
    </body>
</html>