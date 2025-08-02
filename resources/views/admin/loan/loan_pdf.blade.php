<!DOCTYPE html>
<html>

<head>
    <title>Cibil_Score_PDF</title>
</head>
<style type="text/css">
    @page {
        /* padding-top: 400px; */
    }

    * {
        margin: 0;
        padding: 0;
    }

    html {
        margin: 0;
        padding: 0;
        padding: 0px 30px;
    }

    body {
        /* font-family: 'Roboto Condensed', sans-serif; */
        width: 90%;
        margin: 0 auto;
        /* vertical-align: middle; */
        /* margin: 10px auto; */
        /* background: #f4f4f4; */
    }

    .m-0 {
        margin: 0px;
    }

    .p-0 {
        padding: 0px;
    }

    .pt-5 {
        padding-top: 5px;
    }

    .mt-10 {
        margin-top: 10px;
    }

    .text-center {
        text-align: center !important;
        font-size: 25px;
    }

    .w-100 {
        width: 100%;
    }

    .logo img {
        width: auto;
        height: 90px;
    }

    .gray-color {
        color: #5d5d5d;
    }

    .text-bold {
        font-weight: bold;
    }

    .border {
        border: 1px solid black;
    }

    table tr,
    th,
    td {
        border: 1px solid #d2d2d2;
        border-collapse: collapse;
        padding: 7px 8px;
    }

    table tr th {
        /* background: #4ACD52; */
        font-size: 13px;
        text-align: start !important;
    }

    table tr td {
        font-size: 12px;
    }

    table {
        border-collapse: collapse;
        margin: 0px 0px;
    }

    .box-text p {
        line-height: 10px;
    }

    .float-left {
        float: left;
    }

    .total-part {
        font-size: 16px;
        line-height: 12px;
    }

    .total-right p {
        padding-right: 20px;
    }

    .flex-item {
        flex: 1;
        border: 1px solid black;
    }

    .card-heading {
        background-color: #194a7a;
        color: #fff;
        padding-bottom: 0px;
        padding-left: 10px;
        /* margin-top: 40px; */
        margin-bottom: 10px;
    }

    h3 {
        font-size: 14px;
        /* line-height: 1.5; */
        /* padding-bottom: 4px  ; */
    }

    .grid-3 {
        width: 100%;
    }

    .grid-item {
        width: 100%;
        /* float: left; */
        box-sizing: border-box;
        padding: 0px;
        display: inline-block;
        /* display: flex; */
        /* background: red; */
    }

    .label,
    .text-secondary {
        width: 50%;
        display: inline;
    }

    .label {
        /* float: left; */
    }

    .text-secondary {
        /* float: right; */
    }

    /* .grid-item */

    h6 {
        font-size: 14px;
    }

    .text-secondary {
        font-size: 14px;
    }

    .tabel tr {
        border: 0px;
    }

    .tabel td {
        border: 0px;
        padding: 2px 0px;
        /* height: 22px; */
        line-height: 2;
    }

    .box {
        margin: 10px 0px;
    }

    .card-item {
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        background: #fff;
        padding-bottom: 20px;
    }

    .logo {
        background: #fff;
        padding-top: 0px;
        border: 0px;
    }

    .top-tabel {
        border-bottom: 1px solid #333;
    }

    .top-tabel td {
        /* background */
        border: 0px;
    }

    .top-tabel tr {
        /* background */
        border: 0px;
    }

    h2 {
        /* color: #; */
        font-size: 17px;
        font-weight: lighter;
    }

    .top-tabel p,
    .top-tabel span {
        font-size: 12px;
        color: #1c1c64;
    }

    /* .logoimg {
        width: 100px;
    } */

    .input-tabel tr td {
        font-size: 13px;
    }

    tabel .head tr td {
        text-align: left !important;
        border: 0px;
        font-size: 12px;
        color: #1d528a;
    }

    tabel .head tr {
        border: 0px;
        text-align: left !important;
        font-size: 12px;
        color: #1d528a;
    }

    .green tr {
        border-top: 2px solid #96d890;
        border-bottom: 2px solid #96d890;
        line-height: normal;
    }

    .green tbody tr:nth-child(even) {
        background: #ddf2da;
    }

    .green .thead tr:nth-child(even) {
        background: #fff !important;
    }

    .green .thead tr {
        background: #fff !important;
    }

    .yellow {
        margin-top: 30px;
    }

    .yellow tr {
        border-top: 2px solid #ffde62;
        border-bottom: 2px solid #ffde62;
        line-height: normal;
    }

    .yellow tbody tr:nth-child(even) {
        background: #fff5cb;
    }

    .yellow .thead tr:nth-child(even) {
        background: #fff !important;
    }

    .yellow .thead tr {
        background: #fff !important;
    }

    .blue {
        margin-top: 30px;
    }

    .blue tr {
        border-top: 2px solid #fead7e;
        border-bottom: 2px solid #fead7e;
        line-height: normal;
    }

    .blue tbody tr:nth-child(even) {
        background: #ffe4d4;
    }

    .lightblue tr {
        border-top: 2px solid #8da6dc;
        border-bottom: 2px solid #8da6dc;
        line-height: normal;
    }
    .lightblue tbody tr:nth-child(even) {
        background: #d9e1f3;
    }

    .yellow .thead tr:nth-child(even) {
        background: #fff !important;
    }

    .yellow .thead tr {
        background: #fff !important;
    }

    .inputtabel td {
        padding: 4px 7px;
        line-height: 1.2;
    }

    .inputtabel td {
        border: 0px;
        font-size: 12px;
        /* line-height: 1.8; */
    }

    .inputtabel th {
        border: 0px;
        font-size: 12px;
        color: #1c4a82;
        text-align: start !important;
        float: left;
        /* line-height: 1.8; */
    }

    tabel th {
        width: 100%;
        text-align: left;
    }

    th .start {
        text-align: start !important;
        text-align: left;
    }

    .grey {
        color: #999;
        font-size: 9px;
        font-family: 'Roboto Condensed', sans-serif;
        margin-top: 20px;
        border-top: 2px solid #777;
        padding-top: 2px;
    }

    .footer {
        border-top: 2px solid #777;
        /* font-size: 14px; */
        position: absolute;
        bottom: 2%;
        right: 0;
        left: 0;
        padding: 10px 0px;
        width: 90%;
        margin: 0 auto;
    }

    .footer p {
        font-family: 'Roboto Condensed', sans-serif;
        font-size: 11px;
    }

    .laontabel tr th {
        border: 0px;
        border-top: 1px solid #111;
        border-bottom: 1px solid #111;
    }

    .ml-auto {
        margin-left: auto;
    }
    .w-33 {
        width: 33%;
    }
    .top-margin {
        margin-top: 50px;
    } 
