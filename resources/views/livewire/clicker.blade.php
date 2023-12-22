<div class="container mt-5">
    <div class="row">
        <div class="col-xl-6 col-lg-8 col-md-10 mx-auto">
            <div>
                @if( session('success' ))
                    <div class="alert alert-success rounded m-3" role="alert">{{session('success')}}</div>
                @endif
                <form wire:submit="createNewUser" action="">
                    <div class="mb-3">
                        <label for="input1" class="form-label">Name</label>
                        <input wire:model="name" type="text" class="form-control" id="input1" placeholder="Name">
                        @error('name')
                            <div class="form-text text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="input1" class="form-label">Email address</label>
                        <input wire:model="email" type="email" class="form-control" id="input1" placeholder="email@email.com">
                        @error('email')
                            <div class="form-text text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="input1" class="form-label">Password</label>
                        <input wire:model="password" type="password" class="form-control" id="input1" placeholder="*****">
                        @error('password')
                            <div class="form-text text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <button class="btn btn-primary">Create</button>
                </form>
            
                <hr>
            
                @foreach ($users as $user)
                    <p>{{$user->name}}</p>
                @endforeach

                {{$users->links()}}
            </div>
            
        </div>
    </div>
</div>