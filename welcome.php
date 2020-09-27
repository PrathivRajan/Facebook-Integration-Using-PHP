<h1>Welcome</h1>
<?php if(empty($_SESSION['access_token'])): ?>
<a href="logout.php">Logout</a>
<?php else:  ?>

<a href="<?php echo $login_url; ?>">Facebook Login</a>

<?php  endif; ?>