<script id="ambulanceActionTemplate" type="text/x-jsrender">
   <a title="Edit" class="btn action-btn btn-success btn-sm" href="{{:url}}">
            <i class="fa fa-edit action-icon"></i>
   </a>
   <a title="View" class="btn action-btn btn-primary btn-sm" href="{{:viewUrl}}">
            <i class="fa fa-eye action-icon"></i>
   </a>
   <a title="Delete" class="btn action-btn btn-danger btn-sm delete-btn" data-id="{{:id}}">
            <i class="fa fa-trash action-icon"></i>
   </a>
</script>

<script id="ambulanceIsAvailableTemplate" type="text/x-jsrender">
    <label class="switch switch-label switch-outline-primary-alt swich-center">
         <input name="is_available" data-id="{{:id}}" class="switch-input is-active" type="checkbox" value="1" {{:checked}} >
          <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
    </label>
</script>
