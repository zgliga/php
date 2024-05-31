<html>
    <head>
        <!-- 網頁標題 -->
        <title>明新科技大學資訊管理系</title>
        <!-- 設定網頁編碼 -->
        <meta charset="utf-8">
        <!-- 引入 FlexSlider CSS -->
        <link href="https://cdn.bootcss.com/flexslider/2.6.3/flexslider.min.css" rel="stylesheet">
        <!-- 引入 jQuery -->
        <script src="https://cdn.bootcss.com/jquery/2.2.2/jquery.min.js"></script>
        <!-- 引入 FlexSlider JavaScript -->
        <script src="https://cdn.bootcss.com/flexslider/2.6.3/jquery.flexslider-min.js"></script>        
        <script>
            // 當頁面載入完成後執行
            $(window).load(function() {
                // 初始化 FlexSlider
                $('.flexslider').flexslider({
                    animation: "slide",  // 播放動畫效果
                    rtl: true  // 從右到左播放
                });
            });
        </script>
        <style>
            /* CSS 樣式設定 */

            /* 全域設定 */
            *{
                margin:0;
                color:gray;
                text-align:center;
            }
            /* top */
            .top{
                background-color: white;
            }
            /* top 內容設定 */
            .top .container{
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding:10px;
            }
            /* Logo 設定 */
            .top .logo{
                font-size: 35px;
                font-weight: bold;
            }
            .top .logo img{
                width: 100px;
                vertical-align: middle;
            }
            /* Top Navigation 設定 */
            .top .top-nav{
                font-size: 25px;
                font-weight: bold;       
            }
            .top .top-nav a{
                text-decoration: none;
            }
            /* nav */
            .nav {
                background-color:#333;
                display: flex;
                justify-content: center;
            }
            .nav ul {
                list-style-type: none;  
                margin: 0; 
                padding: 0; 
                overflow: hidden; 
                background-color: #333; 
            }
            .nav li {
                float: left; 
            }
            .nav li a {    
                display: block;  
                color: white;  
                text-align: center;  
                padding: 14px 16px;  
                text-decoration: none;  
            }
            .nav li a:hover {
                background-color: #111; 
            }
            /*下拉式選單*/
            .dropdown:hover .dropdown-content {
                display: block;   /*使用block呈現上下排列*/
            }
            li.dropdown:hover{
                background-color: #333;  /*設定背景顏色*/
            }
            .dropdown-content {  /*設定下拉選單內容格式*/
                display: none;
                position: absolute;
                background-color: #333;
                min-width: 160px;
                z-index: 1;
            }
            .dropdown-content a {/*設定下拉選單連結內容格式*/
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                text-align: left;
            }
            /* slider */
            .slider{
                background-color: black;
            }
            /* banner*/
            .banner{
                background-image: linear-gradient(#ABDCFF,#0396FF);
                padding:30px;
            }
            .banner h1{
                padding: 20px;
            }        
            /*faculty*/
            .faculty {
                display: block;
                justify-content: center;
                background-color:white;
                padding:40px;
            }
            .faculty h2 {
                font-size: 25px;
                color: rgb(50,51,52);
                padding-bottom:40px;
            }
            .faculty .container {
                display: flex;
                justify-content: space-around;
                align-items: center;
            }
            .faculty .teacher{
                display:block;
                text-decoration: none;
            }
            .faculty .teacher img{
                height: 200px;
                width: 200px;
            }
            .faculty .teacher h3{
                color: White;
                background-color: rgba(39,40,34,.500);
                text-align: center;           
            }
            /*contact*/
            .contact {
                display: block;
                justify-content: center;
                margin-top: 30px;
                margin-bottom: 30px;                
            }
            .contact h2{
                color: rgb(54, 82, 110);
                font-size: 25px;
            }
            .contact .infos{
                display:flex;
                margin-top: 30px; 
                justify-content: center;
            }
            .contact .infos .left{
                display:block;
                text-align: left;
                margin-right: 30px;
            }
            .contact .infos .left b{
                display:block;
                text-align: left;
                margin-top: 10px;
                text-decoration: bold;
                color: Gray;
                font-size: 18px;
                line-height: 18px;
            }
            .contact .infos .left span{
                display:block;
                text-align: left;
                margin-top: 10px;
                color: rgba(39,40,34,0.5);
                font-size: 16px;
                padding-left: 27px;
            }
            .contact .infos .right{
                height: 200px;               
            }
            .contact .infos .right iframe{
                width: 100%;
                height: 100%;
                border: 1px solid rgba(39,40,34,0.50);
            }
            /*footer*/
            .footer{
                display: flex;
                justify-content: center;
                background-color: rgb(25,26,30);
                padding: 30px 0;
            }
            /*登入畫面css*/
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                right: 50;
                top: 50;
                width: 20%; /* Full width */
                height: 20%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgba(255,255,255,0.9); /* Black w/ opacity */
                padding-top: 50px;
            }  /*登入畫面css*/
            /*佈告欄*/
           
