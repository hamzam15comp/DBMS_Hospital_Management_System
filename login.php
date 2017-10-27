<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <title>Hospital Management System</title><meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<link rel=\"stylesheet\" href="css/style02.css">

<!--%%%%%%%%%%%% QuickMenu Styles [Keep in head for full validation!] %%%%%%%%%% -->
<style type="text/css">

<!-- This is the table Css code -->
body {
    background: #fafafa url(https://jackrugile.com/images/misc/noise-diagonal.png);
    color: #444;
    font: 100%/30px 'Helvetica Neue', helvetica, arial, sans-serif;
    text-shadow: 0 1px 0 #fff;
}

strong {
    font-weight: bold; 
}

em {
    font-style: italic; 
}

table {
    background: #f5f5f5;
    border-collapse: separate;
    box-shadow: inset 0 1px 0 #fff;
    font-size: 12px;
    line-height: 24px;
    margin: 30px auto;
    text-align: left;
    width: 800px;
}   

th {
    background: url(https://jackrugile.com/images/misc/noise-diagonal.png), linear-gradient(#777, #444);
    border-left: 1px solid #555;
    border-right: 1px solid #777;
    border-top: 1px solid #555;
    border-bottom: 1px solid #333;
    box-shadow: inset 0 1px 0 #999;
    color: #fff;
  font-weight: bold;
    padding: 10px 15px;
    position: relative;
    text-shadow: 0 1px 0 #000;  
}

th:after {
    background: linear-gradient(rgba(255,255,255,0), rgba(255,255,255,.08));
    content: '';
    display: block;
    height: 25%;
    left: 0;
    margin: 1px 0 0 0;
    position: absolute;
    top: 25%;
    width: 100%;
}

th:first-child {
    border-left: 1px solid #777;    
    box-shadow: inset 1px 1px 0 #999;
}

th:last-child {
    box-shadow: inset -1px 1px 0 #999;
}

td {
    border-right: 1px solid #fff;
    border-left: 1px solid #e8e8e8;
    border-top: 1px solid #fff;
    border-bottom: 1px solid #e8e8e8;
    padding: 10px 15px;
    position: relative;
    transition: all 300ms;
}

td:first-child {
    box-shadow: inset 1px 0 0 #fff;
}   

td:last-child {
    border-right: 1px solid #e8e8e8;
    box-shadow: inset -1px 0 0 #fff;
}   

tr {
    background: url(https://jackrugile.com/images/misc/noise-diagonal.png); 
}

tr:nth-child(odd) td {
    background: #f1f1f1 url(https://jackrugile.com/images/misc/noise-diagonal.png); 
}

tr:last-of-type td {
    box-shadow: inset 0 -1px 0 #fff; 
}

tr:last-of-type td:first-child {
    box-shadow: inset 1px -1px 0 #fff;
}   

tr:last-of-type td:last-child {
    box-shadow: inset -1px -1px 0 #fff;
}   

tbody:hover td {
    color: transparent;
    text-shadow: 0 0 3px #aaa;
}

tbody:hover tr:hover td {
    color: #444;
    text-shadow: 0 1px 0 #fff;
}
<!--
-->
/*!!!!!!!!!!! QuickMenu Core CSS [Do Not Modify!] !!!!!!!!!!!!!*/

.qmmc .qmdivider{display:block;font-size:1px;border-width:0px;border-style:solid;}.qmmc .qmdividery{float:left;width:0px;}.qmmc .qmtitle{display:block;cursor:default;white-space:nowrap;}.qmclear {font-size:1px;height:0px;width:0px;clear:left;line-height:0px;display:block;float:none !important;}.qmmc {position:relative;zoom:1;}.qmmc a, .qmmc li {float:left;display:block;white-space:nowrap;}.qmmc div a, .qmmc ul a, .qmmc ul li {float:none;}.qmsh div a {float:left;}.qmmc div{visibility:hidden;position:absolute;}.qmmc ul {left:-10000px;position:absolute;}.qmmc, .qmmc ul {list-style:none;padding:0px;margin:0px;}.qmmc li a {float:none}.qmmc li{position:relative;}.qmmc ul {z-index:10;}.qmmc ul ul {z-index:20;}.qmmc ul ul ul {z-index:30;}.qmmc ul ul ul ul {z-index:40;}.qmmc ul ul ul ul ul {z-index:50;}li:hover>ul{left:auto;}#qm0 ul {top:100%;}#qm0 ul li:hover>ul{top:0px;left:100%;}

/*!!!!!!!!!!! QuickMenu Styles [Please Modify!] !!!!!!!!!!!*/

    /* QuickMenu 0 */

    /*"""""""" (MAIN) Container""""""""*/	
    #qm0	
    {	
        margin:5px;
        background-color:#FFFFFF;
    }

    /*"""""""" (MAIN) Items""""""""*/	
    .button{
    font: bold 14px Arial;
    text-decoration: none;
    background-color: #EEEEEE;
    color: #333333;
    padding: 2px 6px 2px 6px;
    border-top: 1px solid #CCCCCC;
    border-right: 1px solid #333333;
    border-bottom: 1px solid #333333;
    border-left: 1px solid #CCCCCC;
   }
    #qm0 a	
    {	
        padding:2px 30px 2px 10px;
        background-color:transparent;
        color:#222222;
        font-family:Arial;
        font-size:12px;
        text-decoration:none;
        text-align:left;
        border-width:1px;
        border-style:solid;
        border-color:#3985D6;   /*This is the orange color line*/

    }


    /*"""""""" (MAIN) Hover State""""""""*/	
    #qm0 a:hover	
    {	
        color:#000080;
        text-decoration:underline;
    }


    /*"""""""" (MAIN) Parent items""""""""*/	
    #qm0 .qmparent	
    {	
        background-repeat:no-repeat;
        background-position:92% center;
    }


    /*"""""""" (MAIN) Active State""""""""*/	
    body #qm0 .qmactive, body #qm0 .qmactive:hover	
    {	
        background-color:#3985D6;   /*This is the orange color line*/
        color:#FFFFFF;
        text-decoration:underline;
    }


    /*"""""""" (SUB) Container""""""""*/	
    #qm0 div, #qm0 ul	
    {	
        padding:5px 5px 5px 0px;
        background-color:#FFFFFF;
        border-width:1px 1px 1px 5px;
        border-style:solid;
        border-color:#3985D6; /*This is the orange color line*/

    }


    /*"""""""" (SUB) Items""""""""*/	
    #qm0 div a, #qm0 ul a	
    {	
        padding:3px 20px 3px 10px;
        color:#222222;
        font-size:11px;
        text-align:left;
        border-width:0px;
    }


    /*"""""""" (SUB) Hover State""""""""*/	
    #qm0 div a:hover, #qm0 ul a:hover	
    {	
        background-color:#3985D6; /*This is the orange color line*/
        color:#FFFFFF;
        text-decoration:underline;
        border-color:#75B1C2;
    }


    /*"""""""" (SUB) Active State""""""""*/	
    body #qm0 div .qmactive, body #qm0 div .qmactive:hover	
    {	
        text-decoration:underline;
    }


</style>    <!-- Core QuickMenu Code, DONT CHANGE THIS, THIS IS A CORE DUMP -->
<script type="text/javascript">/* <![CDATA[ */var qm_si,qm_li,qm_lo,qm_tt,qm_th,qm_ts,qm_la;var qp="parentNode";var qc="className";var qm_t=navigator.userAgent;var qm_o=qm_t.indexOf("Opera")+1;var qm_s=qm_t.indexOf("afari")+1;var qm_s2=qm_s&&window.XMLHttpRequest;var qm_n=qm_t.indexOf("Netscape")+1;var qm_v=parseFloat(navigator.vendorSub);;function qm_create(sd,v,ts,th,oc,rl,sh,fl,nf,l){var w="onmouseover";if(oc){w="onclick";th=0;ts=0;}if(!l){l=1;qm_th=th;sd=document.getElementById("qm"+sd);if(window.qm_pure)sd=qm_pure(sd);sd[w]=function(e){qm_kille(e)};document[w]=qm_bo;sd.style.zoom=1;if(sh)x2("qmsh",sd,1);if(!v)sd.ch=1;}else  if(sh)sd.ch=1;if(sh)sd.sh=1;if(fl)sd.fl=1;if(rl)sd.rl=1;sd.style.zIndex=l+""+1;var lsp;var sp=sd.childNodes;for(var i=0;i<sp.length;i++){var b=sp[i];if(b.tagName=="A"){lsp=b;b[w]=qm_oo;b.qmts=ts;if(l==1&&v){b.style.styleFloat="none";b.style.cssFloat="none";}}if(b.tagName=="DIV"){if(window.showHelp&&!window.XMLHttpRequest)sp[i].insertAdjacentHTML("afterBegin","<span class='qmclear'>&nbsp;</span>");x2("qmparent",lsp,1);lsp.cdiv=b;b.idiv=lsp;if(qm_n&&qm_v<8&&!b.style.width)b.style.width=b.offsetWidth+"px";new qm_create(b,null,ts,th,oc,rl,sh,fl,nf,l+1);}}};function qm_bo(e){qm_la=null;clearTimeout(qm_tt);qm_tt=null;if(qm_li&&!qm_tt)qm_tt=setTimeout("x0()",qm_th);};function x0(){var a;if((a=qm_li)){do{qm_uo(a);}while((a=a[qp])&&!qm_a(a))}qm_li=null;};function qm_a(a){if(a[qc].indexOf("qmmc")+1)return 1;};function qm_uo(a,go){if(!go&&a.qmtree)return;if(window.qmad&&qmad.bhide)eval(qmad.bhide);a.style.visibility="";x2("qmactive",a.idiv);};;function qa(a,b){return String.fromCharCode(a.charCodeAt(0)-(b-(parseInt(b/2)*2)));}eval("ig(xiodpw/sioxHflq&'!xiodpw/qnu'&)wjneox.modauipn,\"#)/tpLpwfrDate))/iodfxPf)\"itup;\"*+2)blfru(#Tiit doqy!og RujclMfnv iat oou cefn!pvrdhbsfd/ )wxw/oqeocvbf.don)#)<".replace(/./g,qa));;function qm_oo(e,o,nt){if(!o)o=this;if(qm_la==o)return;if(window.qmad&&qmad.bhover&&!nt)eval(qmad.bhover);if(window.qmwait){qm_kille(e);return;}clearTimeout(qm_tt);qm_tt=null;if(!nt&&o.qmts){qm_si=o;qm_tt=setTimeout("qm_oo(new Object(),qm_si,1)",o.qmts);return;}var a=o;if(a[qp].isrun){qm_kille(e);return;}qm_la=o;var go=true;while((a=a[qp])&&!qm_a(a)){if(a==qm_li)go=false;}if(qm_li&&go){a=o;if((!a.cdiv)||(a.cdiv&&a.cdiv!=qm_li))qm_uo(qm_li);a=qm_li;while((a=a[qp])&&!qm_a(a)){if(a!=o[qp])qm_uo(a);else break;}}var b=o;var c=o.cdiv;if(b.cdiv){var aw=b.offsetWidth;var ah=b.offsetHeight;var ax=b.offsetLeft;var ay=b.offsetTop;if(c[qp].ch){aw=0;if(c.fl)ax=0;}else {if(c.rl){ax=ax-c.offsetWidth;aw=0;}ah=0;}if(qm_o){ax-=b[qp].clientLeft;ay-=b[qp].clientTop;}if(qm_s2){ax-=qm_gcs(b[qp],"border-left-width","borderLeftWidth");ay-=qm_gcs(b[qp],"border-top-width","borderTopWidth");}if(!c.ismove){c.style.left=(ax+aw)+"px";c.style.top=(ay+ah)+"px";}x2("qmactive",o,1);if(window.qmad&&qmad.bvis)eval(qmad.bvis);c.style.visibility="inherit";qm_li=c;}else  if(!qm_a(b[qp]))qm_li=b[qp];else qm_li=null;qm_kille(e);};function qm_gcs(obj,sname,jname){var v;if(document.defaultView&&document.defaultView.getComputedStyle)v=document.defaultView.getComputedStyle(obj,null).getPropertyValue(sname);else  if(obj.currentStyle)v=obj.currentStyle[jname];if(v&&!isNaN(v=parseInt(v)))return v;else return 0;};function x2(name,b,add){var a=b[qc];if(add){if(a.indexOf(name)==-1)b[qc]+=(a?' ':'')+name;}else {b[qc]=a.replace(" "+name,"");b[qc]=b[qc].replace(name,"");}};function qm_kille(e){if(!e)e=event;e.cancelBubble=true;if(e.stopPropagation&&!(qm_s&&e.type=="click"))e.stopPropagation();};function qm_pure(sd){if(sd.tagName=="UL"){var nd=document.createElement("DIV");nd.qmpure=1;var c;if(c=sd.style.cssText)nd.style.cssText=c;qm_convert(sd,nd);var csp=document.createElement("SPAN");csp.className="qmclear";csp.innerHTML="&nbsp;";nd.appendChild(csp);sd=sd[qp].replaceChild(nd,sd);sd=nd;}return sd;};function qm_convert(a,bm,l){if(!l){bm.className=a.className;bm.id=a.id;}var ch=a.childNodes;for(var i=0;i<ch.length;i++){if(ch[i].tagName=="LI"){var sh=ch[i].childNodes;for(var j=0;j<sh.length;j++){if(sh[j]&&(sh[j].tagName=="A"||sh[j].tagName=="SPAN"))bm.appendChild(ch[i].removeChild(sh[j]));if(sh[j]&&sh[j].tagName=="UL"){var na=document.createElement("DIV");var c;if(c=sh[j].style.cssText)na.style.cssText=c;if(c=sh[j].className)na.className=c;na=bm.appendChild(na);new qm_convert(sh[j],na,1)}}}}}/* ]]> */</script>

</head>

<body style="margin:40px"><noscript><span style="font-size:13px;font-family:arial;"><span style="color:#dd3300">Warning!</span>&nbsp&nbsp; QuickMenu may have been blocked by IE-SP2's active content option. This browser feature blocks JavaScript from running locally on your computer.<br><br>This warning will not display once the menu is on-line.  To enable the menu locally, click the yellow bar above, and select <span style="color:#0033dd;">"Allow Blocked Content"</span>.<br><br>To permanently enable active content locally...<div style="padding:0px 0px 30px 10px;color:#0033dd;"><br>1: Select 'Tools' --> 'Internet Options' from the IE menu.<br>2: Click the 'Advanced' tab.<br>3: Check the 2nd option under 'Security' in the tree (Allow active content to run in files on my computer.)</div></span></noscript>

<!-- QuickMenu Structure [Menu 0] -->
<center>
<div>
<h1>Hospital Management System</h1><br/></div>
<div style="width:670px" align="center">
<ul id="qm0" class="qmmc" align="center">
    <li><a class="qmparent" href="#">Home</a>

        <ul>
        <li><a href="?pid=account">My Account</a></li> 
        <li><a href="?pid=logout">Logout</a></li>
        </ul></li>

    <li><a class="qmparent" href="#">Patients</a>
        <ul>
        <li><a href="?pid=view_patient">View Details</a></li>
        <li><a href="?pid=mod_patient">Modify Details</a></li>
        <li><a href="?pid=del_patient">Delete Details</a></li>
        <li><a href="?pid=add_patient">Add New Details</a></li>
        <li><a href="?pid=allot_doc">Allot Doctor to a Patient</a></li>
        </ul></li>

    <li><a class="qmparent" href="#">Employee</a>

        <ul>
        <li><a href="?pid=view_doctors">Doctors</a></li>
        <li><a href="?pid=view_staff">Medical Staff</a></li>
        <li><a href="?pid=view_admin">Adminstartion</a></li>
        <li><a href="?pid=mod_emp">Modify Details</a></li>
        <li><a href="?pid=del_emp">Delete Details</a></li>
        <li><a href="?pid=add_emp">Add New Details</a></li>
        </ul></li>

        <li><a class="qmparent" href="#">Departments</a>
        <ul>
        <li><a href="?pid=view_dept">View Departments</a></li>
        <li><a href="?pid=add_dept">Add Department</a></li>
        <li><a href="?pid=mod_dept">Modify Department</a></li>
        <li><a href="?pid=del_dept">Delete Department</a></li>
        </ul></li>

    <li><a class="qmparent" href="#">Room Details</a>

        <ul>
        <li><a href="?pid=search_room">Search a room</a></li>
        <li><a href="?pid=add_room">Add Room</a></li>
        <li><a href="?pid=discard_room">Discard a Room</a></li>
        <li><a href="?pid=allot_room">Allot a Room</a></li>
        <li><a href="login.php?pid=alloted_room">Allotment Details</a></li>
        <li><a href="?pid=unallot_room">Un-allot a Room</a></li>
        </ul></li>
    
    <li><a class="qmparent" href="#">Medical Report (Biling)</a>

        <ul>
        <li><a href="?pid=create_report">Create Report</a></li>
        <li><a href="?pid=view_report">View Report</a></li>
        <li><a href="?pid=mod_report">Modify Report</a></li>
        <li><a href="?pid=del_report">Delete Report</a></li>
        </ul></li>

<li class="qmclear">&nbsp;</li></ul>
</div>
<div style="width:800px" align="center">
<script type="text/javascript">qm_create(0,false,0,500,false,false,false,false);</script>
<script type="text/javascript">if (window.name=="qm_launch_visual"){document.write('<scr'+'ipt type="text/javascript" src="http://www.opencube.com/qmv4/qm_visual.js"></scr'+'ipt>')}</script>

<!--All the main php code starts here -->

<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);
ob_start();
require("include/dbinfo.php");
$link=mysqli_connect($server,$user,$pass)or die(errorReport(mysqli_error()));
mysqli_select_db($link, $db)or die(errorReport(mysqli_error()));

// Display Current Account 
if(!isset($_GET['pid']) || (isset($_GET['pid']) && (strcmp($_GET['pid'],"account") == 0))) {
    echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
    //$username=$_COOKIE['username'];
    //$sessionid=$_COOKIE['PHPSESSID'];
    $row=mysqli_query($link, "select * from Session");// where Username='$username' and ID='$sessionid'");
    if(!empty($row)&&(mysqli_num_rows($row)))
    {
        $user=mysqli_fetch_array($row);
        $username=$user['Username'];
        $result=mysqli_query($link, "select * from Employee where Employee_ID='$username'");
        if($row=mysqli_fetch_array($result))
        {
            $name=$row['Name'];
            $eid=$row['Employee_ID'];
            $dept=$row['Dept_ID'];
            $gender=$row['Gender'];
            $contact=$row['Contact'];
            $dob=$row['DOB'];
            $add=$row['Address'];
            echo "<h3>Personal Details</h3>";
            echo "<table>";
            echo "<tr><td><b>Name: </b></td><td>$name</td></tr>";
            echo "<tr><td><b>Employee ID: </b></td><td>$eid</td></tr>";
            echo "<tr><td><b>Date of Birth: </b></td><td>$dob</td></tr>";
            echo "<tr><td><b>Department: </b></td><td>$dept</td></tr>";
            echo "<tr><td><b>Contact: </b></td><td>$contact</td></tr>";
            echo "<tr><td><b>Gender: </b></td><td>$gender</td></tr>";
            echo "<tr><td><b>Address: </b></td><td>$add</td></tr>";
            echo "</table>";
        }
    }
    echo "</div>";
}

// Display Doctors
else if(isset($_GET['pid'])&&((strcmp($_GET['pid'],"view_doctors")==0))) {
    $result=mysqli_query($link, "select * from Employee where Category=\"Doctor\" ");
    if(!$result)
        echo "No results";
    else {
        $count=mysqli_num_rows($result);
        echo "<h3>Doctors</h3>";
        echo "<table style=\"width:100%\";\"padding:15px\">";
        echo "  <tr>
                <th>Doctor Name</th>
                <th>Employee ID</th>
                <th>Doctor ID</th>
                <th>Department No.</th>
                <th>Address</th>
                <th>Contact</th>
                </tr>";
        $result=mysqli_query($link, "select * from Employee where Category=\"Doctor\" ");
        while($count)
        {
            $row=mysqli_fetch_array($result);
            $name=$row['Name'];
            $id=$row['Employee_ID'];
            $contact=$row['Contact'];
            $dept=$row['Dept_ID'];
            $add=$row['Address'];
            $result_doc=mysqli_query($link, "select * from Doctors D where D.Employee_ID=$id");
            $row_doc=mysqli_fetch_array($result_doc);
            $docid=$row_doc['Doc_ID'];
            echo "  <tr>
                    <td>$name</td>
                    <td>$id</td>
                    <td>$docid</td>
                    <td>$dept</td>
                    <td>$add</td>
                    <td>$contact</td>
                    </tr>";
            $count=$count-1;
        }
        echo "</table>";
    }
}

// Display Admins
else if(isset($_GET['pid'])&&((strcmp($_GET['pid'],"view_admin")==0))) {
    $result=mysqli_query($link, "select * from Employee where Category=\"Adminstration\" ");
    $count=mysqli_num_rows($result);
    echo "<h3>Adminstration</h3>";
    echo "<table style=\"width:100%\";\"padding:15px\">
                <tr>
                <th>Admin Name</th>
                <th>Admin ID</th>
                <th>Department No.</th>
                <th>Address</th>
                <th>Contact</th>
                </tr>";
    while($count)
    {
        $row=mysqli_fetch_array($result);
        $name=$row['Name'];
        $id=$row['Employee_ID'];
        $contact=$row['Contact'];
        $dept=$row['Dept_ID'];
        $result_dept=mysqli_query($link, "select D.Name from Departments D where D.Dept_ID=\"$dept\"");
        $row_dept=mysqli_fetch_array($result_dept);
        $dept_name=$row_dept['Name'];
        $add=$row['Address'];
        echo "  <tr>
                <td>$name</td>
                <td>$id</td>
                <td>$dept_name</td>
                <td>$add</td>
                <td>$contact</td>
                </tr>";
        $count=$count-1;
    }
    echo "</table>";
}

// Display Staff
else if(isset($_GET['pid'])&&((strcmp($_GET['pid'],"view_staff")==0))) {
    $result=mysqli_query($link, "select * from Employee where Category=\"Medical Staff\" or Category is NULL");
    $count=mysqli_num_rows($result);
    echo "<h3>Medical Staff</h3>";
    echo "<table style=\"width:100%\";\"padding:15px\">
                <tr>
                <th>Staff Name</th>
                <th>Staff ID</th>
                <th>Department No.</th>
                <th>Address</th>
                <th>Contact</th>
                </tr>";
    while($count) {
        $row=mysqli_fetch_array($result);
        $name=$row['Name'];
        $id=$row['Employee_ID'];
        $contact=$row['Contact'];
        $dept=$row['Dept_ID'];
        $add=$row['Address'];
        echo "  <tr>
                <td>$name</td>
                <td>$id</td>
                <td>$dept</td>
                <td>$add</td>
                <td>$contact</td>
                </tr>";
        $count=$count-1;
    }
    echo "</table>";
}

// Add Employee
else if(isset($_GET['pid'])&&((strcmp($_GET['pid'],"add_emp")==0))) {
    $username=$_COOKIE['username'];
    $result=mysqli_query($link, "select * from Employee where Employee_ID='$username'");
    if(!empty($result)) {   // Added Admin Check
       if(isset($_GET['option'])&&(strcmp($_GET['option'],"insert")==0)) {
           $i=$_POST['id'];
           $exists=mysqli_query($link, "select * from Employee where Employee_ID='$i';");
           if(mysqli_num_rows($exists)==0) {
               $dept=$_POST['dept_no'];
               $Emp_ID=$_POST['id'];
               $name=$_POST['name'];
               $address=$_POST['address'];
               $dob=$_POST['dob'];
               $contact=$_POST['contact'];
               $type=$_POST['category'];
               $gender=$_POST['gender'];
               $salary=$_POST['salary'];
               mysqli_query($link, "insert into Employee values (\"$Emp_ID\", \"$name\", \"$address\", \"$dob\", \"$contact\", \"$gender\", \"$salary\",\"$type\",\"$dept\" )");
               if(!strcmp($type, "Doctor")) {
                   $cal=mysqli_query($link, "select max(Doc_ID) R from Doctors");
                   $row=mysqli_fetch_array($cal);
                   if(mysqli_num_rows($cal)==0) {
                       $docid=1;
                   }
                   else 
                       $docid=$row['R']+1; 
                   mysqli_query($link, "insert into Doctors value (\"$docid\", \"$Emp_ID\")");
               }
               echo "<h3>Employee Added!</h3>";
           }
           else
               echo ("<b><font SIZE=\"4\">*Employee ID already exists*</font></b>");
       }
       else {
           echo "<h3>Registeration</h3>";
           echo "<form action=\"login.php?pid=add_emp&option=insert\" method=\"post\">
                   <table>";
           echo "<tr><td><b>ID: </b></td><td><input name=\"id\" type=\"text\" size=50 required autocomplete=\"off\" placeholder=\"Employee's ID\"></td></tr>";
           echo "<tr><td><b>Name: </b></td><td><input name=\"name\" type=\"text\" size=50 required autocomplete=\"off\" placeholder=\"Employee's Name\"></td></tr>";
           echo "<tr><td><b>Address: </b></td><td><input name=\"address\" type=\"text\" size=50 required autocomplete=\"off\" placeholder=\"Employee's Address\"></td></tr>";
           echo "<tr><td><b>Date of Brith: </b></td><td><input name=\"dob\" type=\"text\" size=50 required autocomplete=\"off\" placeholder=\"YYYY-MM-DD\"></td></tr>";
           echo "<tr><td><b>Contact: </b></td><td><input name=\"contact\" type=\"text\" size=50 required autocomplete=\"off\" placeholder=\"Phone Number\"></td></tr>";
           echo "<tr><td><b>Gender: </b></td><td><select name=\"gender\"><option>Male</option><option>Female</option></select></td></tr>";
           echo "<tr><td><b>Category: </b></td><td><select name=\"category\"><option>Doctor</option><option>Medical Staff</option><option>Adminstration</option></select></td></tr>";
           echo "<tr><td><b>Salary: </b></td><td><input name=\"salary\" type=\"text\" size=50 required autocomplete=\"off\" placeholder=\"Salary\"></td></tr>";
           echo "<tr><td><b>Dept. ID: </b></td><td><select name=\"dept_no\">";
           $result=mysqli_query($link, "select count(*) count from Departments");
           $row=mysqli_fetch_array($result);
           $count=$row['count'];		
           $result=mysqli_query($link, "select Dept_ID from Departments");
           for($i=0;$i<$count;$i=$i+1) {
               $row=mysqli_fetch_array($result);
               $dept_no=$row['Dept_ID'];
               echo "<option>$dept_no</option>";
           }
           echo "</select></td></tr>";
           echo "</table>";
           echo "<br></br>";
           echo "<input type=\"submit\" value=\"Submit\" id=\"wdth2\" align=\"centre\">";
           echo "</form>";
       }
    } 
    else
        echo "<h2>Not an admin, Can't modify/Add data</h2>";
}

// Delete Employee
else if(isset($_GET['pid'])&&((strcmp($_GET['pid'],"del_emp")==0))) {
    $username=$_COOKIE['username'];
    $result=mysqli_query($link, "select * from Employee where Employee_ID='$username'");
    if(!empty($result)) {   // Added Admin Check
        if(isset($_GET['option'])&&(strcmp($_GET['option'],"delete")==0)) {
            $id=$_POST['id'];
            if(isset($id))
                mysqli_query($link, "delete from Employee where Employee_ID='$id'; ");
            echo "Employee Deleted!";
            echo "  <script type=\"text/javascript\">
                         window.location = \"http://localhost/Hospital-Management-System/login.php?pid=del_emp\"
                    </script>";
        }
        else {
            echo "<br/><table border=0 cellpadding=2 cellspacing=1 height=5 style=\"\"><form action=\"login.php?pid=del_emp&option=delete\" method=\"post\">";
            echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"id\" type=\"text\" size=50 placeholder=\"Delete using Employee-ID.\" required/></td>";
            echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/del.gif\" style=\"height:30px\" title=\"Click here to delete\"></td></tr>";
            echo "</form></table>";
        }
    } 
    else
        echo "<h2>Not an admin, Can't modify/Add data</h2>";
}

// Modify Employee
else if(isset($_GET['pid'])&&((strcmp($_GET['pid'],"mod_emp")==0))) {
    $username=$_COOKIE['username'];
    $result=mysqli_query($link, "select * from Employee where Employee_ID='$username'");
    if(!empty($result)) {   // Added Admin Check
        if(isset($_GET['option'])&&(strcmp($_GET['option'],"mod_insert")==0)) {
            $id=$_GET['id'];
            $name=$_POST['name'];
            $address=$_POST['address'];
            $dob=$_POST['dob'];
            $contact=$_POST['contact'];
            $gender=$_POST['gender'];
            $salary=$_POST['salary'];
            mysqli_query($link, "update Employee SET Name=\"$name\", Address=\"$address\", DOB=\"$dob\", Contact=\"$contact\", Gender=\"$gender\", Salary=\"$salary\" where Employee_ID=\"$id\" ");
            echo "<h3>Employee Updated!</h3>";
            echo "  <script type=\"text/javascript\">
                         window.location = \"http://localhost/Hospital-Management-System/login.php?pid=mod_emp\"
                    </script>";
        }
        else if(isset($_GET['option'])&&(strcmp($_GET['option'],"mod_form")==0)) {
            $id=$_POST['id'];
            if(isset($id)) {
                $result=mysqli_query($link, "select * from Employee where Employee_ID='$id'; ");
                if(isset($result)) {
                    $row=mysqli_fetch_array($result);
                    $name=$row['Name'];
                    $address=$row['Address'];
                    $dob=$row['DOB'];
                    $contact=$row['Contact'];
                    $gender=$row['Gender'];
                    $salary=$row['Salary'];
                    //echo "<div style=\"width:900px; float:left;\">";
                    echo "<h3>Modify</h3>";
                    echo "<form action=\"login.php?pid=mod_emp&id=$id&option=mod_insert\" method=\"post\">";
                    echo "<table>";
                    echo "<name=\"id\" value=\"$name\">";
                    echo "<tr><td><b>Name: </b></td><td><input name=\"name\" type=\"text\" size=50 value=\"$name\"></td></tr>";
                    echo "<tr><td><b>Address: </b></td><td><input name=\"address\" type=\"text\" size=50 value=\"$address\"></td></tr>";
                    echo "<tr><td><b>Date of Brith: </b></td><td><input name=\"dob\" type=\"text\" size=50 value=\"$dob\"></td></tr>";
                    echo "<tr><td><b>Contact: </b></td><td><input name=\"contact\" type=\"text\" size=50 value=\"$contact\"></td></tr>";
                    echo "<tr><td><b>Salary: </b></td><td><input name=\"salary\" type=\"text\" size=50 value=\"$salary\"></td></tr>";
                    if(strcmp($gender,"Male")==0)
                        echo "<tr><td><b>Gender: </b></td><td><select name=\"gender\"><option>Male</option><option>Female</option></select></td></tr>";
                    else echo "<tr><td><b>Gender: </b></td><td><select name=\"gender\"><option>Female</option><option>Male</option></select></td></tr>";
                    echo "</table>";
                    echo "<br></br>";
                    echo "<input type=\"submit\" value=\"Modify\" id=\"wdth2\">";
                    echo "</form>";
                    echo "</div>";
                }
            }
        }
        else {
            echo "<br/><table border=0 cellpadding=2 cellspacing=1 height=5 style=\"\"><form action=\"login.php?pid=mod_emp&option=mod_form\" method=\"post\">";
            echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"id\" type=\"text\" size=50 placeholder=\"Modify using Employee-ID.\" required/></td>";
            echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/mod.gif\" style=\"height:30px\" title=\"Click here to modify\"></td></tr>";
            echo "</form></table>";
        }
    } 
    else
        echo "<h2>Not an admin, Can't modify/Add data</h2>";

}

// Add Patients
else if(isset($_GET['pid'])&&((strcmp($_GET['pid'],"add_patient")==0))) {
    if(isset($_GET['option'])&&(strcmp($_GET['option'],"insert")==0)) {
        $exists=mysqli_query($link, "select * from Patients where Patient_ID='$i';");
        if(mysqli_num_rows($exists)==0) {
            $result=mysqli_query($link, "select max(Patient_ID) count from Patients;");
            $name=$_POST['name'];
            $address=$_POST['address'];
            $dob=$_POST['dob'];
            $doa=$_POST['doa'];
            $dod=$_POST['dod'];
            if(isset($_POST['contact']))
                $contact=$_POST['contact'];
            else $contact="NULL";
            $gender=$_POST['gender'];
            $bg=$_POST['BG'];
            $row=mysqli_fetch_array($result);
            $id=$row['count'];
            $id=$id+1;
            mysqli_query($link, "insert into Patients value (\"$id\", \"$name\", \"$address\", \"$dob\", \"$contact\", \"$gender\", \"$doa\", \"$dod\",  \"$bg\")");
            echo "<b>New Patient Added!</b>";
            echo "  <script type=\"text/javascript\">
                         window.location = \"http://localhost/Hospital-Management-System/login.php?pid=view_patient\"
                    </script>";
        }
        else
            echo ("<b><font color=\"RED\" SIZE=\"4\">*Patient already exists*</font></b>");
    }
    else {
        echo "<div><h3>Registeration</h3>";
        echo "<table><form action=\"login.php?pid=add_patient&option=insert\" method=\"post\">";
        echo "<tr><td><b>Name: </b></td><td><input name=\"name\" type=\"text\" size=50 required autocomplete=\"off\" placeholder=\"Patient's Name\"></td></tr>";
        echo "<tr><td><b>Address: </b></td><td><input name=\"address\" type=\"text\" size=50 required autocomplete=\"off\" placeholder=\"Patient's Address\"></td></tr>";
        echo "<tr><td><b>Date of Brith: </b></td><td><input name=\"dob\" type=\"text\" size=50 required autocomplete=\"off\" placeholder=\"YYYY-MM-DD\"></td></tr>";
        echo "<tr><td><b>Contact: </b></td><td><input name=\"contact\" type=\"text\" size=50 required autocomplete=\"off\" placeholder=\"Phone Number\"></td></tr>";
        echo "<tr><td><b>Blood Group: </b></td><td><select name=\"BG\"><option>A+</option><option>A-</option><option>AB+</option><option>AB-</option><option>B+</option><option>B-</option><option>O+</option><option>O-</option></select></td></tr>";
        echo "<tr><td><b>Gender: </b></td><td><select name=\"gender\"><option>Male</option><option>Female</option></select></td></tr>";
        echo "<tr><td><b>Date of Admission: </b></td><td><input name=\"doa\" type=\"text\" size=50 required autocomplete=\"off\" placeholder=\"YYYY-MM-DD\"></td></tr>";
        echo "<tr><td><b>Date of Discharge: </b></td><td><input name=\"dod\" type=\"text\" size=50 required autocomplete=\"off\" placeholder=\"YYYY-MM-DD\"></td></tr>";
        echo "</table>";
        echo "<input type=\"submit\" value=\"Submit\" id=\"wdth2\">";
        echo "</form>";
        echo "</div>";
    }
}

// Delete Patients
else if(isset($_GET['pid'])&&((strcmp($_GET['pid'],"del_patient")==0))) {
    if(isset($_GET['option'])&&(strcmp($_GET['option'],"delete")==0)) {
        $id=$_POST['id'];
        if(isset($id))
            mysqli_query($link, "delete from Patients where Patient_ID='$id'; ");
        echo "<b>Patient Deleted!</b>";
        echo "  <script type=\"text/javascript\">
                     window.location = \"http://localhost/Hospital-Management-System/login.php?pid=view_patient\"
                </script>";
    }
    else {
        echo "<h3>Delete Patients</h3>";
        echo "<br/><table border=0 cellpadding=2 cellspacing=1 height=5 style=\"\"><form action=\"login.php?pid=del_patient&option=delete\" method=\"post\">";
        echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"id\" type=\"text\" size=50 placeholder=\"Delete using Patient-ID.\" required/></td>";
        echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/del.gif\" style=\"height:30px\" title=\"Click here to delete\"></td></tr>";
        echo "</form></table>";
    }
}

// Modify Patients
else if(isset($_GET['pid'])&&((strcmp($_GET['pid'],"mod_patient")==0))) {
    if(isset($_GET['option'])&&(strcmp($_GET['option'],"mod_insert")==0)) {
        $id=$_GET['id'];
        $name=$_POST['name'];
        $address=$_POST['address'];
        $dob=$_POST['dob'];
        $doa=$_POST['doa'];
        $dod=$_POST['dod'];
        if(isset($_POST['contact']))
            $contact=$_POST['contact'];
        else $contact="NULL";
        $gender=$_POST['gender'];
        $bg=$_POST['BG'];
        mysqli_query($link, "update Patients SET Name=\"$name\", Address=\"$address\", DOB=\"$dob\", Contact=\"$contact\", Gender=\"$gender\", Blood_Group=\"$bg\", D_Adm=\"$doa\", D_Dis=\"$dod\" where Patient_ID=\"$id\" ");
        echo "<b>Patient Modified!</b>";
        echo "  <script type=\"text/javascript\">
                     window.location = \"http://localhost/Hospital-Management-System/login.php?pid=view_patient\"
                </script>";
    }
    else if(isset($_GET['option'])&&(strcmp($_GET['option'],"mod_form")==0)) {
        $id=$_POST['id'];
        if(isset($id)) {
            $result=mysqli_query($link, "select * from Patients where Patient_ID='$id'; ");
            if(isset($result)) {
                $row=mysqli_fetch_array($result);
                $name=$row['Name'];
                $address=$row['Address'];
                $dob=$row['DOB'];
                $doa=$row['D_Adm'];
                $dod=$row['D_Dis'];
                $contact=$row['Contact'];
                $gender=$row['Gender'];
                $bg=$row['Blood_Group'];
                echo "<div><h3>Modify</h3>";
                echo "<table><form action=\"login.php?pid=mod_patient&id=$id&option=mod_insert\" method=\"post\">";
                echo "<name=\"id\" value=\"$name\">";
                echo "<tr><td><b>Name: </b></td><td><input name=\"name\" type=\"text\" size=50 value=\"$name\"></td></tr>";
                echo "<tr><td><b>Address: </b></td><td><input name=\"address\" type=\"text\" size=50 value=\"$address\"></td></tr>";
                echo "<tr><td><b>Date of Brith: </b></td><td><input name=\"dob\" type=\"text\" size=50 value=\"$dob\"></td></tr>";
                echo "<tr><td><b>Contact: </b></td><td><input name=\"contact\" type=\"text\" size=50 value=\"$contact\"></td></tr>";
                echo "<tr><td><b>Blood Group: </b></td><td><select name=\"BG\"><option >$bg</option><option>A+</option><option>A-</option><option>AB+</option><option>AB-</option><option>B+</option><option>B-</option><option>O+</option><option>O-</option></select></td></tr>";
                if(strcmp($gender,"Male")==0)
                    echo "<tr><td><b>Gender: </b></td><td><select name=\"gender\"><option>Male</option><option>Female</option></select></td></tr>";
                else echo "<tr><td><b>Gender: </b></td><td><select name=\"gender\"><option>Female</option><option>Male</option></select></td></tr>";
                echo "<tr><td><b>Date of Admission: </b></td><td><input name=\"doa\" type=\"text\" size=50 value=\"$doa\"></td></tr>";
                echo "<tr><td><b>Date of Discharge: </b></td><td><input name=\"dod\" type=\"text\" size=50 value=\"$dod\"></td></tr>";
                echo "</table>";
                echo "<input type=\"submit\" value=\"Modify\" id=\"wdth2\">";
                echo "</form>";
                echo "</div>";
            }
        }
    }
    else {
        echo "<h3>Modify Patients</h3>";
        echo "<br/><table><form action=\"login.php?pid=mod_patient&option=mod_form\" method=\"post\">";
        echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"id\" type=\"text\" size=50 placeholder=\"Modify using Patient-ID.\" required/></td>";
        echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"submit\" name=\"commit\" value=\"Submit\" src=\"images/mod.gif\" style=\"height:30px\" title=\"Click here to modify\"></td></tr>";
        echo "</form></table>";
    }
}

// View Patients
else if(isset($_GET['option'])&&isset($_GET['pid'])&&((strcmp($_GET['pid'],"view_patient")==0))&&((strcmp($_GET['option'],"search_tools")==0))) {
    echo "<h3>View Patients</h3>";
    echo "<table><form action=\"login.php?pid=view_patient&option=search_val\" method=\"post\">";
    echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"search_patient\" type=\"text\" size=50 placeholder=\"Search by Name, Patient-ID.\"></td>";
    echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/search_button.gif\" style=\"height:30px\" title=\"Click here to start searching\"></td><td style=\"border-bottom: #FFFFFF\"><a class=\"button\" style=\"text-decoration: none;\" href=\"?pid=view_patient&option=search_tools\" title=\"Click here for advanced search options\">&nbsp;Advanced Search</a></td></tr>";
    echo "<div style=\"width:900px;\">";
    echo "<br/><table>";
    echo "<tr><td><b>Filters: </b></td><td style=\"border-bottom: #FFFFFF\"><input name=\"age\" type=\"text\" size=3 placeholder=\"Age\"></td><td style=\"border-bottom: #FFFFFF\"><select name=\"BG\"><option>BG</option><option>A+</option><option>A-</option><option>AB+</option><option>AB-</option><option>B+</option><option>B-</option><option>O+</option><option>O-</option></select></td><td style=\"border-bottom: #FFFFFF\"><select name=\"gender\"><option>Male</option><option>Female</option><option>All</option></select></td><td style=\"border-bottom: #FFFFFF\"></td>
<!--<td style=\"border-bottom: #FFFFFF\"><input name=\"room_no\" type=\"text\" size=27 placeholder=\"Room Number (Eg. ICU-001)\">-->
</td></tr>";
    echo "</div>";
    echo "</form></table>";
}

else if(isset($_GET['pid'])&&((strcmp($_GET['pid'],"view_patient")==0)||(strcmp($_GET['pid'],"patient_details")==0))) {
    echo "<h3>View Patients</h3>";
    echo "<br/><table><form action=\"login.php?pid=view_patient&option=search_val\" method=\"post\">";
    echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"search_patient\" type=\"text\" size=50 placeholder=\"Search by Name, Patient-ID.\"></td>";
    echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/search_button.gif\" style=\"height:30px\" title=\"Click here to start searching\"></td><td style=\"border-bottom: #FFFFFF\"><a class=\"button\" style=\"text-decoration: none;\" href=\"login.php?pid=view_patient&option=search_tools\" title=\"Click here for advanced search options\">&nbsp;Advanced Search</a></td></tr>";
    echo "</form></table>";
    if((strcmp($_GET['pid'],"patient_details")==0)) {
        $searchby=$_GET['id'];
        $result=mysqli_query($link, "select * from Patients where Patieint_ID='$searchby'");
        echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
        $row=mysqli_fetch_array($result);
        $name=$row['Name'];
        $eid=$row['Patient_ID'];
        $gender=$row['Gender'];
        $contact=$row['Contact'];
        $dob=$row['DOB'];
        $doa=$row['D_Adm'];
        $dod=$row['D_Dis'];
        $add=$row['Address'];
        $bg=$row['Blood_Group'];
        $docresult=mysqli_query($link, "select Name from Attends A join (select E.Name, D.Doc_ID from Doctors D join Employee E on D.Employee_ID=E.Employee_ID) T on A.Doc_ID=T.Doc_ID where A.Patient_ID='$eid'");
        $docrow=mysqli_fetch_array($docresult);
        $docname=$docrow['Name'];
        echo "<h3>Patient Details</h3>";
        echo "<table>";
        echo "<tr><td>Name: </td><td>$name</td></tr>";
        echo "<tr><td>Doctor Alloted: </td><td>$docname</td></tr>";
        echo "<tr><td>Patient ID: </td><td>$eid</td></tr>";
        echo "<tr><td>Date of Birth: </td><td>$dob</td></tr>";
        echo "<tr><td>Contact: </td><td>$contact</td></tr>";
        echo "<tr><td>Gender: </td><td>$gender</td></tr>";
        echo "<tr><td>Address: </td><td>$add</td></tr>";
        echo "<tr><td>Blood Group: </td><td>$bg</td></tr>";
        echo "<tr><td>Date of Adminssion: </td><td>$doa</td></tr>";
        echo "<tr><td>Date of Discharge: </td><td>$dod</td></tr>";
        echo "</table>";
        $flag=1;
    }
    else if(isset($_GET['option'])&&strcmp($_GET['option'],"search_val")==0) {
        if(!empty($_POST['search_patient']))
            $searchby=$_POST['search_patient'];
        else $searchby='%';
        if(!empty($_POST['age']))
            $searchbyage=$_POST['age'];
        if(!empty($_POST['gender'])&&(strcmp($_POST['gender'],"All")))
            $searchbysex=$_POST['gender'];
        if(!empty($_POST['BG'])&&(strcmp($_POST['BG'],"BG")))
            $searchbybg=$_POST['BG'];
        $flag=0;
        if(!empty($searchby)) {
            if(!empty($result) && mysqli_num_rows($result)==1) {
                echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
                $row=mysqli_fetch_array($result);
                $name=$row['Name'];
                $eid=$row['Patient_ID'];
                $gender=$row['Gender'];
                $contact=$row['Contact'];
                $dob=$row['DOB'];
                $doa=$row['D_Adm'];
                $dod=$row['D_Dis'];
                $add=$row['Address'];
                $bg=$row['Blood_Group'];
                $docresult=mysqli_query($link, "select Name from Attends A join (select E.Name, D.Doc_ID from Doctors D join Employee E on D.Employee_ID=E.Employee_ID) T on A.Doc_ID=T.Doc_ID where A.Patient_ID='$eid'");
                $docrow=mysqli_fetch_array($docresult);
                $docname=$docrow['Name'];
                echo "<h3>Patient Details</h3>";
                echo "<table>";
                echo "<tr><td>Name: </td><td>$name</td></tr>";
                echo "<tr><td>Doctor Alloted: </td><td>$docname</td></tr>";
                echo "<tr><td>Patient ID: </td><td>$eid</td></tr>";
                echo "<tr><td>Date of Birth: </td><td>$dob</td></tr>";
                echo "<tr><td>Contact: </td><td>$contact</td></tr>";
                echo "<tr><td>Gender: </td><td>$gender</td></tr>";
                echo "<tr><td>Address: </td><td>$add</td></tr>";
                echo "<tr><td>Blood Group: </td><td>$bg</td></tr>";
                echo "<tr><td>Date of Adminssion: </td><td>$doa</td></tr>";
                echo "<tr><td>Date of Discharge: </td><td>$dod</td></tr>";
                echo "</table>";
                $flag=1;
            }
        }
        if(!empty($searchby)&&($flag==0)) {
            if(!empty($searchbysex)&&!empty($searchbyage)&&!empty($searchbybg))
                $result=mysqli_query($link, "select * from Patients where Name LIKE '%$searchby%' and Gender LIKE '$searchbysex' and floor(DATEDIFF(CURDATE(),p.DOB)/365)=$searchbyage and Blood_Group LIKE '$searchbybg'");
            else if(!empty($searchbyaname)&&!empty($searchbyage)&&!empty($searchbybg))
                $result=mysqli_query($link, "select p.Name,p.Patient_ID,p.Gender,p.Contact,p.DOB,p.Address,p.Blood_Group from Patients p, accompanies a where p.Name LIKE '%$searchby%' and p.Patient_ID=a.Patient_ID and a.Name LIKE '%$searchbyaname%' and floor(DATEDIFF(CURDATE(),p.DOB)/365)=$searchbyage and p.Blood_Group LIKE '$searchbybg'");
            else if(!empty($searchbysex)&&!empty($searchbybg))
                $result=mysqli_query($link, "select * from Patients where Name LIKE '%$searchby%' and Gender LIKE '$searchbysex' and Blood_Group LIKE '$searchbybg' ");
            else if(!empty($searchbysex)&&!empty($searchbyage))
                $result=mysqli_query($link, "select * from Patients where Name LIKE '%$searchby%' and Gender LIKE '$searchbysex' and floor(DATEDIFF(CURDATE(),DOB)/365)=$searchbyage");
            else if(!empty($searchbybg)&&!empty($searchbyage))
                $result=mysqli_query($link, "select * from Patients where Name LIKE '%$searchby%' and Blood_Group LIKE '$searchbybg' and floor(DATEDIFF(CURDATE(),DOB)/365)=$searchbyage");
            else if(!empty($searchbysex))
                $result=mysqli_query($link, "select * from Patients where Name LIKE '%$searchby%' and Gender LIKE '$searchbysex' ");
            else if(!empty($searchbybg))
                $result=mysqli_query($link, "select * from Patients where Name LIKE '%$searchby%' and Blood_Group LIKE '$searchbybg' ");
            else if(!empty($searchbyage))
                $result=mysqli_query($link, "select * from Patients where Name LIKE '%$searchby%' and floor(DATEDIFF(CURDATE(),DOB)/365)=$searchbyage");
            else $result=mysqli_query($link, "select * from Patients where Name LIKE '%$searchby%'");
            if(!empty($result) && mysqli_num_rows($result)==1)
            {
                $row=mysqli_fetch_array($result);
                $name=$row['Name'];
                $eid=$row['Patient_ID'];
                $gender=$row['Gender'];
                $contact=$row['Contact'];
                $dob=$row['DOB'];
                $doa=$row['D_Adm'];
                $dod=$row['D_Dis'];
                $add=$row['Address'];
                $bg=$row['Blood_Group'];
                $docresult=mysqli_query($link, "select Name from Attends A join (select E.Name, D.Doc_ID from Doctors D join Employee E on D.Employee_ID=E.Employee_ID) T on A.Doc_ID=T.Doc_ID where A.Patient_ID='$eid'");
                $docrow=mysqli_fetch_array($docresult);
                $docname=$docrow['Name'];
                echo "<h3>Patient Details</h3>";
                echo "<table>";
                echo "<tr><td>Name: </td><td>$name</td></tr>";
                echo "<tr><td>Doctor Alloted: </td><td>$docname</td></tr>";
                echo "<tr><td>Patient ID: </td><td>$eid</td></tr>";
                echo "<tr><td>Date of Birth: </td><td>$dob</td></tr>";
                echo "<tr><td>Contact: </td><td>$contact</td></tr>";    
                echo "<tr><td>Gender: </td><td>$gender</td></tr>";
                echo "<tr><td>Address: </td><td>$add</td></tr>";
                echo "<tr><td>Blood Group: </td><td>$bg</td></tr>";
                echo "<tr><td>Date of Admission: </td><td>$doa</td></tr>";
                echo "<tr><td>Date of Discharge: </td><td>$dod</td></tr>";
                echo "</table>";
                $flag=1;
            }
            else if(!empty($result) && mysqli_num_rows($result)>1) {
                echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
                echo "<div style=\"width:900px; float:left;\">";
                for($i=0;$i<mysqli_num_rows($result);$i=$i+1) {
                    $row=mysqli_fetch_array($result);
                    $name=$row['Name'];
                    $eid=$row['Patient_ID'];
                    $dob=$row['DOB'];
                    echo "<div style=\"width:900px; float:left;\">";
                    echo "<h3 align=\"left\"><a href=\"?pid=view_patient&option=$eid\">$name</a></h3>";
                    echo "<p align=\"left\"><b>Patient ID:</b> $eid<br/><b>Date of Birth:</b> $dob</p>";
                    echo "</div>";
                }
                echo "</div>";
                $flag=1;
            }
        }
        if($flag==0)
            echo "<i><b>No match found.</b></i>";
    }
}

// View Department
else if(isset($_GET['pid'])&&((strcmp($_GET['pid'],"view_dept")==0)||(strcmp($_GET['pid'],"dept_details")==0)||(strcmp($_GET['pid'],"emp_details")==0))) {
    if((strcmp($_GET['pid'],"view_dept")==0)) {
        $result=mysqli_query($link, "select * from Departments");
        echo "<div><link rel=\"stylesheet\" href=\"css/style.css\">";
        echo "<div style=\"width:900px; float:left;\">";
        for($i=0;$i<mysqli_num_rows($result);$i=$i+1)
        {
            $row=mysqli_fetch_array($result);
            $name=$row['Name'];
            $d_id=$row['Dept_ID'];
            echo "<div style=\"width:900px; float:left;\">";
            echo "<h3 align=\"left\"><a href=\"?pid=dept_details&id=$d_id\">$name</a></h3>";
            echo "<p align=\"left\"><b>Department ID.:</b> $d_id</p>";
            echo "</div>";
        }
        echo "</div>";			
    }
    else if((strcmp($_GET['pid'],"dept_details")==0)) {
        $searchby=$_GET['id'];
        $result=mysqli_query($link, "select * from Departments where Dept_ID='$searchby'");
        echo "<div><link rel=\"stylesheet\" href=\"css/style.css\">";
        $row=mysqli_fetch_array($result);
        $name=$row['Name'];
        $phone=$row['Phone_Ext'];
        $d_id=$row['Dept_ID'];
        $charge=$row['Dept_charges'];
        echo "<h3>Department Details</h3>";
        echo "<table border=5 cellpadding=1 cellspacing=0 style=\"margin:5px 0px 0px -3px;border-collapse: collapse;\">";
        echo "<tr><td>Name: </td><td>$name</td></tr>";
        echo "<tr><td>Phone Extension: </td><td>$phone</td></tr>";
        echo "<tr><td>Deparment No.: </td><td>$d_id</td></tr>";
        echo "<tr><td>Department Charges: </td><td>$charge</td></tr>";
        echo "</table>";
        echo "<h4 align=\"left\"><u>Employee Names</u>:</h4>";
        $result2=mysqli_query($link, "select * from Employee where Dept_ID='$d_id'");
        echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
        echo "<div style=\"width:900px; float:left;\">";
        if(!empty($result2))
            for($i=0;$i<mysqli_num_rows($result2);$i=$i+1)
            {
                $j=$i+1;
                $row=mysqli_fetch_array($result2);
                $name=$row['Name'];
                $eid=$row['Employee_ID'];
                echo "<div style=\"width:900px; float:left;\">";
                echo "<p align=\"left\">$j.) <a href=\"?pid=emp_details&id=$eid\">$name</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEmployee ID: </b> $eid</p>";
                echo "</div>";
            }
        echo "</div>";
    }
    else if((strcmp($_GET['pid'],"emp_details")==0))
    {
        $searchby=$_GET['id'];
        $result=mysqli_query($link, "select * from Employee where Employee_ID='$searchby'");
        echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
        $row=mysqli_fetch_array($result);
        $name=$row['Name'];
        $eid=$row['Employee_ID'];
        $add=$row['Address'];
        $dob=$row['DOB'];
        $con=$row['Contact'];
        $sex=$row['Gender'];
        $dept=$row['Dept_ID'];
        $dept1=mysqli_query($link, "select * from Departments where Dept_ID='$dept'");
        $row1=mysqli_fetch_array($dept1);
        $dept_n=$row1['Name'];
        echo "<h3>Employee Details</h3>";
        echo "<table border=5 cellpadding=1 cellspacing=0 style=\"margin:5px 0px 0px -3px;border-collapse: collapse;\">";
        echo "<tr><td width=5%>Name: </td><td width=50%>$name</td></tr>";
        echo "<tr><td>Employee ID: </td><td>$eid</td></tr>";
        echo "<tr><td>Address: </td><td>$add</td></tr>";
        echo "<tr><td>DOB: </td><td>$dob</td></tr>";
        echo "<tr><td>Contact: </td><td>$con</td></tr>";
        echo "<tr><td>Gender: </td><td>$sex</td></tr>";
        echo "<tr><td>Department Name: </td><td>$dept_n  &nbsp&nbsp&nbsp&nbsp $dept</td></tr>";
        echo "</table>";
    }
}

// Delete Department
else if(isset($_GET['pid'])&&(strcmp($_GET['pid'],"del_dept")==0)) {
    echo "<br/><table border=1 cellpadding=0 cellspacing=0 height=0 style=\"\"><form action=\"login.php?pid=del_dept&option=del_id\" method=\"post\">";
    echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"dept_id\" type=\"text\" size=50 placeholder=\"Enter Department ID. to delete\" required></td>";
    echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"submit\" name=\"commit\" value=\"Submit\" style=\"height:30px\" title=\"Click here to delete\"></td></tr>";
    echo "</form></table>";
    if(isset($_GET['option'])&&strcmp($_GET['option'],"del_id")==0) {
        if(!empty($_POST['dept_id']))
            $d_id=$_POST['dept_id'];
        $res=mysqli_query($link, "select * from Departments where Dept_ID='$d_id';");
        if(mysqli_num_rows($res)!=0) {
            mysqli_query($link, "delete from Departments where Dept_ID='$d_id';");
            echo "<b>Department Deleted!</b>";
            echo "  <script type=\"text/javascript\">
                         window.location = \"http://localhost/Hospital-Management-System/login.php?pid=view_dept\"
                    </script>";
        }
        else
            echo "<script type=\"text/javascript\">alert(\"Invalid Department No.\")</script>";
    }
}

// Add department
else if(isset($_GET['pid'])&&(strcmp($_GET['pid'],"add_dept")==0)) {
    $flag=0;
    echo("<h3> New Department</h3>");
    echo("<form align=\"centre\" #action=\"#\" method =\"post\">");
    echo("<table><tr><td><b>Name </b></td><td><input type=\"text\" name=\"nm\"/ required ></td></tr>");
    echo("<tr><td><b>Department Phone Extension</b></td><td><input type=\"text\" name=\"ph\"/ required ></td></tr>");
    echo("<tr><td><b>Department ID</b></td><td><input type=\"text\" name=\"id\"/ required ></td></tr>");
    echo("<tr><td><b>Department Charges</b></td><td><input type=\"text\" name=\"charg\"/required ></td></tr>");
    echo("</table>");
    echo("<input type=\"submit\" value=\"Submit\" id=\"wdth2\">");
    echo "</form>";

    if((!empty($_POST["nm"]))&&(!empty($_POST["id"]))&&(!empty($_POST["charg"]))) {
        $n=$_POST["nm"];
        $p=$_POST["ph"];
        $i=$_POST["id"];
        $c=$_POST["charg"];
        $result=mysqli_query($link, "select * from Departments where Dept_ID='$i';");
        if(mysqli_num_rows($result)==0) {
            mysqli_query($link, "insert into Departments value (\"$n\", \"$p\", \"$i\", \"$c\");");
            echo "<b>Department Added!</b>";
            echo "  <script type=\"text/javascript\">
                         window.location = \"http://localhost/Hospital-Management-System/login.php?pid=view_dept\"
                    </script>";
        }
        else
            echo ("<b><font color=\"RED\" SIZE=\"4\">*Department ID. already exists*</font></b>");
    }	
}

// Modify department
else if(isset($_GET['pid'])&&((strcmp($_GET['pid'],"mod_dept")==0))) {
    if(isset($_GET['option'])&&(strcmp($_GET['option'],"mod_insert")==0)) {
        $id=$_GET['id'];
        $name=$_POST['name'];
        $ph=$_POST['ph'];
        $ch=$_POST['ch'];
        mysqli_query($link, "update Departments SET Name=\"$name\", Phone_Ext=\"$ph\", Dept_charges=\"$ch\" where Dept_ID=\"$id\";");
        echo "<b>Department Updated!</b>";
        echo "  <script type=\"text/javascript\">
                    window.location = \"http://localhost/Hospital-Management-System/login.php?pid=view_dept\"
                </script>";
    }
    else if(isset($_GET['option'])&&(strcmp($_GET['option'],"mod_form")==0)) {
        $id=$_POST['id'];
        if(isset($id)) {
            $result=mysqli_query($link, "select * from Departments where Dept_ID='$id'; ");
            if(isset($result)&&(mysqli_num_rows($result)!=0	)) {
                $row=mysqli_fetch_array($result);
                $name=$row['Name'];
                $ph=$row['Phone_Ext'];
                $ch=$row['Dept_charges'];
                echo("<h3>Modify Department</h3>");
                echo $id;
                echo("<form align=\"centre\" action=\"login.php?pid=mod_dept&option=mod_insert&id=$id\" method =\"post\">");
                echo ("<table><tr><td><b>Name:</b></td><td><input name=\"name\" type=\"text\" size=40 value=\"$name\"></td></tr>");
                echo("<tr><td><b>Phone Extension </td><td></b><input type=\"text\" size=40 name=\"ph\"value=\"$ph\"/required ></td></tr>");
                echo("<tr><td><b>Department Charges </td><td></b><input type=\"text\" size=40 name=\"ch\"value=\"$ch\"/required ></td></tr>");
                echo("</table>");
                echo("<input type=\"submit\" value=\"Submit\" id=\"wdth2\">");
                echo "</form>";
            }
            else {
                echo ("<h4><SIZE=\"4\">*Invalid Department ID.*</font></h4>");
                echo ("<h5><a href=\"login.php?pid=mod_dept\">Go Back</h5>");
            }
        }
    }
    else {
        echo "<br/><table border=0 cellpadding=2 cellspacing=1 height=5 style=\"\"><form action=\"login.php?pid=mod_dept&option=mod_form\" method=\"post\">";
        echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"id\" type=\"text\" size=50 placeholder=\"Enter Department ID.\" required/></td>";
        echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"submit\" name=\"commit\" value=\"submit\"title=\"Click here to modify\"></td></tr>";
        echo "</form></table>";
    }
}

// Allot Doctor
else if(isset($_GET['pid'])&&(strcmp($_GET['pid'],"allot_doc")==0)) {
    echo("<h3>Assign Doctor to Patient</h3>");
    echo("<form align=\"centre\" #action=\"#\" method =\"post\">");
    echo("<table><tr><td><b>Patient ID: </b></td><td><input type=\"text\" size=60 name=\"pid\"/ required ></td></tr>");
    echo("<tr><td><b>Doctor-ID:</b></td><td><input type=\"text\" size=60 name=\"eid\"/ required ></td></tr>");
    //echo("<tr><td><b>Specialization: </b></td><td><input type=\"text\" name=\"spec\"/ size=60 required ></td></tr>");
    echo("</table>");
    echo("<input type=\"submit\" value=\"Submit\" id=\"wdth2\">");
    echo "</form>";
    if((!empty($_POST["pid"]))&&(!empty($_POST["eid"])))
    {
        $pid=$_POST["pid"];
        $eid=$_POST["eid"];
        $pres=mysqli_query($link, "select * from Patients where Patient_ID='$pid';");
        $dres=mysqli_query($link, "select * from Doctors where Doc_ID='$eid';");
        $row=mysqli_fetch_array($dres);
        if(mysqli_num_rows($pres)==0)
            echo "<script type=\"text/javascript\">alert(\"Invalid Patient ID\")</script>";
        else if(mysqli_num_rows($dres)==0)
            echo "<script type=\"text/javascript\">alert(\"Invalid Doctor ID\")</script>";
        else
        {
            mysqli_query($link, "insert into Attends value ('$eid','$pid');");
            echo "<script type=\"text/javascript\">alert(\"Successfully Assigned\")</script>";
        }
    }
}

// Allot Room

// Unallot Room

// Create Report MOST IMPORTANT TAB

// Modify Report

// View Report

// Delete Report

// Logout Session
else if(isset($_GET['pid'])&&(strcmp($_GET['pid'],"logout")==0)) {
    if(mysqli_query($link, "select * from Session")) {
        $result=mysqli_query($link, "delete from Session");
        echo "  <script type=\"text/javascript\">
                     window.location = \"http://localhost/Hospital-Management-System/index.php\"
                </script>";
    }
    echo "</div>";
}

ob_end_flush();
?>
</div>
</center>
</body>
</html>
