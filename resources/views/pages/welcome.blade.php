@extends('main') 

@section('title'.'|Homepage')

@section('content')

        
    <div class="row" >
            <div class="col-md-12">
               <div class="jumbotron "> 

                   
                  <h1 style="color:black ;">Welcome to Ruk wiki</h1>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>

          <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Posts</a> </p> 
           

                      <p></p>

            
              </div>
            </div>
    </div> <!-- end of row -->
     
  <div class="row">
         <div class="col-md-8">
             
            @foreach($posts as $post)

            <div class="post">
                   <h3>{{ $post-> title}}</h3>
                      <p> {{ substr(strip_tags($post->body),0 ,300) }} {{strlen( strip_tags($post-> body)) >300 ?"...": ""}}</p>
                          <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-success">Read More</a>
            </div>
          
      <hr>

      @endforeach


      </div>
         <div class="col-md-3 col-md-offset-1">
             <h2>Sidebar</h2>
             
         </div>

      </div>

@stop


