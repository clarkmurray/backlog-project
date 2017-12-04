<template>

	<div class="container">

		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class= "panel-heading">
						<span>Search Results for "{{ this.apiSearch }}" in {{ this.searchType }} </span>
						<span class="pull-right"><a href="/add">Don't see what you're looking for? Make your own entry</a></span>
					</div>


					<div class="panel-body" v-if="books">
	                    <div v-for="result in apiResults">
	                    <a :href="'/search/books/' + result.industryIdentifiers[0].identifier"> 
		                    <table class="table" id="apiSearchResults">

		                    	<tr>
		                    		<th rowspan="2"><img v-bind:src="result.imageLinks.smallThumbnail"></th>
		                    		<th>{{ result.title }}</th>
		                    	</tr>
		                    	<tr>
		                    		<td>{{ result.authors[0] }}</td>
		                    	</tr>

		                    </table>
	                	</a>

	                    <h1>ISBN: {{ result.industryIdentifiers[0].identifier }}</h1>

	                	</div>

					</div>

					<div class="panel-body" v-if="moviesAndTV">

	                    <div v-for="result in movieResults">
	                    	<table class="table">

	                    	<tr>
	                    		<td rowspan="2"><img v-bind:src="'https://image.tmdb.org/t/p/w150' + result.poster_path"></td>
	                    		<td>{{ result.title }}</td>
	                    	</tr>

	                   	 	</table>

	                	</div>

					</div>

				</div>
			</div>
		</div>
	</div>


</template>

<script>

    export default {
    	props: ['prop_api'],
        data() {
            return { 
            	apiSearch: this.prop_api.search_param,
            	searchType: this.prop_api.search_type,
            	apiResults: [],
            	movieResults: [],
            	books: true,
            	moviesAndTV: false,

            }
        },
        methods: {
        	searchBook() {
        		var vm = this;
        		this.apiResults = [];
        		$.ajax({
					url: "https://www.googleapis.com/books/v1/volumes?q=" + this.apiSearch,
					dataType: "json",
					success: function (data) {
						console.log(data);
						for (var i=0; i < 10; i++) {
								if (data.items[i].volumeInfo.title && data.items[i].volumeInfo.authors && data.items[i].volumeInfo.imageLinks.smallThumbnail && data.items[i].volumeInfo.industryIdentifiers[0].identifier){
										vm.apiResults.push(data.items[i].volumeInfo);
								}
						}

					},
					type: 'GET'

				});

				console.log(this.apiResults);

				// this.apiSearch ='';
        	},

        	searchMovieTV() {
        		var vm = this;
        		this.movieResults = [];
        		$.ajax({
					url: "https://api.themoviedb.org/3/search/movie?api_key=0b825591a48003863026cd7101cef2d0&query=" + this.apiSearch,
					dataType: "json",
					success: function (data) {
						console.log(data);
						for (var i=0; i < data.results.length; i++) {
							vm.movieResults.push(data.results[i]);
						}

					},
					type: 'GET'

				});

				// this.apiSearch = '';
        	}

    //     	passToController(data) {
    //     		console.log("You were passed into the controller method");
    //     		console.log(data);
    //     	}
        },

        mounted() {
        	console.log(this.prop_api.search_param);
        	console.log("The Prop API search type is " + this.prop_api.search_type);
        	if (this.searchType === 'Books') {
        		this.moviesAndTV = false;
        		this.books = true;
        		this.searchBook(); 
        	} else if (this.searchType === 'Movies') {
        		this.books = false;
        		this.moviesAndTV = true;
        		this.searchMovieTV();
        	}
        },

    }

</script>