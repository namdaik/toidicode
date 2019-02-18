@extends('layout.index')
@section('content') 
  <div id="primary" class="vce-main-content">
        <main id="main" class="main-box main-box-single">
            <article id="post-899" class="vce-single">

                <header class="entry-header">
                    <h1 class="entry-title">Đăng Nhập</h1>
                    <hr>
                </header>
                <div class="entry-content">
                  <div class="card ">
                    <div class="card ">
                        <div class="card-body" style="
                          width: 300px;
                          display: block;
                          margin: auto;
                          ">
                          <form method="post" action="">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                              <label for="exampleEmail" class="bmd-label-floating">Email Address</label>
                              <input type="email" name="email" class="form-control" id="exampleEmail">
                            </div>
                            <div class="form-group">
                              <label for="examplePass" class="bmd-label-floating">Password</label>
                              <input type="password" name="password" class="form-control" id="examplePass">
                            </div>
                            <div class="es_button" style="margin: 5px">
                              <input class="es_textbox_button" name="es_txt_button" style="width: 100%" id="es_txt_button" value="Submit" type="submit">
                              
                            </div>
                          </form>
                        </div>
                        
                      </div>
                    
                  </div>
                </div>
                
        </main>
    </div>

@endsection