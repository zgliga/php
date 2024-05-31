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
    
    // 從資料庫查詢資料，並插入新的使用者資料
    $sql="insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')";
    
    // 如果插入資料的 SQL 命令出錯，顯示錯誤訊息
    if (!mysqli_query($conn, $sql)) {
        echo "新增命令錯誤";
    }
    else{
        // 顯示新增使用者成功訊息，並在三秒後重新導向到網頁
        echo "新增使用者成功，三秒鐘後回到網頁";
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
    }
}
?>
