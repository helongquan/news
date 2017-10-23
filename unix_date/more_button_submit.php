 <html>
 <head><title></title></head>
 <body>
 <form action="<?php print("$PHP_SELF"); ?>" method="get">
 <input type="text" name="text1">
 <input type="submit" name="sub" value="s1"><br/>
 <input type="text" name="text2">
 <input type="submit" name="sub" value="s2">
 </form>
 </body>
 </html>
<?php
if (isset($_GET['text1'])) {
 $sub=$_GET['sub'];
 $text1=$_GET['text1'];
 $text2=$_GET['text2'];
 echo $sub."<br>\n";
 if ("s1"==$sub)
 {
  echo "s1提交的內容:".text1."<br>";
 }else if ("s2"==$sub)
 {
  echo "s2提交的內容:".text2."<br/>";
 }
}
if (isset($_GET['text2'])) {
 echo $sub."<br>\n";
 if ("s1"==$sub)
 {
  echo "s1提交的內容:".text1."<br>";
 }else if ("s2"==$sub)
 {
  echo "s2提交的內容:".text2."<br/>";
 }
}
 ?>