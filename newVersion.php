<?php
require('connection.php');
session_start();
//unset($_SESSION["book"]);
$_SESSION['book']=array();
//session_destroy();

//session_unset();
?> 

<!DOCTYPE html>


<html lang="en">
  <head>
  
  	<link rel="stylesheet" href="GO/app/assets/css/vendor.css" />
    <link rel="stylesheet" href="GO/app/assets/css/style.css" />
    <script src="GO/app/assets/js/vendor.js"></script>
    <script src="GO/app/assets/js/app.js"></script>
   
  <script src="app.js"></script>
<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          
<style>
    body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
/* Button used to open the contact form - fixed at the bottom of the page */
.view {
  /* background-color: #555;
  color: white;
  padding: 16px 20px;
  border: 16px 20px;
  cursor: pointer;
  opacity: 0.8;
  position: relative;
  top: 19px;

  bottom: 23px;
  right: 28px;
  left: 28px;

  width: 280px; */
  background-color: #8B008B; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
.open-button {
  /* background-color: #555;
  color: white;
  padding: 16px 20px;
  border: 16px 20px;
  cursor: pointer;
  opacity: 0.8;
  position: relative;
  top: 19px;

  bottom: 23px;
  right: 28px;
  left: 28px;

  width: 280px; */
  background-color: #054282; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed  ;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
    .currentPage{
        border-bottom: 3px solid  #4829B2;
    }
    .input-group-addon{
        border-left : 1px solid LightGray;
        border-top : 1px solid LightGray;
        border-bottom : 1px solid LightGray;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
        color: #b4b4b4;
        align-items: center;
        text-align: center;
        font-size: 20px;
        padding: 3px;

    }
    #keyWordSearchBar{
        border-style: none;
    }
    .keyWordSearchBar{
        border-right : 1px solid LightGray;
        border-top : 1px solid LightGray;
        border-bottom : 1px solid LightGray;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
    }
	</style>
        <style> 
        .custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  background-color: DodgerBlue;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
        .custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  background-color: DodgerBlue;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}
.alert {
  padding: 20px;
  background-color: green;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
                #dd {
                  /* background-image: url(img_flwr.gif), url(paper.gif); */
                  background-position: right bottom, left top;
                  /* background-color: navajowhite; */
                  background-repeat: no-repeat, repeat;
                  padding: 0.1 px;
                }
                div, body, input, p {
                    position: relative;
                }
                table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
                button {
  background-color: burlywood; 
  color: black; 
  border: 0.1px slateblue;
  size: 20px;
}

button:disabled,
button[disabled]{
  border: 1px solid #999999;
  background-color: #cccccc;
  color: #666666;
}
  
  </style>
                
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
 
<script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>

<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css" />
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
 
<script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>

<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css" />

               <script>
                   function sub3(){
    var co=document.getElementById('reemail1').value;
    if(co==""){
        alert("nul");
    }
    var data1='coid='+co;
    $.ajax({
        type:"post",
        url:"you2.php",
        data:data1,
        cache:false,
        success: function(html){
            alert("123");
        alert(co);   
        }

    });
    alert("hi");
var user_name = $("#rename1").val();
			var user_email = $("#reemail1").val();
			var user_insit = $("#reinstituation1").val();
		
			// step 2 put it in json object
           var myObj = {"name": user_name, "email": user_email, "insit": user_insit};
			// step 3 send "post" ajax
			$.ajax({
				type: "POST",
				url: "submit.php",
				data:  myObj,
				dataType: 'json',
				success: function(data) {  
					alert ( data.value);
				///	window.open("index.html");
				},
				error: function(xhr,textStatus,err)
				{
					alert("readyState: " + xhr.readyState);
					alert("responseText: "+ xhr.responseText);
					alert("status: " + xhr.status);
					alert("text status: " + textStatus);
					alert("error: " + err);
				}
			});
            return false;
}
                   function sub2(){
    var co=document.getElementById('email1').value;
    if(co==""){
        alert("nul");
    }
    var data1='coid='+co;
    $.ajax({
        type:"post",
        url:"you2.php",
        data:data1,
        cache:false,
        success: function(html){
            alert("hi");
        alert(co);   
        }

    });
    alert("hi");
var user_name = $("#name1").val();
			var user_email = $("#email1").val();
			var user_insit = $("#instituation1").val();
		
			// step 2 put it in json object
           var myObj = {"name": user_name, "email": user_email, "insit": user_insit};
			// step 3 send "post" ajax
			$.ajax({
				type: "POST",
				url: "submit.php",
				data:  myObj,
				dataType: 'json',
				success: function(data) {  
					alert ( data.value);
				///	window.open("index.html");
				},
				error: function(xhr,textStatus,err)
				{
					alert("readyState: " + xhr.readyState);
					alert("responseText: "+ xhr.responseText);
					alert("status: " + xhr.status);
					alert("text status: " + textStatus);
					alert("error: " + err);
				}
			});
            return false;
}
function sub(){
    var co=document.getElementById('email1').value;
    if(co==""){
        alert("nul");
    }
    var data1='coid='+co;
    $.ajax({
        type:"post",
        url:"you2.php",
        data:data1,
        cache:false,
        success: function(html){
            alert("hi");
        alert(co);   
        }

    });
    alert("hi");
var user_name = $("#name1").val();
			var user_email = $("#email1").val();
			var user_insit = $("#instituation1").val();
		
			// step 2 put it in json object
           var myObj = {"name": user_name, "email": user_email, "insit": user_insit};
			// step 3 send "post" ajax
			$.ajax({
				type: "POST",
				url: "submit.php",
				data:  myObj,
				dataType: 'json',
				success: function(data) {  
					alert ( data.value);
				///	window.open("index.html");
				},
				error: function(xhr,textStatus,err)
				{
					alert("readyState: " + xhr.readyState);
					alert("responseText: "+ xhr.responseText);
					alert("status: " + xhr.status);
					alert("text status: " + textStatus);
					alert("error: " + err);
				}
			});
            return false;
}
                     function openForm() {
     document.getElementById("myForm").style.display = "block";
   }
   
   function closeForm() {
     document.getElementById("myForm").style.display = "none";
   }
   function openForm2() {
     document.getElementById("myForm2").style.display = "block";
   }
   
   function closeForm2() {
     document.getElementById("myForm2").style.display = "none";
   }
   function openForm3() {
     document.getElementById("myForm3").style.display = "block";
   }
   
   function closeForm3() {
     document.getElementById("myForm3").style.display = "none";
   }
   function chk3(){
    
       var co=document.getElementById('email').value;
       if(co==""){
           alert("nul");
       }
       var data1='coid='+co;
       $.ajax({
           type:"post",
           url:"you2.php",
           data:data1,
           cache:false,
           success: function(html){
               alert("hi");
           alert(co);   
           }
   
       });
       return false;
   }
   function chk4(){
    
    var co=document.getElementById('email1').value;
    if(co==""){
        alert("nul");
    }
    var data1='coid='+co;
    $.ajax({
        type:"post",
        url:"you2.php",
        data:data1,
        cache:false,
        success: function(html){
            alert("hi");
        alert(co);   
        }

    });
    return false;
}
                   function chk(){
    var co=document.getElementById("co1").value;
    var data1='coid='+co;
    $.ajax({
        type:"post",
        url:"you.php",
        data:data1,
        cache:false,
        success: function(html){
        alert("yes baby");   
        }

    });
    return false;
}
function secondchk(){
    var co=document.getElementById("co").value;
    
    var data1='coid='+co;
    $.ajax({
        type:"post",
        url:"you.php",
        data:data1,
        cache:false,
        success: function(html){
        alert("yes baby");   
        }

    });
    return false;
}
function chk2(){
    var co=11;//the reid of the researcher who applying this outcome
    var data1='coid='+co;
    $.ajax({
        type:"post",
        url:"you.php",
        data:data1,
        cache:false,
        success: function(html){
        alert("yes baby");   
        }

    });
    return true;
}
                    $(function(){
                        $("#saved").click(function(){
                            $("#table").dialog({
                            
                                width: 650,
                                height: 500,
                                modal: true,
                                buttons: {
                                    close:
                                    function(){
                                        
                                        $(this).dialog('close');
                                    }
                                }
                            });
                        });
                    });
                    $(function(){
                        $("#savedre").click(function(){
                            $("#tablere").dialog({
                            
                                width: 650,
                                height: 500,
                                modal: true,
                                buttons: {
                                    close:
                                    function(){
                                        
                                        $(this).dialog('close');
                                    }
                                }
                            });
                        });
                    });
                    $(function(){
                        $("#savedch").click(function(){
                            $("#tablech").dialog({
                            
                                width: 650,
                                height: 500,
                                modal: true,
                                buttons: {
                                    close:
                                    function(){
                                        
                                        $(this).dialog('close');
                                    }
                                }
                            });
                        });
                    });
                    function lightbg_clr() {
	$('#qu').val("");
	$('#textbox-clr').text("");
 	$('#search-layer').css({"width":"auto","height":"auto"});
	$('#livesearch').css({"display":"none"});	
	$("#qu").focus();
 };
 
