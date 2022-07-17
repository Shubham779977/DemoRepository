<html>
   
   <head>
      <title>View Employee Records</title>
   </head>
   
   <body>
      
         @foreach ($emps as $user)
         <table>
         <tr>
             <td>{{ $user->name }}</td>
             <td>{{ $user->email }}</td>
             <td>{{ $user->password }}</td>
         </tr>
         @endforeach
      </table>
   
   </body>
</html>
