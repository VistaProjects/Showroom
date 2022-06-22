<link rel="stylesheet" href="header.css">
<div class="header">
	<a href="index.php" class="logo">Vista Cars</a>
	<div class="header-right">
		<a id="home" href="index.php">Home</a>
		<a id="users" href="users.php">Users</a>
		<a id="orders" href="orders.php">Orders</a>
		<a id="tasks" href="tasks.php">Tasks</a>
		<a id="schedule" href="schedule.php">Schedule</a>
		<!-- <a id="admin" href="admin.php">Admin</a> -->
	</div>
</div>
<script>
	var active_class = 'active'
	var p = location.pathname.slice(1).split('.')[0].split('/')
	var path = p[p.length - 1]

	if (path == 'index') path = 'home'
	var element = document.getElementById(path);

	console.log(path)

	element.style.paddingTop = '9%'
	element.style.color = 'white'
	element.style.animation = "animation 1s 1";
	element.classList.add(active_class);
	element.removeAttribute("href");
</script>