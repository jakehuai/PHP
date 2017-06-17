<html> 
<head> 
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
   <title>Files</title> 
</head>
<body> 
   
   <?php 
   $uploaddir="C:./abc/www/test";  
   
   $i=sum($_FILES["uploadfile"]["name"]);
   for ($j=0 ; $j<$i ; $j++) 
   { 

      $tmpfile=$_FILES["uploadfile"]["tmp_name"][$b]; 

         $file2=mb_convert_encoding($_FILES["uploadfile"]["name"][$b],"big5","utf8"); 

         
         if(move_uploaded_file($tmpfile,$uploaddir.$file2)) 
     { 
            echo "Upload OK<br>"; 
            echo "Files Name：".$_FILES["uploadfile"]["name"][$b]."<br>"; 
     
      } 
     else 
      { 
             echo "Upload Failed!<br> "; 
        ;  
      } 
   } 
   ?> 
</body> 
</html>
