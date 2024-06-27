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

	<!-- HTML -->
<div class="fixed bottom-0 left-0 right-0 bg-gray-800 text-white shadow-md p-4 flex justify-around z-50  md:hidden">
  <!-- Navbar Content -->
  <a href="#" class="flex flex-col items-center">
    <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7m-9-7v18" />
    </svg>
    <span>Home</span>
  </a>
  <a href="#" class="flex flex-col items-center">
    <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20l9-5-9-5-9 5 9 5z" />
    </svg>
    <span>Services</span>
  </a>
  <a href="#" class="flex flex-col items-center">
    <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20v-8m0 0l-8 8m8-8l8 8M12 12V4m0 0L4 12m8-8l8 8" />
    </svg>
    <span>About</span>
  </a>
  <a href="#" class="flex flex-col items-center">
    <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8a6 6 0 11-12 0 6 6 0 0112 0z" />
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14a7 7 0 100 14 7 7 0 000-14z" />
    </svg>
    <span>Contact</span>
  </a>
</div>

</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>