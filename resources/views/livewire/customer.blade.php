@push('customer', 'active')

<div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-info text-white-all">
            <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i>Customer</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-12 col-md-4">
        </div>

        <div class="col-12 col-md-8">

            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control" wire:model="searchKey" wire:keyup="fetchData" placeholder="Search Customers Here..."
                        aria-label="">
                    <div class="input-group-append">
                        <button class="btn search-btn" wire:click="FetchData">Search</button>
                    </div>
                    {{-- <button id="formOpen" wire:click="openModel" class="btn btn-info ml-1"><i class="fa fa-plus"
                            aria-hidden="true"></i> Create-New
                    </button> --}}
                </div>
            </div>
        </div>


    </div>

    @if (session()->has('message'))
    <div x-transition.duration.500ms x-data="{open: true}" x-init="setTimeout(() => {open = false}, 1500) "
        x-show="open" class="alert alert-success" id="alert" style="height:40px">
        {{-- <button type="button" class="close btn btn-sm" data-dismiss="alert" style="margin-top: -7px">X</button>
        --}}
        <div style="margin-top: -3px"> {{ session('message') }} </div>
    </div>
    @endif


    <div class="row">

        <div class="col-12 col-md-12">
            <div class="card">
                <div class="p-4">
                    <h4>Customer </h4>

                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover" id="tableExport">
                            <tr class="text-center">
                                <th>No</th>
                                <th>First Name</th>
                                <th>Sur Name</th>
                                <th>Telephone Number</th>
                                <th>Email</th>
                                {{-- <th>Password</th> --}}
                                <th>Address</th>
                                <th>Street</th>
                                <th>City</th>
                                <th>Postal Code</th>
                                {{-- <th>Actions</th> --}}
                            </tr>
                            {{-- @php($x = 1) --}}
                            @foreach ($items as $row)
                            <tr class="text-center">
                                <td>{{ $items->firstItem() + $loop->iteration -1 }}</td>
                                <td>{{$row->customer_fname}}</td>
                                <td>{{$row->customer_sname}}</td>
                                <td>{{$row->customer_tp}}</td>
                                <td>{{$row->customer_email}}</td>
                                {{-- <td>{{$row->password}}</td> --}}
                                <td>{{$row->address}}</td>
                                <td>{{$row->street}}</td>
                                <td>{{$row->city}}</td>
                                <td>{{$row->postal_code}}</td>
                               
                                {{-- <td> --}}

                                    {{-- @if (in_array('Update', $page_action))
                                    <a href="#" class="text-info" wire:click="updateRecord({{ $row->id }})"><i
                                            class="fa fa-pen" aria-hidden="true"></i>
                                    </a>
                                    @endif --}}

                                    {{-- @if (in_array('Delete', $page_action))
                                    <a href="#" class="text-danger m-2" wire:click="deleteOpenModel({{ $row->id }})"><i
                                            class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                    @endif --}}

                                {{-- </td> --}}
                            </tr>
                            {{-- @php($x++) --}}
                            @endforeach
                        </table>
                        <div class="row">
                            <div class="col-6 ml-2">
                                Showing {{$items->firstItem()}} - {{$items->lastItem()}} of {{$items->total()}}
                            </div>
                        </div>
                        <div class="float-right mr-3">
                            {{$items->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        {{-- delete model here --}}
        {{-- <div wire:ignore.self class="modal fade" id="delete-model" tabindex="-1" role="dialog"
            aria-labelledby="formModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-danger" id="formModal">Warning!</h5>
                        <button type="button" class="close btn" style="font-size:27px" data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">
                            If you want to remove this data, <b>you can't undo</b>, It will be affected that
                            relevant
                            records!
                        </p>

                        <div class="text-right">
                            <button type="button" wire:click="deleteCloseModel"
                                class="btn btn-success m-t-15 waves-effect">No </button>
                            <button type="button" wire:click="deleteRecord"
                                class="btn btn-danger m-t-15 waves-effect">Yes</button>
                        </div>

                    </div>
                </div>
            </div>
        </div> --}}
        {{-- model end --}}
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("#formOpen").click(function() {
            $("#div3").fadeIn(500);
        });
    });
</script>