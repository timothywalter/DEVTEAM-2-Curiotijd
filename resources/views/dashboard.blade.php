@extends('layout.main')


@section('content')
    <div class="container">
        <h1>dashboard</h1>
        <h2>Welkom bij Curiotijd, $name</h2>
        <hr>
        <div class="row">
            {{-- Left task bar --}}
            <div class="col-2 border">
                <h3>Taken:</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis velit quibusdam officiis itaque impedit sapiente nesciunt voluptatibus. Itaque excepturi, fuga nisi id autem quia, modi rem vel voluptatibus minus aperiam.</p>
            </div>

            <div class="col-5">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, laudantium necessitatibus obcaecati maxime, temporibus cupiditate aliquid ipsam quisquam, sequi tempora omnis amet natus? Necessitatibus rerum accusantium, libero consectetur obcaecati deserunt.</p>
            </div>
            <div class="col-5">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum provident porro magni iusto, numquam sunt voluptas illum maiores obcaecati incidunt. Quam culpa voluptates quas, repellendus et excepturi sint maxime vero!</p> 
            </div>
        </div>
    </div>
    
@endsection