function fx(str)
{
var s1=document.getElementById("coworker").value;
var xmlhttp;
if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
	document.getElementById("search-layer").style.width="auto";
	document.getElementById("search-layer").style.height="auto";
	document.getElementById("livesearch").style.display="block";
	$('#textbox-clr').text("");
    return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
	document.getElementById("search-layer").style.width="100%";
	document.getElementById("search-layer").style.height="100%";
	document.getElementById("livesearch").style.display="block";
	$('#textbox-clr').text("X");
    }
  }
xmlhttp.open("GET","call_ajax.php?n="+s1,true);
xmlhttp.send();	
}
                             function fill(){
        var year = 1900;
var till = 2019;
var options = "";
for(var y=year; y<=till; y++){
  options += "<option>"+ y +"</option>";
}
document.getElementById("year").innerHTML = options;
document.getElementById("year1").innerHTML = options;
document.getElementById("year2").innerHTML = options;

var year = 1;
var till = 30;
var options = "";
for(var y=year; y<=till; y++){
  options += "<option>"+ y +"</option>";
}

 document.getElementById("edition").innerHTML = options;
}
       $(document).ready(function(){
         
document.getElementById("submit").disabled = true;
       document.getElementById("submitch").disabled = true;
      document.getElementById("submitre").disabled = true;
     // document.getElementById("next").disabled = true;

      //document.getElementById("placek1").innerHTML =
fill();

    $("#authorerr").hide();
    $("yearerr").hide();
 $("#tittleerr").hide();
 $("#puberr").hide();
 $("#blinkerr").hide();
    $("#chauthorerr").hide();
    $("#chtitleerr").hide();
    $("#chpuberr").hide();
    $("#chlinkerr").hide();
    $("#reauthorerr").hide();
    $("#retittleerr").hide();
    $("#jetittleerr").hide();
    $("#volumeerr").hide();
    $("#issuenumerr").hide();

    var authorerr= false;
    var yearerr=false;
    var chauthorerr= false;
    var tittleerr=false;
    var puberr=false;
    var blinkerr=false;
var chtitleerr=false;
var btitleerr=false;
var chpuberr=false;
var chlinkerr=false;
var reauthorerr=false;
var retittleerr=false;
var jetittleerr=false;
var volumeerr=false;
var issuenumerr=false;
var relinkerr=false;
$("#author").focusout(function(){
   checkBookAuthor();
   check1();

});
$("#relink").focusout(function(){
   checkrelink();
   check2();

});
$("#linkb").focusout(function(){
   checklink();
   check1();

});

$("#tittle").focusout(function(){
   checktittle();
   check1();

});
setTimeout(function(){
  $('#alert').remove();
}, 5000);
$("#pubname").focusout(function(){
   checkpubname();
   check1();

});
// $("#coworker").focusout(function(){
//    echo $_SESSION['bworker'];

// });
$("#chauthor").focusout(function(){
   checkchBookAuthor();
   check();
});
$("#chapter").focusout(function(){
   checkchapter();
   check();

});

$("#coworker").focusout(function(){
  $('a').hide();

});
$("#btitle").focusout(function(){
   checkbtitle();
   check();

});
$("#chpub").focusout(function(){
   checkchpub();
   check();

});
$("#chlink").focusout(function(){
   checkchlink();
   check();

});
$("#reauthor").focusout(function(){
   checkreAuthor();
   check2();

});
$("#retitle").focusout(function(){
   checkretittle();
   check2();

});
$("#jetittle").focusout(function(){
   checkjetittle();
   check2();

});
$("#volume").focusout(function(){
   checkvolume();
   check2();

});
$("#issuenum").focusout(function(){
   checkissuenum();
   check2();

});
function next(){
    document.getElementById("next").disabled = false;
   
}
function checkissuenum(){
    var issuenum=$("#issuenum").val();
    if (issuenum==""){
        $("#issuenumerr").html("field is required");
$("#issuenumerr").show();
issuenumerr=false;

}else{
   
        $("#issuenumerr").hide();
        issuenumerr=true;
    if(isNaN(issuenum)){
        $("#issuenumerr").html("Volume must be number");
$("#issuenumerr").show();  
issuenumerr=false;

    }else {
        $("#issuenumerr").hide();
        issuenumerr=true;
    }
} 
}
function checkvolume(){
    var volume=$("#volume").val();
    if (volume==""){
        $("#volumeerr").html("field is required");
$("#volumeerr").show();
volumeerr=false;

}else{
   
        $("#volumeerr").hide();
        volumeerr=true;
    if(isNaN(volume)){
        $("#volumeerr").html("Volume must be number");
$("#volumeerr").show();  
volumeerr=false;

    }else {
        $("#volumeerr").hide();
        volumeerr=true;
    }
}
}
function checkBookAuthor(){
    var regex=/^[a-zA-Z]+$/;
    var authorlength=$("#author").val().length;
    var author=$("#author").val();
    if (author==""){
        $("#authorerr").html("field is required");
$("#authorerr").show();
        authorerr=false;

    }
    else {
        $("#authorerr").hide();
    authorerr=true;
//    if (/[^a-zA-Z ]/.test(author))
//     {
    
//         $("#authorerr").html("Should be a text input with no symbols or numbers");
// $("#authorerr").show();
// authorerr=false;

//          }

    
//    else{
//     $("#authorerr").hide();
//     authorerr=true;
    if(authorlength<5|| authorlength>20){
        $("#authorerr").html("should between 5-20 character");
        $("#authorerr").show();
        authorerr=false;
    }else{
    $("#authorerr").hide();
    authorerr=true;
}

 //}
}

}
function checktittle(){
    var regex=/^[a-zA-Z]+$/;
    var tittlelength=$("#tittle").val().length;
    var tittle=$("#tittle").val();
    if (tittle==""){
        $("#tittleerr").html("field is required");
$("#tittleerr").show();
        tittleerr=false;

    }
    else {
        $("#tittleerr").hide();
        tittleerr=true;
    if (/[^a-zA-Z ]/.test(tittle))
    {
    
        $("#tittleerr").html("Should be a text input with no symbols or numbers");
$("#tittleerr").show();
tittleerr=false;

         }

    
   else{
    $("#tittleerr").hide();
    tittleerr=true;
    if(tittlelength<5|| tittlelength>20){
        $("#tittleerr").html("should between 5-20 character");
        $("#tittleerr").show();
        tittleerr=false;

    }else{
    $("#tittleerr").hide();
    tittleerr=true;
}

 }
}
}
function checkretittle(){
    var regex=/^[a-zA-Z]+$/;
    var retittlelength=$("#retitle").val().length;
    var retittle=$("#retitle").val();
    if (retittle==""){
        $("#retittleerr").html("field is required");
$("#retittleerr").show();
        retittleerr=false;

    }
    else {
        $("#retittleerr").hide();
        retittleerr=true;
    if (/[^a-zA-Z ]/.test(retittle))
    {
    
        $("#retittleerr").html("Should be a text input with no symbols or numbers");
$("#retittleerr").show();
retittleerr=false;
         }

    
   else{
    $("#retittleerr").hide();
    retittleerr=true;
    if(retittlelength<5|| retittlelength>20){
        $("#retittleerr").html("should between 5-20 character");
        $("#retittleerr").show();
        retittleerr=false;

    }else{
    $("#retittleerr").hide();
    retittleerr=true;
}

 }
}
}
function checkjetittle(){
    var regex=/^[a-zA-Z]+$/;
    var jetittlelength=$("#jetittle").val().length;
    var jetittle=$("#jetittle").val();
    if (jetittle==""){
        $("#jetittleerr").html("field is required");
$("#jetittleerr").show();
        jetittleerr=false;

    }
    else {
        $("#jetittleerr").hide();
        jetittleerr=true;
    if (/[^a-zA-Z ]/.test(jetittle))
    {
    
        $("#jetittleerr").html("Should be a text input with no symbols or numbers");
$("#jetittleerr").show();
jetittleerr=false;

         }

    
   else{
    $("#jetittleerr").hide();
    jetittleerr=true;
    if(jetittlelength<5|| jetittlelength>20){
        $("#jetittleerr").html("should between 5-20 character");
        $("#jetittleerr").show();
        jetittleerr=false;

    }else{
    $("#jetittleerr").hide();
    jetittleerr=true;
}

 }
}
}
function checkpubname(){
    var regex=/^[a-zA-Z]+$/;
    var publength=$("#pubname").val().length;
    var pub=$("#pubname").val();
    if (pub==""){
        $("#puberr").html("field is required");
$("#puberr").show();
puberr=false;

    }
    else {
        $("#puberr").hide();
       puberr=true;
    if (/[^a-zA-Z ]/.test(pub))
    {
    
        $("#puberr").html("Should be a text input with no symbols or numbers");
$("#puberr").show();
puberr=false;

         }

    
   else{
    $("#puberr").hide();
    puberr=true;
    if(publength<5|| publength>20){
        $("#puberr").html("should between 5-20 character");
        $("#puberr").show();
        puberr=false;

    }else{
    $("#puberr").hide();
    puberr=true;
 }

 }
}
}

 function checklink(){
     if(! /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test($("#linkb").val())
){
$("#linkerr").html("enter valid url");
        $("#linkerr").show();
         blinkerr=false;

    }else{
    $("#linkerr").hide();
    blinkerr=true;
 }
 }
 function checkrelink(){
     if(! /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test($("#relink").val())
){
$("#relinkerr").html("enter valid url");
        $("#relinkerr").show();
         relinkerr=false;

    }else{
    $("#relinkerr").hide();
    relinkerr=true;
}
 }
   
function checkchBookAuthor(){
    var regex=/^[a-zA-Z]+$/;
    var authorlength=$("#chauthor").val().length;
    var author=$("#chauthor").val();
    if (author==""){
        $("#chauthorerr").html("field is required");
$("#chauthorerr").show();
chauthorerr=false;
    }
    else {
        $("#chauthorerr").hide();
    chauthorerr=true;
//     if (/[^a-zA-Z ]/.test(author))
//     {
    
//         $("#chauthorerr").html("Should be a text input with no symbols or numbers");
// $("#chauthorerr").show();
// chauthorerr=false;
//          }

    
//    else{
//     $("#chauthorerr").hide();
//     chauthorerr=true;
    if(authorlength<5|| authorlength>20){
        $("#chauthorerr").html("should between 5-20 character");
        $("#chauthorerr").show();
        chauthorerr=false;

    }else{
    $("#chauthorerr").hide();
    chauthorerr=true;
}

 //}
}

}
function checkchapter(){
    var regex=/^[a-zA-Z]+$/;
    var chapterlength=$("#chapter").val().length;
    var chapter=$("#chapter").val();
    if (chapter==""){
        $("#chtitleerr").html("field is required");
$("#chtitleerr").show();
chtitleerr=false;

    }
    else {
        $("#chtitleerr").hide();
        chtitleerr=true;
    if (/[^a-zA-Z ]/.test(chapter))
    {
    
        $("#chtitleerr").html("Should be a text input with no symbols or numbers");
$("#chtitleerr").show();
chtitleerr=false;

         }

    
   else{
    $("#chtitleerr").hide();
    chtitleerr=true;
    if(chapterlength<5|| chapterlength>20){
        $("#chtitleerr").html("should between 5-20 character");
        $("#chtitleerr").show();
        chtitleerr=false;
    }else{
    $("#chtitleerr").hide();
    chtitleerr=true;
}

 }
}  
}
function checkbtitle(){
    var regex=/^[a-zA-Z]+$/;
    var btitlelength=$("#btitle").val().length;
    var btitle=$("#btitle").val();
    if (btitle==""){
        $("#btitleerr").html("field is required");
$("#btitleerr").show();
btitleerr=false;

    }
    else {
        $("#btitleerr").hide();
        btitleerr=true;
    // document.getElementById("submitch").disabled = false;
    if (/[^a-zA-Z ]/.test(btitle))
    {
    
        $("#btitleerr").html("Should be a text input with no symbols or numbers");
$("#btitleerr").show();
btitleerr=false;
         }

    
   else{
    $("#btitleerr").hide();
    btitleerr=true;
    if(btitlelength<5|| btitlelength>20){
        $("#btitleerr").html("should between 5-20 character");
        $("#btitleerr").show();
        btitleerr=false;

    }else{
    $("#btitleerr").hide();
    btitleerr=true;
}

 }
}   
}
function checkchpub(){
    var regex=/^[a-zA-Z]+$/;
    var chpublength=$("#chpub").val().length;
    var chpub=$("#chpub").val();
    if (chpub==""){
        $("#chpuberr").html("field is required");
$("#chpuberr").show();
chpuberr=false;

    }
    else {
        $("#chpuberr").hide();
        chpuberr=true;
    if (/[^a-zA-Z ]/.test(chpub))
    {
    
        $("#chpuberr").html("Should be a text input with no symbols or numbers");
$("#chpuberr").show();
        chpuberr=false;

         }

    
   else{
    $("#chpuberr").hide();
    chpuberr=true;
    if(chpublength<5|| chpublength>20){
        $("#chpuberr").html("should between 5-20 character");
        $("#chpuberr").show();
        chpuberr=false;

    }else{
    $("#chpuberr").hide();
    chpuberr=true;
}

 }
}   
}
function checkchlink(){
     if(! /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test($("#chlink").val())
){
$("#chlinkerr").html("enter valid url");
        $("#chlinkerr").show();
        chlinkerr=false;

    }else{
    $("#chlinkerr").hide();
    chlinkerr=true;
}
 }
 function checkreAuthor(){
    var regex=/^[a-zA-Z]+$/;
    var reauthorlength=$("#reauthor").val().length;
    var reauthor=$("#reauthor").val();
    if (reauthor==""){
        $("#reauthorerr").html("field is required");
$("#reauthorerr").show();
        reauthorerr=false;

    }
    else {
        $("#reauthorerr").hide();
    reauthorerr=true;
//     if (/[^a-zA-Z ]/.test(reauthor))
//     {
    
//         $("#reauthorerr").html("Should be a text input with no symbols or numbers");
// $("#reauthorerr").show();
// reauthorerr=false;
//          }

    
//    else{
//     $("#reauthorerr").hide();
//     reauthorerr=true;
    if(reauthorlength<5|| reauthorlength>20){
        $("#reauthorerr").html("should between 5-20 character");
        $("#reauthorerr").show();
        reauthorerr=false;

    }else{
    $("#reauthorerr").hide();
    reauthorerr=true;
}

 //}
}   
 }
        function check(){
        if(chlinkerr&&chtitleerr&&btitleerr&&chpuberr&&chauthorerr){

        document.getElementById("submitch").disabled = false;   
     }else{
        document.getElementById("submitch").disabled = true;

     }}
     function check1(){
if(authorerr&&tittleerr&&puberr&&blinkerr){

        document.getElementById("submit").disabled = false;   
     }else{
        document.getElementById("submit").disabled = true;

     }
    }
    function check2(){
    
if(reauthorerr&&retittleerr&&jetittleerr&&volumeerr&&issuenumerr&&relinkerr){

        document.getElementById("submitre").disabled = false;   
     }else{
        document.getElementById("submitre").disabled = true;

     }
    }

});

    $(document).ready(function(){
     window.showHide=function(e){
        if(e.value==="research"){
            $('form:not(#research)').hide();
           $('#research').show(); 
        }
        if(e.value==="book"){
           
           
            $('form:not(#book)').hide();
           $('#book').show(); }

        if(e.value==="bookchapter"){
           
            $('form:not(#bookchapter)').hide();  
$('#bookchapter').show(); 


}  
    }
   
});
                      </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Forms</title>
     <link rel="stylesheet" href="vendor.css" /> 
     <link rel="stylesheet" href="style.css" /> 
  </head>
  <body class="bg-light">

