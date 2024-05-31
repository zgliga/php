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
        // 執行更新佈告的 SQL 指令
        if (!mysqli_query($conn, "update bulletin set title='{$_POST['title']}',content='{$_POST['content']}',time='{$_POST['time']}',type={$_POST['type']} where bid='{$_POST['bid']}'")){
            // 若更新失敗，顯示錯誤訊息並在 3 秒後重定向回佈告列表頁面
            echo "修改錯誤";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }else{
            // 若更新成功，顯示成功訊息並在 3 秒後重定向回佈告列表頁面
            echo "修改成功，三秒鐘後回到佈告欄列表";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }
    }
?
