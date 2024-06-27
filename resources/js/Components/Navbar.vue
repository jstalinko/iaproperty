<template>
	<div class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-white p-2 z-50 rounded-lg hidden md:block">

		<header class="flex gap-5 justify-center items-center ">
			<img class="w-14" src="/logo.jpg" alt="IA Project" />

			<nav>
				<ul class="flex gap-10 font-bold text-xl text-gray-500 ">
					<li class="hover:text-[#FEC43C]">
						<Link href="/">Beranda</Link>
					</li>
					<li class="hover:text-[#FEC43C]">
						<Link href="/products">Produk</Link>
					</li>
					<li class="hover:text-[#FEC43C]">
						<button id="dropdownDefaultButton" data-dropdown-toggle="dropdownNavbar" >Kategori <i class="mdi mdi-chevron-down"></i></button>
						<div id="dropdownNavbar"
							class="z-10 hidden bg-[#FEC43C] divide-y divide-gray-600 rounded-r-lg rounded-bl-lg shadow w-44 dark:bg-gray-700">
							<ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
								aria-labelledby="dropdownDefaultButton">
								<li>
									<a href="#"
										class="block px-4 py-2 hover:bg-yellow-300 text-black ">Interior</a>
								</li>
								<li>
									<a href="#"
										class="block px-4 py-2 hover:bg-yellow-300 text-black ">Eksterior</a>
								</li>
								
							</ul>
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

			<div class="flex justify-between gap-5  bg-[#FEC43C] rounded-full p-2 text-white">
				<i class="mdi mdi-search-web"></i>
				<i class="mdi mdi-cart-outline"></i>
			</div>
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
</script>