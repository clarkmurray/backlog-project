<template>
    <ais-index :search-store="searchStore">
        <div id="instantInput">
            <div class="input-group searchBar">
                <ais-input class="form-control"></ais-input>
                <span class="input-group-addon" id="searchButton"><a href="/search">Go</a></span>
            </div>
            <ais-results v-show="searchStore.query.length > 0">
                <template slot-scope="{ result }">
                    <div class="searchResultsContainer">
                    <div class="searchResult">
                        <a :href="'/books/' + result.id">
                        <h4 v-text="result.title"></h4>
                        <p v-text="result.author"></p>
                        </a>
                    </div>
                    </div>
                </template>
            </ais-results>
        </div>
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