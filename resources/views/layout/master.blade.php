@extends('pages.cssMaster')

@section('content')
    
<div id="app">
  <div class="main-wrapper">
    <div class="navbar-bg">
      
      {{-- navbar --}}
      @include('layout.navbar')
    </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
    
    {{-- sidebar --}}
    @include('layout.sidebar')
    
    <!-- Main Content -->
    <div class="main-content">
      <section class="section">
        <div class="section-header">
          @yield('halaman')
        </div>
        <div class="section-body">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4>@yield('judul_card')</h4>
              </div>
              @yield('body')
              
              <div class="card">
                <div class="card-header">
                  <h4>The Bootstrap Way</h4>
                </div>
                <div class="card-body">
                  <p class="mb-2">Use the Bootstrap method to create modal. You need to create an HTML structure for modal and the following button will trigger it.</p>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Aw, yeah!</button>
                </div>
              </div>
              
            </section>
          </div>
          <footer class="main-footer">
            <div class="footer-left">
              Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
            </div>
            <div class="footer-right">
              2.3.0
            </div>
          </footer>
        </div>
      </div>
      
      <!-- General JS Scripts -->
      
      
      <!-- Page Specific JS File -->
      
      </html>
      
      @endsection