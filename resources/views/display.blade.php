
<!DOCTYPE html>
<html lang="en">
    <body>
      <table border = 1>
         <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Description</td>
            <td>Product Price</td>
            <td>Barcode</td>
            <td>Product Type</td>
         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->title }}</td>
            <td>{{ $user->description }}</td>
            <td>{{ $user->product_price }}</td>
            <td>{{ $user->barcode }}</td>
            <td>{{ $user->product_type }}</td>
         </tr>
         @endforeach
      </table>
      <p id="demo"></p>
    
         </body>
         </html>
   
    