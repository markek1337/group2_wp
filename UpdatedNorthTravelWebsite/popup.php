<?php if (isset($_SESSION['success'])) : ?>
<div id="popup-close">
<div class="adminhome " 
  style="
  z-index:3;
  position:absolute;
  top: 20%;
  left:40%;
  width: 30%;
	margin: 0px auto 0px;
	font-family: Roboto;
	font-weight: bold;	
	color: white;
	background: -webkit-linear-gradient(top, #58b8df, #44df9e);
	text-align: center;
	border: none;
	border-bottom: none;
	border-radius: 20px 10px 0px 0px;
	padding: 0px;">
		<h2>User page</h2>
        <a href="" onclick="document.getElementById('popup-close').style.left='none'" style="position:absolute; right:15px; top:15px;"><img src="Login/images/cross.png" style="width:20px;" alt="end"></a>
	</div>
	<div class="content" style="
  z-index:1;
	position:absolute;
  top: 26%;
  left:40%;
  width: 30%;
	font-family: Roboto;
	font-weight: bold;
	margin: 0px auto;
	padding: 20px;
	border: none;
	background: white;
	border-radius: 0px 0px 20px 20px;
">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" style="z-index:0; position:absolute; left:20%; color: #44df9e; background: none; border: none;  padding:20px;">
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
        
		<!-- logged in user information -->
		<div class="profile_info">
			<img src="Login/images/user_profile.png" style="position:relative; top:60px; width:13%;" >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong style="position:relative; top:20px; left:70px;"><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="position:relative; top:20px; left:70px; color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a class="btn" href="index.php?logout='1'" style="position:relative; left:280px; bottom:10px; padding:7px; color:white; background: #44df9e;">Log out</a>
                       &nbsp; <a class="btn" href="profile.php" style="position:relative; left:280px; bottom:10px; padding:7px; color:white;  background: #58b8df;">Profile</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
    </div>
  <?php endif ?>