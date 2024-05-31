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
        // 如果已登錄，顯示新增佈告表單
        echo "
        <html>
            <head><title>新增佈告</title></head>
            <body>
                <form method=post action=23.bulletin_add.php>
                    標    題：<input type=text name=title><br> <!-- 標題輸入框 -->
                    內    容：<br><textarea name=content rows=20 cols=20></textarea><br> <!-- 內容輸入框 -->
                    佈告類型：<input type=radio name=type value=1>系上公告  <!-- 佈告類型選擇 -->
                            <input type=radio name=type value=2>獲獎資訊
                            <input type=radio name=type value=3>徵才資訊<br>
                    發布時間：<input type=date name=time><p></p> <!-- 發布時間選擇 -->
                    <input type=submit value=新增佈告> <input type=reset value=清除> <!-- 提交按鈕和清除按鈕 -->
                </form>
            </body>
        </html>
        ";
    }
?
