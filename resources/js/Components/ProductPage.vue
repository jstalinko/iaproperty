<template>
  <div>
    <section class="py-10 px-5 md:px-20 lg:px-64">
      <div class="flex flex-col md:flex-row justify-between mb-10">
        <h2 class="text-secondary text-3xl text-center md:text-left md:text-4xl mb-5 md:mb-0 poppins-bold"><i class="mdi mdi-sofa-single"></i> {{ HeadTitle }}</h2>
      </div>

      <div class="flex flex-col md:flex-row  justify-between mb-10 mt-5">
          <div >
            <button @click="filterProducts('all')" class="bg-amber-400 hover:bg-amber-600 text-gray-600 font-bold py-2 px-4 rounded-full mr-2"><i class="mdi mdi-view-list"></i> Semua Produk</button>
        <button @click="filterProducts('newest')" class="bg-amber-400 hover:bg-amber-600 text-gray-600 font-bold py-2 px-4 rounded-full mr-2"><i class="mdi mdi-moon-new"></i> Terbaru</button>
        <button @click="filterProducts('popular')" class="bg-amber-400 hover:bg-amber-600 text-gray-600 font-bold py-2 px-4 rounded-full"><i class="mdi mdi-star-box"></i> Terpopuler</button>
          </div>
        <div>
          <button class="bg-amber-400 hover:bg-amber-600 text-gray-600 font-bold py-2 px-2 rounded-full"><i class="mdi mdi-sort"></i>  Harga</button>
        </div>
      </div>

      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 mb-10">
        <div class="rounded-lg " v-for="(product, index) in Products" :key="index">
          <img class="w-full rounded-t-lg" :src="helpers.imageUrl(product.image)" :alt="product.name" />
          <div class="flex flex-col gap-2 text-gray-600 bg-[#FFCC4C] p-5 rounded-b-lg hover:shadow-lg">
            <Link :href="'/product/' + product.slug"><h4 class="font-bold hover:underline">{{ product.name }}</h4></Link>
           
            <div class="flex flex-col md:flex-row md:justify-between">
              <b class="text-sm mt-2">{{ product.price == 0 ? 'Tanya Admin' : helpers.rupiah(product.price) }}</b>
              <span class="text-sm mt-2"><i class="mdi mdi-tag"></i> {{ product.subcategory.name }}</span>
            </div>
            <a class="bg-amber-500 px-8 py-2 rounded-lg text-white font-bold text-center hover:bg-amber-700" href="/#"><i class="mdi mdi-whatsapp"></i> Pesan</a>
          </div>
        </div>
      </div>
      <div class="flex justify-center">
        <Link href="/products" class="bg-gray-500 p-2 rounded text-center text-white hover:bg-gray-600 mt-10"><i class="mdi mdi-view-list"></i> Tampilkan Semua</Link>
      </div>
    </section>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import { inject } from 'vue';
const helpers = inject('helpers');

defineProps({ Products: Object, HeadTitle: String, Action: String, Categories: Object });
</script>
