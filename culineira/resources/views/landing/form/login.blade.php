<form action="/login" method="POST">
    @csrf
    <a class="text-white">Username</a>
    <input class="form-control" type="text" name="username" required></input>
    <a class="text-white">Password</a>
    <input class="form-control" type="password" name="password" required></input>
    <div class="row mt-2">
        <div class="col-md-8">
            <a class="btn btn-link text-white" style="font-size:13px;">Forget Password</a>
        </div>
        <div class="col-md-4">
            <button class="btn btn-success w-100" type="submit">Submit</button>
        </div>
    </div>
</form>
