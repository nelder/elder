<!-- Index Page | Created Month 1, YYYY | Nick Elder -->
<html>
	<head>
		<title>Index Page</title>
		<?php //Include standard head content.
			require_once("components/head.php");
		?>
	</head>
	<body>
		<!-- Menu  -->
		<?php
		require_once('components/menu.php');
		?>

		<!-- Splash -->
		<div class="content_container" style="margin-top:100px;">
			<span id="nick_photo"><img src="img/nick.png"></span>

			<span style="float:right;width:65%;padding:50px;padding-left:80px;padding-top:30px;">
				<h1>Ahoy internet surfer!</h1>
				<p style="line-height:30px;">
				My name is Nick. I'm a creative who likes <span class="highlight">design</span>, <span class="highlight">technology</span>, and <span class="highlight">entrepreneurship</span>. I currently study Computer Science and Business Administration at Western University and previously worked as a <span class="highlight">Prouct Manager Intern</span> at <a style="font-weight:600;" href="https://www.hubdoc.com">Hubdoc</a>.
				</p>
			</span>
		</div>


		<!-- Projects -->
		<div class="content_container" style="margin-top:120px;">
			<h1 style="text-align:center;margin-bottom:100px">Featured Projects</h1>


			<!-- Hack Western -->
			<span class="project_card_container">
				<div class="project_card">
					<a href="hackwestern.php">
					<div class="photo"><span style="background:url('img/hackwestern.png') center center no-repeat;background-size:contain;">&nbsp;</span></div>
					<div class="desc" style="background-color:#684998;">
						<div class="title">Hack Western</div>
						<div class="subtitle">Design | 2016 - 2018</div>
					</div></a>
				</div>
			</span>

			<!-- NIKU -->
			<span class="project_card_container">
				<div class="project_card">
					<a href="https://www.nikufarms.ca">
					<div class="photo"><span style="background:url('img/niku.png') center center no-repeat;background-size:contain;">&nbsp;</span></div>
					<div class="desc" style="background-color:#D64547;">
						<div class="title">NIKU Farms</div>
						<div class="subtitle">Freelance Dev/Design | 2018</div>
					</div></a>
				</div>
			</span>

			<!-- Stormcraft (Custom formatted container card, don't reusue) -->
			<span class="project_card_container">
				<div class="project_card">
					<a href="http://www.stormcraft.ca">
					<div class="photo" style="background:url('img/stormcraft_bg.png');background-size:600px;"><span style="background:url('img/stormcraft.png') center center no-repeat;background-size:contain;">&nbsp;</span></div>
					<div class="desc" style="background-color:#C23964;">
						<div class="title">Stormcraft</div>
						<div class="subtitle">Startup | 2011 - 2015</div>
					</div></a>
				</div>
			</span>

			<!-- Fero -->
			<span class="project_card_container">
				<div class="project_card">
					<a href="https://www.fero.io/">
					<div class="photo"><span style="background:url('img/fero.png') center center no-repeat;background-size:contain;">&nbsp;</span></div>
					<div class="desc" style="background-color:#ED4842;">
						<div class="title">Fero</div>
						<div class="subtitle">Startup | 2016</div>
					</div></a>
				</div>
			</span>

			<!-- Plug -->
			<span class="project_card_container">
				<div class="project_card">
					<a href="https://plugapp.elder.ca/">
					<div class="photo"><span style="background:url('img/plug.png') center center no-repeat;background-size:contain;">&nbsp;</span></div>
					<div class="desc" style="background-color:#28B787;">
						<div class="title">Plug Networking</div>
						<div class="subtitle">Freelance Dev/Design | 2016</div>
					</div></a>
				</div>
			</span>

			<!-- Setsail -->
			<span class="project_card_container">
				<div class="project_card">
					<a href="https://www.setsail.io">
					<div class="photo"><span style="background:url('img/setsail.png') center center no-repeat;background-size:contain;">&nbsp;</span></div>
					<div class="desc" style="background-color:#68B2D3;">
						<div class="title">Setsail Education</div>
						<div class="subtitle">Freelance Dev/Design | 2016</div>
					</div></a>
				</div>
			</span>

		</div>


		<!-- Articles -->
		<div class="content_container" style="margin-top:120px;">
			<h1 style="text-align:center;margin-bottom:100px">Writing</h1>

		</div>

		<div>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>


		<!-- Footer  -->
		<?php
		require_once('components/footer.php');
		?>
	</body>
</html>