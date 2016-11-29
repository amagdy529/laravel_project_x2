<table class="table table-responsive" id="tweets-table">
    <thead>
        <th>Body</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($tweets as $tweet)
        <tr>
            <td>{!! $tweet->body !!}</td>
            <td>
                {!! Form::open(['route' => ['tweets.destroy', $tweet->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tweets.show', [$tweet->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tweets.edit', [$tweet->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>