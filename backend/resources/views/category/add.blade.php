@extends('layouts.admin')

@section('title')
<title>Home</title>
@endsection

@section('content')

  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
    @include('partials.content-header', ['name' => 'category', 'key'=>'Add'])

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <form action="{{ route('cate-store') }}", method="POST">
              @csrf
              <div class="form-group">
                <label >ten Danh Muc</label>
                <input class="form-control" type="text" name="name" placeholder="ten danh muc">
              </div>

              <div class="form-group">
                <label >Chondanhmuccha</label>
                <select class="form-control" name="parent_id">
                  <option value="0">Chon danh muc cha</option>
                  {!! $htmlOption !!}
                </select>
              </div>
              
              <button type="submit" class="btn btn-primary">Submit</button>
              <a href="{{route('cate-index')}}" class="btn btn-danger" type="button">Huỷ bỏ</a>

            </form>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection