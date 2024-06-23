<template>
    <div id="categoryPage">
        <section class="flex flex-col gap-10 py-20">
            <div class="grid grid-cols-2 gap-10 py-20 place-items-center">
                <img src="/assets/images/designing.png" alt="" />
                <div class="text-secondary">
                    <h2 class="text-6xl font-bold mb-10">
                        Modern Furniture &
                        <span class="text-primary">Quality first.</span>
                    </h2>
                    <p class="text-secondary-light mb-10">
                        Kami menyediakan furnitur yang modern dengan kualitas internasional,<br>
                        Sudah ratusan bahkan ribuan klien kami puas dengan produk yang kami hasilkan.<br>
                        Telusuri kategori apa saja yang kami tawarkan untuk anda.
                    </p>
                    <a class="bg-secondary px-8 py-2 rounded-lg text-white font-bold" href="/">Learn more</a>
                </div>
            </div>


<div class="flex justify-center items-center text-sm font-medium text-center text-gray-500  dark:text-gray-400 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px border-b-2 border-gray-300">
        <li class="me-2" v-for="(cat,index) in Categories" :key="index">
            
            <Link :href="'?cat='+cat.id" :class="(ActiveCat == cat.id) ? 'inline-block p-4 border-2  border-amber-500  hover:text-amber-500 hover:border-amber-600 ' : 'inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300'">{{ cat.name }}</Link>
        </li>

    </ul>
</div>

            <div class="flex justify-center items-center gap-10">
                <Link href="/products/category">
                <div class="flex flex-col items-center hover:sepia cursor-pointer">
                    <img class="mb-3 w-48" src="/assets/images/bg-chair.png" alt="" />
                    <h4 class="text-3xl">Chair</h4>
                </div>
                </Link>

                <Link href="/products/category">
                <div class="flex flex-col items-center hover:sepia cursor-pointer">
                    <img class="mb-3 w-48" src="/assets/images/bg-sofa.png" alt="" />
                    <h4 class="text-3xl">Sofa</h4>
                </div>
                </Link>
                <Link href="/products/category">
                <div class="flex flex-col items-center hover:sepia cursor-pointer">
                    <img class="mb-3 w-48" src="/assets/images/bg-bed.png" alt="" />
                    <h4 class="text-3xl">Bed</h4>
                </div>
                </Link>

                <Link href="/products/category">
                <div class="flex flex-col items-center hover:sepia cursor-pointer">
                    <img class="mb-3 w-48" src="/assets/images/bg-cabinet.png" alt="" />
                    <h4 class="text-3xl">Cabinet</h4>
                </div>
                </Link>
                <Link href="/products/category">
                <div class="flex flex-col items-center hover:sepia cursor-pointer">
                    <img class="mb-3 w-48" src="/assets/images/bg-lampshade.png" alt="" />
                    <h4 class="text-3xl">Lampshade</h4>
                </div>
                </Link>
            </div>
        </section>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({Categories: Object , SubCategories: Object , ActiveCat: String});
</script>