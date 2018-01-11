@extends('layouts.app')

@section('content')
<div class="bg narrow">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="about-text grey-blue">
                    <h2 class="text-orange">About MHMIT</h2>
                    <p class="justify text-orange">Food Recommendation MHMIT stands for "Makan Hemat Murah Irit Terjangkau". We are suddenly inspired to build this website because of our daily problem. As a dormitory student, it is very common to ask your friends about what you guys should eat. It's a very simple question yet confusing. Besides that, we don't know which place sells the not-really-expensive but tasty foods. So, here we are, coming with a solution for you guys. 
                </div>
                <div class="contact-us text-green">
                    <h2><b>Contact Us</b>;</h2>
                    <div class="small-row">
                        <span class="fa fa-lg fa-google-plus fa-fw" aria-hidden="true"></span>
                        <span><b>foodreco_mhmit@gmail.com</b></span>
                    </div>
                    <div class="small-row">
                        <span class="fa fa-lg fa-facebook fa-fw" aria-hidden="true"></span>
                        <span><b>foodreco_mhmit</b></span>
                    </div>
                    <div class="small-row">
                        <span class="fa fa-lg fa-instagram fa-fw" aria-hidden="true"></span>
                        <span><b>foodreco_mhmit</b></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-us grey-blue">
                    <div>
                        <h2 class="text-orange">About Us</h2>
                    </div>
                    <div>
                        <div class="left">
                            <img src="/images/xoxo.png" />
                        </div>
                        <div class="right">
                            <div class="row">
                                <button class="btn blue text-white" type="button" data-toggle="collapse" data-target="#profile1" aria-expanded="false" aria-controls="profile1">
                                    Author 1
                                </button>
                                <button class="btn green text-white" type="button" data-toggle="collapse" data-target="#profile2" aria-expanded="false" aria-controls="profile2">
                                    Author 2
                                </button>
                                <button class="btn red text-white" type="button" data-toggle="collapse" data-target="#profile3" aria-expanded="false" aria-controls="profile3">
                                    Author 3
                                </button>
                            </div>
                            <div>
                                <div class="collapse justify about-profile" id="profile1">
                                    
                                        lalalalalalla
                                    
                                </div>
                                <div class="collapse justify about-profile" id="profile2">
                                    
                                        lalalalalalla
                                    
                                </div>
                                <div class="collapse justify about-profile" id="profile3">
                                    
                                        lalalalalalla
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