<!-- header -->
<header class="header-sticky header-light bg-white">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="home.html">
          <img class="navbar-logo navbar-logo-light" src="logo4.png" alt="Logo">
                <img class="navbar-logo navbar-logo-dark" src="KIPlogo.png" alt="Logo2">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="burger"><span></span></span></button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav align-items-center mr-auto">
              <li class="nav-item headerItem " id = "homeItem">
                  <a class="nav-link" href="home.html" role="button">
                      <span class="fa fa-home" aria-hidden="true"></span> 
                      Home
                  </a>
                </li>
                <li class="nav-item headerItem" id = "searchItem">
                    <form class="form-inline">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-addon"><i class="fa fa-search "></i></span>
                              
                            </div>
                             <div class="form-group keyWordSearchBar">
    
                            <input type="text" class=" form-control form-control-sm" id="keyWordSearchBar" placeholder="Search...">
                            </div>
                          </div>
                        
                        
                        <!-- <div class="form-group mb-2" style= "margin-top: 20px" >
                          <button id = "SearchButton" class="btn btn-sm  btn-primary">Search</button>
                        </div> -->
                        </form>
                      
                </li>
                    </ul>
                    <ul class="navbar-nav align-items-center mr-auto">
                        <li class="nav-item headerItem " id = "addOutcomeItem">
                            <a class="nav-link" href="addOutcome.html" role="button">
                                <span class="fa fa-pencil-square-o" aria-hidden="true"></span>
                              Add outcome 
                            </a>
                          </li>
                    </ul>

          <ul class="navbar-nav align-items-center mr-0">
            <li class="nav-item  dropdown" id="accountItem">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   user name
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a id = "profileItem" class="dropdown-item headerItem" href="profile.html">
                    <span class="fa fa-user" aria-hidden="true"></span>
                  My Profile
                </a>
                
                <a id = "logoutItem" class="dropdown-item headerItem" href="">
                    <span class="fa fa-sign-out" aria-hidden="true"></span>

                  Logout
                </a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <!-- header -->
    <section class="hero hero-with-header separator-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h1 class="font-weight-bold">Support Document</h1>
