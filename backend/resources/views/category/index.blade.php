@extends('layouts.admin')

@section('title')
<title>Home</title>
@endsection

@section('content')

  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    @include('partials.content-header', ['name' => 'category', 'key'=>'List'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
          <a href="{{ route('cate-create') }}" class="btn btn-success float-right m-2">ADD</a>
        </div>
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tên Danh Mục</th>
                <th scope="col">Hành Động</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($categories as $key => $category)
                  
              <tr>
                <td>{{ $categories->firstItem() + $key }}</td>
                <td>{{$category->name}}</td>
                <td>
                  <a href="{{route('cate-edit', ['id' => $category->id])}}" class="btn btn-info">Edit</a>
                  <a onclick="return confirm('Bạn có chắc chắn muốn xóa người dùng này?');" href="{{route('cate-delete', ['id' => $category->id])}}" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="col-md-12">
          {{ $categories->links() }}
        </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection