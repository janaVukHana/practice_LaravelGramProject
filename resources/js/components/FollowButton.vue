<template>
    <div>
        <button class="btn btn-primary ms-3" @click="followUser" v-text="buttonText"></button>
    </div>
</template>

<script>
import axios from 'axios';

    export default {
        props: ['userId', 'follows'],
        
        mounted() {
            console.log('Component mounted.')
        },

        data: function() {
            return {
                status: this.follows
            }
        },

        methods: {
            followUser() {
                // alert('coooonnected');
                // how to talk to server = axios
                axios.post('/follow/' + this.userId)
                    .then(response => {
                        this.status = ! this.status;
                        console.log(response.data);
                    })
                    .catch(e => {
                        if(e.response.status == 401) {
                            window.location = '/login';
                        }
                    })
            }
        },
         
        computed: {
            buttonText() {                                  
                return (this.status) ? 'Unfollow' : 'Follow';
            }
        }
    }
</script>
