@extends('frontend.layouts.master')
@section('page-title', 'Matche')
@section('website-content')

<style>
    .container1 {
            width: 80%;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .nav {
            display: flex;
        }
        .nav a {
            margin-left: 15px;
            text-decoration: none;
            color: #333;
            font-size: 18px;
        }
        .nav a:hover {
            text-decoration: underline;
        }
        .tabs {
            display: flex;
            justify-content: space-around;
            margin: 20px 0;
            border-bottom: 1px solid #ddd;
        }
        .tabs button {
            background: #f8f8f8;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 18px;
        }
        .tabs button.active {
            background: #ddd;
            border-bottom: 3px solid #007BFF;
        }
        .match {
            border: 1px solid #ddd;
            margin-bottom: 20px;
            padding: 10px;
            background: #f9f9f9;
        }
        .match h2 {
            font-size: 18px;
            margin: 0 0 10px 0;
        }
        .score {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #fff;
            padding: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            margin-top: 10px;
        }
        .score p {
            margin: 0;
            font-size: 16px;
        }
       
</style>

<div class="inner-page-banner">
    <div class="container">
    </div>
</div>
<div class="inner-information-text">
    <div class="container">
        <h3>Matches</h3>
        <ul class="breadcrumb">
            <li><a href="{{url('/')}}">Home</a></li>
            <li class="active">Matches</li>
        </ul>
    </div>
</div>
<section id="contant" class="contant main-heading team">
    <div class="container1">
        <div class="header">
            <h1>Live Cricket Score</h1>
            <div class="nav">
                <a href="#">Live</a>
                <a href="#">Recent</a>
                <a href="#">Upcoming</a>
            </div>
        </div>
        <div class="tabs">
            <button class="active">International</button>
            <button>League</button>
            <button>Domestic</button>
            <button>Women</button>
        </div>
        <div class="match">
            <h2>Australia vs Oman, 10th Match, Group B</h2>
            <p>Today · 6:00 AM at Bridgetown, Barbados, Kensington Oval</p>
            <div class="score">
                <p>AUS 164-5 (20 Ovs)</p>
                <p>OMAN 125-9 (20 Ovs)</p>
                <p>Australia won by 39 runs</p>
            </div>
           
        </div>
        <div class="match">
            <h2>Papua New Guinea vs Uganda, 9th Match, Group C</h2>
            <p>Today · 5:00 AM at Guyana, Providence Stadium</p>
            <div class="score">
                <p>PNG 77 (19.1 Ovs)</p>
                <p>UGA</p>
            </div>
            
        </div>
    </div>
</section>
@endsection