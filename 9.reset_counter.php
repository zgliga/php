<?php
    session_start();
    unset($_SESSION["counter"]);
    echo "counter重置成功....";
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>"; //返回計數

?>
# 開始 session
# 刪除 session 中的計數器
#　顯示重置成功訊息
＃重新導向到8.counter.php頁面
