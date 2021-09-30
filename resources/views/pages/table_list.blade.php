@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Payments</h4>
            <p class="card-category"> Payments details and history of the customer</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                
                <th>
                    RenterName
                  </th>
                  <th>
                    Ownername
                  </th>
                  <th>
                    Bike Number
                  </th>
                  <th>
                    Payment type
                  </th>
                  <th>
                    Payment Date
                  </th>
                  <th>
                    Paid by
                  </th>
                  <th>
                    Remarks
                  </th>
                  <th class="text-right">
                      Actions
                    </th>
                </thead>
                <tbody>
                  <tr>
                  <td>
                      Kenneth Edrolin
                    </td>
                    <td>
                      Meljane Abohan
                    </td>
                    <td>
                      1
                    </td>
                    <td>
                     Paypal
                    </td>
                    <td>
                     date
                    </td>
                    <td>
                     credit
                    </td>
                    <td>
                     paid
                    </td>
                    <td class="td-actions text-right">
                    
                    <a rel="tooltip" class="btn btn-success btn-link" href="#" data-original-title="" title="">
                        <i class="material-icons">edit</i>
                        <div class="ripple-container"></div>
                        </a>

                        <a rel="tooltip" class="btn btn-danger btn-link" href="#" data-original-title="" title="">
                              <i class="material-icons">delete</i>
                              <div class="ripple-container"></div>
                            </a>
                    </td>
                  </tr>
                
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card card-plain">
          <div class="card-header card-header-primary">
            <h4 class="card-title mt-0"> Bike Extends</h4>
            <p class="card-category"> Table for renter Extend bikes</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead class="">
                 
                  <th>
                    RenterName
                  </th>
                  <th>
                    Ownername
                  </th>
                  <th>
                    Payment type
                  </th>
                  <th>
                    Payment Date
                  </th>
                  <th>
                    Extend Start Time
                  </th>
                  <th>
                   Extend End time
                  </th> 
                  <th>
                    Paid by
                  </th>
                  <th>
                    Remarks
                  </th>
                  <th class="text-right">
                      Actions
                    </th>
                </thead>
                <tbody>
                  <tr>
                   
                    <td>
                      Kenneth Edrolin
                    </td>
                    <td>
                      Meljane Abohan
                    </td>
                    <td>
                      1
                    </td>
                    <td>
                    date
                    </td>
                    <td>
                   start time
                    </td>
                    <td>
                     end time
                    </td>
                    <td>
                     paypal
                    </td>
                    
                    <td>
                     paid
                    </td>

                    <td class="td-actions text-right">
                    
                    <a rel="tooltip" class="btn btn-success btn-link" href="#" data-original-title="" title="">
                        <i class="material-icons">edit</i>
                        <div class="ripple-container"></div>
                        </a>

                        <a rel="tooltip" class="btn btn-danger btn-link" href="#" data-original-title="" title="">
                              <i class="material-icons">delete</i>
                              <div class="ripple-container"></div>
                            </a>
                    </td>
                  </tr>
                 
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection