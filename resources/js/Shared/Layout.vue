<template>
    <Nav />
    <main>
        <slot />
    </main>
</template>

<script>

import Nav from "./Nav";

export default {
    name: "Layout",
    components: { Nav }
}
</script>

<style lang="scss">
@import '~@/_variables.scss';
#app {
    display: flex;
    min-height: 100vh;
}

main {
    padding: $space-4;
}
</style>
