@include ('dashboard.layout.header')

@include ('dashboard.layout.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Welcome {{ Auth::user()->name }}</h1>
              @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
              @endif
              @if(Session::has('error'))
                  <div class="alert alert-success" role="alert">
                      {{session('error')}}
                  </div>
              @endif
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/home'}}">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="card bg-gradient-info">
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    New Payment Method
                                    <form class="form-horizontal" method="GET" action="/user/payment/{{Auth::user()->id}}/add">
                                        @csrf
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" id="user_id" placeholder="{{Auth::user()->id}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="account_number">Account Number</label>
                                            <input type="text" class="form-control" id="account_number" placeholder="Enter account number">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            Please note that your account will only be recharged with those bank accounts that have been added to your TAP account.
                                        </small>    
                                    </p>
                                </div>
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.QR-Code generator -->
  </div>
  <!-- /.content-wrapper -->

@include ('dashboard.layout.footer')
