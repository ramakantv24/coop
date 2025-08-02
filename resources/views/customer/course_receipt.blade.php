<!DOCTYPE html>
<html>
<head>
    <title> Invoice</title>
</head>
<style type="text/css">
    body{
        font-family: 'Roboto Condensed', sans-serif;
		width: 100%;
	vertical-align: middle;
	margin:10px auto;
	border: 1px solid #d2d2d2;
	
    }
    .m-0{
        margin: 0px;
    }
    .p-0{
        padding: 0px;
    }
    .pt-5{
        padding-top:5px;
    }
    .mt-10{
        margin-top:10px;
    }
    .text-center{
        text-align:center !important;
		font-size: 25px;
    }
    .w-100{
        width: 100%;
    }
    .w-50{
        width:50%;
text-align: left;		
    }
	.w96{
	width:15%;
	text-align: left;
	}
	.w98{
	width:60%;
	text-align: left;
	}
    .w-85{
        width:85%;   
    }
    .w-15{
        width:15%;   
    }
    .logo img{
        width:auto;
        height:90px;        
    }
    .gray-color{
        color:#5D5D5D;
    }
    .text-bold{
        font-weight: bold;
    }
    .border{
        border:1px solid black;
    }
    table tr,th,td{
        border: 1px solid #d2d2d2;
        border-collapse:collapse;
        padding:7px 8px;
    }
    table tr th{
        background: #4ACD52;
		
        font-size:15px;
    }
    table tr td{
        font-size:13px;
    }
    table{
        border-collapse:collapse;
    }
    .box-text p{
        line-height:10px;
    }
    .float-left{
        float:left;
    }
    .total-part{
        font-size:16px;
        line-height:12px;
    }
    .total-right p{
        padding-right:20px;
    }
</style>
<body>
<div style="
    background-color: #303A8F;
    color: #ffffff;
    padding: 5px;
" class="head-title">
    <h1 class="text-center m-0 p-0">Receipt</h1>
</div>

<table>
  <tr>
    <th>User</th>
    <td>{{ $courseinfo->user_name }}</td>
  </tr>
  <tr>
    <th>User Mobile</th>
    <td>{{ $courseinfo->user_mobile_no }}</td>
  </tr>
  <tr>
    <th>transactionId</th>
    <td>{{ $courseinfo->transactionId }}</td>
  </tr>
  <tr>
    <th>providerReferenceId</th>
    <td>{{ $courseinfo->providerReferenceId }}</td>
  </tr>
  <tr>
    <th>Amount</th>
    <td>{{ $courseinfo->amount }}</td>
  </tr>
  <tr>
    <th>Payment Status</th>
    <td>{{ $courseinfo->code }}</td>
  </tr>
  <tr>
    <th>Date</th>
    <td>{{ $courseinfo->updated_at }}</td>
  </tr>
</table>


</html>