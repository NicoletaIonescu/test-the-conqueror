<template>
    <div class="mt-5">
        <b-card no-body class="challange_container rounded ">
            <img class="challange_wallpaper_image" :src="challenge.wallpaper">
            <div class="challange_fade"></div>
            <b-card-title class="challange_title text-center pt-5">{{ challenge.name }}</b-card-title>
            <img class="challange_image" :src="challenge.image"/>

            <b-card-text class="justify-content-center">
                <p class="challange_distance text-center">{{challenge.distance_km}} km / {{challenge.distance_ml }} mi </p>
                <p class="challange_virtual_postcard text-center">{{challenge.virtual_postcards}} Virtual Postcards</p>
                <p v-if="challenge.has_street_view" class="challange_street_view text-center"> Has Street View</p>
                <p v-else class="challange_street_view text-center">No Street View</p>

                <div class="text-center">
                    <span v-if="challenge.status === null">
                        <b-button @click.prevent="addChallange(challenge.id, user_id)" class="challange_add_button" >Add challenge</b-button>
                    </span>
                </div>
            </b-card-text>
        </b-card>
    </div>
</template>
<script>

import axios from "axios";

export default {
    name: "card-challenge-component",
    props: {
        challenge: Object,
        user_id: Number,
    },
    data() {
        return {

        }
    },
    methods: {
        async addChallange(challange_id, user_id) {
            await axios.post('/api/boundle', {
                user_id: user_id,
                challenge_id: challange_id
            }).then((response) => {
                location.reload()
            });
        },
    },
    mounted() {

    }
}
</script>


<style scoped>
.challange_container {
    position:relative;
    width: 12.75rem;
    min-height: 19rem;

    &:hover {
        margin-top:-0.5rem;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    }
}
.challange_wallpaper_image {
    width: 12.70rem;
}
.challange_fade {
    background: rgba(255, 255, 255, 0) linear-gradient(to bottom, rgba(0, 0, 0, 0) 10%, rgba(255, 255, 255, .1) 40%, rgba(255, 255, 255, .5) 75%, rgba(255, 255, 255, 1) 100%) repeat scroll 0 0;
    position: relative;
    margin-top: -3rem;
    height: 3rem;
}
.challange_title {
    font-size:1rem;
    font-weight: bold;
}
.challange_distance {
    font-size:0.9rem;
}

.challange_virtual_postcard {
    font-size:0.8rem;
    color: #888;
}
.challange_street_view {
    font-size:0.8rem;
}
.challange_image {
    position:absolute;
    top:-3rem;
    margin-left: auto;
    margin-right: auto;
    left: 0;
    right: 0;
    max-width: 10rem;
}

.challange_add_button {
    background-color: #000;
    font-weight: bold;
}
</style>
