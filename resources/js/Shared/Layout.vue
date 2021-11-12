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
    padding: $space-3;
}

h1 {
    font-size: var(--h1-font-size);
    font-family: $logoFont;
    border-bottom: 3px solid $primary;
    margin-bottom: $space-3;
}
</style>
