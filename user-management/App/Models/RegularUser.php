<?php
namespace App\Models;
use App\Core\AbstractUser;
use App\Core\AuthInterface;
class RegularUser extends AbstractUser implements AuthInterface {
 public function userRole() {
 return "Regular User";
 }
 public function login($email, $password) {
 if ($email === $this->email && password_verify($password, $this->password)) {
 return "User logged in successfully.";
 }
 return "Invalid credentials.";
 }
 public function logout() {
 return "User logged out.";
}
public function saveToDatabase() {
$db = Database::connect();
$stmt = $db->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");
$stmt->execute([$this->name, $this->email, $this->password, 'Regular']); }
}
?>
