@extends('admin.master')

@section('title')
    Add Slider
@endsection

@section('body')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Manage Slider</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" style="width: 100%">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Slider Image</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>Slider Image</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($sliders as $slider)
                            <tr>
                            <td>{!! $slider->title!!}</td>
                            <td>
                               <img src="images/{!! $slider->slider_img!!}" style="height: 100px; width: 100%;" >
                                
                            </td>
                            <td>{!! $slider->status==1 ? 'Published':'Unpublished'!!}</td>
                            <td>
                                <a href="{!! url('/edit_slider/'.$slider->id)!!}" class="btn btn-success">
                                    <span class="fa fa-edit"></span>
                                </a>

                                <a href="{!! url('/delete_slider/'.$slider->id)!!}" onclick="return confirm('Are you confirm to Delete?');" class="btn btn-danger">
                                    <span class="fa fa-trash"></span>
                                </a>
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection
