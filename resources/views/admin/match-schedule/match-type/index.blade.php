@extends('admin.layouts.master')
@section('pagetitle','Match Type')
@section('admin-content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Match Type List</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Match Type</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                        <div class="card-header d-md-flex justify-content-between">
                            <h4>Match Type</h4>
                            <div>
                                <button type="button" class="btn btn-primary rounded" data-toggle="modal" data-target="#staticBackdrop"><i class="fas fa-plus"></i>
                                    Add Match Type
                                </button>
                           </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($matchtype as $key => $item)
                                    <tr style="align-items: center">
                                        <td>{{++$key}}</td>
                                        <td style="text-transform: capitalize;">{{$item->name ?? 'N/A'}}</td>
                                        <td>
                                            @if ($item->status === 1)
                                                <span class="badge bg-success p-2">Active</span>
                                            @else
                                                <span class="badge bg-danger p-2">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a data-value="{{$item->id}}" class="btn btn-success btn-action mr-1 editbtn" data-toggle="modal" data-target="#staticBackdrop-1"><i class="fas fa-edit"></i></a>
                                            <a href="{{url('admin/matchschedule/matchtype/delete/'. $item->id)}}" class="btn btn-danger btn-action mr-1" data-toggle="tooltip" title="delete"  onclick="return confirm('Are you sure want to delete this matchtype?')" ><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
    <!--End Main Content -->

    {{-- edit modal --}}
    <div class="modal fade" id="staticBackdrop-1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel2">Edit Matchtype</h1>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">x</button>
                </div>
                <form action="{{ url('admin/matchschedule/matchtype/update') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="matchtype_id" id="matchtype_id">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" id="matchname" class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label class="form-label">Status</label>
                                <select class="form-control d-inline" name="status" id="matchstatus">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end edit modal --}}  

    {{-- add modal --}}
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Matchtype</h1>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">x</button>
                </div>
                <form action="{{ url('admin/matchschedule/matchtype/store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" id="" class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label class="form-label">Status</label>
                                <select class="form-control d-inline" name="status">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end add modal --}}

       

    {{-- screipt --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
 
    <script>
        $('.editbtn').on('click', function () {
            var matchtype_id = $(this).data('value');
            console.log(matchtype_id);
            $.ajax({
                url: "{{url('admin/matchschedule/matchtype/edit/')}}"+'/'+ matchtype_id,
                type: 'GET',
                success: function(response){
                    console.log(response)
                    $('#matchtype_id').val(response.id);
                    $('#matchname').val(response.name);
                    $('#matchstatus').val(response.status);
                }
            });
        });
    </script>
@endsection
