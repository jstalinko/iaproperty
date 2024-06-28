<template>
    <div>
        <Navbar :Categories="Categories"/>
        <br><br><br>
        <ProductPage :Products="Products" :HeadTitle="HeadTitle" :Action="Action" :Categories="Categories" :Filter="Filter"/>
    </div>
</template>

<script setup>
import Navbar from '../../Components/Navbar.vue';
import CategoryPage from '../../Components/CategoryPage.vue';
import ProductPage from '../../Components/ProductPage.vue';

defineProps({Products: Object , Categories: Object , ActiveCat: String ,  SubCategories: Object , Filter: String });
const HeadTitle = "Produk Kami";
const Action = "kategori";
</script>