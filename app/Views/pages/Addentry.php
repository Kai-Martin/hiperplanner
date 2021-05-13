<div class="container">
  <div class="row justify-content-md-center">
      <div class="col-6">
          <h1>Add time away</h1>
          <form action="<?= base_url();?>addentry/save" method="post">
            <div class="input-group input-daterange">
              <input type="date" class="form-control" value="" name="date_start">
              <div class="input-group-addon">to</div>
              <input type="date" class="form-control" value="" name="date_end">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
          </form>
      </div>
  </div>
</div>
