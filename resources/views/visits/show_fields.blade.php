<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $visit->id !!}</p>
</div>

<!-- Date Field -->
<div class="form-group">
    {!! Form::label('date', 'Date:') !!}
    <p>{!! $visit->date !!}</p>
</div>

<!-- Time Field -->
<div class="form-group">
    {!! Form::label('time', 'Time:') !!}
    <p>{!! $visit->time !!}</p>
</div>

<!-- Complaint Field -->
<div class="form-group">
    {!! Form::label('complaint', 'Complaint:') !!}
    <p>{!! $visit->complaint !!}</p>
</div>

<!-- Diagnoses Field -->
<div class="form-group">
    {!! Form::label('diagnoses', 'Diagnoses:') !!}
    <p>{!! $visit->diagnoses !!}</p>
</div>

<!-- Patient Id Field -->
<div class="form-group">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    <p>{!! $visit->patient_id !!}</p>
</div>

<!-- Visit Status Field -->
<div class="form-group">
    {!! Form::label('visit_status', 'Visit Status:') !!}
    <p>{!! $visit->visit_status !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $visit->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $visit->updated_at !!}</p>
</div>

