<template>
    <div>
        
		<header class="flex gap-5 justify-center items-center">
			<img
				class="w-14"
				src="/logo.jpg"
				alt="IA Project"  />

			<nav>
				<ul class="flex gap-10 font-bold text-xl text-gray-500">
					<li class="hover:text-[#FEC43C]">
						<Link href="/">Beranda</Link>
					</li>
					<li class="hover:text-[#FEC43C]">
						<Link href="/products">Produk</Link>
					</li>
					<li class="hover:text-[#FEC43C]">
						<Link href="#categoryPage">Kategori</Link>
					</li>
					<li class="hover:text-[#FEC43C]">
						<Link href="/p/contact-us">Hubungi</Link>
					</li>
					<li class="hover:text-[#FEC43C]">
						<Link href="/p/about-us">Tentang</Link>
					</li>
				</ul>
			</nav>

			<div
				class="flex justify-between gap-5  bg-[#FEC43C] rounded-full p-2 text-white">
				<i class="mdi mdi-search-web"></i>
				<i class="mdi mdi-cart-outline"></i>
			</div>
		</header>

    </div>
</template>

<script setup>
import {Link} from '@inertiajs/vue3';
</script>