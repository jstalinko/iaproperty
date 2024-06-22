<template>
    <div>
        <Navbar/>
        <CategoryPage/>
        <ProductPage :Products="Products" :HeadTitle="HeadTitle" :Action="Action" :Categories="Categories"/>
    </div>
</template>

<script setup>
import Navbar from '../../Components/Navbar.vue';
import CategoryPage from '../../Components/CategoryPage.vue';
import ProductPage from '../../Components/ProductPage.vue';

defineProps({Products: Object , Categories: Object});
const HeadTitle = "Semua Produk";
const Action = "kategori";
</script>