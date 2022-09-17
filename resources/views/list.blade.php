<div class="table">

    <table>
        @foreach($persons as $person)
            <thead>
                <td>
                    {{$person->name}}, <b>{{$person->email}}</b>, <b>{{$person->level}}</b>, <b>{{$person->experience}}</b>, <a href="delete/{{$person->name}}">DELETE</a> or <a href="/update/{{$person->id}}">UPDATE</a>
                </td>
            </thead>
        @endforeach
    </table>

    <div class="pagination"> {{ $persons->links('vendor.pagination.simple-bootstrap-4') }} </div>

</div>


