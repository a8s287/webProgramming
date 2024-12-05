<html>
<!--------網頁模板參考darkcode-------->
    <?php
        session_start();

        if($_SESSION["user"] != $_COOKIE["user"]) //登入逾時
        {
            echo "<script>alert('登入逾時，回到登入畫面');location.href ='LogIn Form/login.php';</script>";//coockie不存在了，登入逾時
        }
       // echo $_SESSION["dirname"];
        
        mkdir("./".$_SESSION["dirname"], 0700);//建立使用者資料夾
        mkdir("./".$_SESSION["dirname"]."/mug", 0700);//建立大頭貼資料夾
       
        move_uploaded_file($_FILES["file"]["tmp_name"],$_SESSION["dirname"]."/mug/".$_FILES["file"]["name"]);
        //上傳照片到使用者資料夾的大頭貼資料夾中
        $_SESSION["user"] =  $_COOKIE["user"];
        $_SESSION["page"] = "update";

    ?>
        <style>
            .btn{
                width:              200px;
                height:              60px;
                background:          none;
                border:         4px solid;
                color:            #3498db;
                font-weight:          700;
                text-transform: uppercase;
                cursor:           pointer;
                font-size:           16px;
            }
            p{
                font-family: 'Noto Sans TC', sans-serif;

            }
        </style>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style="margin:0px; background-color:#EFF2F5; ">
    <form action="update.php" method="post" enctype="multipart/form-data" >
    <p>檔案名稱:</p><input class="btn" type="file" name="file" id="file" accept="image/gif, image/jpeg, image/png"/><br/>
    <button class="btn" type="submit" name="submit" onclick="location.href='index.php'"><p>上傳檔案</p></button>
    </form>

 
    </body>
</html>