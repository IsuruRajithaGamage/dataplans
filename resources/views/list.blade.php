<h1>Hello</h1>
<table>
    <tr>
        {{-- <td>Id</td> --}}
        <td>provider</td>
        <td>price</td>
        <td>day</td>
        <td>Night</td>
        <td>Activate</td>
    </tr>
    @foreach ($teachers as $teacher)
    <tr>
        {{-- <td>{{$teacher['id']}}</td> --}}
        <td>{{$teacher['provider']}}</td>
        <td>{{$teacher['price']}}</td>
        <td>{{$teacher['day']}}</td>
        <td>{{$teacher['night']}}</td>
        <td>{{$teacher['activate']}}</td>
        

    </tr>
        
    @endforeach
   
</table>