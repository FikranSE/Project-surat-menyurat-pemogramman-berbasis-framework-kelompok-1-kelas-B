@extends('layout.main')
@section('content')
<div class="row">
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
          <div class="card-header p-3 pt-2">
              <div
                  class="icon icon-lg icon-shape bg-blue shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">call_received</i>

              </div>
              <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Incoming</p>
                  <h4 class="mb-0">21</h4>
              </div>
          </div>
          <hr class="dark horizontal my-0">
          <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">100% </span></p>
          </div>
      </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
          <div class="card-header p-3 pt-2">
              <div
                  class="icon icon-lg icon-shape bg-yellow shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">call_made</i>

              </div>
              <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Outgoing</p>
                  <h4 class="mb-0">29</h4>
              </div>
          </div>
          <hr class="dark horizontal my-0">
          <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">100% </span></p>
          </div>
      </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
          <div class="card-header p-3 pt-2">
              <div
                  class="icon icon-lg icon-shape bg-softgreen shadow-success text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">settings</i>

              </div>
              <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Disposition</p>
                  <h4 class="mb-0">15</h4>
              </div>
          </div>
          <hr class="dark horizontal my-0">
          <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">100%</span></p>
          </div>
      </div>
  </div>
  <div class="col-xl-3 col-sm-6">
      <div class="card">
          <div class="card-header p-3 pt-2">
              <div
                  class="icon icon-lg icon-shape bg-skyblue shadow-info text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Active Users</p>
                  <h4 class="mb-0">12</h4>
              </div>
          </div>
          <hr class="dark horizontal my-0">
          <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">100% </span></p>
          </div>
      </div>
  </div>
</div>
<div class="row mt-4">
  <div class="col-lg-4 col-md-6 mt-4 mb-4">
      <div class="card z-index-2 ">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-blue2  border-radius-lg py-3 pe-1">
                  <div class="chart">
                      <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                  </div>
              </div>
          </div>
          <div class="card-body">
              <h6 class="mb-0 ">Website Views</h6>
              <p class="text-sm ">Last Campaign Performance</p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                  <i class="material-icons text-sm my-auto me-1">schedule</i>
                  <p class="mb-0 text-sm"> campaign sent 2 days ago </p>
              </div>
          </div>
      </div>
  </div>
  <div class="col-lg-4 col-md-6 mt-4 mb-4">
      <div class="card z-index-2  ">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-green2  border-radius-lg py-3 pe-1">
                  <div class="chart">
                      <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
                  </div>
              </div>
          </div>
          <div class="card-body">
              <h6 class="mb-0 "> Letter Chart </h6>
              <p class="text-sm ">increase in today
                  sales. </p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                  <i class="material-icons text-sm my-auto me-1">schedule</i>
                  <p class="mb-0 text-sm"> updated 4 min ago </p>
              </div>
          </div>
      </div>
  </div>
  <div class="col-lg-4 mt-4 mb-3">
      <div class="card z-index-2 ">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-softpurple border-radius-lg py-3 pe-1">
                  <div class="chart">
                      <canvas id="chart-line-tasks" class="chart-canvas" height="170"></canvas>
                  </div>
              </div>
          </div>
          <div class="card-body">
              <h6 class="mb-0 ">Completed Tasks</h6>
              <p class="text-sm ">Last Campaign Performance</p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                  <i class="material-icons text-sm my-auto me-1">schedule</i>
                  <p class="mb-0 text-sm">just updated</p>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection