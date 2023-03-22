<!DOCTYPE html>
<html>
<head>
	<title>Restaurant Table Booking</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Table Booking</h1>
    <form>
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required><br>

		<label for="phone">Phone:</label>
		<input type="tel" id="phone" name="phone" required><br>

		<label for="date">Date:</label>
		<input type="date" id="date" name="date" required><br>

		<label for="time">Time:</label>
		<input type="time" id="time" name="time" required><br>

		<label for="guests">Number of Guests:</label>
		<input type="number" id="guests" name="guests" min="1" max="10" required><br>

		<label for="special">Special Requests:</label>
		<textarea id="special" name="special" rows="4"></textarea><br>

		<input type="submit" value="Book Table">
	</form>
</body>
</html>
