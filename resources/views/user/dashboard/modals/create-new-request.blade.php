
  <!-- Modal -->
  <div class="modal fade" id="createRequestModal" tabindex="-1" role="dialog" aria-labelledby="createRequestModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="createRequestModalLabel">Create New Request</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{ url('dashboard/request/create') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleTextField">Title of your help post</label>
              <input type="text" name="title" class="form-control" id="exampleTextField" placeholder="Enter title">
            </div>
            <div class="form-group">
              <label for="exampleTextArea">Describe your need</label>
              <textarea class="form-control" name="description" id="exampleTextArea" rows="3" placeholder="Enter description"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleSelect">Help Category</label>
              <select class="form-control" name="category" id="exampleSelect">
                <option value="Counseling">Counseling</option>
                <option value="Food items">Food items</option>
                <option value="Clothing">Clothing</option>
                <option value="Financial">Financial</option>
                <option value="Medical">Medical</option>
                <option value="Academical">Academical</option>
                <option value="Shelter">Shelter</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFile">Upload Your Video</label>
              <input type="file" name="help_video" class="form-control-file" id="exampleFile" accept="video/*">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  