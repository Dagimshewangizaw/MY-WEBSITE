<?php $conn = new mysqli("localhost", "root", "", "school_portal");
if($_POST) { $name = $_POST['name']; $password = $_POST['password'];
$result = $conn->query("SELECT * FROM students_result WHERE name='$name' AND password='$password'");
if($row = $result->fetch_assoc()) { echo "<h1>Welcome $row[name]!</h1>"; echo "<h2>Your Result: $row[result] out of 100</h2>"; echo "<a href='index.php'><button>logout</button></a>"; } else { echo "<h1>Incorrect ID or Password</h1>"; echo "<a href='index.php'>Try Again</a>"; } exit; } ?>
<h1>Students Result</h1> <form method="POST"> NAME: <input type="text" name="Name" required><br><br> Password: <input type="password" name="password" required><br><br> <button>Login</button> </form>