<form action="/" method="post">
    {{ csrf_field() }}

    <h3>Užsakymo forma</h3>

    <div class="form-group">
        <label for="full_name" class="col-sm-2 control-label">Vardas Pavardė</label>
        <div class="col-sm-10" >
            <input type="text" class="form-control" name="full_name" id="full_name" required>
        </div>
    </div>

    <div class="form-group">
        <label for="amount" class="col-sm-2 control-label">Kiekis</label>
        <div class="col-sm-10">
            <select class="form-control" id="amount" name="amount" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="number" class="col-sm-2 control-label">Telefono nr.</label>
        <div class="col-sm-10">
            <input type="tel" class="form-control" id="number" name="number" required>
        </div>
    </div>

    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">El. paštas</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Užsakyti</button>
        </div>
    </div>

</form>