<p>Your outcome will be as expensive as the supported documents you add</p>        </div>
        </div>
        <div class="row">
          <div class="col">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-custom">
              <li class="breadcrumb-item"><a href="#research">Research</a></li>

                <li class="breadcrumb-item" ><a href="#book">Book</a></li>
                <li class="breadcrumb-item"><a href="#bookchapter">Book-chapter</a></li>
                <li class="breadcrumb-item"><a href="#patent">patent</a></li>


              </ol>

            </nav>
          </div>
        </div>
      </div>    
    </section>
   
    <section  id="book" class="component">
            <div class="container">
              <div class="row align-items-center">
                <div class="col">
                  <h4>BOOK</h4>
                </div>
                <div class="col text-right">
                  <div class="nav nav-docs nav-lavalamp lavalamp">
                    <!-- <div class="lavalamp-object ease" style="transition-duration: 0.2s; width: 86.2px; height: 40px; transform: translate(0.0125122px, 0px);"></div> -->
                    <!-- <a class="nav-item nav-link active show lavalamp-item" data-toggle="tab" href="#component-2-1" style="z-index: 5; position: relative;">Light</a>
                    <a class="nav-item nav-link lavalamp-item" data-toggle="tab" href="#component-2-2" style="z-index: 5; position: relative;">Dark</a> -->
                    <button type="button" id="saved" class="view">View submitted Books</button>
                  </div>
                </div>
              </div>
            </div>
           
            <div class="tab-content" id="component-2"id="book">
      
              <div class="tab-pane show active" id="component-2-1" role="tabpanel" aria-labelledby="component-2-1">
                <div class="component-example">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-6">
                          <!-- <form method="POST" >
                          <input type="submit" onclick="return chk2()"  name="submit" value="submit">
</form> -->
                      <form method="POST" id="book">
                      <!-- <input type="submit" onclick="return chk2()"  name="submit" value="submit"> -->

                        <div class="form-group">
                            <label>Title</label>
                            <input class="form-control form-control-sm" type="text" name="tittle" id="tittle"required><span id="tittleerr"></span>
                        
                        </div>
                        <div class="form-group">
                            <label>Breif description</label>
                            <input class="form-control form-control-sm" type="text"  type="text" name="descb"id="author"required><span id="authorerr"></span>
                        </div>
                        <div class="form-group">
                                <label>Edition</label>
                                <select class="form-control form-control-sm" type="text"  type="text" name="edition" id="edition"required></select><span id="editionerr"></span>
                            </div>
                        <div class="form-group">
                                <label>Publication year</label>
                          <select class="form-control form-control-sm" type="text" name ="year"id="year" required></select><span id="yearerr"></span>
                        </div>
                        <div class="form-group">
                        <button id="submit" name="book" class="open-button" onclick="return chk2()" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" aria-disabled="false">
                                <span class="ui-button-text">submit</span></button>
                      </div>
                    </div>
                      <div class="col-md-6">
                       
                            <div class="form-group">
                                    <label>Name of publisher</label>
                              <input class="form-control form-control-sm" type="text" name="pubname"  id="pubname" required><span id="puberr"></span>
                            </div>
                          
                            <div class="form-group" > 
                                    <label>Publication Place</label>
                                  
                                        <input class="form-control form-control-sm" type="text" id="placek1" name="placek1" required><span id="placeerr"></span>

                                    </div>
                               
                            <div class="form-group">
                                    <label>Publication link</label>
                              <input class="form-control form-control-sm" type="text" id="linkb" name="linkb" required><span id="linkerr"></span>
                            
                            </div>
                            <div class="form-group">
                                    <label>Co-worker af any?</label>
                              <input class="form-control form-control-sm" type="text" name="coworker"id="co1"><span id="addcoworker"></span></p>
                              <!-- <input type="submit" onclick="return chk()" name="co" value="Add co-worker" class="button"> -->
                              <!-- <input type="submit" onclick="return chk()" name="co" value="Add co-worker" class="open-button1"> -->

                              </div>
       
                            

                            <div id="result"></div>
                          

                      
                            <div class="form-group" id="table" style="display:none">                           
<table class=".table-lined" style = width:100%>
                <tr>
                    <th>type</th>
                    <th>title</th>
                    <th>Link</th>
               </tr>
<?php
//put all the view buttons on the top of the page
//session_unset();
//$_SESSION["flag"]=false;
if(isset($_POST['book'])){
    if(isset($_POST['placek1'])){
        echo "yessss";
    }
    if( !empty($_POST["tittle"])&&!empty($_POST["linkb"])){
        if( !empty($_SESSION["book1"])){
     $_SESSION["book1"]="<tr>".$_SESSION["book1"]."</tr><tr><td>"."BOOK"."</td> <td>" .$_POST["tittle"]."</td><td><a href=".$_POST["linkb"].">".$_POST["linkb"]."</a></td></tr> ";
        //  setcookie($cookie_name,$_SESSION["book"], time() + (86400 * 30), "/"); // 86400 = 1 day
        }
        else{
            $_SESSION["book1"]="<tr><td>"."BOOK"."</td> <td>" .$_POST["tittle"]."</td><td><a href=".$_POST["linkb"].">".$_POST["linkb"]."</a></td></tr> ";

        }
       }
       if( !empty($_SESSION["book1"])){
echo   $_SESSION["book1"];}
}//smth
//     $arr=array();
    
//     $book=uniqid();

// if( !empty($_POST["tittle"])&&!empty($_POST["linkb"])&&!empty($_POST["placek1"])&&!empty($_POST["pubname"])&&!empty($_POST["year"])&&!empty($_POST["edition"])&&!empty($_POST["descb"])){
// echo"hi";
// $book2=array( $book,$_POST['tittle'],$_POST['descb'],$_POST['edition'],$_POST['year'],$_POST['pubname'],$_POST["placek1"],$_POST['linkb'],'Book',$_SESSION['co']);
// if(empty($_SESSION['book'])){
//     $_SESSION['book']=array();
    
//     }
//     $_SESSION['book'][0]=$book2;
//     }


//    //if(isset($_POST['submit'])){//connection
//    echo("hi");
//    foreach($_SESSION['book'] As $book2){
//        $sql = "INSERT INTO books (id,title,description,edition,year,publishername,publicationplace,publicationlink)
//         VALUES ('".$book2['0']."', '".$book2['1']."','".$book2['2']."', '".$book2['3']."','".$book2['4']."', '".$book2['5']."','".$book2['6']."','".$book2['7']."')";
//        if(mysqli_query($connection, $sql)){
//            echo "Records inserted successfully.";
//            $_SESSION["flag"]=true;
//        } else{
//            echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
//        }
   
//        $x=$book2[9];
      
//        if(!empty($x)){
           
//        foreach($x as $key=>$value) {
//            $val=json_encode($value);

//            $sql = "INSERT INTO shared (reid,outcome,book) 
//            VALUES ('".$value."','1','".$book2['0']."')";
   
//            if(mysqli_query($connection, $sql)){
//                echo "Records inserted successfully.";
//            } else{
//                echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
//            }
//        }
//    }
   
//    }//was here
//    $_SESSION['co']="";
// }//book
//   // }
   
// //}
// // $_SESSION['counter']=$book;





//   //requires ("connection.php");
// // if (isset($_POST["find"])){
// //   echo "<div class='form-group'> <p>".$data =$_POST["coworker"]."</p></div>";
// // // }
// // if(isset($_POST['cancel'])){
// //   $_SESSION["book"]="";
// //   $_SESSION["bookchapter"]="";
// //   $_SESSION["research"]="";


  
// // }
//                             //  setcookie($cookie_name,"<tr>".$cookie_name."</tr><tr><td>"."BOOK"."</td> <td>" .$_POST["tittle"]."</td><td><a href=".$_POST["linkb"].">".$_POST["linkb"]."</a></td></tr> ", time() + (86400 * 30), "/"); // 86400 = 1 day
                         
?>

</table>
</div>

</form>

<input type="submit" onclick="return chk()" name="co" value="Add co-worker" class="open-button">

<button class="open-button" onclick="openForm()">add external co-worker</button>

<div class="form-popup" id="myForm">
  <form class="form-container" method="POST">
    <h1>co-worker</h1>
    <label for="psw"><b>Name</b></label>
    <input type="text" placeholder="Enter name" id="name1" name="name" required>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" id="email1" name="email" required>

    <label for="psw"><b>instituation </b></label>
    <input type="text" placeholder="Enter instituation" name="instituation" id
    ="instituation1" required>
    <input type="submit"name= "submit" value="add co-worker" onclick="return sub()" class="btn">

    <!-- <input type="submit" onclick="return chk()" name="co" value="co"> -->

    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
</div>
                    </div>
                  </div>
                </div>
               
                <?php
