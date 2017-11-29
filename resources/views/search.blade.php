@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class= "panel-heading">Search</div>

				<div class="panel-body" id="app">

				<!-- 	 <template>
                                <ais-index
                                    app-id="VDG2ASZRC8"
                                    api-key="7ae089c05742521cd481e6190a45e5ee"
                                    index-name="title"
                                >

                                <ais-search-box>
                                    <ais-input placeholder="Find book, movie, or show" :class-names="{ 'ais-input': 'form-control',}" id="searchBar"></ais-input>
                                 </ais-search-box>  
                                    <ais-results>
                                        <template slot-scope="{ result }">
                                            <a href="#">
                                            <div class="searchResult">
                                                <p v-text="result.title"></p>
                                                <p v-text="result.author"></p>
                                            </div>
                                            </a>
                                         </template>
                                    </ais-results>
                                </ais-index>
                            </template> -->

                    <algolia-instantsearch></algolia-instantsearch>

				</div>

			</div>
		</div>
	</div>
</div>

@endsection