@extends('frontend.layouts.master')
@section('page-title', 'Team Detail')
@section('website-content')

<style>
    .sidebar {
        padding: 0;
        list-style: none;
        background-color: #f8f9fa;
        height: 100%;
        margin-top: 20px;
    }

    .sidebar li {
        padding: 10px;
        border-bottom: 1px solid #ddd;
        text-align: left;

    }

    .sidebar li a {
        color: #333;
        text-decoration: none;
    }

    .sidebar li.active,
    .sidebar li:hover {
        background-color: #cfcfcf;
    }

    .sidebar li.active a,
    .sidebar li:hover a {
        color: #000;
    }

    .table-responsive {
        margin-top: 20px;
        text-align: left;
    }

</style>
<div class="inner-page-banner">
    <div class="container">
    </div>
</div>
<div class="inner-information-text">
    <div class="container">
        <h3>Team Details</h3>
        <ul class="breadcrumb">
            <li><a href="{{url('/')}}">Home</a></li>
            <li class="active">Team Details</li>
        </ul>
    </div>
</div>
<section id="contant" class="contant main-heading team">
    <div class="row">
        <div class="col-12">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h4 style="text-align: left; margin-left:20px">India National Cricket Team</h4>
                    </div>

                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab2" role="tablist">
                            <li class="nav-item active">
                                <a class="nav-link active " id="home-tab2" data-toggle="tab" href="#home2" role="tab" aria-controls="home" aria-selected="true">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="schedule-tab2" data-toggle="tab" href="#schedule" role="tab" aria-controls="schedule" aria-selected="false">Schedule</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="results-tab2" data-toggle="tab" href="#results" role="tab" aria-controls="results" aria-selected="false">Results</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="news-tab2" data-toggle="tab" href="#news" role="tab" aria-controls="news" aria-selected="false">News</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="stats-tab2" data-toggle="tab" href="#stats" role="tab" aria-controls="stats" aria-selected="false">Stats</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="player-tab2" data-toggle="tab" href="#player" role="tab" aria-controls="Player" aria-selected="false">Players</a>
                            </li>
                        </ul>

                        <div class="tab-content tab-bordered" id="myTab3Content">

                            {{-- home --}}
                            <div class="tab-pane  active " id="home2" role="tabpanel" aria-labelledby="home-tab2">
                                <div class="container">
                                    <h4 style="text-align: left; margin-bottom: 15px;">Top Stories</h4>
                                    <table class="table">
                                        <tbody style="text-align: left">
                                            <tr>
                                                <td style="width: 250px;"> <img src="https://via.placeholder.com/250" alt="News Image" width="200" height="150" class="img-fluid"></td>
                                                <td>
                                                    Ireland hope to spring surprise as India begin their campaign<br>
                                                    With the conditions in New York unpredictable,
                                                    Ireland hope to continue their giant-killing spree.<br>
                                                    <span>Jun 04 2024</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 250px;"><img src="https://via.placeholder.com/250" alt="News Image" width="200" height="150" class="img-fluid"></td>
                                                <td>
                                                    Tried to convince Dravid to stay on as coach: Rohit<br>
                                                    IThe current head coach has confirmed that he's not seeking extension and that the ongoing
                                                    T20 World Cup will be his last assignment in the role<br>
                                                    Nassau County International Cricket Stadium, New York<br>
                                                    <span>Jun 04 2024</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 250px;"> <img src="https://via.placeholder.com/250" alt="News Image" width="200" height="150" class="img-fluid"></td>
                                                <td>
                                                    Ireland hope to spring surprise as India begin their campaign<br>
                                                    With the conditions in New York unpredictable, Ireland
                                                    hope to continue their giant-killing spree.<br>
                                                    <span>Jun 04 2024</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>

                            {{-- schedule --}}
                            <div class="tab-pane fade" id="schedule" role="tabpanel" aria-labelledby="schedule-tab2">
                                <div class="container">
                                    <h4 style="text-align: left; margin-bottom: 15px;">India Cricket Team Schedule</h4>

                                    <table class="table table-striped">
                                        <thead style="background-color: lightgray">
                                            <tr>
                                                <th style="width: 250px">Date</th>
                                                <th>Match Details</th>
                                                <th>Time</th>
                                            </tr>
                                        </thead>
                                        <tbody style="text-align: left">
                                            <tr>
                                                <td>Jun 05, Wed</td>
                                                <td>
                                                    <a href="#">India vs Ireland, 8th Match, Group A</a><br>
                                                    ICC Mens T20 World Cup 2024<br>
                                                    Nassau County International Cricket Stadium, New York<br>
                                                    <span style="color: orange;">Match starts at Jun 05, 14:30 GMT</span>
                                                </td>
                                                <td>
                                                    8:00 PM<br>
                                                    02:30 PM GMT / 10:30 AM LOCAL
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jun 09, Sun</td>
                                                <td>
                                                    <a href="">India vs Pakistan, 19th Match, Group A</a><br>
                                                    ICC Mens T20 World Cup 2024<br>
                                                    Nassau County International Cricket Stadium, New York<br>
                                                    <span style="color: orange;">Match starts at Jun 09, 14:30 GMT</span>
                                                </td>
                                                <td>
                                                    8:00 PM<br>
                                                    02:30 PM GMT / 10:30 AM LOCAL
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jun 12, Wed</td>
                                                <td>
                                                    <a href="">United States vs India, 25th Match, Group A</a><br>
                                                    ICC Mens T20 World Cup 2024<br>
                                                    Nassau County International Cricket Stadium, New York<br>
                                                    <span style="color: orange;">Match starts at Jun 12, 14:30 GMT</span>
                                                </td>
                                                <td>
                                                    8:00 PM<br>
                                                    02:30 PM GMT / 10:30 AM LOCAL
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            {{-- results --}}
                            <div class="tab-pane fade" id="results" role="tabpanel" aria-labelledby="results-tab2">
                                <div class="container">
                                    <h4 style="text-align: left; margin-bottom: 15px;">India Cricket Team Results</h4>

                                    <table class="table table-striped">
                                        <thead style="background-color: lightgray">
                                            <tr>
                                                <th style="width: 250px">Date</th>
                                                <th>Match Details</th>
                                            </tr>
                                        </thead>
                                        <tbody style="text-align: left">
                                            <tr>
                                                <td>Jun 01, Sat</td>
                                                <td>
                                                    <a href="#">India vs Bangladesh, 15th Match</a><br>
                                                    ICC Mens T20 World Cup Warm-up Matches 2024<br>
                                                    Nassau County International Cricket Stadium, New York<br>
                                                    <span style="color: rgb(61, 61, 241);">India won by 60 runs</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Mar 07, Thu</td>
                                                <td>
                                                    <a href="#">England vs India, 5th Test</a><br>
                                                    England tour of India, 2024<br>
                                                    Himachal Pradesh Cricket Association Stadium, Dharamsala<br>
                                                    <span style="color: rgb(61, 61, 241);">India won by an innings and 64 runs</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jun 01, Sat</td>
                                                <td>
                                                    <a href="#">India vs Bangladesh, 15th Match</a><br>
                                                    ICC Mens T20 World Cup Warm-up Matches 2024<br>
                                                    Nassau County International Cricket Stadium, New York<br>
                                                    <span style="color: rgb(61, 61, 241);">India won by 60 runs</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Mar 07, Thu</td>
                                                <td>
                                                    <a href="#">England vs India, 5th Test</a><br>
                                                    England tour of India, 2024<br>
                                                    Himachal Pradesh Cricket Association Stadium, Dharamsala<br>
                                                    <span style="color: rgb(61, 61, 241);">India won by an innings and 64 runs</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            {{-- news --}}
                            <div class="tab-pane fade" id="news" role="tabpanel" aria-labelledby="news-tab2">
                                <div class="container" style="margin-top: 20px">
                                    <table class="table">
                                        {{-- <thead style="background-color: lightgray">
                                                <tr>
                                                    <th style="width: 250px">Date</th>
                                                    <th>Match Details</th>
                                                    <th>Time</th>
                                                </tr>
                                            </thead> --}}
                                        <tbody style="text-align: left">
                                            <tr>
                                                <td style="width: 250px;"> <img src="https://via.placeholder.com/250" alt="News Image" width="200" height="150" class="img-fluid"></td>
                                                <td>
                                                    <a href="#">Ireland hope to spring surprise as India begin their campaign</a><br>
                                                    With the conditions in New York unpredictable,
                                                    Ireland hope to continue their giant-killing spree.<br>
                                                    <span>Jun 04 2024</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 250px;"><img src="https://via.placeholder.com/250" alt="News Image" width="200" height="150" class="img-fluid"></td>
                                                <td>
                                                    Tried to convince Dravid to stay on as coach: Rohit<br>
                                                    IThe current head coach has confirmed that he's not seeking extension and that the ongoing
                                                    T20 World Cup will be his last assignment in the role<br>
                                                    Nassau County International Cricket Stadium, New York<br>
                                                    <span>Jun 04 2024</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 250px;"> <img src="https://via.placeholder.com/250" alt="News Image" width="200" height="150" class="img-fluid"></td>
                                                <td>
                                                    Ireland hope to spring surprise as India begin their campaign<br>
                                                    With the conditions in New York unpredictable, Ireland
                                                    hope to continue their giant-killing spree.<br>
                                                    <span>Jun 04 2024</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            {{-- stats --}}
                            <div class="tab-pane fade" id="stats" role="tabpanel" aria-labelledby="stats-tab2">
                                <div class="container">
                                    <div class="col-md-3">
                                        <ul class="sidebar">
                                            <li style=" background-color:  #000; color:#fff">Batting</li>
                                            <li class="active"><a href="#">Most Runs</a></li>
                                            <li><a href="#">Highest Scores</a></li>
                                            <li><a href="#">Best Batting Average</a></li>
                                            <li><a href="#">Best Batting Strike Rate</a></li>
                                            <li><a href="#">Most Hundreds</a></li>

                                            <li style=" background-color:  #000; color:#fff">Bowling</li>
                                            <li><a href="#">Most Wickets</a></li>
                                            <li><a href="#">Best Bowling Average</a></li>
                                            <li><a href="#">Best Bowling</a></li>
                                            <li><a href="#">Most 5 Wickets Haul</a></li>
                                            <li><a href="#">Best Economy</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="table-responsive">
                                            <table class="table  table-bordered">
                                                <thead style="background-color: lightgray">
                                                    <tr>
                                                        <th>PLAYER</th>
                                                        <th>MATCHES</th>
                                                        <th>INNS</th>
                                                        <th>RUNS</th>
                                                        <th>AVG</th>
                                                        <th>SR</th>
                                                        <th>4s</th>
                                                        <th>6s</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="#">Sachin Tendulkar</a></td>
                                                        <td>200</td>
                                                        <td>329</td>
                                                        <td>15,921</td>
                                                        <td>54</td>
                                                        <td>54</td>
                                                        <td>2,058</td>
                                                        <td>69</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rahul Dravid</td>
                                                        <td>163</td>
                                                        <td>284</td>
                                                        <td>13,265</td>
                                                        <td>53</td>
                                                        <td>43</td>
                                                        <td>1,652</td>
                                                        <td>21</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sunil Gavaskar</td>
                                                        <td>125</td>
                                                        <td>214</td>
                                                        <td>10,122</td>
                                                        <td>51</td>
                                                        <td>66</td>
                                                        <td>1,016</td>
                                                        <td>26</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Virat Kohli</td>
                                                        <td>113</td>
                                                        <td>191</td>
                                                        <td>8,848</td>
                                                        <td>49</td>
                                                        <td>56</td>
                                                        <td>991</td>
                                                        <td>26</td>
                                                    </tr>
                                                    <tr>
                                                        <td>VVS Laxman</td>
                                                        <td>134</td>
                                                        <td>225</td>
                                                        <td>8,781</td>
                                                        <td>46</td>
                                                        <td>49</td>
                                                        <td>1,135</td>
                                                        <td>5</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Virender Sehwag</td>
                                                        <td>103</td>
                                                        <td>178</td>
                                                        <td>8,503</td>
                                                        <td>49</td>
                                                        <td>82</td>
                                                        <td>1,219</td>
                                                        <td>90</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sourav Ganguly</td>
                                                        <td>113</td>
                                                        <td>188</td>
                                                        <td>7,212</td>
                                                        <td>42</td>
                                                        <td>51</td>
                                                        <td>900</td>
                                                        <td>57</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cheteshwar Pujara</td>
                                                        <td>103</td>
                                                        <td>176</td>
                                                        <td>7,195</td>
                                                        <td>44</td>
                                                        <td>44</td>
                                                        <td>863</td>
                                                        <td>16</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dilip Vengsarkar</td>
                                                        <td>116</td>
                                                        <td>185</td>
                                                        <td>6,868</td>
                                                        <td>42</td>
                                                        <td>60</td>
                                                        <td>560</td>
                                                        <td>17</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mohammad Azharuddin</td>
                                                        <td>99</td>
                                                        <td>147</td>
                                                        <td>6,215</td>
                                                        <td>45</td>
                                                        <td>63</td>
                                                        <td>720</td>
                                                        <td>19</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gundappa Viswanath</td>
                                                        <td>91</td>
                                                        <td>155</td>
                                                        <td>6,080</td>
                                                        <td>42</td>
                                                        <td>76</td>
                                                        <td>616</td>
                                                        <td>6</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kapil Dev</td>
                                                        <td>131</td>
                                                        <td>184</td>
                                                        <td>5,248</td>
                                                        <td>31</td>
                                                        <td>95</td>
                                                        <td>587</td>
                                                        <td>61</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ajinkya Rahane</td>
                                                        <td>85</td>
                                                        <td>144</td>
                                                        <td>5,077</td>
                                                        <td>38</td>
                                                        <td>50</td>
                                                        <td>579</td>
                                                        <td>35</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MS Dhoni</td>
                                                        <td>90</td>
                                                        <td>144</td>
                                                        <td>4,876</td>
                                                        <td>38</td>
                                                        <td>59</td>
                                                        <td>544</td>
                                                        <td>78</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- players --}}
                            <div class="tab-pane fade" id="player" role="tabpanel" aria-labelledby="player-tab2">
                                <p>players</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
