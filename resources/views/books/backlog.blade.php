@extends('layouts.app')

@section('content')

 <books-backlog :book_props="{{ $books }}" :pages_props="{{ $totalPages }}" :wpm_prop="{{ $wpm }}" inline-template>
    <div class="container v-cloak">
        <action-alert :itemurl="itemURL" :title="itemTitle" :action="action" :destinationurl="destinationURL" :destination="destination"></action-alert>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span>Books Backlog</span>
                        <span class="pull-right">Time to Read: @{{ totalPages }} </span>
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
                                    <tr v-for="(book, index) in books">
                                        <td></td>
                                        <td><a :href="'/books/' + book.id" class="bookTitleSlot" v-text="book.title"></a></td>
                                        <td v-text="book.author"></td>
                                        <td v-text="book.published"></td>
                                        <td v-text="book.pages"></td>
                                        <td v-text="book.pages / wpm"></td>
                                        <td>
                                            <form v-on:submit.prevent="submitCheckOff(book.id, book.title, index)" class="form-inline">
                                                <button type="submit" class="checkOff" data-toggle="tooltip" data-placement="bottom" title="Mark as Read">
                                                    <i class="fa fa-check-square fa-lg" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                            <form v-on:submit.prevent="submitRemove(book.id, book.title, index)" class="form-inline">
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
</books-backlog>

@endsection
