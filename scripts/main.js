"use strict";

Vue.createApp({

    data() {
        return {

            discs: []

        }
    },

    methods: {

    },

    mounted() {

        axios.get("api/dischi.php").then( (response) => {
            
            this.discs = response.data;

        })
    }


}).mount("#app");