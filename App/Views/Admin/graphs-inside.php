
                      { 

                        echo "['".$value["type"]."', ],"; 

                      }  

                  ?>],
                      datasets: [{
                        label: 'Product Condition',
                        data: [<?php foreach ($graphStatus as $key => $value)  

                      { 

                        echo "['".$value["count"]."', ],"; 

                      }  

                  ?>],
                        backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(255, 159, 64, 0.2)',
                          'rgba(255, 205, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(193, 170, 255, 0.2)',
                          'rgba(201, 203, 207, 0.2)'
                        ],
                        borderColor: [
                          'rgb(255, 99, 132)',
                          'rgb(255, 159, 64)',
                          'rgb(255, 205, 86)',
                          'rgb(75, 192, 192)',
                          'rgb(54, 162, 235)',
                          'rgb(153, 102, 255)',
                          'rgb(193, 170, 255)',
                          'rgb(201, 203, 207)'
                        ],
                        borderWidth: 1
                      }]
                    },
                    options: {
                      scales: {
                        y: {
                          beginAtZero: false
                        }
                      }
                    }
                  });
                });
              </script>
            <?php } ?>
              <!-- End Bar CHart -->

            </div>

            <div class="card-body">
              <h5 class="card-title">Users Profile Data </h5>

              <!-- Bar Chart -->
              <canvas id="pieChart" style="max-height: 400px;"></canvas>
              <?php if (isset($graphUserProfile)) { ?>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#pieChart'), {
                    type: 'pie',
                    data: {
                      labels: [<?php foreach ($graphUserProfile as $key => $value)  

                      { 

                        echo "['".$value["profile"]."', ],"; 

                      }  

                  ?>],
                      datasets: [{
                        label: 'User Profile',
                        data: [<?php foreach ($graphUserProfile as $key => $value)  

                      { 

                        echo "['".$value["count"]."', ],"; 

                      }  

                  ?>],

                        backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(255, 159, 64, 0.2)',
                          'rgba(255, 205, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(193, 170, 255, 0.2)',
                          'rgba(201, 203, 207, 0.2)'
                        ],
                        
                  hoverOffset: 50,
                      }]
                    },
                  });
                });
              </script> 
            <?php } ?>
              <!-- End Bar CHart -->

            </div>

          </div>
        </div>



        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Service Status Data</h5>

              <!-- Doughnut Chart -->
              <canvas id="doughnutChart" style="max-height: 400px;"></canvas>
              <?php if (isset($graphProfile)) { ?>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#doughnutChart'), {
                    type: 'doughnut',
                    data: {
                      labels: [
                        <?php foreach ($graphProfile as $key => $value)  

                      { 

                        echo "['".$value["status"]."', ],"; 

                      }  

                  ?>
                      ],
                      datasets: [{
                        label: 'Buyers Dataset',
                        data: [<?php foreach ($graphProfile as $key => $value)  

                      { 

                        echo "['".$value["count"]."', ],"; 

                      }  

                  ?>],
                        backgroundColor: [
                          'rgb(255, 99, 132)',
                          'rgb(54, 162, 235)',
                          'rgb(255, 205, 86)',
                          'rgb(54, 10, 279)'
                        ],
                        hoverOffset: 30
                      }]
                    }
                  });
                });
              </script>
            <?php } ?>
              <!-- End Doughnut CHart -->


              <br><br>

               <h5 class="card-title">Loan Applicants Data</h5>

              <!-- Stacked Bar Chart -->
              <canvas id="stakedBarChart" style="max-height: 400px;"></canvas>
              <?php if (isset($graphLoanApplicants)) { ?>

                <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#stakedBarChart'), {
                    type: 'bar',
                    data: {
                      labels: [<?php foreach ($graphLoanApplicants as $key => $value){ 
                        echo "['".$value["status"]."', ],"; 
                      } 
                      ?>],
                      datasets: [{
                          label: 'Loan Applicants Data',
                          data: [<?php foreach ($graphLoanApplicants as $key => $value){ 
                        echo "['".$value["count"]."', ],"; 
                      } 
                      ?>],
                          backgroundColor: 'rgb(255, 99, 132)',
                        },
                        
                      ]
                    },
                    options: {
                      plugins: {
                        title: {
                          display: true,
                          text: 'Loan Data'
                        },
                      },
                      responsive: true,
                      scales: {
                        x: {
                          stacked: true,
                        },
                        y: {
                          stacked: true
                        }
                      }
                    }
                  });
                });
              </script>

            <?php } ?>
              <!-- End Stacked Bar Chart -->

              

            </div>
          </div>
        </div>