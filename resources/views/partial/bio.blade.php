<h3 @class([
        'color'=> true,
        'font-size'=> false
])>My name is {{$firstname}} {{$lastname}}</h3>
@php
$persons = [
        [
                'name'=> 'Oginni Olajumoke',
                'gender'=>'Female'
        ],
        [
                'name'=> 'Alex James',
                'gender'=>'Male'
        ],
        [
                'name'=> 'Oginni Olajumoke',
                'gender'=>'Female'
        ],
        [
                'name'=> 'Alex James',
                'gender'=>'Male'
        ]
]
@endphp
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Gender</th>
    </tr>
    <tbody>
    @foreach($persons as $person)
    <tr @class (['even' => $loop->even, 'odd' => $loop ->odd])>
        <td>{{$person ['name']}}</td>
        <td>{{$person ['gender']}}</td>
    </tr>
    @endforeach
    </tbody>
    </thead>
</table>


<style>
    .even{
        background: deeppink;
    }
    .odd{
        background: purple;
    }
</style>
