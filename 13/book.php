<?php
session_start();
$info=$_SESSION['info']??[];

echo "The book $info[title] added SUCCESSFULLY !!<br/>";
echo "The author name is : $info[author].<br/>";
echo"This book was born on:$info[year]<br/>";
#book type
if($info["book_type_id"]==='1')
{
    echo "This book type is :ART<br/>";
}
if($info["book_type_id"]==='2')
{
    echo "This book type is :Science<br/>";
}
if($info["book_type_id"]==='3')
{
    echo "This book type is :Horror<br/>";
}
#book languages
$lang=implode(",",$info['language']);
echo "This book is published in :$lang";
