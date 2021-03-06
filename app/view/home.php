<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Fixed Width 1 Red</title>
	<link href="./assets/css/style.css" rel="stylesheet">
	<script type="text/javascript">
		/* =============================
		This script generates sample text for the body content.
		You can remove this script and any reference to it.
		 ============================= */
		var bodyText=["The smaller your reality, the more convinced you are that you know everything.", "If the facts don't fit the theory, change the facts.", "The past has no power over the present moment.", "This, too, will pass.", "</p><p>You will not be punished for your anger, you will be punished by your anger.", "Peace comes from within. Do not seek it without.", "<h2>Heading</h2><p>The most important moment of your life is now. The most important person in your life is the one you are with now, and the most important activity in your life is the one you are involved with now."]
		function generateText(sentenceCount){
			for (var i=0; i<sentenceCount; i++)
			document.write(bodyText[Math.floor(Math.random()*7)]+" ")
		}
	</script>
</head>
	<body>
		<div id="page">
			<header id="header">
				<div id="header-inner">
					<div id="logo">
						<h1><a href="#">Cool<span>Logo</span></a></h1>
					</div>
					<div id="top-nav">
						<ul>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Help</a></li>
						</ul>
					</div>
					<div class="clr"></div>
				</div>
			</header>
			<div class="feature">
				<div class="feature-inner">
				<h1>Heading</h1>
				</div>
			</div>


			<div id="content">
				<div id="content-inner">

					<main id="contentbar">
						<div class="article">
							<p><script>generateText(12)</script></p>
						</div>
					</main>

					<nav id="sidebar">
						<div class="widget">
							<h3>Left heading</h3>
							<ul>
							<li><a href="#">Link 1</a></li>
							<li><a href="#">Link 2</a></li>
							<li><a href="#">Link 3</a></li>
							<li><a href="#">Link 4</a></li>
							<li><a href="#">Link 5</a></li>
							</ul>
						</div>
					</nav>

					<div class="clr"></div>
				</div>
			</div>

			<div id="footerblurb">
				<div id="footerblurb-inner">

					<div class="column">
						<h2><span>Heading</span></h2>
						<p><script>generateText(2)</script></p>
					</div>
					<div class="column">
						<h2><span>Heading</span></h2>
						<p><script>generateText(2)</script></p>
					</div>
					<div class="column">
						<h2><span>Heading</span></h2>
						<p><script>generateText(2)</script></p>
					</div>

					<div class="clr"></div>
				</div>
			</div>
			<footer id="footer">
				<div id="footer-inner">
					<p>&copy; Copyright <a href="#">Your Site</a> &#124; <a href="#">Terms of Use</a> &#124; <a href="#">Privacy Policy</a></p>
					<div class="clr"></div>
				</div>
			</footer>
		</div>
	</body>
</html>
