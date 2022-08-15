<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
           EDIT CLIENT FORM
        </h2>
    </x-slot>

    <div class = "row">
        <div class = "col-6 offset-3">
            <div class = "card">
                <div class="card-header text-center">
                <h1 >Edit client subscription</h1>
                </div>
                <div class="card-body">
                    <form method ="POST" action = "{{route ('update-client',$client->id)}}">
                        @CSRF
                        @method('put')
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" name = "name" class="form-control" id="name" aria-describedby="nameHelp" value="{{$client->name}}">
                                <div id="nameHelp" class="form-text"></div>
                        </div>   
                        <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                                    <select id="gender" name="gender" class="form-select">
                                    @foreach($gender as $key => $value)
                                            <option value="{{$value}}">{{($key)}}</option>
                                    @endforeach
                                    </select>   
                                    
                        <div class="mb-3">
                            <label for="adress" class="form-label">Adress</label>
                            <input type="text" name = "adress" class="form-control" id="adress" aria-describedby="adressHelp" value="{{$client->adress}}">
                                <div id="adressHelp" class="form-text"></div>
                        </div>   
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="text" name = "email" class="form-control" id="email" aria-describedby="emailHelp" value="{{$client->email}}">
                            <div id="emailHelp" class="form-text"></div>
                        </div> 

                        <div class="mb-3">
                            <label for="birth_date" class="form-label">Birth Date</label>
                            <input type="date" name="birth_date" class="form-control" id="birth_date" aria-describedby="birth_dateHelp" value="{{$client->birth_date}}">
                            <div id="birth_dateHelp" class="form-text"></div>
                        </div>

                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Phone number</label>
                            <input type="text" name="phone_number" class="form-control" id="phone_number" aria-describedby="phone_numberHelp" value="{{$client->phone_number}}">
                            <div id="phone_numberHelp" class="form-text"></div>
                        </div>

                        <div class="mb-3"> 
                        <label for="club_id" class="form-label">Club subscription</label>
                                    <select id="club_id" name="club_id" class="form-select">
                                        @foreach($club_id as $club)
                                            <option value="{{$club->id}}"  @if ($client->club_id === $club->id ) selected @endif>
                                                {{$club->name}} 
                                            </option>

                                        @endforeach
                                    </select>  
                        </div>

                        <div class="mb-3"> 
                        <label for="subscription_id" class="form-label">Apply for subscription</label>
                                    <select id="subscription_id" name="subscription_id" class="form-select">
                                        @foreach($subscription as $subscription)
                                            <option value="{{$subscription->id}}" @if ($client->subscription_id === $subscription->id ) selected @endif>
                                                {{$subscription->name}} :  @foreach($subscription->fitnesses as $fitness) 
                                                                            {{$fitness->name}};
                                                                            @endforeach
                                            </option>

                                        @endforeach
                                    </select>           
                        </div>          
                                    
                        </div>
                            <div class="mb-3"> 
                        <label for="trainer_name" class="form-label">Apply for personal trainer</label>
                                    <select id="trainer_name" name="trainer_name" class="form-select">
                                        @foreach($instructor as $instructor)
                                            <option value="{{$instructor->name}}"> {{$instructor->name}}  Trainer for: @foreach ($instructor->fitnesses as $fitness)
                                        {{$fitness->name}}
                                    @endforeach. Club: {{$instructor->club->name}}
                                            </option>

                                        @endforeach
                                    </select>           
                        </div>
                        
                       
                        <div class="mb-3"> 
                        <label for="subscription_type" class="form-label">Subscription type</label>
                                    <select id="subscription_type" name="subscription_type" class="form-select">
                                        
                                            <option value="Yearly">
                                                Yearly
                                            </option>
                                            <option value="Monthly">
                                                Monthly
                                            </option>
                                        
                                    </select>           
                        </div>
                      
                      
                        <div class="mb-6 text-center">
                            <button type="submit" class="btn btn-primary text-white">Update</button>
                        </div>
                        <div class="mb-3">
                            <a href="{{route('get-clients')}}" class="btn float-end"><img src="https://icon-library.com/images/return-button-icon/return-button-icon-17.jpg" width="50px" height="50px"></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>