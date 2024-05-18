<div class="am-footer">
  </div><!-- am-footer -->
</div><!-- am-mainpanel -->

<script src="{{ asset("/assets/admin/lib/jquery/jquery.js") }}"></script>
<script src="{{ asset("/assets/admin/lib/popper.js/popper.js") }}"></script>
<script src="{{ asset("/assets/admin/lib/bootstrap/bootstrap.js") }}"></script>
<script src="{{ asset("/assets/admin/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js") }}"></script>
<script src="{{ asset("/assets/admin/lib/jquery-toggles/toggles.min.js") }}"></script>
<script src="{{ asset("/assets/admin/lib/d3/d3.js") }}"></script>
<script src="{{ asset("/assets/admin/lib/rickshaw/rickshaw.min.js") }}"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyAEt_DBLTknLexNbTVwbXyq2HSf2UbRBU8"></script>
<script src="{{ asset("/assets/admin/lib/gmaps/gmaps.js") }}"></script>
<script src="{{ asset("/assets/admin/lib/Flot/jquery.flot.js") }}"></script>
<script src="{{ asset("/assets/admin/lib/Flot/jquery.flot.pie.js") }}"></script>
<script src="{{ asset("/assets/admin/lib/Flot/jquery.flot.resize.js") }}"></script>
<script src="{{ asset("/assets/admin/lib/flot-spline/jquery.flot.spline.js") }}"></script>

<script src="{{ asset("/assets/admin/js/ResizeSensor.js") }}"></script>
<script src="{{ asset("/assets/admin/js/dashboard.js") }}"></script>
<script src="{{ asset("/assets/admin/lib/highlightjs/highlight.pack.js") }}"></script>
<script src="{{ asset("/assets/admin/lib/datatables/jquery.dataTables.js") }}"></script>
<script src="{{ asset("/assets/admin/lib/datatables-responsive/dataTables.responsive.js") }}"></script>
<script src="{{ asset("/assets/admin/js/amanda.js") }}"></script>
<script src="{{ asset("/assets/admin/lib/select2/js/select2.min.js") }}"></script>

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
