@include('forexadmin.includes.header', ['title' => 'Admin Dashboard | Forexbd'])
@include('forexadmin.includes.sidebar')

<style>

</style>

    <div class="am-pagetitle">
      <h5 class="am-title">Users</h5>
    </div><!-- am-pagetitle -->

    <div class="am-mainpanel">
      <div class="am-pagebody">

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Users List</h6>
          <p class="mg-b-20 mg-sm-b-30">All registered users list</p>
          @if(session('success'))
          <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <div class="d-flex align-items-center justify-content-start">
              <i class="icon ion-ios-checkmark alert-icon tx-24 mg-t-5 mg-xs-t-0"></i>
              <span><strong>Success!</strong> {{ session('success') }}</span>
            </div><!-- d-flex -->
          </div>
          @endif
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Name</th>
                  <th class="wd-25p">E-mail</th>
                  <th class="wd-10p">Phone</th>
                  <th class="wd-20p">Total Balance</th>
                  <th class="wd-10p">Bonus Balance</th>
                  <th class="wd-10p">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
             <tr>
                  <td>{{ $user->first_name . ' ' . $user->last_name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->phone }}</td>
                  <td>৳{{ $user->main_balance }}</td>
                  <td>৳{{ $user->bonus_balance }}</td>
                  <td>
                    <form action="{{ route('users.delete', ['id' => $user->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                    <a href="#" class="btn btn-info mg-b-10"><i class="fa fa-edit"></i></a>
                        <button type="submit" class="btn btn-danger mg-b-10"><i class="fa fa-trash"></i></button>
                    </form></td>                 
                </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->

      </div><!-- am-pagebody -->
      <div class="am-footer">
    </div><!-- am-footer -->
    </div><!-- am-mainpanel -->
    
    <script src="{{ asset("/assets/admin/lib/jquery/jquery.js") }}"></script>
    <script src="{{ asset("/assets/admin/lib/popper.js/popper.js") }}"></script>
    <script src="{{ asset("/assets/admin/lib/bootstrap/bootstrap.js") }}"></script>
    <script src="{{ asset("/assets/admin/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js") }}"></script>
    <script src="{{ asset("/assets/admin/lib/jquery-toggles/toggles.min.js") }}"></script>
    <script src="{{ asset("/assets/admin/lib/highlightjs/highlight.pack.js") }}"></script>
    <script src="{{ asset("/assets/admin/lib/datatables/jquery.dataTables.js") }}"></script>
    <script src="{{ asset("/assets/admin/lib/datatables-responsive/dataTables.responsive.js") }}"></script>
    <script src="{{ asset("/assets/admin/lib/select2/js/select2.min.js") }}"></script>
    
    <script src="{{ asset("/assets/admin/js/amanda.js") }}"></script>
    
    <script>
      $(function(){
        'use strict';
    
        $('#datatable1').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });
    
        $('#datatable2').DataTable({
          bLengthChange: false,
          searching: false,
          responsive: true
        });
    
        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });
    
      });
    </script>
    </body>
    </html>
    
