<template>
	<div>

		<header class="flex gap-5 justify-center items-center">
			<img class="w-14" src="/logo.jpg" alt="IA Project" />

			<nav>
				<ul class="flex gap-10 font-bold text-xl text-gray-500">
					<li class="hover:text-[#FEC43C]">
						<Link href="/">Beranda</Link>
					</li>
					<li class="hover:text-[#FEC43C]">
						<Link href="/products">Produk</Link>
					</li>
					<li class="hover:text-[#FEC43C]">
						<button data-dropdown-toggle="dropdown" >Kategori</button>
						<div id="dropdown"
							class="z-10 hidden bg-[#FEC43C] divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
							<ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
								aria-labelledby="dropdownDefaultButton">
								<li>
									<a href="#"
										class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
								</li>
								<li>
									<a href="#"
										class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
								</li>
								<li>
									<a href="#"
										class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
								</li>
								<li>
									<a href="#"
										class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
										out</a>
								</li>
							</ul>
						</div>
					</li>

					<li class="hover:text-[#FEC43C]">
						<Link href="/p/contact-us">Hubungi</Link>
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
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>