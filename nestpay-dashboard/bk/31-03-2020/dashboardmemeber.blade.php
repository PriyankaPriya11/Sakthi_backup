@extends('layouts.app')
@section('content')
<div class="page">
    <div class="page-header">
        <ol class="breadcrumb">

            <center>
                <li class="breadcrumb-item active">Dashboard</li>
            </center>
        </ol>
    </div>
    <div class="page-content">
        <div class="col-xxl-3">
            <div class="row h-full">
                <!-- <div class="col-xxl-12 col-lg-3 h-p50 h-only-lg-p100 h-only-xl-p100 transactioncard">
                    <div class="card card-shadow card-inverse bg-orange-600 white">
                        <div class="card-block p-30">
                            <div class="counter counter-lg counter-inverse text-left changetext">
                                <center>
                                    <div>Number of Transactions</div>
                                </center>
                                <div class="counter-number-group mb-15">
                                    <span class="counter-number">{{$transactioncount}}</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-12 col-lg-3 h-p50 h-only-lg-p100 h-only-xl-p100 transactioncard">
                    <div class="card card-shadow card-inverse bg-green-600 white">
                        <div class="card-block p-30">
                            <div class="counter counter-lg counter-inverse text-left changetext">
                                <center>
                                    <div>Total Amount Transferred</div>
                                </center>
                                <div class="counter-number-group mb-15">
                                    <span class="counter-number">₹{{$amount_transferred}}</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="col-xxl-12 col-lg-3 h-p50 h-only-lg-p100 h-only-xl-p100">
                    <!-- Panel Today's Sales -->
                    <div class="card card-shadow card-inverse bg-blue-600 white">
                        <div class="card-block p-30">
                            <div class="counter counter-lg counter-inverse text-left changetext">
                                <div class="counter-label mb-20">
                                    <center>
                                        <div>Send Payment</div>
                                    </center><br>
                                    <div><button type="submit" data-status="1" id="sendpaymentdashboardclick"
                                            class="btn btn-primary btn-block">Send Payment
                                        </button></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End Panel Today's Sales -->
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="panel-body" style="min-height:400px;">
                <div class="row" data-plugin="matchHeight" data-by-row="true">
                    <div class="col-lg-12" id="ecommerceRevenue">
                        <div class="card card-shadow text-center pt-10">
                            <h3 class="card-header card-header-transparent blue-grey-700 font-size-14 mt-0">Transaction
                                Count
                                Between {{ date('d-m-Y') }} to {{date("d-m-Y", strtotime("-6 days"))}}</h3>
                            <div class="card-block bg-white">
                                <div class="ct-chart barChart"></div>
                                <!-- {{date('M Y')}} -->

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="panel">

            <div class="panel-body">
                <div id="transaction5">Last 5 Transactions</div><br>
                <table class="table table-hover dataTable table-striped w-full" id="gstdatatable">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Amount Transfered</th>
                            <!-- <th>Request Id</th> -->
                            <th>Transaction Id</th>

                            <th>Status</th>
                            <th>Fund Transfered</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($payments as $payments1)

                        <tr>
                            <td>{{$payments1['created_at']->toDateString()}}</td>
                            <td>{{$payments1['amount']}}</td>
                            <!-- <td>{{$payments1['request_id']}}</td> -->
                            <td>{{$payments1['transaction_id']}}</td>

                            <td>{{$payments1['request_status']}}</td>
                            <td>{{$payments1['fund_transferred']}}</td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
        <input type="hidden" id="day1" value="{{$day}}">
        <input type="hidden" id="day2" value="{{$day1}}">
        <input type="hidden" id="day3" value="{{$day2}}">
        <input type="hidden" id="day4" value="{{$day3}}">
        <input type="hidden" id="day5" value="{{$day4}}">
        <input type="hidden" id="day6" value="{{$day5}}">
        <input type="hidden" id="day7" value="{{$day6}}">
        <?php $userlogged=auth()->user(); ?>
        <div class="row" data-plugin="matchHeight" data-by-row="true">

            <div class="col-xl-4 col-lg-6">
                <!-- Panel Followers -->
                <div class="panel" id="followers">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            1.Profile Update
                        </h3>
                    </div>
                    <div class="panel-body">
                        <ul class="list-group list-group-dividered list-group-full h-300" data-plugin="scrollable">
                            <div data-role="container">
                                <div data-role="content">
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-body w-full">
                                                <div class="float-right">
                                                    <?php if($userlogged['pan_number']==null){ ?>
                                                    <a href="http://payhot.in/profileUpdate">Update</a>
                                                    <?php }else{ ?>
                                                    <p>Pan Updated</p>
                                                    <?php    } ?>
                                                </div>
                                                <div>
                                                    <span>Update Pan Number</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-body w-full">
                                                <div class="float-right">
                                                    <?php if($userlogged['aadhar_number']==null){ ?>
                                                    <a href="http://payhot.in/profileUpdate">Update</a>
                                                    <?php }else{ ?>
                                                    <p>Aadhar Updated</p>
                                                    <?php    } ?>
                                                </div>
                                                <div>
                                                    <span>Update Aadhar Number</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-body w-full">
                                                <div class="float-right">
                                                    <?php if($userlogged['voter_number']==null){ ?>
                                                    <a href="http://payhot.in/profileUpdate">Update</a>
                                                    <?php }else{ ?>
                                                    <p>Voterid Updated</p>
                                                    <?php    } ?>
                                                </div>
                                                <div>
                                                    <span>Update Voterid Number</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-body w-full">
                                                <div class="float-right">
                                                    <?php if($userlogged['passport_number']==null){ ?>
                                                    <a href="http://payhot.in/profileUpdate">Update</a>
                                                    <?php }else{ ?>
                                                    <p>Passport Updated</p>
                                                    <?php    } ?>
                                                </div>
                                                <div>
                                                    <span>Update Passport Number</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <!-- End Panel Followers -->
            </div>
            <div class="col-xl-4 col-lg-6">
                <!-- Panel Followers -->
                <div class="panel" id="followers">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            2.Upload Documents
                        </h3>
                    </div>
                    <div class="panel-body">
                        <ul class="list-group list-group-dividered list-group-full h-300" data-plugin="scrollable">
                            <div data-role="container">
                                <div data-role="content">
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-body w-full">
                                                <div class="float-right">
                                                    <?php if($pancount>=1){ ?>
                                                    <p>Pan uploaded</p>
                                                    <?php  }else{?>
                                                    <a href="http://payhot.in/documentUpdate">Upload</a>
                                                    <?php  }?>
                                                </div>
                                                <div>
                                                    <span>Upload Pan </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <span>Upload Address Proof(1)</span>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-body w-full">

                                                <div class="float-right">
                                                    <?php if($aadharcount>=1){ ?>
                                                    <p>Aadhar uploaded</p>
                                                    <?php  }else{?>
                                                    <a href="http://payhot.in/documentUpdate">Upload</a>
                                                    <?php  }?>
                                                </div>
                                                <div>
                                                    <span>Aadhar</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-body w-full">
                                                <div class="float-right">
                                                    <?php if($votercount>=1){ ?>
                                                    <p>Voterid uploaded</p>
                                                    <?php  }else{?>
                                                    <a href="http://payhot.in/documentUpdate">Upload</a>
                                                    <?php  }?>
                                                </div>
                                                <div>
                                                    <span>Voterid</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-body w-full">
                                                <div class="float-right">
                                                    <?php if($passportcount>=1){ ?>
                                                    <p>Passport uploaded</p>
                                                    <?php  }else{?>
                                                    <a href="http://payhot.in/documentUpdate">Upload</a>
                                                    <?php  }?>
                                                </div>
                                                <div>
                                                    <span>Passport</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                     <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-body w-full">
                                                <div class="float-right">
                                                    <?php if($drivingcount>=1){ ?>
                                                    <p>Driving License uploaded</p>
                                                    <?php  }else{?>
                                                    <a href="http://payhot.in/documentUpdate">Upload</a>
                                                    <?php  }?>
                                                </div>
                                                <div>
                                                    <span>Driving License</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <!-- End Panel Followers -->
            </div>


        </div>


    </div>

