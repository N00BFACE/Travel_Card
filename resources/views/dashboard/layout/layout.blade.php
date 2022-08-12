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
                <!-- QR-code generator -->
                <div class="col-md-9">
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity">
                                <form class="form-horizontal">
                                    <div class="card col-md-5 bg-light">
                                        <div class="card-body">
                                            <div class="visible-print text-left">
                                                @if(Auth::user()->status == 0 )
                                                    <p>Please wait for account activation to view your card.</p>
                                                @elseif(Auth::user()->status == 1)
                                                    <a href="{{'/user/card'}}">
                                                        <p>Click to view your card.</p>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- /.card-body -->
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <!-- /.QR-code generator -->

                <div class="col-md-9">
                    <div class="card bg-gradient-info">
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    @if(Session::has('payment_add'))
                                        <sapn>{{Session::get('payment_add')}}</sapn>
                                    @endif
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Status</label>
                                        <div class="col-sm-8">
                                            @if(Auth::user()->status == 0)
                                                <p>Pending</p>
                                            @elseif(Auth::user()->status == 1)
                                                <p>Approved</p>
                                            @elseif(Auth::user()->status == 2)
                                                <p>Deactivated</p>
                                            @elseif(Auth::user()->status == 3)
                                                <p>Rejected</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Balance</label>
                                        <div class="col-sm-8">
                                            <p> -- | -- </p>
                                        </div>
                                    </div>
                                    @if(Auth::user()->status==1)
                                    <div class="card col-md-8 bg-light">
                                        <div class="card-header p-2">
                                            Payment Method
                                        </div>
                                        <div class="card-body text-right">
                                            @if(Auth::user()->payment()->count() > 0)
                                            <p class="card-text">
                                                <a href="{{'/user/payment'}}">Your Payment Method</a>
                                                <!-- {{$payment = Auth::user()->payment}} -->
                                                <p class="card-text">Account Number: {{$payment->account_number}}</p>
                                            </p>
                                            @else
                                            <p class="card-text">
                                                <a href="{{'/user/payment/add'}}">Add Payment Method</a>
                                            </p>
                                            @endif
                                        </div>
                                    </div>
                                    @endif
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
