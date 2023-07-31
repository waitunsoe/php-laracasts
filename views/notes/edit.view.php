<?php require_once base_path('views/partials/head.php') ?>
<?php require_once base_path('views/partials/nav.php') ?>
<?php require_once base_path('views/partials/banner.php') ?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

        <form action="/note/update" method="POST" class="w-1/2 bg-white shadow rounded p-10">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <label class="block mb-2">Enter Note</label>
            <textarea name="title" class="w-full ring-1 rounded block border border-blue-500"><?= $note['title'] ?></textarea>
            <?php if (isset($errors['title'])) : ?>
                <small class="text-red-500"><?= $errors['title'] ?></small>
            <?php endif; ?>
            <div class="flex justify-end gap-5  mt-3">
                <a href="/note?id=<?= $note['id'] ?>" class="block px-3 py-2 border border-blue-700 text-blue-700 rounded hover:bg-blue-700 hover:text-white">Cancel</a>
                <button class="block px-3 py-2 bg-blue-700 text-white rounded hover:bg-blue-500">Update Note</button>
            </div>
        </form>

        <p class="mt-6">
            <a href="/notes" class="text-blue-500 hover:underline">All Notes</a>
        </p>
    </div>
</main>

<?php require_once base_path('views/partials/footer.php') ?>