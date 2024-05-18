@include('forexadmin.includes.header', ['title' => 'Admin Dashboard | Forexbd'])
@include('forexadmin.includes.sidebar')

    <div class="am-mainpanel">
      <div class="am-pagetitle">
        <h5 class="am-title">Add Plans</h5>
      </div><!-- am-pagetitle -->

      <div class="am-pagebody">

        <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
          <h6 class="card-body-title">Edit Investment Plan</h6>
          <form action="{{ route('plan.update', $investment->id) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="row">
                  <label class="col-sm-4 form-control-label">Trade Category: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                      <input type="text" class="form-control" name="trade_category" value="{{ $investment->trade_category }}" required>
                  </div>
              </div>
              <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Investment Amount: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                      <input type="number" class="form-control" name="investment" value="{{ $investment->investment }}" required>
                  </div>
              </div>
              <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Duration: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                      <input type="text" class="form-control" name="duration" value="{{ $investment->duration }}" required>
                  </div>
              </div>
              <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Total Profit: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                      <input type="number" class="form-control" name="total_profit" value="{{ $investment->total_profit }}" required>
                  </div>
              </div>
              <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Monthly Profit: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                      <input type="number" class="form-control" name="monthly_profit" value="{{ $investment->monthly_profit }}" required>
                  </div>
              </div>
              <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Weekly Profit: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                      <input type="number" class="form-control" name="weekly_profit" value="{{ $investment->weekly_profit }}" required>
                  </div>
              </div>
              <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">Deposit Bonus: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="number" class="form-control" name="deposit_bonus" value="{{ $investment->deposit_bonus }}" required>
                </div>
            </div>
            <div class="row mg-t-20">
              <label class="col-sm-4 form-control-label">Refer Bonus: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="number" class="form-control" name="refer_bonus" value="{{ $investment->refer_bonus }}" required>
              </div>
          </div>
              <div class="form-layout-footer mg-t-30">
                  <button class="btn btn-info mg-r-5">Update Plan</button>
                  <a href="{{ route('forexadmin.inplansview') }}" class="btn btn-secondary">Cancel</a>
              </div><!-- form-layout-footer -->
          </form>
      </div>

      </div><!-- am-pagebody -->
      @include('forexadmin.includes.footer')