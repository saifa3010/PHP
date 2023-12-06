<?php
// Create a cookie
$cookieName = "user";
$cookieValue = "JohnDoe";
$expiryTime = time() + (86400 * 30); // 30 days
$cookiePath = "/";
$domain = ""; // Set to your domain or leave empty for the current domain
$secure = false; // Set to true if using HTTPS
$httponly = true;

setcookie($cookieName, $cookieValue, $expiryTime, $cookiePath, $domain, $secure, $httponly);

echo "<h1>Cookie Created</h1>";
echo "<p>Cookie '$cookieName' has been created with value '$cookieValue'.</p>";

// Retrieve all cookies
echo "<h2>Retrieving Cookies</h2>";
if (isset($_COOKIE[$cookieName])) {
    echo "<p>Value of '$cookieName': " . $_COOKIE[$cookieName] . "</p>";
} else {
    echo "<p>Cookie '$cookieName' not set.</p>";
}

// Delete the cookie
setcookie($cookieName, "", time() - 3600, $cookiePath, $domain, $secure, $httponly);

echo "<h1>Cookie Deleted</h1>";
echo "<p>Cookie '$cookieName' has been deleted.</p>";

// Attempt to retrieve the deleted cookie
echo "<h2>Attempting to Retrieve Deleted Cookie</h2>";
if (isset($_COOKIE[$cookieName])) {
    echo "<p>Value of '$cookieName': " . $_COOKIE[$cookieName] . "</p>";
} else {
    echo "<p>Cookie '$cookieName' not set (it has been deleted).</p>";
}
?>
