<template>
    <input type="hidden" name="_token" :value="csrf">
    <div>
        <validation-errors v-if="validationErrors" :errors="validationErrors"></validation-errors>
        <div class="register-page">
            <form class="form">
                <my-input type="text" placeholder="email name" v-model="user.name"/>
                <my-input type="text" placeholder="email address" v-model="user.email"/>
                <my-input type="password" placeholder="password" v-model="user.password"/>
                <my-input type="text" placeholder="password confirmation" v-model="user.password_confirmation"/>
                <my-button type="submit" @click.prevent="register"  >Register</my-button>

                <router-link to="/login"> <p class="message">Not registered? <a href="#">Sing In</a></p> </router-link>
            </form>
        </div>
    </div>
</template>

<script>

import { mapGetters } from 'vuex';

export default {
    name: "Register",
    data: () => ({
        user: {
            name: "",
            email: "",
            password: "",
            password_confirmation: "",
        }
    }),
    computed: {
        ...mapGetters({
            validationErrors: 'auth/errors'
        })
    },
    methods: {
        register() {
            this.$store.dispatch('auth/registerUser', this.user)
        }
    }
}
</script>

<style lang="scss">
.register-page {
    width: 360px;
    padding: 8% 0 0;
    margin: auto;
    display: flex;
}
.form {
    position: relative;
    z-index: 1;
    background-color: var(--color-grey-dark-1);
    background-image: linear-gradient(rgba(#101d2c, .93), rgba(#101d2c, .93)), url(/../../../img/book.jpg);
    background-size: cover;
    background-position: center;
    max-width: 360px;
    margin: 0 auto 100px;
    padding: 45px;
    text-align: center;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.5), 0 5px 0 rgba(0, 0, 0, 0.2);
}
.form input {
    font-family: "Roboto", sans-serif;
    outline: 0;
    background: #f2f2f2;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    box-sizing: border-box;
    font-size: 14px;
}
.form .message {
    margin: 15px;
    color: #b3b3b3;
    font-size: 12px;
}
.form .message a {
    color: #c69963;
    text-decoration: none;
}
</style>
