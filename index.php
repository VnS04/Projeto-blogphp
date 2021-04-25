<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Editorial by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<?php
                                    require_once("header.php");
                                ?>

							<!-- Banner -->
                                <?php
                                    require_once("banner.php");
                                ?>

							<!-- Section 1 -->
                                <?php
                                    require_once("section1.php");
                                ?>

							<!-- Section -->
                                <?php
                                    require_once("section2.php");
                                ?>
                                
						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
                                <?php
                                    require_once("search.php");
                                ?>

							<!-- Menu -->
                                <?php
                                    require_once("menu.php");
                                ?>

							<!-- Section 3 -->
                                <?php
                                    require_once("section3.php");
                                ?>

							<!-- Section 4 -->
                                <?php
                                    require_once("section4.php");
                                ?>

							<!-- Footer -->
								<?php
                                    require_once("footer.php");
                                ?>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>