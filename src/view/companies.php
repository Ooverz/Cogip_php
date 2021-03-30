<?php 
require_once "./include/header.php"; ?>

<section>

    <h1> Welcome to the COGIP ! </h1>

    <ol>
        <?php 
            foreach ($companies-> getCompanies() as $key => $value) { ?>
                
                <li><p><?= $value["company_name"]?></p></li>
            
        <?php } ?>
    </ol>
</section>

<?php require 'includes/footer.php'?>