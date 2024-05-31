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
        
        // 構建 SQL 刪除命令，用於刪除指定 ID 的使用者
        $sql="delete from user where id='{$_GET["id"]}'";
        
        // 如果執行 SQL 命令出錯，顯示使用者刪除錯誤訊息，否則顯示成功訊息
        if (!mysqli_query($conn,$sql)){
            echo "使用者刪除錯誤";
        }else{
            echo "使用者刪除成功";
        }
        
        // 重新導向到網頁，延遲 3 秒
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
    }
?>
