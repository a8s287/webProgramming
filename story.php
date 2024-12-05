<?php
    session_start(); 
    $filename="str"."1".".txt";
   //要讀寫檔的文字檔檔名
    if(($_GET['mug']==NULL||$_GET['filename']==NULL)&&!file_exists($filename)){//檢查從upload上傳的文字路徑是否為空值，若為空值，且不存在可讀寫的文字檔就導回LOGIN頁面
        //echo $_GET['mug'],$_GET['filename'];
      
         echo "<script>alert('此頁面尚未上傳照片1');location.href ='login.php';</script>";
        
      //  echo "in";
    }
    if($_SESSION['id']!=1&&!file_exists($filename)){//檢查若不是從登入頁面進來，又不存在可讀寫的檔案，就跳回登入頁面
        echo "<script>alert('此頁面尚未上傳照片2');location.href ='login.php';</script>";
        
    
    }
   /* if($_GET['mug']==0||$_GET['filename']==0){
        header("Location: login.php");
    }*/
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300&display=swap');
        @media only screen and (max-width: 1000px) {
            td>#p1 {
           
           font-family: 'Noto Sans TC', sans-serif;
           color:rgba(0, 0, 0, 0.425);
           font-size: 15px;
           }
       #header2{
           height:100%;
           margin-left: 15%;
       }
       #head{
           position: fixed;
           background-color: #A6BAC7;
           width:100%;
           height:8%;
           margin: 0px;
           border-width:0px 0px 3px 0px; 
           border-style:solid;
           border-color: #72788A ;
           z-index: 3;
       }
       #home{
           position: absolute;
           right: 25%;
           height: 80%;
           margin-right: 10px;
           top:10%;
       }
       #like{
           position:absolute;
           right:20%;
           margin-left: 10px;
          height: 80%;
          top:10%;
       }
       #hospital{
           position:absolute;
           right:15%;
           margin-left: 10px;
          height:80%;
          top:10%;
       }
       #profile{
           position:absolute;
           right:10%;
           margin-right: 10px;
           top:10%;
          height: 80%;
           
           border-radius: 999em;
       }
       #limited{
           position: relative;
           margin-top:10%;
           margin-left: 15%;
           width: 700px;
          
           height: 80px;
       }
       #limited>#button{
           position: absolute; 
           height: 50%;
          right: 1%;
           top:30%;
           border:none;
           opacity: 1;
       }
       #limited_profile{
           position:relative;
           height:100%;
           border-radius: 999em;
           border-style: solid;
           border-color: #72788A ;
           border-width:2px;
           margin-left: 10px;
           margin-top: 5px;
          
       }
       #put_profile{
           position: absolute;
           top:16%;
           left:15%;
           height:60px;
           width:50%;
           
          
       }
       #story{
           position: relative;
           margin-top:100px;
           margin-bottom: 50px;
           margin-left: 15%;
           width: 700px;
           height: 700px;
           background-color: rgb(249, 253, 255);
           border-radius: 0.2em;
           border-style: solid;
           border-color: #72788A ;
           border-width:1px;
           
       }
       #mug_shot{
           position: absolute;
           width: 100%;
           height: 10%;
           border-bottom: solid;
           border-color: #72788A ;
           border-width:1px;
       }
       #mug{
           position: absolute;
           left:2%;
           margin-left: 10px;
           top:10%;
          height: 80%;
           
           border-radius: 999em;
       }
       #mug_shot>#dog{
           position: absolute;
           top: 0%;
           left: 15%;
           font-size: 120%;
           margin-left: 10px;
           font-family: Trebuchet MS;
       }
       #picture{
           position: absolute;
           width: 100%;
           top:10%;
           height: 60%;
           
       }
       #im{
           position: absolute;
           width: 100%;
           height: 100%;
       }
       #response{
           position: absolute;
           width: 100%;
           height: 7%;
           top: 70%;
           border-bottom: solid;
           border-color: #72788A ;
           border-width:1px;
       }
       #heart{
           position: absolute;
          left: 2%;
          height: 100%;
          top:0%;
          margin-right: 10px;
       }
       #message{
           position: absolute;
           left: 13%;
           height: 80%;
           width: 7%;
           top:10%;
           margin-right: 10px;
       }
       #likeby{
           position: absolute;
           width: 100%;
           height: 3%;
           top: 77%;
          
       }
       #likebysomeone{
           position: absolute;
           font-size: 15px;
           left: 3%;
           top:-40%;
           font-family: Trebuchet MS;
       }
       #article{
           position: absolute;
           width: 100%;
           height: 10%;
           top: 80%;
       }
      
       #article_{
           position: absolute;
           font-size: 20px;
           left: 3%;
           top:0%;
           font-family: 'Noto Sans TC', sans-serif;
           
       } 
       #article_>strong{font-family: Trebuchet MS;}
       #comment{
           position: absolute;
           width: 100%;
           height: 10%;
           top: 90%;
       }
       #comment_{
           position: absolute;
           font-size: 20px;
           left: 3%;
           top:0%;
           color:rgba(0, 0, 0, 0.308);
           font-family: Trebuchet MS;
       }
       tr{
           padding: -1px;
       }
       td{
           padding: 0px;
       }
      
       
        #right{
           position: fixed;
           top:2%;
           right: 7%;
           left: 25%;
           width: 50%;
           height: 100px;
       }
       #profile2{
           position:absolute;
           left:0%;
          height: 100%;
           
           border-radius: 999em;
       }
       td>#p1{
           
           font-family: 'Noto Sans TC', sans-serif;
          color:rgba(0, 0, 0, 0.425);
          font-size: 15px;
       }
        #ip{
            position:absolute; font-family: Trebuchet MS; left:60px;
        }
        }
        @media only screen and (min-width: 1000px) {
        td>#p1 {
           
            font-family: 'Noto Sans TC', sans-serif;
            color:rgba(0, 0, 0, 0.425);
            font-size: 15px;
            }
        #header2{
            height:100%;
            margin-left: 15%;
        }
        #head{
            position: fixed;
            background-color: #A6BAC7;
            width:100%;
            height:8%;
            margin: 0px;
            border-width:0px 0px 3px 0px; 
            border-style:solid;
            border-color: #72788A ;
            z-index: 3;
        }
        #home{
            position: absolute;
            right: 25%;
            height: 80%;
            margin-right: 10px;
            top:10%;
        }
        #like{
            position:absolute;
            right:20%;
            margin-left: 10px;
           height: 80%;
           top:10%;
        }
        #hospital{
            position:absolute;
            right:15%;
            margin-left: 10px;
           height:80%;
           top:10%;
        }
        #profile{
            position:absolute;
            right:10%;
            margin-right: 10px;
            top:10%;
           height: 80%;
            
            border-radius: 999em;
        }
        #limited{
            position: relative;
            margin-top:10%;
            margin-left: 15%;
            width: 700px;
           
            height: 80px;
        }
        #limited>#button{
            position: absolute; 
            height: 50%;
           right: 1%;
            top:30%;
            border:none;
            opacity: 1;
        }
        #limited_profile{
            position:relative;
            height:100%;
            border-radius: 999em;
            border-style: solid;
            border-color: #72788A ;
            border-width:2px;
            margin-left: 10px;
            margin-top: 5px;
           
        }
        #put_profile{
            position: absolute;
            top:16%;
            left:15%;
            height:60px;
            width:50%;
            
           
        }
        #story{
            position: relative;
            margin-top:100px;
            margin-bottom: 50px;
            margin-left: 15%;
            width: 700px;
            height: 700px;
            background-color: rgb(249, 253, 255);
            border-radius: 0.2em;
            border-style: solid;
            border-color: #72788A ;
            border-width:1px;
            
        }
        #mug_shot{
            position: absolute;
            width: 100%;
            height: 10%;
            border-bottom: solid;
            border-color: #72788A ;
            border-width:1px;
        }
        #mug{
            position: absolute;
            left:2%;
            margin-left: 10px;
            top:10%;
           height: 80%;
            
            border-radius: 999em;
        }
        #mug_shot>#dog{
            position: absolute;
            top: 0%;
            left: 15%;
            font-size: 120%;
            margin-left: 10px;
            font-family: Trebuchet MS;
        }
        #picture{
            position: absolute;
            width: 100%;
            top:10%;
            height: 60%;
            
        }
        #im{
            position: absolute;
            width: 100%;
            height: 100%;
        }
        #response{
            position: absolute;
            width: 100%;
            height: 7%;
            top: 70%;
            border-bottom: solid;
            border-color: #72788A ;
            border-width:1px;
        }
        #heart{
            position: absolute;
           left: 2%;
           height: 100%;
           top:0%;
           margin-right: 10px;
        }
        #message{
            position: absolute;
            left: 13%;
            height: 80%;
            width: 7%;
            top:10%;
            margin-right: 10px;
        }
        #likeby{
            position: absolute;
            width: 100%;
            height: 3%;
            top: 77%;
           
        }
        #likebysomeone{
            position: absolute;
            font-size: 15px;
            left: 3%;
            top:-40%;
            font-family: Trebuchet MS;
        }
        #article{
            position: absolute;
            width: 100%;
            height: 10%;
            top: 80%;
        }
       
        #article_{
            position: absolute;
            font-size: 20px;
            left: 3%;
            top:0%;
            font-family: 'Noto Sans TC', sans-serif;
            
        } 
        #article_>strong{font-family: Trebuchet MS;}
        #comment{
            position: absolute;
            width: 100%;
            height: 10%;
            top: 90%;
        }
        #comment_{
            position: absolute;
            font-size: 20px;
            left: 3%;
            top:0%;
            color:rgba(0, 0, 0, 0.308);
            font-family: Trebuchet MS;
        }
        tr{
            padding: -1px;
        }
        td{
            padding: 0px;
        }
       
        
         #right{
            position: fixed;
            top:2%;
            right: 7%;
            left: 25%;
            width: 50%;
            height: 100px;
        }
        #profile2{
            position:absolute;
            left:0%;
           height: 100%;
            
            border-radius: 999em;
        }
        td>#p1{
            
            font-family: 'Noto Sans TC', sans-serif;
           color:rgba(0, 0, 0, 0.425);
           font-size: 15px;
        }
         #ip{
            position:absolute; font-family: Trebuchet MS; left:60px;
         }
        }
        #st{
            position: fixed;
            top:10%;
            left:25%;
            height:80%;
            width:50%;

        }
        #leftB{
            position: fixed;
            width:5%;
            left:20%;
            top:60%;
        }
        #rightB{
            position: fixed;
            width:5%;
            right:20%;
            top:60%;
        }
        #close{
            position: fixed;
            width:5%;
            right:15%;
            top:10%;
        }
        button{
            position:relative;
            border: 0ch;
            height:0em;
            width:0%;
        }
        #k1{
            position: fixed;
            right:55%;
            top:90%;
            height:10%;
            background:#EFF2F5;
        }
        #k2{
            position: fixed;
            left:55%;
            top:90%;
            height:10%;
            background:#EFF2F5;
        }
    </style>
    
