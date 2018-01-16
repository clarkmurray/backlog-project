<template>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span>Books Backlog</span>
                        <span class="pull-right">Time to Read: {{ totalPages }} </span>
                    </div>

                    <div class="panel-body">

                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                    <th></th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Published</th>
                                    <th>Pages</th>
                                    <th>Estimated Time</th>
                                    <th></th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    <tr v-for="book in books">
                                        <td></td>
                                        <td><a :href="'/books/' + book.id" class="bookTitleSlot">{{ book.title }}</a></td>
                                        <td>{{ book.author }}</td>
                                        <td>{{ book.published }}</td>
                                        <td>{{ book.pages }}</td>
                                        <td>{{ book.pages / wpm }}</td>
                                        <td>
                                            <form @submit.prevent="submitCheckOff(book.id)" class="form-inline">
                                                <button type="submit" class="checkOff" data-toggle="tooltip" data-placement="bottom" title="Mark as Read">
                                                    <i class="fa fa-check-square fa-lg" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                            <form @submit.prevent="submitRemove(book.id)" class="form-inline">
                                                <button type="submit" class="remove" data-toggle="tooltip" data-placement="bottom" title="Remove from list">
                                                    <i class="fa fa-minus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default{
        data() {
            return {
                books: [],
                wpm: 0,
                totalPages: 0
            }
        },

        methods: {
            submitCheckOff: function(id) {
                var vm = this;
                var data = { 
                    id: id
                }; 
                $.ajax({
                    type: "POST",
                    url: '/books/' + id + '/read',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function() {
                      console.log(data);
                    }
                });
                this.getBooks();
            },

            submitRemove: function(id) {
                var vm = this;
                var data = {
                    id: id
                };
                $.ajax({
                    type: "POST",
                    url: '/books/' + id + '/remove',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function() {
                      console.log(data);
                    }
                });
                this.getBooks();
            },

            getBooks: function() {
                var vm = this;
                $.ajax({
                    type: "GET",
                    url: '/get-books',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        vm.books = data[0];
                        vm.wpm = data[1];
                        vm.totalPages = data[2];
                    }
                 });
            }
        },

        created() {
            this.getBooks();
        }
    }
</script>