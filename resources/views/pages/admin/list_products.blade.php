@extends('layouts/'.$template)

@section('content')

<main class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
              <div class="breadcrumb-title pe-3">eCommerce</div>
              <div class="ps-3">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Products List</li>
                  </ol>
                </nav>
              </div>
              <div class="ms-auto">
                <div class="btn-group">
                  <a href="{{route('adminAddProducts')}}" class="btn btn-primary">add products</a>
                  
                </div>
              </div>
            </div>
            <!--end breadcrumb-->
            @if(session('success'))
                        
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          {{session('success')}}
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        @if($errors->any())

@foreach ($errors->all() as $error)

<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{$error}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endforeach


<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{session('error')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
              <div class="card">
                <div class="card-header py-3">
                  <div class="row align-items-center m-0">
                    <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                        <select class="form-select">
                            <option>All category</option>
                            <option>Fashion</option>
                            <option>Electronics</option>
                            <option>Furniture</option>
                            <option>Sports</option>
                        </select>
                    </div>
                    <div class="col-md-2 col-6">
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-md-2 col-6">
                        <select class="form-select">
                            <option>Status</option>
                            <option>Active</option>
                            <option>Disabled</option>
                            <option>Show all</option>
                        </select>
                    </div>
                 </div>
                </div>
                <div class="card-body">

                  <div class="table-responsive">
                    <table class="table align-middle table-striped">
                      <thead>
                        <tr>
                          <td></td>
                          
                          <td>Название товара</td>
                          <td>Стоимость</td>
                          <td>Количество</td>
                          <td>Наличие</td>
                          <td>Категория</td>
                          <td>Дата Добавления</td>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($products as $product)
                        <tr>
                          <td>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox">
                            </div>
                          </td>
                          <td class="productlist">
                            <a class="d-flex align-items-center gap-2" href="#">
                              <div class="product-box">
                                  <img src="/storage/images/{{$product->image}}" alt="">
                              </div>
                              <div>
                                  <h6 class="mb-0 product-title">{{$product->name}}</h6>
                              </div>
                             </a>
                          </td>
                          @if($product->old_price!=null)  
                          <td><span>{{$product->current_price }} руб
                          @else
                          <td><span>Бесплатно!
                          @endif  
                          @if($product->old_price!=null)  
                          <s>{{$product->old_price }} руб</s></span></td>
                          @endif
                          <td><span>{{$product->count }}</span></td>
                          <td>
                            @if($product->status == 1)
                            <span class="badge rounded-pill alert-success">На складе</span>
                            @else
                            <span class="badge rounded-pill alert-danger">Нет в наличии</span>
                            @endif
                          </td>
                          <td><span>{{$product->category->name }}</span></td>
                          <td><span>5-31-2020</span></td>
                          <td>
                            <div class="d-flex align-items-center gap-3 fs-6">
                              <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                              <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                              <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                            </div>
                          </td>
                        </tr>
                        @endforeach
                        
                        
                      </tbody>
                    </table>
                  </div>

            <nav class="float-end mt-4" aria-label="Page navigation">
              <ul class="pagination">
                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul>
            </nav>

  </div>
</div>

 </main>
  @endsection