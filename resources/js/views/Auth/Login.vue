<template>
    <div>
        <div class="login-page">
            <form class="form">
                <my-input type="text" placeholder="email address" v-model="user.email"/>
                <my-input type="password" placeholder="password" v-model="user.password"/>
                <my-button type="submit"  >login</my-button>

                <router-link to="/register"> <p class="message">Not registered? <a href="#">Create an account</a></p> </router-link>
                <router-link to="/forgot-password" > <p class="message">Forgot your password? <a href="#">Reset password</a></p> </router-link>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    name: "login",
    data: () => ({
        user: {
            email: "",
            password: "",
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
