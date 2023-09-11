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

        axios.get("api/dischi.php").then(function (response) {

            this.discs = response.data;

        })
    }


}).mount("#app");