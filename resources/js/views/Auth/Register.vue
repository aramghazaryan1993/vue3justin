<template>
    <div>
        <div class="login-page">
            <form class="form">
                <my-input type="text" placeholder="email address" v-model="user.email"/>
                <my-input type="password" placeholder="password" v-model="user.password"/>
                <my-input type="text" placeholder="password confirmation" v-model="user.password_confirmation"/>
                <my-button type="submit"  >Register</my-button>

                <router-link to="/login"> <p class="message">Not registered? <a href="#">Sing In</a></p> </router-link>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    name: "Register",
    data: () => ({
        user: {
            email: "",
            password: "",
            password_confirmation: "",
        }
    })
}
</script>

<style scoped lang="scss">
.login-page {
    width: 360px;
    padding: 8% 0 0;
    margin: auto;
    display:flex;
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
