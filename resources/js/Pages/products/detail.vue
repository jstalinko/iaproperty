<template>
    <div>
        <Navbar />
        <div class="container mx-auto bg-slate-300 h-screen w-full block">
        </div>
    </div>
</template>

<script setup>
import Navbar from '../../Components/Navbar.vue';
import { inject } from 'vue';
defineProps({ product: Object });
const helpers = inject('helpers');


</script>