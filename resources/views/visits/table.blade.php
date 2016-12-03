<table class="table table-responsive" id="visits-table">
    <thead>
        <th>Date</th>
        <th>Time</th>
        <th>Complaint</th>
        <th>Diagnoses</th>
        <th>Patient Id</th>
        <th>Visit Status</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>

    @foreach($visits as $visit)
        <tr>
            <td>{!! $visit->date !!}</td>
            <td>{!! $visit->time !!}</td>
            <td>{!! $visit->complaint !!}</td>
            <td>{!! $visit->diagnoses !!}</td>
            @foreach($patients_names as $name)
            <?php echo  print_r($patients_names); ?>
              <td>{!! $name  !!}</td>
            @endforeach
            <td>{!! $visit->visit_status !!}</td>
            <td>
                {!! Form::open(['route' => ['visits.destroy', $visit->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('visits.show', [$visit->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('visits.edit', [$visit->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