</div>

<style>
.counter-lg .counter-number-group,
.counter-lg>.counter-number {
    font-size: 40px;
    text-align: center;
}

.changetext {
    font-size: 21px;
}

.card {
    height: 166px;
}

button#sendpaymentdashboardclick {
    color: var(--blue);
    background-color: var(--white);
    border-color: var(--blue);
    box-shadow: none;
    font-size: large;
    font-weight: bolder;
}

#transaction5 {
    font-size: larger;
    font-weight: 700;
    color: black;
}

p {
    color: green;
}

@media only screen and (min-width: 1600px) {
    .col-lg-4 {
        max-width: 33.333333%;
    }

    .col-xxl-3 {

        flex: 0 0 25%;
        max-width: 100%;
    }
}

@media only screen and (max-width:1354px) and (min-width: 990px) {
    .card {
        height: 185px !important;
    }
}

@media only screen and (max-width:375px) {
    .card {
        height: 160px !important;
    }
}

@media only screen and (max-width:320px) {
    .card {
        height: 147px !important;
    }
}
@media only screen and (max-width:375px) {
    .transactioncard .card { height: 125px !important;}
    .transactioncard .p-30 { padding: 8px!important;}
    .transactioncard .changetext { font-size: 18px;} 
}

@media only screen and (max-width:320px) {
    .transactioncard .card { height: 125px !important;}
    .transactioncard .p-30 { padding: 5px!important;}
    .transactioncard .changetext { font-size: 18px;} 
}
@media only screen and (max-width:1024px) {
    button#sendpaymentdashboardclick {
   
    font-size: small !important;
}
}
@media (min-width: 1600px){
.col-xxl-12 {
    flex: 0 0 100%;
     max-width: 33.33%; 
}
}@media (min-width: 992px){
.col-lg-3 {
    flex: 0 0 33.33%;
    max-width: 33.33%;
}
}
@media only screen and (max-width: 1023px) {
    .transactioncard { width: 50%;}
}
@media only screen and (min-width: 376px) and (max-width: 425px) {
    .p-30 { padding: 23px!important;}
}
</style>

@endsection