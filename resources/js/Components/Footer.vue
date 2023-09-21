<script setup>
import Logo from './Logo.vue';
</script>
<template>
    <footer class="min-h-96 w-full bg-slate-700 pt-20 pb-8">
        <div class="container flex h-full max-w-screen-xl flex-col items-center justify-start gap-y-10 gap-x-10 xl:flex-row xl:justify-start">
            <div class="h-full w-full border-slate-500 pr-16 xl:max-w-md xl:border-r">
                <div class="mb-5 flex items-center gap-x-5">
                    <Logo class="w-64" />
                </div>
                <p class="text-sm text-slate-400">
                    We aspire to build a Digital Bangladesh. You can work with us if you have a minimal experience on computer literacy. Let's build a
                    digital Bangladesh together &amp; change the world.
                </p>
            </div>
            <div class="flex h-full w-full flex-col gap-x-20 gap-y-5 text-slate-400 sm:flex-row xl:pl-6">
                <div>
                    <h2 class="mb-3 text-xl text-white">Navigation</h2>
                    <ul class="space-y-2">
                        <li>Home</li>
                        <li>About</li>
                        <li>Contact</li>
                        <li>Services</li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-3 text-xl text-white">Information</h2>
                    <ul class="space-y-2">
                        <li>Privacy Policy</li>
                        <li>Terms & Conditions</li>
                        <li>FAQ</li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-3 text-xl text-white">Find Us</h2>
                    <p class="leading-6">
                        Vill: Hatshira, PO: Hatshira <br />
                        Kazipur - 5800, Sirajganj, BD
                    </p>
                    <p class="leading-6">
                        +880 1760 538 234 <br />
                        ahmedraju1534@gmail.com
                    </p>
                </div>
            </div>
        </div>
        <div class="container mt-10 max-w-screen-xl">
            <hr class="border-slate-500" />
        </div>
        <div class="container mt-2 max-w-screen-xl text-slate-400">
            <p class="text-sm">
                All rights reserved by MST MAJEDA KHATUN
                <span class="">|</span> Copyright &copy; 2023
            </p>
        </div>
    </footer>
</template>
