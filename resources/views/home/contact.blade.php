@extends('layout.layout')
@section('title', 'OrganicFood')
@section('content')

    <div class="grid wide">
        <div class="background_contact">
            <h1 style="text-align: center;">Contact us</h1>
            <h4 style="text-align: center;">Swing by for a cup of coffee, or leave us a message:</h4><br>
            <div class="row">
                <div class="col l-6 m-6 c-12">
                    <iframe style="padding-left: 16px; padding-right: 16px; border:none;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3267176085174!2d106.66429871411651!3d10.786269461963021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f39e5fa506f%3A0xe9b82409cff3ad0d!2zNTgwIMSQLiBDw6FjaCBN4bqhbmcgVGjDoW5nIDgsIFBoxrDhu51uZyAxMSwgUXXhuq1uIDMsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1657281732772!5m2!1sen!2s"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col l-6 m-6 c-12">
                    <form action="{{ url('home/SendMailContact') }}">
                        <div class="row">
                            <div class="col l-6 m-6 c-12">
                                <div class="form-group">
                                    <label for="">Full name</label>
                                    <input type="text" class="form-control-organic" id="" name="name"
                                        placeholder="Input Name">
                                </div>
                            </div>
                            <div class="col l-6 m-6 c-12">
                                <div class="form-group">
                                    <label for="">E-mail</label>
                                    <input type="email" class="form-control-organic" id="" name="email"
                                        placeholder="Input Email">
                                </div>
                            </div>
                        </div><br><br>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="number" class="form-control-organic" id="" name="phone"
                                placeholder="Input your phone">
                        </div><br><br>
                        <div class="form-group">
                            <label for="">Message</label>
                            <textarea class="form-control-organic" id="" name="message" placeholder="Input message"></textarea>
                        </div><br><br>
                        <div style="text-align: center;">
                            <button class="Send_contact"><i class="glyphicon glyphicon-send"></i> Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>












    <style>
        .background_contact {
            background-color: #fff;
            padding: 5px 15px 5px 15px;
            margin-top: 30px;
            box-shadow: rgba(0, 0, 0, 0.2) 0px 1px 2px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .form-control-organic {
            width: 100%;
            padding: 8px;
            border: none;
            border-bottom: 1px solid;
            border-color: silver;
            font-size: 17px;
        }

        .form-control-organic:hover {
            border-color: #33CC33;
        }

        .form-control-organic:focus {
            outline: none;
            border-color: #33CC33;
        }

        .Send_contact {
            background-color: #33CC33;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 2px;
        }

        .Send_contact:hover {
            background-color: #0cad0c;
        }
    </style>

@endsection
@section('script-section')


@endsection
