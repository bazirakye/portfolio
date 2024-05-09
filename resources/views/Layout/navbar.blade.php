<!-- ====== Navbar Section Start -->
<header x-data="{
    navbarOpen: false
}" class="flex items-center w-full sticky top-0 z-50 bg-white dark:bg-dark">
    <div class="container mx-auto">
        <div class="relative flex items-center justify-between -mx-4">
            <div class="max-w-full px-4 w-60">
                <a href="javascript:void(0)" class="block w-full py-5">
                    <img src="https://cdn.tailgrids.com/2.0/image/assets/images/logo/logo-primary.svg" alt="logo"
                        class="dark:hidden" />
                    <img src="https://cdn.tailgrids.com/2.0/image/assets/images/logo/logo-white.svg" alt="logo"
                        class="hidden dark:block" />
                </a>
            </div>
            <div class="flex items-center justify-between w-full px-4">
                <div>
                    <x-layout.navbar-hamburger></x-layout.navbar-hamburger>
                    <nav :class="!navbarOpen && 'hidden'" id="navbarCollapse"
                        class="absolute right-0 top-full rounded-lg bg-white py-5 px-6 z-50 shadow w-full lg:static lg:block lg:w-full lg:max-w-full lg:shadow-none dark:bg-dark-2 lg:dark:bg-transparent">

                        <ul class="block lg:flex lg:items-center">
                            @foreach ($navigationItems as $item)
                                <x-layout.navbar-item :href="$item['href']">{{ $item['label'] }}</x-layout.navbar-item>
                            @endforeach
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- ====== Navbar Section End -->
