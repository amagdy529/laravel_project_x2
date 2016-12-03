<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::date('date', null, ['class' => 'form-control']) !!}
</div>

<!-- Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('time', 'Time:') !!}
    {!! Form::text('time', null, ['class' => 'form-control']) !!}
</div>

<!-- Complaint Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('complaint', 'Complaint:') !!}
    {!! Form::textarea('complaint', null, ['class' => 'form-control']) !!}
</div>

<!-- Diagnoses Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('diagnoses', 'Diagnoses:') !!}
    {!! Form::textarea('diagnoses', null, ['class' => 'form-control']) !!}
</div>

<!-- Diagnoses Field -->
<div class="form-group col-sm-12 col-lg-12">
    <!-- {!! Form::label('patient', 'patient:') !!}
    {!! Form::text('patient_id', null, ['class' => 'form-control']) !!} -->

    <select value="patient_id" name="patient_id" >
      @foreach($users as $user)
        <option value="{{$user->id}}">{{$user->name}}</option>
      @endforeach
    </select>
</div>

<!-- Visit Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('visit_status', 'Visit Status:') !!}
    {!! Form::text('visit_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('visits.index') !!}" class="btn btn-default">Cancel</a>
</div>
