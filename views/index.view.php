
<?php require('partials/head.php');?>
<section class="container mx-auto text-center bg-orange-400 p-2 mt-10 rounded-lg">
<h1 class="text-4xl font-bold mb-5"> Testin with PHP</h1>
<!-- <section class="p-5 m-5 rounded-lg text-left font-mono text-lg bg-gray-800 text-white">
    <?php foreach($tasks as $row) : ?>
        <?php if($row->get_completed()):?>
            <strike>
                <ul><?= $row->get_description(); ?></ul>
            </strike>
        <?php else :?>
            <ul>
                <?= $row->get_description(); ?>
            </ul>
        <?php endif ?>
    <?php endforeach?>
</section> -->

<h1 class="text-3xl text-center text-white ">Home page</h1>



<?php require('partials/footer.php');?>
