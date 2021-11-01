<template>
	<div class="test">
		<h3 class="header-sticky">Jak często w ciągu ostatnich czterech tygodni dziecko:</h3>
		
		<answer 
			v-for="answer in answers" :key="answer.id" 
			:answer="answer"
			@answered="onAnswered"
            :is_finished="is_finished"
			></answer>
		
		<div id="result" class="result">
            <p v-if="is_finished" class="p-4">
                <a :href="finished_url" class="btn btn-success">Test zakończony, pokaż wynik</a>
            </p>
			<p v-if="is_complete && !is_finished" class="p-4">
				<a :href="finish_url" class="btn btn-success">Zakończ i pokaż wynik</a>
			</p>
			<p v-if="!is_complete">nieukończony</p>
		</div>

	</div>
</template>


<script>

    export default {

        props: ['answers', 'is_finished'],

        data(){
            return{
            	completed: []
            }
        },

        mounted() {
            for(var answer in this.answers){
            	if(this.answers[answer].value != null){
            		this.completed.push(this.answers[answer].id);
            	}
            }
        },

        computed: {
        	is_complete(){
        		return this.completed.length == this.answers.length;
        	},

        	test_id(){
        		return this.answers[0].test_id;
        	},

        	finish_url(){
        		return "/tests/"+ this.test_id +"/finish";
        	},

            finished_url(){
                return "/tests/"+ this.test_id +"/result";
            }
        },

        methods: {
            onAnswered(data){
            	console.log(data);

            	if(this.completed.filter(item => item == data.id).length == 0){
            		this.completed.push(data.id);
            	}
            }
        }
    }
</script>

<style>
</style>