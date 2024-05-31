<?php
    // 開始對話
    session_start();
    
    // 清除名為 "id" 的會話變數
    unset($_SESSION["id"]);
    
    // 顯示登出成功訊息
    echo "登出成功....";
    
    // 重新導向到 login.html 頁面，延遲 3 秒
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
