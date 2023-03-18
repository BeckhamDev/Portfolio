<script setup>
import { Head, Link } from "@inertiajs/vue3";
import Frontend from "@/Layouts/Frontend.vue";
import Hero from "@/Components/Frontend/Hero.vue";
import About from "@/Components/Frontend/About.vue";
</script>

<template>
    <Head title="Welcome to my Portfolio" />
    <Frontend>
        <Hero />
        <About />
    </Frontend>
</template>
