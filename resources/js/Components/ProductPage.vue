<template>
  <div>
    <section class="py-10 px-5 md:px-20 lg:px-64">
      <div class="flex flex-col md:flex-row justify-between mb-10">
        <h2 class="text-secondary text-2xl md:text-4xl mb-5 md:mb-0">{{ HeadTitle }}</h2>

        <div v-if="Action == 'all'" class="flex justify-center md:justify-end">
          <Link class="flex items-center gap-2 hover:underline hover:text-amber-500" href="/products">
            Tampilkan Semua
            <i class="fa fa-long-arrow-right"></i>
          </Link>
        </div>
        <div v-else class="flex justify-center md:justify-end">
          <button data-dropdown-toggle="dropdownCategory" id="dropdownCategoryButton" class="bg-amber-400 rounded hover:bg-amber-600 p-2">Pilih Kategori <i class="mdi mdi-chevron-down"></i></button>
          <div id="dropdownCategory" class="z-10 hidden bg-[#FEC43C] divide-y divide-gray-600 rounded-r-lg rounded-bl-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownCategoryButton">
              <li v-for="(cat, index) in Categories" :key="index">
                <Link :href="'/products/category/' + cat.id" class="block px-4 py-2 hover:bg-yellow-300 text-black">{{ cat.name }}</Link>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 mb-10">
        <div class="rounded-lg" v-for="(product, index) in Products" :key="index">
          <img class="w-full rounded-t-lg" :src="helpers.imageUrl(product.image)" :alt="product.name" />
          <div class="flex flex-col gap-2 text-gray-600 bg-[#FFCC4C] p-5 rounded-b-lg hover:shadow-lg">
            <Link :href="'/product/' + product.slug"><h4 class="font-bold hover:underline">{{ product.name }}</h4></Link>
            <p class="text-xs mb-5 hidden md:block">
              {{ helpers.stripTags(product.content.substr(0, 200)) }}...
            </p>
            <div class="flex flex-col md:flex-row md:justify-between">
              <b class="text-sm mt-2">{{ product.price == 0 ? 'Tanya Admin' : helpers.rupiah(product.price) }}</b>
              <span class="text-sm mt-2"><i class="mdi mdi-tag"></i> {{ product.subcategory.name }}</span>
            </div>
            <a class="bg-amber-500 px-8 py-2 rounded-lg text-white font-bold text-center hover:bg-amber-700" href="/#"><i class="mdi mdi-whatsapp"></i> Pesan</a>
          </div>
        </div>
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
