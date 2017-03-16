<template>
    <div>
        <form @submit.prevent="onSubmit">
                    <div class="form-group-trial">
                        <div class="row">
                            <label class="trail-label">Name</label>
                            <input type="text" class="trial-input" 
                            v-model="form.name"
                            v-bind:class="{ 'has-error': form.errors.has('name') }"    
                            ></input>
                        </div>
                    </div>
                    <div class="form-group-trial">
                        <div class="row">
                            <label class="trail-label">Email</label>
                            <input type="email" class="trial-input" 
                            v-model="form.email"
                            v-bind:class="{ 'has-error': form.errors.has('email') }"      
                            ></input>
                        </div>
                    </div>
                    <div class="form-group-trial">
                        <div class="row">
                            <label class="trail-label">Password</label>
                            <input type="password" class="trial-input" v-model="form.password"
                            v-bind:class="{ 'has-error': form.errors.has('password') }"  
                            ></input>
                        </div>
                    </div>
                    <div class="form-group-trial">
                        <div class="row">
                            <label class="trail-label">Confirm Password</label>
                            <input type="password" class="trial-input" v-model="form.password_confirmation"
                            v-bind:class="{ 'has-error': form.errors.has('password_confirmation') }"  
                            ></input>
                        </div>
                    </div>
                    <div class="form-group-trial">
                        <div class="row">
                            <label class="trail-label">What would you like to work on?</label>
                            <textarea class="trial-input" v-model="form.description"
                            v-bind:class="{ 'has-error': form.errors.has('description') }"  
                            ></textarea>
                        </div>
                    </div>
                    <span v-if="form.errors.any()" class="text-danger pull-left">
                        <strong v-if="form.errors.has('email')" v-text="form.errors.get('email')"></strong>
                        <strong v-else>Please add required info.</strong>
                    </span>
                    <button class="pull-right btn-register">Start Trial</button>
                </form>
    </div>
</template>

<script>
    import Form from '../../form/Form';
    export default {
        data(){
            return {
                form: new Form({
                    name: '',
                    email: '',
                    password: '',
                    password_confirmation: '',
                    description: ''
                }),
                url:'coach/register'
            }
        },
        props: ['slug'],
        mounted() {
        },
        methods: {
            onSubmit(){
                this.form.post(this.url).then(res => {
                    this.form.reset();
                    swal({
                        title: 'Success',
                        text: "Confirmation Email has been sent to you",
                        type: 'success'
                    });
                })
            }
        }
    }
</script>
<style scoped>
    
</style>

