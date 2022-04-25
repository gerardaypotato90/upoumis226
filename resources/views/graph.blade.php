@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Confirmed Cases</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">2,839,111</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-chart-area fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Recovered</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">2,778,148</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-chart-area fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-dark shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Deaths
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">51,213</div>
                                </div>
                                <!-- <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-chart-area fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Coronavirus disease</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="container2"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Notify if Possitive/expose to</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div>
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                        <label>I'm Positive for COVID-19</label>
                    </div>
                    <div>
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                        <label>I've been expose to COVID-19</label>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="row">

<!-- Content Column -->
<div class="col-lg-6 mb-4">

    <!-- Project Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Health Declaration</h6>
        </div>
        <div class="card-body">
            <form>
                <fieldset>
                
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">
                      Fever
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">
                      Dry Cough
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">
                      Fatigue
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">
                    Aches and Pains
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">
                        Runny Nose
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">
                        Sore Throat
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">
                        Shortness of Breath
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">
                        Diarrhea
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">
                        Headache
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">
                        Loss of Smell and Taste
                    </label>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </fieldset>
              </form>
        </div>
    </div>

    <!-- Color System -->
    

</div>


</div>
</div>
    
@endsection