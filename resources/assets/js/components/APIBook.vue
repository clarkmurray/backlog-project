<template>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-1 text-center bookCover">
			<img :src="cover" height="100%" width="100%">
		</div>
		<div class="col-md-6">
			<div class="bookInfo">
				<h2 class="bookTitle">{{ title }}</h2>
				<h4 class="bookAuthor">by {{ author }}</h4>
				<ul class="bookStats text-left">
					<li class="bookStat">Published: {{ published }}</li>
					<li class="bookStat">Pages: {{ pages }}</li>
					<li class="bookStat">Time to Read: </li>
				</ul>
				<p class="bookSummary">{{ description }}</p>
				<div>
					<button class="addBacklog btn btn-primary" v-on:click="addBacklog">Add to Backlog</button>
					<button class="markRead btn btn-success" v-on:click="addRead">Mark as Read</button>
				</div>
			</div>
		</div>
	</div>
</div>

</template>


<script>

export default  {
	props: ['isbn'],
	data() {
		return {
			title: '',
			author: '',
			pages: 0,
			published: '',
			description: '',
			cover: ''
		}
	},

	methods: {
		addBacklog() {
			var data = { 
					title: this.title,
					author: this.author,
					pages: this.pages,
					published: this.published,
					description: this.description,
					cover: this.cover
				}; 
				$.ajax({
				    type: "GET",
				    url: '/new-book',
				    data: data,
				    headers: {
      					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    				},
				    success: function() {
				      console.log(data);
				    }
				});

				location.replace('/home');


		},

		addRead() {
			var data = { 
					title: this.title,
					author: this.author,
					pages: this.pages,
					published: this.published,
					description: this.description,
					cover: this.cover
				};
				$.ajax({
				    type: "GET",
				    url: '/new-book-read',
				    data: data,
				    headers: {
      					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    				},
				    success: function() {
				      console.log(data);
				    }
				});

				location.replace('/finished');
		}
	},

	created() {
		var vm = this;
		$.ajax({
			url: "https://www.googleapis.com/books/v1/volumes?q=" + this.isbn,
			dataType: "json",
			success: function (data) {
				console.log(data);
				console.log(vm.isbn);
				vm.title = data.items[0].volumeInfo.title;
				vm.author = data.items[0].volumeInfo.authors[0];
				vm.pages = data.items[0].volumeInfo.pageCount;
				vm.published = data.items[0].volumeInfo.publishedDate;
				vm.description = data.items[0].volumeInfo.description;
				vm.cover = data.items[0].volumeInfo.imageLinks.thumbnail;
			},
			type: 'GET'

		});

	}
}

</script>