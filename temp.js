const pass = prompt("Please enter admin password to continue: ", "password");
if (pass === "admin") {
    window.location.href = "dashboard.php";
} else {
    alert("Incorrect password! Please try again.");
    window.location.href = "index.php";
}
