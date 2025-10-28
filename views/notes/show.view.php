<?php require __DIR__ . "/../partials/head.php"; ?>
<?php require __DIR__ . "/../partials/header.php"; ?>
<!-- There should be a pain point in the application that leads us to refactoring. 
 There is no need to refactor without any reason. -->
<main>



    <div class="mx-auto max-w-2xl  py-32 sm:py-48 lg:py-56">
        <p class="mb-6"> <a href="/notes" class="text-white bg-blue-700 rounded ">&larr; Return </a>
        </p>
        <div class="text-center text-white">
            <?= htmlspecialchars($note['body']); ?>
        </div>
        <form method="POST" class="mt-6">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <button class="text-sm bg-red-500 text-white hover:bg-red-800 rounded">Delete</button>
        </form>
    </div>


</main>


<?php require __DIR__ . "/../partials/footer.php"; ?>