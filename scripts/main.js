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

            console.log(response.data)
            
            this.discs = response.data;

            console.log(this.discs)

        })
    }


}).mount("#app");