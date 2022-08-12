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

    <!-- QR-code card -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity">
                                <!-- {{$user = Auth::user()}} -->
                                <div class="card mb-6" style="max-width: 600px;">
                                    <div class="row no-gutters">
                                        <div class="col-md-5" style="padding:5px;">
                                            {{
                                                QRCode::meCard($user->name, $user->address, $user->phone, $user->email)
                                                ->setErrorCorrectionLevel('H')
                                                ->setSize(5)
                                                ->setMargin(2)->svg();
                                            }}
                                        </div>
                                        <div class="col-md-7">
                                        <div class="card-body">
                                            <h5 class="card-title">TAP Card</h5>
                                            <p class="card-text">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p>Name: {{$user->name}}</p>
                                                        <p>Address: {{$user->address}}</p>
                                                        <p>Phone: {{$user->phone}}</p>
                                                        <p>Email: {{$user->email}}</p>
                                                        <p>Created at: {{$user->created_at}}</p>
                                                    </div>
                                                </div>
                                            </p>
                                        </div>
                                    </div>
                                    <p class="card-text"><small class="text-muted">Distribution of this card without permission is against the company regulations and you may be fined if you found doing so.</small></p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.card-body -->
                </div>
            </div>
        </div>
        <!-- /.QR-code card -->
    </section>
</div>

@include ('dashboard.layout.footer')
