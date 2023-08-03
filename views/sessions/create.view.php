<?php require_once base_path('views/partials/head.php') ?>
<?php require_once base_path('views/partials/nav.php') ?>
<?php require_once base_path('views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <form action="/login" method="POST" class="w-1/2 bg-white shadow rounded p-10">
            <div class="mb-4">
                <label class="block mb-2">Enter Email</label>
                <input type="email" name="email" value="<?php $_POST["email"] ?? '' ?>" class="w-full ring-1 rounded block border border-blue-500">
                <?php if (isset($errors['email'])) : ?>
                    <small class="text-red-500"><?= $errors['email'] ?></small>
                <?php endif; ?>
            </div>
            <div class="mb-4">
                <label class="block mb-2">Enter Password</label>
                <input type="password" name="password" value="<?php $_POST["password"] ?? '' ?>" class="w-full ring-1 rounded block border border-blue-500">
                <?php if (isset($errors['password'])) : ?>
                    <small class="text-red-500"><?= $errors['password'] ?></small>
                <?php endif; ?>
            </div>
            <button class="mx-auto w-1/2 block px-3 py-2 bg-blue-700 text-white rounded hover:bg-blue-500 mt-3">Login</button>
        </form>
    </div>
</main>

<?php require_once base_path('views/partials/footer.php') ?>