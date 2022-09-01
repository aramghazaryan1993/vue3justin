<template>

    <div>

        <div class="alert" v-if="invalidCredentials">
            <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
            Invalid Credentials
        </div>
        <validation-errors v-if="validationErrors" :errors="validationErrors"></validation-errors>
        <div class="reset-page">
            <form class="form">
                <my-input type="text" placeholder="email address" v-model="user.email"/>
                <my-input type="password" placeholder="new password" v-model="user.password"/>
                <my-input type="password" placeholder="confirm new password" v-model="user.password_confirmation"/>
                <my-button type="submit" @click.prevent="sendResetPassword" >Send Email</my-button>
                <router-link to="/register"> <p class="message">Go to login page  <a href="#">Sign In</a></p> </router-link>
            </form>
        </div>
    </div>
</template>

<script>

import { mapActions, mapGetters } from 'vuex';
export default {
    name: "ResetPassword",
    data: () => ({
        user: {
            email: "",
            password: "",
            password_confirmation: "",
        }
    }),
    created() {
        this.checkUserState()
    },
    computed: {
        ...mapGetters({
            validationErrors: 'auth/errors',
            invalidCredentials: 'auth/invalidCredentials',
        })
    },
    methods: {
        ...mapActions({
            checkUserState: "auth/setLoggedInstate",
            resetPassword: 'auth/resetPassword'
        }),

    sendResetPassword() {
            const token = this.$route.params.token;
            this.resetPassword({...this.user, token})
        }
    }
}
</script>

<style lang="scss">
.reset-page {
    width: 360px;
    padding: 8% 0 0;
    margin: auto;
    display: flex;
}

/* The alert message box */
.alert {
    padding: 20px;
    background-color: #f44336; /* Red */
    color: white;
    margin-bottom: 15px;
}

</style>
