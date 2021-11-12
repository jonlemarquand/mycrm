<template>
    <Link
        class="nav-link"
        :class="{'nav-link--active': active}"
    >
        <slot />
    </Link>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';

export default {
    props: {
        active: Boolean,
    },
    name: "NavLink",
    components: { Link }
}
</script>

<style lang="scss" scoped>
    @import '~@/_variables.scss';

    .nav-link {
        color: $white;

        &:hover {
            color: $highlight;
        }

        &--active {
            font-weight: 700;
            color: $secondary;
        }

    }
</style>
