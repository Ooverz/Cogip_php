<?php
declare(strict_types = 1);
require_once"./include/header.php";
?>
<h2 class="my-4 d-flex justify-content-center"> Welcome to COGIP </h2>
<p class="mx-3 fs-2 mx-4">HELLO !</p>
<p class="mx-3 fs-2 mx-4">What would you like to do today ?</p>
<form class="mx-4">
<button type="button" class="btn btn-outline-dark">+ New Invoice</button>
<button type="button" class="btn btn-outline-dark">+ New Contact</button>
<button type="button" class="btn btn-outline-dark">+ New Company</button>
</form>

<?php
require_once "Welcome.php";