//put all the view buttons on the top of the page
//session_unset();
$_SESSION["flag"]=false;
if(isset($_POST['book'])){
    if(isset($_POST['placek1'])){
        echo "yessss";
    }
    if( !empty($_POST["tittle"])&&!empty($_POST["linkb"])){
        if( !empty($_SESSION["book1"])){
     $_SESSION["book1"]="<tr>".$_SESSION["book1"]."</tr><tr><td>"."BOOK"."</td> <td>" .$_POST["tittle"]."</td><td><a href=".$_POST["linkb"].">".$_POST["linkb"]."</a></td></tr> ";
        //  setcookie($cookie_name,$_SESSION["book"], time() + (86400 * 30), "/"); // 86400 = 1 day
        }
        else{
            $_SESSION["book1"]="<tr><td>"."BOOK"."</td> <td>" .$_POST["tittle"]."</td><td><a href=".$_POST["linkb"].">".$_POST["linkb"]."</a></td></tr> ";

        }
       }
       if( !empty($_SESSION["book1"])){
//echo   $_SESSION["book1"];
}
       
    $arr=array();
    
    $book=uniqid();

if( !empty($_POST["tittle"])&&!empty($_POST["linkb"])&&!empty($_POST["placek1"])&&!empty($_POST["pubname"])&&!empty($_POST["year"])&&!empty($_POST["edition"])&&!empty($_POST["descb"])){
echo"hi";
$book2=array( $book,$_POST['tittle'],$_POST['descb'],$_POST['edition'],$_POST['year'],$_POST['pubname'],$_POST["placek1"],$_POST['linkb'],'Book',$_SESSION['co'],$_SESSION['co2']);
if(empty($_SESSION['book'])){
    $_SESSION['book']=array();
    
    }
    $_SESSION['book'][0]=$book2;
    }


   //if(isset($_POST['submit'])){//connection
   echo("hi");
   foreach($_SESSION['book'] As $book2){
       $sql = "INSERT INTO books (id,title,description,edition,year,publishername,publicationplace,publicationlink)
        VALUES ('".$book2['0']."', '".$book2['1']."','".$book2['2']."', '".$book2['3']."','".$book2['4']."', '".$book2['5']."','".$book2['6']."','".$book2['7']."')";
       if(mysqli_query($connection, $sql)){
           echo "<div class='alert' id='alert'>
           <span class='closebtn' onclick='this.parentElement.style.display=none;'>&times;</span> 
           <strong>Success!</strong> Document submitted successfully.
         </div>";
           $_SESSION["flag"]=true;
       } else{
           echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
       }
   
       $x=$book2[9];
      $y=$book2[10];
       if(!empty($x)){
           
       foreach($x as $key=>$value) {
           $val=json_encode($value);

           $sql = "INSERT INTO shared (reid,outcome,book) 
           VALUES ('".$value."','1','".$book2['0']."')";
   
           if(mysqli_query($connection, $sql)){
               echo "<p>Records inserted successfully.</p>";
           } else{
               echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
           }
       }
       foreach($y as $key=>$value) {
        $val=json_encode($value);

        $sql = "INSERT INTO shared2 (co,outcome,book) 
        VALUES ('".$value."','1','".$book2['0']."')";

        if(mysqli_query($connection, $sql)){
            echo "<p>Records inserted successfully.</p>";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
        }
    }
   }
   
   }//was here
   $_SESSION['co']="";
   $_SESSION['co2']="";
}//book
  // }
   
//}
// $_SESSION['counter']=$book;





  //requires ("connection.php");
// if (isset($_POST["find"])){
//   echo "<div class='form-group'> <p>".$data =$_POST["coworker"]."</p></div>";
// // }
// if(isset($_POST['cancel'])){
//   $_SESSION["book"]="";
//   $_SESSION["bookchapter"]="";
//   $_SESSION["research"]="";


  
// }
                            //  setcookie($cookie_name,"<tr>".$cookie_name."</tr><tr><td>"."BOOK"."</td> <td>" .$_POST["tittle"]."</td><td><a href=".$_POST["linkb"].">".$_POST["linkb"]."</a></td></tr> ", time() + (86400 * 30), "/"); // 86400 = 1 day
                         
