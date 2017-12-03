<template>
    <ais-index :search-store="searchStore">
        <div id="instantInput">
            <div class="input-group searchBar">
                <ais-input placeholder="Find a book, movie, or show" class="form-control" id="aisSearchBar"></ais-input>
                <span class="input-group-addon" id="searchButton" v-on:click="secondSearch"><i class="fa fa-search" aria-hidden="true"></i></span>
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
            return { 
                searchStore,
                backupParam: ''
            };
        },
        methods: {
            secondSearch() {
                this.backupParam = document.getElementById('aisSearchBar').value;
                this.passSecondSearch(this.backupParam);
            },

            passSecondSearch(value) {

                var data = { value : value };
                $.ajax({
                    type: "GET",
                    url: '/param-store',
                    data: data,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function() {
                      console.log("The value added is " + value);
                    }
                });

                window.location.replace("/search");
            }
        }
    }
</script>