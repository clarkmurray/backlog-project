<template>
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h1>{{ title }}</h1>
				<h1>{{ author }}</h1>
				<h1>{{ pages }}</h1>
				<h1>{{ published }}</h1>
				<img :src="cover">
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

	mounted() {
		var vm = this;
		console.log('This is working');
		$.ajax({
			url: "http://openlibrary.org/api/books?bibkeys=ISBN:" + this.isbn + "&jscmd=data&format=json",
			dataType: "json",
			success: function (data) {
				console.log(data);
				vm.title = data["ISBN:" + vm.isbn + ""].title;
				vm.author = data["ISBN:" + vm.isbn + ""].authors[0].name;
				vm.pages = data["ISBN:" + vm.isbn + ""].number_of_pages;
				vm.published = data["ISBN:" + vm.isbn + ""].publish_date;
				vm.cover = data["ISBN:" + vm.isbn + ""].cover.medium;
			},
			type: 'GET'

		});
	}
}

</script>