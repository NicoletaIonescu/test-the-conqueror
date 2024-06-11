<template>
    <div>
        <h1 class="text-center m-auto all_challenges_title"> All Challanges </h1>

        <div class="container-fluid mb-3">
            <div class="row row-col-5 justify-content-center">
                <div v-for="item in this.challanges">
                    <div class="cols-xs-5 mx-2">
                       <card-challange-component :challenge="item" :user_id="user.id" ></card-challange-component>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import CardChallangeComponent from "../../components/CardChallangeComponent.vue";
import axios from 'axios'
import toast from '../../mixins/message.vue'
import { mapGetters } from 'vuex'
export default {
    components: {CardChallangeComponent},
    mixins: [toast],
    middleware: 'auth',
    data() {
        return {
            challanges:[]
        }
    },

    computed: mapGetters({
        user: 'auth/user'
    }),

    methods: {
        async loadChallanges () {

            const { data } = await axios.get('/api/challanges?user_id='+this.user.id);
            this.challanges = data.data;
            console.log(this.challanges);
        },
    },
    mounted() {
        this.loadChallanges();
    }
}
</script>

<style scoped>
.all_challenges_title {
    font-size:2.8rem;
}
</style>