</head>
<?php
    //若是從upload頁進來的，則要寫入txt檔
    if($_SESSION['upl']){
    if(($_GET['mug']==NULL||$_GET['filename']==NULL)&&!file_exists($filename));
    else{
        if($_SESSION['id']!=1&&!file_exists($filename));
        else{
             $file = fopen("str1.txt","a+");
            if(!is_null($_GET['mug'])){//是否要寫入大頭貼
             fwrite($file,$_GET['mug']);
             fwrite($file," ");
             }
             fwrite($file,$_GET['filename']);
             fwrite($file," ");
             fclose($file);
            }
    }
    }
    $file=fopen("str1.txt","r");//從txt檔讀檔
    $string="";
    $a=0;
    if($file!=NULL){
        while(!feof($file)){
                $string.=fgets($file);
        }
        fclose($file);
    }
    $string.="+";//存入的字串中有+代表結束
   // echo $string;
    /*while(1){
       if( )=="+")break;
      //  echo $a;
        
        //$a++;
    }*/
    $str=explode(" ",$string);//用空白來切割字串
    for($i;$i<count($str);$i++){
       // echo $str[$i]."</br>";
    }
      
   
        

    ?>
<body style="margin:0px; background-color:#EFF2F5;  ">
    <div id="right">
    <table >
    <tbody>
        <tr>
            <td style="position:absolute;width: 100%;height: 50%;">
                <image id="profile2" src="<?=$str[0]    //從切割的字串陣列中取出字串 ?>"></image>
                <p id="ip" ><strong><?=$_GET['id'] ?></strong></p>
                <p id="date" style="position:absolute; font-family: Trebuchet MS;right:10%; color:rgba(0, 0, 0, 0.425);"><strong>a8s287</strong></p>
                <script>
                    var date = new Date();
                    document.getElementById("date").innerHTML=date.getHours()+":"+date.getMinutes();
                </script>
            </td>
        </tr>
    </tbody>
    </table>
        
    </div>
    <?php
     if(is_null($_GET['a'])&&is_null($_GET['b']))$g=1;//檢查是不是從下一張上一張按鈕導入
     else {
        if(is_null($_GET['a'])) {//用來判別是下一張還是上一張的按紐
        $g=$_GET['d'];//下一張的話g就++，從d裡面存取原本的g
        //echo$g;
       // echo count($str);
        if($g<count($str)-2)
        $g++;
        }
        else if(is_null($_GET['b'])){//上一張的話g就--，從v裡面存取原本的g
        $g=$_GET['v'];
        //echo$g;
        if($g>1)
        $g--;
        }
     }
     $_SESSION['upl']=0;//代表不是upload頁面來的
    ?>
    <image id="st" src="<?=$str[$g]  //$_GET['filename'] ?>"></image>
    
    <button onclick="location.href='story9.php'"><image id="leftB" src="https://iot.ntue.edu.tw/stProject/electronics/108/2/GP1/report/ESP8266/image/left_B.png" ></image></button>
    <button onclick="location.href='story2.php'"><image id="rightB" src="https://iot.ntue.edu.tw/stProject/electronics/108/2/GP1/report/ESP8266/image/right_B.png" ></image></button>
    <button onclick="window.close();"><image id="close" src="https://iot.ntue.edu.tw/stProject/electronics/108/2/GP1/report/ESP8266/image/close.png" ></image></button>
    <form action="story.php">
    <input type="hidden" name="d" value="<?=$g?>"></input>
    <input type="hidden" name="v" value="<?=$g?>"></input><!--傳送原本的g值-->
    <input id="k1" type="submit" name="a" value="上一張"></input>
    <input id="k2" type="submit" name="b" value="下一張"></input>
    </form>
     
    </body>
</html>