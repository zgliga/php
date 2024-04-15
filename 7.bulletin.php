<?php
    error_reporting(0);
    $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    $result=mysqli_query($conn, "select * from bulletin");
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
    while ($row=mysqli_fetch_array($result)){
        echo "<tr><td>";
        echo $row["bid"];
        echo "</td><td>";
        echo $row["type"];
        echo "</td><td>"; 
        echo $row["title"];
        echo "</td><td>";
        echo $row["content"]; 
        echo "</td><td>";
        echo $row["time"];
        echo "</td></tr>";
    }
    echo "</table>"
?>
# 佈告欄範例應用
# error_reporting(0)：取消錯誤或警告

# 使用 mysqli_connect() 函數建立資料庫連線
# 使用 mysqli_query() 函數從資料庫查詢資料
# 使用 mysqli_fetch_array() 函數從查詢結果中逐筆讀取資料
# 初始設定為未登入狀態]
# 如果輸入的帳號密碼與資料庫中的相符 
# 登入狀態改為真
