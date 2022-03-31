 <style> 
	#btn-acc {
		
		color: black;
	}
	#btn-acc:hover {
	background: #09beb8;
	padding: 3px 10px;
	border-radius: 6px;
	}
 

 </style> 
 <nav class="navbar navbar-dark fixed-top  flex-md-nowrap p-0 shadow" style="background:linear-gradient(35deg, #09beb8, #128ddf);">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"><img src="../images/logo.png" alt=""  width="auto" height="40px"/></a>
  
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap" id='btn-acc'>
    	<?php
    		if (isset($_SESSION['admin_id'])) {
    			?>
    				<a class="nav-link" href="../admin-bm/admin-logout.php">Sign out</a>
    			<?php
    		}else{
    			$uriAr = explode("/", $_SERVER['REQUEST_URI']);
    			$page = end($uriAr);
    			if ($page === "login.php") {
    				?>
	    				<a class="nav-link" href="../admin-bm/register.php">Register</a>
	    			<?php
    			}else{
    				?>
	    				<a class="nav-link" href="../admin-bm/login.php">Login</a>
	    			<?php
    			}


    			
    		}

    	?>
      
    </li>
  </ul>
</nav>