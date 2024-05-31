
ChatGPT
html
複製程式碼
<html>
<head><title>修改使用者</title></head>
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
        // 建立資料庫連結
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        
        // 從資料庫中選取指定ID的使用者資料
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'");
        $row=mysqli_fetch_array($result);
        
        // 顯示修改使用者表單
        echo "
        <form method=post action=20.user_edit.php>
            <input type=hidden name=id value={$row['id']}>
            帳號：{$row['id']}<br> 
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>
            <input type=submit value=修改>
        </form>
        ";
    }
?>
</body>
</html>
