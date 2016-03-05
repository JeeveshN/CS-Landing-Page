<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
 class rss {
     var $feed;

  function rss($feed) 
    {   $this->feed = $feed;  }
 
  function parse() 
    {
    $rss = simplexml_load_file($this->feed);
    
    $rss_split = array();
	$i=0;
	json_encode($rss->channel->item);
    foreach ($rss->channel->item as $item) {
	
    $title = (string) $item->title; // Title
    $link   = (string) $item-> link; // Url Link
    $pubDate = (string) $item->pubDate; //Description
    $rss_split[] = '<class>'.$this->dispassimg($link).'<br></div>'.'<a href="'.$link.'">'.$title.'</a>.<br>.</class>';
		}
    
    return $rss_split;
  }
  function display($numrows,$head) 
  {
    $rss_split = $this->parse();
    $i = 0;
	    $rss_data =$head."<br>";
          
    while ( $i < $numrows ) 
   {
      $rss_data .= $rss_split[$i];
      $i++;
    }
 
    return $rss_data;
  }
  function dispassimg($url)
  { 
$words=explode("/",$url);
$category=$words[3];
if($category=='notices')
return '<img src="img/1_important-notice-md.png" alt="notices" >'.'</img>';
if($category=='results')
return '<img src="img/result.png" alt="result" >'.'</img>';
if($category=='datesheets')
return '<img src="img/datesheets.jpg" alt="datesheet" >'.'</img>';
  }
  
}

?>

</body>
</html>
