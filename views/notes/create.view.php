<?php require_once base_path('views/partials/head.php') ?>
<?php require_once base_path('views/partials/nav.php') ?>
<?php require_once base_path('views/partials/banner.php') ?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

        <form action="/notes/create" method="POST" class="bg-white shadow rounded p-10">
            <label class="block mb-2">Enter Note</label>
            <textarea name="title" class="w-1/2 ring-1 rounded block border border-blue-500"><?php $_POST["title"] ?? '' ?></textarea>
            <?php if (isset($errors['title'])) : ?>
                <small class="text-red-500"><?= $errors['title'] ?></small>
            <?php endif; ?>
            <button class="block px-3 py-2 bg-blue-700 text-white rounded hover:bg-blue-500 mt-3">Save Note</button>
        </form>

        <p class="mt-6">
            <a href="/notes" class="text-blue-500 hover:underline">All Notes</a>
        </p>
    </div>
</main>

<?php require_once base_path('views/partials/footer.php') ?>