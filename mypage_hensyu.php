<?php
mb_internal_encoding("utf8");
session_start();

if(empty($_POST['from_mypage'])){
    header("Location:login_error.php");
}
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
    </head>
    <body>
    <header>
            <img src="4eachblog_logo.jpg">
            <div class="logout"><a href="log_out.php">ログアウト</a></div>
        </header>   
        <main>  
            <form action="mypage_update.php" method="post" enctype="multipart/form-data"> 
                <div class="my_info">   
                    <h2>会員情報</h2>   
                    <div class="hello"> 
                        <?php echo "こんにちは！".$_SESSION['name']."さん"?>
                    </div>  
                    <div class="profile_pic">   
                    <img src= "<?php echo $_SESSION['picture'];?>">
                    </div>  
                    <div class="basic_info">
                        <div class="name">  
                            <p>氏名:<input type="text" size="40" name="name" value="<?php echo $_SESSION['name'];?>" required></p> 
                        </div>
                        <div class="mail">  
                            <p>メール:<input type="text" size="40" name="mail" value="<?php echo $_SESSION['mail'];?>" required></p>
                        </div>
                        <div class="passwpord"> 
                            <p>パスワード:<input type="text" size="40" name="password" pattern="^[a-zA-Z0-9]{6,}$"  value="<?php echo $_SESSION['password'];?>" required></p>
                        </div>
                    </div>  
                    <div class="comments"> 
                    <textarea rows="5" cols="45" name="comments"><?php echo $_SESSION['comments'];?></textarea>
                    </div>
                    <div class="hensyu_b">  
                        <input type="submit"  class="hensyu" size="35" value="この内容に変更する">
                    </div>
                </div>  
            </form>
        </main>
        <footer>
            ©︎ 2018 InterNous.inc. All rights reserved
        </footer>
    </body>
    
</html>
