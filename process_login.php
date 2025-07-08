<?php
$users = [
    "4232010" => "محمود فريد شوقى",
    "4231120" => "المعتصم ممدوح",
    "4231115" => "محمد محمود حسين",
    "4231095" => "يوسف أحمد محمد"
];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $userid = $_POST["userid"];
    if (array_key_exists($userid, $users)) {
        setcookie("userid", $userid, time() + 3600, "/");
        setcookie("username", $users[$userid], time() + 3600, "/");
        header("Location: index.html");
        exit();
    } else {
        header("Location: login.php?error=1");
        exit();
    }
} else {
    // لو دخل الصفحة مباشرة بدون POST
    header("Location: login.php");
    exit();
}
