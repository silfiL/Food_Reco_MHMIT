<template>
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-3 text-orange regular-box">
                <h2>Edit User's Profile</h2>    
                <div class="user-info">
                    <div class="left">
                        <div class="row">
                            <img src="/images/xoxo.png" />
                        </div>
                        <div class="row center">
                            <a class="btn btn-default text-white orange">Change Picture</a>
                        </div>
                    </div>
                    <div class="right">
                        <form>
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="name">Full Name</label>
                                </div>
                                <div class="col-md-7">
                                    <input class="form-control" id="name" name="name" type="text" placeholder="Your name" value="Silfi Langie" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="email">Email Address</label>
                                </div>
                                <div class="col-md-7">
                                    <input class="form-control" id="email" name="email" type="email" placeholder="Your email" value="silfilangie04@gmail.com" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="birthday">Birthday</label>
                                </div>
                                <div class="col-md-7">
                                    <input class="form-control" id="birthday" name="birthday" type="date" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="address">Address</label>
                                </div>
                                <div class="col-md-7">
                                    <input class="form-control" id="address" name="address" type="text" placeholder="Your Address" />
                                </div>
                            </div>
                            <div class="row">
                                <router-link to="/profile">
                                    <a class="btn btn-default text-white blue">
                                        <span class="fa fa-save fa-fw"></span>
                                        Save
                                    </a>
                                </router-link>
                                <router-link to="/profile">
                                    <a class="btn btn-default text-white red">
                                        <span class="fa fa-remove fa-fw"></span>
                                        Cancel
                                    </a>
                                </router-link>
                            </div>
                        </form>
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