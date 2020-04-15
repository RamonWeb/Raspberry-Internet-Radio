<?php
#    shell_exec("pigs mode 17 w");
    if(isset($_GET['off17']))
        {
                        echo "SWR3 1 is off";
                        shell_exec("mpc stop");
        }
            else if(isset($_GET['on17']))
            {
                        echo "SWR3 Webradio  is on";
                        shell_exec("mpc play 1");
            }
            else if(isset($_GET['on22']))
            {
                        echo "Playlist 2 is on";
                        shell_exec("mpc play 2");
            }
            else if(isset($_GET['off22']))
            {
                        echo "Play is off";
                        shell_exec("mpc stop");
            }
?>
 <html>
<head>
<meta name="viewport" content="width=device-width" />
<title>Raspberry Pi Controlled Radio</title>
</head>
       <body>
       <center><h1>Internet-Radio </h1>      
         <form method="get" action="radio.php">                
            <input type="submit" style = "font-size: 14 pt" value="OFF" name="off17">
            <input type="submit" style = "font-size: 14 pt" value="ON" name="on17">
            </a></p>
            <input type="submit" style = "font-size: 14 pt" value="OFF" name="off22">
            <input type="submit" style = "font-size: 14 pt" value="ON" name="on22">
         </form>
</a></p>
 <p><a>&nbsp; &nbsp;</a><a title="start" href="index.html" target="">HOME.. </a></p>  
</a></p>
</center>
   </body>
</html>
