<?
session_start();
if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
	file_put_contents('files/orderscurrentdates_7Gd7QzoI8u3R1k4.txt', '');
    file_put_contents('files/orderslogins_7Gd7QzoI8u3R1k4.txt', '');
    file_put_contents('files/ordersfullnames_7Gd7QzoI8u3R1k4.txt', '');
    file_put_contents('files/ordersphonenumbers_7Gd7QzoI8u3R1k4.txt', '');
    file_put_contents('files/ordersemails_7Gd7QzoI8u3R1k4.txt', '');
    file_put_contents('files/ordersaddresses_7Gd7QzoI8u3R1k4.txt', '');
    file_put_contents('files/ordersitems_7Gd7QzoI8u3R1k4.txt', '');
    echo '<script>location.href="new_orders.php"</script>';
} else
    header('Location:index.php');
?>