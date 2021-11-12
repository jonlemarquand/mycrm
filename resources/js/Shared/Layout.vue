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
    flex: 1;
    padding: $space-3;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

h1 {
    font-size: var(--h1-font-size);
    font-family: $logoFont;
    border-bottom: 3px solid $primary;
    margin-bottom: $space-3;
}

table {

    width: 100%;
    text-align: left;
    margin-top: $space-4;

    td {
        padding: 12px;
    }

    th {
        padding-left: 12px;
    }

    thead > tr > th {
      padding-bottom: $space-2;
      font-size: var(--h5-font-size);
    }

    tbody {
        tr {
            &:nth-child(odd) {
                background: $light-200;
                border: 0;
            }

            &:nth-child(even) {
                background: $light-100;
                border: 0;
            }
        }
    }
}
</style>
