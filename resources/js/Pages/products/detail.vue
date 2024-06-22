

<template>
    <div>
        <Navbar/>
        {{ product }}
    </div>
</template>

<script setup>
import Navbar from '../../Components/Navbar.vue';
defineProps({product: Object});
</script>