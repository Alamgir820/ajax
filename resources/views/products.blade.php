<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ajax demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >

    
  </head>
  <body>


    <div class="container">
        <div class="roW">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                <h2 class="my-2 text-center">ajax crud</h2>
                <a class="btn btn-success my-3 " data-bs-toggle="modal" data-bs-target="#addModal" href="">Add product</a>
                <div class="table-data">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $key=>$product)
                            <tr>
                                <th>{{ ++$key }}</th>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    <a  href=""
                                    class="btn btn-success update_product_form "
                                    data-bs-toggle="modal"
                                    data-bs-target="#updateModal"
                                    data-id="{{ $product->id }}"
                                    data-name="{{ $product->name }}"
                                    data-price="{{ $product->price }}"
                                    
                                    >                                       
                                      <i class="lar la-edit"></i>
                                    </a>
                                    <a  href=""
                                    class="btn btn-danger delete_product"
                                    data-id="{{ $product->id }}"
                                    >
                                    <i class="las la-times"></i></i></a>
                                </td>
                              </tr>
                            @endforeach
                        </tbody>
                      </table>
                      {!! $products->links() !!}
                </div>

                 </div>
            


        </div>
    </div>

    @include('add_product_modal')
    @include('update_product_modal')
   @include('product_js')
  </body>
</html>