@extends('layout.layout')
@section('title', 'OrganicFood')
@section('content')

    <div class="grid wide">

        <div class="background_about">
            <h1 style="text-align: center;">About us</h1>
            <br><br>
            <div class="row">
                <div class="col l-6 m-6 c-12">
                    <img style="padding-left: 20px;" src="{{ url('img/about.png') }}" alt="" width="100%">
                </div>
                <div class="col l-6 m-6 c-12">
                    <h3>Our Mission</h3>
                    <h4>To help people live a better, healthier, and wholesome life by providing them with 100% certified,
                        authentic organic food.</h4>
                    <br>
                    <h3>Our Vision</h3>
                    <h4>To be the leading brand of Organic food in Vietnam.</h4>
                    <h4>To give back to the environment and advance on a path to sustainability.</h4>
                    <h4>To make consumers aware of the benefits of organic food by giving them healthy choices of eating.
                    </h4>
                    <h4>To create a big movement that would lead people to switch to organic food and take up a healthier
                        lifestyle just like it used to be hundreds of years ago, when pesticides were not introduced and
                        everything we ate was natural and chemical free.</h4>
                </div>
            </div>
            <br>
            <h1 style="text-align: center;">What We Stand For?</h1>
            <h4>Health is the wholeness and integrity of living systems. In a time where humans are taking away the goodness
                of nature, we strive to turn the wheel full circle by preserving it. Our philosophy is based on the
                principles of health, ecology, fairness, and care. We are making an effort towards a sustainable
                agro-ecosystem that ensures soil & water conservation and reduced pollution.
                <br><br>
                Organic is not just a healthy way of eating but also one which is guilt free. When we take care of the
                earth, it takes care of us too. Founded on the belief that nature need not lose out in our quest for
                advancement, Organic Food strives to support a wholesome life print. We do our bit for Mother Nature. And by
                making just one right change in life, so can everyone else. We can change the course of the things to come.
                Come to be part of the Organic Food story.
            </h4>

            <br>

            <h1 style="text-align: center;">Our team</h1>

            <div style="padding-left: 50px; padding-right: 50px;">
                <div class="row">
                    <div class="col col l-2-4 m-4 c-12">
                        <img class="img_about" src="{{ asset('member/img/avatar04.png') }}" alt="">
                        <h4 style="text-align: center;">Name</h4>
                    </div>
                    <div class="col col l-2-4 m-4 c-12">
                        <img class="img_about" src="{{ asset('member/img/avatar04.png') }}" alt="">
                        <h4 style="text-align: center;">Name</h4>
                    </div>
                    <div class="col col l-2-4 m-4 c-12">
                        <img class="img_about" src="{{ asset('member/img/avatar04.png') }}" alt="">
                        <h4 style="text-align: center;">Name</h4>
                    </div>
                    <div class="col col l-2-4 m-4 c-12">
                        <img class="img_about" src="{{ asset('member/img/avatar04.png') }}" alt="">
                        <h4 style="text-align: center;">Name</h4>
                    </div>
                    <div class="col col l-2-4 m-4 c-12">
                        <img class="img_about" src="{{ asset('member/img/avatar04.png') }}" alt="">
                        <h4 style="text-align: center;">Name</h4>
                    </div>
                </div>
            </div>

            <br><br>
        </div>
    </div>

    <style>
        .background_about {
            background-color: #fff;
            padding: 5px;
            margin-top: 16px;
            padding-left: 20px;
            padding-right: 20px;
        }
        .img_about{
            border-radius:50%;
            width: 100%;
        }
    </style>

@endsection
@section('script-section')


@endsection
