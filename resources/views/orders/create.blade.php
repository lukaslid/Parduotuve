<form id="create_order" action="/" method="post">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="full_name" class="col-sm-7 control-label">Vardas, Pavardė</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="full_name" id="full_name" required>
        </div>
    </div>

    <div class="form-group">
        <label for="number" class="col-sm-7 control-label">Telefono nr.</label>
        <div class="col-sm-10">
            <input type="tel" class="form-control" id="number" name="number" required>
        </div>
    </div>

    <div class="form-group">
        <label for="email" class="col-sm-7 control-label">El. paštas</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
    </div>

    <div class="form-group text-center">
        <div class="col-sm-offset-2 col-sm-10">
            <button class="btn btn-primary" name="create">Patvirtinti</button>
            <button class="btn btn-default" name="cancel" data-dismiss="modal">Uždaryti</button>
        </div>
    </div>
</form>
