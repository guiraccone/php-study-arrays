<?php require "partials/head.php"; ?>
<?php require "partials/header.php"; ?>
<main class="p-20">
    <form method="POST">
        <div class="space-y-12">
            <div class="border-b border-white/10 pb-12">
                <h2 class="text-base/7 font-semibold text-white"><?= $heading ?></h2>
                <p class="mt-1 text-sm/6 text-gray-400">This information will be displayed publicly so be careful what you share.</p>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="col-span-full">
                        <label for="body" class="block text-sm/6 font-medium text-white">Body</label>
                        <div class="mt-2">
                            <textarea
                                placeholder="Write a few sentences."
                                id="body"
                                name="body"
                                rows="3"
                                class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 
    -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6">
<?= $_POST['body'] ?? ''; ?></textarea>
                        </div>
                        <?php if (isset($errors['body'])) : ?>
                            <p class="mt-3 text-sm/6 text-red-400"><?= $errors['body'] ?></p>
                        <?php endif; ?>

                    </div>
                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <button type="button" class="text-sm/6 font-semibold text-white">Cancel</button>
                        <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
                    </div>
    </form>
</main>
<?php require "partials/footer.php"; ?>