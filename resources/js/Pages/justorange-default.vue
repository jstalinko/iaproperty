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
						<Link href="/category">Kategori</Link>
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

		<section class="grid grid-cols-2 gap-4 py-20 relative">
			<div>
				<img src="/assets/images/bg-hero-l.png" alt="" />
			</div>
			<div class="flex flex-col items-center">
				<img class="mb-10" src="/assets/images/bg-hero-r.png" alt="" />
				<h1 class="text-7xl font-bold w-2/3 mb-5">
					<div class="text-[#FEC43C]">IA 	PROJECT</div>
					<div class="text-secondary text-end">PROPERTY</div>
				</h1>
				<p class="text-secondary w-3/4 text-lg text-center">
					Temukan pengalaman berbelanja furniture ditangani langsung oleh ahli di bidangnya dengan kualitas internasional.
				</p>
			</div>
			<div class="flex gap-5 justify-center absolute bottom-0 right-20">
				<div
					class="flex justify-center gap-5  rounded-xl p-10 divide-x divide-secondary-dark">
					<div>
						<img src="/assets/images/fast-delivery.png" alt="" />
					</div>
					<div class="flex flex-col items-center justify-start w-3/4">
						<h4 class="text-secondary-dark font-bold w-3/4">Fast Delivery</h4>
						<p class="text-gray-600 w-3/4">Lorem ipsum dolor sit amet.</p>
					</div>
				</div>
				<div
					class="flex justify-center gap-5  rounded-xl p-10 divide-x divide-primary-dark">
					<div>
						<img src="/assets/images/turn-left-arrow.png" alt="" />
					</div>
					<div class="flex flex-col items-center justify-start w-3/4">
						<h4 class="text-secondary-dark font-bold w-3/4">Free Return</h4>
						<p class="text-gray-600 w-3/4">Lorem ipsum dolor sit amet.</p>
					</div>
				</div>
				<div
					class="flex justify-center gap-5 rounded-xl p-10 divide-x divide-accent-dark">
					<div>
						<img src="/assets/images/support.png" alt="" />
					</div>
					<div class="flex flex-col items-center justify-start w-3/4">
						<h4 class="text-secondary-dark font-bold w-3/4">24/7 Support</h4>
						<p class="text-gray-600 w-3/4">Lorem ipsum dolor sit amet.</p>
					</div>
				</div>
			</div>
		</section>

		<!-- <section class="flex justify-center items-center gap-10 py-10">
			<div><img src="/assets/images/coastwood.png" alt="" /></div>
			<div><img src="/assets/images/sleepsystems.png" alt="" /></div>
			<div><img src="/assets/images/davidshaw.png" alt="" /></div>
			<div><img src="/assets/images/furtex.png" alt="" /></div>
			<div><img src="/assets/images/sleepmaker.png" alt="" /></div>
			<div><img src="/assets/images/eastwest.png" alt="" /></div>
		</section> -->

		<section class="bg-[#ffcc4c] py-20 px-64">
			<div class="flex justify-between">
				<h2 class="text-secondary text-4xl">Produk kursi terbaru</h2>
				<a class="flex items-center gap-2" href="#">
					Tampilkan semua
					<i class="fa fa-long-arrow-right"></i>
				</a>
			</div>

			<div class="grid grid-cols-5 mt-32 gap-x-5 gap-y-32">
				<div
					class="flex flex-col items-center relative bg-[#EEE] rounded-lg hover:outline outline-1 outline-black py-5 px-1">
					<img
						class="w-40 absolute -top-10"
						src="/assets/images/pink-float-chair.png"
						alt="" />

					<div class="my-10 text-center text-gray-600">
						<h4 class="text-xl font-bold my-5">Pink Float Chair</h4>
						<p class="text-xs text-center">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam,
							illo! Nobis, distinctio veniam. Eos, doloremque.
						</p>
					</div>
					<div class="flex justify-between items-center gap-5">
						<button
							class="bg-secondary py-1 px-10 rounded-xl flex justify-center items-center gap-2 text-white font-bold">
							<i class="fa fa-shopping-cart"></i>
							Cart
						</button>
						<i class="fa fa-heart-o text-accent-dark"></i>
					</div>
				</div>
				<div
					class="flex flex-col items-center relative bg-white rounded-lg hover:outline outline-1 outline-black py-5 px-1">
					<img
						class="w-40 absolute -top-14"
						src="/assets/images/modern-nature.png"
						alt="" />

					<div class="my-10 text-center text-gray-600">
						<h4 class="text-xl font-bold my-5">Modern Nature Chair</h4>
						<p class="text-xs text-center">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam,
							illo! Nobis, distinctio veniam. Eos, doloremque.
						</p>
					</div>
					<div class="flex justify-between items-center gap-5">
						<button
							class="bg-secondary py-1 px-10 rounded-xl flex justify-center items-center gap-2 text-white font-bold">
							<i class="fa fa-shopping-cart"></i>
							Cart
						</button>
						<i class="fa fa-heart-o text-accent-dark"></i>
					</div>
				</div>
				<div
					class="flex flex-col items-center relative bg-white rounded-lg hover:outline outline-1 outline-black py-5 px-1">
					<img
						class="w-40 absolute -top-20"
						src="/assets/images/comfort-zone.png"
						alt="" />

					<div class="my-10 text-center text-gray-600">
						<h4 class="text-xl font-bold my-5">Comfort Zone Chair</h4>
						<p class="text-xs text-center">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam,
							illo! Nobis, distinctio veniam. Eos, doloremque.
						</p>
					</div>
					<div class="flex justify-between items-center gap-5">
						<button
							class="bg-secondary py-1 px-10 rounded-xl flex justify-center items-center gap-2 text-white font-bold">
							<i class="fa fa-shopping-cart"></i>
							Cart
						</button>
						<i class="fa fa-heart-o text-accent-dark"></i>
					</div>
				</div>
				<div
					class="flex flex-col items-center relative bg-white rounded-lg hover:outline outline-1 outline-black py-5 px-1">
					<img
						class="w-40 absolute -top-16"
						src="/assets/images/hood-relax.png"
						alt="" />

					<div class="my-10 text-center text-gray-600">
						<h4 class="text-xl font-bold my-5">Hood Relax Chair</h4>
						<p class="text-xs text-center">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam,
							illo! Nobis, distinctio veniam. Eos, doloremque.
						</p>
					</div>
					<div class="flex justify-between items-center gap-5">
						<button
							class="bg-secondary py-1 px-10 rounded-xl flex justify-center items-center gap-2 text-white font-bold">
							<i class="fa fa-shopping-cart"></i>
							Cart
						</button>
						<i class="fa fa-heart-o text-accent-dark"></i>
					</div>
				</div>
				<div
					class="flex flex-col items-center relative bg-white rounded-lg hover:outline outline-1 outline-black py-5 px-1">
					<img
						class="w-40 absolute -top-20"
						src="/assets/images/one-stand.png"
						alt="" />

					<div class="my-10 text-center text-gray-600">
						<h4 class="text-xl font-bold my-5">One Stand Chair</h4>
						<p class="text-xs text-center">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam,
							illo! Nobis, distinctio veniam. Eos, doloremque.
						</p>
					</div>
					<div class="flex justify-between items-center gap-5">
						<button
							class="bg-secondary py-1 px-10 rounded-xl flex justify-center items-center gap-2 text-white font-bold">
							<i class="fa fa-shopping-cart"></i>
							Cart
						</button>
						<i class="fa fa-heart-o text-accent-dark"></i>
					</div>
				</div>
				<div
					class="flex flex-col items-center relative bg-white rounded-lg hover:outline outline-1 outline-black py-5 px-1">
					<img
						class="w-32 absolute -top-20"
						src="/assets/images/red.png"
						alt="" />

					<div class="my-10 text-center text-gray-600">
						<h4 class="text-xl font-bold my-5">Best Selling Chair</h4>
						<p class="text-xs text-center">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam,
							illo! Nobis, distinctio veniam. Eos, doloremque.
						</p>
					</div>
					<div class="flex justify-between items-center gap-5">
						<button
							class="bg-secondary py-1 px-10 rounded-xl flex justify-center items-center gap-2 text-white font-bold">
							<i class="fa fa-shopping-cart"></i>
							Cart
						</button>
						<i class="fa fa-heart-o text-accent-dark"></i>
					</div>
				</div>
				<div
					class="flex flex-col items-center relative bg-white rounded-lg hover:outline outline-1 outline-black py-5 px-1">
					<img
						class="w-32 absolute -top-28"
						src="/assets/images/pod.png"
						alt="" />

					<div class="my-10 text-center text-gray-600">
						<h4 class="text-xl font-bold my-5">Best Selling Chair</h4>
						<p class="text-xs text-center">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam,
							illo! Nobis, distinctio veniam. Eos, doloremque.
						</p>
					</div>
					<div class="flex justify-between items-center gap-5">
						<button
							class="bg-secondary py-1 px-10 rounded-xl flex justify-center items-center gap-2 text-white font-bold">
							<i class="fa fa-shopping-cart"></i>
							Cart
						</button>
						<i class="fa fa-heart-o text-accent-dark"></i>
					</div>
				</div>
				<div
					class="flex flex-col items-center relative bg-white rounded-lg hover:outline outline-1 outline-black py-5 px-1">
					<img
						class="w-48 absolute -top-24"
						src="/assets/images/sofa.png"
						alt="" />

					<div class="my-10 text-center text-gray-600">
						<h4 class="text-xl font-bold my-5">Best Selling Chair</h4>
						<p class="text-xs text-center">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam,
							illo! Nobis, distinctio veniam. Eos, doloremque.
						</p>
					</div>
					<div class="flex justify-between items-center gap-5">
						<button
							class="bg-secondary py-1 px-10 rounded-xl flex justify-center items-center gap-2 text-white font-bold">
							<i class="fa fa-shopping-cart"></i>
							Cart
						</button>
						<i class="fa fa-heart-o text-accent-dark"></i>
					</div>
				</div>
				<div
					class="flex flex-col items-center relative bg-white rounded-lg hover:outline outline-1 outline-black py-5 px-1">
					<img
						class="w-40 absolute -top-16"
						src="/assets/images/lamp.png"
						alt="" />

					<div class="my-10 text-center text-gray-600">
						<h4 class="text-xl font-bold my-5">Best Selling Chair</h4>
						<p class="text-xs text-center">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam,
							illo! Nobis, distinctio veniam. Eos, doloremque.
						</p>
					</div>
					<div class="flex justify-between items-center gap-5">
						<button
							class="bg-secondary py-1 px-10 rounded-xl flex justify-center items-center gap-2 text-white font-bold">
							<i class="fa fa-shopping-cart"></i>
							Cart
						</button>
						<i class="fa fa-heart-o text-accent-dark"></i>
					</div>
				</div>
				<div
					class="flex flex-col items-center relative bg-white rounded-lg hover:outline outline-1 outline-black py-5 px-1">
					<img
						class="w-40 absolute -top-20"
						src="/assets/images/white.png"
						alt="" />

					<div class="my-10 text-center text-gray-600">
						<h4 class="text-xl font-bold my-5">Best Selling Chair</h4>
						<p class="text-xs text-center">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam,
							illo! Nobis, distinctio veniam. Eos, doloremque.
						</p>
					</div>
					<div class="flex justify-between items-center gap-5">
						<button
							class="bg-secondary py-1 px-10 rounded-xl flex justify-center items-center gap-2 text-white font-bold">
							<i class="fa fa-shopping-cart"></i>
							Cart
						</button>
						<i class="fa fa-heart-o text-accent-dark"></i>
					</div>
				</div>
			</div>
		</section>
        <section class="flex flex-col gap-10 py-20">
			<div class="grid grid-cols-2 gap-10 py-20 place-items-center">
				<img src="/assets/images/designing.png" alt="" />
				<div class="text-secondary">
					<h2 class="text-6xl font-bold mb-10">
						Modern Furniture  &
						<span class="text-primary">Quality first.</span>
					</h2>
					<p class="text-secondary-light mb-10">
						Kami menyediakan furnitur yang modern dengan kualitas internasional,<br>
						Sudah ratusan bahkan ribuan klien kami puas dengan produk yang kami hasilkan.<br>
						Telusuri kategori apa saja yang kami tawarkan untuk anda.
					</p>
					<a
						class="bg-secondary px-8 py-2 rounded-lg text-white font-bold"
						href="/"
						>Learn more</a
					>
				</div>
			</div>
			<div class="flex justify-center items-center gap-10">
				<div class="flex flex-col items-center">
					<img class="mb-3 w-48" src="/assets/images/bg-chair.png" alt="" />
					<h4 class="text-3xl">Chair</h4>
				</div>
				<div class="flex flex-col items-center">
					<img class="mb-3 w-48" src="/assets/images/bg-sofa.png" alt="" />
					<h4 class="text-3xl">Sofa</h4>
				</div>
				<div class="flex flex-col items-center">
					<img class="mb-3 w-48" src="/assets/images/bg-bed.png" alt="" />
					<h4 class="text-3xl">Bed</h4>
				</div>
				<div class="flex flex-col items-center">
					<img class="mb-3 w-48" src="/assets/images/bg-cabinet.png" alt="" />
					<h4 class="text-3xl">Cabinet</h4>
				</div>
				<div class="flex flex-col items-center">
					<img class="mb-3 w-48" src="/assets/images/bg-lampshade.png" alt="" />
					<h4 class="text-3xl">Lampshade</h4>
				</div>
			</div>
		</section>

		<section class="bg-primary py-20 px-64">
			<div class="flex justify-between mb-10">
				<h2 class="text-secondary text-4xl">Best Selling Cloud Bed</h2>
				<a class="flex items-center gap-2" href="/#">
					More Furniture
					<i class="fa fa-long-arrow-right"></i>
				</a>
			</div>

			<div class="flex justify-center gap-5 mb-10">
				<div class="flex flex-col rounded-lg w-64">
					<img class="w-full" src="/assets/images/modern-cloud.png" alt="" />
					<div class="flex flex-col gap-2 text-gray-600 bg-white p-5">
						<h4 class="font-bold">Modern Cloud Bed</h4>
						<p class="text-xs mb-5">
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores,
							voluptatem eligendi vel non nesciunt molestiae?
						</p>
						<a
							class="bg-secondary-light px-8 py-2 rounded-lg text-white font-bold text-center"
							href="/#"
							>View more</a
						>
					</div>
				</div>
				<div class="flex flex-col rounded-lg w-64">
					<img class="w-full" src="/assets/images/nature-love.png" alt="" />
					<div class="flex flex-col gap-2 text-gray-600 bg-white p-5">
						<h4 class="font-bold">Nature Love Bed</h4>
						<p class="text-xs mb-5">
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores,
							voluptatem eligendi vel non nesciunt molestiae?
						</p>
						<a
							class="bg-secondary-light px-8 py-2 rounded-lg text-white font-bold text-center"
							href="/#"
							>View more</a
						>
					</div>
				</div>
				<div class="flex flex-col rounded-lg w-64">
					<img class="w-full" src="/assets/images/sunset-brown.png" alt="" />
					<div class="flex flex-col gap-2 text-gray-600 bg-white p-5">
						<h4 class="font-bold">Sunset Brown Bed</h4>
						<p class="text-xs mb-5">
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores,
							voluptatem eligendi vel non nesciunt molestiae?
						</p>
						<a
							class="bg-secondary-light px-8 py-2 rounded-lg text-white font-bold text-center"
							href="/#"
							>View more</a
						>
					</div>
				</div>
				<div class="flex flex-col rounded-lg w-64">
					<img class="w-full" src="/assets/images/white-horse.png" alt="" />
					<div class="flex flex-col gap-2 text-gray-600 bg-white p-5">
						<h4 class="font-bold">White Horse Bed</h4>
						<p class="text-xs mb-5">
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores,
							voluptatem eligendi vel non nesciunt molestiae?
						</p>
						<a
							class="bg-secondary-light px-8 py-2 rounded-lg text-white font-bold text-center"
							href="/#"
							>View more</a
						>
					</div>
				</div>
				<div class="flex flex-col rounded-lg w-64">
					<img class="w-full" src="/assets/images/white-rose.png" alt="" />
					<div class="flex flex-col gap-2 text-gray-600 bg-white p-5">
						<h4 class="font-bold">White Rose Bed</h4>
						<p class="text-xs mb-5">
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores,
							voluptatem eligendi vel non nesciunt molestiae?
						</p>
						<a
							class="bg-secondary-light px-8 py-2 rounded-lg text-white font-bold text-center"
							href="/#"
							>View more</a
						>
					</div>
				</div>
			</div>

			<div class="flex justify-between mb-10">
				<h2 class="text-secondary text-4xl">Best Selling Cabinet</h2>
				<a class="flex items-center gap-2" href="/#">
					More Furniture
					<i class="fa fa-long-arrow-right"></i>
				</a>
			</div>

			<div class="flex justify-center gap-5 mb-10">
				<div class="flex flex-col rounded-lg w-64">
					<img class="w-full" src="/assets/images/dual-modern.png" alt="" />
					<div class="flex flex-col gap-2 text-gray-600 bg-white p-5">
						<h4 class="font-bold">Dual Modern Cabinet</h4>
						<p class="text-xs mb-5">
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores,
							voluptatem eligendi vel non nesciunt molestiae?
						</p>
						<a
							class="bg-secondary-light px-8 py-2 rounded-lg text-white font-bold text-center"
							href="/#"
							>View more</a
						>
					</div>
				</div>
				<div class="flex flex-col rounded-lg w-64">
					<img class="w-full" src="/assets/images/black-fancy.png" alt="" />
					<div class="flex flex-col gap-2 text-gray-600 bg-white p-5">
						<h4 class="font-bold">Black Fancy</h4>
						<p class="text-xs mb-5">
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores,
							voluptatem eligendi vel non nesciunt molestiae?
						</p>
						<a
							class="bg-secondary-light px-8 py-2 rounded-lg text-white font-bold text-center"
							href="/#"
							>View more</a
						>
					</div>
				</div>
				<div class="flex flex-col rounded-lg w-64">
					<img class="w-full" src="/assets/images/white-house.png" alt="" />
					<div class="flex flex-col gap-2 text-gray-600 bg-white p-5">
						<h4 class="font-bold">White House Cabinet</h4>
						<p class="text-xs mb-5">
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores,
							voluptatem eligendi vel non nesciunt molestiae?
						</p>
						<a
							class="bg-secondary-light px-8 py-2 rounded-lg text-white font-bold text-center"
							href="/#"
							>View more</a
						>
					</div>
				</div>
				<div class="flex flex-col rounded-lg w-64">
					<img class="w-full" src="/assets/images/modern-white.png" alt="" />
					<div class="flex flex-col gap-2 text-gray-600 bg-white p-5">
						<h4 class="font-bold">Modern White Cabinet</h4>
						<p class="text-xs mb-5">
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores,
							voluptatem eligendi vel non nesciunt molestiae?
						</p>
						<a
							class="bg-secondary-light px-8 py-2 rounded-lg text-white font-bold text-center"
							href="/#"
							>View more</a
						>
					</div>
				</div>
				<div class="flex flex-col rounded-lg w-64">
					<img class="w-full" src="/assets/images/minimal-white.png" alt="" />
					<div class="flex flex-col gap-2 text-gray-600 bg-white p-5">
						<h4 class="font-bold">Minimal White Cabinet</h4>
						<p class="text-xs mb-5">
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores,
							voluptatem eligendi vel non nesciunt molestiae?
						</p>
						<a
							class="bg-secondary-light px-8 py-2 rounded-lg text-white font-bold text-center"
							href="/#"
							>View more</a
						>
					</div>
				</div>
			</div>
		</section>

		<section class="flex flex-col items-center bg-accent pt-20 pb-56 relative">
			<h2
				class="text-8xl text-primary-dark-500 text-shadow-custom text-center mb-10">
				Testimonials
			</h2>
			<div
				class="flex justify-center rounded-xl gap-10 bg-secondary-light px-10 pt-10 pb-72 w-3/4">
				<div class="rounded-lg bg-white p-5">
					<div class="flex justify-between items-center">
						<div class="flex justify-center items-center gap-2">
							<img
								class="w-14 rounded-full"
								src="/assets/images/richard.png"
								alt="" />
							<div class="flex flex-col text-gray-600">
								<p class="font-bold text-sm">Richard Sample</p>
								<p class="text-xs">Happy Customer</p>
							</div>
						</div>
						<i class="fa fa-quote-right text-5xl text-purple-600"></i>
					</div>
					<div class="flex flex-col">
						<p class="text-gray-600 text-sm mt-3 leading-tight">
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi
							temporibus, est veritatis nesciunt iusto saepe officiis dolorum
							dolores libero sit, eum sint delectus nihil deserunt.
						</p>
						<div class="flex justify-end gap-2">
							<i class="fa fa-star text-3xl text-yellow-400"></i>
							<i class="fa fa-star text-3xl text-yellow-400"></i>
							<i class="fa fa-star text-3xl text-yellow-400"></i>
							<i class="fa fa-star text-3xl text-yellow-400"></i>
							<i class="fa fa-star text-3xl text-yellow-400"></i>
						</div>
					</div>
				</div>
				<div class="rounded-lg bg-white p-5">
					<div class="flex justify-between items-center">
						<div class="flex justify-center items-center gap-2">
							<img
								class="w-14 rounded-full"
								src="/assets/images/christian.png"
								alt="" />
							<div class="flex flex-col text-gray-600">
								<p class="font-bold text-sm">Christian Sample</p>
								<p class="text-xs">Happy Customer</p>
							</div>
						</div>
						<i class="fa fa-quote-right text-5xl text-purple-600"></i>
					</div>
					<div class="flex flex-col">
						<p class="text-gray-600 text-sm mt-3 leading-tight">
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi
							temporibus, est veritatis nesciunt iusto saepe officiis dolorum
							dolores libero sit, eum sint delectus nihil deserunt.
						</p>
						<div class="flex justify-end gap-2">
							<i class="fa fa-star text-3xl text-yellow-400"></i>
							<i class="fa fa-star text-3xl text-yellow-400"></i>
							<i class="fa fa-star text-3xl text-yellow-400"></i>
							<i class="fa fa-star text-3xl text-yellow-400"></i>
							<i class="fa fa-star text-3xl text-yellow-400"></i>
						</div>
					</div>
				</div>
				<div class="rounded-lg bg-white p-5">
					<div class="flex justify-between items-center">
						<div class="flex justify-center items-center gap-2">
							<img
								class="w-14 rounded-full"
								src="/assets/images/lucas.png"
								alt="" />
							<div class="flex flex-col text-gray-600">
								<p class="font-bold text-sm">Lucas Sample</p>
								<p class="text-xs">Happy Customer</p>
							</div>
						</div>
						<i class="fa fa-quote-right text-5xl text-purple-600"></i>
					</div>
					<div class="flex flex-col">
						<p class="text-gray-600 text-sm mt-3 leading-tight">
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi
							temporibus, est veritatis nesciunt iusto saepe officiis dolorum
							dolores libero sit, eum sint delectus nihil deserunt.
						</p>
						<div class="flex justify-end gap-2">
							<i class="fa fa-star text-3xl text-yellow-400"></i>
							<i class="fa fa-star text-3xl text-yellow-400"></i>
							<i class="fa fa-star text-3xl text-yellow-400"></i>
							<i class="fa fa-star text-3xl text-yellow-400"></i>
							<i class="fa fa-star text-3xl text-yellow-400"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="flex w-full absolute bottom-0">
				<img src="/assets/images/bg-testimonials.png" alt="" />
			</div>
		</section>

		<section class="flex justify-center gap-32 bg-secondary-light px-72 py-10">
			<div class="flex w-2/3 justify-center gap-5">
				<img src="/assets/images/sign-up.png" alt="" />
				<div>
					<h4 class="text-3xl font-bold text-primary-light">
						Love the Furniture?
					</h4>
					<p class="text-white text-xl">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem
						illum dolores assumenda quaerat provident voluptas?
					</p>
				</div>
			</div>
			<form class="w-1/3" action="#">
				<div class="flex flex-col justify-center items-center gap-5">
					<input
						type="email"
						class="bg-white text-gray-500 rounded-full py-3 text-center w-full"
						placeholder="Your Email here" />
					<input
						type="submit"
						class="bg-transparent border border-white text-white rounded-full py-3 text-center w-full"
						value="Sign Up Now" />
				</div>
			</form>
		</section>

		<footer class="flex flex-col">
			<div
				class="flex justify-between gap-10 py-20 px-64 bg-primary bg-[url('/assets/images/dots.png')] bg-cover">
				<nav>
					<h5 class="font-bold text-2xl text-slate-500 mb-8">HOME</h5>
					<ul class="flex flex-col gap-3">
						<li>About us</li>
						<li>Best Deals</li>
						<li>Collections</li>
						<li>Shop</li>
					</ul>
				</nav>

				<nav>
					<h5 class="font-bold text-2xl text-slate-500 mb-8">SERVICES</h5>
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
					<h5 class="font-bold text-2xl text-slate-500 mb-8">CONNECT</h5>
					<div class="flex gap-5 mb-3">
						<i
							class="fa fa-twitter text-primary-light bg-primary-dark rounded-full py-3 px-4 text-2xl"></i>
						<i
							class="fa fa-facebook-f text-primary-light bg-primary-dark rounded-full py-3 px-5 text-2xl"></i>
						<i
							class="fa fa-instagram text-primary-light bg-primary-dark rounded-full py-3 px-4 text-2xl"></i>
					</div>
					<p class="text-lg max-w-sm">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia
						blanditiis ullam sequi doloremque corporis. Alias?
					</p>
				</nav>
			</div>

			<div class="bg-white flex justify-around py-3 font-bold text-xs">
				<span>Terms & Conditions</span>
				<span>Privacy Policy</span>
				<span>Sitemap</span>
				<span>&copy; 2022. All rights reserved. </span>
			</div>
		</footer>
    </div>
</template>


<script setup>
import {Link} from '@inertiajs/vue3';
</script>