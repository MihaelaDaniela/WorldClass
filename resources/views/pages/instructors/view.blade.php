<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{$instructors->name}}
        </h2>
    </x-slot>

    <div class="row">
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <ul>
                        <li>Name: {{$instructors->name}}</li>                        
                        <li>Status: {{strtoupper($instructors->status)}}</li>
                        <li>Service: @foreach ($instructors->fitnesses as $fitness)
                                        {{$fitness->name}}
                                    @endforeach</li>
                        <li>Working on club: {{$instructors->club->name}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="card">
                <div class="card-body">
                <div class="row">
                    <div class="col-7">
                            <h1>Description: </h1></br><h4><br>{{$instructors->description}}</h4>
                        </div>
                        <div class="col-5">
                        <a href="{{route('get-instructor')}}" class="btn float-end"><img src="https://icon-library.com/images/return-button-icon/return-button-icon-17.jpg" width="50px" height="50px"></a>
                            <img class="mt-5 img-fluid" style="float:right" width="700px" height="800px" src="/{{$instructors->upload_file}}">
                            
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

