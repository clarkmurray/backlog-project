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