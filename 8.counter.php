<?php
    session_start();
    if (!isset($_SESSION["counter"]))
        $_SESSION["counter"]=1;
    else
        $_SESSION["counter"]++;

    echo "counter=".$_SESSION["counter"];
    echo "<br><a href=9.reset_counter.php>重置counter</a>";
?>
# 啟動 session
# 如果 $_SESSION["counter"] 未設定，則將其設定為 1；否則將其加一
# 輸出目前的 counter值
# 輸出一個連結，用於重置 counter 的值，連結到 9.reset_counter.php
