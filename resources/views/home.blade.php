@extends('template')

@section('content')
	  <br>	
	  <br>
	  <br>
      <div class="container">

         <section class="jumbotron text-center">
            <div class="container">
               <h1 class="jumbotron-heading">Pustaka JR Corp.</h1>
               <p class="lead text-muted">Pustaka Dokumen Koorporasi</p>
               <p>
                  <a href="{{ route('register') }}" class="btn btn-primary">Daftar Disini</a>
                  <a href="{{ route('login') }}" class="btn btn-secondary">Sudah Punya Akun? Login</a>
               </p>
            </div>
         </section>
      </div>
   </body>
	  <br>
	  <br>
	  <br>
	  <br>
	  
   @endsection