@extends('layouts.backOfficeLayout')
@section('titre1')
    Liste des salles
@endsection

@section('titre2')
    Liste des salles
@endsection

@section('content')


            <div class="card card-box">
                <div class="card-head">
                    <header>Listes des salles </header>
                    <div class="tools">
                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                    </div>
                </div>
                <div class="card-body ">
                    <div class="row p-b-20">
                        <div class="col-md-6 col-sm-6 col-6">
                            <div class="btn-group">
                                <a href="add_room.html" id="addRow" class="btn btn-info">
                                    Add New <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6">
                            <div class="btn-group pull-right">
                                <a class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-print"></i> Print </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="table-scrollable">
                        <div id="example4_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example4_length"><label>Show <select name="example4_length" aria-controls="example4" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="example4_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example4"></label></div></div></div><div class="row"><div class="col-sm-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 698.438px; padding-right: 17px;">





                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Libelle</th>
                                        <th>Description</th>
                                        <th>Capacite</th>
                                        <th>Adresse</th>
                                        <th>region</th>
                                        <th>ville</th>
                                        <th>localite</th>
                                        <th>pays</th>
                                        <th>Prix</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($salles as $salle)
                                        <td>{{ $salle->id }}</td>
                                        <td>{{ $salle->libelle }}</td>
                                        <td>{{ $salle->description }}</td>
                                        <td>{{ $salle->capacite }}</td>
                                        <td>{{ $salle->adresse }}</td>
                                        <td>{{ $salle->region }}</td>
                                        <td>{{ $salle->ville }}</td>
                                        <td>{{ $salle->localite }}</td>
                                        <td>{{ $salle->pays }}</td>
                                        <td>{{ $salle->prix_res }}</td>
                                        <td>

                                            <img src="{{ asset('uploads/'.$salle->image) }}" height="150" width="150">

                                        </td>

                                        <td> <a href="{{ route('editer-salle', $salle->id) }}" ><button type="button" class="btn btn-outline-info" >Modifier</button></a>
                                            {{-- <a href="{{ route('desactiveDomaine', $domaine->domaine_id) }}" > <button type="button" class="btn btn-outline-danger"
                                                onclick="return confirm('Vous êtes sûr ?')">Supprimer</button></a> --}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>























{{--


                            <table class="table table-hover table-checkable order-column full-width dataTable no-footer" role="grid" style="margin-left: 0px; width: 698.438px;"><thead>
                                <tr role="row"><th class="center sorting_asc" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" style="width: 40px;" aria-sort="ascending" aria-label=" img : activate to sort column descending"> img </th><th class="center sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" style="width: 11.3438px;" aria-label=" # : activate to sort column ascending"> # </th><th class="center sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" style="width: 33.3906px;" aria-label=" Type : activate to sort column ascending"> Type </th><th class="center sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" style="width: 52.9062px;" aria-label=" AC/Non AC : activate to sort column ascending"> AC/Non AC </th><th class="center sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" style="width: 33.4219px;" aria-label=" Meal : activate to sort column ascending"> Meal </th><th class="center sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" style="width: 64.1406px;" aria-label=" Bad Capacity : activate to sort column ascending"> Bad Capacity </th><th class="center sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" style="width: 53.5938px;" aria-label=" Phone : activate to sort column ascending"> Phone </th><th class="center sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" style="width: 31.125px;" aria-label=" Rent : activate to sort column ascending"> Rent </th><th class="center sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" style="width: 44.5156px;" aria-label=" Action : activate to sort column ascending"> Action </th></tr>
                            </thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;"><table class="table table-hover table-checkable order-column full-width dataTable no-footer" id="example4" role="grid" aria-describedby="example4_info" style="width: 703px;"><thead>
                                <tr role="row" style="height: 0px;"><th class="center sorting_asc" aria-controls="example4" rowspan="1" colspan="1" style="width: 40px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-sort="ascending" aria-label=" img : activate to sort column descending"><div class="dataTables_sizing" style="height:0;overflow:hidden;"> img </div></th><th class="center sorting" aria-controls="example4" rowspan="1" colspan="1" style="width: 11.3438px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label=" # : activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;"> # </div></th><th class="center sorting" aria-controls="example4" rowspan="1" colspan="1" style="width: 33.3906px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label=" Type : activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;"> Type </div></th><th class="center sorting" aria-controls="example4" rowspan="1" colspan="1" style="width: 52.9062px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label=" AC/Non AC : activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;"> AC/Non AC </div></th><th class="center sorting" aria-controls="example4" rowspan="1" colspan="1" style="width: 33.4219px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label=" Meal : activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;"> Meal </div></th><th class="center sorting" aria-controls="example4" rowspan="1" colspan="1" style="width: 64.1406px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label=" Bad Capacity : activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;"> Bad Capacity </div></th><th class="center sorting" aria-controls="example4" rowspan="1" colspan="1" style="width: 53.5938px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label=" Phone : activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;"> Phone </div></th><th class="center sorting" aria-controls="example4" rowspan="1" colspan="1" style="width: 31.125px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label=" Rent : activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;"> Rent </div></th><th class="center sorting" aria-controls="example4" rowspan="1" colspan="1" style="width: 44.5156px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label=" Action : activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;"> Action </div></th></tr>
                            </thead>

                            <tbody>











                            <tr class="gradeX odd" role="row">
                                    <td class="user-circle-img sorting_1">
                                        <img src="assets/img/user/user1.jpg" alt="">
                                    </td>
                                    <td class="center">101</td>
                                    <td class="center">Single</td>
                                    <td class="center">AC</td>
                                    <td class="center">Free Dinner</td>
                                    <td class="center">2</td>
                                    <td class="center">123456789</td>
                                    <td class="center">25$</td>
                                    <td class="center">
                                        <a href="edit_room.html" class="btn btn-tbl-edit btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a class="btn btn-tbl-delete btn-xs">
                                            <i class="fa fa-trash-o "></i>
                                        </a>
                                    </td>

                                </tr></tbody>
                        </table> --}}




                        </div></div></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example4_info" role="status" aria-live="polite">Showing 1 to 10 of 12 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example4_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example4_previous"><a href="#" aria-controls="example4" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example4" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example4" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="example4_next"><a href="#" aria-controls="example4" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                    </div>
                </div>
            </div>


@endsection
