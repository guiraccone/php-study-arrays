<?php require "partials/head.php"; ?>
<?php require "partials/header.php"; ?>

<main>

    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
        <p class="mb-6"> <a href="/notes" class="text-white bg-blue-700 rounded ">&larr; Return </a>
        </p>
        <div class="text-center text-white">
            <?= $note['body']; ?>
        </div>
    </div>
</main>


<?php require "partials/footer.php"; ?>