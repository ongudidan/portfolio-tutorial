  <div class="container-fluid p-0">
      <h1 class="h3 mb-3"> Dashboard</h1>
      <div class="row">
          <div class="col-xl-6 col-xxl-5 d-flex">
              <div class="w-100">
                  <div class="row">
                      <div class="col-sm-6">
                          <div class="card">
                              <div class="card-body">
                                  <div class="row">
                                      <div class="col mt-0">
                                          <h5 class="card-title">Users</h5>
                                      </div>
                                      <div class="col-auto">
                                          <div class="stat text-primary">
                                              <i class="align-middle" data-feather="users"></i>
                                          </div>
                                      </div>
                                  </div>
                                  <h1 class="mt-1 mb-3">2</h1>
                                  <div class="mb-0">
                                      <span class="text-muted">Total Users</span>
                                  </div>
                              </div>
                          </div>
                          <div class="card">
                              <div class="card-body">
                                  <div class="row">
                                      <div class="col mt-0">
                                          <h5 class="card-title">Portifolio</h5>
                                      </div>

                                      <div class="col-auto">
                                          <div class="stat text-primary">
                                              <i class="align-middle" data-feather="briefcase"></i>
                                          </div>
                                      </div>
                                  </div>
                                  <h1 class="mt-1 mb-3">3</h1>
                                  <div class="mb-0">
                                      <span class="text-success">
                                          <span class="text-muted">Total Portifolio </span>
                                  </div>
                              </div>
                          </div>

                      </div>
                      <div class="col-sm-6">
                          <div class="card">
                              <div class="card-body">
                                  <div class="row">
                                      <div class="col mt-0">
                                          <h5 class="card-title">Education</h5>
                                      </div>

                                      <div class="col-auto">
                                          <div class="stat text-primary">
                                              <i class="align-middle" data-feather="book"></i>
                                          </div>
                                      </div>
                                  </div>
                                  <h1 class="mt-1 mb-3">4</h1>
                                  <div class="mb-0">
                                      <span class="text-success">
                                          <span class="text-muted">Total</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xl-6 col-xxl-7">
              <div class="card flex-fill w-100">
                  <div class="card-header">

                      <h5 class="card-title mb-0">Recent Movement</h5>
                  </div>
                  <div class="card-body py-3">
                      <div class="chart chart-sm">
                          <canvas id="chartjs-dashboard-line"></canvas>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>