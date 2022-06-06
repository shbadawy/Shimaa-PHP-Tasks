<?php
//# Shimaa Badawy
//# Task1: Next Char
$a="a";
$z="z";
echo substr(++$a,0,1) . "\n";
echo substr(++$z,0,1) . "\n";

// Task #2
$link = "http://www.example.com/5478631";
echo substr($link,strrpos($link,"/")+1). "\n";

// Task #3
$tag = '<div id="container">';
$tagText = substr($tag,strpos($tag,"id")+3) ;
$tagValue = substr($tagText, strpos($tagText,'"')+1, strrpos($tagText,'"')-1);
echo $tagValue;
