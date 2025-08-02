@extends('layouts.frontend')
@section('title', 'Transaction List')
@section('content')

 <!-- ======= Breadcrumbs ======= -->L
    <section class="breadcrumbs">
      <div class="box">

        <div class="d-flex justify-content-between align-items-center">

          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Transaction List</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <main class="inner-page bg-grey dashboard-ui">
      <div class="box">
        <div class="dashboard-options">
          <div class="dashboard-grid">
            @include('customer.left_side') 
            <!--Grid column-->

            <!--Grid column-->
            <div class="dashboard-tab tab-results">

              <!-- Tab panels -->
              <div class="tab-content pt-0">

                <!--Panel 1-->
                <div class="tab-pane fade in show active" id="panel11" role="tabpanel">
                  <div class="p-1 py-3">
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                          <strong>Success!</strong> {{ session()->get('success') }}
                        </div>
                    @endif
                    @if(session()->has('error'))
                        <div class="alert alert-danger">
                            <strong>Warning!</strong> {{ session()->get('error') }}
                        </div>
                    @endif
                   
                  </div>
				
                </div>
              
                
                  <div class="p-1 py-3">
                    <h4 class="mb-3">Transaction List</h4>
                    <div class="table-responsive">
                      <table class="table table-hover  ">
                        <thead>
                          <tr>
                            <th scope="col">SN</th>
                            <th scope="col">transactionId</th>
                            <th scope="col">providerReferenceId</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Status Code</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @if(isset($transactionlist))
                                @php
                                    $i=1;
                                @endphp
                              @foreach($transactionlist as $list)
                                    @php
                                        if(empty($list->code)){
                                            continue;
                                        }
                                    @endphp
                                  <tr>
                                    <th scope="row">{{ $i }}</th>
                                    <td>{{ $list->transactionId }}</td>
                                    <td>{{ $list->providerReferenceId }}</td>
                                    <td>{{ $list->amount }}</td>
                                    <td>{{ $list->code }}</td>
                                     <td>{{ $list->updated_at }}</td>
                                     <td style="width:100%;">
                                         
                                         {{-- <a href="{{ url('/customer/credit-report/view') }}/{{ $list->id }}" class="view" title="View">
                                                              <i class="ri-eye-line"></i> --}}
                                          </a>
                                              @php
                                                  if(!empty($list->search_data)){
                                                      $search = $list->search_data;
                                                  }else{
                                                      $search = $list->search_data;
                                                  }
                                              @endphp
                                          <a href="{{ url('/customer/credit-report/download') }}/{{ $search }}" class="downlaod" title="Download">
                                              <i class="ri-folder-download-fill"> Loan</i>
                                          </a> |
                                          <a href="{{ url('/customer/download-loan-receipt') }}/{{ $list->id }}" class="downlaod" title="Download" > 
                                          <i class="ri-folder-download-fill" aria-hidden="true"></i> Receipt</button></a>
                                         
                                     </td>
                                  </tr>
                                   @php
                                    $i++;
                                @endphp
                              @endforeach
                          @endif
                        </tbody>
                      </table>
                    </div>
                  </div>
                
                <!--/.Panel 3-->

                <!--Panel 4-->
                <!-- <div class="tab-pane fade" id="panel14" role="tabpanel">
                  <p>Option last</p>
                </div> -->
                <!--/.Panel 4-->

              </div>


            </div>
            <!--Grid column-->

          </div>
          <!--Grid row-->

        </div>
      </div>
    </main>

  </main><!-- End #main -->
	
@endsection
