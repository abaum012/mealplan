<template>
    <navigation></navigation>
    <page-header v-bind="{ title: title}"></page-header>
    <main>
        <slot></slot>
    </main>

</template>

<script>
import Navigation from "../components/Navigation";
import PageHeader from "../components/PageHeader";

export default {
    name: "LayoutDefault",
    props: ['title'],
    components: {
        Navigation,
        PageHeader
    }
}
</script>
