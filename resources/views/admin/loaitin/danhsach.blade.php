@extends('admin.layout.index')
@section('noidung')
<div id="page-wrapper">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Thể Loại
               <small>Danh Sách</small>
            </h1>
            @if(session('thongbao'))
            <div class="alert alert-success">
               {{session('thongbao')}}
            </div>
            @endif
         </div>
         <!-- /.col-lg-12 -->
         <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
               <thead>
                  <tr align="center">
                     <th>ID</th>
                     <th>Tên Loại Tin</th>
                     <th>Thể Loại</th>
                     <th>Status</th>
                     <th>Delete</th>
                     <th>Edit</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($loaitin as $lt)
                  <tr class="odd gradeX" align="center">
                     <td>{{$lt->id}}</td>
                     <td>{{$lt->Ten}}</td>
                     <td>{{$lt->TheLoai->Ten}}</td>
                     <td>Hiện</td>
                     <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/loaitin/xoa/{{$lt->id}}"> Delete</a></td>
                     <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/loaitin/sua/{{$lt->id}}">Edit</a></td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container-fluid -->
</div>
@endsection