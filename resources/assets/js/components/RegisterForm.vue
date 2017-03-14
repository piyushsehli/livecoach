<template>
    <div>
        <form class="row" @submit.prevent="onSubmit">
            <input type="text" class="sign-input danger" name="name" v-model="form.name" placeholder="Name" required>
            <p class="text-danger" v-if="form.errors.has('name')" v-text="form.errors.get('name')"> </p>
            <input type="Email" class="sign-input danger" name="email" v-model="form.email" placeholder="Email" required>
            <p class="text-danger" v-if="form.errors.has('email')" v-text="form.errors.get('email')"> </p>
            <input type="password" class="sign-input" name="password" v-model="form.password" placeholder="Password" required> 
            <p class="text-danger" v-if="form.errors.has('password')" v-text="form.errors.get('password')"> </p>
            <input type="password" class="sign-input" name="password_confirmation" v-model="form.password_confirmation" placeholder="Re-Type Password" required>
            <p class="text-danger" v-if="form.errors.has('password_confirmation')" v-text="form.errors.get('password_confirmation')"> </p>
            <button type="submit" class="sign-button" >GO</button>
        </form>
    </div>
</template>

<script>
    import Form from '../form/Form';
    export default {
        data(){
            return {
                form: new Form({
                    name: '',
                    email: '',
                    password: '',
                    password_confirmation: '',
                }),
                url:'/register'
            }
        },
        props: ['slug'],
        mounted() {
        },
        methods: {
            onSubmit(){
                this.form.post(this.url).then(res => {
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