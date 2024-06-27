<template>
    <section class="bg-[#ffcc4c] py-10 px-5 md:py-20 md:px-64">
      
      <h1 class="mt-5 mb-10 text-3xl poppins-bold"><i class="mdi mdi-star-circle"></i> Rekomendasi Produk</h1>
      <br><br>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 mt-10 gap-x-5 gap-y-10 md:gap-y-32">
        
        <div class="flex flex-col items-center relative bg-gray-100 rounded-lg hover:outline outline-1 outline-gray-500 py-5 px-1" v-for="p in [1,2,3,4,5,6,7,8,9,10]">
          <img class="w-32 sm:w-40 absolute -top-10" src="/assets/images/pink-float-chair.png" alt="" />
          <div class="my-10 text-center text-gray-600">
            <h4 class="text-lg md:text-xl font-bold my-5 animate-pulse">Pink Float Chair</h4>
          <div class="flex flex-col items-center mt-2">
            <span class="text-xl font-semibold ">Rp 299.000</span>
            <span class="text-sm text-gray-500 mt-1"><i class="mdi mdi-tag"></i> Luar Ruang</span>
            <div class="flex items-center mt-1">
              <i class="mdi mdi-eye-outline text-gray-700"></i>
              <span class="ml-1 text-sm text-gray-600">1234x</span>
            </div>
          </div>
          </div>
          <div class="flex items-center gap-5">
            <button class="bg-gray-500 hover:bg-gray-600 py-1 px-5 sm:px-10 rounded-xl  gap-2 text-white font-bold">
              <i class="mdi mdi-whatsapp"></i>
              Pesan
            </button>
            
          </div>
          
        </div>
        
      </div>
<br><br>
      <div class="flex justify-center">
        <Link href="/products/recomend" class="bg-gray-500 p-2 rounded text-center text-white hover:bg-gray-600 mt-10"><i class="mdi mdi-view-list"></i> Tampilkan Semua</Link>
      </div>
    </section>
  </template>
  
  <script setup>
import { Link } from '@inertiajs/vue3';
</script>