
<!-- Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
  <form action="" method="POST" id="updateproductForm">
    @csrf
    <input type="hidden" id="up_id">
    <div class="modal-dialog"> 
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="addModalLabel">Add product</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="errMsgC">

            </div>
            <div class="form-group">
                <label for="name">Product name</label>
                <input type="text" class="form-control" name="up_name" id="up_name" placeholder="Product name">
            </div>
            <div class="form-group my-4">
                <label for="price">Product price</label>
                <input type="text" class="form-control" name="up_price" id="up_price" placeholder="product price">

            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary update_product">Update product</button>
          </div>
        </div>
      </div>
  </form>
</div>