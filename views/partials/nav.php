<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="h-8 w-8">
                    <img src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                </div>
                <div class="ml-10 flex items-baseline space-x-4">
                    <a href="/" class="<?= uriIs('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
                    <a href="/about" class="<?= uriIs('/about') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">About</a>
                    <?php if ($_SESSION['user'] ?? false) : ?>
                        <a href="/notes" class="<?= uriIs('/notes') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">Notes</a>
                    <?php endif; ?>
                    <a href="/contact" class="<?= uriIs('/contact') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">Contact</a>
                </div>
            </div>

            <?php if ($_SESSION['user'] ?? false) : ?>
                <div class="flex items-center gap-5">
                    <div class=" cursor-pointer bg-gray-700 p-1 rounded-full">
                        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </div>
                    <form action="/logout" method="post" onclick="return confirm('Are you sure to logout?')">
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="block w-28 h-10 text-center leading-10 border border-red-700 rounded hover:bg-red-700 text-white">Logout</button>
                    </form>
                </div>
            <?php else : ?>
                <div class="flex gap-5">
                    <a href="/register" class="block w-28 h-10 text-center leading-10  border border-blue-700 rounded hover:bg-blue-700 text-white">Register</a>
                    <a href="/login" class="block w-28 h-10 text-center leading-10 border border-blue-700 rounded bg-blue-700 duration-300 hover:bg-blue-800 text-white">Login</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
    </div>
</nav>

<!-- <div class="group-hover:block group-focus:block hidden absolute right-0 mt-2 w-48 bg-slate-200 rounded-md p-1 shadow-2xl">
    <a href="/profile" class="block px-4 py-2 text-sm text-gray-900 rounded bg-gray-200 mb-2 hover:bg-gray-500 hover:text-white">Your Profile</a>
    <a href="/registration/logout" class="block px-4 py-2 text-sm text-gray-900 rounded bg-gray-200 hover:bg-gray-500 hover:text-white">Sign out</a>
</div> -->