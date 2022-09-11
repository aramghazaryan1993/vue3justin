// export default function ({next, store}) {

    // if (!store.getters.auth.loggedIn)
    // {
    //     return next('login')
    // }
    // return next()

    export default function ({next, store}) {

        if (!store.getters.auth.token) {
            return next('login')
        }
        return next()
    }

    // if (!store.getters.auth.loggedIn || !store.getters.auth().token)
    // {
    //     return next('login')
    // }
    // return next()
// }
