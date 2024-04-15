<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;
     }
   } 
   if ($login==TRUE)
     echo "登入成功";
  else
     echo "帳號/密碼 錯誤";
?>
 # 使用 mysqli_connect() 函數建立資料庫連線
# 使用 mysqli_query() 函數從資料庫查詢資料
# 使用 mysqli_fetch_array() 函數從查詢結果中逐筆讀取資料
# 初始設定為未登入狀態
# 如果輸入的帳號密碼與資料庫中的相符
# 登入狀態改為真
