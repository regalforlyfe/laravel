@extends('base')
@section('konten')
    <div id="content-wrapper">

      <div class="container-fluid">
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Product</div>
          <div class="card-body">
            <a href="" class="float-right btn btn-primary">+</a>
            </br>
            </br>
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Id Product</th>
                    <th>Category</th>
                    <th>Product Name</th>
                    <th>Price</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Id Product</th>
                    <th>Category</th>
                    <th>Product Name</th>
                    <th>Price</th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td>0</td>
                    <td>System Architect</td>
                    <td>Nixon</td>
                    <td>10</td>
                  </tr>
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