?>
              </div>
            
    </div>
            </section>

            
    <section  id="bookchapter" class="component">
            <div class="container">
              <div class="row align-items-center">
                <div class="col">
                  <h4>BOOK-chapter</h4>
                </div>
                <div class="col text-right">
                  <div class="nav nav-docs nav-lavalamp lavalamp">
                    <!-- <div class="lavalamp-object ease" style="transition-duration: 0.2s; width: 86.2px; height: 40px; transform: translate(0.0125122px, 0px);"></div> -->
                    <!-- <a class="nav-item nav-link active show lavalamp-item" data-toggle="tab" href="#component-2-1" style="z-index: 5; position: relative;">Light</a>
                    <a class="nav-item nav-link lavalamp-item" data-toggle="tab" href="#component-2-2" style="z-index: 5; position: relative;">Dark</a> -->
                    <button type="button" class="view"id="savedch">View submitted book-chapter</button>

                  </div>
                </div>
              </div>
            </div>
            <div class="tab-content" id="component-2"id="bookchapter">
      
              <div class="tab-pane show active" id="component-2-1" role="tabpanel" aria-labelledby="component-2-1">
                <div class="component-example">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-6">
                          <form method="POST">
                        <div class="form-group">
                            <label>Title of chapter</label>
                            <input class="form-control form-control-sm" type="text"  name ="chtitle" type="text" id="chapter"required><span id="chtitleerr"></span>
                        
                        </div>
                        <div class="form-group">
                            <label>Breif description</label>
                            <input class="form-control form-control-sm" type="text"  type="text" name="descch"id="chauthor"required><span id="chauthorerr"></span>
                        </div>
                        <div class="form-group">
                                <label>Title of book</label>
                                <input class="form-control form-control-sm" type="text"  type="text" name="btitle"id="btitle"required><span id="btitleerr"></span>
                            </div>
                        <div class="form-group">
                                <label>Publication year</label>
                          <select class="form-control form-control-sm" type="text" name="year1" id="year1" required></select><span id="yearerr"></span>
                        </div>
                       
                       
                   
                    <div class="form-group">
                            <button id="submitch" name="chapter" class="view" onclick=" return chck2()" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" aria-disabled="false">
                            <span class="ui-button-text">submit</span></button>
                                </button>
                                </div>
                                </div>
                      <div class="col-md-6">
                       
                            <div class="form-group">
                                    <label>Name of publisher</label>
                              <input class="form-control form-control-sm" type="text" name="chpub" id="chpub" required><span id="chpuberr"></span>
                            </div>
                          
                            <div class="form-group"  class="selectric-wrapper selectric-form-control selectric-form-control"> 
                                    <label>Publication Place</label>

                                    <!-- <select name="placech"class="form-control form-control-sm"class="selectric" style="width:100%; height: 50%; margin-bottom: 1rem;">
                                           
                                            <option value="AF">Afghanistan</option>
                                            <option value="AX">Åland Islands</option>
                                            <option value="AL">Albania</option>
                                            <option value="DZ">Algeria</option>
                                            <option value="AS">American Samoa</option>
                                            <option value="AD">Andorra</option>
                                            <option value="AO">Angola</option>
                                            <option value="AI">Anguilla</option>
                                            <option value="AQ">Antarctica</option>
                                            <option value="AG">Antigua and Barbuda</option>
                                            <option value="AR">Argentina</option>
                                            <option value="AM">Armenia</option>
                                            <option value="AW">Aruba</option>
                                            <option value="AU">Australia</option>
                                            <option value="AT">Austria</option>
                                            <option value="AZ">Azerbaijan</option>
                                            <option value="BS">Bahamas</option>
                                            <option value="BH">Bahrain</option>
                                            <option value="BD">Bangladesh</option>
                                            <option value="BB">Barbados</option>
                                            <option value="BY">Belarus</option>
                                            <option value="BE">Belgium</option>
                                            <option value="BZ">Belize</option>
                                            <option value="BJ">Benin</option>
                                            <option value="BM">Bermuda</option>
                                            <option value="BT">Bhutan</option>
                                            <option value="BO">Bolivia, Plurinational State of</option>
                                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                            <option value="BA">Bosnia and Herzegovina</option>
                                            <option value="BW">Botswana</option>
                                            <option value="BV">Bouvet Island</option>
                                            <option value="BR">Brazil</option>
                                            <option value="IO">British Indian Ocean Territory</option>
                                            <option value="BN">Brunei Darussalam</option>
                                            <option value="BG">Bulgaria</option>
                                            <option value="BF">Burkina Faso</option>
                                            <option value="BI">Burundi</option>
                                            <option value="KH">Cambodia</option>
                                            <option value="CM">Cameroon</option>
                                            <option value="CA">Canada</option>
                                            <option value="CV">Cape Verde</option>
                                            <option value="KY">Cayman Islands</option>
                                            <option value="CF">Central African Republic</option>
                                            <option value="TD">Chad</option>
                                            <option value="CL">Chile</option>
                                            <option value="CN">China</option>
                                            <option value="CX">Christmas Island</option>
                                            <option value="CC">Cocos (Keeling) Islands</option>
                                            <option value="CO">Colombia</option>
                                            <option value="KM">Comoros</option>
                                            <option value="CG">Congo</option>
                                            <option value="CD">Congo, the Democratic Republic of the</option>
                                            <option value="CK">Cook Islands</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="CI">Côte d'Ivoire</option>
                                            <option value="HR">Croatia</option>
                                            <option value="CU">Cuba</option>
                                            <option value="CW">Curaçao</option>
                                            <option value="CY">Cyprus</option>
                                            <option value="CZ">Czech Republic</option>
                                            <option value="DK">Denmark</option>
                                            <option value="DJ">Djibouti</option>
                                            <option value="DM">Dominica</option>
                                            <option value="DO">Dominican Republic</option>
                                            <option value="EC">Ecuador</option>
                                            <option value="EG">Egypt</option>
                                            <option value="SV">El Salvador</option>
                                            <option value="GQ">Equatorial Guinea</option>
                                            <option value="ER">Eritrea</option>
                                            <option value="EE">Estonia</option>
                                            <option value="ET">Ethiopia</option>
                                            <option value="FK">Falkland Islands (Malvinas)</option>
                                            <option value="FO">Faroe Islands</option>
                                            <option value="FJ">Fiji</option>
                                            <option value="FI">Finland</option>
                                            <option value="FR">France</option>
                                            <option value="GF">French Guiana</option>
                                            <option value="PF">French Polynesia</option>
                                            <option value="TF">French Southern Territories</option>
                                            <option value="GA">Gabon</option>
                                            <option value="GM">Gambia</option>
                                            <option value="GE">Georgia</option>
                                            <option value="DE">Germany</option>
                                            <option value="GH">Ghana</option>
                                            <option value="GI">Gibraltar</option>
                                            <option value="GR">Greece</option>
                                            <option value="GL">Greenland</option>
                                            <option value="GD">Grenada</option>
                                            <option value="GP">Guadeloupe</option>
                                            <option value="GU">Guam</option>
                                            <option value="GT">Guatemala</option>
                                            <option value="GG">Guernsey</option>
                                            <option value="GN">Guinea</option>
                                            <option value="GW">Guinea-Bissau</option>
                                            <option value="GY">Guyana</option>
                                            <option value="HT">Haiti</option>
                                            <option value="HM">Heard Island and McDonald Islands</option>
                                            <option value="VA">Holy See (Vatican City State)</option>
                                            <option value="HN">Honduras</option>
                                            <option value="HK">Hong Kong</option>
                                            <option value="HU">Hungary</option>
                                            <option value="IS">Iceland</option>
                                            <option value="IN">India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IR">Iran, Islamic Republic of</option>
                                            <option value="IQ">Iraq</option>
                                            <option value="IE">Ireland</option>
                                            <option value="IM">Isle of Man</option>
                                            <option value="IL">Israel</option>
                                            <option value="IT">Italy</option>
                                            <option value="JM">Jamaica</option>
                                            <option value="JP">Japan</option>
                                            <option value="JE">Jersey</option>
                                            <option value="JO">Jordan</option>
                                            <option value="KZ">Kazakhstan</option>
                                            <option value="KE">Kenya</option>
                                            <option value="KI">Kiribati</option>
                                            <option value="KP">Korea, Democratic People's Republic of</option>
                                            <option value="KR">Korea, Republic of</option>
                                            <option value="KW">Kuwait</option>
                                            <option value="KG">Kyrgyzstan</option>
                                            <option value="LA">Lao People's Democratic Republic</option>
                                            <option value="LV">Latvia</option>
                                            <option value="LB">Lebanon</option>
                                            <option value="LS">Lesotho</option>
                                            <option value="LR">Liberia</option>
                                            <option value="LY">Libya</option>
                                            <option value="LI">Liechtenstein</option>
                                            <option value="LT">Lithuania</option>
                                            <option value="LU">Luxembourg</option>
                                            <option value="MO">Macao</option>
                                            <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                            <option value="MG">Madagascar</option>
                                            <option value="MW">Malawi</option>
                                            <option value="MY">Malaysia</option>
                                            <option value="MV">Maldives</option>
                                            <option value="ML">Mali</option>
                                            <option value="MT">Malta</option>
                                            <option value="MH">Marshall Islands</option>
                                            <option value="MQ">Martinique</option>
                                            <option value="MR">Mauritania</option>
                                            <option value="MU">Mauritius</option>
                                            <option value="YT">Mayotte</option>
                                            <option value="MX">Mexico</option>
                                            <option value="FM">Micronesia, Federated States of</option>
                                            <option value="MD">Moldova, Republic of</option>
                                            <option value="MC">Monaco</option>
                                            <option value="MN">Mongolia</option>
                                            <option value="ME">Montenegro</option>
                                            <option value="MS">Montserrat</option>
                                            <option value="MA">Morocco</option>
                                            <option value="MZ">Mozambique</option>
                                            <option value="MM">Myanmar</option>
                                            <option value="NA">Namibia</option>
                                            <option value="NR">Nauru</option>
                                            <option value="NP">Nepal</option>
                                            <option value="NL">Netherlands</option>
                                            <option value="NC">New Caledonia</option>
                                            <option value="NZ">New Zealand</option>
                                            <option value="NI">Nicaragua</option>
                                            <option value="NE">Niger</option>
                                            <option value="NG">Nigeria</option>
                                            <option value="NU">Niue</option>
                                            <option value="NF">Norfolk Island</option>
                                            <option value="MP">Northern Mariana Islands</option>
                                            <option value="NO">Norway</option>
                                            <option value="OM">Oman</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="PW">Palau</option>
                                            <option value="PS">Palestinian Territory, Occupied</option>
                                            <option value="PA">Panama</option>
                                            <option value="PG">Papua New Guinea</option>
                                            <option value="PY">Paraguay</option>
                                            <option value="PE">Peru</option>
                                            <option value="PH">Philippines</option>
                                            <option value="PN">Pitcairn</option>
                                            <option value="PL">Poland</option>
                                            <option value="PT">Portugal</option>
                                            <option value="PR">Puerto Rico</option>
                                            <option value="QA">Qatar</option>
                                            <option value="RE">Réunion</option>
                                            <option value="RO">Romania</option>
                                            <option value="RU">Russian Federation</option>
                                            <option value="RW">Rwanda</option>
                                            <option value="BL">Saint Barthélemy</option>
                                            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                            <option value="KN">Saint Kitts and Nevis</option>
                                            <option value="LC">Saint Lucia</option>
                                            <option value="MF">Saint Martin (French part)</option>
                                            <option value="PM">Saint Pierre and Miquelon</option>
                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                            <option value="WS">Samoa</option>
                                            <option value="SM">San Marino</option>
                                            <option value="ST">Sao Tome and Principe</option>
                                            <option value="SA">Saudi Arabia</option>
                                            <option value="SN">Senegal</option>
                                            <option value="RS">Serbia</option>
                                            <option value="SC">Seychelles</option>
                                            <option value="SL">Sierra Leone</option>
                                            <option value="SG">Singapore</option>
                                            <option value="SX">Sint Maarten (Dutch part)</option>
                                            <option value="SK">Slovakia</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="SB">Solomon Islands</option>
                                            <option value="SO">Somalia</option>
                                            <option value="ZA">South Africa</option>
                                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                                            <option value="SS">South Sudan</option>
                                            <option value="ES">Spain</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SD">Sudan</option>
                                            <option value="SR">Suriname</option>
                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                            <option value="SZ">Swaziland</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="SY">Syrian Arab Republic</option>
                                            <option value="TW">Taiwan, Province of China</option>
                                            <option value="TJ">Tajikistan</option>
                                            <option value="TZ">Tanzania, United Republic of</option>
                                            <option value="TH">Thailand</option>
                                            <option value="TL">Timor-Leste</option>
                                            <option value="TG">Togo</option>
                                            <option value="TK">Tokelau</option>
                                            <option value="TO">Tonga</option>
                                            <option value="TT">Trinidad and Tobago</option>
                                            <option value="TN">Tunisia</option>
                                            <option value="TR">Turkey</option>
                                            <option value="TM">Turkmenistan</option>
                                            <option value="TC">Turks and Caicos Islands</option>
                                            <option value="TV">Tuvalu</option>
                                            <option value="UG">Uganda</option>
                                            <option value="UA">Ukraine</option>
                                            <option value="AE">United Arab Emirates</option>
                                            <option value="GB">United Kingdom</option>
                                            <option value="US">United States</option>
                                            <option value="UM">United States Minor Outlying Islands</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="UZ">Uzbekistan</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="VE">Venezuela, Bolivarian Republic of</option>
                                            <option value="VN">Viet Nam</option>
                                            <option value="VG">Virgin Islands, British</option>
                                            <option value="VI">Virgin Islands, U.S.</option>
                                            <option value="WF">Wallis and Futuna</option>
                                            <option value="EH">Western Sahara</option>
                                            <option value="YE">Yemen</option>
                                            <option value="ZM">Zambia</option>
                                            <option value="ZW">Zimbabwe</option>
                                        </select> -->
                                        <input class="form-control form-control-sm" type="text" id="placek1" name="placek" required><span id="placeerr"></span>

                                    </div>
                               
                            <div class="form-group">
                                    <label>Publication link</label>
                              <input class="form-control form-control-sm" type="text" id="chlink" name="chlink" required><span id="chlinkerr"></span>
                            </div>
                           <div class="form-group">
                                   <label>Co-worker if any?</label>
                              <input class="form-control form-control-sm" type="text"name="coworker"id="co"><span id="addcoworker"></span></p> 
                              <!-- <input type="submit" onclick="return chk()" name="co" value="co"> -->

      
      
                          </div>
                            <!-- <div class="form-group">
                            <button id="submitch" name="chapter" onclick=" return chck2()" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" aria-disabled="false">
                                    <span class="ui-button-text">Save</span>
                                </button>
                                </div> -->
                                <div class="form-group" id="tablech" style="display:none">                           
