<?php 
    session_start();

    if (!isset($_SESSION['userid'])): 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <title>Chat2</title>
    
    <link rel="stylesheet" type="text/css" href="main.css" />
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2" type="text/javascript"></script>
    <script type="text/javascript" src="check.js"></script>
</head>

<body onload="document.getElementById('userid').focus();">

    <div id="page-wrap"> 
    
    	<div id="header">
        	<h1><a href="/examples/Chat2/">Chat v2</a></h1>
        </div>
        
    	<div id="section">
        	<form method="post" action="jumpin.php">
            	<label>Desired Username:</label>
                <div>
                	<input type="text" id="userid" name="userid" value="<?php if (isset($_GET['user'])){ echo $_GET['user'];}?>" />
            	</div>
            </form>
        </div>
        
        <div id="status">
            <?php if ($_GET['error']==1): ?>
				<div class='message warning'>This nickname is in use. (Nicknames take 2 minutes of no use to expire)</div>
			<?php endif;?>
        </div>
        
    </div>
    
</body>

</html>

<?php 
    else:
        require_once("chatrooms.php");
    endif; 
?>