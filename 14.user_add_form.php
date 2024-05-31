<html>
<head><title>新增使用者</title></head>
<body>
<?php        
    // 隱藏錯誤訊息
    error_reporting(0);
    
    // 開始會話
    session_start();
    
    // 如果未設置會話中的 "id" 變數，提示用戶登入並重新導向到登入頁面
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{    
        // 顯示新增使用者表單
        echo "
            <form action=15.user_add.php method=post>
                帳號：<input type=text name=id><br>
                密碼：<input type=text name=pwd><p></p>
                <input type=submit value=新增> <input type=reset value=清除>
            </form>
        ";
    }
?>
</body>
</html>