</style>

<body class="top-margin">
    <div class="logo">
        <table class="w-100 top-tabel" style="margin: 0px">
            <tr>
                <td class="w-33"style="padding-left: 30px; padding-bottom : 15px">
                    <img class="logoimg" src="{{ asset('public/frontend/assets/img/logo.png') }}" alt="" style="height: 43px" />
                </td>
                <td class="w-33">
                    <h2>CREDIT REPORT</h2>
                </td>
                @php
                $id = sprintf("%08d", $loaninfo[0]->id);
                @endphp
                <td class="w-33">
                    <p>Ref No : <span>{{ $id }}</span></p>
                    <p>Application ID : <span>{{ $loaninfo[0]->society_number }}</span></p>
                    @php
                    if(!empty($loaninfo[0]->created_at)){
                    $created_at = date("Y-m-d", strtotime($loaninfo[0]->created_at));
                    }else{
                    $created_at = '';
                    }
                    @endphp
                    <p>Date of Request : <span>{{ $loaninfo[0]->created_at }}</span></p>
                    <p>Date of Issue : <span>{{ $created_at }}</span></p>
                </td>
            </tr>
        </table>
    </div>

    <section class="" style="">
        <div class="box">
            <!-- <center> -->
            <!-- <h4 class="mb-5"></h4> -->
            <!-- </center> -->
            <div class="w-100">
                <div class="w-100">
                    <div class="w-100">
                        <div class="card-item">
                            <div class="card-heading" style="margin-top: 7px">
                                <h3>Inquiry Input Information</h3>
                            </div>


                            <table class="w-100 tabel input-tabel">
                                <tr>
                                    <td>
                                        <span>Name : <span> {{ $loaninfo[0]->name }}</span></span>
                                    </td>
                                    <td>
                                        <span>Date of Birth :
                                            <span> {{ $loaninfo[0]->dob }}</span></span>
                                    </td>
                                    <td>
                                        <span>Gender : <span> {{ $loaninfo[0]->gender }}</span></span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <span>Mobile Number :
                                            <span> {{ $loaninfo[0]->mobile_no }}</span></span>
                                    </td>
                                    <td>
                                        <span>PAN CARD : <span> {{ $loaninfo[0]->pan_no }}</span></span>
                                    </td>
                                    <td>
                                        <span>Aadhaar CARD :
                                            <span> {{ $loaninfo[0]->aadhaar_no }}</span></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>Email : <span> </span></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6">
                                        <span>Current Address :
                                            <span> {{ $loaninfo[0]->address }}</span></span>
                                    </td>
                                </tr>
                            </table>
                            <br>
                            <br>
                            <div class="card-item mt-5">
                                <div class="card-heading">
                                    <h3>Personal Information - Variations</h3>
                                </div>
                                <p style="text-align:right; line-height:0px; margin-bottom : 14px; font-size : 11px;">*Current Details are collected from various financial institutions

                                <table class="w-100 tabel inputtabel green">
                                    <thead>
                                        <tr class="head">
                                            <th style="text-align: left;">
                                                Name Variation
                                            </th>
                                            <th style="text-align: left;">
                                                Report On
                                            </th>
                                            <th style="text-align: left;">DOB Variation</th>
                                            <th style="text-align: left; margin-left: auto; width: 13%;">Report On</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(isset($loaninfo))
                                        @php
                                        $i=1;
                                        @endphp
                                        @foreach($loaninfo as $namevari)
                                        @if($i==1)
                                        <tr style="display:none;">
                                            <td>{{ $namevari->name }}</td>
                                            <td>{{ $namevari->society_number }}</td>
                                            <td>{{ $namevari->dob }}</td>
                                            <td>{{ $namevari->society_number }}</td>
                                        </tr>
                                        @else
                                        <tr>
                                            <td>{{ $namevari->name }}</td>
                                            <td>{{ $namevari->society_number }}</td>
                                            <td>{{ $namevari->dob }}</td>
                                            <td>{{ $namevari->society_number }}</td>
                                        </tr>
                                        @endif
                                        @php
                                        $i++;
                                        @endphp
                                        @endforeach
                                        @endif


                                    </tbody>
                                </table>

                                <table class="w-100  tabel inputtabel yellow">
                                    <thead>
                                        <tr class="head">
                                            <th style="text-align: left;">Address Variation</th>
                                            <th style="text-align: left; margin-left: auto; width: 13%;">Report On</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(isset($loaninfo))
                                        @php
                                        $i=1;
                                        @endphp
                                        @foreach($loaninfo as $namevari)
                                        @if($i==1)
                                        <tr style="display:none;">
                                            <td>{{ $namevari->address }}</td>
                                            <td>{{ $namevari->society_number }}</td>
                                        </tr>
                                        @else
                                        <tr>
                                            <td>{{ $namevari->address }}</td>
                                            <td>{{ $namevari->society_number }}</td>
                                        </tr>
                                        @endif
                                        @php
                                        $i++;
                                        @endphp
                                        @endforeach
                                        @endif

                                    </tbody>
                                </table>

                                <table class="w-100  tabel inputtabel blue">
                                    <thead>
                                        <tr>
                                            <th style="text-align: left;">Phone No Variation</th>
                                            <th style="text-align: left;">Reported On</th>
                                            <th style="text-align: left;">ID Variation</th>
                                            <th style="text-align: left; margin-left: auto; width: 13%;">Report On</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $activeAc = 0;
                                        $no_of_months_due = 0;
                                        $loan_amount = 0;
                                        $loan_balance_amount = 0;
                                        $mobile = '';
                                        $i=1;
                                        @endphp
                                        @if(isset($loaninfo))
                                        @foreach($loaninfo as $namevari)
                                        @php
                                        if($namevari->loan_status == 'ACTIVE'){
                                        $activeAc++;
                                        }
                                        if($namevari->no_of_months_due > 0){
                                        $no_of_months_due++;
                                        }
                                        $namevari->loan_amount = filter_var($namevari->loan_amount, FILTER_SANITIZE_NUMBER_INT);
                                        $loan_amount = $loan_amount + $namevari->loan_amount;

                                        $namevari->loan_balance_amount = filter_var($namevari->loan_balance_amount, FILTER_SANITIZE_NUMBER_INT);
                                        $loan_balance_amount = $loan_balance_amount + $namevari->loan_balance_amount;
                                        @endphp
                                        @if($i==1)
                                        <tr style="display:none;">
                                            @if($mobile == $namevari->mobile_no)
                                            <td>&nbsp;</td>
                                            @else
                                            <td>{{ $mobile }}</td>
                                            @endif
                                            <td>{{ $namevari->society_number }}</td>
                                            <td>{{ $namevari->pan_no }}/{{ $namevari->aadhaar_no }}</td>
                                            <td>{{ $namevari->society_number }}</td>
                                        </tr>
                                        @else
                                        <tr>
                                            @if($mobile == $namevari->mobile_no)
                                            <td>&nbsp;</td>
                                            @else
                                            <td>{{ $mobile }}</td>
                                            @endif
                                            <td>{{ $namevari->society_number }}</td>
                                            <td>{{ $namevari->pan_no }}/{{ $namevari->aadhaar_no }}</td>
                                            <td>{{ $namevari->society_number }}</td>
                                        </tr>
                                        @endif

                                        @php
                                        $mobile = $namevari->mobile_no;
                                        $i++;
                                        @endphp
                                        @endforeach
                                        @endif


                                    </tbody>
                                </table>
                            </div>
                            <br>


                            <div class="card-item mt-5">
                                <div class="card-heading">
                                    <h3>Account Summary</h3>
                                </div>
                                <p style="text-align:right; line-height:0px; margin-bottom : 14px; font-size : 11px;">*Current Details are collected from various financial institutions


                                <table class="w-100 tabel inputtabel lightblue">
                                    <thead>
                                        <tr class="head">
                                            <th style="text-align: left;">
                                                Type
                                            </th>
                                            <th style="text-align: left;">
                                                No of accounts
                                            </th>
                                            <th style="text-align: left;">Active Accounts </th>
                                            <th style="text-align: left;">Over Due Accounts </th>
                                            <th style="text-align: left;">Closing Balance </th>
                                            <th style="text-align: left;">Current Balance </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>
                                                    Primary Match
                                                </strong>
                                            </td>
                                            @php
                                            $noOfAccount = count($loaninfo);
                                            @endphp
                                            <td>{{ $noOfAccount }}</td>
                                            <td>{{ $activeAc }}</td>
                                            <td>{{ $no_of_months_due }}</td>
                                            <td>{{ $loan_amount }}</td>
                                            <td>{{ $loan_balance_amount }}</td>
                                        </tr>

                                        <tr>
                                            <td><strong>
                                                    Total
                                                </strong>
                                            </td>
                                            @php
                                            $noOfAccount = count($loaninfo);
                                            @endphp
                                            <td>{{ $noOfAccount }}</td>
                                            <td>{{ $activeAc }}</td>
                                            <td>{{ $no_of_months_due }}</td>
                                            <td>{{ $loan_amount }}</td>
                                            <td>{{ $loan_balance_amount }}</td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>



                            <br>
                            

                            <div class="card-item mt-5">
                                <div class="card-heading">
                                    <h3>Loans Information</h3>
                                </div>
                                <p style="text-align:right; line-height:0px; margin-bottom : 14px; font-size : 11px;">*Current Details are collected from various financial institutions

                                @if(isset($loaninfo))
                                @foreach($loaninfo as $namevari)
                                <table class="w-100 tabel laontabel">
                                    <thead>
                                        <tr>
                                            <th style="text-align: left;">Account Information</th>
                                            <th style="text-align: left;">Society No: {{ $namevari->society_number }}</th>
                                            <th style="text-align: left;">Account Status: {{ $namevari->loan_status }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>
                                                <span>Account Type:
                                                    <span> {{ $namevari->loan_type }}</span></span>
                                            </td>
                                            <td>
                                                <span>A/c No :
                                                    <span> {{ $namevari->loan_account_number }}</span></span>
                                            </td>
                                            <td>
                                                <span>Inf as of :
                                                    <span>{{ $namevari->loan_balance_as_date }} </span></span>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <span>Disbursed Date :
                                                    <span>
                                                        {{ $namevari->loan_date }}</span></span>
                                            </td>
                                            <td>
                                                <span>Disbd Amt :
                                                    <span>
                                                        {{ $namevari->loan_amount }}</span></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span>Current Balance : :
                                                    <span> {{ $namevari->loan_balance_amount }}</span></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span>No. of Months Due : :
                                                    <span> {{ $namevari->no_of_months_due }}</span></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                @endforeach
                                @endif

                            </div>

                            <br>
                            <div class="card-item mt-5">
                                <div class="card-heading">
                                    <h3>Case Details</h3>
                                </div>
                                <p style="text-align:right; line-height:0px; margin-bottom : 14px; font-size : 11px;">*Current Details are collected from various financial institutions

                                <table class="w-100 tabel">
                                    @if(isset($loaninfo))
                                    @foreach($loaninfo as $namevari)
                                    @php
                                    if(empty($namevari->case_filed_on) || empty($namevari->recovery_order_number) || empty($namevari->recovery_order_date) || empty($namevari->recovery_order_authority) || empty($namevari->recovery_order_amount)){
                                    continue;
                                    }
                                    @endphp
                                    <tr>
                                        <td>
                                            <span>Case Filed Date:
                                                <span> {{ $namevari->case_filed_on }}</span></span>
                                        </td>
                                        <td>
                                            <span>Recovery Order No: :
                                                <span> {{ $namevari->recovery_order_number }}</span></span>
                                        </td>
                                        <td>
                                            <span>Recovery Order Date :
                                                <span> {{ $namevari->recovery_order_date }} </span></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>Recovery Order Authority: :
                                                <span> {{ $namevari->recovery_order_authority }} </span></span>
                                        </td>
                                        <td>
                                            <span>Recovery Order Amount :
                                                <span>
                                                    {{ $namevari->recovery_order_amount }}</span></span>
                                        </td>

                                    </tr>

                                    @endforeach
                                    @endif
                                </table>
                            </div>



                            <br>
                            <div class="card-item mt-5">
                                <div class="card-heading">
                                    <h3>Coborrower / Guarantor Details</h3>
                                </div>
                                <p style="text-align:right; line-height:0px; margin-bottom : 14px; font-size : 11px;">*Current Details are collected from various financial institutions

                                <table class="w-100 tabel inputtabel lightblue">
                                    <thead>
                                        <tr class="head">
                                            <th style="text-align: left;">
                                                Loan Account Details
                                            </th>
                                            <th style="text-align: left;">
                                                Loan Amount
                                            </th>
                                            <th style="text-align: left;">
                                                Reported On
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(isset($loaninfo))
                                        @foreach($loaninfo as $namevari)
                                        <tr>
                                            <td><strong>
                                                    {{ $namevari->loan_account_number }}
                                                </strong>
                                            </td>
                                            <td>{{ $namevari->loan_amount }}</td>
                                            <td>{{ $namevari->society_number }}</td>

                                        </tr>
                                        @endforeach
                                        @endif

                                    </tbody>
                                </table>
                            </div>


                            <p class="grey">
                                Disclaimer: This document contains proprietary information to <strong> Coop Credit Information </strong>and may not be used or disclosed to others, except with the written permission of Coop Credit Information. Any paper copy of this
                                document will be considered uncontrolled. If you are not the intended recipient, you are not authorized to read, print, retain, copy, disseminate, distribute, or use this information or any part thereof. The information is current
                                and up to date to such extent as provided by its Members. Any information contained herein does not reflect the views of Coop Credit Information or its directors or employees. The use of this report is governed by the
                                terms and conditions of the Operating Rules for CIBIL and its Members.
                            </p>

                            <div class="footer">
                                <center>
                                    <p>
                                        © COPYRIGHT 2023 COOP CREDIT INFORMATION. ALL RIGHTS RESERVED
                                    </p>
                                </center>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
    </section>
</body>

</html>