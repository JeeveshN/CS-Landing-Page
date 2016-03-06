<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<div>
 <table cellspacing="100" style="width:100%">
  <tr>
  <?php
  include("takefeed.php");
  $feedlist = new rss('http://updates.collegespace.in/feed/');
  $fullfeed=$feedlist->display(4,"updates");
 $frag= explode('<class>',$fullfeed);
 echo '<th>'.$frag[1].'</th>'.'<th>'.$frag[2].'</th>'.'<th>'.$frag[3].'</th>'.'<th>'.$frag[4].'</th>';
 
  ?> 
  
  </tr>
  </table>
  </div>

</body>
</html>
