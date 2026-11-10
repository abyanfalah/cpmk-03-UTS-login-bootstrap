<form method="post">
    @csrf

    <div style="display:none;">
        <input name="email" value="budi@mail.com" type="email" class="form-control" placeholder="budi@mail.com"
            id="exampleInputEmail1" aria-describedby="emailHelp">
        <input name="password" placeholder="1234" value="1234" type="password" class="form-control" </div>
    </div>



    <button type="submit" class="btn-solid theme-warning">Auto login</button>
</form>