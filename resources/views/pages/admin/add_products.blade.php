
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
                    <li class="breadcrumb-item active" aria-current="page">Add New Product</li>
                  </ol>
                </nav>
              </div>
              <div class="ms-auto">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary">Settings</button>
                  <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                    <a class="dropdown-item" href="javascript:;">Another action</a>
                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                    <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                  </div>
                </div>
              </div>
            </div>
            <!--end breadcrumb-->

              <div class="row">
                 <div class="col-lg-12 mx-auto">
                 <form class="row g-3" action="{{route('adminAddProductForm')}}" method="POST" enctype="multipart/form-data">
                 @csrf
                  <div class="card">
                    <div class="card-header py-3 bg-transparent"> 
                      <div class="d-sm-flex align-items-center">
                        <h5 class="mb-2 mb-sm-0">Add New Product</h5>
                        <div class="ms-auto">
                          <button type="submit" class="btn btn-secondary">Save to Draft</button>
                          <button type="button" class="btn btn-primary">Publish Now</button>
                        </div>
                      </div>
                     </div>
                    <div class="card-body">
                       <div class="row g-3">
                         <div class="col-12 col-lg-8">
                            <div class="card shadow-none bg-light border">
                              <div class="card-body">
                               
                               
                                  <div class="col-12">
                                    <label class="form-label">Название</label>
                                    <input type="text" class="form-control" placeholder="Product title" name="name">
                                  </div>
                                 
                                  <div class="col-12">
                                    <label class="form-label">Количесво</label>
                                    <input type="text" class="form-control" placeholder="Количество" name="count">
                                  </div>
                                  <div class="col-12">
                                    <label class="form-label">Images</label>
                                    <input class="form-control" type="file" name="img">
                                  </div>
                                  <div class="col-12">
                                    <label class="form-label">Full description</label>
                                    <textarea class="form-control" placeholder="Full description" rows="4" cols="4"></textarea>
                                  </div>
                                
                              </div>
                            </div>
                         </div>

                         <div class="col-12 col-lg-4">
                            <div class="card shadow-none bg-light border">
                              <div class="card-body">
                                  <div class="row g-3">
                                    <div class="col-12">
                                      <label class="form-label">Новая цена</label>
                                      <input type="text" class="form-control" placeholder="Price" name="current_price">
                                    </div>
                                    <div class="col-12">
                                      <label class="form-label">Старая цена</label>
                                      <input type="text" class="form-control" placeholder="Price" name="old_price">
                                    </div>
                                    <div class="col-12">
                                      <label class="form-label">Статус</label>
                                      <select class="form-select" name="status">
                                        <option value="1">Активен</option>
                                        <option value="0">Не активен</option>
                                      </select>




                                      
                                    </div>
                                    <div class="col-12">
                                      <label class="form-label">Tags</label>
                                      <input type="hidden" class="form-control" placeholder="Tags" name="tags[]">
                                      <div class="col-12">
                                      <div class=" align-items-center gap-2">
                                        <div>
                                          <p>Выбранные тэги</p>
                                          <div class="selected_tags"></div>
                                        </div>
                                        <p>Выбирайте тэг</p>
                                        @foreach($tags as $tag)
                                                                           
                                        <a href="javascript:;" class="btn btn-sm btn-light border shadow-sm bg-white tag_on" data-id="{{$tag->id}}">{{$tag->name}} <i class="bi bi-x"></i></a>
                                        
                                        @endforeach
                                        </div>
                                      </div>
                                    </div>
                                    </div>
                                    <div class="col-12">
                                    <label class="form-label">Категория</label>
                                    <select class="form-select" name="category">
                                    <option value="" disabled selected>Выберайте категорию</option>
                                      @foreach($categories as $category)
                                        <option value="{{ $category->id}}">{{$category->name}}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                   
                                    </form>
                                  </div><!--end row-->
                              </div>
                            </div>  
                        </div>

                       </div><!--end row-->
                     </div>
                    </div>
                 </div>
              </div><!--end row-->

          </main>


          <script>

          let tagsEl = document.querySelectorAll(".tag_on");
          console.log(tagsEl);
          let tags = []
          let tagsSelected = []
            for(let tagEl of tagsEl){

            

                tags.push({'id':tagEl.getAttribute('data-id'), 'name':tagEl.innerHTML});
                tagEl.addEventListener("click", (evt)=>{
                  evt.preventDefault;
                 let id =  evt.target.getAttribute('data-id');

                  for (let tag of tags){
                    if(tag.id==id){
                      tagsSelected.push(tag);
                      document.querySelector(".selected_tags").innerHTML += `<a href="javascript:;" class="btn btn-sm btn-light border shadow-sm bg-white tag_on">${tag.name} <i class="bi bi-x"></i></a>`
                      break;
                    }
                  }
                  
                })
            }
          </script>
          @endsection