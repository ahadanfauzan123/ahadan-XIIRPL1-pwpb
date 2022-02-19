@extends('pages.cssMaster')

@section('content')
    

  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-12 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="../assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                  <form method="POST" action="simpanUser">
                    {{ csrf_field() }}
                  <div class="row">
                    <div class="form-group col-12">
                      <label for="first_name">NIK</label>
                      <input id="NIK" type="text" class="form-control" name="NIK" autofocus>
                    </div>
                    <div class="form-group col-12">
                      <label for="first_name">email</label>
                      <input id="email" type="email" class="form-control" name="email" autofocus>
                    </div>
                    <div class="form-group col-12">
                      <label for="last_name">nama lengkap</label>
                      <input id="namaLengkap" type="text" class="form-control" name="namaLengkap">
                    </div>
                  </div>
                 
                 

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                      <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Stisla 2018
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


</body>
</html>
@endsection
