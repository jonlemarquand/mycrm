<template>
    <nav>
        <div class="logo">Easy<span class="logo--thin">Let</span></div>
        <p>Welcome back, User</p>
        <h2>Customer Information</h2>
        <ul>
            <li>Properties</li>
            <li>Landlords</li>
            <li>Tenants</li>
        </ul>
        <h2>Admin Information</h2>
        <ul>
            <li>Offices</li>
            <li>Users</li>
            <li>Areas</li>
        </ul>
    </nav>
</template>

<script>
export default {
    name: "Nav"
}
</script>

<style lang="scss" scoped>
@import '~@/_variables.scss';

nav {
    min-width: 240px;
    padding: $space-3;
    margin-right: $space-3;
    background: $primary;
    color: $white;
}

.logo {
    font-family: $logoFont;
    font-weight: 900;
    font-size: var(--h1-font-size);
    color: $white;
    &--thin {
        font-weight: 300;
    }
}

h2 {
    font-family: $logoFont;
}

</style>
