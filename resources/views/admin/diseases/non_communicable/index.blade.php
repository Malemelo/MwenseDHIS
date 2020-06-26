@extends('layouts.admin')
@section('content')
    <section id="table-success">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Non Communicable Diseases List</h4>
            </div>
            <!-- datatable start -->
            <div class="table-responsive">
                <div id="table-extended-success_wrapper" class="dataTables_wrapper no-footer"><table id="table-extended-success" class="table mb-0 dataTable no-footer" role="grid">
                        <thead>
                        <tr role="row">
                            <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="account details" style="width: 58px;">id</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="account details" style="width: 228px;">Disease name</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="status" style="width: 64px;">created at</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="status" style="width: 64px;">updated at</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="action" style="width: 51px;">action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($non_communicables)
                            @foreach($non_communicables as $non_communicable)
                                <tr role="row" class="odd">

                                    <td class="text-bold-600">{{$non_communicable->id}}</td>
                                    <td>{{$non_communicable->name}}</td>
                                    <td class="text-success">{{$non_communicable->created_at->diffForHumans()}}</td>
                                    <td class="text-success">{{$non_communicable->updated_at->diffForHumans()}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></span>
                                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(19px, 19px, 0px);">
                                                <a class="dropdown-item" href="{{url('/edit_non_communicable/'.$non_communicable->id)}}"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                                <a class="dropdown-item" href="{{url('/delete_non_communicable/'.$non_communicable->id)}}"><i class="bx bx-trash mr-1"></i> delete</a>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table></div>
            </div>
            <!-- datatable ends -->
        </div>
    </section>
@endsection
