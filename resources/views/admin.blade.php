@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card rounded-0 shadow text-reset">
                <div class="card-header">
                  <div class="card-title h3 my-2 text-center fw-bold">Welcome, {{ Auth::user()->name }}!</div>
                </div>

                <div class="card-body">
                    <div class="container-fluid">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    

                    <form class="form-horizontal" action="{{ route('admin.store') }}" method="POST">
                        {{ csrf_field() }}
                        <fieldset class="border pb-3 mb-3">
                        <!-- Form Name -->
                        <legend class="w-auto mx-3 px-4 border-0 mt-n4 h4 fw-bolder">New Bill Entry</legend>

                        <div class="container-fluid">
                        <!-- Text input-->
                        <div class="mb-3">
                          <label class="control-label" for="customerId">Customer Id</label>  
                          <input id="customerId" name="customerId" placeholder="" class="form-control rounded-0" required="" type="text">
                        </div>

                        <!-- Text input-->
                        <div class="mb-3">
                          <label class="control-label" for="initial">Initial Reading</label>  
                          <input id="initial" name="initial" placeholder="" class="form-control rounded-0 text-end" required="" type="number" step="any">
                        </div>

                        <!-- Text input-->
                        <div class="mb-3">
                          <label class="control-label" for="final">Final Reading</label>  
                          <input id="final" name="final" placeholder="" class="form-control rounded-0 text-end" required="" type="number" step="any">
                        </div>

                        <!-- Select Basic -->
                        <div class="mb-3">
                          <label class="control-label" for="month">Month</label>
                          <div class="">
                            <select id="month" name="month" class="form-select rounded-0">
                              <option value="January">January</option>
                              <option value="February">February</option>
                              <option value="March">March</option>
                              <option value="April">April</option>
                              <option value="May">May</option>
                              <option value="June">June</option>
                              <option value="July">July</option>
                              <option value="August">August</option>
                              <option value="September">September</option>
                              <option value="October">October</option>
                              <option value="November">November</option>
                              <option value="Decemeber">Decemeber</option>
                            </select>
                          </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="mb-3">
                          <label class="control-label" for="year">Year</label>
                          <div class="">
                            <select id="year" name="year" class="form-select rounded-0">
                              @php
                                for($i= (date("Y") - 20); $i < (date("Y") + 5); $i++ ):
                                $year = $i;
                                @endphp
                                <option <?= $i == date('Y')? "selected" : '' ?>><?= $i ?></option>
                                
                                @php
                                endfor;
                                @endphp
                            </select>
                          </div>
                        </div>

                        <!-- Button -->
                        <div class="mb-3">
                          <div class="d-grid">
                            <button type="submit" class="btn btn-primary bg-gradient rounded-0">Submit</button>
                          </div>
                        </div>
                        </div>
                        </fieldset>
                        </form>
                        <form class="form-inline" action="{{ route('admin.updaterate') }}" method="POST">
                            {{ csrf_field() }}

                            <fieldset class="border pb-3 mb-3">

                              <!-- Form Name -->
                              <legend class="w-auto mx-3 px-4 border-0 mt-n4 h4 fw-bolder">Update Electricty Rate</legend>
                              <div class="container-fluid">
                                <p class="current">Current Rate = <span>&#x20B1; {{ Auth::user()->rate }} </span></p>
                                
                                <!-- Text input-->
                                <div class="mb-3">
                                  <label class="control-label" for="rate">New Rate</label>  
                                  <input id="rate" name="rate" placeholder="" class="form-control rounded-0 text-end" required="" type="number" step="any">
                                </div>
                                <!-- Button -->
                                <div class="mb-3">
                                  <div class="d-grid">
                                    <button type="submit" class="btn btn-primary bg-gradient rounded-0">Update</button>
                                  </div>
                                </div>
                              </div>
                            </fieldset>
                        </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
