<template>
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-3 text-orange regular-box">
                <h2>User's Profile</h2>
                <router-link to="/profile/edit">
                    <a class="btn btn-default green text-white pull-right">
                        <span class="fa fa-edit fa-fw"></span> Edit
                    </a>    
                </router-link>
                <div class="user-info">
                    <div class="left">
                        <img src="/images/xoxo.png" />
                    </div>
                    <div class="right">
                        <div class="col-md-4">
                            <label>Full Name</label>
                        </div>
                        <div class="col-md-8">
                            <p>{{user.name}}</p>
                        </div>
                        <div class="col-md-4">
                            <label>Email Address</label>
                        </div>
                        <div class="col-md-8">
                            <p>{{user.email}}</p>
                        </div>
                        <div class="col-md-4">
                            <label>Birthday</label>
                        </div>
                        <div class="col-md-8">
                            <p>{{user.birthday}}</p>
                        </div>
                        <div class="col-md-4">
                            <label>Address</label>
                        </div>
                        <div class="col-md-8">
                            <p>{{user.address}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 col-md-offset-3 text-orange regular-box no-top">
                <p>Preferences :</p>
                <ul v-for="prefer in user.preferences" :key="prefer.id">
                    <li>{{prefer.name}}</li>
                </ul>
            </div>
        </div>
        <div class="row below">
            <div class="col-md-2">
                <router-link to="/">
                    <a class="btn btn-default blue text-white">
                        <span class="fa fa-chevron-left fa-fw"></span> Back
                    </a>
                </router-link>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        data(){
            return {
                user: {
                    name: 'Silfi Langie',
                    email: 'silfilangie04@gmail.com',
                    birthday: '-',
                    address: '-',
                    preferences: [
                        {id: 0, name: 'Vegetables'},
                        {id: 1, name:'Plain'}]
                }
            }
        },
        mounted()
        {

        },
        methods: {}
    }
</script>