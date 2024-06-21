<template>

    <div>
        <Navbar/>
        <h1> {{ page }}</h1>
    </div>
</template>

<script setup>
import Navbar from '../Components/Navbar.vue';

defineProps({ page: Object })

</script>