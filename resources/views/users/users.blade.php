@if(count($users)>0)
 <div class='user_information'>
     @foreach($users as $user)
        <div>{{$user->name}}</div>
        <div>{!!link_to_route('users.show', 'View Profile', ['id'=>$user->id])!!}</div>
    @endforeach
@endif
{!! $users->render()!!}
 </div>