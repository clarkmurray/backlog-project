<template>

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class= "panel-heading">Search</div>

					<div class="panel-body">

	                    <input v-model="apiSearch" id="apiSearch" placeholder="Find Book">
	                    <button v-on:click="searchBook" id="submitSearch" type="button">Search</button>

	                    <table id="apiSearchResults" v-for="result in apiResults">

	                    	<tr>
	                    		<th rowspan="2"><img v-bind:src="result.imageLinks.smallThumbnail"></th>
	                    		<th>{{ result.title }}</th>
	                    	</tr>
	                    	<tr>
	                    		<td>{{ result.authors[0] }}</td>
	                    	</tr>

	                    </table>

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
        		$.ajax({
					url: "https://www.googleapis.com/books/v1/volumes?q=" + this.apiSearch,
					dataType: "json",
					success: function (data) {
						console.log(data);
						for (var i=0; i < data.items.length; i++) {
							vm.apiResults.push(data.items[i].volumeInfo);
						}

					},
					type: 'GET'

				});

				this.apiSearch ='';
        	}
        }

    }

</script>