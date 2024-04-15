<?php
    #mysqli_connect() 建立資料庫連結
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    #mysqli_query() 從資料庫查詢資料
    $result=mysqli_query($conn, "select * from user");
    #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
    $row=mysqli_fetch_array($result);
    echo $row["id"] . " " . $row["pwd"]."<br>"; 
    $row=mysqli_fetch_array($result);
    echo $row["id"] . " " . $row["pwd"];
?>
# 使用 mysqli_connect() 函數建立與資料庫的連線
# 使用 mysqli_query() 函數向資料庫發送查詢
# 使用 mysqli_fetch_array() 函數從查詢結果中一次取出一行資料
# 顯示第一行的帳號和密碼
# 再次使用 mysqli_fetch_array() 函數從查詢結果中取出下一行資料
# 顯示第二行的帳號和密碼 
