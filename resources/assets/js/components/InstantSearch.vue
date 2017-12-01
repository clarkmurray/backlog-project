<template>
    <ais-index :search-store="searchStore">
        <ais-input></ais-input>
        <ais-results v-show="searchStore.query.length > 0">
            <template slot-scope="{ result }">
                <div class="searchResult">
                    <a :href="'/books/' + result.id">
                    <h2 v-text="result.title"></h2>
                    <p v-text="result.author"></p>
                    </a>
                </div>
            </template>
        </ais-results>
    </ais-index>
</template>

<script>
    import { createFromAlgoliaCredentials } from 'vue-instantsearch';
    const searchStore = createFromAlgoliaCredentials(window.algolia.app_id, window.algolia.search_key);

    searchStore.indexName = 'title';


    export default {
        data() {
            return { searchStore };
        }
    }
</script>