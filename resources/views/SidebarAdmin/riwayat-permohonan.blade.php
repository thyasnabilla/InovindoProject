 @extends('admin')
 @section('container')
     <div class="section-header">
         <h1>Daftar Riwayat Permohonan</h1>
     </div>
     <div class="section-body">
         <div class="card">

             <div class="row">
                 <div class="col-12">
                     <div class="card">
                         <div class="card-body">
                             <div class="table-responsive">
                                 <table class="table table-striped" id="table-1">
                                     <thead>
                                         <tr>
                                             <th>
                                                 No
                                             </th>
                                             <th>Nama Institusi</th>
                                             <th>Tanggal Pengajuan</th>

                                             <th>Status</th>
                                             <th colspan="2">Aksi</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr>
                                             <td>
                                                 1
                                             </td>
                                             <td>SMK YPC Tasikmalaya</td>
                                             <td>2018-01-20</td>

                                             <td>
                                                 <div class="badge badge-success">Diterima</div>
                                             </td>
                                             <td><a href="#" class="btn btn-secondary">Detail</a><a href="#"
                                                     class="btn btn-secondary">Download File</a></td>


                                         </tr>
                                         <tr>
                                             <td>
                                                 2
                                             </td>
                                             <td>SMK YPC Tasikmalaya</td>
                                             <td>2018-04-10</td>



                                             <td>
                                                 <div class="badge badge-info">Pengajuan</div>
                                             </td>
                                             <td><a href="#" class="btn btn-secondary">Detail</a><a href="#"
                                                     class="btn btn-secondary">Download File</a></td>


                                         </tr>
                                         <tr>
                                             <td>
                                                 3
                                             </td>
                                             <td>SMK YPC Tasikmalaya</td>
                                             <td>2018-01-29</td>


                                             <td>
                                                 <div class="badge badge-danger">Ditolak</div>
                                             </td>
                                             <td><a href="#" class="btn btn-secondary">Detail</a><a href="#"
                                                     class="btn btn-secondary">Download File</a></td>


                                         </tr>
                                         <tr>
                                             <td>
                                                 4
                                             </td>
                                             <td>SMK YPC Tasikmalaya</td>
                                             <td>2018-01-16</td>


                                             <td>
                                                 <div class="badge badge-success">Diterima</div>
                                             </td>
                                             <td><a href="#" class="btn btn-secondary">Detail</a><a href="#"
                                                     class="btn btn-secondary">Download File</a></td>

                                         </tr>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endsection
