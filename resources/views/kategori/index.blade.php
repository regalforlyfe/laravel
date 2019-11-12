@extends('base')
@section('konten')

    <div id="content-wrapper">

      <div class="container-fluid">
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Category</div>
          <div class="card-body">
            <a href="{{route('kategori.create')}}" class="float-right btn btn-primary">Tambah</a>
            </br>
            </br>
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Category</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Category</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </tfoot>
                <tbody>
                    @foreach($kategori as $value)
                  <tr>
                    <td>{{$value->id_kategori}}</td>
                    <td>{{$value->nama}}</td>
                    <td width="1">
                      <div class="btn-group">
                        <a href="{{route('kategori.edit',$value->id_kategori)}}" class="btn btn-success btn-sm far fa-edit"></a>
                      </div>
                    </td>
                    <td width="1">
                      <form action="{{route('kategori.destroy',$value->id_kategori)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm far fa-trash-alt" type="submit"></button>
                      </form>
                    </td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  @endsection