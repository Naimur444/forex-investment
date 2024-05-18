@include('forexadmin.includes.header', ['title' => 'Admin Dashboard | Forexbd'])
@include('forexadmin.includes.sidebar')

    <div class="am-mainpanel">
      <div class="am-pagetitle">
        <h5 class="am-title">Add Plans</h5>
      </div><!-- am-pagetitle -->

      <div class="am-pagebody">

        <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
          <h6 class="card-body-title">Add Investment Plan</h6>
          <form method="POST" action="{{ route('investment.store') }}">
            @csrf
            <div class="row">
              <label class="col-sm-4 form-control-label">Trade Category: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="text" class="form-control" name="trade_category" placeholder="Enter trade category">
              </div>
            </div><!-- row -->
            <div class="row mg-t-20">
              <label class="col-sm-4 form-control-label">Investment: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="number" class="form-control" name="investment" placeholder="Enter investment amount" required>
              </div>
            </div>
            <div class="row mg-t-20">
              <label class="col-sm-4 form-control-label">Duration: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="number" class="form-control" name="duration" placeholder="Enter duration" required>
              </div>
            </div>
            <div class="row mg-t-20">
              <label class="col-sm-4 form-control-label">Total Profit: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="number" class="form-control" name="total_profit" placeholder="Enter total profit" required>
              </div>
            </div>
            <div class="row mg-t-20">
              <label class="col-sm-4 form-control-label">Monthly Profit: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="number" class="form-control" name="monthly_profit" placeholder="Enter monthly profit" required>
              </div>
            </div>
            <div class="row mg-t-20">
              <label class="col-sm-4 form-control-label">Weekly Profit: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="number" class="form-control" name="weekly_profit" placeholder="Enter weekly profit" required>
              </div>
            </div>
            <div class="row mg-t-20">
              <label class="col-sm-4 form-control-label">Deposit Bonus: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="number" class="form-control" name="deposit_bonus" placeholder="Enter deposit bonus" required>
              </div>
            </div>
            <div class="row mg-t-20">
              <label class="col-sm-4 form-control-label">Refer Bonus: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="number" class="form-control" name="refer_bonus" placeholder="Enter refer bonus" required>
              </div>
            </div>
            <div class="form-layout-footer mg-t-30">
              <button type="submit" class="btn btn-info mg-r-5">Save</button>
              <a href="/forexadmin/investment_plans" class="btn btn-secondary">Cancel</a>
            </div>
          </form></div>
        
      </div><!-- am-pagebody -->
      @include('forexadmin.includes.footer')