<?php
include_once 'db.php';
session_start();

if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
  $result = $conn->query($sql);
  if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $user['username'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['user_id'] = $user['id'];
    header('Location:index.php');
  } else {
    header('Location:Login.php');
  }
}

if (isset($_POST['Register'])) {
  $name = $_POST['name'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "INSERT INTO `user` (`name`, `username`, `email`, `password`) VALUES ('$name', '$username', '$email', '$password')";
  $conn->query($sql);

  header('Location:Login.php');
}

if (isset($_POST['reservation'])) {
  $room_type = $_POST['room_type'];
  $num_rooms = $_POST['num_rooms'];
  $num_persons = $_POST['num_persons'];
  $num_children = $_POST['num_children'];
  $restaurant_facilities = $_POST['restaurant_facilities'];
  $arrival_date = $_POST['arrival_date'];
  $departure_date = $_POST['departure_date'];

  // Prepare and bind
  $stmt = $conn->prepare("INSERT INTO reservation (_id, room_type, num_rooms, num_persons, num_children, restaurant_facilities, arrival_date, departure_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("ssssssss", $_SESSION['user_id'], $room_type, $num_rooms, $num_persons, $num_children, $restaurant_facilities, $arrival_date, $departure_date);

  // Execute the statement
  $stmt->execute();

  // Close connection
  $stmt->close();
  $conn->close();
  header('Location: Payment.php');
}

if (isset($_POST['payment'])) {
  $_ID = $_SESSION['user_id'];
  $full_name = $_SESSION['username'];
  $email = $_SESSION['email'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip_code = $_POST['zip'];
  $card_name = $_POST['cardName'];
  $card_number = $_POST['cardNum'];
  $exp_month = $_POST['exp_month'];
  $exp_year = $_POST['exp_year'];
  $cvv = $_POST['cvv'];

  echo 'test';

  // Insert user data into database
  $sql = "INSERT INTO Payments (_id, full_name, email, address, city, state, zip_code, card_name, card_number, exp_month, exp_year, cvv) VALUES ('$_ID', '$full_name', '$email', '$address', '$city', '$state', '$zip_code', '$card_name', '$card_number', '$exp_month', '$exp_year', '$cvv')";

  if ($conn->query($sql) === TRUE) {
    header('Location: http://localhost/Project/index.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

if (isset($_POST['contact'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $_id = $_SESSION['user_id'];

  $sql = "INSERT INTO contact_us ( _id, name, email, message) VALUES ( $_id, '$name', '$email', '$message')";

  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Message sent successfully!');</script>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
  header('Location: http://localhost/Project/index.php');
}
