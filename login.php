<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <title>Hospital Management System</title><meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<link rel=\"stylesheet\" href="css/style02.css">

<!--%%%%%%%%%%%% QuickMenu Styles [Keep in head for full validation!] %%%%%%%%%%%-->
<style type="text/css">

<!--This is the table Css code-->
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
        <li><a href="?pid=account">My Account</a></li> <!-- Added PID of account here-->
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
<!-- Create Menu Settings: (Menu ID, Is Vertical, Show Timer, Hide Timer, On Click, Right to Left, Horizontal Subs, Flush Left) -->
<script type="text/javascript">qm_create(0,false,0,500,false,false,false,false);</script>

<!-- This script references optionally loads the QuickMenu visual interface, to run the menu stand alone remove the script.-->
<script type="text/javascript">if (window.name=="qm_launch_visual"){document.write('<scr'+'ipt type="text/javascript" src="http://www.opencube.com/qmv4/qm_visual.js"></scr'+'ipt>')}</script>

<!--All the main code starts here -- Pushan -->

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
            echo "<table border=0 cellpadding=1 cellspacing=0 style=\"margin:5px 0px 0px -3px;\">";
            echo "<tr><td width=5%>Name: </td><td width=50%>$name</td></tr>";
            echo "<tr><td>Employee ID: </td><td>$eid</td></tr>";
            echo "<tr><td>Date of Birth: </td><td>$dob</td></tr>";
            echo "<tr><td>Department: </td><td>$dept</td></tr>";
            echo "<tr><td>Contact: </td><td>$contact</td></tr>";
            echo "<tr><td>Gender: </td><td>$gender</td></tr>";
            echo "<tr><td>Address: </td><td>$add</td></tr>";
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
        //echo "<div style=\"width:990px; float:left\">";
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
        //echo "</div>";
    }
}

// Display Admins
else if(isset($_GET['pid'])&&((strcmp($_GET['pid'],"view_admin")==0))) {
    $result=mysqli_query($link, "select * from Employee where category=\"Adminstration\" ");
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
    $result=mysqli_query($link, "select * from Employee where category=\"Medical Staff\" ");
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
    while($count)
    {
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
    if(isset($_GET['option'])&&(strcmp($_GET['option'],"insert")==0))
    {
        $dept=$_POST['dept_no'];
        $Emp_ID=$_POST['id'];
        $name=$_POST['name'];
        $address=$_POST['address'];
        $dob=$_POST['dob'];
        // Apparently Contact can be null here 
        if(isset($_POST['contact']))
            $contact=$_POST['contact'];
        else 
            $contact="NULL";
        $type=$_POST['category'];
        if(!strcmp($type, "Doctor")) {
            $cal=mysqli_query($link, "SELECT max(Doc_ID) R FROM Doctors");
            $row=mysqli_fetch_array($cal);
            if(!$cal) {
                $docid = 0;
            }
            else 
                $docid = $row['R'] + 1;
            mysqli_query($link, "insert into Doctors value (\"$docid\", \"$Emp_ID\")");
        } 

        $gender=$_POST['gender'];
        $salary=$_POST['salary'];
        mysqli_query($link, "insert into Employee values (\"$Emp_ID\", \"$name\", \"$address\", \"$dob\", \"$contact\", \"$gender\", \"$salary\",\"$type\",\"$dept\" )");
        echo "<h3>Employee Added!</h3>";
    }
    else
    {
        echo "<h3>Registeration</h3>";
        echo "<form action=\"login.php?pid=add_emp&option=insert\" method=\"post\">
                <table>";
        echo "<tr><td><b>ID: </b></td><td><input name=\"id\" type=\"text\" size=50 placeholder=\"Employee's ID\"></td></tr>";
        echo "<tr><td><b>Name: </b></td><td><input name=\"name\" type=\"text\" size=50 placeholder=\"Employee's Name\"></td></tr>";
        echo "<tr><td><b>Address: </b></td><td><input name=\"address\" type=\"text\" size=50 placeholder=\"Employee's Address\"></td></tr>";
        echo "<tr><td><b>Date of Brith: </b></td><td><input name=\"dob\" type=\"text\" size=50 placeholder=\"YYYY-MM-DD\"></td></tr>";
        echo "<tr><td><b>Contact: </b></td><td><input name=\"contact\" type=\"text\" size=50 placeholder=\"Phone Number\"></td></tr>";
        echo "<tr><td><b>Gender: </b></td><td><select name=\"gender\"><option>Male</option><option>Female</option></select></td></tr>";
        echo "<tr><td><b>Category: </b></td><td><select name=\"category\"><option>Doctor</option><option>Medical Staff</option><option>Adminstration</option></select></td></tr>";
        // Temperoraly removed Batch for doctor
        //echo "<tr><td><b>Batch Number: </b></td><td><input name=\"batch\" type=\"text\" size=50 placeholder=\"Batch Number of Doctor\"></td></tr>";
        echo "<tr><td><b>Salary: </b></td><td><input name=\"salary\" type=\"text\" size=50 placeholder=\"Salary\"></td></tr>";
        echo "<tr><td><b>Dept. No: </b></td><td><select name=\"dept_no\">";
        $result=mysqli_query($link, "select count(*) count from Departments");
        $row=mysqli_fetch_array($result);
        $count=$row['count'];		
        $result=mysqli_query($link, "select Dept_ID from Departments");
        for($i=0;$i<$count;$i=$i+1)
        {
            $row=mysqli_fetch_array($result);
            $dept_no=$row['Dept_ID'];
            echo "<option>$dept_no</option>";
        }
        echo "</select></td></tr>";
        /*echo "<tr><td><h4>Room Type: </h4></td><td><select name=\"room\"><option>General</option><option>Pivate</option><option>ICU</option></select></td></tr>";*/
        echo "</table>";
        echo "<br></br>";
        echo "<input type=\"submit\" value=\"Submit\" id=\"wdth2\" align=\"centre\">";
        echo "</form>";
        //echo "</div>";
    }
    } else
        echo "<h2>Not an admin, Can't modify/Add data</h2>";
}

// Delete Employee
else if(isset($_GET['pid'])&&((strcmp($_GET['pid'],"del_emp")==0))) {
    $username=$_COOKIE['username'];
    $result=mysqli_query($link, "select * from Employee where Employee_ID='$username'");
    if(!empty($result)) {   // Added Admin Check
    if(isset($_GET['option'])&&(strcmp($_GET['option'],"delete")==0))
    {
        $id=$_POST['id'];
        if(isset($id))
            mysqli_query($link, "delete from Employee where Employee_ID='$id'; ");
        echo "Employee Deleted!";
        //header('Location: ?pid=del_emp');
        echo "  <script type=\"text/javascript\">
                     window.location = \"http://localhost/Hospital-Management-System/login.php?pid=del_emp\"
                </script>";
    }
    else
    {
        echo "<br/><table border=0 cellpadding=2 cellspacing=1 height=5 style=\"\"><form action=\"login.php?pid=del_emp&option=delete\" method=\"post\">";
        echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"id\" type=\"text\" size=50 placeholder=\"Delete using Employee-ID.\" required/></td>";
        echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/del.gif\" style=\"height:30px\" title=\"Click here to delete\"></td></tr>";
        echo "</form></table>";
    }
    } else
        echo "<h2>Not an admin, Can't modify/Add data</h2>";

}

