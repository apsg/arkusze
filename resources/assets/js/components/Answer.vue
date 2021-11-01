<template>
    <div class="d-flex question">
        <div class="p-2 question-number align-self-center">{{ answer.question.number }}</div>
        <div class="p-2 w-100 question-content align-self-center">
            {{ answer.question.content }}
        </div>
        <div class="p-2 d-flex align-items-end"
         :class="is_saved ? 'saved' : '' ">
            <div class="text-center p-1">
                <label>
                    Nigdy<br />
                    <input :disabled="is_finished" @change="onChange" type="radio" value="0" v-model="selected">
                </label>
            </div>
            <div class="text-center p-1">
                <label>
                    Rzadko<br />
                    <input :disabled="is_finished" @change="onChange" type="radio" value="1" v-model="selected">
                </label>
            </div>
            <div class="text-center p-1">
                <label>
                    Czasami<br />
                    <input :disabled="is_finished" @change="onChange" type="radio" value="2" v-model="selected">
                </label>
            </div>
            <div class="text-center p-1">
                <label>
                    Często<br />
                    <input :disabled="is_finished" @change="onChange" type="radio" value="3" v-model="selected">
                </label>
            </div>
            <div class="text-center p-1">
                <label>
                    Bardzo często<br />
                    <input :disabled="is_finished" @change="onChange" type="radio" value="4" v-model="selected">
                </label>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        props: ['answer', 'is_finished'],

        data(){
            return{
                selected: null,
                is_saved: false
            }
        },

        mounted() {
            this.selected = this.answer.answer;
        },

        computed: {

            formData(){
                return{
                    _method: "PATCH",
                    answer: this.selected
                }
            },

            endpoint(){
                return '/answers/'+this.answer.id;
            }

        },

        methods: {
            onChange(){
                this.is_saved = false;
                
                axios.post(this.endpoint, this.formData)
                    .then(r => {
                        this.is_saved = true;
                        this.$emit('answered', {
                            id: this.answer.id,
                            answer: this.selected
                        });
                    })
                    .catch(e => console.log(e));
            }
        }
    }
</script>

<style>

    .question{
        border-bottom: 1px solid #ccc;
    }

    .question-number{
        font-weight: 700;
        font-size: 2em;
    }

    .question-content{
        font-size: 1.3em;
        justify-content: center;
    }

    .question input{
        width: 30px;
        height: 30px;
    }

    .saved{
        background: rgba(0,200,10,0.03);
    }
</style>