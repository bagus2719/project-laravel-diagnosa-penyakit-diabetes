<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Welcome Admin</h3>
                    <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span
                            class="text-primary">3 unread alerts!</span></h6>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card tale-bg">
                <div class="card-people mt-auto">
                    <img src="{{asset('style/images/dashboard/people.svg') }}" alt="people">
                    <div class="weather-info">
                        <div class="d-flex">
                            <div>
                                <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>18<sup>C</sup></h2>
                            </div>
                            <div class="ml-2">
                                <h4 class="location font-weight-normal">Malang</h4>
                                <h6 class="font-weight-normal">Indonesia</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card position-relative">
                <div class="card-body">
                    <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2"
                        data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                                        <div class="ml-xl-4 mt-3">
                                            <p class="card-title">Detailed Reports</p>
                                            <h1 class="text-primary">34.2 million</h1>
                                            <h3 class="font-weight-500 mb-xl-4 text-primary">People with Diabetes</h3>
                                            <p class="mb-2 mb-xl-0">The total number of people diagnosed with diabetes
                                                in the United States. This includes both type 1 and type 2 diabetes.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-xl-9">
                                        <div class="row">
                                            <div class="col-md-6 border-right">
                                                <div class="table-responsive mb-3 mb-md-0 mt-3">
                                                    <table class="table table-borderless report-table">
                                                        <tr>
                                                            <td class="text-muted">Type 1 Diabetes</td>
                                                            <td class="w-100 px-0">
                                                                <div class="progress progress-md mx-4">
                                                                    <div class="progress-bar bg-primary"
                                                                        role="progressbar" style="width: 10%"
                                                                        aria-valuenow="10" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-weight-bold mb-0">1.6 million</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">Type 2 Diabetes</td>
                                                            <td class="w-100 px-0">
                                                                <div class="progress progress-md mx-4">
                                                                    <div class="progress-bar bg-warning"
                                                                        role="progressbar" style="width: 90%"
                                                                        aria-valuenow="90" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-weight-bold mb-0">32.6 million</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">Undiagnosed Diabetes</td>
                                                            <td class="w-100 px-0">
                                                                <div class="progress progress-md mx-4">
                                                                    <div class="progress-bar bg-danger"
                                                                        role="progressbar" style="width: 21%"
                                                                        aria-valuenow="21" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-weight-bold mb-0">7.3 million</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">Prediabetes</td>
                                                            <td class="w-100 px-0">
                                                                <div class="progress progress-md mx-4">
                                                                    <div class="progress-bar bg-info" role="progressbar"
                                                                        style="width: 34%" aria-valuenow="34"
                                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-weight-bold mb-0">88 million</h5>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <canvas id="diabetes-chart"></canvas>
                                                <div id="diabetes-legend"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                                        <div class="ml-xl-4 mt-3">
                                            <p class="card-title">Detailed Reports</p>
                                            <h1 class="text-primary">Complications</h1>
                                            <h3 class="font-weight-500 mb-xl-4 text-primary">Related to Diabetes</h3>
                                            <p class="mb-2 mb-xl-0">Complications that arise due to diabetes, including
                                                cardiovascular disease, nerve damage, kidney damage, eye damage, and
                                                more.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-xl-9">
                                        <div class="row">
                                            <div class="col-md-6 border-right">
                                                <div class="table-responsive mb-3 mb-md-0 mt-3">
                                                    <table class="table table-borderless report-table">
                                                        <tr>
                                                            <td class="text-muted">Cardiovascular Disease</td>
                                                            <td class="w-100 px-0">
                                                                <div class="progress progress-md mx-4">
                                                                    <div class="progress-bar bg-primary"
                                                                        role="progressbar" style="width: 68%"
                                                                        aria-valuenow="68" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-weight-bold mb-0">68%</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">Nerve Damage</td>
                                                            <td class="w-100 px-0">
                                                                <div class="progress progress-md mx-4">
                                                                    <div class="progress-bar bg-warning"
                                                                        role="progressbar" style="width: 60%"
                                                                        aria-valuenow="60" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-weight-bold mb-0">60%</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">Kidney Damage</td>
                                                            <td class="w-100 px-0">
                                                                <div class="progress progress-md mx-4">
                                                                    <div class="progress-bar bg-danger"
                                                                        role="progressbar" style="width: 44%"
                                                                        aria-valuenow="44" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-weight-bold mb-0">44%</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">Eye Damage</td>
                                                            <td class="w-100 px-0">
                                                                <div class="progress progress-md mx-4">
                                                                    <div class="progress-bar bg-info" role="progressbar"
                                                                        style="width: 28%" aria-valuenow="28"
                                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-weight-bold mb-0">28%</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">Foot Damage</td>
                                                            <td class="w-100 px-0">
                                                                <div class="progress progress-md mx-4">
                                                                    <div class="progress-bar bg-primary"
                                                                        role="progressbar" style="width: 15%"
                                                                        aria-valuenow="15" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-weight-bold mb-0">15%</h5>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <canvas id="complications-chart"></canvas>
                                                <div id="complications-legend"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#detailedReports" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#detailedReports" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>