// Modify Employee
else if(isset($_GET['pid'])&&((strcmp($_GET['pid'],"mod_emp")==0))) {
    $username=$_COOKIE['username'];
    $result=mysqli_query($link, "select * from Employee where Employee_ID='$username'");
    if(!empty($result)) {   // Added Admin Check
    if(isset($_GET['option'])&&(strcmp($_GET['option'],"mod_insert")==0))
    {
        $id=$_GET['id'];
        $name=$_POST['name'];
        $address=$_POST['address'];
        $dob=$_POST['dob'];
        $contact=$_POST['contact'];
        $gender=$_POST['gender'];
        $salary=$_POST['salary'];
        mysqli_query($link, "update Employee SET Name=\"$name\", Address=\"$address\", DOB=\"$dob\", Contact=\"$contact\", Gender=\"$gender\", Salary=\"$salary\" where Employee_ID=\"$id\" ");
        echo "<h3>Employee Updated!</h3>";
        //header('Location: ?pid=mod_emp');
        echo "  <script type=\"text/javascript\">
                     window.location = \"http://localhost/Hospital-Management-System/login.php?pid=mod_emp\"
                </script>";
    }
    else if(isset($_GET['option'])&&(strcmp($_GET['option'],"mod_form")==0))
    {
        $id=$_POST['id'];
        if(isset($id))
        {
            $result=mysqli_query($link, "select * from Employee where Employee_ID='$id'; ");
            if(isset($result))
            {
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
    else
    {
        echo "<br/><table border=0 cellpadding=2 cellspacing=1 height=5 style=\"\"><form action=\"login.php?pid=mod_emp&option=mod_form\" method=\"post\">";
        echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"id\" type=\"text\" size=50 placeholder=\"Modify using Employee-ID.\" required/></td>";
        echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/mod.gif\" style=\"height:30px\" title=\"Click here to modify\"></td></tr>";
        echo "</form></table>";
    }
    } else
        echo "<h2>Not an admin, Can't modify/Add data</h2>";

}

// Add Patients
else if(isset($_GET['pid'])&&((strcmp($_GET['pid'],"add_patient")==0))) {
    if(isset($_GET['option'])&&(strcmp($_GET['option'],"insert")==0))
    {
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
        //header('Location: ?pid=view_patient');
        echo "<b>New Patient Added!</b>";
        echo "  <script type=\"text/javascript\">
                     window.location = \"http://localhost/Hospital-Management-System/login.php?pid=view_patient\"
                </script>";
    }
    else
    {
        echo "<div><h3>Registeration</h3>";
        echo "<table><form action=\"login.php?pid=add_patient&option=insert\" method=\"post\">";
        echo "<tr><td><b>Name: </b></td><td><input name=\"name\" type=\"text\" size=50 placeholder=\"Patient's Name\"></td></tr>";
        echo "<tr><td><b>Address: </b></td><td><input name=\"address\" type=\"text\" size=50 placeholder=\"Patient's Address\"></td></tr>";
        echo "<tr><td><b>Date of Brith: </b></td><td><input name=\"dob\" type=\"text\" size=50 placeholder=\"YYYY-MM-DD\"></td></tr>";
        echo "<tr><td><b>Contact: </b></td><td><input name=\"contact\" type=\"text\" size=50 placeholder=\"Phone Number\"></td></tr>";
        echo "<tr><td><b>Blood Group: </b></td><td><select name=\"BG\"><option>A+</option><option>A-</option><option>AB+</option><option>AB-</option><option>B+</option><option>B-</option><option>O+</option><option>O-</option></select></td></tr>";
        echo "<tr><td><b>Gender: </b></td><td><select name=\"gender\"><option>Male</option><option>Female</option></select></td></tr>";
        echo "<tr><td><b>Date of Admission: </b></td><td><input name=\"doa\" type=\"text\" size=50 placeholder=\"YYYY-MM-DD\"></td></tr>";
        echo "<tr><td><b>Date of Discharge: </b></td><td><input name=\"dod\" type=\"text\" size=50 placeholder=\"YYYY-MM-DD\"></td></tr>";
        echo "</table>";
        echo "<input type=\"submit\" value=\"Submit\" id=\"wdth2\">";
        echo "</form>";
        echo "</div>";
    }
}

// Delete Patients
else if(isset($_GET['pid'])&&((strcmp($_GET['pid'],"del_patient")==0)))
{
    if(isset($_GET['option'])&&(strcmp($_GET['option'],"delete")==0))
    {
        $id=$_POST['id'];
        if(isset($id))
            mysqli_query($link, "delete from Patients where Patient_ID='$id'; ");
        echo "<b>Patient Deleted!</b>";
        //header('Location: ?pid=view_patient');
        echo "  <script type=\"text/javascript\">
                     window.location = \"http://localhost/Hospital-Management-System/login.php?pid=view_patient\"
                </script>";
    }
    else
    {
        echo "<br/><table border=0 cellpadding=2 cellspacing=1 height=5 style=\"\"><form action=\"login.php?pid=del_patient&option=delete\" method=\"post\">";
        echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"id\" type=\"text\" size=50 placeholder=\"Delete using Patient-ID.\" required/></td>";
        echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/del.gif\" style=\"height:30px\" title=\"Click here to delete\"></td></tr>";
        echo "</form></table>";
    }
}

// Modify Patients
else if(isset($_GET['pid'])&&((strcmp($_GET['pid'],"mod_patient")==0))) {
    if(isset($_GET['option'])&&(strcmp($_GET['option'],"mod_insert")==0))
    {
        $id=$_GET['id'];
        $name=$_POST['name'];
        $address=$_POST['address'];
        $dob=$_POST['dob'];
        $doa=$_POST['doa'];
        $dod=$_POST['dod'];
        if(isset($contact))
            $contact=$_POST['contact'];
        else $contact="NULL";
        $gender=$_POST['gender'];
        $bg=$_POST['BG'];
        mysqli_query($link, "update Patients SET Name=\"$name\", Address=\"$address\", DOB=\"$dob\", Contact=\"$contact\", Gender=\"$gender\", Blood_Group=\"$bg\", D_Adm=\"$doa\", D_Dis=\"$dod\" where Patient_ID=\"$id\" ");
        echo "<b>Patient Modified!</b>";
        //header('Location: ?pid=view_patient');
        echo "  <script type=\"text/javascript\">
                     window.location = \"http://localhost/Hospital-Management-System/login.php?pid=view_patient\"
                </script>";
    }
    else if(isset($_GET['option'])&&(strcmp($_GET['option'],"mod_form")==0))
    {
        $id=$_POST['id'];
        if(isset($id))
        {
            $result=mysqli_query($link, "select * from Patients where Patient_ID='$id'; ");
            if(isset($result))
            {
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
    else
    {
        echo "<br/><table><form action=\"login.php?pid=mod_patient&option=mod_form\" method=\"post\">";
        echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"id\" type=\"text\" size=50 placeholder=\"Modify using Patient-ID.\" required/></td>";
        echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"submit\" name=\"commit\" value=\"Submit\" src=\"images/mod.gif\" style=\"height:30px\" title=\"Click here to modify\"></td></tr>";
        echo "</form></table>";
    }
}

// View Patients
else if(isset($_GET['option'])&&isset($_GET['pid'])&&((strcmp($_GET['pid'],"view_patient")==0))&&((strcmp($_GET['option'],"search_tools")==0)))
{
    echo "<table><form action=\"login.php?pid=view_patient&option=search_val\" method=\"post\">";
    echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"search_patient\" type=\"text\" size=50 placeholder=\"Search by Name, Patient-ID.\"></td>";
echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/search_button.gif\" style=\"height:30px\" title=\"Click here to start searching\"></td><td style=\"border-bottom: #FFFFFF\"><a class=\"button\" style=\"text-decoration: none;\" href=\"?pid=view_patient&option=search_tools\" title=\"Click here for advanced search options\">&nbsp;Advanced Search</a></td></tr>";
echo "<div style=\"width:900px;\">";
echo "<br/><table>";
    echo "<tr><td><b>Filters: </b></td><td style=\"border-bottom: #FFFFFF\"><input name=\"age\" type=\"text\" size=3 placeholder=\"Age\"></td><td style=\"border-bottom: #FFFFFF\"><select name=\"BG\"><option>BG</option><option>A+</option><option>A-</option><option>AB+</option><option>AB-</option><option>B+</option><option>B-</option><option>O+</option><option>O-</option></select></td><td style=\"border-bottom: #FFFFFF\"><select name=\"gender\"><option>Male</option><option>Female</option><option>All</option></select></td><td style=\"border-bottom: #FFFFFF\">
</td>
<!--<td style=\"border-bottom: #FFFFFF\"><input name=\"room_no\" type=\"text\" size=27 placeholder=\"Room Number (Eg. ICU-001)\">-->
</td></tr>";
    echo "</div>";
    echo "</form></table>";
}
else if(isset($_GET['pid'])&&((strcmp($_GET['pid'],"view_patient")==0)||(strcmp($_GET['pid'],"patient_details")==0)))
{
    echo "<br/><table><form action=\"login.php?pid=view_patient&option=search_val\" method=\"post\">";
    echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"search_patient\" type=\"text\" size=50 placeholder=\"Search by Name, Patient-ID.\"></td>";
    echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/search_button.gif\" style=\"height:30px\" title=\"Click here to start searching\"></td><td style=\"border-bottom: #FFFFFF\"><a class=\"button\" style=\"text-decoration: none;\" href=\"login.php?pid=view_patient&option=search_tools\" title=\"Click here for advanced search options\">&nbsp;Advanced Search</a></td></tr>";
    echo "</form></table>";
    if((strcmp($_GET['pid'],"patient_details")==0))
    {
        $searchby=$_GET['id'];
        $result=mysqli_query($link, "select * from Patients where Patient_ID='$searchby'");
        echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
        $row=mysqli_fetch_array($result);
        $name=$row['Name'];
        $eid=$row['Patient_ID'];
        //$dept=$row['Dept_ID'];
        $gender=$row['Gender'];
        $contact=$row['Contact'];
        $dob=$row['DOB'];
        $doa=$row['D_Adm'];
        $dod=$row['D_Dis'];
        $add=$row['Address'];
        $bg=$row['Blood_Group'];
        echo "<h3>Patient Details</h3>";
        echo "<table>";
        echo "<tr><td>Name: </td><td>$name</td></tr>";
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
    else if(isset($_GET['option'])&&strcmp($_GET['option'],"search_val")==0)
    {
        if(!empty($_POST['search_patient']))
            $searchby=$_POST['search_patient'];
        else $searchby='%';
        if(!empty($_POST['age']))
            $searchbyage=$_POST['age'];
        if(!empty($_POST['gender'])&&(strcmp($_POST['gender'],"All")))
            $searchbysex=$_POST['gender'];
        if(!empty($_POST['BG'])&&(strcmp($_POST['BG'],"BG")))
            $searchbybg=$_POST['BG'];
        if(!empty($_POST['aname']))
            $searchbyaname=$_POST['aname'];
        $flag=0;
        if(!empty($searchby)) 
        {
            if(empty($searchbyaname))
                $result=mysqli_query($link, "select * from Patients where Patient_ID='$searchby'");
            else $result=mysqli_query($link, "select * from Patients p, accompanies a where p.Patient_ID='$searchby' and p.Patient_ID=a.Patient_ID and a.Name LIKE '%$searchbyaname%'");
            if(!empty($result) && mysqli_num_rows($result)==1)
            {
                echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
                $row=mysqli_fetch_array($result);
                $name=$row['Name'];
                $eid=$row['Patient_ID'];
                //$dept=$row['Dept_ID'];
                $gender=$row['Gender'];
                $contact=$row['Contact'];
                $dob=$row['DOB'];
                $doa=$row['D_Adm'];
                $dod=$row['D_Dis'];
                $add=$row['Address'];
                $bg=$row['Blood_Group'];
                echo "<h3>Patient Details</h3>";
                echo "<table>";
                echo "<tr><td>Name: </td><td>$name</td></tr>";
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
        if(!empty($searchby)&&($flag==0))
        {
            if(!empty($searchbysex)&&!empty($searchbyage)&&!empty($searchbyaname)&&!empty($searchbybg))
                $result=mysqli_query($link, "select p.Name,p.Patient_ID,p.Gender,p.Contact,p.DOB,p.Address,p.Blood_Group from Patients p, accompanies a where p.Name LIKE '%$searchby%' and p.Patient_ID=a.Patient_ID and a.Name LIKE '%$searchbyaname%' and p.Gender LIKE '$searchbysex' and floor(DATEDIFF(CURDATE(),p.DOB)/365)=$searchbyage and p.Blood_Group LIKE '$searchbybg'");
            else if(!empty($searchbysex)&&!empty($searchbyage)&&!empty($searchbyaname))
                $result=mysqli_query($link, "select p.Name,p.Patient_ID,p.Gender,p.Contact,p.DOB,p.Address,p.Blood_Group from Patients p, accompanies a where p.Name LIKE '%$searchby%' and p.Patient_ID=a.Patient_ID and a.Name LIKE '%$searchbyaname%' and p.Gender LIKE '$searchbysex' and floor(DATEDIFF(CURDATE(),p.DOB)/365)=$searchbyage");
            else if(!empty($searchbysex)&&!empty($searchbybg)&&!empty($searchbyaname))
                $result=mysqli_query($link, "select p.Name,p.Patient_ID,p.Gender,p.Contact,p.DOB,p.Address,p.Blood_Group from Patients p, accompanies a where p.Name LIKE '%$searchby%' and p.Patient_ID=a.Patient_ID and a.Name LIKE '%$searchbyaname%' and p.Gender LIKE '$searchbysex' and p.Blood_Group LIKE '$searchbybg'");
            else if(!empty($searchbysex)&&!empty($searchbyage)&&!empty($searchbybg))
                $result=mysqli_query($link, "select * from Patients where Name LIKE '%$searchby%' and Gender LIKE '$searchbysex' and floor(DATEDIFF(CURDATE(),p.DOB)/365)=$searchbyage and Blood_Group LIKE '$searchbybg'");
            else if(!empty($searchbyaname)&&!empty($searchbyage)&&!empty($searchbybg))
                $result=mysqli_query($link, "select p.Name,p.Patient_ID,p.Gender,p.Contact,p.DOB,p.Address,p.Blood_Group from Patients p, accompanies a where p.Name LIKE '%$searchby%' and p.Patient_ID=a.Patient_ID and a.Name LIKE '%$searchbyaname%' and floor(DATEDIFF(CURDATE(),p.DOB)/365)=$searchbyage and p.Blood_Group LIKE '$searchbybg'");
            else if(!empty($searchbysex)&&!empty($searchbybg))
                $result=mysqli_query($link, "select * from Patients where Name LIKE '%$searchby%' and Gender LIKE '$searchbysex' and Blood_Group LIKE '$searchbybg' ");
            else if(!empty($searchbysex)&&!empty($searchbyage))
                $result=mysqli_query($link, "select * from Patients where Name LIKE '%$searchby%' and Gender LIKE '$searchbysex' and floor(DATEDIFF(CURDATE(),DOB)/365)=$searchbyage");
            else if(!empty($searchbybg)&&!empty($searchbyage))
                $result=mysqli_query($link, "select * from Patients where Name LIKE '%$searchby%' and Blood_Group LIKE '$searchbybg' and floor(DATEDIFF(CURDATE(),DOB)/365)=$searchbyage");
            else if(!empty($searchbysex)&&!empty($searchbyaname))
                $result=mysqli_query($link, "select p.Name,p.Patient_ID,p.Gender,p.Contact,p.DOB,p.Address,p.Blood_Group from Patients p, accompanies a where p.Name LIKE '%$searchby%' and p.Patient_ID=a.Patient_ID and a.Name LIKE '%$searchbyaname%' and p.Gender LIKE '$searchbysex' ");
            else if(!empty($searchbyage)&&!empty($searchbyaname))
                $result=mysqli_query($link, "select p.Name,p.Patient_ID,p.Gender,p.Contact,p.DOB,p.Address,p.Blood_Group from Patients p, accompanies a where p.Name LIKE '%$searchby%' and p.Patient_ID=a.Patient_ID and a.Name LIKE '%$searchbyaname%' and floor(DATEDIFF(CURDATE(),p.DOB)/365)=$searchbyage");
            else if(!empty($searchbyaname)&&!empty($searchbybg))
                $result=mysqli_query($link, "select p.Name,p.Patient_ID,p.Gender,p.Contact,p.DOB,p.Address,p.Blood_Group from Patients p, accompanies a where p.Name LIKE '%$searchby%' and p.Patient_ID=a.Patient_ID and a.Name LIKE '%$searchbyaname%' and p.Blood_Group LIKE '$searchbybg'");
            else if(!empty($searchbysex))
                $result=mysqli_query($link, "select * from Patients where Name LIKE '%$searchby%' and Gender LIKE '$searchbysex' ");
            else if(!empty($searchbybg))
                $result=mysqli_query($link, "select * from Patients where Name LIKE '%$searchby%' and Blood_Group LIKE '$searchbybg' ");
            else if(!empty($searchbyage))
                $result=mysqli_query($link, "select * from Patients where Name LIKE '%$searchby%' and floor(DATEDIFF(CURDATE(),DOB)/365)=$searchbyage");
            else if(!empty($searchbyaname))
                $result=mysqli_query($link, "select p.Name,p.Patient_ID,p.Gender,p.Contact,p.DOB,p.Address,p.Blood_Group from Patients p, accompanies a where p.Name LIKE '%$searchby%' and p.Patient_ID=a.Patient_ID and a.Name LIKE '%$searchbyaname%'");
            else $result=mysqli_query($link, "select * from Patients where Name LIKE '%$searchby%'");
            if(!empty($result) && mysqli_num_rows($result)==1)
            {
                $row=mysqli_fetch_array($result);
                $name=$row['Name'];
                $eid=$row['Patient_ID'];
                //$dept=$row['Dept_ID'];
                $gender=$row['Gender'];
                $contact=$row['Contact'];
                $dob=$row['DOB'];
                $doa=$row['D_Adm'];
                $dod=$row['D_Dis'];
                $add=$row['Address'];
                $bg=$row['Blood_Group'];
                echo "<h3>Patient Details</h3>";
                echo "<table>";
                echo "<tr><td>Name: </td><td>$name</td></tr>";
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
            else if(!empty($result) && mysqli_num_rows($result)>1)
            {
                echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
                echo "<div style=\"width:900px; float:left;\">";
                for($i=0;$i<mysqli_num_rows($result);$i=$i+1)
                {
                    $row=mysqli_fetch_array($result);
                    $name=$row['Name'];
                    $eid=$row['Patient_ID'];
                    $dob=$row['DOB'];
                    echo "<div style=\"width:900px; float:left;\">";
                    echo "<h3 align=\"left\"><a href=\"?pid=patient_details&id=$eid\">$name</a></h3>";
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

// Logout Session
else if(isset($_GET['pid'])&&(strcmp($_GET['pid'],"logout")==0))
{
    //$username=$_COOKIE['username'];
    //$sessionid=$_COOKIE['PHPSESSID'];
    if(mysqli_query($link, "select * from Session"))// where Username='$username' and ID='$sessionid'"))
    {
        $result=mysqli_query($link, "delete from Session");// Username='$username'and ID='$sessionid'");
        //setcookie("username",$_POST['username'],time()-3600);
        //unset($_SESSION['PHPSESSID']);
        //header('Location: index.php');
        echo "  <script type=\"text/javascript\">
                     window.location = \"http://localhost/Hospital-Management-System/index.php\"
                </script>";
    }
    echo "</div>";
}

// View Department
else if(isset($_GET['pid'])&&((strcmp($_GET['pid'],"view_dept")==0)||(strcmp($_GET['pid'],"dept_details")==0)||(strcmp($_GET['pid'],"emp_details")==0)))
{
    if((strcmp($_GET['pid'],"view_dept")==0))
    {
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
    else if((strcmp($_GET['pid'],"dept_details")==0))
    {
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
        //echo "<tr><td>Number of Employees: </td><td>$nem</td></tr>";
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
else if(isset($_GET['pid'])&&(strcmp($_GET['pid'],"del_dept")==0))
{
    echo "<br/><table border=1 cellpadding=0 cellspacing=0 height=0 style=\"\"><form action=\"login.php?pid=del_dept&option=del_id\" method=\"post\">";
    echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"dept_id\" type=\"text\" size=50 placeholder=\"Enter Department ID. to delete\" required></td>";
    echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"submit\" name=\"commit\" value=\"Submit\" style=\"height:30px\" title=\"Click here to delete\"></td></tr>";
    echo "</form></table>";
    if(isset($_GET['option'])&&strcmp($_GET['option'],"del_id")==0)
    {
        if(!empty($_POST['dept_id']))
            $d_id=$_POST['dept_id'];
        $res=mysqli_query($link, "select * from Departments where Dept_ID='$d_id';");
        if(mysqli_num_rows($res)!=0)
        {
            mysqli_query($link, "delete from Departments where Dept_ID='$d_id';");
            echo "<b>Department Deleted!</b>";
            //header('Location: login.php?pid=view_dept');
            echo "  <script type=\"text/javascript\">
                         window.location = \"http://localhost/Hospital-Management-System/login.php?pid=view_dept\"
                    </script>";
        }
        else
            echo "<script type=\"text/javascript\">alert(\"Invalid Department No.\")</script>";
    }
}

// Add department
else if(isset($_GET['pid'])&&(strcmp($_GET['pid'],"add_dept")==0))
{
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

    if((!empty($_POST["nm"]))&&(!empty($_POST["id"]))&&(!empty($_POST["charg"])))
    {
        $n=$_POST["nm"];
        $p=$_POST["ph"];
        $i=$_POST["id"];
        $c=$_POST["charg"];
        $result=mysqli_query($link, "select * from Departments where Dept_ID='$i';");
        if(mysqli_num_rows($result)==0)
        {
            mysqli_query($link, "insert into Departments value (\"$n\", \"$p\", \"$i\", \"$c\");");
            echo "<b>Department Added!</b>";
            //header('Location: login.php?pid=view_dept');
            echo "  <script type=\"text/javascript\">
                         window.location = \"http://localhost/Hospital-Management-System/login.php?pid=view_dept\"
                    </script>";
        }
        else
            echo ("<b><font color=\"RED\" SIZE=\"4\">*Department ID. already exists*</font></b>");
    }	
}

// Modify department
else if(isset($_GET['pid'])&&((strcmp($_GET['pid'],"mod_dept")==0)))
{
    if(isset($_GET['option'])&&(strcmp($_GET['option'],"mod_insert")==0))
    {
        $id=$_GET['id'];
        $name=$_POST['name'];
        $ph=$_POST['ph'];
        $ch=$_POST['ch'];
        mysqli_query($link, "update Departments SET Name=\"$name\", Phone_Ext=\"$ph\", Dept_charges=\"$ch\" where Dept_ID=\"$id\";");
        echo "<b>Department Updated!</b>";
        //header('Location: ?pid=view_dept');
        echo "  <script type=\"text/javascript\">
                    window.location = \"http://localhost/Hospital-Management-System/login.php?pid=view_dept\"
                </script>";
    }
    else if(isset($_GET['option'])&&(strcmp($_GET['option'],"mod_form")==0))
    {
        $id=$_POST['id'];
        if(isset($id))
        {
            $result=mysqli_query($link, "select * from Departments where Dept_ID='$id'; ");
            if(isset($result)&&(mysqli_num_rows($result)!=0	))
            {
                $row=mysqli_fetch_array($result);
                $name=$row['Name'];
                $ph=$row['Phone_Ext'];
                $ch=$row['Dept_charges'];
                echo("<h3>Modify Department</h3>");
                echo $id;
                echo("<form align=\"centre\" action=\"login.php?pid=mod_dept&option=mod_insert&id=$id\" method =\"post\">");
                //echo("<table><tr><td><br />Name &nbsp &nbsp &nbsp </td><td><br /><input type=\"text\" size=40 name=\"name\" value=\"$name\"/ required ></td></tr>");
                echo ("<table><tr><td><b>Name:</b></td><td><input name=\"name\" type=\"text\" size=40 value=\"$name\"></td></tr>");
                echo("<tr><td><b>Phone Extension </td><td></b><input type=\"text\" size=40 name=\"ph\"value=\"$ph\"/required ></td></tr>");
                echo("<tr><td><b>Department Charges </td><td></b><input type=\"text\" size=40 name=\"ch\"value=\"$ch\"/required ></td></tr>");
                echo("</table>");
                echo("<input type=\"submit\" value=\"Submit\" id=\"wdth2\">");
                echo "</form>";
            }
            else
            {
                echo ("<h4><SIZE=\"4\">*Invalid Department ID.*</font></h4>");
                echo ("<h5><a href=\"login.php?pid=mod_dept\">Go Back</h5>");
            }
        }
    }
    else
    {
        echo "<br/><table border=0 cellpadding=2 cellspacing=1 height=5 style=\"\"><form action=\"login.php?pid=mod_dept&option=mod_form\" method=\"post\">";
        echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"id\" type=\"text\" size=50 placeholder=\"Enter Department ID.\" required/></td>";
        echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"submit\" name=\"commit\" value=\"submit\"title=\"Click here to modify\"></td></tr>";
        echo "</form></table>";
    }
}

// Allot Room

// Allot vehicle?? 

// Allot ms??

// View ms??

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
            mysqli_query($link, "insert into Attends value ('$pid','$eid');");
            echo "<script type=\"text/javascript\">alert(\"Successfully Assigned\")</script>";
        }
    }
}

// Unallot Room

// Unallot Vehicle

// Create Report MOST IMPORTANT TAB
else if(isset($_GET['pid']) && strcmp($_GET['pid'],"create_report") == 0)
{
    echo "<h1>Add Report Details</h1>";
    echo "<form name=\"form\" method=\"post\" action=\"login.php?pid=create_report\">";
    echo "<table>";
    /*echo "<tr>";
    echo "<td><p>Date :&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input  placeholder=\"yyyy-mm-dd\" type=\"text\" name=\"date\" size=\"15\" maxlength=\"15\" required/></p></td>";
    echo "</tr>";*/
    echo "<tr>";
    echo "<td><p>Patient ID: <input type=\"text\" name=\"PID\" size=\"15\" maxlength=\"15\" required/></p>";
    echo "</tr>";
    echo "<tr><td>Dept No.</td><td><select name=\"dept_no\">";
    $result=mysqli_query($link, "select * from Departments");
    for($i=0;$i<mysqli_num_rows($result);$i=$i+1)
    {
        $row=mysqli_fetch_array($result);
        $dept=$row['Dept_ID'];
        echo "<option>$dept</option>";
    }
    echo "</select></td></tr><tr>";
    echo "<td><p align=\"center\"><input type=\"submit\" name=\"submit\" value=\"Enter\" /></p>";
    echo "</tr>";
    echo "</form>";
    if(isset($_POST['PID'])&&isset($_POST['dept_no']))
    {
        //$date=$_POST['date'];
        $sel=mysqli_query($link, "SELECT curdate() date");
        $date=mysqli_fetch_array($sel);
        $date=$date['date'];
        $cal=mysqli_query($link, "SELECT max(Report_No) R FROM medical_report");
        $row=mysqli_fetch_array($cal);
        $val=$row['R'];
        $r_num="R".(substr($val,1)+1);
        $pid=$_POST['PID'];
        $dept_no=$_POST['dept_no'];
        $check = mysqli_query($link, "SELECT * FROM Patients where Patient_ID='$pid'");
        //$check1 = mysqli_query($link, "SELECT * FROM medical_report where Patient_ID='$pid'");
        $row=mysqli_num_rows($check);
        //$row1=mysqli_num_rows($check1);
        if($row>0)
        {
            $query = "INSERT INTO medical_report SET Patient_ID='$pid', Report_No='$r_num', R_date='$date'";

            $add=mysqli_query($link, $query);
            $query1 = "INSERT INTO give_details SET Department_No='$dept_no', Report_No='$r_num'";
            $add1=mysqli_query($link, $query1);
            echo "<script type=\"text/javascript\">alert(\"Report No. $r_num has been added.\")</script>";

        }
        else
            echo "<script type=\"text/javascript\">alert(\"Invalid Patient ID.\")</script>";
    }	
}

// Modify Report
else if(isset($_GET['pid']) && strcmp($_GET['pid'],"mod_report") == 0)
{
    echo "<h1>Add Report Details</h1>";
    echo "<form name=\"form\" method=\"post\" action=\"login.php?pid=mod_report\">";
    echo "<table>";
    echo "<tr>";
    echo "<td><p>Report No.: <input type=\"text\" name=\"R_num\" size=\"15\" maxlength=\"15\" required/></p>";
    echo "</tr>";
    echo "<tr><td><p>Dept number: <select name=\"dept\">";
    $result=mysqli_query($link, "select * from Departments");
    for($i=0;$i<mysqli_num_rows($result);$i=$i+1)
    {
        $row=mysqli_fetch_array($result);
        $dept=$row['Dept_ID'];
        echo "<option>$dept</option>";
    }
    echo "</p></td></tr>";
    echo "<tr>";
    echo "<td><p>Room No.: <input type=\"text\" name=\"Room_num\" size=\"15\" maxlength=\"15\" /></p>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><p>Diet:&nbsp &nbsp &nbsp &nbsp &nbsp <textarea type=\"text\" name=\"Diet\" rows=\"3\" cols=\"30\" maxlength=\"200\"></textarea></p>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><p align=\"center\"><input type=\"submit\" name=\"submit\" value=\"Enter\" /></p>";
    echo "</tr>";
    echo "</form>";
    if(isset($_POST['R_num']))
    {
        $rnum=$_POST['R_num'];
        $dept=$_POST['dept'];
        $roomnum=$_POST['Room_num'];
        $diet=$_POST['Diet'];
        //echo $rnum;
        $check=mysqli_query($link, "SELECT * FROM give_details where Report_No='$rnum'");
        if(mysqli_num_rows($check)!=0)
        {
            mysqli_query($link, "UPDATE give_details SET Department_No='$dept' where Report_No='$rnum'");
            if(isset($roomnum)||isset($diet))
            {
                if(!strcmp($roomnum,"")&&!strcmp($diet,""))
                    $query = "UPDATE medical_report SET Room_No='$roomnum',Diet='$diet' where Report_No='$rnum'";
                else if(!strcmp($diet,""))
                    $query = "UPDATE medical_report SET Room_No='$roomnum' where Report_No='$rnum'";
                else if(!strcmp($roomnum,""))
                {
                    $query = "UPDATE medical_report SET Diet='$diet' where Report_No='$rnum'";
                    //echo $query;
                }
                $add=mysqli_query($link, $query);
                //echo mysqli_affected_rows();
                echo "<script type=\"text/javascript\">alert(\"Data Updated.\")</script>";
            }
        }
        else
            echo "<script type=\"text/javascript\">alert(\"Report Number Not Found.\")</script>";
    }	
}

// Add date

// View Report
else if(isset($_GET['option'])&&isset($_GET['pid'])&&((strcmp($_GET['pid'],"view_report")==0))&&((strcmp($_GET['option'],"search_tools")==0)))
{
    echo "<table border=0 cellpadding=2 cellspacing=1 height=5 style=\"\"><form action=\"login.php?pid=view_report&option=search_val\" method=\"post\">";
    echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"search_patient\" type=\"text\" size=50 placeholder=\"Search by Report-ID.\"></td>";
    echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/search_button.gif\" style=\"height:30px\" title=\"Click here to start searching\"></td></tr>";	
    echo "<div style=\"width:900px;\">";
    echo "<br/><table border=0 cellpadding=4 cellspacing=1 height=5>";
    echo "<tr><td><b>Filters: </b></td><td style=\"border-bottom: #FFFFFF\"><input name=\"id\" type=\"text\" size=10 placeholder=\"Patient-ID\"></td><td style=\"border-bottom: #FFFFFF\"><input name=\"date\" type=\"text\" size=10 placeholder=\"Report Date\"></td><td style=\"border-bottom: #FFFFFF\"><input name=\"allot_date\" type=\"text\" size=13 placeholder=\"Allotment Date\"></td><td style=\"border-bottom: #FFFFFF\"><input name=\"dis_date\" type=\"text\" size=13 placeholder=\"Discharge Date\"></td><td style=\"border-bottom: #FFFFFF\">";
    echo "</div>";
    echo "</form></table>";

}
else if(isset($_GET['pid'])&&((strcmp($_GET['pid'],"view_report")==0)||(strcmp($_GET['pid'],"patient_report")==0)))
{
    echo "<br/><table border=0 cellpadding=2 cellspacing=1 height=5 style=\"\"><form action=\"login.php?pid=view_report&option=search_val\" method=\"post\">";
    echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"search_report\" type=\"text\" size=50 placeholder=\"Search by Report-ID.\"></td>";
    echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/search_button.gif\" style=\"height:30px\" title=\"Click here to start searching\"></td></tr>";	
    echo "</form></table>";
    if((strcmp($_GET['pid'],"patient_report")==0))
    {
        $searchby=$_GET['id'];
        $result=mysqli_query($link, "select * from medical_report where Report_No='$searchby'");
        echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
        $row=mysqli_fetch_array($result);
        $num=$row['Report_No'];
        $id=$row['Patient_ID'];
        $result2=mysqli_query($link, "select * from Patients where Patient_ID='$id'");
        $result4=mysqli_query($link, "select * from diagnosis where Report_No='$num'");
        $dept=mysqli_query($link, "select * from Departments d,give_details g where g.Report_No='$num' and g.Department_No=d.Dept_ID");
        $deptrow=mysqli_fetch_array($dept);
        $deptname=$deptrow['Name'];
        $row2=mysqli_fetch_array($result2);
        //$dept=$row['Dept_ID'];
        $name=$row2['Name'];
        $dob=$row2['DOB'];
        $gender=$row2['Gender'];
        $bg=$row2['Blood_Group'];
        $date=$row['R_date'];
        $cdate=$row['C_date'];
        $room=$row['Room_No'];
        $result3=mysqli_query($link, "select * from room where Room_No='$room'");
        $row3=mysqli_fetch_array($result3);
        $result5=mysqli_query($link, "select * from Room_Given where Patient_ID='$id'");
        $row5=mysqli_fetch_array($result5);
        $allotdate=$row5['Allot_date'];
        $disdate=$row5['Discharge_date'];
        $roomtype=$row3['Type'];
        $diet=$row['Diet'];
        //$pay=$row['Payment'];

        $cost1=mysqli_query($link, "select b.Rent from medical_report a, room b where a.Patient_ID=b.Patient_ID and Report_No='$num'");
        $costrow1=mysqli_fetch_array($cost1);
        $days=mysqli_query($link, "select DATEDIFF('$disdate','$allotdate') as day;");
        $dayrow=mysqli_fetch_array($days);
        $days=$dayrow['day'];
        if($days==0)
        {
            $days=1;
        }
        $room_cost=$costrow1['Rent']*$days;

        $cost1=mysqli_query($link, "select b.Rent from medical_report a, vehicles b where a.Patient_ID=b.ID and Report_No='$num'");
        $costrow1=mysqli_fetch_array($cost1);
        $days1=mysqli_query($link, "select b.Allot_date,b.Return_date from medical_report a,vehicle_given b where a.Patient_ID=b.ID and Report_No='$num'");
        $days=mysqli_fetch_array($days1);
        $days=mysqli_query($link, "select datediff('$days[Return_date]','$days[Allot_date]') as day;");
        $dayrow=mysqli_fetch_array($days);
        $days=$dayrow['day'];
        if($days==0)
        {
            $days=1;
        }
        $veh_cost=$costrow1['Rent']*$days;
        /*echo $room_cost;
        echo "<br />";
        echo $veh_cost;*/




        echo "<h3>Medical Report</h3>";
        echo "<table border=0 cellpadding=1 cellspacing=0 style=\"margin:5px 0px 0px -3px;border-collapse: collapse;\">";
        echo "<tr><td width=5%>Report No: </td><td width=50%>$num</td></tr>";
        echo "<tr><td>Date: </td><td>$date</td></tr>";
        echo "<tr><td>Patient ID: </td><td>$id</td></tr>";
        echo "<tr><td>Patient Name: </td><td>$name</td></tr>";
        echo "<tr><td>Date of Birth: </td><td>$dob</td></tr>";
        echo "<tr><td>Gender: </td><td>$gender</td></tr>";
        echo "<tr><td>Blood Group: </td><td>$bg</td></tr>";
        echo "<tr><td>Department: </td><td>$deptname</td></tr>";
        echo "<tr><td>Room No.: </td><td>$room</td></tr>";
        echo "<tr><td>Room Type: </td><td>$roomtype</td></tr>";
        echo "<tr><td>Allotment Date: </td><td>$allotdate</td></tr>";
        echo "<tr><td>Discharge Date: </td><td>$disdate</td></tr>";
        echo "<tr><td>Diagnosis: </td>";
        echo "<td><table border=\"2\">";
        echo "<tr><th>Test Date</th><th>Test Name</th><th>Result</th><th>Cost</th></tr>";
        $total=$room_cost+$veh_cost;
        for($i=0;$i<mysqli_num_rows($result4);$i=$i+1)
        {
            $row4=mysqli_fetch_array($result4);
            $date=$row4['Test_date'];
            $name=$row4['Tests'];
            $res=$row4['T_result'];
            $cost=$row4['Cost'];
            $total=$total+$cost;
            echo "<tr><td>$date</td><td>$name</td><td>$res</td><td>$cost</td></tr>";
        }
        echo "</table>";
        echo "<tr><td>Diet: </td><td>$diet</td></tr>";
        echo "<tr><td>Payment: </td><td>$total</td></tr>";
        echo "<tr><td>Report Closing Date: </td><td>$cdate</td></tr>";
        echo "</table></td></tr>";
        $flag=1;
    }
    else if(isset($_GET['option'])&&strcmp($_GET['option'],"search_val")==0)
    {
        if(!empty($_POST['search_report']))
            $searchby=$_POST['search_report'];
        else $searchby='%';
        if(!empty($_POST['id']))
            $searchbyid=$_POST['id'];
        if(!empty($_POST['date']))
            $searchbydate=$_POST['date'];
        if(!empty($_POST['allot_date']))
            $searchbyallot=$_POST['allot_date'];
        if(!empty($_POST['dis_date']))
            $searchbydis=$_POST['dis_date'];
        $flag=0;
        if(!empty($searchby)&&(($searchby[0]=='R')||($searchby[0]=='r')))
        {
            $result=mysqli_query($link, "select * from medical_report where Report_No='$searchby'");
            if(!empty($result) && mysqli_num_rows($result)==1)
            {
                echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
                $row=mysqli_fetch_array($result);
                $num=$row['Report_No'];
                $id=$row['Patient_ID'];
                $result2=mysqli_query($link, "select * from Patients where Patient_ID='$id'");
                $result4=mysqli_query($link, "select * from diagnosis where Report_No='$num'");
                $dept=mysqli_query($link, "select * from Departments d,give_details g where g.Report_No='$num' and g.Department_No=d.Dept_ID");
                $deptrow=mysqli_fetch_array($dept);
                $deptname=$deptrow['Name'];
                $row2=mysqli_fetch_array($result2);
                //$dept=$row['Dept_ID'];
                $name=$row2['Name'];
                $dob=$row2['DOB'];
                $gender=$row2['Gender'];
                $bg=$row2['Blood_Group'];
                $date=$row['R_date'];
                $cdate=$row['C_date'];
                $room=$row['Room_No'];
                $result3=mysqli_query($link, "select * from room where Room_No='$room'");
                $row3=mysqli_fetch_array($result3);
                $result5=mysqli_query($link, "select * from Room_Given where Patient_ID='$id'");
                $row5=mysqli_fetch_array($result5);
                $allotdate=$row5['Allot_date'];
                $disdate=$row5['Discharge_date'];
                $roomtype=$row3['Type'];
                $diet=$row['Diet'];
                //$pay=$row['Payment'];
                $cost1=mysqli_query($link, "select b.Rent from medical_report a, room b where a.Patient_ID=b.Patient_ID and Report_No='$num'");
                $costrow1=mysqli_fetch_array($cost1);
                $days=mysqli_query($link, "select DATEDIFF('$disdate','$allotdate') as day;");
                $dayrow=mysqli_fetch_array($days);
                $days=$dayrow['day'];
                if($days==0)
                {
                    $days=1;
                }
                $room_cost=$costrow1['Rent']*$days;

                $cost1=mysqli_query($link, "select b.Rent from medical_report a, vehicles b where a.Patient_ID=b.ID and Report_No='$num'");
                $costrow1=mysqli_fetch_array($cost1);
                $days1=mysqli_query($link, "select b.Allot_date,b.Return_date from medical_report a,vehicle_given b where a.Patient_ID=b.ID and Report_No='$num'");
                $days=mysqli_fetch_array($days1);
                $days=mysqli_query($link, "select datediff('$days[Return_date]','$days[Allot_date]') as day;");
                $dayrow=mysqli_fetch_array($days);
                $days=$dayrow['day'];
                if($days==0)
                {
                    $days=1;
                }
                $veh_cost=$costrow1['Rent']*$days;
                /*echo $room_cost;
                echo "<br />";
                echo $veh_cost;*/

                echo "<h3>Medical Report</h3>";
                echo "<table border=0 cellpadding=1 cellspacing=0 style=\"margin:5px 0px 0px -3px;border-collapse: collapse;\">";
                echo "<tr><td width=5%>Report No: </td><td width=50%>$num</td></tr>";
                echo "<tr><td>Date: </td><td>$date</td></tr>";
                echo "<tr><td>Patient ID: </td><td>$id</td></tr>";
                echo "<tr><td>Patient Name: </td><td>$name</td></tr>";
                echo "<tr><td>Date of Birth: </td><td>$dob</td></tr>";
                echo "<tr><td>Gender: </td><td>$gender</td></tr>";
                echo "<tr><td>Blood Group: </td><td>$bg</td></tr>";
                echo "<tr><td>Department: </td><td>$deptname</td></tr>";
                echo "<tr><td>Room No.: </td><td>$room</td></tr>";
                echo "<tr><td>Room Type: </td><td>$roomtype</td></tr>";
                echo "<tr><td>Allotment Date: </td><td>$allotdate</td></tr>";
                echo "<tr><td>Discharge Date: </td><td>$disdate</td></tr>";
                echo "<tr><td>Diagnosis: </td>";
                echo "<td><table border=\"2\">";
                echo "<tr><th>Test Date</th><th>Test Name</th><th>Result</th><th>Cost</th></tr>";
                $total=$room_cost+$veh_cost;
                for($i=0;$i<mysqli_num_rows($result4);$i=$i+1)
                {
                    $row4=mysqli_fetch_array($result4);
                    $date=$row4['Test_date'];
                    $name=$row4['Tests'];
                    $res=$row4['T_result'];
                    $cost=$row4['Cost'];
                    $total=$total+$cost;
                    echo "<tr><td>$date</td><td>$name</td><td>$res</td><td>$cost</td></tr>";
                }
                echo "</table>";
                echo "<tr><td>Diet: </td><td>$diet</td></tr>";
                echo "<tr><td>Payment: </td><td>$total</td></tr>";
                echo "<tr><td>Report Closing Date: </td><td>$cdate</td></tr>";
                echo "</table></td></tr>";
                $flag=1;
            }
            else
                echo "<script type=\"text/javascript\">alert(\"Data not found.\")</script>";

        }
        else
            echo "<script type=\"text/javascript\">alert(\"Invalid Entry.\")</script>";


    }

}

// Delete Report
else if(isset($_GET['pid']) && strcmp($_GET['pid'],"del_report") == 0)
{
    echo "<br/><table border=0 cellpadding=1 cellspacing=1 height=5 style=\"\"><form action=\"login.php?pid=del_report&option=search_val\" method=\"post\">";
    echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"search_val\" type=\"text\" size=50 placeholder=\"Enter Report-No or Patient name, Type to delete\"></td>";
    echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/search_button.gif\" style=\"height:30px\"></td></tr>";
    echo "</form></table>"; 		
    if(isset($_GET['option']) && strcmp($_GET['option'],"search_val")==0)
    {
        $search=$_POST['search_val'];
        if(isset($search[0])&&($search[0]=='R' || $search[0]=='r'))
        {					
            $result=mysqli_query($link, "select * from medical_report where Report_No='$search'");						
            if(mysqli_num_rows($result)==1)
            {
                $query=mysqli_query($link, "delete from medical_report where Report_No='$search'");
                echo "<script type=\"text/javascript\">alert(\"Medical report deleted.\")</script>";
            }					
            else
            {
                echo "<script type=\"text/javascript\">alert(\"Data Not Found.\")</script>";
            }
        }					
        else if(isset($search[0]))
        {
            $result=mysqli_query($link, "select * from Patients where Name='$search'");						
            if(mysqli_num_rows($result)==1)
            {
                $row=mysqli_fetch_array($result);
                $id=$row['Patient_ID'];
                $query=mysqli_query($link, "delete from medical_report where Patient_ID='$id'");
                if(mysqli_affected_rows()==0)
                    echo "<script type=\"text/javascript\">alert(\"Data Not Found.\")</script>";
                else
                    echo "<script type=\"text/javascript\">alert(\"Medical Report Deleted.\")</script>";
            }					
            else if(mysqli_num_rows($result)>=1)
            {
                echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
                echo "<div style=\"width:900px; float:left;\">";
                echo "<h2 align=\"left\">Click the Patient-ID to delete !!!</h2>";
                for($i=0;$i<mysqli_num_rows($result);$i=$i+1)
                {
                    $val=mysqli_fetch_array($result);
                    $id=$val['Patient_ID'];
                    echo "<div style=\"width:900px; float:left;\">";
                    echo "<h3 align=\"left\"><a href=\"?pid=del_report&id=$id\">$id</a></h3>";
                    echo "</div>";
                }
            }

            else
            {
                echo "<script type=\"text/javascript\">alert(\"Data Not Found.\")</script>";
            }

        }
        else
            echo "<script type=\"text/javascript\">alert(\"Invalid Entry.\")</script>";
    }
    if(isset($_GET['id']))
    {
        $search=$_GET['id'];
        $query=mysqli_query($link, "delete from medical_report where Patient_ID='$search'");
        if(mysqli_affected_rows()==0)
            echo "<script type=\"text/javascript\">alert(\"Data Not Found.\")</script>";
        else
            echo "<script type=\"text/javascript\">alert(\"Medical Report Deleted.\")</script>";
    }	
}

// View Test

// Test Details

// Add test

// Add result

// Delete Test

// Add accompanies

//KNS starts
if(isset($_GET['pid'])) {
    if(isset($_GET['pid']) && strcmp($_GET['pid'],"search_room") == 0)
    {
        echo "<br/><table border=0 cellpadding=1 cellspacing=1 height=5 style=\"\"><form action=\"login.php?pid=search_room&option=search_val\" method=\"post\">";
        echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"search_val\" type=\"text\" size=50 placeholder=\"Search by Type, Room Id.\"></td>";
        echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/search_button.gif\" style=\"height:30px\"></td></tr>";
        echo "</form></table>";

        if(isset($_GET['option']) && strcmp($_GET['option'],"search_val")==0)
        {
            $search=$_POST['search_val'];

            if(!empty($search) && ($search[0]=='Z' || $search[0]=='z'))
            {

                $result=mysqli_query($link, "select * from room where Room_No='$search'");

                if(mysqli_num_rows($result)==1)
                {
                    echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
                    $val=mysqli_fetch_array($result);
                    $reg=$val['Room_No'];
                    $type=$val['Type'];
                    $ext=$val['Extension'];
                    $cost=$val['Rent'];

                    echo " <h3> Room Details </h3> ";
                    echo "<table border=0 cellpadding=1 cellspacing=0 style=\"margin:5px 0px 0px -3px;\">";
                    echo "<tr><td width=5%>Room No: </td><td width=50%>$reg</td></tr>";
                    echo "<tr><td>Type: </td><td>$type</td></tr>";
                    echo "<p align=\"left\"><tr><td>Extension: </td><td>$ext</td></tr>";
                    echo "<tr><td>Rent: </td><td>$cost</td></tr>";
                    echo "</table>";
                }

                else
                {
                    echo "<br/> <br/>";
                    echo "<script type=\"text/javascript\">alert(\"Room not found\") </script>";
                }
            }

            else if(!empty($search) && ($search[0]!='Z' || $search[0]!='z'))
            {
                $result=mysqli_query($link, "select * from Room where Type='$search'");

                if(mysqli_num_rows($result)==1)
                {
                    echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
                    $val=mysqli_fetch_array($result);
                    $reg=$val['Room_No'];
                    $type=$val['Type'];
                    $ext=$val['Extension'];
                    $cost=$val['Rent'];

                    echo " <h3> Room Details </h3> ";
                    echo "<table border=0 cellpadding=1 cellspacing=0 style=\"margin:5px 0px 0px -3px;\">";
                    echo "<tr><td width=5%>Room No: </td><td width=50%>$reg</td></tr>";
                    echo "<tr><td>Type: </td><td>$type</td></tr>";
                    echo "<p align=\"left\"><tr><td>Extension: </td><td>$ext</td></tr>";
                    echo "<tr><td>Rent: </td><td>$cost</td></tr>";
                    echo "</table>";

                }

                else if(mysqli_num_rows($result)>=1)
                {
                    echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
                    echo "<div style=\"width:900px; float:left;\">";

                    for($i=0;$i<mysqli_num_rows($result);$i=$i+1)
                    {
                        $val=mysqli_fetch_array($result);
                        $reg=$val['Room_No'];
                        $type=$val['Type'];
                        echo "<div style=\"width:900px; float:left;\">";
                        echo "<h3 align=\"left\"><a href=\"?pid=room_details&id=$reg\">$reg</a></h3>";
                        echo "<p align=\"left\"><b>Type:</b> $type<br/> ";
                        echo "</div>";
                    }
                }

                else
                {
                    echo "<br/> <br/>";
                    echo "<script type=\"text/javascript\">alert(\"Room not found\") </script>";
                }
            }

            else
                echo "<script type=\"text/javascript\">alert(\"Please enter value\") </script>";
        }
    }

    if(isset($_GET['pid']) && strcmp($_GET['pid'],"add_room") == 0)
    {
        echo "<br/> <br/>";
        echo " <h1> Add Room </h1>";
        echo "<br/> <br/> <br/><br/><br/><br/><br/><br/><br/> ";
        echo "<table border=0 cellpadding=1 cellspacing=5 style=\"margin:-150px 700px 0px -3px;\">";
        echo " <form action=\"#\" method=POST>";
        //echo "<tr><td> Room Id:</td><td> <input type=\"text\" name=\"Room_No\" required><br/><br/> </td></tr>";
        echo " <tr><td>Type: </td><td><select name=\"drop\"><option value=\"Gen\">General</option><option value=\"pri\">Private</option><option value=\"icu\">ICU</option> </select></td></tr><br/><br/>";
        echo "<tr><td> Extension: </td><td><input type=\"text\" name=\"ext\" required><br/><br/> </td></tr>";
        echo "<tr><td> <input type=\"submit\" name=\"submit\"></submit> </td></tr>";
        echo "</table> </form> ";

                /*$con = mysqli_connect("localhost","root","","HMS");
                if(!$con)
                {
                    echo " Connection Failed"; 
                }
            //	mysqli_select_db("HMS", $con);

                /*if(isset($_POST['reg']))
                {
                    $temp=$_POST['reg'];
                    echo $temp;
                }*/

        $flag=1;

        if(isset($_POST['drop']) && isset($_POST['ext']) ) //
        {
            $ext=$_POST['ext'];
            $check=mysqli_query($link, "select * from room where Extension='$ext'");
            if(mysqli_num_rows($check)>=1)
            {
                //echo "check";
                $flag=0;
            }		
            $type=$_POST['drop'];

            if($type=="Gen")
            {
                $cost=2500.00;

                if(isset($_POST['ext']) && $flag==1)
                {			

                    $ext=$_POST['ext'];

                            /*echo $reg;
                            echo $type;
                            echo $DOP;
                echo $model;*/

        $result=mysqli_query($link, "select * from room");
        $val=mysqli_num_rows($result);

        $result=mysqli_query($link, "select max(Room_No) R from room");
        $val=mysqli_fetch_array($result);
        //echo $val;
        $test=$val['R'];
        $room="Z".(substr($test,1)+1);

        $query="INSERT INTO room SET Room_No='$room',Type=\"Gen\",Extension='$ext',Rent=2500,Patient_ID=null";
        $result=mysqli_query($link, $query);

        echo "<script type=\"text/javascript\">alert(\"Room No. $room has been added.\")</script>";

        //$query = "INSERT INTO Medicinecategory(BatchNo,Name,Category) VALUES ('$_POST[Batchno]','$_POST[Name]','$_POST[Category]')";
                            /*if(isset ($query))
                $sql=mysqli_query($link, $query,$con);*/

        //echo $val;


                            /*echo $reg;
                            echo $type;
                            echo $DOP;
                echo $model;*/

        //$query = "INSERT INTO Medicinecategory(BatchNo,Name,Category) VALUES ('$_POST[Batchno]','$_POST[Name]','$_POST[Category]')";
                            /*if(isset ($query))
                $sql=mysqli_query($link, $query,$con);*/

                }
            }

            if($type=="pri" && $flag==1)
            {
                $cost=5000.00;

                if(isset($_POST['ext']))
                {			

                    $ext=$_POST['ext'];

                            /*echo $reg;
                            echo $type;
                            echo $DOP;
                echo $model;*/

        $result=mysqli_query($link, "select * from room");
        $val=mysqli_num_rows($result);

        $result=mysqli_query($link, "select max(Room_No) R from room");
        $val=mysqli_fetch_array($result);
        //echo $val;
        $test=$val['R'];
        $room="Z".(substr($test,1)+1);

        $query="INSERT INTO room SET Room_No='$room',Type=\"PRI\",Extension='$ext',Rent=2500,Patient_ID=null";
        $result=mysqli_query($link, $query);

        echo "<script type=\"text/javascript\">alert(\"Room Added\") </script>";

        //$query = "INSERT INTO Medicinecategory(BatchNo,Name,Category) VALUES ('$_POST[Batchno]','$_POST[Name]','$_POST[Category]')";
                            /*if(isset ($query))
                $sql=mysqli_query($link, $query,$con);*/

        //echo $val;


                            /*echo $reg;
                            echo $type;
                            echo $DOP;
                echo $model;*/

        //$query = "INSERT INTO Medicinecategory(BatchNo,Name,Category) VALUES ('$_POST[Batchno]','$_POST[Name]','$_POST[Category]')";
                            /*if(isset ($query))
                $sql=mysqli_query($link, $query,$con);*/
                }
            }

            if($type=="icu" && $flag==1)
            {
                $cost=2500.00;

                if(isset($_POST['ext']))
                {			

                    $ext=$_POST['ext'];

                            /*echo $reg;
                            echo $type;
                            echo $DOP;
                echo $model;*/

        $result=mysqli_query($link, "select * from room");
        $val=mysqli_num_rows($result);

        $result=mysqli_query($link, "select max(Room_No) R from room");
        $val=mysqli_fetch_array($result);
        //echo $val;
        $test=$val['R'];
        $room="Z".(substr($test,1)+1);

        $query="INSERT INTO room SET Room_No='$room',Type=\"ICU\",Extension='$ext',Rent=2500,Patient_ID=null";
        $result=mysqli_query($link, $query);

        echo "<script type=\"text/javascript\">alert(\"Room Added\") </script>";

        //$query = "INSERT INTO Medicinecategory(BatchNo,Name,Category) VALUES ('$_POST[Batchno]','$_POST[Name]','$_POST[Category]')";
                            /*if(isset ($query))
                $sql=mysqli_query($link, $query,$con);*/

        //echo $val;


                            /*echo $reg;
                            echo $type;
                            echo $DOP;
                echo $model;*/

        //$query = "INSERT INTO Medicinecategory(BatchNo,Name,Category) VALUES ('$_POST[Batchno]','$_POST[Name]','$_POST[Category]')";
                            /*if(isset ($query))
                $sql=mysqli_query($link, $query,$con);*/
                }
            }

            if($flag==0)
            {
                echo "<script type=\"text/javascript\">alert(\"Extension already in use!\") </script>";
            }
        }	



    }	
    if(isset($_GET['pid']) && strcmp($_GET['pid'],"room_details") == 0)
    {
        echo "<br/><table border=0 cellpadding=1 cellspacing=1 height=5 style=\"\"><form action=\"login.php?pid=search_room&option=search_val\" method=\"post\">";
        echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"search_val\" type=\"text\" size=50 placeholder=\"Search by Type, Reg Id.\"></td>";
        echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/search_button.gif\" style=\"height:30px\"></td></tr>";
        echo "</form></table>";

        $search=$_GET['id'];
        $result=mysqli_query($link, "select * from room where Room_No='$search'");

        echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
        $val=mysqli_fetch_array($result);
        $reg=$val['Room_No'];
        $type=$val['Type'];
        $ext=$val['Extension'];

        echo " <h3> Room Details </h3> ";
        echo "<table border=0 cellpadding=1 cellspacing=0 style=\"margin:5px 0px 0px -3px;\">";
        echo "<tr><td width=5%>Room No: </td><td width=50%>$reg</td></tr>";
        echo "<tr><td>Type: </td><td>$type</td></tr>";
        echo "<p align=\"left\"><tr><td>Extension: </td><td>$ext</td></tr>";
        echo "</table>";
    }
    if(isset($_GET['pid']) && strcmp($_GET['pid'],"discard_room") == 0)
    {
        echo "<br/><table border=0 cellpadding=1 cellspacing=1 height=5 style=\"\"><form action=\"login.php?pid=discard_room&option=search_val\" method=\"post\">";
        echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"search_val\" type=\"text\" size=50 placeholder=\"Enter Room-No, Type to delete\"></td>";
        echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/search_button.gif\" style=\"height:30px\"></td></tr>";
        echo "</form></table>"; 

        if(isset($_GET['option']) && strcmp($_GET['option'],"search_val")==0)
        {
            $search=$_POST['search_val'];

            if(!empty($search) && ($search[0]=='Z' || $search[0]=='z'))
            {

                $result=mysqli_query($link, "select * from room where Room_No='$search'");

                if(mysqli_num_rows($result)==1)
                {
                    $query=mysqli_query($link, "delete from room where Room_No='$search'");
                    echo "hello";
                    echo "<br/><br/><br/>";
                    echo "<script type=\"text/javascript\">alert(\"Room Discarded\") </script>";
                }

                else
                {
                    echo "<br/> <br/>";
                    echo "<script type=\"text/javascript\">alert(\"Invalid Entry\") </script>";
                }
            }

            else if(!empty($search) && ($search[0]!='Z' || $search[0]!='z'))
            {
                $result=mysqli_query($link, "select * from room where Type='$search'");

                if(mysqli_num_rows($result)==1)
                {
                    $query=mysqli_query($link, "delete from room where Type='$search'");
                    echo "<br/><br/><br/>";
                    echo "<script type=\"text/javascript\">alert(\"Room discarded\") </script>";
                }

                else if(mysqli_num_rows($result)>=1)
                {
                    echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
                    echo "<div style=\"width:900px; float:left;\">";

                    for($i=0;$i<mysqli_num_rows($result);$i=$i+1)
                    {
                        $val=mysqli_fetch_array($result);
                        $reg=$val['Room_No'];
                        $type=$val['Type'];
                        echo "<div style=\"width:900px; float:left;\">";
                        echo "<h3 align=\"left\"><a href=\"?pid=discard_room&id=$reg\">$reg</a></h3>";
                        echo "<p align=\"left\"><b>Type:</b> $type<br/> ";
                        echo "</div>";
                    }
                }

                else
                {
                    echo "<br/> <br/>";
                    echo "<script type=\"text/javascript\">alert(\"Invalid Entry\") </script>";
                }
            }

            else
                echo "<script type=\"text/javascript\">alert(\"Please enter value\") </script>";
        }
    }
    if(isset($_GET['pid']) && strcmp($_GET['pid'],"discard_room") == 0)
    {
        if(isset($_GET['id']))
        {
            $search=$_GET['id'];
            $result=mysqli_query($link, "select * from room where Room_No='$search'");
            //echo $search;
            $query=mysqli_query($link, "delete from room where Room_No='$search'");
            echo "<br/><br/><br/>";
            echo "<script type=\"text/javascript\">alert(\"Room Discarded\") </script>";
        }	
    }

    /*Room allotment */

    if(isset($_GET['pid']) && strcmp($_GET['pid'],"alloted_room") == 0)
    {
        echo "<br/><table border=0 cellpadding=1 cellspacing=1 height=5 style=\"\"><form action=\"login.php?pid=alloted_room&option=search_val\" method=\"post\">";
        echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"search_val\" type=\"text\" size=50 placeholder=\"Search by Type, Room Id.\"></td>";
        echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/search_button.gif\" style=\"height:30px\"></td></tr>";
        echo "</form></table>";

        if(isset($_GET['option']) && strcmp($_GET['option'],"search_val")==0)
        {
            $search=$_POST['search_val'];

            if((!empty($search)) && ($search[0]=='Z' || $search[0]=='z'))
            {
                $find=mysqli_query($link, "select * from room where Room_No='$search'");

                if(mysqli_num_rows($find)==0)
                    echo "<script type=\"text/javascript\">alert(\"Room not found!\") </script>";

                else
                {
                    $result=mysqli_query($link, "select * from room_given where Room_No='$search'");

                    if(mysqli_num_rows($result)==0)
                    {
                        echo "<script type=\"text/javascript\">alert(\"Room not alloted!\") </script>";
                    }

                    else
                    {
                        if((!empty($result) && mysqli_num_rows($result)==1))
                        {
                            echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
                            $val=mysqli_fetch_array($result);
                            $room=$val['Room_No'];
                            $id=$val['Patient_ID'];
                            $ad=$val['Allot_date'];
                            $rd=$val['Discharge_date'];
                            $rent=mysqli_query($link, "select Rent from room where Room_No='$search'");
                            $price=mysqli_fetch_array($rent);
                            $cost=$price['Rent'];

                            echo " <h3> Room Allotment History</h3> ";
                            echo "<table border=0 cellpadding=1 cellspacing=0 style=\"margin:5px 0px 0px -3px;\">";
                            echo "<tr><td width=5%>Room No: </td><td width=50%>$room</td></tr>";
                            echo "<tr><td>Patient Id: </td><td>$id</td></tr>";
                            echo "<p align=\"left\"><tr><td>Allotment Date: </td><td>$ad</td></tr>";
                            echo "<tr><td>Discharge Date: </td><td>$rd</td></tr>";
                            echo "<tr><td>Rent: </td><td>$cost</td></tr>";
                            echo "</table>";
                        }

                        else if(!empty($result) && (mysqli_num_rows($result)>1))
                        {
                            echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
                            echo "<div style=\"width:900px; float:left;\">";

                            for($i=0;$i<mysqli_num_rows($result);$i=$i+1)
                            {
                                $val=mysqli_fetch_array($result);
                                $room=$val['Room_No'];
                                $id=$val['Patient_ID'];
                                $ad=$val['Allot_date'];
                                $rd=$val['Discharge_date'];

                                echo "<div style=\"width:900px; float:left;\">";
                                echo "<h3 align=\"left\"><a href=\"?pid=room_al&id=$id&room=$room&ad=$ad&rd=$rd\">$room</a></h3>";										echo "<div style=\"width:900px; float:left;\">";
                                //echo "<h3 align=\"left\"><a href=\"?pid=room_al&id=$reg\">$reg</a></h3>";
                                //echo "<p align=\"left\"><b>Type:</b> $type<br/> ";
                                echo "</div>";
                            }
                        }
                    }	
                }
            }

            else if((!empty($search)) && ($search[0]!='Z' || $search[0]!='z'))
            {
                $find=mysqli_query($link, "select * from room where Type='$search'");

                if(mysqli_num_rows($find)==0)
                    echo "<script type=\"text/javascript\">alert(\"Room not found!\") </script>";

                else
                {
                    $result=mysqli_query($link, "select * from room a,room_given b where a.Type='$search' and a.Room_No=b.Room_No");
                    //echo mysqli_num_rows($result);

                    if(mysqli_num_rows($result)==0)
                    {
                        echo "<script type=\"text/javascript\">alert(\"Room not alloted!\") </script>";
                    }

                    else
                    {
                        if((!empty($result) && mysqli_num_rows($result)==1))
                        {
                            echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
                            $val=mysqli_fetch_array($result);
                            $room=$val['Room_No'];
                            $id=$val['Patient_ID'];
                            $ad=$val['Allot_date'];
                            $rd=$val['Discharge_date'];
                            $rent=mysqli_query($link, "select Rent from room where Room_No='$search'");
                            $price=mysqli_fetch_array($rent);
                            $cost=$price['Rent'];


                            echo " <h3> Room Allotment History</h3> ";
                            echo "<table border=0 cellpadding=1 cellspacing=0 style=\"margin:5px 0px 0px -3px;\">";
                            echo "<tr><td width=5%>Room No: </td><td width=50%>$room</td></tr>";
                            echo "<tr><td>Patient Id: </td><td>$id</td></tr>";
                            echo "<p align=\"left\"><tr><td>Allotment Date: </td><td>$ad</td></tr>";
                            echo "<tr><td>Discharge Date: </td><td>$rd</td></tr>";
                            echo "<tr><td>Rent: </td><td>$cost</td></tr>";
                            echo "</table>";
                        }

                        else if(!empty($result) && (mysqli_num_rows($result)>1))
                        {
                            echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
                            echo "<div style=\"width:900px; float:left;\">";

                            echo " <h3> Select any room</h3> ";

                            for($i=0;$i<mysqli_num_rows($result);$i=$i+1)
                            {
                                $val=mysqli_fetch_array($result);
                                $room=$val['Room_No'];
                                $id=$val['Patient_ID'];
                                $ad=$val['Allot_date'];
                                $rd=$val['Discharge_date'];

                                echo "<div style=\"width:900px; float:left;\">";
                                echo "<h3 align=\"left\"><a href=\"?pid=room_al&id=$id&room=$room&ad=$ad&rd=$rd\">$reg</a></h3>";
                                //echo "<p align=\"left\"><b>Type:</b> $type<br/> ";
                                echo "</div>";
                            }
                        }
                    }	
                }
            }


            else
                echo "<script type=\"text/javascript\">alert(\"Enter Value!\") </script>";
        }

        /* Room allotment finished */
    }	
    if(isset($_GET['pid']) && strcmp($_GET['pid'],"room_al") == 0)
    {
        echo "<br/><table border=0 cellpadding=1 cellspacing=1 height=5 style=\"\"><form action=\"login.php?pid=alloted_room&option=search_val\" method=\"post\">";
        echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"search_val\" type=\"text\" size=50 placeholder=\"Search by Type, Room Id.\"></td>";
        echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/search_button.gif\" style=\"height:30px\"></td></tr>";
        echo "</form></table>";

        if(isset($_GET['id']) && isset($_GET['room']) && isset($_GET['ad']) || isset($_GET['rd']) )
        {
            $search=$_GET['room'];
            //$result=mysqli_query($link, "select * from vehicle_given where Reg_No='$search'");
            echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
            //$val=mysqli_fetch_array($result);

            //	$reg=$val['Reg_No'];
            $id=$_GET['id'];
            $room=$_GET['room'];
            $ad=$_GET['ad']; 
            $rd=$_GET['rd'];

            $rent=mysqli_query($link, "select Rent from room where Room_No='$search'");	
            $cost=mysqli_fetch_array($rent);
            $price=$cost['Rent'];

            echo " <h3> Room Allotment History</h3> ";
            echo "<table border=0 cellpadding=1 cellspacing=0 style=\"margin:5px 0px 0px -3px;\">";
            echo "<tr><td width=5%>Reg No: </td><td width=50%>$room</td></tr>";
            echo "<tr><td>Used by: </td><td>$id</td></tr>";
            echo "<p align=\"left\"><tr><td>Allotment Date: </td><td>$ad</td></tr>";
            echo "<tr><td>Return Date: </td><td>$rd</td></tr>";
            echo "<tr><td>Rent: </td><td>$price</td></tr>";
            echo "</table>";					
        }
    }

}

/* KNS END */
ob_end_flush();
?>
</div>
</center>
</body>
</html>
