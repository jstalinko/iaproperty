<template>
	<div>
		<section class=" py-20 px-64">
			<div class="flex justify-between mb-10">
				<h2 class="text-secondary text-4xl">Produk Terbaru</h2>
				<a class="flex items-center gap-2" href="/#">
					More Furniture
					<i class="fa fa-long-arrow-right"></i>
				</a>
			</div>

			<div class="flex justify-center gap-5 mb-10">
				<div class="flex flex-col rounded-lg w-64">
					<img class="w-full" src="/assets/images/modern-cloud.png" alt="" />
					<div class="flex flex-col gap-2 text-gray-600 bg-[#FFCC4C] p-5 rounded-b-lg hover:shadow-lg ">
						<Link href="/products"><h4 class="font-bold hover:underline">Modern Cloud Bed</h4></Link>
						<p class="text-xs mb-5">
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores,
							voluptatem eligendi vel non nesciunt molestiae?
						</p>
						<a class="bg-amber-500 px-8 py-2 rounded-lg text-white font-bold text-center hover:bg-amber-700"
							href="/#"><i class="mdi mdi-cart"></i> Pesan</a>
							
					</div>
				</div>
				<div class="flex flex-col rounded-lg w-64">
					<img class="w-full" src="/assets/images/modern-cloud.png" alt="" />
					<div class="flex flex-col gap-2 text-gray-600 bg-[#FFCC4C] p-5 rounded-b-lg hover:shadow-lg ">
						<h4 class="font-bold">Modern Cloud Bed</h4>
						<p class="text-xs mb-5">
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores,
							voluptatem eligendi vel non nesciunt molestiae?
						</p>
						<a class="bg-secondary-light px-8 py-2 rounded-lg text-white font-bold text-center"
							href="/#">Detail</a>
					</div>
				</div>
				<div class="flex flex-col rounded-lg w-64">
					<img class="w-full" src="/assets/images/modern-cloud.png" alt="" />
					<div class="flex flex-col gap-2 text-gray-600 bg-[#FFCC4C] p-5 rounded-b-lg hover:shadow-lg ">
						<h4 class="font-bold">Modern Cloud Bed</h4>
						<p class="text-xs mb-5">
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores,
							voluptatem eligendi vel non nesciunt molestiae?
						</p>
						<a class="bg-secondary-light px-8 py-2 rounded-lg text-white font-bold text-center"
							href="/#">Detail</a>
					</div>
				</div>
				<div class="flex flex-col rounded-lg w-64">
					<img class="w-full" src="/assets/images/modern-cloud.png" alt="" />
					<div class="flex flex-col gap-2 text-gray-600 bg-[#FFCC4C] p-5 rounded-b-lg hover:shadow-lg ">
						<h4 class="font-bold">Modern Cloud Bed</h4>
						<p class="text-xs mb-5">
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores,
							voluptatem eligendi vel non nesciunt molestiae?
						</p>
						<a class="bg-secondary-light px-8 py-2 rounded-lg text-white font-bold text-center"
							href="/#">Detail</a>
					</div>
				</div>
				<div class="flex flex-col rounded-lg w-64">
					<img class="w-full" src="/assets/images/modern-cloud.png" alt="" />
					<div class="flex flex-col gap-2 text-gray-600 bg-[#FFCC4C] p-5 rounded-b-lg hover:shadow-lg ">
						<h4 class="font-bold">Modern Cloud Bed</h4>
						<p class="text-xs mb-5">
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores,
							voluptatem eligendi vel non nesciunt molestiae?
						</p>
						<a class="bg-secondary-light px-8 py-2 rounded-lg text-white font-bold text-center"
							href="/#">Detail</a>
					</div>
				</div>

			</div>

		</section>
	</div>
</template>
<script setup>
import { Link } from '@inertiajs/vue3';
</script>