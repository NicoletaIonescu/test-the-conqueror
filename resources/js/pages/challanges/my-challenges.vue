<template>
    <div>
        <h1 class="text-center m-auto all_challenges_title"> My Challenges </h1>

        <div class="container-fluid mb-3">
                <div v-for="item in this.challanges">
                    <div class="mx-2">
                        <card-detail-challenge-component  :challenge="item" :user_id="user.id" ></card-detail-challenge-component>
                    </div>
                </div>
        </div>

    </div>
</template>

<script>
import axios from 'axios'
import toast from '../../mixins/message.vue'
import { mapGetters } from 'vuex'
import CardDetailChallengeComponent from "../../components/CardDetailChallangeComponent.vue";
export default {
    components: {CardDetailChallengeComponent},
    mixins: [toast],
    middleware: 'auth',
    data() {
        return {
            challanges:[],
        }
    },

    computed: mapGetters({
        user: 'auth/user'
    }),

    methods: {
        async loadBundelsChallanges () {
            const { data } = await axios.get('/api/boundle?user_id='+this.user.id);
            this.challanges = data.data;
            console.log(this.bundels_challanges);
        },
    },
    mounted() {
        this.loadBundelsChallanges();
    }
}
</script>

<style scoped>
.all_challenges_title {
    font-size:2.8rem;
}
</style>