<table class=".table-lined" style = width:100%>
                <tr>
                    <th>type</th>
                    <th>title</th>
                    <th>Link</th>
               </tr>
<?php
if(isset($_POST['chapter'])){
                            //  setcookie($cookie_name,"<tr>".$cookie_name."</tr><tr><td>"."BOOK"."</td> <td>" .$_POST["tittle"]."</td><td><a href=".$_POST["linkb"].">".$_POST["linkb"]."</a></td></tr> ", time() + (86400 * 30), "/"); // 86400 = 1 day
                            if( !empty($_POST["chtitle"])&&!empty($_POST["chlink"])){
                                if( !empty($_SESSION["bookch"])){
                         $_SESSION["bookch"]="<tr>".$_SESSION["bookch"]."</tr><tr><td>"."BOOK-chapter"."</td> <td>" .$_POST["chtitle"]."</td><td><a href=".$_POST["chlink"].">".$_POST["chlink"]."</a></td></tr> ";
                            //  setcookie($cookie_name,$_SESSION["book"], time() + (86400 * 30), "/"); // 86400 = 1 day
                                }
                                else{
                                    $_SESSION["bookch"]="<tr><td>"."BOOK-chapter"."</td> <td>" .$_POST["chtitle"]."</td><td><a href=".$_POST["chlink"].">".$_POST["chlink"]."</a></td></tr> ";

                                }
                            }
                            if( !empty($_SESSION["bookch"])){
echo   $_SESSION["bookch"];}
                            }
?>
</table>
</div>
</form>

<input type="submit" onclick="return secondchk()" name="co2" value="Add co-worker" class="open-button">

<button class="open-button" onclick="openForm2()">add external co-worker</button>

<div class="form-popup" id="myForm2">
  <form class="form-container" method="POST">
    <h1>co-worker</h1>
    <label for="psw"><b>Name</b></label>
    <input type="text" placeholder="Enter name" id="name1" name="name" required>
    <label for="email1"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" id="email1" name="email" required>

    <label for="psw"><b>instituation </b></label>
    <input type="text" placeholder="Enter instituation" name="instituation1" id="instituation1" required>
    <input type="button"name="submit" value="add co-worker" onclick="return sub2()" class="btn">
<!-- //;return chk4() -->
    <!-- <input type="button"name="submit1" value="save as co-worker"  class="btn"> -->

    <!-- <input type="submit"name="idk" value="add co-worker" onclick="return chk4()" class="btn"> -->

    <!-- <input type="submit" onclick="return chk()" name="co" value="co"> -->

    <button type="button" class="btn cancel" onclick="closeForm2()">Close</button>
  </form>
</div>
                      </div>
                    </div>
                  </div>
                </div>
     
                <?php
          if(isset($_POST['chapter'])){
            //  setcookie($cookie_name,"<tr>".$cookie_name."</tr><tr><td>"."BOOK"."</td> <td>" .$_POST["tittle"]."</td><td><a href=".$_POST["linkb"].">".$_POST["linkb"]."</a></td></tr> ", time() + (86400 * 30), "/"); // 86400 = 1 day
            if( !empty($_POST["chtitle"])&&!empty($_POST["chlink"])){
                if( !empty($_SESSION["bookch"])){
         $_SESSION["bookch"]="<tr>".$_SESSION["bookch"]."</tr><tr><td>"."BOOK-chapter"."</td> <td>" .$_POST["chtitle"]."</td><td><a href=".$_POST["chlink"].">".$_POST["chlink"]."</a></td></tr> ";
            //  setcookie($cookie_name,$_SESSION["book"], time() + (86400 * 30), "/"); // 86400 = 1 day
                }
                else{
                    $_SESSION["bookch"]="<tr><td>"."BOOK-chapter"."</td> <td>" .$_POST["chtitle"]."</td><td><a href=".$_POST["chlink"].">".$_POST["chlink"]."</a></td></tr> ";

                }
            }
            if( !empty($_SESSION["bookch"])){
//echo   $_SESSION["bookch"];
}      
    
$arr=array();
    
$book=uniqid();

if( !empty($_POST["chtitle"])&&!empty($_POST["descch"])&&!empty($_POST["placek"])&&!empty($_POST["btitle"])&&!empty($_POST["year1"])&&!empty($_POST["chpub"])&&!empty($_POST["chlink"])){
echo"hi";
$book2=array( $book,$_POST['chtitle'],$_POST['descch'],$_POST['btitle'],$_POST['year1'],$_POST['chpub'],$_POST["placek"],$_POST['chlink'],'chapter',$_SESSION['co'],$_SESSION['co2']);
if(empty($_SESSION['book'])){
$_SESSION['book']=array();

}
$_SESSION['book'][0]=$book2;
}


//if(isset($_POST['submit'])){//connection
echo("hi");
foreach($_SESSION['book'] As $book2){
   $sql = "INSERT INTO chapters (id,title,description,booktitle,year,publishername,place,link)
    VALUES ('".$book2['0']."', '".$book2['1']."','".$book2['2']."', '".$book2['3']."','".$book2['4']."', '".$book2['5']."','".$book2['6']."','".$book2['7']."')";
   if(mysqli_query($connection, $sql)){
       echo "Records inserted successfully.";
   } else{
       echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
   }

   $x=$book2[9];
   $y=$book2[10];
  
   if(!empty($x)){
       
   foreach($x as $key=>$value) {
       $val=json_encode($value);
       $sql = "INSERT INTO sharedchapter (reid,outcome,chapter) 
       VALUES ('".$value."','1','".$book2['0']."')";

       if(mysqli_query($connection, $sql)){
           echo "Records inserted successfully.";
       } else{
           echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
       }
   }
}
if(!empty($y)){
       
    foreach($y as $key=>$value) {
        $val=json_encode($value);
        $sql = "INSERT INTO sharedchapter2 (co,outcome,chapter) 
        VALUES ('".$value."','1','".$book2['0']."')";
 
        if(mysqli_query($connection, $sql)){
            echo "Records inserted successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
        }
    }
 }
}//was here
$_SESSION['co']="";
$_SESSION['co2']="";
}//book
//echo  $_SESSION['bworke'];
?>

              </div>
            </div>
            </section>
          

    <section  id="research" class="component">
            <div class="container">
              <div class="row align-items-center">
                <div class="col">
                  <h4>Research-jornal article</h4>
                </div>
                <div class="col text-right">
                  <div class="nav nav-docs nav-lavalamp lavalamp"><div class="lavalamp-object ease" style="transition-duration: 0.2s; width: 86.2px; height: 40px; transform: translate(0.0125122px, 0px);"></div>
                    <!-- <a class="nav-item nav-link active show lavalamp-item" data-toggle="tab" href="#component-2-1" style="z-index: 5; position: relative;">Light</a>
                    <a class="nav-item nav-link lavalamp-item" data-toggle="tab" href="#component-2-2" style="z-index: 5; position: relative;">Dark</a> -->
                    <button type="button" class="view" id="savedre">View submitted researchs</button>
 </div>
                </div>
              </div>
            </div>
            <div class="tab-content" id="component-2"id="bookchapter">
      
              <div class="tab-pane show active" id="component-2-1" role="tabpanel" aria-labelledby="component-2-1">
                <div class="component-example">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-6">
                          <form method="POST">
                        <div class="form-group">
                            <label>Title of Article</label>
                            <input class="form-control form-control-sm" type="text"  type="text" name="retitle"id="retitle"required><span id="retittleerr"></span>
                        
                        </div>
                        <div class="form-group">
                            <label>Breif description</label>
                            <input class="form-control form-control-sm" type="text"  type="text" name="descre" id="reauthor"required><span id="reauthorerr"></span>
                        </div>
                        <div class="form-group">
                                <label>Title of Jornal</label>
                                <input class="form-control form-control-sm" type="text"  type="text" name="jetittle" id="jetittle"required><span id="jetittleerr"></span>
                            </div>
                        <div class="form-group">
                                <label>Publication year</label>
                          <select class="form-control form-control-sm" type="text" name="year2"id="year2" required></select><span id="yearerr"></span>
                        </div>
                        <div class="form-group">
                            <button id="submitre" name="research" class="view" onclick=" return chck2()" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" aria-disabled="false">
                            <span class="ui-button-text">submit</span></button>
                                </button>
                                </div>
                    </div>
                  
                      <div class="col-md-6">
                       
                            <div class="form-group">
                                    <label>Volume</label>
                              <input class="form-control form-control-sm" type="text" name="volume"id="volume" required><span id="volumeerr"></span>
                            </div>
                            <div class="form-group">
                                    <label>Issue number</label>
                              <input class="form-control form-control-sm" type="text" name="issuenum"id="issuenum" required><span id="issuenumerr"></span>
                            </div>
                            <div class="form-group">
                                    <label>Publication link</label>
                              <input class="form-control form-control-sm" type="text" name="relink"id="relink" required><span id="relinkerr"></span>
                            </div>
                            <div class="form-group">
                                    <label>Co-worker if any?</label>
                              <input class="form-control form-control-sm" type="text" name="recoworker"id="coworker"><span id="addcoworker"></span></p>

                            </div>
                           
                                <div class="form-group" id="tablere" style="display:none">                           
