<!-- edit Modal -->
<div class="modal fade" id="edit{{$member->id}}" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Edit Member</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
          {!! Form::model($members, ['method' => 'patch', 'route' => ['member.update', $member->id] ]) !!}
            <div class="mb-3">
              {!! Form::label('firstname', 'Firstname') !!}
              {!! Form::text('firstname', $member->firstname, ['class' => 'form-control']) !!}
            </div>
            <div class="mb-3">
              {!! Form::label('lastname', 'Lastname') !!}
              {!! Form::text('lastname', $member->lastname, ['class' => 'form-control']) !!}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        {{Form::button( 'Update', ['class' => 'btn btn-success', 'type' => 'submit'])  }}
        {!! Form ::close()  !!}
     </div>
    </div>
  </div>
</div>

