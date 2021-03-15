<?php
    include('core/header.php');
    include('core/checklogin_admin.php');
?>

<?php
if ( isset ($_GET))
?>

<a href="logout.php">Uitloggen<a>
<ul>
    <li><a href="users/">Gebruikers</a></li>
    <li><a href="orders/">Bestellingen</a></li>
    <li><a href="producten">Producten</a></li>
</ul>
<?php
    include('core/footer.php');
?>