<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
        <link rel="stylesheet" href="vmchecker.css">
</head>

<body leftmargin="0px" topmargin="0px" marginwidth="0px" marginheight="0px">

         <div class = "well">

            <ul id="nav"  >

                <li><a href="adminControlPannel.php"><b>Acas&#259</b></a></li>
                <li><a href="gradingSearch.php"><b>Noteaz&#259</b></a></li>

                <li >
            		<a href="#">Tem&#259</a>

            		<ul>
                        <li><a href="homeworkAdd.php"><b>Adaug&#259 tem&#259</b></a></li>
                        <li><a href="homeworkConfigure.php"><b>Configureaz&#259 tem&#259</b></a></li>
            		</ul>

            	</li>
                        <li><a href="userAdd.php"><b>Adaug&#259 student</b></a></li>   
                        <li><a href="teacherHelp.php"><b>Ajutor titular</b></a></li>

             </ul>

             <ul id="navy" >
                            <li><a href="#" onclick="javascript:deleteCookie();"><b>Deconectare</b></a></li>
                            <li><a><b>Utilizator: <?php echo $userInput; ?></b></a></li>
             </ul>

         </div>

</body>

</html>
