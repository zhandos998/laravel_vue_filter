<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            a:hover {
                color: #0056b3;
                text-decoration: none;
            }
            .colname{
                background: rgb(150, 181, 255);
                border-radius: 10px;
                margin: 0px 10px;
            }
            .colequal{
                background: rgb(150, 255, 181);
                border-radius: 10px;
                width: 16.666667% !important;
                margin: 0px 10px;
            }
            .modaldiv{
                margin: 10px;
            }
            .form-control{
                display: inline;
                width: auto;
                margin: 0px 10px;
            }
            .colcheck{
                margin: auto 0px;
            }
            .dropdown{
                padding: 0px;
                margin: 0px 10px;
                display: inline;
                width: auto;
            }
            .dropdown-toggle{
                color: #495057;
                background-color: #fff;
                border: 1px solid #ced4da;
                width: 100%;
            }

            .dropdown-toggle:hover{
                color: #495057;
                background-color: #fff;
                border: 1px solid #ced4da;
            }
            .dropdown-toggle:focus{
                color: #495057;
                background-color: #fff;
                border: 1px solid #ced4da;
                width: 100%;
            }

            .show>.btn-secondary.dropdown-toggle {
                color: #495057;
                background-color: #fff;
                border-color: #ced4da;
            }
        </style>
    </head>
    <body>
        <div class="container">
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
</html>
