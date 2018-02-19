<script>
    export default{
        props: ['book_props', 'pages_props'],
        data() {
            return {
                books: this.book_props,
                totalPages: this.pages_props,
                itemURL: '',
                itemTitle: '',
                action: '',
                destination: '',
                destinationURL: '',
            }
        },

        methods: {
            reRead: function(id, book, index){
                var vm = this;
                this.itemURL= '/books/' + id;
                this.itemTitle = book;
                this.action = "added to";
                this.destination = "Books Backlog";
                this.destinationURL = '/books/backlog';
                $('.alert').show();
                var data = {
                    id: id
                };
                $.ajax({
                    type: "POST",
                    url: '/books/' + id + '/add',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                });
            },

            submitRemove: function(id, book, index) {
                var vm = this;
                this.itemURL= '/books/' + id;
                this.itemTitle = book;
                this.action = "removed from";
                this.destination = "Finished Books";
                this.destinationURL = '/books/finished';
                $('.alert').show();
                var data = {
                    id: id
                };
                $.ajax({
                    type: "POST",
                    url: '/books/' + id + '/not-read',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                });
                this.books.splice(index, 1);
            }
        }
    }
</script>