<form action="state.php" method="get">
    <input type="text" name="name">
    <button type="submit">
        update
    </button>
</form>
<?php
session_start();
if (isset($_SESSION['name'])) {
    echo $_SESSION['name'];
}
