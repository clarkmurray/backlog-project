<template>

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class= "panel-heading">Search</div>

					<div class="panel-body">

	                    <input v-model="apiSearch" id="apiSearch" placeholder="Find Book">
	                    <button v-on:click="searchBook" id="submitSearch" type="button">Search</button>

	                    <div v-for="result in apiResults">
	                   <!--  <table class="table" id="apiSearchResults">

	                    	<tr>
	                    		<th rowspan="2"><img v-bind:src="result.imageLinks.smallThumbnail"></th>
	                    		<th>{{ result.title }}</th>
	                    	</tr>
	                    	<tr>
	                    		<td>{{ result.authors[0] }}</td>
	                    	</tr>

	                    </table> -->

	                    <h1>{{ result.title }}</h1>
	                    <h1>{{ result.authors[0]}}</h1>
	                </div>

					</div>

				</div>
			</div>
		</div>
	</div>


</template>

<script>

    export default {
        data() {
            return { 
            	apiSearch: '',
            	apiResults: []
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
								vm.apiResults.push(data.items[i].volumeInfo);
								console.log(data.items[i].volumeInfo.title);
						}

					},
					type: 'GET'

				});

				console.log(this.apiResults);

				this.apiSearch ='';
        	}
        }

    }

</script>