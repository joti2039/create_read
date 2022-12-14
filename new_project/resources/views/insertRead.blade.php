<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <title>Document</title>
    <style>
    .gradient-custom {
        /* fallback for old browsers */
        background: #1d0a72;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to bottom right, rgb(72, 35, 233), rgb(53, 25, 156));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to bottom right, rgb(35, 6, 161), rgb(20, 13, 116))
        }

        .card-registration .select-input.form-control[readonly]:not([disabled]) {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
        }
        .card-registration .select-arrow {
        top: 13px;
        }
        </style>


</head>

<body>


    <form action="insertData" method="POST" enctype="multipart/form-data">
        @csrf
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
              <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                  <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                      <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Student Information</h3>
                      <form>

                        <div class="row">
                          <span class="col-md-6 mb-4">

                            <span class="form-outline">
                              <input type="text" id="firstName" class="form-control form-control-lg" name="Name" />
                              <label class="form-label" for="firstName">Name</label>
                            </span>

                        </span>


                        </div>

                        <div class="row">
                          <div class="col-md-6 mb-4 d-flex align-items-center">

                            <div class="form-outline datepicker w-100">
                              <input type="text" class="form-control form-control-lg" id="birthdayDate" name="ID" />
                              <label for="birthdayDate" class="form-label">ID</label>
                            </div>

                          </div>


                        <div class="row">
                          <div class="col-md-6 mb-4 pb-2">

                            <div class="form-outline">
                              <input type="text" id="emailAddress" class="form-control form-control-lg" name="Regi"/>
                              <label class="form-label" for="emailAddress">Registration no.</label>
                            </div>

                          </div>
                          <div class="col-md-6 mb-4 pb-2">

                            <div class="form-outline">
                              <input type="email" id="phoneNumber" class="form-control form-control-lg"Name="Email"/>
                              <label class="form-label" for="phoneNumber">Email</label>
                            </div>

                          </div>
                        </div>

                        <div class="col-md-6 mb-4 pb-2">

                            <div class="form-outline">
                              <input type="text" id="phoneNumber" class="form-control form-control-lg"Name="Batch"/>
                              <label class="form-label" for="phoneNumber">Batch</label>
                            </div>

                          </div>
                        </div>

                        <div class="mt-4 pt-2">
                          <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                        </div>

                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>

</body>


</html>
