<template>
    <div class="mt-5">
        <b-card :img-src="challenge.image" img-alt="Card image"  class="challange_detail_image" img-left img-width="200" img-height="200">
            <b-card-text>
                {{challenge.description}}
            </b-card-text>

            <b-button @click.prevent="removeChallange(challenge.id, user_id)" class="challange_remove_button btn-danger" >Remove challenge</b-button>
            <b-button @click.prevent="" class="challange_remove_button" disabled>Complete challenge</b-button>
        </b-card>
    </div>
</template>
<script>

export default {
    name: "card-detail-challenge-component",
    props: {
        challenge: Object,
        user_id: Number,
    },
    data() {
        return {
        }
    },
    methods: {
        async removeChallange(challange_id, user_id) {
            //TODO
            // await axios.delete('/api/boundle', {
            //     user_id: user_id,
            //     challenge_id: challange_id
            // }).then((response) => {
            //     location.reload()
            // });
        },
    },
    mounted() {

    }
}
</script>


<style scoped>
</style>
