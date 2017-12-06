<template>
	<div class="container" id="wpmTest">
		<div class="row">

			<div class="col-md-10 col-md-offset-1">
				<div v-if="startTest">
					<div class="panel wpmPrompt">
					<h1 class="text-center">WPM Test</h1>
					<p>Click the button below to begin your reading speed test. You will have 60 seconds to read a selected text. After 60 seconds, you will be prompted to specify the last word you read, after which your WPM (words per minute) will be calculated and used in your reading estimates.</p>
					<button v-on:click="takeTest()" class="btn btn-success">Take Test</button>
					</div>
				</div>
				<div v-if="takingTest" id="readingTest">
					<h1>from <span id="passageTitle">A Study in Scarlet</span> by Arthur Conan Doyle</h1>

					<p>Holmes was certainly not a difficult man to live with. He was quiet in his ways, and his habits were regular. It was rare for him to be up after ten at night, and he had invariably breakfasted and gone out before I rose in the morning. Sometimes he spent his day at the chemical laboratory, sometimes in the dissecting-rooms, and occasionally in long walks, which appeared to take him into the lowest portions of the City. Nothing could exceed his energy when the working fit was upon him; but now and again a reaction would seize him, and for days on end he would lie upon the sofa in the sitting-room, hardly uttering a word or moving a muscle from morning to night. On these occasions I have noticed such a dreamy, vacant expression in his eyes, that I might have suspected him of being addicted to the use of some narcotic, had not the temperance and cleanliness of his whole life forbidden such a notion. As the weeks went by, my interest in him and my curiosity as to his aims in life, gradually deepened and increased. His very person and appearance were such as to strike the attention of the most casual observer. In height he was rather over six feet, and so excessively lean that he seemed to be considerably taller. His eyes were sharp and piercing, save during those intervals of torpor to which I have alluded; and his thin, hawk-like nose gave his whole expression an air of alertness and decision. His chin, too, had the prominence and squareness which mark the man of determination. His hands were invariably blotted with ink and stained with chemicals, yet he was possessed of extraordinary delicacy of touch, as I frequently had occasion to observe when I watched him manipulating his fragile philosophical instruments</p>

					<p>The reader may set me down as a hopeless busybody, when I confess how much this man stimulated my curiosity, and how often I endeavoured to break through the reticence which he showed on all that concerned himself. Before pronouncing judgment, however, be it remembered, how objectless was my life, and how little there was to engage my attention. My health forbade me from venturing out unless the weather was exceptionally genial, and I had no friends who would call upon me and break the monotony of my daily existence. Under these circumstances, I eagerly hailed the little mystery which hung around my companion, and spent much of my time in endeavouring to unravel it.</p>

					<p>He was not studying medicine. He had himself, in reply to a question, confirmed Stamford’s opinion upon that point. Neither did he appear to have pursued any course of reading which might fit him for a degree in science or any other recognized portal which would give him an entrance into the learned world. Yet his zeal for certain studies was remarkable, and within eccentric limits his knowledge was so extraordinarily ample and minute that his observations have fairly astounded me. Surely no man would work so hard or attain such precise information unless he had some definite end in view. Desultory readers are seldom remarkable for the exactness of their learning. No man burdens his mind with small matters unless he has some very good reason for doing so.</p>

					<p>His ignorance was as remarkable as his knowledge. Of contemporary literature, philosophy and politics he appeared to know next to nothing. Upon my quoting Thomas Carlyle, he inquired in the naivest way who he might be and what he had done. My surprise reached a climax, however, when I found incidentally that he was ignorant of the Copernican Theory and of the composition of the Solar System. That any civilized human being in this nineteenth century should not be aware that the earth travelled round the sun appeared to be to me such an extraordinary fact that I could hardly realize it.</p>

					<p>His ignorance was as remarkable as his knowledge. Of contemporary literature, philosophy and politics he appeared to know next to nothing. Upon my quoting Thomas Carlyle, he inquired in the naivest way who he might be and what he had done. My surprise reached a climax, however, when I found incidentally that he was ignorant of the Copernican Theory and of the composition of the Solar System. That any civilized human being in this nineteenth century should not be aware that the earth travelled round the sun appeared to be to me such an extraordinary fact that I could hardly realize it.</p>

					<p>“You appear to be astonished,” he said, smiling at my expression of surprise. “Now that I do know it I shall do my best to forget it.”</p>

					<p>“To forget it!”</p>

					<p>“You see,” he explained, “I consider that a man’s brain originally is like a little empty attic, and you have to stock it with such furniture as you choose. A fool takes in all the lumber of every sort that he comes across, so that the knowledge which might be useful to him gets crowded out, or at best is jumbled up with a lot of other things so that he has a difficulty in laying his hands upon it. Now the skilful workman is very careful indeed as to what he takes into his brain-attic. He will have nothing but the tools which may help him in doing his work, but of these he has a large assortment, and all in the most perfect order. It is a mistake to think that that little room has elastic walls and can distend to any extent. Depend upon it there comes a time when for every addition of knowledge you forget something that you knew before. It is of the highest importance, therefore, not to have useless facts elbowing out the useful ones.”</p>

					<p>“But the Solar System!” I protested.</p>

					<p>“What the deuce is it to me?” he interrupted impatiently; “you say that we go round the sun. If we went round the moon it would not make a pennyworth of difference to me or to my work.”</p>


					<button v-on:click="finishTest()" class="btn btn-success">Finished</button>
					<button v-on:click="retakeTest()" class="btn btn-danger">Cancel</button>
				</div>
				<div v-if="finishedTest" class="text-center">
					<h2>Your WPM is: {{ result }}</h2>
					<button v-on:click="retakeTest()" class="btn btn-success">Retake Test</button>
				</div>
			</div>

		</div>
	</div>
</template>


<script>
	export default {
		data() {
			return {
				startTest: true,
				takingTest: false,
				finishedTest: false,
				time: 0,
				result: 0

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
					this.time++;
					setTimeout(function() {this.timer()}.bind(this), 1000);
					console.log(this.time);
				}
			},

			newWPM() {
				var minutes = this.time / 60;
				// result= seconds / 60
				this.result = Math.round(910 / minutes);
				console.log(this.result);
				this.storeNewWPM(this.result);

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