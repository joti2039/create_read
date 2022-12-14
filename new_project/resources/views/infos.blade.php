<div class="container">
    <table class="table mt-5">
       <thead class="bg-danger text-white fw-bold">
       <th>Name</th>
        <th>Id</th>
        <th>Email</th>
        <th>Reg no</th>
       <th>Batch no</th>
   </thead>
   <tbody>
    @foreach($information as $item)
    <tr>
        <td>{{$item['Name']}} </td>
        <td>{{$item['ID']}} </td>
        <td>{{$item['Regi']}} </td>
        <td>{{$item['Email']}} </td>
        <td>{{$item['Batch']}} </td>

    </tr>
   </tbody>
   @endforeach
</table>
</div>
