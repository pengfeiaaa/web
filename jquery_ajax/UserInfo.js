// JavaScript Document

var data=[
	{
		"name":"小明",
		"sex":"男",
		"email":"123@123.com"
		},
	{
		"name":"小花",
		"sex":"女",
		"email":"178@@789.com"
		}
];

var strHTML = "";
$.each(data,function(){
	strHTML += "姓名" + this["name"] + "<br>";
	strHTML += "性别" + this["sex"] + "<br>";
	strHTML += "邮箱" + this["email"] + "<hr>";
	})
$("#divTip").html(strHTML);