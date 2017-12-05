<template>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-1 text-center bookCover">
			<img :src="'https://image.tmdb.org/t/p/w150' + poster" height="100%" width="100%">
		</div>
		<div class="col-md-6">
			<div class="bookInfo">
				<h2 class="bookTitle">{{ title }}</h2>
				<h4 class="bookAuthor">Directed by {{ director }}</h4>
				<ul class="bookStats text-left">
					<li class="bookStat">Released: {{ released }}</li>
					<li class="bookStat">Run Time: {{ length }} minutes </li>
				</ul>
				<p class="bookSummary">{{ description }}</p>
				<div>
					<button class="addBacklog btn btn-primary" v-on:click="addBacklog">Add to Backlog</button>
					<button class="markRead btn btn-success" v-on:click="addWatched">Mark as Watched</button>
				</div>
			</div>
		</div>
	</div>
</div>

</template>


<script>

export default  {
	props: ['id'],
	data() {
		return {
			title: '',
			director: '',
			released: '',
			description: '',
			length: '',
			poster: ''
		}
	},

	methods: {
		addBacklog() {
			var data = { 
					title: this.title,
					director: this.director,
					release: this.released,
					description: this.description,
					runtime: this.length,
					poster_url: this.poster
				}; 
				$.ajax({
				    type: "GET",
				    url: '/new-movie',
				    data: data,
				    headers: {
      					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    				},
				    success: function() {
				      console.log(data);
				    }
				});

				location.replace('/movie-backlog');
		},

		addWatched() {
			var data = { 
					title: this.title,
					director: this.director,
					release: this.released,
					description: this.description,
					runtime: this.length,
					poster_url: this.poster
				};
				$.ajax({
				    type: "GET",
				    url: '/new-movie-watched',
				    data: data,
				    headers: {
      					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    				},
				    success: function() {
				      console.log(data);
				    }
				});

				location.replace('/watched');
		}


	},

	created() {
		var vm = this;
    		this.movieResults = [];
    		$.ajax({
				url: "https://api.themoviedb.org/3/movie/" + this.id + "?api_key=0b825591a48003863026cd7101cef2d0",
				dataType: "json",
				success: function (data) {
					vm.title = data.title;
					vm.released = data.release_date;
					vm.description = data.overview;
					vm.length = data.runtime;
					vm.poster = data.poster_path;
				},
				type: 'GET'

			});

			$.ajax({
				url: "https://api.themoviedb.org/3/movie/" + this.id + "/credits?api_key=0b825591a48003863026cd7101cef2d0",
				dataType: "json",
				success: function (data) {
					console.log(data);
					for (var i=0; i < data.crew.length; i++) {
						if (data.crew[i].job === "Director") {
							vm.director = data.crew[i].name;
						}
					}
				},
				type: 'GET'

			});

			
	}
}

</script>