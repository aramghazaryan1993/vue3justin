<template>

    <div>

        <div class="alert" v-if="invalidCredentials">
            <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
            Invalid Credentials
        </div>
        <validation-errors v-if="validationErrors" :errors="validationErrors"></validation-errors>
        <div class="forgot-page">
            <form class="form">
                <my-input type="text" placeholder="email address" v-model="user.email"/>
                <my-button type="submit" @click.prevent="sendForgotPassword" >Send Email</my-button>
                <router-link to="/register"> <p class="message">Go to login page  <a href="#">Sign In</a></p> </router-link>
            </form>
        </div>
    </div>
</template>

<script>

import { mapActions, mapGetters } from 'vuex';
export default {
    name: "ForgotPassword",
    data: () => ({
        user: {
            email: "",
        }
    }),
    created() {
        this.checkUserState()
    },
    computed: {
        ...mapGetters({
            invalidCredentials: 'auth/invalidCredentials',
            validationErrors: 'auth/errors'
        })
    },
    methods: {
        ...mapActions({
            checkUserState: "auth/setLoggedInstate",
            forgotPassword: 'auth/forgotPassword'
        }),
        sendForgotPassword() {
            this.$store.dispatch('auth/forgotPassword', this.user)
        },
        checkUserState() {
            this.$store.dispatch('auth/setLoggedInstate', this.user)
        }
    }

}
</script>

<style lang="scss">
.forgot-page {
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
/* The close button */
.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}
/* When moving the mouse over the close button */
.closebtn:hover {
    color: black;
}

</style>
