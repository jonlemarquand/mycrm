<template>
    <nav>
        <div class="logo">Easy<span class="logo--thin">Let</span></div>
        <ul>
            <li><NavLink href="/" :active="$page.component === 'Homepage'">Dashboard</NavLink></li>
        </ul>
        <h2>Customer Information</h2>
        <ul>
            <li><NavLink href="/properties" :active="$page.component === 'Properties'">Properties</NavLink></li>
            <li><NavLink href="/landlords" :active="$page.component === 'Landlords'">Landlords</NavLink></li>
            <li><NavLink href="/tenants" :active="$page.component === 'Tenants'">Tenants</NavLink></li>
        </ul>
        <h2>Admin Information</h2>
        <ul>
            <li><NavLink href="/offices" :active="$page.component === 'Offices'">Offices</NavLink></li>
            <li><NavLink href="/users" :active="$page.component === 'Users'">Users</NavLink></li>
            <li><NavLink href="/areas" :active="$page.component === 'Areas'">Areas</NavLink></li>
        </ul>
    </nav>
</template>

<script>

import NavLink from "./NavLink";

export default {
    name: "Nav",
    components: {NavLink}
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
    margin-bottom: $space-4;

    &--thin {
        font-weight: 300;
    }
}

h2 {
    font-family: $logoFont;
    margin-bottom: $space-3;
    margin-top: $space-5;
}

li {
    margin: $space-1 0;
}

</style>
