<?php
	var_dump($_GET);
	var_dump($_POST);
?>
<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
				<title>Hello there.</title>
		</head>	
		<body>
			<div id="wrapper">
			<hr>
				<form method="POST" action="/my_first_form.php">
					<h1>Enter Your Password</h1>
    				<p>
        				<input type="text" id="username" name="username" placeholder="Enter your username">
    				</p>
    				<p>
        				<input type="password" id="password" name="password" placeholder="Enter your password">
    				</p>
    				<p>
        				<button type="submit">My first button</button>
    				</p>
				</form>
				<hr>
				<form method="POST" action="/my_first_form.php">
					<h2>Compose an email</h2>
					<p>
						<label for="to">To</label>
						<input type="email" name="to" id="to" placeholder="Who is this going to?">
					</p>
					<p>
						<label for="from">From</label>
						<input type="email" name="from" id="from" placeholder="who are you?">
					</p>	
					<p>
						<textarea name="email_body" placeholder="Compose your email."></textarea>
					</p>
					<p>
						<label for="i_want">Yes I want emails</label>
						<input type="checkbox" name="i_want" id="i_want" value="yes" checked>
						<input type="submit">
					</p>
				</form>
				<hr>
				<form method="POST" action="/my_first_form.php">
					<h3>Is Codeup Awesome?</h3>
						<label for="no">No</label>
						<input type="radio" name="no" id="no" value="no">
						<label for="yes">Yes</label>
						<input type="radio" name="yes" id="yes" value="yes" checked>
						<label for="maybe">Maybe</label>
						<input type="radio" name="maybe" id="maybe" value="maybe">
						<input type="submit">
				</form>
				<hr>
				<form method="POST" action="/my_first_form.php">
					<h3>This is multiple choice qq's</h3>
						<label for="love_beach">I love the beach</label>
						<input type="radio" name="love_beach" id="love_beach" value="love_beach">
						<label for="love_snow">I love the snow</label>
						<input type="radio" name="love_snow" id="love_snow" value="love_snow">
						<input type="submit">
					<h3>Second multi-choice</h3>
						<label for="hermit">Are you a hermit and want to stay home?</label>
						<select id="hermit" name="hermit[]" multiple>
							<option value="stay_home">I want to stay at home!</option>
							<option value="lets_go!">Lets go cheap!</option>
							<option value="you're_buying">If you're buying, i'm flying!</option>
						</select>
						<input type="submit">
				</form>
				<hr>
				<form method="POST" action="/My_first_form.php">
					<h3>This is the section for grouped checkmarks</h3>
						<label for="pizza">Pizza</label>
						<input type="checkbox" name="pizza[]" id="pizza" value="pizza">
						<label for="salad">Salad</label>
						<input type="checkbox" name="salad[]" id="salad" value="salad">
						<label for="bread">Bread sticks too?</label>
						<input type="checkbox" name="bread[]" id="bread" value="bread">
						<input type="submit">
				</form>
				<hr>
				<form method="POST" action="/my_first_form.php">
					<h3>Select Testing</h3>
						<lable for="select_testing">Select Testing</lable>
						<select id="select_testing" name="select_testing">
							<option value="1">Yes</option>
							<option selected value="0">No</option>
						</select>	
				</form>
				<hr>		
			</div>
		</body>	
	</html>
