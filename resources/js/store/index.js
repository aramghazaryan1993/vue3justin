import Vuex from 'vuex'

import middleware from "./modules/middelware";

export default new Vuex.Store({
    modules: {
        middleware
    }
})
