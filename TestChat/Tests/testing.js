function whenClicked()
{
    alert("Clicked");
    var postObject = { "id":"5", "movie_id":"movTelMjnu", "movie_name":"Majnu", "no_of_songs":"6", "movie_logo_url":"ksdchdjdhiujdb" };
    dbParam = JSON.stringify(postObject);
//    obj = { "table":"customers", "limit":10 };
//    dbParam = JSON.stringify(obj);
//    xmlhttp = new XMLHttpRequest();
    xmlhttp = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
//    var xmlHttp=null;
//	try
//	  {	
//	  // Firefox, Opera 8.0+, Safari
//	  xmlHttp=new XMLHttpRequest();
//	  }
//	catch (e)
//	  {
//	  // Internet Explorer
//	  try
//	    {
//	    xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
//	
//	    }
//	  catch (e)
//	    {
//	    xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
//	    }
//	  }
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var myObj = this.response;
        alert(this.response);
//        myObj = JSON.parse(this.responseText);
//        for (x in myObj) {
//            txt += myObj[x].name + "<br>";
//        }
//        document.getElementById("demo").innerHTML = txt;
    }else if (this.readyState == 4) {
        var myObj = this.response;
        alert(this.response);
//        myObj = JSON.parse(this.responseText);
//        for (x in myObj) {
//            txt += myObj[x].name + "<br>";
//        }
//        document.getElementById("demo").innerHTML = txt;
    }
};
//    xmlhttp.open("POST", "./PHP/servicetest.php", false);
//    xmlhttp.open("POST", "./PHP/servicetest.php");
    xmlhttp.open("POST", "PHP/servicetest.php");
//  xmlhttp.open("POST", "http://localhost:8052/test/PHP/servicetest.php", true);
//    xmlhttp.open("POST", "http://localhost:8052/test/PHP/servicetest.php", true)
//    xmlhttp.open("POST", "https://192.168.0.137/test/PHP/servicetest.php", true);
//xmlhttp.open("POST", "servicetest.php", true);
    
//xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//xmlhttp.setRequestHeader("Content-type", "application/json");
//    xmlhttp.setRequestHeader("Content-length", dbParam.length);
//xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.setRequestHeader("Cache-Control", "no-cache");
    xmlhttp.withCredentials = true;
xmlhttp.send("x=" + dbParam);
    
   xmlhttp.onerror = function()
   {
       alert("problem");
   }
    
   
   return false;
}


/*
function createCORSRequest(method, url){
    var xhr = new XMLHttpRequest();
    if ("withCredentials" in xhr){
        xhr.open(method, url, true);
    } else if (typeof XDomainRequest != "undefined"){
        xhr = new XDomainRequest();
        xhr.open(method, url);
    } else {
        xhr = null;
    }
    return xhr;
}

var request = createCORSRequest("get", "http://www.stackoverflow.com/");
if (request){
    request.onload = function() {
        // ...
    };
    request.onreadystatechange = handler;
    request.send();
}
*/