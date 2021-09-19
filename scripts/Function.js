function hidebutton()
{
	 $('#calcubut1').hide();
	  $('#calcubut2').show();
setTimeout(
  function() 
  {
   $('#calcubut1').show(); 
   $('#calcubut2').hide();
  }, 5000);	
}
function calculatemarkbk(url,quesnum,test_id,quiz)
{

var data = {};
for (i=0;i<quesnum;i++)
{
var t=$('input[name=radi]:checked', '#ax'+i).val()	;
if(t!=undefined){data["sans"+i]=t;} else {data["sans"+i]=100;}
// data["mans"+i]=$('#a'+i).val();
data["quesid"+i]=$('#b'+i).val();
}
data['num']=quesnum;
data['test_id']=test_id;
data['quiz']=quiz;

$.ajax({
                    url : url,
                    type : "POST",
					dateType: "jsonp",
                    data : data,
					success : function (data){ 
					
					clearTimeout(setid);
					clearInterval(interval);
					window.onbeforeunload = null;
					$('#maintest').html ("<h3 style='font-family: &#34;Times New Roman&#34;, Georgia, Serif;'> Your score is: "+data+"/"+quesnum+" . </h3> <p>For More Infomations.  <a href='userpage.php' id='butti'>Click here.</a> </p>");
										       },
					error: function(XMLHttpRequest, textStatus, errorThrown) {
					if (XMLHttpRequest.readyState == 4) {
            alert ("HTTP error (can be checked by XMLHttpRequest.status and XMLHttpRequest.statusText)");
						}
					else if (XMLHttpRequest.readyState == 0) {
            alert ("Network error (i.e. connection refused, access denied due to CORS, etc.) Check your connection and try again.");
						}
					else {
            // something weird is happening
						}
    }
                });

}
function calculatemark(url,quesnum,test_id,quiz)
{

var data = {};
for (i=0;i<quesnum;i++)
{
var t=$('input[name=radi]:checked', '#ax'+i).val()	;
if(t!=undefined){data["sans"+i]=t;} else {data["sans"+i]=100;}
// data["mans"+i]=$('#a'+i).val();
data["quesid"+i]=$('#b'+i).val();
}
data['num']=quesnum;
data['test_id']=test_id;
data['quiz']=quiz;

$.ajax({
                    url : url,
                    type : "POST",
					dateType: "jsonp",
                    data : data,
					success : function (data){ 
					
					
					window.onbeforeunload = null;
					window.location.replace("http://192.168.180.193/mmt/index/result.php?id="+data);
										       },
					error: function(XMLHttpRequest, textStatus, errorThrown) {
					if (XMLHttpRequest.readyState == 4) {
            alert ("HTTP error (can be checked by XMLHttpRequest.status and XMLHttpRequest.statusText)");
						}
					else if (XMLHttpRequest.readyState == 0) {
            alert ("Network error (i.e. connection refused, access denied due to CORS, etc.) Check your connection and try again.");
						}
					else {
            // something weird is happening
						}
    }
                });

}

function checkdone(quesnum)
{

var data = {};
for (i=0;i<quesnum;i++)
{
var t=$('input[name=radi]:checked', '#ax'+i).val()	;
ii=i+1;
if (t!=undefined)
{
 $('#li'+ii).addClass("uncheck");
 $('#li'+ii).removeClass("checked"); 
}
else 
{
$('#li'+ii).addClass("checked");
$('#li'+ii).removeClass("uncheck");	
}


}
}	

function callphp(url){
var str = window.location.pathname;

if (str.indexOf('testdo.php') >= 0)	
{ if (confirm('Do you really want to logout? Your job will not be saved!')) {
   logoutf(url);
   $('#maintest').html("<h3> Please login first. Then, choose the test again. </h3>");
   clearTimeout(setid);
	clearInterval(interval);
	window.onbeforeunload = null;
} else {
   
}} else {
logoutf(url);
setTimeout(
  function() 
  {
  location.reload();
  }, 2000);
					}
}

function logoutf(url){

	var data = true;
$.ajax({
                    url : url,
                    type : "POST",
					dateType:"json",
                    data : data,
					success : function (data){
                      if (data==1) {


						
						$('#login').load("../widgets/login_view.php"); 
						 
					 
						 $.notifyDefaults({
	type: 'success',
	placement: {
		from: "bottom"
	},
	animate:{
		enter: "animated fadeInUp",
		exit: "animated fadeOutDown"
	}
});
						 $.notify({
	// options
	message: 'Thank you. See you later!'
},{
	// settings
	type: 'info'
			
});
	  
					  
					  }
						
					       }
                });	
				
}
function loginf(url,uid,pass){

	var data = {     // create object
            uid: $(uid).val(),
			pass: $(pass).val(),
			   }
$.ajax({
                    url : url,
                    type : "POST",
					dateType:"json",
                    data : data,
					success : function (data){
                      if (data==false){
					var meg="Wrong username/password."
					  } else {
						  

				    var meg="Hi "+data+"!. Nice day."
					$('#login').load("../widgets/logout_view.php"); 
					  }
			 
						 $.notifyDefaults({
	type: 'success',
	placement: {
		from: "bottom"
	},
	animate:{
		enter: "animated fadeInUp",
		exit: "animated fadeOutDown"
	}
});
						 $.notify({
	// options
	message: meg
},{
	// settings
	type: 'info'
			
});
				  
						
					       }
                });	
}
function testingf(url,uid,pass){

	var data = {     // create object
            uid: $(uid).val(),
			pass: $(pass).val(),
			   }
$.ajax({
                    url : url,
                    type : "POST",
					dateType:"json",
                    data : data,
					success : function (data){
 
				  if (data!=false){
alert("OK! FIND YOUR SECRET CODE");			
					       }
	else { alert ("WRONG USER/PASS");}
						
					       }
                });	
}
function changepassword(url,uid,pass,conf){

	var data = {     // create object
            uid: uid,
			pass: $(pass).val(),
			conf: $(conf).val(),
			   }
$.ajax({
                    url : url,
                    type : "POST",
					dateType:"json",
                    data : data,
					success : function (data){
                     		alert (data);
location.reload();							
					       }
                });	
}