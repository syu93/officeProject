<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> Split office </title>
		<meta name="description" content="">
		<link rel="stylesheet" href="view/css/main.css">
		<link rel="stylesheet" href="view/css/menu.css">
		<!-- || LIBS || -->
		<script type="text/javascript" src="view/js/libs/jquery-1.11.0.min.js"></script>
		<!-- || LIBS || -->
		<script type="text/javascript" src="view/js/main.js"></script>
	</head>
	<body>
		<header>
			<nav>
				<div class="main-menu-container">
					<div class="menu-container">
						<div class="menu-row-one">
							<ul class="level-1">
								<li>file</li>
								<li>edit</li>
								<li>view</li>
								<li>tools</li>
							</ul>
						</div>
						<div class="menu-row-two">
							<div class="tool-container">
								<input type="button" value="G" onclick="document.execCommand('bold')"
									style="font-weight:bold"/>
								<input type="button" value="I" onclick="document.execCommand('italic')"
									style="font-style:italic"/>
								<input type="button" value="S" onclick="document.execCommand('underline')"
									style="text-decoration:underline"/>
								<input type="button" value="Effacer" onclick="document.execCommand('delete')"/>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</header>
		<!-- || MAIN_SHEET || -->
		<section>
		<div>
			<div id="main-sheet-container">
				<div id="sheet-container" class="sheet-container">
					
					<div id="sheet_1" class="sheet">
						<div class="container-sheet-head">
							<div id="sheet-head_1" class="sheet-head">
							</div>
						</div>

						<div class="container-sheet-body">
							<div id="sheet-body_1" class="sheet-body">
							</div>
						</div>

						<div class="container-sheet-footer">
							<div id="sheet-footer_1" class="sheet-footer">
							</div>
						</div>
					</div>
				
				</div>
			</div>
		</div>
		</section>
		<!-- || MAIN_SHEET || -->
		<aside>
		</aside>
		<footer>
		</footer>
	</body>
</html>