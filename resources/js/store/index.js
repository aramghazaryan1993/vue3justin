import Vuex from 'vuex'

import middleware from "./modules/middelware";
import auth from "./modules/auth";

export default new Vuex.Store({
    modules: {
        middleware,
        auth
    }
})
