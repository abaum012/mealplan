<template>
    <navigation></navigation>

    <main>
        <slot></slot>
    </main>

</template>

<script>
import Navigation from "../components/Navigation";

export default {
    name: "LayoutDefault",
    components: {
        Navigation
    }
}
</script>
