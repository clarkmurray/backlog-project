<template>
<div id="instantInput">
    <div class="input-group searchBar" v-on:keyup.enter="secondSearch">
        <div class="input-group-btn bs-dropdown-to-select-group" id="dropdownSelect">
            <button type="button" class="btn btn-default dropdown-toggle as-is bs-dropdown-to-select" data-toggle="dropdown" tabindex="-1">
                <span data-bind="bs-drp-sel-label">Books</span>
                <input type="hidden" name="country_path" data-bind="bs-drp-sel-value" value="Books" id="dropdownSelectValue">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu" role="menu" style=" max-height: 300px; overflow: scroll; overflow-y: scroll; overflow-x: hidden; ">
                <li data-value="Books"><a href="#">Books</a></li>
                <li data-value="Movies"><a href="#">Movies</a></li>
            </ul>
        </div>
        <input placeholder="Find a book, movie, or show" class="form-control" id="aisSearchBar" v-model="query">
        <span class="input-group-addon" id="searchButton" v-on:click="secondSearch"><i class="fa fa-search" aria-hidden="true"></i></span>
    </div>
    <div id="allResults">
    <div id="allResultsScroll">
         <div v-if="query">
            <div class="searchResultsContainer">
                <div class="searchResult text-center">
                    <img class="algoliaLogo img-responsive" src="../../search-by-algolia.png">
                </div>
            </div>
        </div>
        <div v-show="query" class="allResultsContainer">
        <ais-index :search-store="searchStore" index-name="title" :query="query">
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
        </ais-index>
         <ais-index :search-store="store" index-name="movies" :query="query">
            <ais-results v-show="store.query.length > 0">
                <template slot-scope="{ result }">
                    <div class="searchResultsContainer">
                        <div class="searchResult">
                            <a :href="'/movies/' + result.id">
                            <h4 v-text="result.title"></h4>
                            <p v-text="result.director"></p>
                            </a>
                        </div>
                    </div>
                </template>
            </ais-results>
        </ais-index>
        </div>
    </div>
    </div>
</div>
</template>

<script>
    import { createFromAlgoliaCredentials } from 'vue-instantsearch';
    const searchStore = createFromAlgoliaCredentials(window.algolia.app_id, window.algolia.search_key);

    const store = createFromAlgoliaCredentials(window.algolia.app_id, window.algolia.search_key);

    searchStore.indexName = 'title';
    store.indexName = 'movies';


    export default {
        data() {
            return { 
                searchStore,
                store,
                backupParam: '',
                searchType: 'Books',
                query: ''
            };
        },
        methods: {

            secondSearch() {
                this.backupParam = document.getElementById('aisSearchBar').value;
                if (!this.backupParam.replace(/\s/g, '').length || this.backupParam === null) {
                    return;
                }
                this.searchType = document.getElementById('dropdownSelectValue').value;
                this.passSecondSearch(this.backupParam, this.searchType);
            },

            passSecondSearch(value, type) {

                var data = { value : value, type : type };
                $.ajax({
                    type: "GET",
                    url: '/param-store',
                    data: data,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function() {
                      console.log("The value added is " + value);
                      console.log("The value type is " + type);
                    }
                });


                window.location.replace("/search");
            }
        },

        mounted: function() {
            $(document).ready(function(e){
    
                $( document ).on( 'click', '.bs-dropdown-to-select-group .dropdown-menu li', function( event ) {
                        var $target = $( event.currentTarget );
                        $target.closest('.bs-dropdown-to-select-group')
                            .find('[data-bind="bs-drp-sel-value"]').val($target.attr('data-value'))
                            .end()
                            .children('.dropdown-toggle').dropdown('toggle');
                        $target.closest('.bs-dropdown-to-select-group')
                            .find('[data-bind="bs-drp-sel-label"]').text($target.attr('data-value'));/*$target.text()*/ 
                        return false;
                    });

            });
        }
    }
</script>