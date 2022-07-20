<div class="modal fade feedbackModal" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">
            <i class="fas fa-grin-stars mr-2"></i> Feedback
          </h5>
          <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('post.store') }}" method="POST" autocomplete="off">
            @csrf
            <input type="hidden" name="post_type" value="1">
            <label for="problem">Title</label>
            <input type="text" class="form-control" name="title" maxlength = "30" />
            
            <label for="problem">Vehicle Type</label>
            <select name="vehicle_type_id" class="form-control">
                <option value="">Select</option>
                @foreach ($vehicletypes as $vehicle_type)
                    <option value="{{ $vehicle_type->id }}">{{ $vehicle_type->type }}</option>
                @endforeach
            </select>

            <label for="problem">Problem</label>
            <input type="text" class="form-control" name="problem"/>

            <label for="location">Location</label>
            <div class="row">
              <div class="col">
                <input type="text" name="city" class="form-control" placeholder="City">
              </div>
              <div class="col">
                <select id="inputState" class="form-control" name="district">
                  <option selected>Choose District...</option>
                  <option>Colombo</option>
                  <option>Gampaha</option>
                  <option>Kalutara</option>
              </select>
              </div>
            </div>
            

            <label for="garage" class="mt-2">Garage</label>
            <input type="text" name="garage" id="garage_name" class="form-control">

            <label for="feedback" class="mt-2">Feedback</label>
            <input type="text" class="form-control" name="feedback"/>

            <label for="inputImages" class="mt-2">Image File <small>(Max size : 2MB)</small></label>
            <input type="file" class="form-control" id="customFile" />
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">
            Close
          </button>
          <button type="submit" class="btn btn-primary">Post</button>
          </form>
        </div>
      </div>
    </div>
</div>
	<script>
		var path = "{{ route('autocomplete_garage_name')  }}";
        $('#garage_name').typeahead({
            // minLength: 2,
            source:  function (query, process) {
                return $.get(path, { term: query }, function (data) {
                    return process(data);
                });
            },
            // afterSelect: function (item) {
				    //     $("#garage_id").val(item)
                
            // }
        });

    </script>