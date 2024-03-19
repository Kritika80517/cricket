@extends('admin.layouts.master')
@section('pagetitle','Add Player')
@section('admin-content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Add Player</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{url('admin/dashboard')}}">Dashboard</a></div>
                    <div class="breadcrumb-item active"><a href="{{url('admin/matchschedule/players')}}">Players List</a></div>
                    <div class="breadcrumb-item">Add Player</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <form action="{{route('admin.matchschedule.players.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="matchtype">Match Type</label>
                                                <select class="form-control select2" name="match_ids[]" multiple="multiple" id="matches">
                                                    @foreach ($matchtype as $item)
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger">@error('match_ids') {{$message}} @enderror</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="team">Team</label>
                                                <select class="form-control" name="team_ids"  id="teams">
                                                    <option selected disabled>--Select team--</option>
                                                    @foreach ($team as $item)
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger">@error('team_ids') {{$message}} @enderror</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" class="form-control" name="name" id="name">
                                                <span class="text-danger">@error('name') {{$message}} @enderror</span>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Nationality</label>
                                                <input type="text" class="form-control" name="country" id="country">
                                                <span class="text-danger">@error('country') {{$message}} @enderror</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="dob">DOB</label>
                                                <input type="date" class="form-control" name="dob" id="dob">
                                                <span class="text-danger">@error('dob') {{$message}} @enderror</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="birth_place">Birth Place</label>
                                                <input type="text" class="form-control" name="birth_place" id="birth_place">
                                                <span class="text-danger">@error('birth_place') {{$message}} @enderror</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="image">Image</label>
                                                <input type="file" class="form-control" name="image" id="image">
                                                <span class="text-danger">@error('image') {{$message}} @enderror</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="role">Role</label>
                                                <select class="form-control" name="playing_role">
                                                    <option selected disabled>--Select role--</option>
                                                    <option value="bat_men">BatsMen</option>
                                                    <option value="bowler">Bowler</option>
                                                    <option value="wicket_keeper">Wicket Keeper</option>
                                                    <option value="all_rounder">All Rounder</option>
                                                </select>
                                                <span class="text-danger">@error('playing_role') {{$message}} @enderror</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="bat_style">Batting Style</label>
                                                <select class="form-control" name="batting_style">
                                                    <option selected disabled>--Select batting style--</option>
                                                    <option value="right_handed_bat">Right Handed Bat</option>
                                                    <option value="left_handed_bat">Left Handed Bat</option>
                                                </select>
                                                <span class="text-danger">@error('batting_style') {{$message}} @enderror</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="bol_style">Bowling Style</label>
                                                <select class="form-control" name="bowling_style">
                                                    <option selected disabled>--Select bowling style--</option>
                                                    <option value="right_handed_seam_boling">Right-arm seam bowling</option>
                                                    <option value="left_handed_seam_boling">Left-arm seam bowling</option>
                                                    <option value="right_handed_spin_boling">Right-arm spin bowling </option>
                                                    <option value="left_handed_spin_boling">Left-arm spin bowling </option>
                                                </select>
                                                <span class="text-danger">@error('bowling_style') {{$message}} @enderror</span>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="about">Profile</label>
                                                <textarea name="about" id="about" class="form-control"></textarea>
                                                <span class="text-danger">@error('profile') {{$message}} @enderror</span>
                                            </div>
                                        </div>
                                       
                                    </div>

                                    <div class="row d-flex justify-content-end">
                                        <div class="col-md-6 text-right">
                                            <button type="submit" name="submit" style="font-size: 15px;" class="btn btn-primary btn-lg">
                                                Submit
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--End Main Content -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".select2").select2();
        });
    </script>
@endsection
