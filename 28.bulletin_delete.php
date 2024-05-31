<?php
    // 禁止顯示錯誤訊息
    error_reporting(0);
    // 啟動會話
    session_start();
    // 如果未登錄，將顯示提示信息並重定向到登錄頁面
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        // 建立到資料庫的連接
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        // 準備 SQL 指令，刪除指定佈告編號的佈告
        $sql="delete from bulletin where bid='{$_GET["bid"]}'";
        // 執行 SQL 指令，若刪除失敗則顯示錯誤訊息，成功則顯示成功訊息
        if (!mysqli_query($conn,$sql)){
            echo "佈告刪除錯誤";
        }else{
            echo "佈告刪除成功";
        }
        // 在 3 秒後重定向回佈告列表頁面
        echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
    }
?>
