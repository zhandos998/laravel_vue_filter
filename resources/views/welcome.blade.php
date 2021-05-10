<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div id="app">
            {{-- <front-page></front-page> --}}
        </div>
        {{-- --------------------------------------------------------------------------------------------------------- --}}
        {{-- <div class="container">
            <div style="margin: 10px;">
                <a data-toggle="modal" data-target="#exampleModal" href=""><img style="width: 15px;" src="{{ asset("filter.svg") }}"/>Создать фильтр</a>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Фильтр</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="/">
                                    @csrf
                                    <div class="modaldiv row">
                                        <input class="colcheck" type="checkbox" name="check[]" value="0">
                                        <label class="col-sm-2 col-form-label colname">ID</label>
                                        <select class="col-sm-2 form-control colequal" name="select[]">
                                            <option value="equal" selected>equal</option>
                                            <option value="more">more</option>
                                            <option value="less">less</option>
                                        </select>
                                        <input class="form-control" name="column_val[]">

                                    </div>
                                    <div class="modaldiv row">
                                        <input class="colcheck" type="checkbox" name="check[]" value="1">
                                        <label class="col-sm-2 col-form-label colname">Name</label>
                                        <select class="col-sm-2 form-control colequal" name="select[]">
                                            <option value="equal" selected>equal</option>
                                            <option value="more">like</option>
                                          </select>
                                        <input class="form-control" name="column_val[]">
                                    </div>
                                    <div class="modaldiv row">
                                        <input class="colcheck" type="checkbox" name="check[]" value="2">
                                        <label class="col-sm-2 col-form-label colname">Article</label>
                                        <select class="col-sm-2 form-control colequal" name="select[]">
                                            <option value="equal" selected>equal</option>
                                            <option value="more">like</option>
                                          </select>
                                        <input class="form-control" name="column_val[]">
                                    </div>
                                    <div class="modaldiv row">
                                        <input class="colcheck" type="checkbox" name="check[]" value="3">
                                        <label class="col-sm-2 col-form-label colname">Category</label>
                                        <label class="col-sm-2 col-form-label colequal">Select</label>
                                        <input style="display: none" name="column_val[]" value="None">
                                        <input style="display: none" name="select[]" value="None">
                                        <div class="col-sm-2 dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                                              Dropdown button
                                            </button>
                                            <div class="dropdown-menu">
                                                @foreach ($categories as $category)
                                                <label class="dropdown-item">
                                                    <input type="checkbox" name="categories[]" value="{{$category->category}}">{{$category->category}}</label>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modaldiv row">
                                        <input class="colcheck" type="checkbox" name="check[]" value="4">
                                        <label class="col-sm-2 col-form-label colname">Weight</label>
                                        <select class="col-sm-2 form-control colequal" name="select[]">
                                            <option value="equal" selected>equal</option>
                                            <option value="more">more</option>
                                            <option value="less">less</option>
                                          </select>
                                        <input class="form-control" name="column_val[]">
                                    </div>
                                    <div class="modaldiv row">
                                        <input class="colcheck" type="checkbox" name="check[]" value="5">
                                        <label class="col-sm-2 col-form-label colname">Price</label>
                                        <select class="col-sm-2 form-control colequal" name="select[]">
                                            <option value="equal" selected>equal</option>
                                            <option value="more">more</option>
                                            <option value="less">less</option>
                                          </select>
                                        <input class="form-control" name="column_val[]">
                                    </div>
                                    <div class="modaldiv row">
                                        <input class="colcheck" type="checkbox" name="check[]" value="6">
                                        <label class="col-sm-2 col-form-label colname">Status</label>
                                        <label class="col-sm-2 col-form-label colequal">Select</label>
                                        <input style="display: none" name="column_val[]" value="None">
                                        <input style="display: none" name="select[]" value="None">
                                        <div class="col-sm-2 dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                                              Dropdown button
                                            </button>
                                            <div class="dropdown-menu">
                                                @foreach ($statuses as $status)
                                                <label class="dropdown-item">
                                                    <input type="checkbox" name="statuses[]" value="{{$status->status}}">{{$status->status}}</label>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modaldiv row">
                                        <input class="colcheck" type="checkbox" name="check[]" value="7">
                                        <label class="col-sm-2 col-form-label colname">Added date</label>
                                        <select class="col-sm-2 form-control colequal" name="select[]">
                                            <option value="equal" selected>equal</option>
                                            <option value="later">later</option>
                                            <option value="earlier">earlier</option>
                                        </select>
                                        <input class="form-control" name="column_val[]">
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                                        <button type="submit" name="submitted" value="submit" class="btn btn-primary">Отправить сообщение</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col" >ID<img class="float-right" style="width: 15px;"/></th>
                    <th scope="col" >Name<img class="float-right" style="width: 15px;"/></th>
                    <th scope="col" >Article<img class="float-right" style="width: 15px;"/></th>
                    <th scope="col" >Category<img class="float-right" style="width: 15px;"/></th>
                    <th scope="col" >Weight<img class="float-right" style="width: 15px;"/></th>
                    <th scope="col" >Price<img class="float-right" style="width: 15px;"/></th>
                    <th scope="col" >Status<img class="float-right" style="width: 15px;"/></th>
                    <th scope="col" >Added date<img class="float-right" style="width: 15px;"/></th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{$product->id}}</th>
                        <td>{{$product->name}}</td>
                        <td>{{$product->article}}</td>
                        <td>{{$product->category}}</td>
                        <td>{{$product->weight}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->status}}</td>
                        <td>{{$product->created_at}}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> --}}
        <script src="{{mix('js/app.js')}}"></script>
    </body>
</html>
