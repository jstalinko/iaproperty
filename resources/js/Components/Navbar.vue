<template>
<div class="fixed top-0 w-full bg-white p-2 z-50 hidden md:block">
    <header class="flex justify-between items-center px-4">
        <div class="flex items-center gap-2">
            <img class="w-14" src="/logo.jpg" alt="IA Project" />
            <span class="font-bold text-xl text-gray-700 poppins-bold">IA PROJECT</span>

        </div>

		<nav class="flex-1 mx-10">
        <ul class="flex justify-center gap-20 font-bold text-xl text-gray-500">
            <li class="hover:text-[#FEC43C]">
                <Link href="/">Beranda</Link>
            </li>
            <li class="hover:text-[#FEC43C]">
                <Link href="/products">Produk</Link>
            </li>
            <li class="relative hover:text-[#FEC43C]">
                <button id="dropdownButton" @click="toggleDropdown" type="button" aria-expanded="true" aria-haspopup="true">
                    Kategori
                    <i class="mdi mdi-chevron-down"></i>
                </button>
                <div v-if="isOpen" class="origin-top-right absolute mt-2 w-56 rounded-md shadow-lg bg-amber-400 ring-1 ring-black ring-opacity-5">
                    <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
						<Link class="block px-4 py-2 text-sm text-gray-700 hover:bg-amber-600" role="menuitem" v-for="(cat,index) in Categories" :href="'/category/'+cat.id" >{{ cat.name }}</Link>
                    </div>
                </div>
            </li>
            <li class="hover:text-[#FEC43C]">
                <Link href="/linker">Hubungi</Link>
            </li>
            <li class="hover:text-[#FEC43C]">
                <Link href="/p/about-us">Tentang</Link>
            </li>
        </ul>
    </nav>

        <button class="flex gap-5 bg-[#FEC43C] rounded-full px-4  text-gray-500">
            <i class="mdi mdi-search-web text-xl"></i> 
		</button>
    </header>
</div>




	<div class="fixed bottom-0 left-0 right-0 bg-gray-100 p-3 mb-10 z-50 rounded-lg md:hidden">
	<nav class="flex justify-around items-center text-amber-600">
		<Link href="/" class="flex flex-col items-center hover:text-black">
			<i class="mdi mdi-home-outline"></i>
			<span class="text-xs">Beranda</span>
		</Link>
		<Link href="/products" class="flex flex-col items-center hover:text-black">
			<i class="mdi mdi-cube-outline"></i>
			<span class="text-xs">Produk</span>
		</Link>
		<Link href="/categories" class="flex flex-col items-center hover:text-black">
			<i class="mdi mdi-tag-multiple"></i>
			<span class="text-xs">Kategori</span>
		</Link>
		<Link href="/linker" class="flex flex-col items-center hover:text-black">
			<i class="mdi mdi-phone-outline"></i>
			<span class="text-xs">Hubungi</span>
		</Link>
		<Link href="/p/about-us" class="flex flex-col items-center hover:text-black">
			<i class="mdi mdi-information-outline"></i>
			<span class="text-xs">Tentang</span>
		</Link>
	</nav>

<div class="fixed top-0 left-0 right-0 bg-white shadow-md p-4 z-50">
    <div class="flex justify-center space-x-4">
        <button class="bg-[#FEC43C] hover:bg-orange-600 text-white font-bold py-2 px-4 rounded" @click="setFilter('rekomendasi')">Rekomendasi</button>
        <button class="bg-[#FEC43C] hover:bg-orange-600 text-white font-bold py-2 px-4 rounded" @click="setFilter('semua')">Semua Produk</button>
    </div>
</div>
</div>





</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import {ref,onMounted,onBeforeUnmount} from 'vue';

defineProps({Categories: Object});

const isOpen = ref(false);

const toggleDropdown = () => {
    isOpen.value = !isOpen.value;
	console.log(isOpen.value);
};

const closeDropdown = (event) => {
    if (!event.target.closest('.relative')) {
        isOpen.value = false;
    }
};

onMounted(() => {
    window.addEventListener('click', closeDropdown);
});

onBeforeUnmount(() => {
    window.removeEventListener('click', closeDropdown);
});
</script>