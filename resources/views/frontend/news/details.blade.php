@extends('frontend.layouts.master')
@section('page-title', 'News Detail')
@section('website-content')

    <style>
            /* .container1 {
            width: 60%;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-top: 20px
        } */
        .card-header h3 {
            font-size: 24px;
            margin: 0 0 10px;
        }
        .author {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .author img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .author-name {
            font-size: 16px;
            font-weight: bold;
        }
        .social-buttons {
            display: flex;
            gap: 10px;
            margin-bottom: 10px;
        }
        .social-buttons button {
            border: none;
            background: #007bff;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        .feature-img {
            display: flex;
            justify-content: center;
            margin-bottom: 10px;
        }
        .feature-img img {
            height: 654px;
            width: 980px;
            border-radius: 5px;
        }
        .caption {
            font-size: 14px;
            color: gray;
            text-align: center;
            margin-bottom: 20px;
        }
        .content {
            font-size: 18px;
            line-height: 29px;
            letter-spacing: -.003em;
            padding: 0 100px;
        }
        h1{
            font-size: 36px;
    line-height: 42px;
    margin: 0;
    padding: 0 20px;
        }
    </style>

    <div class="inner-page-banner">
        <div class="container">
        </div>
    </div>
    <div class="inner-information-text">
        <div class="container">
            <h3>News Details</h3>
            <ul class="breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active">News Details</li>
            </ul>
        </div>
    </div>
    <section id="contant" class="contant main-heading team">

        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h1>Pitch not perfect: India cop bruises in straightforward win</h1>
                </div>
            
                <div class="feature-img">
                    <img src="{{asset('assets/frontend/images/logo.png')}}" alt="Feature Image">
                </div>
                <div class="content">
                    <p>India emerged from their opening match against Ireland unscathed, and that must go down as some achievement. In conditions that were dangerous to say the least, they also managed to land a few punches in the faces of the opposition. It was an easy, albeit painful, start to their World Cup campaign.</p>
                    <p>The conditions were eminently conducive for players to get hurt. The clouds rolled in and below them the the pitch offered dangerously spongy, tennis ball bounce and seam movement. That the Indian batters managed to survive the testing batting environment was a feat in itself. All players, including Rohit Sharma, who had to retire hurt after taking a blow on his shoulder, were declared safe.</p>
                </div>
            </div>
        </div>
            
    </section>
@endsection