<table class=".table-lined" style = width:100%>
                <tr>
                    <th>type</th>
                    <th>title</th>
                    <th>Link</th>
               </tr>
<?php
if(isset($_POST['research'])){
                            //  setcookie($cookie_name,"<tr>".$cookie_name."</tr><tr><td>"."BOOK"."</td> <td>" .$_POST["tittle"]."</td><td><a href=".$_POST["linkb"].">".$_POST["linkb"]."</a></td></tr> ", time() + (86400 * 30), "/"); // 86400 = 1 day
                            if( !empty($_POST["retitle"])&&!empty($_POST["relink"])){
                                if( !empty($_SESSION["research"])){
                         $_SESSION["research"]="<tr>".$_SESSION["research"]."</tr><tr><td>"."Research"."</td> <td>" .$_POST["retitle"]."</td><td><a href=".$_POST["relink"].">".$_POST["relink"]."</a></td></tr> ";}
                         else{
                            $_SESSION["research"]="<tr><td>"."Research"."</td> <td>" .$_POST["retitle"]."</td><td><a href=".$_POST["relink"].">".$_POST["relink"]."</a></td></tr> ";}

                         }
                            //  setcookie($cookie_name,$_SESSION["book"], time() + (86400 * 30), "/"); // 86400 = 1 day

                            
                            if( !empty($_SESSION["research"])){
echo   $_SESSION["research"];}

                            }
// $arr=array();
    
// $book=uniqid();

// if( !empty($_POST["retitle"])&&!empty($_POST["descre"])&&!empty($_POST["jetittle"])&&!empty($_POST["year2"])&&!empty($_POST["volume"])&&!empty($_POST["issuenum"])&&!empty($_POST["relink"])){
// echo"hi";
// $book2=array( $book,$_POST['retitle'],$_POST['descre'],$_POST['jetittle'],$_POST['year2'],$_POST['volume'],$_POST["issuenum"],$_POST['relink'],'research',$_SESSION['co'],$_SESSION['co2']);
// if(empty($_SESSION['book'])){
// $_SESSION['book']=array();

// }
// $_SESSION['book'][0]=$book2;
// }

// //if(isset($_POST['submit'])){//connection
// echo("hi");
// foreach($_SESSION['book'] As $book2){
//    $sql = "INSERT INTO researches (id,articletitle,description,journalarticle,year,volume,issuenum,link)
//     VALUES ('".$book2['0']."', '".$book2['1']."','".$book2['2']."', '".$book2['3']."','".$book2['4']."', '".$book2['5']."','".$book2['6']."','".$book2['7']."')";
//    if(mysqli_query($connection, $sql)){
//        echo "Records inserted successfully.";
//    } else{
//        echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
//    }

//    $x=$book2[9];
//    $y=$book2[10];
  
//    if(!empty($x)){
       
//    foreach($x as $key=>$value) {
//        $val=json_encode($value);
//        $sql = "INSERT INTO sharedresearch (reid,outcome,research) 
//        VALUES ('".$value."','1','".$book2['0']."')";

//        if(mysqli_query($connection, $sql)){
//            echo "Records inserted successfully.";
//        } else{
//            echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
//        }
//    }
// }
// if(!empty($y)){
       
//     foreach($y as $key=>$value) {
//         $val=json_encode($value);
//         $sql = "INSERT INTO sharedresearch (reid,outcome,research) 
//         VALUES ('".$value."','1','".$book2['0']."')";
 
//         if(mysqli_query($connection, $sql)){
//             echo "Records inserted successfully.";
//         } else{
//             echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
//         }
//     }
//  }
// }//was here
// $_SESSION['co']="";
// $_SESSION['co2']="";
// }//book

//echo  $_SESSION['bworke'];
?>



</table>
</div>
</form>
<input type="submit" onclick="return chk()" name="co" value="Add co-worker" class="open-button">

<button class="open-button" onclick="openForm3()">add external co-worker</button>

<div class="form-popup" id="myForm3">
  <form class="form-container" method="POST">
    <h1>co-worker</h1>
    <label for="psw"><b>Name</b></label>
    <input type="text" placeholder="Enter name" id="rename1"name="name" required>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" id="reemail1" name="email1" required>

    <label for="psw"><b>instituation </b></label>
    <input type="text" placeholder="Enter instituation" id="reinstituation1" name="instituation" required>
    <input type="button"name= "submit" value="add co-worker" onclick="return sub3()" class="btn">

    <!-- <input type="submit" onclick="return chk()" name="co" value="co"> -->

    <button type="button" class="btn cancel" onclick="closeForm3()">Close</button>
  </form>
</div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                if(isset($_POST['research'])){
                    //  setcookie($cookie_name,"<tr>".$cookie_name."</tr><tr><td>"."BOOK"."</td> <td>" .$_POST["tittle"]."</td><td><a href=".$_POST["linkb"].">".$_POST["linkb"]."</a></td></tr> ", time() + (86400 * 30), "/"); // 86400 = 1 day
                    if( !empty($_POST["retitle"])&&!empty($_POST["relink"])){
                        if( !empty($_SESSION["research"])){
                 $_SESSION["research"]="<tr>".$_SESSION["research"]."</tr><tr><td>"."Research"."</td> <td>" .$_POST["retitle"]."</td><td><a href=".$_POST["relink"].">".$_POST["relink"]."</a></td></tr> ";}
                 else{
                    $_SESSION["research"]="<tr><td>"."Research"."</td> <td>" .$_POST["retitle"]."</td><td><a href=".$_POST["relink"].">".$_POST["relink"]."</a></td></tr> ";}

                 }
                    //  setcookie($cookie_name,$_SESSION["book"], time() + (86400 * 30), "/"); // 86400 = 1 day

                    
                    if( !empty($_SESSION["research"])){
//echo   $_SESSION["research"];
}


$arr=array();

$book=uniqid();

if( !empty($_POST["retitle"])&&!empty($_POST["descre"])&&!empty($_POST["jetittle"])&&!empty($_POST["year2"])&&!empty($_POST["volume"])&&!empty($_POST["issuenum"])&&!empty($_POST["relink"])){
echo"hi";
$book2=array( $book,$_POST['retitle'],$_POST['descre'],$_POST['jetittle'],$_POST['year2'],$_POST['volume'],$_POST["issuenum"],$_POST['relink'],'research',$_SESSION['co'],$_SESSION['co2']);
if(empty($_SESSION['book'])){
$_SESSION['book']=array();

}
$_SESSION['book'][0]=$book2;
}

//if(isset($_POST['submit'])){//connection
echo("hi");
foreach($_SESSION['book'] As $book2){
$sql = "INSERT INTO researches (id,articletitle,description,journalarticle,year,volume,issuenum,link)
VALUES ('".$book2['0']."', '".$book2['1']."','".$book2['2']."', '".$book2['3']."','".$book2['4']."', '".$book2['5']."','".$book2['6']."','".$book2['7']."')";
if(mysqli_query($connection, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}

$x=$book2[9];
$y=$book2[10];

if(!empty($x)){

foreach($x as $key=>$value) {
$val=json_encode($value);
$sql = "INSERT INTO sharedresearch (reid,outcome,research) 
VALUES ('".$value."','1','".$book2['0']."')";

if(mysqli_query($connection, $sql)){
   echo "Records inserted successfully.";
} else{
   echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}
}
}
if(!empty($y)){

foreach($y as $key=>$value) {
$val=json_encode($value);
$sql = "INSERT INTO sharedresearch2 (co,outcome,researches) 
VALUES ('".$value."','1','".$book2['0']."')";

if(mysqli_query($connection, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}
}
}
}//was here
$_SESSION['co']="";
$_SESSION['co2']="";
}//book
?>
              </div>
          
   

            </div>

            </section>

          <input class="button" type="button" name="cancel" onclick="
              window.location.replace('cancel.php')" value="Cancel" />
              <input class="button" type="button" id="next"name="next" onclick="window.location.replace('next.php')" value="Next" />
       
</html>
<!--try to try :)-->

<?php
require ("connection.php");
// if(isset($_POST['submit'])){
//    $sql = "INSERT INTO externalcoworker (email,name,instituation) 
//    VALUES ('".$_POST['email']."','".$_POST['name']."','".$_POST['instituation']."')";

//    if(mysqli_query($connection, $sql)){
//     $_SESSION['ex']=$_POST['email'];
//        echo "Records inserted successfully.";
//    } else{
//        echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
//    }
//    $_SESSION['co2']="";
// }
// if(isset($_POST['submit1'])){
//     $sql = "INSERT INTO externalcoworker (email,name,instituation) 
//     VALUES ('".$_POST['email1']."','".$_POST['name1']."','".$_POST['instituation1']."')";
 
//     if(mysqli_query($connection, $sql)){
//      $_SESSION['ex']=$_POST['email1'];
//         echo "Records inserted successfully.";
//     } else{
//         echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
//     }
//     $_SESSION['co2']="";
//  }

?>