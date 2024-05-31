<?php
    // 禁止顯示錯誤訊息
    error_reporting(0);
    // 啟動會話
    session_start();
    // 如果未登錄，將顯示提示信息並重定向到登錄頁面
    if (!$_SESSION["id"]) {
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{
        // 建立到資料庫的連接
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        // 準備 SQL 指令，插入佈告資訊到資料庫
        $sql="insert into bulletin(title, content, type, time) 
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')";
        // 執行 SQL 指令，如果出現錯誤則顯示錯誤訊息
        if (!mysqli_query($conn, $sql)){
            echo "新增命令錯誤";
        }
        else{
            // 若無錯誤，顯示成功訊息並在 3 秒後重定向回佈告列表頁面
            echo "新增佈告成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }
    }
?>
