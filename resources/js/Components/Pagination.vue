<template>
    <nav>
        <ul
            :class="`pagination justify-content-${align} mb-0 custom-pagination`"
        >
            <li
                :class="[
                    'page-item',
                    link.url == null ? 'disabled' : '',
                    link.active ? 'active' : '',
                ]"
                v-for="(link, index) in links"
                :key="index"
            >
                <Link
                    class="page-link"
                    :href="link.url === null ? '#' : link.url"
                    v-html="link.label"
                >
                </Link>
            </li>
        </ul>
    </nav>
</template>

<script>
//import Link
import { Link } from "@inertiajs/vue3";

export default {
    props: {
        links: Array,
        align: String,
    },

    components: {
        Link,
    },
};
</script>

<style>
.custom-pagination .page-item.active .page-link {
    background-color: #dc3545;
    border-color: #dc3545;
}

.custom-pagination .page-link {
    color: #dc3545;
}

.custom-pagination .page-link:hover {
    background-color: #dc3545;
    color: #fff;
}

.custom-pagination .page-item.disabled .page-link {
    color: #6c757d;
}
</style>
