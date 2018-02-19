@extends('layouts.app')

@section('content')
<books-finished :book_props="{{ $books }}" :pages_props="{{ $totalPages }}" inline-template>
    <div class="container v-cloak">
        <action-alert :itemurl="itemURL" :title="itemTitle" :action="action" :destinationurl="destinationURL" :destination="destination"></action-alert>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span>My Finished Books</span>
                        <span class="pull-right">Total Time Read: {{ \App\Http\Controllers\BookController::timeToRead($totalPages) }}</span>
                    </div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                    <th></th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Published</th>
                                    <th>Pages</th>
                                    <th></th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    <tr v-for="(book, index) in books">
                                        <td></td>
                                        <td>
                                            <a :href="'/books/' + book.id">@{{ book.title }}</a>
                                        </td>
                                        <td>@{{ book.author }}</td>
                                        <td>@{{ book.published }}</td>
                                        <td>@{{ book.pages }}</td>
                                        <td>
                                            <form v-on:submit.prevent="reRead(book.id, book.title, index)" class="form-inline">
                                                {{ csrf_field() }}
                                                <button type="submit" class="readAgain" data-toggle="tooltip" data-placement="bottom" title="Read again">
                                                    <i class="fa fa-book fa-lg" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                            <form v-on:submit.prevent="submitRemove(book.id, book.title, index)" class="form-inline">
                                                {{ csrf_field() }}
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
</books-finished>

@endsection