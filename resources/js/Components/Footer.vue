<template>
    <div class="hidden md:block">
        <footer class="flex flex-col">
			<div
				class="flex justify-between gap-10 py-20 px-64 bg-primary bg-[url('/assets/images/dots.png')] bg-cover">
				<nav>
					<h5 class="font-bold text-2xl text-slate-500 mb-8">Produk Kami</h5>
					<ul class="flex flex-col gap-3">
						<li>Semua Produk</li>
						<li>Produk Terlaris</li>
						<li>Produk Terbaru</li>
					</ul>
				</nav>

				<nav>
					<h5 class="font-bold text-2xl text-slate-500 mb-8">HALAMAN</h5>
					<ul class="flex flex-col gap-3">
						<li>About us</li>
						<li>Best Deals</li>
						<li>Collections</li>
					</ul>
				</nav>

				<nav>
					<h5 class="font-bold text-2xl text-slate-500 mb-8">CONTACT</h5>
					<ul class="flex flex-col gap-3">
						<li>09108184657</li>
						<li>123-23-12</li>
						<li>Mandaluyong</li>
					</ul>
				</nav>

				<nav>
					<h5 class="font-bold text-2xl text-slate-500 mb-8">SOCIAL MEDIA</h5>
					<div class="flex gap-5 mb-3">
						<i class="fa fa-twitter text-primary-light bg-primary-dark rounded-full py-3 px-4 text-2xl"></i>
						<i
							class="fa fa-facebook-f text-primary-light bg-primary-dark rounded-full py-3 px-5 text-2xl"></i>
						<i
							class="fa fa-instagram text-primary-light bg-primary-dark rounded-full py-3 px-4 text-2xl"></i>
					</div>
					<p class="text-lg max-w-sm">
						Jangan ragu untuk berkonsultasi dan tanya kami! 
						Kami siap melayani kebutuhan anda!
					</p>
				</nav>
			</div>

			<div class="bg-white flex justify-center gap-10 py-3 font-bold text-xs">
				<span>Terms & Conditions</span>
				<span>Privacy Policy</span>
				<span>Sitemap</span>
				<span>IA PROPERTY &copy; {{new Date().getFullYear()}}. All rights reserved. </span>
			</div>
		</footer>
    </div>
</template>