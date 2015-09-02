<?php
	/* 此页面用来处理用户发表的评论及相关信息 生成xml文件*/
$user  = urldecode($_GET["user"]);
$comment  = urldecode($_GET["comment"]);
$dateTime = date('Y-m-d H:i:s',time());

$xmlDoc = new DOMDocument();
$xmlDoc->load('NewsInfo.xml');

$InfoXml = $xmlDoc->getElementsByTagName("Info")->item(0);

 
$NewsXml = $xmlDoc->createElement("News");
$NewsXml = $InfoXml->appendChild($NewsXml);

$CommentXml = $xmlDoc->createElement("comment");
$CommentXml = $NewsXml->appendChild($CommentXml);

$UserXml = $xmlDoc->createElement("user");
$UserXml = $NewsXml->appendChild($UserXml);

$DateXml = $xmlDoc->createElement("date");
$DateXml = $NewsXml->appendChild($DateXml);

$CommentXml->appendChild($xmlDoc->createTextNode($comment));
$UserXml->appendChild($xmlDoc->createTextNode($user));
$DateXml->appendChild($xmlDoc->createTextNode($dateTime));

$xmlDoc->save("NewsInfo.xml");
?>