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

h1, h2 {
    font-family: $logoFont;
    border-bottom: 3px solid $primary;
    margin-bottom: $space-3;
}

h1 {
    font-size: var(--h1-font-size);
}

h2 {
    margin-top: $space-3;
    font-size: var(--h4-font-size);
}

table {

    width: 100%;
    text-align: left;
    margin-top: $space-4;

    td {
        padding: 12px;
    }

    th:not(:first-child) {
        padding-left: 12px;
    }

    thead > tr > th {
        padding-bottom: $space-2;
        font-size: var(--h6-font-size);
        font-family: $logoFont;
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

button, .link {
    background: $highlight;
    color: $white;
    border: 0;
    box-shadow: none;
    font-size:var(--body-large-font-size);
    font-family: $primaryFont;
    font-weight: 700;
    padding: $space-1 $space-2;

    &.small {
        padding: $space-1 $space-2;
        font-size: var(--caption-font-size);
    }

}
</style>
