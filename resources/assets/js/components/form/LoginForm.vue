<template>
    <div>
    
        <form class="row" @submit.prevent="onSubmit">
            <input type="Email" class="sign-input danger" name="email" v-model="form.email" placeholder="Email" required>
            <p class="text-danger" v-if="form.errors.has('email')" >These credentials do not match our records.</p>
            
            <input type="password" class="sign-input" name="password" v-model="form.password" placeholder="Password" required> 
            <p class="text-danger" v-if="form.errors.has('password')" v-text="form.errors.get('password')"> </p>

            <button class="sign-button">GO</button>
        </form>
    </div>
</template>

<script>
    import Form from '../../form/Form';
    export default {
        data(){
            return {
                form: new Form({
                    email: '',
                    password: '',
                }),
                url:'/login'
            }
        },
        props: ['slug'],
        mounted() {
        },
        methods: {
                onSubmit(){
                    this.form.post(this.url).then(res => {
                        location.reload();
                    })
                }
        }
    }
</script>

<style scoped>
    .bid-btn{
        color:white;
        background-color: #fe980f;
        margin:10px 0px;
    }
    .chat-btn{
        color:white;
        background-color: #fe980f;
        margin:10px 0px;
    }
</style>