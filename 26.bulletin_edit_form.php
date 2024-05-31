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
        // 查詢指定佈告編號的佈告資訊
        $result=mysqli_query($conn, "select * from bulletin where bid={$_GET["bid"]}");
        $row=mysqli_fetch_array($result);
        // 初始化顯示佈告類型的變數
        $checked1="";
        $checked2="";
        $checked3="";
        // 根據佈告類型設定對應的勾選狀態
        if ($row['type']==1)
            $checked1="checked";
        if ($row['type']==2)
            $checked2="checked";
        if ($row['type']==3)
            $checked3="checked";
        // 顯示佈告編輯表單
        echo "
        <html>
            <head><title>新增佈告</title></head>
            <body>
                <form method=post action=27.bulletin_edit.php>
                    佈告編號：{$row['bid']}<input type=hidden name=bid value={$row['bid']}><br> <!-- 顯示佈告編號並設置隱藏輸入框 -->
                    標    題：<input type=text name=title value={$row['title']}><br> <!-- 顯示佈告標題 -->
                    內    容：<br><textarea name=content rows=20 cols=20>{$row['content']}</textarea><br> <!-- 顯示佈告內容 -->
                    佈告類型：<input type=radio name=type value=1 {$checked1}>系上公告 <!-- 佈告類型選擇，根據佈告資訊設置勾選狀態 -->
                            <input type=radio name=type value=2 {$checked2}>獲獎資訊
                            <input type=radio name=type value=3 {$checked3}>徵才資訊<br>
                    發布時間：<input type=date name=time value={$row['time']}><p></p> <!-- 顯示佈告發布時間 -->
                    <input type=submit value=修改佈告> <input type=reset value=清除> <!-- 提交按鈕和清除按鈕 -->
                </form>
            </body>
        </html>
        ";
    }
?>
