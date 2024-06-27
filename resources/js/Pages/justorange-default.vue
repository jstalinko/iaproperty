<template>
	<div>
		<Navbar />

		<div class="hidden md:block relative">
			<section class="grid grid-cols-2 gap-4 py-20 relative max-h-lvh">

				<div>
					<img src="/assets/images/bg-hero-l.png" alt="" />
				</div>

				<div class="flex flex-col items-center justify-center ">
					
					<h1 class="text-7xl font-bold w-2/3 mb-5 poppins-bold animate-pulse">
						<span class="text-[#FEC43C]">IA </span> <span class="text-gray-500">PROPERTY</span>
					</h1>

					<p class="text-secondary w-3/4 text-lg text-center">
						Temukan pengalaman berbelanja furniture ditangani langsung oleh ahli di bidangnya dengan
						kualitas
						internasional.
					</p>

				</div>
			</section>
		</div>

		<RecommendedPage />

		<CategoryPage :Categories="Categories" :SubCategories="SubCategories" :ActiveCat="ActiveCat" />

		<ProductPage :Products="Products" :HeadTitle="HeadTitle" :Action="Action" />

		<Testimonial />

	

		<Footer />
	</div>
</template>


<script setup>
import Navbar from '../Components/Navbar.vue';
import CategoryPage from '../Components/CategoryPage.vue';
import Testimonial from '../Components/Testimonial.vue';
import ProductPage from '../Components/ProductPage.vue';
import RecommendedPage from '../Components/RecommendedPage.vue';
import Footer from '../Components/Footer.vue';
import OfferPage from '../Components/OfferPage.vue';

defineProps({ Products: Object, Categories: Object, SubCategories: Object, ActiveCat: String });
const HeadTitle = 'Produk Terbaru';
const Action = 'all';
</script>