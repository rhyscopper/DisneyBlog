<style type ="text/css">
	ul 	{font-size : 24pt;
		text-align: center;}

		body { padding-left:30px;
             padding-right:20px;
             padding-top: 0px;
             padding-bottom: 20px;
             background-color:#F8FFD3;
           }

       h4  { font-size:20pt;}

       p   {font-size:14pt;
            font-style:italic;
           }
       #text {vertical-align:top;}

       button{vertical-align:top;
               margin-bottom: -20px;
               margin-top: -36px;

              } 
	</style>
<?php

// Define your username and password
$username = "Rhys";
$password = "1234";

if ($_POST['username'] != $username || $_POST['pass'] != $password) {

?>
<!--<div id="templatemo_menu_panel">
    	<div id="templatemo_menu_section">
            
		</div>
    </div>  end of menu<div id="templatemo_bottom_panel">
<br></br>
 <img src="Impossible.png" alt="Do The Impossible"/>
	<div style="text-align: center;">
	<div style="box-sizing: border-box; display: inline-block; width: auto; max-width: 480px; background-color: #FFFFFF; border: 2px solid #fdc9d1; border-radius: 5px; box-shadow: 0px 0px 8px #fdc9d1; margin: 50px auto auto;">
	<div style="background: #fdc9d1; border-radius: 5px 5px 0px 0px; padding: 15px;"><span style="font-family: verdana,arial; color: #000000; font-size: 1.00em; font-weight:bold;">Incorrect username or password. Please Go BACK and try again!</span></div>
	<div style="background: ; padding: 15px">
	<style type="text/css" scoped>
	td { text-align:left; font-family: verdana,arial; color: #000000; font-size: 1.00em; }
	input { border: 1px solid #fdc9d1; border-radius: 5px; color: #000000; display: inline-block; font-size: 1.00em;  padding: 5px; width: 100%; }
	input[type="button"],input[type="submit"] { height: auto; width: auto; cursor: pointer; box-shadow: 0px 0px 5px #fdc9d1; float: right; text-align:right; margin-top: 10px; margin-left:7px;}
	table.center { margin-left:auto; margin-right:auto; }
	</style>-->

<?php

}
else {

header( 'Location: http://webprojects.eecs.qmul.ac.uk/rc304/Miniproject/AddEntry.html' ) ;

}


?>
