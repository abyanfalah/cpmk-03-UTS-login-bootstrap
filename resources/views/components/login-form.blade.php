<form method="post">
    @csrf

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input required name="email" type="email" class="form-control" placeholder="budi@mail.com"
            id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input required name="password" placeholder="1234" type="password" class="form-control"
            id="exampleInputPassword1">
    </div>

    <button type="submit" class="btn-solid theme-primary">Login</button>
</form>

@include('components.auto-login-button')
