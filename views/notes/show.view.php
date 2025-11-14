<?php require basePath('views/partials/head.php') ?>
<?php require basePath('views/partials/header.php') ?>
<?php require basePath('views/partials/banner.php') ?>
<!-- There should be a pain point in the application that leads us to refactoring. 
 There is no need to refactor without any reason. -->
<main>



    <div class="mx-auto max-w-2xl  py-32 sm:py-48 lg:py-56">
        <a href="/notes" class="text-white bg-gray-700 rounded mb-6 px-4">&larr; Go back </a>
        <div class="text-center text-white">
            <?= htmlspecialchars($note['body']); ?>
        </div>

        <footer class="mt-6">
            <a href="/note/edit?id=<?= $note['id']; ?>" class="text-white bg-blue-700 rounded px-4 ">Edit </a>
        </footer>

    </div>


</main>


<?php require basePath('views/partials/footer.php') ?>
