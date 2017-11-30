<template>
	<div class="container" id="wpmTest">
		<div class="row">

			<div class="col-md-10 col-md-offset-1">
				<div v-if="startTest">
					<h1 class="text-center">WPM Test</h1>
					<p>Click the button below to begin your reading speed test. You will have 60 seconds to read a selected text. After 60 seconds, you will be prompted to specify the last word you read, after which your WPM (words per minute) will be calculated and used in your reading estimates.</p>
					<button v-on:click="takeTest()" class="btn btn-success">Take Test</button>
				</div>
				<div v-if="takingTest" id="readingTest">
					<p>This is your reading test</p>
					<button v-on:click="finishTest()" class="btn btn-success">Finished</button>
					<button v-on:click="retakeTest()" class="btn btn-danger">Cancel</button>
				</div>
				<div v-if="finishedTest" class="text-center">
					<p>Your WPM is: {{ wpm }}</p>
					<button v-on:click="retakeTest()" class="btn btn-success">Retake Test</button>
				</div>
			</div>

		</div>
	</div>
</template>


<script>
	export default {
		props: ['wpm'],
		data() {
			return {
				startTest: true,
				takingTest: false,
				finishedTest: false,
				time: 0,
				result: 0,
			};
		},

		methods: {
			takeTest() {
				this.startTest = false;
				this.takingTest = true;
				this.timer();
			},

			finishTest() {
				this.takingTest = false;
				this.finishedTest = true;
				this.newWPM();
			},

			retakeTest() {
				this.startTest = true;
				this.finishedTest = false;
				this.finishedTest = false;
				this.time = 0;
			},

			timer() {
				if (this.takingTest) {
					this.time = this.time + 10;
					setTimeout(function() {this.timer()}.bind(this), 1000);
					console.log(this.time);
				}
			},

			newWPM() {
				var minutes = this.time / 60;
				// result= seconds / 60
				this.result = 1000 / minutes;
				console.log(this.result);
				this.storeNewWPM(this.result);

				// make an api, point js towards it
			},

			storeNewWPM(value) {

				var data = { value : value };
				$.ajax({
				    type: "GET",
				    url: '/wpm-store',
				    data: data,
				    headers: {
      					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    				},
				    success: function() {
				      console.log("Value added " + value);
				    }
				})
			}
		}
	}

</script>