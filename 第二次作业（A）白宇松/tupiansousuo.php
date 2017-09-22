<html>
<body>
<div>
<?php
    $page=isset($_GET['page'])?$_GET['page']:0;//从零开始
    $imgnums = 1;    //每页显示的图片数e
    $d = $_POST['12'];
    $dir = "./$d/";  //要获取的目录
    $dir=iconv('UTF-8','GBK',$dir);
    $i = 0;
    $page=isset($_GET['page'])?$_GET['page']:0;
    //先判断指定的路径是不是一个文件夹
    if (is_dir($dir))
    {
        if ($dh = opendir($dir))
        {
            $k = 1;
            while (($file = readdir($dh))!= false)
            {
                //文件名的全路径 包含文件名
                if($file != '.' && $file != '..')
                {
                    $m = ".jpg";
                    $filePath = $dir.$k.$m;
                    $filePath=iconv('GBK','UTF-8',$filePath);
                    $array[] = $filePath;
                    ++$i;
                    $k = $k+1;
                }
            }
       for($j=0;$j<$i;$j++)
       {echo "<img src=".$array[$j]."><br />";
       }
       closedir($dh);
       }
    }
?>
</div>
</body>
</html>